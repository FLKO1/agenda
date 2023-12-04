<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use Illuminate\Http\Request;

class EspecialidadController extends Controller
{
    public function index(){
        $especialidades = Especialidad::all();
        return view ('especialidad.index', compact('especialidades'));
    }

    public function destroy($id)
    {
        Especialidad::destroy($id);
        return redirect()->back();
    }

    public function create(){
        return view('especialidad.create');
    }

    public function store(Request $request){

        $request->validate([
            'nombre' => 'required'
        ]);
        Especialidad::create($request->all());
        return redirect()->route('especialidad.index')->with('success', 'Estado nuevo creado');
    }
}
