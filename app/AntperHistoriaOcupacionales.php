<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AntperHistoriaOcupacionales extends Model
{

  protected $table="antper_historia_ocupacionales";

  protected $fillable=[
    'fechainicio',
    'fechafin',
    'empresa_lugar',
    'rubro',
    'altitud',
    'area_empresa',
    'ocupacion',
    'labor_superficie',
    'labor_socavon',
    'riesgo_ocupacional',
    'medios_proteccion',
    'accidentes_ocupacionales',
    'Enfermedad_ocupacional',
    'uso_epp',
    'tipos_proteccion',
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
