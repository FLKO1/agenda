<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    protected $table='pacientes';
    protected $primaryKey='id';
    protected $fillable = ['rut', 'nombre', 'apellido', 'correo', 'telefono', 'prevision'];
    protected $guarded=[];
     
}
