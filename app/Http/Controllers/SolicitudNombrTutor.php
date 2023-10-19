<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Carrera;
use App\Models\Director_Carrera;
use Barryvdh\DomPDF\Facade\Pdf;

class SolicitudNombrTutor extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['carreras'] = Carrera::all();
        return view('solicitudNombTutor', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosFormulario = request()->except('_token');
        $datosEstudiante = request()->except('_token', 'Carrera','numMaterias', 'numGestion', 'anio');
        Estudiante::insert($datosEstudiante);
        $carrera = Carrera::where('nombrecarrera','=', $datosFormulario['Carrera'])->first()->id;

        $directorCarrera = Director_Carrera::where('id_carrera','=', $carrera)->first()->NOMBREDIRECTOR;
        
        $fecha_dia=date("d");
        $fecha_mes=date("m");
        $fecha_year=date("Y");
        $mes_year=[
            "01"=>"Enero",
            "02"=>"Febrero",
            "03"=>"Marzo",
            "04"=>"Abril",
            "05"=>"Mayo",
            "06"=>"Junio",
            "07"=>"Julio",
            "08"=>"Agosto",
            "09"=>"Septiembre",
            "10"=>"Octubre",
            "11"=>"Noviembre",
            "12"=>"Diciembre"
        ];
        $fechaActual=$fecha_dia." de ".$mes_year[$fecha_mes]." de ".$fecha_year;

        if ($datosFormulario['genero'] == "Masculino") {
            $pronombre = "l";
            $genero_gramatical = "o";
        }
        else {
            $pronombre = " la";
            $genero_gramatical = "a";
        }

        $datosFormulario['directorCarrera']=$directorCarrera;
        $datosFormulario['fechaActual']=$fechaActual;
        $datosFormulario['pronombre']=$pronombre;
        $datosFormulario['generoGramatical']=$genero_gramatical;

        $pdf = Pdf::loadView('pdfSNTutor', ['nombre'=>$datosFormulario]);

        return $pdf ->stream('Solicitud-Nombramiento-Tutor.pdf');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}