<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Electrocardiograma extends Model
{
    protected  $table = "electrocardiogramas";

    protected $fillable = [
        'ritmo',
        'frecuencia_cardiaca',
        'eje_qrs',
        'eje_qrs_dos',
        'onda_p',
        'intervalo',
        'segmento_qrs',
        'qt_corregido',
        'isquemia',
        'hipertrofias',
        'otros_hallazgos',
        'lista_examen_id',
        'cita_id',
        'fecha_registro',
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
