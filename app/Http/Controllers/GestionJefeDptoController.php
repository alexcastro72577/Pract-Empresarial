<?php

namespace App\Http\Controllers;
use App\Models\Autoridad;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class GestionJefeDptoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $datosJefe['datos'] = Autoridad::where('cargo','=', 'Jefe')->get();
        
        return view('gestionjefedpto', $datosJefe);
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
        $datosFormulario = request()->except('_token');
        $datosFormulario['CARGO']= "Jefe";
        Autoridad::insert($datosFormulario);

        return redirect('gestionDJD');

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
        $datosJefe = Autoridad::findOrFail($id);

        return view('admin.editarDatosJefe', compact('datosJefe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $datosJefe = request()->except('_token', '_method');
        Autoridad::where('id', '=', $id)->update($datosJefe);
        
        return redirect('gestionDJD');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Autoridad::destroy($id);
        return redirect('gestionDJD');
    }
}
