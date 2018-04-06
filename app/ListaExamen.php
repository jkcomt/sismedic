<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListaExamen extends Model
{
    protected $table = "lista_examenes";

    protected $fillable = [
        'descripcion',
        'tipo',
        'valor',
        'dscto',
        'estado'
    ];



    public $timestamps = false;
}
