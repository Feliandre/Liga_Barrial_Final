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
        Schema::create('partidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('torneo_id')->nullable()->unsigned();
            $table->tinyInteger('goles_local')->unsigned()->default(0);
            $table->tinyInteger('goles_visitante')->unsigned()->default(0);
            $table->unsignedBigInteger('equipo_local_id');
            $table->unsignedBigInteger('equipo_visitante_id');
            $table->date('fecha');
            $table->time('hora');
            $table->timestamps();

            $table->foreign('torneo_id')
                  ->references('id')
                  ->on('torneos')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('equipo_local_id')
            ->references('id')
            ->on('equipos')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('equipo_visitante_id')
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
        Schema::dropIfExists('partidos');
    }
};
