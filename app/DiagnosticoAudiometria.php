<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiagnosticoAudiometria extends Model
{
  protected $table="diagnostico_audiometrias";
  protected $fillable=[
    'examenes_auxiliares',
    'observaciones',
    'diagnosticos_cie10_medico',
    'concluciones',
    'recomendaciones',
    'audiometria_normal',
    'hipoacusia_neurosensorial_bilateral',
    'hipoacusia_neurosensorial_derecha',
    'hipoacusia_neurosensorial_izquierda',
    'hipoacusia_conductiva_Bilateral',
    'hipoacusia_conductiva_derecha',
    'hipoacusia_conductiva_izquierda',
    'hipoacusia_mixta_Bilateral',
    'hipoacusia_mixta_derecha',
    'hipoacusia_mixta_izquierda',
    'alteracion_no_inducida_por_ruido',
    'descartar_trauma_acustico_leve',
    'descartar_trauma_acustico_avanzado',
    'descartar_danio_acustico_leve',
    'descartar_danio_acustico_moderado',
    'descartar_danio_acustico_avanzado',
    'cambio_significativo_positivo',
    'audiometria_pendiente',
    'repetir_audiometria',
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
