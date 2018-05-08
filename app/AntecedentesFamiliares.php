<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AntecedentesFamiliares extends Model
{
  protected $table="antecedentes_familiares";
 protected $fillable=[
    'sobrepeso',
    'sobrepeso_parentesco_uno',
    'sobrepeso_parentesco_dos',
    'hipertension_arterial',
    'hipertension_arterial_parentesco_uno',
    'hipertension_arterial_parentesco_dos',
    'enfermedad_cardiovascular',
    'enfermedad_cardiovascular_parentesco_uno',
    'enfermedad_cardiovascular_parentesco_dos',
    'insuficiencia_venosa',
    'insuficiencia_venosa_parentesco_uno',
    'insuficiencia_venosa_parentesco_dos',
    'dislipidemia',
    'dislipidemia_parentesco_uno',
    'dislipidemia_parentesco_dos',
    'diabetes_melitus',
    'diabetes_melitus_parentesco_uno',
    'diabetes_melitus_parentesco_dos',
    'glaucoma',
    'glaucoma_parentesco_uno',
    'glaucoma_parentesco_dos',
    'cataratas',
    'cataratas_parentesco_uno',
    'cataratas_parentesco_dos',
    'cancer_ginecologico',
    'cancer_ginecologico_parentesco_uno',
    'cancer_ginecologico_parentesco_dos',
    'cancer_ginecologico_descripcion',
    'cancer_colon',
    'cancer_colon_parentesco_uno',
    'cancer_colon_parentesco_dos',
    'otros_formas_cancer',
    'otros_formas_cancer_parentesco_uno',
    'otros_formas_cancer_parentesco_dos',
    'otros_formas_cancer_descripcion',
    'epilepsia',
    'epilepsia_parentesco_uno',
    'epilepsia_parentesco_dos',
    'asma',
    'asma_parentesco_uno',
    'asma_parentesco_dos',
   'familiares_otros',
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
