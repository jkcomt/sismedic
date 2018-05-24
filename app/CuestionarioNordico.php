<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CuestionarioNordico extends Model
{
    protected $table = "cuestionario_nordicos";

    protected $fillable = [
      'datos_personales_anio',
      'datos_personales_mes',
      'datos_personales_horas',
      'datos_personales_usted_es',
      'problemas_organos_cuello',
      'cuello_rendimiento_laboral_casa',
      'cuello_ultimos7dias',
      'problemas_organos_hombros',
      'hombros_rendimiento_laboral_casa',
      'hombros_ultimos7dias',
      'problemas_organos_codos',
      'codos_rendimiento_laboral_casa',
      'codos_ultimos7dias',
      'problemas_organos_muniecas',
      'muniecas_rendimiento_laboral_casa',
      'muniecas_ultimos7dias',
      'problemas_organos_espalda_alta',
      'espalda_alta_rendimiento_laboral_casa',
      'espalda_alta_ultimos7dias',
      'problemas_organos_espalda_baja',
      'espalda_baja_rendimiento_laboral_casa',
      'espalda_baja_ultimos7dias',
      'problemas_organos_caderas_muslos',
      'caderas_muslos_rendimiento_laboral_casa',
      'caderas_muslos_ultimos7dias',
      'problemas_organos_rodillas',
      'rodillas_rendimiento_laboral_casa',
      'rodillas_ultimos7dias',
      'problemas_organos_tobillos_pies',
      'tobillos_pies_laboral_casa',
      'tobillos_pies_ultimos7dias',
      'problemas_espalda_baja_uno',
      'problemas_espalda_baja_dos',
      'problemas_espalda_baja_tres',
      'problemas_espalda_baja_cuatro',
      'problemas_espalda_baja_cinco',
      'problemas_espalda_baja_seis',
      'problemas_espalda_baja_siete',
      'problemas_espalda_baja_ocho',
      'problemas_espalda_baja_nueve',
      'problemas_hombros_uno',
      'problemas_hombros_dos',
      'problemas_hombros_tres',
      'problemas_hombros_cuatro',
      'problemas_hombros_cinco',
      'problemas_hombros_seis',
      'problemas_hombros_siete',
      'problemas_hombros_ocho',
      'problemas_hombros_nueve',
      'problemas_hombros_dies',
      'problemas_cuello_uno',
      'problemas_cuello_dos',
      'problemas_cuello_tres',
      'problemas_cuello_cuatro',
      'problemas_cuello_cinco',
      'problemas_cuello_seis',
      'problemas_cuello_siete',
      'problemas_cuello_ocho',
      'problemas_cuello_nueve',
      'fecha_registro',
      'lista_examen_id',
      'cita_id',
      'estado'
    ];

    public function paciente()
    {
      return $this->belongsTo(Paciente::class);
    }


    public $timestamps = false;
}
