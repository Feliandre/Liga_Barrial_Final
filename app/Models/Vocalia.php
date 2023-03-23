<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Vocalia extends Model
{
    
    static $rules = [
		'fecha_partido' => 'required',
		'nombre_equipo_local' => 'required',
		'nombre_equipo_visitante' => 'required',
		'nombre_jugador_local' => 'required',
		'nombre_jugador_visitante' => 'required',
		'nombre_torneo' => 'required',
		'nombre_presidente' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha_partido','nombre_equipo_local','nombre_equipo_visitante','nombre_jugador_local','nombre_jugador_visitante','nombre_torneo','nombre_presidente'];



}

