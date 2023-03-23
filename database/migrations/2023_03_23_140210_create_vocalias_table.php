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
        Schema::create('vocalias', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_partido');
            $table->string('nombre_equipo_local');
            $table->string('nombre_equipo_visitante');
            $table->string('nombre_jugador_local');
            $table->string('nombre_jugador_visitante');
            $table->string('nombre_torneo');
            $table->string('nombre_presidente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vocalias');
    }
};
