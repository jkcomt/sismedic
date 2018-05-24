<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EvaluacionConduccionVehiculos extends Model
{

  protected $table = "evaluacion_conduccion_vehiculos";

  protected $fillable = [
    'estado_evaluacion',
    'anamnesis_evaluacion_capacidades1',
    'anamnesis_evaluacion_capacidades2',
    'anamnesis_evaluacion_capacidades3',
    'anamnesis_evaluacion_capacidades4',
    'anamnesis_evaluacion_capacidades5',
    'anamnesis_evaluacion_capacidades6',
    'anamnesis_evaluacion_capacidades7',
    'anamnesis_evaluacion_capacidades8',
    'anamnesis_evaluacion_capacidades9',
    'anamnesis_evaluacion_capacidades10',
    'exploracion_fisica_fc',
    'exploracion_fisica_fr',
    'exploracion_fisica_pa',
    'exploracion_fisica_talla',
    'exploracion_fisica_peso',
    'exploracion_fisica_imc',
    'exploracion_fisica_perimetro_cuello',
    'exploracion_fisica_perimetro_cintura',
    'exploracion_fisica_perimetro_cadera',
    'exploracion_fisica_icc',
    'exploracion_fisica_perimetro_toraxico_inspiracion',
    'exploracion_fisica_perimetro_toraxico_espiracion',
    'exploracion_fisica_capacidades1',
    'exploracion_fisica_capacidades2',
    'exploracion_fisica_capacidades3',
    'exploracion_fisica_capacidades4',
    'exploracion_fisica_capacidades5',
    'exploracion_fisica_capacidades6',
    'exploracion_fisica_capacidades7',
    'exploracion_fisica_capacidades8',
    'exploracion_fisica_capacidades9',
    'exploracion_fisica_capacidades10',
    'exploracion_fisica_perimetro_detalle',
    'prueba_auxiliar_capacidades1',
    'prueba_auxiliar_capacidades2',
    'prueba_auxiliar_capacidades3',
    'prueba_auxiliar_capacidades4',
    'prueba_auxiliar_capacidades5',
    'prueba_auxiliar_capacidades6',
    'detalle_medicinas',
    'otro',
    'evaluacion_funcional_desde',
    'evaluacion_funcional_hasta',
    'evaluacion_funcional_estado',
    'evaluacion_funcional_comentarios',
    'evaluacion_funcional_observaciones',
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
