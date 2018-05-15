<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Antper_Hozpitalizaciones extends Model
{

    protected $table="antper__hozpitalizaciones";

    protected $fillable=[
        'motivo',
        'anio',
        'fecha_registro',
        'paciente_id',
        'estado'
    ];
    public function paciente()
    {
      return $this->belongsTo(Paciente::class);
    }

        public $timestamps = false;



}
