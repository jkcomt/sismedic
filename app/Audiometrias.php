<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audiometrias extends Model
{
    protected $table="audiometrias";
    protected $fillable=[
      'acufenos',
      'vertigo',
      'hipoacusia',
      'otalgia',
      'exposicion_ruido',
      'enfermedad_respiratorio',
      'antecedente_viaje',
      'otros_sintomatologia_actual_estado',
      'otros_sintomatologia_actual',
      'nariz',
      'garganta',
      'oido',
      'otoscopia_od',
      'otoscopia_oi',
      'otros_orl',
      'marca',
      'modelo',
      'calibracion',
      'personales_id',
      'od_va1',
      'od_va2',
      'od_va3',
      'od_va4',
      'od_va5',
      'od_va6',
      'od_va7',
      'od_va8',
      'od_va9',
      'od_vo1',
      'od_vo2',
      'od_vo3',
      'od_vo4',
      'od_vo5',
      'od_vo6',
      'od_vo7',
      'od_vo8',
      'od_vo9',
      'oi_va1',
      'oi_va2',
      'oi_va3',
      'oi_va4',
      'oi_va5',
      'oi_va6',
      'oi_va7',
      'oi_va8',
      'oi_va9',
      'oi_vo1',
      'oi_vo2',
      'oi_vo3',
      'oi_vo4',
      'oi_vo5',
      'oi_vo6',
      'oi_vo7',
      'oi_vo8',
      'oi_vo9',
      'fecha_registro',
      'lista_examen_id',
      'cita_id',
      'estado',
      'user_id'
  ];

  public $timestamps = false;

  public function cita(){
      return $this->belongsTo(Cita::class);
  }

  public function listaExamen(){
      return $this->belongsTo(ListaExamen::class);
  }
}
