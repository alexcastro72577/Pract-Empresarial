<?php

namespace App\Http\Controllers;
use App\Models\Carrera;
use App\Models\Materia_Egreso;
use App\Models\Autoridad;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class GestionDecanoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        return view('gestiondecano');
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
        //

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
    public function update(Request $request, $id)
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