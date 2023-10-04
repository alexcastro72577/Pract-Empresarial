<?php

namespace App\Http\Controllers;
use App\Models\Carrera;
use App\Models\Materia_Egreso;
use App\Models\Director_Carrera;
use Illuminate\Http\Request;

class GestionInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        return view('gestion_datos');
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

        $datosDirector_Carrera = request()->except('_token', 'nombrecarrera', 'nombmateg');
        Director_Carrera::insert($datosDirector_Carrera);

        $datosMateria_Egreso = request()->except('_token', 'nombrecarrera', 'nombredirector');
        Materia_Egreso::insert($datosMateria_Egreso);

        $datosCarrera = request()->except('_token', 'nombmateg', 'nombredirector');
        Carrera::insert($datosCarrera);

        return view('gestion_datos');

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
