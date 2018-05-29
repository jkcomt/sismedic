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
          $table->string('datos_personales_anio')->nullable();
          $table->string('datos_personales_mes')->nullable();
          $table->string('datos_personales_horas')->nullable();
          $table->string('datos_personales_usted_es')->nullable();

          $table->boolean('problemas_organos_cuello')->nullable();
          $table->boolean('cuello_rendimiento_laboral_casa')->nullable();
          $table->boolean('cuello_ultimos7dias')->nullable();

          $table->string('problemas_organos_hombros')->nullable();
          $table->boolean('hombros_rendimiento_laboral_casa')->nullable();
          $table->boolean('hombros_ultimos7dias')->nullable();

          $table->string('problemas_organos_codos')->nullable();
          $table->boolean('codos_rendimiento_laboral_casa')->nullable();
          $table->boolean('codos_ultimos7dias')->nullable();


          $table->string('problemas_organos_muniecas')->nullable();
          $table->boolean('muniecas_rendimiento_laboral_casa')->nullable();
          $table->boolean('muniecas_ultimos7dias')->nullable();


          $table->boolean('problemas_organos_espalda_alta')->nullable();
          $table->boolean('espalda_alta_rendimiento_laboral_casa')->nullable();
          $table->boolean('espalda_alta_ultimos7dias')->nullable();

          $table->boolean('problemas_organos_espalda_baja')->nullable();
          $table->boolean('espalda_baja_rendimiento_laboral_casa')->nullable();
          $table->boolean('espalda_baja_ultimos7dias')->nullable();

          $table->boolean('problemas_organos_caderas_muslos')->nullable();
          $table->boolean('caderas_muslos_rendimiento_laboral_casa')->nullable();
          $table->boolean('caderas_muslos_ultimos7dias')->nullable();

          $table->boolean('problemas_organos_rodillas')->nullable();
          $table->boolean('rodillas_rendimiento_laboral_casa')->nullable();
          $table->boolean('rodillas_ultimos7dias')->nullable();

          $table->boolean('problemas_organos_tobillos_pies')->nullable();
          $table->boolean('tobillos_pies_laboral_casa')->nullable();
          $table->boolean('tobillos_pies_ultimos7dias')->nullable();

          $table->boolean('problemas_espalda_baja_uno')->nullable();
          $table->boolean('problemas_espalda_baja_dos')->nullable();
          $table->boolean('problemas_espalda_baja_tres')->nullable();
          $table->string('problemas_espalda_baja_cuatro')->nullable();
          $table->boolean('problemas_espalda_baja_cinco')->nullable();
          $table->boolean('problemas_espalda_baja_seis')->nullable();
          $table->string('problemas_espalda_baja_siete')->nullable();
          $table->boolean('problemas_espalda_baja_ocho')->nullable();
          $table->boolean('problemas_espalda_baja_nueve')->nullable();

          $table->boolean('problemas_hombros_uno')->nullable();
          $table->string('problemas_hombros_dos')->nullable();
          $table->boolean('problemas_hombros_tres')->nullable();
          $table->string('problemas_hombros_cuatro')->nullable();
          $table->string('problemas_hombros_cinco')->nullable();
          $table->boolean('problemas_hombros_seis')->nullable();
          $table->boolean('problemas_hombros_siete')->nullable();
          $table->string('problemas_hombros_ocho')->nullable();
          $table->boolean('problemas_hombros_nueve')->nullable();
          $table->string('problemas_hombros_dies')->nullable();

          $table->boolean('problemas_cuello_uno')->nullable();
          $table->boolean('problemas_cuello_dos')->nullable();
          $table->boolean('problemas_cuello_tres')->nullable();
          $table->string('problemas_cuello_cuatro')->nullable();
          $table->boolean('problemas_cuello_cinco')->nullable();
          $table->boolean('problemas_cuello_seis')->nullable();
          $table->string('problemas_cuello_siete')->nullable();
          $table->boolean('problemas_cuello_ocho')->nullable();
          $table->boolean('problemas_cuello_nueve')->nullable();


          $table->date('fecha_registro');
          $table->foreign('lista_examen_id')->references('id')->on('lista_examenes');
          $table->integer('lista_examen_id')->unsigned()->nullable();
          $table->foreign('cita_id')->references('id')->on('citas');
          $table->integer('cita_id')->unsigned()->nullable();
          $table->boolean('estado');
          //$table->timestamps();
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
