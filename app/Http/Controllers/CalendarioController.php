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
        //$data =  Calendario::all();
        $calendarios=Calendario::all();
        return view('calendario.index',compact('calendarios'));
    }

    public function create(){
        return view ('calendario.create');

    }

    public function store(Request $request){
        request()->validate([
            'title'=> 'requiered',
            'disponibilidad_id' => 'required',
            'star' => 'required',
            'end' => 'required'
        ]);
        Calendario::create($request->all());
        return redirect()->route('calendario')->with('success', 'Hora creada!');

    }

    public function destroy($id)
    {
        Calendario::destroy($id);
        return redirect()->back();
    }
}
