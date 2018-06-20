<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thevenon extends Model
{
  protected $table="thevenons";
  protected $fillable=[
    'thevenon_descripcion',
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
