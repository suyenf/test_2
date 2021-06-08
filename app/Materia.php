<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    const TIPO_MATERIA = [
        'Cualitativa',
        'Cuantitativa'
    ];
    protected $fillable = [
        'nombre',
        'docente',
        'tipo_materia'

    ];
}
