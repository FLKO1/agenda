<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\CalendarioController;
use App\Http\Controllers\DisponibilidadController;
use App\Http\Controllers\PrevisionController;
use App\Http\Controllers\EspecialidadController;
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
Route::get('/paciente',[PacienteController::class, 'index'])->name('paciente.index');
Route::get('/registro', [PacienteController::class, 'mostrarFormulario'])->name('paciente.ver');
Route::get('/paciete/{id}/edit', [PacienteController::class, 'edit'])->name('paciente.edit');
Route::put('/paciente/{id}', [PacienteController::class, 'update'])-> name('paciente.update');
Route::post('/registro', [PacienteController::class, 'registrarPaciente'])->name('paciente.registro');
Route::delete('/paciente/{id}', [PacienteController::class, 'destroy'])->name('paciente.destroy');

/*Ingresar dato paciente antiguo */
Route::get('/pacienteantiguo', [PacienteController::class, 'rutVerificador'])->name('paciente.verpacantiguo');
Route::post('/pacienteantiguo', [PacienteController::class, 'verificarRut'])->name('paciente.regpacantiguo');

/*Disponibilidad*/
Route::get('/disponibilidad',[DisponibilidadController::class, 'index'])->name('disponibilidad.index');
Route::get('/disponibilidad/create',[DisponibilidadController::class, 'create'])->name('disponibilidad.create');
Route::post('/disponibilidad/create',[DisponibilidadController::class, 'store'])->name('disponibilidad.store');
Route::delete('/disponibilidad/{id}',[DisponibilidadController::class, 'destroy'])->name('disponibilidad.destroy');

/*Calendario*/
Route::get('/calendario', [CalendarioController::class, 'index'])->name('calendario');
Route::get('/calendario/create', [CalendarioController::class, 'create'])->name('calendario.create');
Route::get('/calendario/{id}/edit', [CalendarioController::class, 'edit'])->name('calendario.edit');
Route::put('/calendario/{id}', [CalendarioController::class, 'update'])->name('calendario.update');
Route::post('/calendario/store', [CalendarioController::class, 'store'])->name('calendario.store');
Route::delete('/calendario/{id}', [CalendarioController::class, 'destroy'])->name('calendario.destroy');

/* PREVISON */
Route::get('/prevision',[PrevisionController::class,'index'])->name('prevision');
Route::get('/prevision/create',[PrevisionController::class,'create'])->name('prevision.create');
Route::post('/prevision/store',[PrevisionController::class,'store'])->name('prevision.store');
Route::delete('/prevision/{id}',[PrevisionController::class,'destroy'])->name('prevision.destroy');

/*ESPECIALIDAD */
Route::get('/especialidad',[EspecialidadController::class,'index'])->name('especialidad.index');
Route::get('/especialidad/create',[EspecialidadController::class,'create'])->name('especialidad.create');
Route::post('/especialidad/store',[EspecialidadController::class,'store'])->name('especialidad.store');
Route::delete('/especialidad/{id}',[EspecialidadController::class,'destroy'])->name('especialidad.destroy');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
