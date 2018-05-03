<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ColesterolHdl extends Model
{
    protected $table = "colesterol_hdls";

    protected $fillable = [
        'colesterol_hdl',
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
