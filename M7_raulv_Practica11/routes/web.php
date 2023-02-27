<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});



Route::get('/ej1/{controladorEjercicio1}', [\App\Http\Controllers\Ej1Controller::class, 'ej1Parametro'])->name('ej1');

Route::get('/ej2/{controladorEjercicio1}', [\App\Http\Controllers\Ej1Controller::class, 'mostrarTexto'])->name('ej2');

Route::get('/modificacion/{controladorEjercicio3}/{practica}/{nombre}/{apellido}', [\App\Http\Controllers\Ej1Controller::class, 'modificacion'])->name('modificacion');