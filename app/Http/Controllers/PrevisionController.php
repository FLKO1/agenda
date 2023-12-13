<?php

namespace App\Http\Controllers;
use App\Models\Prevision;

use Illuminate\Http\Request;

class PrevisionController extends Controller
{
    public function index(){
        $previsions =Prevision::all();
        return view('prevision.index',compact('previsions'));
    }
    
    
    public function destroy($id)
    {
        $prevision = Prevision::findOrFail($id);
        $prevision->delete();
        return redirect('prevision.index')->with('succes','ELIMINADA');

    }

    public function create(){
        return view('prevision.create');
    }

    public function store(Request $request){

        $request->validate([
            'nombre' => 'required'
        ]);
        Prevision::create($request->all());
        return redirect()->route('prevision')->with('success', 'Estado nuevo creado');
    }
}
