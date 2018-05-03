<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ColesterolTotal extends Model
{
    protected $table = "colesterol_totales";

    protected $fillable = [
      'colesterol_total',
      'fecha_registro',
      'cita_id',
      'estado'
    ];

    public $timestamps = false;

    public function cita()
    {
      return $this->belongsTo(Cita::class);
    }
}
