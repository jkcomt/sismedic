<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ColesterolHdl extends Model
{
    protected $table = "colesterol_hdls";

    protected $fillable = [
        'colesterol_hdl',
        'fecha_registro',
        'cita_id',
        'estado'
    ];

    public $timestamps = false;
}
