<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AntecedentesNeumologicos extends Model
{

  protected $table="antecedentes_neumologicos";
 protected $fillable=[
   'asma',
   'asma_descripcion',
   'asma_edad_dx',
   'asma_ultima_crisis',
   'rinitis',
   'epoc',
   'tos_nocturna',
   'otros_transtornos_nocturnos',
   'otros_transtornos_nocturnos_descripcion',
   'antecedentes_cardiovascular_uno',
   'antecedentes_cardiovascular_dos',
   'antecedentes_cardiovascular_tres',
   'antecedentes_cardiovascular_cuatro',
   'antecedentes_cardiovascular_cinco',
   'fecha_registro',
   'paciente_id',
   'paciente_id',
   'estado'
  ];

     public function paciente()
     {
       return $this->belongsTo(Paciente::class);
     }

         public $timestamps = false;

}
