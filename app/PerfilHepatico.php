<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerfilHepatico extends Model
{
  protected $table="perfil_hepaticos";
  protected $fillable=[
    'bilirrubina_total',
    'bilirrubina_dta',
    'bilirrubina_idta',
    'fosfatosa_alc',
    'tgo',
    'tgp',
    'proteinas_totales',
    'albumina',
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
