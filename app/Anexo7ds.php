<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anexo7ds extends Model
{
    protected  $table = "anexo7ds";

    protected $fillable = [
        'anemia',
        'cirugia_mayor_reciente',
        'desordenes_coagulacion',
        'diabetes_mellitus',
        'hipertension_arterial',
        'embarazo',
        'problemas_neurologicos',
        'infecciones_recientes',
        'obesidad_morbida',
        'problemas_cardiacos',
        'problemas_respiratorios',
        'problemas_oftalmologicos',
        'problemas_digestivos',
        'apnea_del_sueno',
        'otra_condicion',
        'alergias',
        'uso_de_medicacion_actual',
        'observacion',
        'apto',
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
