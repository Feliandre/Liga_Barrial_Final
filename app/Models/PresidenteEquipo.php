<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PresidenteEquipo extends Model
{
    use HasFactory;

    protected $fillable = ['user_id'];

    // RELACIÓN DE UNO A UNO CON USUARIO
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // RELACIÓN DE UNO A UNO EQUIPO
    public function equipo()
    {
        return $this->hasOne(Equipo::class);
    }

}
