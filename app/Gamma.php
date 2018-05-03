<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gamma extends Model
{
    protected $table = "gammas";

    protected $fillable = [
        'ggt',
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
