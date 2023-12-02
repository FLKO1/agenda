<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\CalendarioController;
use App\Http\Controllers\DisponibilidadController;
use App\Http\Controllers\PrevisionController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

/*Ingresar datos paciente nuevo*/

Route::get('/registro', [PacienteController::class, 'mostrarFormulario'])->name('paciente.ver');
Route::post('/registro', [PacienteController::class, 'registrarPaciente'])->name('paciente.registro');

/*Ingresar dato paciente antiguo */
Route::get('/pacienteantiguo', [PacienteController::class, 'rutVerificador'])->name('paciente.verpacantiguo');
Route::post('/pacienteantiguo', [PacienteController::class, 'verificarRut'])->name('paciente.regpacantiguo');

/*Disponibilidad*/
Route::get('/disponibilidad',[DisponibilidadController::class, 'index'])->name('disponibilidad.index');
Route::get('/disponibilidad/create',[DisponibilidadController::class, 'create'])->name('disponibilidad.create');
Route::post('/disponibilidad/create',[DisponibilidadController::class, 'store'])->name('disponibilidad.store');
Route::get('/disponibilidad/{id}',[DisponibilidadController::class, 'destroy'])->name('disponibilidad.delete');

/*Calendario*/
Route::get('/calendario', [CalendarioController::class, 'index'])->name('calendario');
Route::get('/calendario/create', [CalendarioController::class, 'create'])->name('calendario.create');
Route::get('/calendario/{id}', [CalendarioController::class, 'destroy'])->name('calendario.delete');

/* PREVISON */
Route::get('/prevision',[PrevisionController::class,'index'])->name('prevision');
Route::get('/prevision/create',[PrevisionController::class,'create'])->name('prevision.create');
Route::post('/prevision/store',[PrevisionController::class,'store'])->name('prevision.store');
Route::get('/prevision/{id}',[PrevisionController::class,'destroy'])->name('prevision.delete');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
