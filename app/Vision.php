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
        'vision_encandilada',
        'recuperacion_encandilamiento',
        'fecha_registro',
        'cita_id',
        'estado'
    ];

    public $timestamps = false;
}
