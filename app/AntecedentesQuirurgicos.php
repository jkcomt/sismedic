<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AntecedentesQuirurgicos extends Model
{
  protected $table="antecedentes_quirurgicos";
 protected $fillable=[
    'apendicetomia',
    'apendicetomia_anio',
    'colecistectomia',
    'colecistectomia_anio',
    'herniorrafa_umbilical',
    'herniorrafa_umbilical_anio',
    'herniorrafa_inguinal',
    'herniorrafa_inguinal_anio',
    'ocular',
    'ocular_descripcion',
    'otorrino',
    'otorrino_descripcion',
    'obstetricia',
    'cesarea',
    'cesarea_descripcion',
    'otras_cirugias',
    'otras_cirugias_fecha',
    'otras_cirugias_observaciones',
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
