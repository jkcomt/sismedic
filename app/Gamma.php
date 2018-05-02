<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gamma extends Model
{
    protected $table = "gammas";

    protected $fillable = [
        'ggt',
        'fecha_registro',
        'cita_id',
        'estado'
    ];

    public $timestamps = false;
}
