<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerfilExamen extends Model
{
    protected $table = "perfiles";

    protected $fillable = [
        'perfil_id',
        'lista_examen_id',
        'estado'
    ];

    public $timestamps = false;
}
