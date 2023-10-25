<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioCertifEgresoController;
use App\Http\Controllers\GestionInfoController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserMenuController;
use App\Http\Controllers\AdminMenuController;
use App\Http\Controllers\NombramientoTutorController;
use App\Http\Controllers\PdfNombramientoTutorController;
use App\Http\Controllers\InformeConvalidacionController;
use App\Http\Controllers\PdfInformeConvalidacionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});

Route::middleware(["auth"])->group(function () {
    Route::resource('/form_egreso', FormularioCertifEgresoController::class);
    Route::resource('/pdf', PdfController::class);
    Route::resource('/usuario', UserMenuController::class);
    Route::resource('/nombtutor', NombramientoTutorController::class);
    Route::resource('/pdfNT', PdfNombramientoTutorController::class);
    Route::resource('/inf_conv', InformeConvalidacionController::class);
    Route::resource('/pdfinfconv', PdfInformeConvalidacionController::class);
});

Route::middleware(["auth", "solo_usuario_administrador"])->group(function () {
	Route::resource('/gestionInfo', GestionInfoController::class);
    Route::resource('/admin', AdminMenuController::class);
});

Auth::routes();
