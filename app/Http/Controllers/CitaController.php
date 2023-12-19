<?php

namespace App\Http\Controllers;

use App\Models\Calendario;
use App\Models\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function index(){
        $citas= Cita::with(['calendario'])->get();
        
        return view('cita.index', compact('citas'));
    }

    public function create(){
        $calendario= Calendario::all();
        return view('cita.create', compact('calendario'));
    }

    public function store(Request $request){
        $cita= new Cita([
            'calendario_id' =>$request->get('calendario_id'),
            'espcialidad'=> $request->get('especialidad'),
        ]);

        $request->validate([
            'calendario_id' => 'required|in:calendarios,id',
            'especialidad' => 'required|in:Limpieza,Operacion,Extraccion',
        ]);



        $cita->save();
        return redirect('cita.index')->with('success', 'Cita creada exitosamente.');
        
    }
    
}
