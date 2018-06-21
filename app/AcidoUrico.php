<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcidoUrico extends Model
{
    protected $table = "acido_uricos";

    protected $fillable = [
        'acido_urico',
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
