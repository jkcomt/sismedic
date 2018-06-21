<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Espirometria extends Model
{
    protected  $table = "espirometrias";
    protected $fillable=[
      'grupo_etnico',
      'fumador',
      'calidad',
      'talla',
      'peso',
      'result1',
      'result2',
      'result3',
      'result4',
      'result5',
      'prediccion1',
      'prediccion2',
      'prediccion3',
      'prediccion4',
      'prediccion5',
      'porcentaje_prediccion1',
      'porcentaje_prediccion2',
      'porcentaje_prediccion3',
      'porcentaje_prediccion4',
      'porcentaje_prediccion5',
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
