<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('rut',12)->unique();
            $table->string('nombre',20);
            $table->string('apellido',20);
            $table->string('correo',50)->unique();
            $table->string('telefono',20);
            $table->enum('prevision', ['Fonasa', 'Isapre', 'Ninguna']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};

