<?php

namespace App\Http\Controllers;
use App\Models\Calendario;
use App\Models\Disponibilidad;
use Illuminate\Http\Request;

class CalendarioController extends Controller
{
   /* public function __construct(){
        $this->middleware('Auth');
    }
    */


    public function index(){
        $calendarios= Calendario::all();
        return view('calendario.index',compact('calendarios'));
    }

    public function create(){
        $disponibilidads =Disponibilidad::all();
        return view('calendario.create', compact('disponibilidads'));


    }

    public function store(Request $request){

        $calendario=new Calendario([
            'title' => $request->get('title'),
            'start' => $request->get('start'),
            'end' => $request->get('end'),
            'disponibilidad_id' => $request->get('disponibilidad_id', 1),
        ]);
        
        
        $calendario->save();

        return redirect('/calendario')->with('success', 'Hora creada!');

    }

    public function edit($id){
        $calendario = Calendario::findOrFail($id);
        $disponibilidads = Disponibilidad::all();
        return view('calendario.edit', compact('calendario', 'disponibilidads'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'disponibilidad_id' => 'required',
            'start' => 'required',
            'end' => 'required',
        ]);
        $calendario = Calendario::findOrFail($id);

        $calendario->update([
            'title' => $request->input('title'),
            'disponibilidad_id' => $request->input('disponibilidad_id'),
            'start' => $request->input('start'),
            'end' => $request->input('end'),
        ]);
      

        return redirect('/calendario')->with('success', 'Evento actualizado correctamente.');

    }

    public function destroy($id)
    {
        $calendario = Calendario::findOrFail($id);
        $calendario->delete();
        return redirect('/calendario')->with('succes','CITA ELIMINADA');
    }
}
