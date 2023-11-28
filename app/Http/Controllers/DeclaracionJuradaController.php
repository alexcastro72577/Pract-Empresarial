<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutor;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Repositorio_Documento;
use Carbon\Carbon;

class DeclaracionJuradaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['tutores'] = Tutor::all();
        return view('decJurada', $datos);
    }

    public function store(Request $request)
    {
        $datosFormulario = request()->except('_token');

        $nombreTutor = Tutor::where('apellidosTutor','=', $datosFormulario['nombDocente'])->first()->nombresTutor;
        $tituloTutor = Tutor::where('apellidosTutor','=', $datosFormulario['nombDocente'])->first()->titulo;
        
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
        $mes_año=[
            "02"=>"Enero",
            "03"=>"Febrero",
            "04"=>"Marzo",
            "05"=>"Abril",
            "06"=>"Mayo",
            "07"=>"Junio",
            "08"=>"Julio",
            "09"=>"Agosto",
            "10"=>"Septiembre",
            "11"=>"Octubre",
            "12"=>"Noviembre",
            "01"=>"Diciembre"
        ];
        $mes_texto=$mes_year[$fecha_mes];
        $mes_serv=$mes_año[$fecha_mes];
        

        $datosFormulario['nombreTutor']=$nombreTutor;
        $datosFormulario['tituloTutor']=$tituloTutor;
        $datosFormulario['dia']=$fecha_dia;
        $datosFormulario['mesTexto']=$mes_texto;
        $datosFormulario['mesServicio']=$mes_serv;
        $datosFormulario['mesNum']=$fecha_mes;
        $datosFormulario['año']=$fecha_year;

        $fecha = Carbon::now()->setTimezone('America/La_Paz');
        $fechaNombre = str_replace ( ":", ' ', $fecha);
        $nombreDocumento = "Declaración Jurada de Percepción de Remuneración - ".$datosFormulario['tituloTutor']." ".$datosFormulario['nombreTutor']." - ".$fechaNombre.".pdf";
        Pdf::loadView('pdfDecJurada', ['nombre'=>$datosFormulario])->save(public_path().'/Dokus/'.$nombreDocumento);
        
        $datosRepo = request()->except('_token', 'nombDocente', 'remuneracion', 'ci', 'exp', 'nombInstitucion', 'cargo', 'monto', 'lang');
        $datosRepo['tipoDocumento'] = "Declaración Jurada de Percepción de Remuneración";
        $datosRepo['documento'] = $nombreDocumento;
        $datosRepo['created_at'] = $fecha;
        Repositorio_Documento::insert($datosRepo);

        return Pdf::loadView('pdfDecJurada', ['nombre'=>$datosFormulario])->stream($nombreDocumento);
    }
}