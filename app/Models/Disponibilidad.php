<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disponibilidad extends Model
{
    use HasFactory;
    protected $table = 'disponibilidads';
    protected $fillable = ['nombre'];

    public function disponibilidad(){
        return $this->belongsTo(Disponibilidad::class);
    }
}
