<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'cedula',
        'nombre',
        'apellido',
        'equipo_id', 
        'edad', 
        'fecha_nacimiento',
        'numero_camiseta',
        'goles',
    ];


    //RELACION DE UNO A MUCHOS EQUIPOS
    public function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }

    
}
