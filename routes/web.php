<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\CalendarioController;
use App\Http\Controllers\DisponibilidadController;
use App\Models\Disponibilidad;
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
Route::get('/disponibilidad',[DisponibilidadController::class, 'index'])->name('disponibilidad');
Route::post('/disponibilidad/create',[DisponibilidadController::class, 'store'])->name('disponibilidad.create');
Route::get('/disponibilidad/{id}',[DisponibilidadController::class, 'destroy'])->name('disponibilidad.delete');

/*Calendario*/
Route::get('/calendario', [CalendarioController::class, 'index'])->name('calendario');
Route::post('/calendario/create', [CalendarioController::class, 'store'])->name('calendario.create');
Route::get('/calendario/{id}', [CalendarioController::class, 'destroy'])->name('calendario.delete');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
