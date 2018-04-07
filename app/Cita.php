<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $filas = "Citas";

    protected $fillable = [
        'nro_serie_cita',
        'paciente_id',
        'cliente_cuenta_id ',
        'tipo_examen_id',
        'perfil_id',
        'fecha_examen',
        'hora_examen',
        'fecha_registro',
        'hora_registro',
        'estado'
    ];

    public $timestamps = false;
}
