<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Torneo extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'fecha_inicio',
        'fecha_fin'
    ];

    // RELACION DE MUCHOS A UNO EQUIPOS
    public function equipos()
    {
        return $this->hasMany(Partido::class);
    }

    // RELACION DE MUCHOS A UNO CALENDARIO
    public function calendario()
    {
        return $this->hasOne(Calendario::class);
    }

    
}
