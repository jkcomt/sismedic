<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EvaluacionConductorOperador extends Model
{
    protected $table = "evaluacion_conductor_operadores";

    protected $fillable = [
      'clase',
      'nro_licencia',
      'categoria',
      'maquina',
      'fecha_revalidacion',
      'aptitud',
      'observaciones',
      'fecha_registro',
      'cita_id',
      'estado'
    ];

    public $timestamps = false;
}
