<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendario extends Model
{
    use HasFactory;
    public function disponibilidad(){
    
        return $this->belongsTo(Disponibilidad::class);
    }

    static $rules=[
        'title'=> 'required',
        'disponibilidad_id'=> 'required',
        'start'=> 'required',
        'end'=> 'required',
    ];

    protected $fillable=['title', 'start', 'end'];
}
