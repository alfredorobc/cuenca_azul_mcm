<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garrafon extends Model
{
    use HasFactory;

    protected $table = 'garrafones'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'numero',
        'status'
    ];
}
