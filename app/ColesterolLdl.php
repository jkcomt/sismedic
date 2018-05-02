<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ColesterolLdl extends Model
{
    protected $table = "colesterol_ldls";

    protected $fillable = [
        'colesterol_ldl',
        'fecha_registro',
        'cita_id',
        'estado'
    ];

    public $timestamps = false;
}
