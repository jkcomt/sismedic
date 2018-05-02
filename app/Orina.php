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
        'fecha_registro',
        'cita_id',
        'estado'
    ];

    public $timestamps = false;
}
