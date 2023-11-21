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
        $datosDirectorCarrera['datos'] = Autoridad::join('carreras', 'carreras.id', '=', 'autoridades.id')
                    ->join('materias_egreso', 'materias_egreso.id', '=', 'carreras.id')
              		->get(['carreras.NOMBRECARRERA', 'autoridades.NOMBREAUTORIDAD', 'materias_egreso.NOMBMATEG', 'autoridades.id']);
        return view('gestiondirector', $datosDirectorCarrera);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosFormulario = request()->except('_token');

        $datosCarrera = request()->except('_token', 'nombmateg', 'nombreautoridad');
        Carrera::insert($datosCarrera);

        $datosDirectorCarrera = request()->except('_token', 'nombrecarrera', 'nombmateg');
        $carrera = Carrera::where('nombrecarrera','=', $datosFormulario['nombrecarrera'])->first()->id;
        $datosDirectorCarrera['ID_CARRERA']=$carrera;
        $datosDirectorCarrera['CARGO']= 'Director';
        Autoridad::insert($datosDirectorCarrera);

        $datosMateriaEgreso = request()->except('_token', 'nombrecarrera', 'nombreautoridad');
        $datosMateriaEgreso['ID_CARRERA']=$carrera;
        Materia_Egreso::insert($datosMateriaEgreso);

        // $updateCarrera = Carrera::findOrFail($id);
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
        $datosGeneral = Autoridad::findOrFail($id);
        $datosCarrera = Carrera::findOrFail($id);
        $datosMateria = Materia_Egreso::findOrFail($id);
        return view('admin.editarDatosDirector', compact('datosGeneral', 'datosCarrera', 'datosMateria'));
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
        Carrera::where('id', '=', $id)->update($datosCarrera);
        Materia_Egreso::where('id', '=', $id)->update($datosMateria);
        
        return redirect('gestionDirector');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Autoridad::destroy($id);
        Carrera::destroy($id);
        Materia_Egreso::destroy($id);
        return redirect('gestionDirector');
    }
}
