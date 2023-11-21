<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Carrera;
use App\Models\Autoridad;
use App\Models\Tutor;
use App\Models\Proyecto_Grado;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Repositorio_Documento;
use Carbon\Carbon;

class NombramientoTutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['carreras'] = Carrera::all();
        $datos['autoridades'] = Autoridad::all();
        $datos['tutores'] = Tutor::all();
        return view('nombTutorMenu', $datos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosFormulario = request()->except('_token');
        $datosEstudiante = request()->except('_token', 'Carrera','numMaterias', 'numGestion', 'anio', 'nombreProyecto', 'codCite', 'tutor');
        Estudiante::insert($datosEstudiante);

        $carrera = Carrera::where('nombrecarrera','=', $datosFormulario['Carrera'])->first()->id;
        $directorCarrera = Autoridad::where('id_carrera','=', $carrera)->first()->NOMBREAUTORIDAD;

        $nombreTutor = Tutor::where('apellidosTutor','=', $datosFormulario['tutor'])->first()->nombresTutor;
        $tituloTutor = Tutor::where('apellidosTutor','=', $datosFormulario['tutor'])->first()->titulo;

        $datosProyecto = request()->except('_token', 'Carrera','numMaterias', 'numGestion', 'anio', 'nombreEst', 'apellidoEst', 'genero', 'ci', 'exp', 'tutor');
        Proyecto_Grado::insert($datosProyecto);
        
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

        if ($datosFormulario['Carrera'] == "Ingenieria de Sistemas") {
            $codigo_carrera = "SIS";
        }
        else {
            $codigo_carrera = "INF";
        }

        $datosFormulario['directorCarrera']=$directorCarrera;
        $datosFormulario['nombreTutor']=$nombreTutor;
        $datosFormulario['tituloTutor']=$tituloTutor;
        $datosFormulario['fechaActual']=$fechaActual;
        $datosFormulario['pronombre']=$pronombre;
        $datosFormulario['generoGramatical']=$genero_gramatical;
        $datosFormulario['codigocarrera']=$codigo_carrera;

        $fecha = Carbon::now()->setTimezone('America/La_Paz');
        $fechaNombre = str_replace ( ":", ' ', $fecha);
        $estudiante = Estudiante::where('nombreest','=', $datosFormulario['nombreEst'])->first()->id;
        $nombreDocumento = "Respuesta Solicitud Nombramiento Tutor - ".$datosFormulario['nombreEst']." ".$datosFormulario['apellidoEst']." - ".$fechaNombre.".pdf";

        Pdf::loadView('pdfNTutor', ['nombre'=>$datosFormulario])->save(public_path().'/Dokus/'.$nombreDocumento);
        $datosRepo = request()->except('_token', 'Carrera', 'numGestion', 'anio','nombreEst', 'apellidoEst', 'genero', 'ci', 'exp', 'numMaterias', 'nombreProyecto', 'codCite', 'tutor');
        $datosRepo['id_estudiante'] = $estudiante;
        $datosRepo['tipoDocumento'] = "Respuesta Solicitud Nombramiento Tutor";
        $datosRepo['documento'] = $nombreDocumento;
        $datosRepo['created_at'] = $fecha;
        Repositorio_Documento::insert($datosRepo);

        return Pdf::loadView('pdfNTutor', ['nombre'=>$datosFormulario])->stream($nombreDocumento);
    }

}
