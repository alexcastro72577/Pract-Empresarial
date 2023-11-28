<?php

namespace App\Http\Controllers;
use App\Models\Carrera;
use App\Models\Materia_Egreso;
use App\Models\Autoridad;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class GestionDirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $datosCarrera = Carrera::get('NOMBRECARRERA');
        $datosMateriaEgreso = Materia_Egreso::get('NOMBMATEG');
        $datosDirectorCarrera['datos'] = Autoridad::join('carreras', 'carreras.id', '=', 'autoridades.ID_CARRERA')
                    ->join('materias_egreso', 'materias_egreso.id', '=', 'carreras.ID_MATERIA')
              		->get(['carreras.NOMBRECARRERA', 'autoridades.NOMBREAUTORIDAD', 'materias_egreso.NOMBMATEG', 'autoridades.id']);
        return view('gestiondirector', $datosDirectorCarrera);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosFormulario = request()->except('_token');

        $datosCarrera = request()->except('_token', 'nombmateg', 'nombreautoridad', 'generoautoridad');
        Carrera::insert($datosCarrera);

        $datosDirectorCarrera = request()->except('_token', 'nombrecarrera', 'nombmateg');
        $carrera = Carrera::where('nombrecarrera','=', $datosFormulario['nombrecarrera'])->first()->id;
        $datosDirectorCarrera['ID_CARRERA']=$carrera;
        $datosDirectorCarrera['CARGO']= 'Director';
        Autoridad::insert($datosDirectorCarrera);

        $datosMateriaEgreso = request()->except('_token', 'nombrecarrera', 'nombreautoridad', 'generoautoridad');
        $datosMateriaEgreso['ID_CARRERA']=$carrera;
        Materia_Egreso::insert($datosMateriaEgreso);

        $update=Carrera::where('nombrecarrera','=', $datosFormulario['nombrecarrera'])->first();
        $materia = Materia_Egreso::where('nombmateg','=', $datosFormulario['nombmateg'])->first()->id;
        $update->ID_MATERIA = $materia;
        $update->save();

        return redirect('gestionDirector');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $idDirector = $id;
        $datosGeneral = Autoridad::join('carreras', 'carreras.id', '=', 'autoridades.ID_CARRERA')
                            ->join('materias_egreso', 'materias_egreso.id', '=', 'carreras.ID_MATERIA')->findOrFail($id);
        
        return view('admin.editarDatosDirector', compact('datosGeneral', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $datosDirector = request()->except('_token', '_method', 'NOMBMATEG', 'NOMBRECARRERA');
        $datosCarrera = request()->except('_token', '_method', 'NOMBMATEG', 'NOMBREAUTORIDAD');
        $datosMateria = request()->except('_token', '_method', 'NOMBREAUTORIDAD', 'NOMBRECARRERA');

        Autoridad::where('id', '=', $id)->update($datosDirector);
        $idCarrera = Autoridad::where('id', '=', $id)->first()->ID_CARRERA;
        $idMateria = Carrera::where('id', '=', $idCarrera)->first()->ID_MATERIA;
        Carrera::where('id', '=', $idCarrera)->update($datosCarrera);
        Materia_Egreso::where('id', '=', $idMateria)->update($datosMateria);
        
        return redirect('gestionDirector');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $idCarrera = Autoridad::where('id', '=', $id)->first()->ID_CARRERA;
        $idMateria = Carrera::where('id', '=', $idCarrera)->first()->ID_MATERIA;
        Autoridad::destroy($id);
        Carrera::destroy($idCarrera);
        Materia_Egreso::destroy($idMateria);
        return redirect('gestionDirector');
    }
}
