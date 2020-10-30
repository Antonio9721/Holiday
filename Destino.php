<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    protected $fillable = [
        'nombre',
        'comunidad',
        'visitantes',
        'fecha',
        'tiempo'
    ];
}
