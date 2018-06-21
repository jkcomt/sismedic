<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hemograma extends Model
{
    protected $table = "hemogramas";

    protected $fillable = [
        'hemoglobina',
        'hematocrito',
        'leucocitos',
        'abastonados',
        'segmentados',
        'monocitos',
        'linfocitos',
        'eosinofilos',
        'basofilos',
        'vsg',
        'gpo_sanguineo',
        'factor_rh',
        'conclusion_hemograma',
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
