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

        //dump($request->get('calendario_id'));
        //dump($request->get('especialidad'));
        
        $cita = new Cita();
        $cita->calendario_id = $request->get('calendario_id');
        $cita->especialidad = $request->get('especialidad');
        //dd($cita);

        /*$request->validate([
            'calendario_id' => 'required|in:calendarios,id',
            'especialidad' => 'required|in:Limpieza,Operacion,Extraccion',
        ]);
    |   */


        $cita->save();
        return redirect('cita')->with('success', 'Cita creada exitosamente.');
        
    }

    public function destroy($id){
        $cita = Cita::findOrFail($id);
        $cita->delete();
        return redirect('cita')->with('succes', 'CITA ELIMINADA');
    }
    
}
