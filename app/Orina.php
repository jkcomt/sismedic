<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orina extends Model
{
    protected $table = "orinas";

    protected $fillable = [
      'color',
      'aspecto',
      'densidad',
      'ph',
      'glucosa',
      'bilirrubinas',
      'cuerpos_cetonicos',
      'proteinas',
      'urobilinogeno',
      'nitritos',
      'hemoglobina',
      'sangre',
      'leucocitos',
      'hematies',
      'celulas_epiteliales',
      'cilindros',
      'cristales',
      'germenes',
      'filamentos_mucoides',
      'otros',
      'conclusion_orina',
      'dosaje_cocaina',
      'dosaje_marihuana',
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
