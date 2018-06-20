<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concluciones extends Model
{

    protected $table="concluciones";
    protected $fillable=[
    'diagnosticos_medicos',
    'diagnosticos_examenes_medicos',
    'recomendaciones',
    'observacion_interconsulta',
    'rc10_anios',
    'aptitud_larabal',
    'vencimiento_laboral',
    'fecha_registro',
    'paciente_id'
  ];


  public function paciente()
  {
    return $this->belongsTo(Paciente::class);
  }

    public $timestamps = false;
}
