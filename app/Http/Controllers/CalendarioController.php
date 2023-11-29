<?php

namespace App\Http\Controllers;
use App\Models\Calendario;

use Illuminate\Http\Request;

class CalendarioController extends Controller
{
    public function __construct(){
        $this->middleware('Auth');
    }


    public function index(){
        $data =  Calendario::all();
        return view ('calendario.index');
    }
}
