<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AntecedentesOculares extends Model
{
    //

    protected $table="antecedentes_oculares";

    protected $fillable=[
      'glaucoma',
      'glaucoma_descripcion',
      'glaucoma_anio_dx',
      'glaucoma_tratamiento_actual',
      'cataratas',
      'cataratas_descripcion',
      'cataratas_anio_dx',
      'cataratas_tratamiento_actual',
      'ametropia',
      'ametropia_descripcion',
      'ametropia_anio_dx',
      'ametropia_tratamiento_actual',
      'retinopatia',
      'otros_oculares',
      'otros_oculares_descripcion',
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
