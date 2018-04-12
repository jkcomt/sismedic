<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FuncionVital extends Model
{
    protected $table = "funcion_vitales";

    protected $fillable = [
        'fecha',
        'talla',
        'peso',
        'imc',
        'temperatura',
        'fc',
        'fr',
        'ps',
        'pd',
        'sat_02',
        'en_reposo',
        'perimetro_abdominal',
        'maxima_inspiracion',
        'perimetro_cadera',
        'expiracion_forzada',
        'indice_cintura',
        'circunferencia_cuello',
        'cita_id',
        'estado'
    ];

    public $timestamps = false;

    public function cita(){
        return $this->belongsTo(Cita::class);
    }
}
