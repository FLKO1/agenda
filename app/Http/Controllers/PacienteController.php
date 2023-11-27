<?php

namespace App\Http\Controllers;
use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /*Index me permite ver el formulario */
    public function mostrarFormulario()
    {
        return view('paciente.registro');
    }

    public function registrarPaciente(Request $request)
    {

        $pacientes= new Paciente();
        $pacientes->rut =$request->rut;
        $pacientes->nombre =$request->nombre;
        $pacientes->apellido =$request->apellido;
        $pacientes->correo =$request->correo;
        $pacientes->telefono =$request->telefono;
        $pacientes->prevision =$request->previson;

        $pacientes->save();
       /* $request->validate([
            'rut' => 'required|unique:pacientes,rut|size:12',
            'nombre' => 'required',
            'apellido' => 'required',
            'correo' => 'required|email|unique:pacientes,correo',
            'telefono' => 'required',
            'prevision' => 'required|in:Fonasa,Isapre,Ninguno',
        ]);

        Paciente::create($request->all()); */

        return redirect('inicio')->with('mensaje', 'Paciente registrado exitosamente.');

    }
}
