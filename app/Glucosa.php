<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Glucosa extends Model
{
    protected $table = "glucosas";

    protected $fillable = [
        'glucosa',
        'fecha_registro',
        'cita_id',
        'estado'
    ];

    public $timestamps = false;
}
