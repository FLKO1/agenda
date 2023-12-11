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
        return view ('calendario.index');
    }

    public function create(){

    }

    public function store(Request $request){
        request()->validate(Calendario::$rules);
        $calendario=Calendario::create($request->all());
    }

    public function destroy($id)
    {
        Calendario::destroy($id);
        return redirect()->back();
    }
}
