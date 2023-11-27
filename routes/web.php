<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;

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

//Auth::routes();

/*Ingresar datos paciente*/

Route::get('/registro', [PacienteController::class, 'mostrarFormulario'])->name('paciente.ver');
Route::post('/registro', [PacienteController::class, 'registrarPaciente'])->name('paciente.registro');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
