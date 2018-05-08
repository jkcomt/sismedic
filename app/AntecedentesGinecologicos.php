<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AntecedentesGinecologicos extends Model
{
  protected $table="antecedentes_ginecologicos";
 protected $fillable=[
   'fecha_ultima_regla',
     'gestaciones',
     'atermino',
     'abortos',
     'prematuro',
     'vivos',
   'menarquia',
   'regimen_catamenial',
     'ultimo_parto',
   'ultimo_parto_anio',
   'ultimo_parto_descripcion',
     'ultimo_papanocolau',
   'ultimo_papanocolau_anio',
   'ultimo_papanocolau_descripcion',
     'ultima_Mamografia',
   'ultima_Mamografia_anio',
   'ultima_Mamografia_descripcion',
     'incontinencia_urinaria',
   'incontinencia_urinaria_anio',
   'incontinencia_urinaria_descripcion',
     'ultimo_chequeo_ginecologico',
   'ultimo_chequeo_ginecologico_anio',
   'ultimo_chequeo_ginecologico_descripcion',
     'uso_anticonceptivo',
   'uso_anticonceptivo_descripcion',
     'otros_antecedentes',
   'otros_antecedentes_descripcion',
     'cancer_cervix',
   'cancer_cervix_anio',
   'cancer_cervix_descripcion',
     'cancer_mama',
   'cancer_mama_anio',
   'cancer_mama_descripcion',
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
