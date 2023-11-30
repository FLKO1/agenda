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
}
