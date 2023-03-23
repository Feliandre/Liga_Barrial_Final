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
        Schema::create('jugadors', function (Blueprint $table) {
            //$table->string('ci_player')->primary();
            $table->id();
            $table->string('cedula',10);
            $table->string('nombre');
            $table->string('apellido');
            $table->unsignedBigInteger('equipo_id');
            $table->tinyInteger('edad')->unsigned();
            $table->date('fecha_nacimiento');
            $table->tinyInteger('numero_camiseta')->unsigned();
            $table->tinyInteger('goles')->unsigned();
            $table->timestamps();

            $table->foreign('equipo_id')
                  ->references('id')
                  ->on('equipos')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jugadors');
    }
};
