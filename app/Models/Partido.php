<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'torneo_id',
        'goles_local',
        'goles_visitante',
        'equipo_local_id',
        'equipo_visitante_id',
        'fecha',
        'hora',
    ];

    // RELACION UNO A UNO EQUIPO LOCAL
    public function equipos()
    {
        return $this->belongsToMany(Equipo::class);
    }

    // RELACIÓN DE UNO A MUCHOS
    public function torneo()
    {
        return $this->belongsTo(Torneo::class);
    }

    // RELACION DE MUCHOS A UNO
    public function calendario()
    {
        return $this->hasOne(Calendario::class);
    }
}
