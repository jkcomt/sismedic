<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AntecedentesORL extends Model
{
    protected $table="antecedentes_o_r_ls";
   protected $fillable=[
     'hipoacusia',
   'hipoacusia_descripcion' ,
   'hipoacusia_anio_dx' ,
   'hipoacusia_tratamiento_actual' ,
     'traumas' ,
   'traumas_descripcion' ,
   'traumas_anio_dx' ,
   'traumas_tratamiento_actual' ,
     'otitiscronica' ,
   'otitiscronica_descripcion' ,
   'otitiscronica_anio_dx' ,
   'otitiscronica_tratamiento_actual' ,
     'sordera' ,
     'meningitis' ,
     'sarampion' ,
     'exp_lab_al_ruido' ,
     'tiro' ,
     'tec' ,
     'parotiditis' ,
     'uso_audifonos',
     'uso_ototoxicos' ,
     'tapones_auditivos' ,
   'tapones_auditivos_descripcion' ,
     'orejeras' ,
   'orejeras_descripcion' ,
     'algodones' ,
   'algodones_descripcion' ,
     'otros_especificar' ,
   'otros_especificar_descripcion' ,
     'apreciacion_ruido' ,
   'apreciacion_ruido_descripcion' ,
   'observaciones' ,
    'fecha_registro' ,
    'paciente_id',
     'estado'
   ];


   public function paciente()
   {
     return $this->belongsTo(Paciente::class);
   }

       public $timestamps = false;

}
