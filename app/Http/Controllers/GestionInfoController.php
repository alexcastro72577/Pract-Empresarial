<?php

namespace App\Http\Controllers;
use App\Models\Carrera;
use App\Models\Materia_Egreso;
use App\Models\Autoridade;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class GestionInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $datosCarrera = Carrera::get('NOMBRECARRERA');
        $datosMateriaEgreso = Materia_Egreso::get('NOMBMATEG');
        $datosDirectorCarrera['datos'] = Autoridade::join('carreras', 'carreras.id', '=', 'autoridades.id')
                    ->join('materia__egresos', 'materia__egresos.id', '=', 'carreras.id')
              		->get(['carreras.NOMBRECARRERA', 'autoridades.NOMBREAUTORIDAD', 'materia__egresos.NOMBMATEG', 'autoridades.id']);
        return view('gestion_datos', $datosDirectorCarrera);
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
        //$datosEstudiante = request()->all();
        //return response()->json($datosEstudiante);
        $datosFormulario = request()->except('_token');

        $datosCarrera = request()->except('_token', 'nombmateg', 'nombreautoridad');
        Carrera::insert($datosCarrera);

        $datosDirectorCarrera = request()->except('_token', 'nombrecarrera', 'nombmateg');
        $carrera = Carrera::where('nombrecarrera','=', $datosFormulario['nombrecarrera'])->first()->id;
        $datosDirectorCarrera['ID_CARRERA']=$carrera;
        Autoridade::insert($datosDirectorCarrera);

        $datosMateriaEgreso = request()->except('_token', 'nombrecarrera', 'nombreautoridad');
        $datosMateriaEgreso['ID_CARRERA']=$carrera;
        Materia_Egreso::insert($datosMateriaEgreso);

        // $updateCarrera = Carrera::findOrFail($id);
        $update=Carrera::where('nombrecarrera','=', $datosFormulario['nombrecarrera'])->first();
        $materia = Materia_Egreso::where('nombmateg','=', $datosFormulario['nombmateg'])->first()->id;
        $update->ID_MATERIA = $materia;
        $update->save();

        return redirect('gestionInfo');

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
        $datosGeneral = Autoridade::findOrFail($id);
        $datosCarrera = Carrera::findOrFail($id);
        $datosMateria = Materia_Egreso::findOrFail($id);
        return view('admin.editarDatos', compact('datosGeneral', 'datosCarrera', 'datosMateria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $datosDirector = request()->except('_token', '_method', 'NOMBMATEG', 'NOMBRECARRERA');
        $datosCarrera = request()->except('_token', '_method', 'NOMBMATEG', 'NOMBREAUTORIDAD');
        $datosMateria = request()->except('_token', '_method', 'NOMBREAUTORIDAD', 'NOMBRECARRERA');

        Autoridade::where('id', '=', $id)->update($datosDirector);
        Carrera::where('id', '=', $id)->update($datosCarrera);
        Materia_Egreso::where('id', '=', $id)->update($datosMateria);
        
        return redirect('gestionInfo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Autoridade::destroy($id);
        Carrera::destroy($id);
        Materia_Egreso::destroy($id);
        return redirect('gestionInfo');
    }
}
