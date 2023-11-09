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
        $datosDecano['datos'] = Autoridad::where('cargo','=', 'Decano')->get();
        
        return view('gestiondecano', $datosDecano);
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
        $datosFormulario['CARGO']= "Decano";
        Autoridad::insert($datosFormulario);

        return redirect('gestionDD');

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
        $datosDecano = Autoridad::findOrFail($id);

        return view('admin.editarDatosDecano', compact('datosDecano'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $datosDecano = request()->except('_token', '_method');
        Autoridad::where('id', '=', $id)->update($datosDecano);
        
        return redirect('gestionDD');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Autoridad::destroy($id);
        return redirect('gestionDD');
    }
}