<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiagnosticoEspirometria extends Model
{
  protected $table="diagnostico_espirometrias";
  protected $fillable=[
  'examenes_auxiliares',
  'observaciones',
  'diagnosticos_cie10_medico',
  'concluciones',
  'recomendaciones',
  'espirometria_normal',
  'patron_obstructivo_estacionario',
  'patron_obstructivo_cambio',
  'patron_restrictivo_estacionario',
  'patron_restrictivo_cambio',
  'patron_mixto_estacionario',
  'patron_mixto_cambio',
  'espirometria_pendiente',
  'repetir_espirometria',
  'espirometria_normal_cambio_significativo',
  'patron_espirometrico_posible_variante_normal',
  'patron_obstructivo_leve',
  'patron_obstructivo_moderado',
  'patron_obstructivo_moderado_grave',
  'patron_obstructivo_grave',
  'patron_obstructivo_posible_variante_normal',
  'fecha_registro',
  'lista_examen_id',
  'cita_id',
  'estado'
];

public $timestamps = false;

public function cita(){
    return $this->belongsTo(Cita::class);
}

public function listaExamen(){
    return $this->belongsTo(ListaExamen::class);
}
}
