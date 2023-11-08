<?php

namespace App\Http\Controllers;
use App\Models\Estudiante;
use App\Models\Fecha;
use App\Models\Carrera;
use App\Models\Gestion;
use App\Models\Kardex;
use App\Models\Materia_Egreso;
use App\Models\Autoridad;
use App\Models\Repositorio_Documento;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class FormularioCertifEgresoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $datos['carreras'] = Carrera::all();
        return view('welcome', $datos);
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

        $datosFecha = request()->except('_token', 'Carrera','numMaterias', 'numGestion', 'nombreEst', 'apellidoEst', 'genero', 'ci', 'exp');
        Fecha::insert($datosFecha);

        $datosGestion = request()->except('_token', 'Carrera', 'numMaterias', 'anio','nombreEst', 'apellidoEst', 'genero', 'ci', 'exp');
        $fecha = Fecha::where('anio','=', $datosFormulario['anio'])->first()->id;
        $carrera = Carrera::where('nombrecarrera','=', $datosFormulario['Carrera'])->first()->id;
        $datosGestion['ID_FECHA']=$fecha;
        $datosGestion['ID_CARRERA']=$carrera;
        Gestion::insert($datosGestion);

        $datosKardex = request()->except('_token', 'Carrera', 'numGestion', 'anio','nombreEst', 'apellidoEst', 'genero', 'ci', 'exp');
        $estudiante = Estudiante::where('nombreest','=', $datosFormulario['nombreEst'])->first()->id;
        $datosKardex['ID_ESTUDIANTE']=$estudiante;
        $datosKardex['ID_CARRERA']=$carrera;
        Kardex::insert($datosKardex);

        $materiaEgreso = Materia_Egreso::where('id_carrera','=', $carrera)->first()->NOMBMATEG;
        $directorCarrera = Autoridad::where('id_carrera','=', $carrera)->first()->NOMBREAUTORIDAD;
        
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

        $datosFormulario['materiaEgreso']=$materiaEgreso;
        $datosFormulario['directorCarrera']=$directorCarrera;
        $datosFormulario['pronombre']=$pronombre;
        $datosFormulario['generoGramatical']=$genero_gramatical;
        $datosFormulario['fechaActual']=$fechaActual;

        $fecha = Carbon::now()->setTimezone('America/La_Paz');
        $fechaNombre = str_replace ( ":", ' ', $fecha);
        Pdf::loadView('pdf', ['nombre'=>$datosFormulario])->save(public_path().'/Dokus/Certificado Finalizacion Plan de Estudios - '.$datosFormulario['nombreEst'].' '.$datosFormulario['apellidoEst'].' - '.$fechaNombre.'.pdf');
        $datosRepo = request()->except('_token', 'Carrera', 'numGestion', 'anio','nombreEst', 'apellidoEst', 'genero', 'ci', 'exp', 'numMaterias');
        $datosRepo['id_estudiante'] = $estudiante;
        $datosRepo['tipoDocumento'] = "Certificado de Egreso";
        $nombreDocumento = "Certificado Finalizacion Plan de Estudios - ".$datosFormulario['nombreEst']." ".$datosFormulario['apellidoEst']." - ".$fechaNombre.".pdf";
        $datosRepo['documento'] = $nombreDocumento;
        $datosRepo['created_at'] = $fecha;
        Repositorio_Documento::insert($datosRepo);


        return Pdf::loadView('pdf', ['nombre'=>$datosFormulario])->stream($nombreDocumento);

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
