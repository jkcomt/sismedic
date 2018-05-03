<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuestionarioNordicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuestionario_nordicos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('datos_personales_anos_tiempo_trabajo');
            $table->integer('datos_personales_meses_tiempo_trabajo');
            $table->integer('promedio_hora_semanal_trabajo');
            $table->string('usted_es');

            $table->boolean('todos_cuello');
            $table->string('todos_hombros');
            $table->string('todos_codo');
            $table->string('todos_muneca');
            $table->boolean('todos_espalda_alta');
            $table->boolean('todos_espalda_baja');
            $table->boolean('todos_caderas_muslos');
            $table->boolean('todos_rodillas');
            $table->boolean('todos_tobillos_pies');

            $table->boolean('problema_12_meses_cuello');
            $table->boolean('problema_12_meses_hombros');
            $table->boolean('problema_12_meses_codo');
            $table->boolean('problema_12_meses_muneca');
            $table->boolean('problema_12_meses_espalda_alta');
            $table->boolean('problema_12_meses_caderas_muslos');
            $table->boolean('problema_12_meses_rodillas');
            $table->boolean('problema_12_meses_tobillos_pies');

            $table->boolean('problema_7_dias_cuello');
            $table->boolean('problema_7_dias_hombros');
            $table->boolean('problema_7_dias_codo');
            $table->boolean('problema_7_dias_muneca');
            $table->boolean('problema_7_dias_espalda_alta');
            $table->boolean('problema_7_dias_caderas_muslos');
            $table->boolean('problema_7_dias_rodillas');
            $table->boolean('problema_7_dias_tobillos_pies');

            $table->boolean('problemas_espalda_baja_item_1');
            $table->boolean('problemas_espalda_baja_item_2');
            $table->boolean('problemas_espalda_baja_item_3');
            $table->string('problemas_espalda_baja_item_4');
            $table->boolean('problemas_espalda_baja_item_5_1');
            $table->boolean('problemas_espalda_baja_item_5_2');
            $table->string('problemas_espalda_baja_item_6');
            $table->boolean('problemas_espalda_baja_item_7');
            $table->boolean('problemas_espalda_baja_item_8');

            $table->boolean('problemas_espalda_baja_item_9');
            $table->string('problemas_espalda_baja_item_10');
            $table->boolean('problemas_espalda_baja_item_11');
            $table->string('problemas_espalda_baja_item_12');
            $table->string('problemas_espalda_baja_item_13');
            $table->boolean('problemas_espalda_baja_item_14_1');
            $table->boolean('problemas_espalda_baja_item_14_2');
            $table->string('problemas_espalda_baja_item_15');
            $table->boolean('problemas_espalda_baja_item_16');

            $table->boolean('problemas_con_cuello_item_1');
            $table->boolean('problemas_con_cuello_item_2');
            $table->boolean('problemas_con_cuello_item_3');
            $table->string('problemas_con_cuello_item_4');
            $table->boolean('problemas_con_cuello_item_5_1');
            $table->boolean('problemas_con_cuello_item_5_2');
            $table->string('problemas_con_cuello_item_6');
            $table->boolean('problemas_con_cuello_item_7');
            $table->boolean('problemas_con_cuello_item_8');

            $table->date('fecha_registro');
            $table->foreign('lista_examen_id')->references('id')->on('lista_examenes');
            $table->integer('lista_examen_id')->unsigned()->nullable();
            $table->foreign('cita_id')->references('id')->on('citas');
            $table->integer('cita_id')->unsigned()->nullable();
            $table->boolean('estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuestionario_nordicos');
    }
}
