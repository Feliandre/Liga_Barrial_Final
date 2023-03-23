<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'presidente_equipo_id',
        'nombre',
        'logo',
        'fecha_fundacion',
    ];

    // RELACIÓN DE UNO A UNO PRESIDENTE EQUIPO
    public function presidenteEquipo()
    {
        return $this->belongsTo(PresidenteEquipo::class);
    }

    //RELACION DE UNO A MUCHOS JUGADORES
    public function jugadores()
    {
        return $this->hasMany(Jugador::class);
    }

    //RELACION UNO A MUCHOS EQUIPO LOCAL
    public function partidosLocal()
    {
        return $this->hasMany(Partido::class, 'equipo_local_id');
    }

    //RELACION UNO A MUCHOS EQUIPO VISITANTE
    public function partidosVisitante()
    {
        return $this->hasMany(Partido::class, 'equipo_visitante_id');
    }

    
}
