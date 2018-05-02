<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creatinina extends Model
{
    protected $table = "creatininas";

    protected $fillable = [
        'creatinina',
        'fecha_registro',
        'cita_id',
        'estado'
    ];

    public $timestamps = false;
}
