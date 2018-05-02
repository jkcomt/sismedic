<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CuestionarioNordico extends Model
{
    protected $table = "cuestionario_nordicos";

    protected $fillable = [
        'datos_personales_anos_tiempo_trabajo',
        'datos_personales_meses_tiempo_trabajo',
        'promedio_hora_semanal_trabajo',
        'usted_es',

        'todos_cuello',
        'todos_hombros',
        'todos_codo',
        'todos_muneca',
        'todos_espalda_alta',
        'todos_espalda_baja',
        'todos_caderas_muslos',
        'todos_rodillas',
        'todos_tobillos_pies',

        'problema_12_meses_cuello',
        'problema_12_meses_hombros',
        'problema_12_meses_codo',
        'problema_12_meses_muneca',
        'problema_12_meses_espalda_alta',
        'problema_12_meses_caderas_muslos',
        'problema_12_meses_rodillas',
        'problema_12_meses_tobillos_pies',

        'problema_7_dias_cuello',
        'problema_7_dias_hombros',
        'problema_7_dias_codo',
        'problema_7_dias_muneca',
        'problema_7_dias_espalda_alta',
        'problema_7_dias_caderas_muslos',
        'problema_7_dias_rodillas',
        'problema_7_dias_tobillos_pies',

        'problemas_espalda_baja_item_1',
        'problemas_espalda_baja_item_2',
        'problemas_espalda_baja_item_3',
        'problemas_espalda_baja_item_4',
        'problemas_espalda_baja_item_5_1',
        'problemas_espalda_baja_item_5_2',
        'problemas_espalda_baja_item_6',
        'problemas_espalda_baja_item_7',
        'problemas_espalda_baja_item_8',
        'problemas_espalda_baja_item_9',
        'problemas_espalda_baja_item_10',
        'problemas_espalda_baja_item_11',
        'problemas_espalda_baja_item_12',
        'problemas_espalda_baja_item_13',
        'problemas_espalda_baja_item_14_1',
        'problemas_espalda_baja_item_14_2',
        'problemas_espalda_baja_item_15',
        'problemas_espalda_baja_item_16',

        'problemas_con_cuello_item_1',
        'problemas_con_cuello_item_2',
        'problemas_con_cuello_item_3',
        'problemas_con_cuello_item_4',
        'problemas_con_cuello_item_5_1',
        'problemas_con_cuello_item_5_2',
        'problemas_con_cuello_item_6',
        'problemas_con_cuello_item_7',
        'problemas_con_cuello_item_8',

        'fecha_registro',
        'cita_id',
        'estado'
    ];

    public $timestamps = false;
}
