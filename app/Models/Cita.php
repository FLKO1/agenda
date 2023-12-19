<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $fillable = [
        'evento_id',
        'paciente_id',
        'especialidad',
    ];

    public function calendario(){
        return $this->belongsTo(Calendario::class, 'calendario_id');

    }

}
