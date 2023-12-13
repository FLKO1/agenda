<?php

namespace App\Http\Controllers;
use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{

    public function index(){
        $pacientes=Paciente::all();
        return view('paciente.index',compact('pacientes'));

    }
    /*Index me permite ver el formulario */
    public function mostrarFormulario()
    {
        return view('paciente.registro');
    }

    public function registrarPaciente(Request $request)
    {

        $pacientes= new Paciente([
        'rut' => $request->get('rut'),
        'nombre' => $request->get('nombre'),
        'apellido' => $request->get('apellido'),
        'correo' => $request->get('correo'),
        'telefono' => $request->get('telefono'),
        'prevision' => $request->get('prevision'),
        ]);

        $pacientes->save();


        return redirect('inicio')->with('mensaje', 'Paciente registrado exitosamente.');
    }

    public function rutVerificador(){
        return view ('paciente.pacienteant');
    }

    public function verificarRut(Request $request){
        $rut =$request->input('rut');

        $paciente = Paciente::where('rut', $rut)->first();

        if ($paciente){
            /*INGRESAR EN EL REDIRECT LA RUTA DONDE TIENEN QUE AGENDAR LA HORA*/
            return redirect();
        }else{
            return redirect('paciente.registro')->with('mensaje', 'No se a encontrado ningun paciente con ese rut');
        }
    }

    public function edit($id){
        $paciente = Paciente::findOrFail($id);
        return view ('paciente.edit', compact('paciente'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'rut'=> 'required',
            'nombre'=> 'required',
            'apellido'=> 'required',
            'correo'=> 'required',
            'prevision'=> 'required',
        ]);

        $paciente = Paciente::findOrFail($id);
        $paciente->update([
            'rut'=> $request->input('rut'),
            'nombre'=> $request->input('nombre'),
            'apellido'=> $request->input('apellido'),
            'correo'=> $request->input('correo'),
            'prevision'=> $request->input('prevision'),
        ]);

        return redirect('paciente.index')->with('success', 'ACTUALIZADO');
    }

    public function destroy($id){
            $paciente = Paciente::findOrFail($id);
            $paciente->delete();
            return redirect('inicio')->with('succes','ELIMINADA');
       
    }
}
