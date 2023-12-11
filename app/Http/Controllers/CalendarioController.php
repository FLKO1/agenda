<?php

namespace App\Http\Controllers;
use App\Models\Calendario;

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
        return view('calendario.create');
    
    }

    public function store(Request $request){

        $request->validate([
            'title' => 'required',
            'star' => 'required',
            'end'=> 'required',
        ]);
        Calendario::create($request->all());
        return redirect()->route('calendario')->with('success', 'Hora, creada con exito');


    }

    public function destroy($id)
    {
        Calendario::destroy($id);
        return redirect()->back();
    }
}
