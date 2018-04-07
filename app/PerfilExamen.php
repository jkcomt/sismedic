<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerfilExamen extends Model
{
    protected $table = "perfil_examenes";

    protected $fillable = [
        'perfil_id',
        'lista_examen_id',
        'estado'
    ];

    public $timestamps = false;

    public function perfil(){
        return $this->belongsTo(Perfil::class);
    }

    public function listaExamen(){
        return $this->belongsTo(ListaExamen::class);
    }
}
