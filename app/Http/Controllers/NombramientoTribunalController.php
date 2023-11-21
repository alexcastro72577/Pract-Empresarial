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

class NombramientoTribunalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['carreras'] = Carrera::all();
        $datos['autoridades'] = Autoridad::all();
        $datos['tutores'] = Tutor::all();
        return view('nombTribunal', $datos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosFormulario = request()->except('_token');
        $datosEstudiante = request()->except('_token', 'Carrera','numMaterias', 'numGestion', 'anio', 'nombreProyecto', 'modalidad', 'codCite', 'tribunal1', 'tribunal2', 'tribunal3');
        Estudiante::insert($datosEstudiante);

        $carrera = Carrera::where('nombrecarrera','=', $datosFormulario['Carrera'])->first()->id;
        $directorCarrera = Autoridad::where('id_carrera','=', $carrera)->first()->NOMBREAUTORIDAD;

        $nombrePrimerTR = Tutor::where('apellidosTutor','=', $datosFormulario["tribunal1"])->first()->nombresTutor;
        $tituloPrimerTR = Tutor::where('apellidosTutor','=', $datosFormulario["tribunal1"])->first()->titulo;
        $generoPrimerTR = Tutor::where('apellidosTutor','=', $datosFormulario["tribunal1"])->first()->genero;

        $nombreSegundoTR = Tutor::where('apellidosTutor','=', $datosFormulario["tribunal2"])->first()->nombresTutor;
        $tituloSegundoTR = Tutor::where('apellidosTutor','=', $datosFormulario["tribunal2"])->first()->titulo;
        $generoSegundoTR = Tutor::where('apellidosTutor','=', $datosFormulario["tribunal2"])->first()->genero;

        $nombreTercerTR = Tutor::where('apellidosTutor','=', $datosFormulario["tribunal3"])->first()->nombresTutor;
        $tituloTercerTR = Tutor::where('apellidosTutor','=', $datosFormulario["tribunal3"])->first()->titulo;
        $generoTercerTR = Tutor::where('apellidosTutor','=', $datosFormulario["tribunal3"])->first()->genero;

        $datosProyecto = request()->except('_token', 'Carrera','numMaterias', 'numGestion', 'anio', 'nombreEst', 'apellidoEst', 'genero', 'ci', 'exp', 'modalidad', 'tribunal1', 'tribunal2', 'tribunal3');
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
            $pronombre = "el";
            $genero_gramatical = "o";
        }
        else {
            $pronombre = "la";
            $genero_gramatical = "a";
        }

        
        $datosFormulario['generoPrimerTR']=$generoPrimerTR;
        if ($datosFormulario['generoPrimerTR'] == "Masculino") {
            $genero_saludoPrimerTR = "";
            $genero_gramaticalPrimerTR = "o";
        }
        else {
            $genero_saludoPrimerTR = "a";
            $genero_gramaticalPrimerTR = "a";
        }

        
        $datosFormulario['generoSegundoTR']=$generoSegundoTR;
        if ($datosFormulario['generoSegundoTR'] == "Masculino") {
            $genero_saludoSegundoTR = "";
            $genero_gramaticalSegundoTR = "o";
        }
        else {
            $genero_saludoSegundoTR = "a";
            $genero_gramaticalSegundoTR = "a";
        }

        
        $datosFormulario['generoTercerTR']=$generoTercerTR;
        if ($datosFormulario['generoTercerTR'] == "Masculino") {
            $genero_saludoTercerTR = "";
            $genero_gramaticalTercerTR = "o";
        }
        else {
            $genero_saludoTercerTR = "a";
            $genero_gramaticalTercerTR = "a";
        }

        if ($datosFormulario['Carrera'] == "Ingeniería de Sistemas") {
            $codigo_carrera = "SIS";
        }
        else {
            $codigo_carrera = "INF";
        }

        $datosFormulario['directorCarrera']=$directorCarrera;
        $datosFormulario['nombrePrimerTR']=$nombrePrimerTR;
        $datosFormulario['tituloPrimerTR']=$tituloPrimerTR;
        $datosFormulario['genero_saludoPrimerTR']=$genero_saludoPrimerTR;
        $datosFormulario['genero_gramaticalPrimerTR']=$genero_gramaticalPrimerTR;
        $datosFormulario['nombreSegundoTR']=$nombreSegundoTR;
        $datosFormulario['tituloSegundoTR']=$tituloSegundoTR;
        $datosFormulario['genero_saludoSegundoTR']=$genero_saludoSegundoTR;
        $datosFormulario['genero_gramaticalSegundoTR']=$genero_gramaticalSegundoTR;
        $datosFormulario['nombreTercerTR']=$nombreTercerTR;
        $datosFormulario['tituloTercerTR']=$tituloTercerTR;
        $datosFormulario['genero_saludoTercerTR']=$genero_saludoTercerTR;
        $datosFormulario['genero_gramaticalTercerTR']=$genero_gramaticalTercerTR;
        $datosFormulario['fechaActual']=$fechaActual;
        $datosFormulario['pronombre']=$pronombre;
        $datosFormulario['generoGramatical']=$genero_gramatical;
        $datosFormulario['codigocarrera']=$codigo_carrera;

        $fecha = Carbon::now()->setTimezone('America/La_Paz');
        $fechaNombre = str_replace ( ":", ' ', $fecha);
        $estudiante = Estudiante::where('nombreest','=', $datosFormulario['nombreEst'])->first()->id;
        $nombreDocumento = "Respuesta Solicitud Nombramiento Tutor - ".$datosFormulario['nombreEst']." ".$datosFormulario['apellidoEst']." - ".$fechaNombre.".pdf";

        Pdf::loadView('pdfNTribunal', ['nombre'=>$datosFormulario])->save(public_path().'/Dokus/'.$nombreDocumento);
        $datosRepo = request()->except('_token', 'Carrera', 'numGestion', 'anio','nombreEst', 'apellidoEst', 'genero', 'ci', 'exp', 'numMaterias', 'nombreProyecto', 'codCite', 'tutor', 'modalidad', 'tribunal1', 'tribunal2', 'tribunal3');
        $datosRepo['id_estudiante'] = $estudiante;
        $datosRepo['tipoDocumento'] = "Notificacion Nombramiento Tribunal";
        $datosRepo['documento'] = $nombreDocumento;
        $datosRepo['created_at'] = $fecha;
        Repositorio_Documento::insert($datosRepo);

        return Pdf::loadView('pdfNTribunal', ['nombre'=>$datosFormulario])->stream($nombreDocumento);
    }

}
