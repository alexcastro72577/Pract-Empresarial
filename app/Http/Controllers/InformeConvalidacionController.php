<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Carrera;
use App\Models\Autoridad;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Repositorio_Documento;
use Carbon\Carbon;

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
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosFormulario = request()->except('_token');
        $datosEstudiante = request()->except('_token','carrera_origen', 'Carrera','numMaterias', 'numGestion', 'anio', 'carreraA', 'uniprev');
        Estudiante::insert($datosEstudiante);
        $carrera = Carrera::where('nombrecarrera','=', $datosFormulario['Carrera'])->first()->NOMBRECARRERA;
        $datosDecano = Autoridad::where('cargo','=', 'Decano')->first()->NOMBREAUTORIDAD;
        $generoDecano = Autoridad::where('cargo','=', 'Decano')->first()->GENEROAUTORIDAD;
        $datosJefe = Autoridad::where('cargo','=', 'Jefe')->first()->NOMBREAUTORIDAD;
        $generoJefe = Autoridad::where('cargo','=', 'Jefe')->first()->GENEROAUTORIDAD;
        
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

        

        if ($datosFormulario['Carrera'] == "Ingeniería de Sistemas") {
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

        $fecha = Carbon::now()->setTimezone('America/La_Paz');
        $fechaNombre = str_replace ( ":", ' ', $fecha);
        $estudiante = Estudiante::where('nombreest','=', $datosFormulario['nombreEst'])->first()->id;
        $nombreDocumento = "Informe de Convalidacion Materias Rechazado - ".$datosFormulario['nombreEst']." ".$datosFormulario['apellidoEst']." - ".$fechaNombre.".pdf";

        Pdf::loadView('pdfIConvalidacion', ['nombre'=>$datosFormulario])->save(public_path().'/Dokus/'.$nombreDocumento);
        $datosRepo = request()->except('_token', 'Carrera', 'numGestion', 'anio','nombreEst', 'apellidoEst', 'genero', 'ci', 'exp', 'numMaterias', 'carrera_origen', 'carreraA', 'uniprev');
        $datosRepo['id_estudiante'] = $estudiante;
        $datosRepo['tipoDocumento'] = "Informe de Convalidacion Materias Rechazado";
        $datosRepo['documento'] = $nombreDocumento;
        $datosRepo['created_at'] = $fecha;
        Repositorio_Documento::insert($datosRepo);

        return Pdf::loadView('pdfIConvalidacion', ['nombre'=>$datosFormulario])->stream($nombreDocumento);
    }

}
