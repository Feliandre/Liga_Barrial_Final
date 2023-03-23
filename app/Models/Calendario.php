<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendario extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'torneo_id',
        'partido_id',
    ];

    //RELACION DE UNO A MUCHOS PARTIDOS
    public function partidos()
    {
        return $this->belongsToMany(Partido::class, 'partido_id');
    }

    // RELACIÓN DE UNO A UNO TORNEO
    public function torneo()
    {
        return $this->belongsTo(Torneo::class, 'torneo_id');
    }
}
