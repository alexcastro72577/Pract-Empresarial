<?php

namespace App\Http\Controllers;
use App\Models\Tutor;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class GestionDocentesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $datosTutores['datos'] = Tutor::all();
        
        return view('gestiondocentes', $datosTutores);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosFormulario = request()->except('_token');
        Tutor::insert($datosFormulario);

        return redirect('gestionDTT');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $datosTutor = Tutor::findOrFail($id);

        return view('admin.editarDatosTutor', compact('datosTutor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $datosTutor = request()->except('_token', '_method');
        Tutor::where('id', '=', $id)->update($datosTutor);
        
        return redirect('gestionDTT');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Tutor::destroy($id);
        return redirect('gestionDTT');
    }
}
