<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiagnosticoElectrocardiograma extends Model
{
  protected $table="diagnostico_electrocardiogramas";
  protected $fillable=[
    'examenes_auxiliares',
    'observaciones',
    'diagnosticos_cie10_medico',
    'concluciones',
    'recomendaciones',
    'electrocardiograma_normal',
    'electrocardiograma_sin_patologico',
    'electrocardiograma_probable_patologico',
    'bradicardia',
    'bloqueo_incompleto_rama_derecha',
    'bloqueo_completo_rama_derecha',
    'hemibloqueo_anterior_izquierdo',
    'hemibloqueo_posterior_izquierdo',
    'bloqueo_primer_grado',
    'bloqueo_segundo_grado',
    'bloqueo_completo',
    'hipertrofia_ventricular_izquierda',
    'electrocardiograma_pendiente',
    'repetir_electrocardiograma',
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
