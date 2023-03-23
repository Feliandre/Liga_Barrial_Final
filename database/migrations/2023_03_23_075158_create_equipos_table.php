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
        Schema::create('equipos', function (Blueprint $table) {

            //$table->string('code_soccer_team',10)->primary();
            $table->id();
            $table->string('nombre');
            $table->unsignedBigInteger('presidente_equipo_id')->unique();
            $table->string('logo');
            $table->date('fecha_fundacion');
            $table->timestamps();

            $table->foreign('presidente_equipo_id')
                  ->references('id')
                  ->on('presidente_equipos')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipos');
    }
};
