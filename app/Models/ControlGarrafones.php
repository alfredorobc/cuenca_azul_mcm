<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControlGarrafones extends Model
{
    use HasFactory;

    protected $table = 'control_garrafones'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'fecha_salida',
        'fecha_entrada',
        'user_id',
        'garrafon_id'
    ];
}
