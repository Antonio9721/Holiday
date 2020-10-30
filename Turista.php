<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turista extends Model
{
     protected $fillable = [
     'nombre',
     'apellidop',
     'apellidom',
     'estado',
     'municipio',
     'edad',
     'telefono',
     'correo'
    ];
}
