<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AntperAccidenteLaborales extends Model
{
  protected $filas = "antper_accidente_laborales";

  protected $fillable = [

      'descripcion',
      'anio',
      'tratamiento_actual',
      'importancia_patologica',
      'fecha_registro',
      'paciente_id',
      'estado'
  ];

  public function paciente()
  {
    return $this->belongsTo(Paciente::class);
  }

  public $timestamps = false;

}
