<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Carrera;
use App\Models\Autoridade;
use Barryvdh\DomPDF\Facade\Pdf;

class InformeConvalidacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['carreras'] = Carrera::all();
        return view('informe_Convalidacion', $datos);
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
        $datosEstudiante = request()->except('_token', 'Carrera','numMaterias', 'numGestion', 'anio', 'carreraA', 'uniprev');
        Estudiante::insert($datosEstudiante);
        $carrera = Carrera::where('nombrecarrera','=', $datosFormulario['Carrera'])->first()->NOMBRECARRERA;
        $datosDecano = Autoridade::where('cargo','=', 'Decano')->first()->NOMBREAUTORIDAD;
        $generoDecano = Autoridade::where('cargo','=', 'Decano')->first()->GENEROAUTORIDAD;
        $datosJefe = Autoridade::where('cargo','=', 'Jefe')->first()->NOMBREAUTORIDAD;
        $generoJefe = Autoridade::where('cargo','=', 'Jefe')->first()->GENEROAUTORIDAD;
        
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
            $pronombre = "el";
            $genero_gramatical = "o";
        }
        else {
            $pronombre = "la";
            $genero_gramatical = "a";
        }

        

        if ($datosFormulario['Carrera'] == "Ingenieria de Sistemas") {
            $carreraB = "LIC. EN ING. DE SISTEMAS";
        }
        else {
            $carreraB = "LIC. EN ING. INFORMATICA";
        }

        $datosFormulario['Carrera']=$carrera;
        $datosFormulario['fechaActual']=$fechaActual;
        $datosFormulario['pronombre']=$pronombre;
        $datosFormulario['generoGramatical']=$genero_gramatical;
        $datosFormulario['Carrera']=$carreraB;
        $datosFormulario['nombDecano']=$datosDecano;
        $datosFormulario['nombJefe']=$datosJefe;
        $datosFormulario['generoD']=$generoDecano;
        $datosFormulario['generoJ']=$generoJefe;

        if ($datosFormulario['generoD'] == "Masculino") {
            $genero_gramaticalDecano = "o";
        }
        else {
            $genero_gramaticalDecano = "a";
        }

        if ($datosFormulario['generoJ'] == "Masculino") {
            $genero_gramaticalJefe = "E";
        }
        else {
            $genero_gramaticalJefe = "A";
        }

        $datosFormulario['generoGramDec']=$genero_gramaticalDecano;
        $datosFormulario['generoGramJefe']=$genero_gramaticalJefe;

        $pdf = Pdf::loadView('pdfIConvalidacion', ['nombre'=>$datosFormulario]);

        return $pdf ->stream('Informe_Convalidacion.pdf');
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