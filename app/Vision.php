<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vision extends Model
{
    protected $table = "visiones";

    protected $fillable = [
      'av_lejos_od_sl',
      'av_lejos_od_cl',
      'av_lejos_oi_sl',
      'av_lejos_oi_cl',
      'av_cerca_od_sl',
      'av_cerca_od_cl',
      'av_cerca_oi_sl',
      'av_cerca_oi_cl',
      'av_binocular',
      'test_ishihara_colores',
      'discriminacion_colores',
      'vision_profundidad',
      'vision_perimetral',
      'foria_vertical',
      'foria_horizontal',
      'vision_nocturna',
      'vision_encandilada',
      'recuperacion_encandilamiento',
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
