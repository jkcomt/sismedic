<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoExamen extends Model
{
    protected $table = "tipo_examenes";

    protected $fillable = [
      'descripcion',
      'estado'
    ];

    public $timestamps = false;
}
