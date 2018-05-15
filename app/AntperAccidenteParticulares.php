<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AntperAccidenteParticulares extends Model
{

protected $filas = "antper_accidente_particulares";

protected $fillable = [
    'descripcion',
    'anio',
    'tratamiento_actual',
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
