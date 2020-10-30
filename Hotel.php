<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
     protected $fillable = [
    	'nombre',
    	'habitacion',
    	'nhabitacion',
    	'precio',
    	'fecha',
    	'hora',
    	'tiempo',
    	'npersonas',
    	'telefono'
    ];
}
