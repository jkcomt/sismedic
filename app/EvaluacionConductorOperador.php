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
      'lista_examen_id',
      'cita_id',
      'estado'
    ];

    public function paciente()
    {
      return $this->belongsTo(Paciente::class);
    }

    public $timestamps = false;
}
