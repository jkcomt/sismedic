<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AntecedentePersonal extends Model
{
    protected $table = "antecedente_personales";
    protected $fillable = [
      'sobrepeso',
      'enfermedad_cronica',
      'farmacos_uso_comun',
      'farmacos_uso_comun_descripcion',
      'alergias_no_medicantosa',
      'alergias_no_medicantosa_descripcion',
      'ram',
      'ram_descripcion',
      'practica_deportiva',
      'practica_deportiva_descripcion',
      'practica_deportiva_frecuencia',
      'fuma',
      'fuma_descripcion',
      'fuma_opciones',
      'fumaba',
      'fuma_prom_semanal',
      'alcohol',
      'alcohol_frecuencia',
      'alcohol_descripcion',
      'alcohol_tiempo',
      'coca',
      'coca_frecuencia',
      'coca_descripcion',
      'droga',
      'droga_frecuencia',
      'cafe',
      'cafe_frecuencia',
      'marcapasos',
      'coronariopatia',
      'epilepsia',
      'gota',
      'migrana',
      'vacuna_tetanos',
      'ronquidos',
      'humo_de_lena',
      'diabetes_melitus',
      'diabetes_melitus_ano_dx',
      'diabetes_melitus_tratamiento_actual',
      'hipertension_arterial',
      'hipertension_arterial_ano_dx',
      'hipertension_arterial_tratamiento_actual',
      'trombosis',
      'enfermedad_cardio_vascular',
      'enfermedad_cardio_vascular_descripcion',
      'insuficiencia_venosa',
      'insuficiencia_venosa_ano_dx',
      'insuficiencia_venosa_tratamiento_actual',
      'dislipidemia',
      'dislipidemia_ano_dx',
      'dislipidemia_tratamiento_actual',
      'enfermedades_tiroidea',
      'enfermedades_tiroidea_descripcion',
      'enfermedades_tiroidea_ano_dx',
      'enfermedades_tiroidea_tratamiendo_actual',
      'neoplasias',
      'neoplasias_descripcion',
      'neoplasias_ano_dx',
      'neoplasias_tratamiento_actual',
      'hobbies',
      'hobbies_descripcion',
      'fecha_registro date',
      'paciente_id',
      'estado'
    ];

    public function paciente()
    {
      return $this->belongsTo(Paciente::class);
    }

        public $timestamps = false;

}
