<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ColesterolTotal extends Model
{
    protected $table = "colesterol_totales";

    protected $fillable = [
      'colesterol_total',
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
