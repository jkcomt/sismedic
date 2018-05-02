<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Triglicerido extends Model
{
    protected $table = "trigliceridos";

    protected $fillable = [
        'triglicerido',
        'fecha_registro',
        'cita_id',
        'estado'
    ];

    public $timestamps = false;
}
