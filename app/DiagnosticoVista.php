<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiagnosticoVista extends Model
{
  protected $table="diagnostico_vistas";
  protected $fillable=[
    'examenes_auxiliares',
    'observaciones',
    'diagnosticos_cie10_medico',
    'concluciones',
    'recomendaciones',
    'vision_emetrope',
    'ametropia_corregida',
    'ametropia_no_corregida',
    'ambliopia_suficiente',
    'ambliopia_insuficiente',
    'discromatopsia',
    'vision_estereooptica',
    'vision_nocturna',
    'recuperacion_al_encadilamiento',
    'foria_alterada',
    'campo_visual_alterado',
    'pendiente_examen_oftalmologico',
    'repetir_examen_oftalmologico',
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
