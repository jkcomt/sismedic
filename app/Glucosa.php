<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Glucosa extends Model
{
    protected $table = "glucosas";

    protected $fillable = [
        'glucosa',
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
