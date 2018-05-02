<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcidoUrico extends Model
{
    protected $table = "acido_uricos";

    protected $fillable = [
        'acido_urico',
        'fecha_registro',
        'cita_id',
        'estado'
    ];

    public $timestamps = false;
}
