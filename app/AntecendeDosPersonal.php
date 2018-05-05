<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AntecendeDosPersonal extends Model
{

  protected $table="antecende_dos_personales";

  protected $fillable=[
    'tuberculosis',
    'tuberculosis_anio_dx',
    'tuberculosis_meses_tratamiento',
    'hepatitis' ,
    'hepatitis_descripcion',
    'hepatitis_edad',
    'tifoidea' ,
    'tifoidea_ano_dx',
    'brucelosis',
    'brucelosis_anio_dx',
    'ulcera_hepatica',
    'convulsiones' ,
    'convulsiones_descripcion',
    'convulsiones_ano_dx',
    'convulsiones_tratamiento_actual',
    'gastritis',
    'gastritis_descripcion',
    'gastritis_ano_dx',
    'gastritis_tratamiento',
    'erge',
    'erge_descripcion',
    'erge_ano_dx',
    'erge_tratamiento_actual',
    'urolitiasis',
    'urolitiasis_ano_dx',
    'urolitiasis_tratamiento_actual',
    'hernia_inguinal',
    'hernia_inguinal_lado',
    'hernial_inguinal_ano_dx',
    'hernia_umbilical',
    'hernia_umbilical_ano_dx',
    'lumbalgia',
    'lumbalgia_lado',
    'lumbalgia_ano_dx',
    'lumbalgia_frecuencia_actual',
    'otros_transtornos_columna',
    'otros_transtornos_columna_descripcion',
    'desordenes_piel',
    'desordenes_piel_descripcion',
    'varices_miembros_inferior',
    'varices_miembros_inferior_descripcion',
    'its',
    'its_descripcion',
    'its_ano_dx',
    'its_tratamiento_actual',
    'otros_sintomas',
    'otros_sintomas_descripcion',
    'sintomatologia_6_meses',
    'fecha_registro',
    'paciente_id',
    'estado',
  ];
  public function paciente()
  {
    return $this->belongsTo(Paciente::class);
  }

      public $timestamps = false;
}
