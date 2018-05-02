<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sifilis extends Model
{
    protected $table = "sifilis";

    protected $fillable = [
        'resultado',
        'fecha_registro',
        'cita_id',
        'estado'
    ];

    public $timestamps = false;
}
