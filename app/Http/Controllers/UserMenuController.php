<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('usuario.menu_usuario');
    }

}
