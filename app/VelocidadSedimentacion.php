<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VelocidadSedimentacion extends Model
{
    protected $table = "velocidad_sedimentaciones";

    protected $fillable = [
        'velocidad_sedimentacion_globular',
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
