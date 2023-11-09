<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Repositorio_Documento;

class RepositorioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datosRepositorio['datos'] = Repositorio_Documento::join('estudiantes', 'estudiantes.id', '=', 'repositorio_documentos.id_estudiante')
              		->get(['estudiantes.NOMBREEST', 'estudiantes.APELLIDOEST', 'repositorio_documentos.id', 'repositorio_documentos.tipoDocumento', 'repositorio_documentos.documento', 'repositorio_documentos.created_at']);
        return view('admin.repositorioDocs', $datosRepositorio);
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Repositorio_Documento::destroy($id);
        return redirect('repositorio');
    }
}
