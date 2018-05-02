<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VelocidadSedimentacion extends Model
{
    protected $table = "velocidad_sedimentaciones";

    protected $fillable = [
        'velocidad_sedimentacion_globular',
        'fecha_registro',
        'cita_id',
        'estado'
    ];

    public $timestamps = false;
}
