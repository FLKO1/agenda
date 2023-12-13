<?php

namespace App\Http\Controllers;

use App\Models\Disponibilidad;
use Illuminate\Http\Request;

class DisponibilidadController extends Controller
{
    public function index(){
        $disponibilidads =Disponibilidad::all();
        return view('disponibilidad.index',compact('disponibilidads'));
    }

    public function create(){
        return view('disponibilidad.create');
    }

    public function store(Request $request){

        $request->validate([
            'nombre' => 'required'
        ]);
        Disponibilidad::create($request->all());
        return redirect()->route('disponibilidad.index')->with('success', 'Estado nuevo creado');
    }
    public function destroy($id)
    {
        $disponibilidad = Disponibilidad::findOrFail($id);
        $disponibilidad->delete();
        return redirect('/disponibilidad')->with('succes','ELIMINADA');
    }
}
