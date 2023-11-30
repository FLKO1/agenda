<?php

namespace App\Http\Controllers;

use App\Models\Disponibilidad;
use Illuminate\Http\Request;

class DisponibilidadController extends Controller
{
    public function index(){
        $disponibilida = Disponibilidad::latest()->get();
        return view('disponibilidad.index', ['disponibilidads'=> $disponibilida]);
    }

    public function destroy($id)
    {
        Disponibilidad::destroy($id);
        return redirect()->back();
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

}
