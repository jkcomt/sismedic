<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAudiometriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audiometrias', function (Blueprint $table) {
            $table->increments('id');
/*SINTOMATOLOGIA ACTUAL*/
            $table->boolean('acufenos')->nullable();
            $table->boolean('vertigo')->nullable();
            $table->boolean('hipoacusia')->nullable();
            $table->boolean('otalgia')->nullable();
            $table->boolean('exposicion_ruido')->nullable();
            $table->boolean('enfermedad_respiratorio')->nullable();
            $table->boolean('antecedente_viaje')->nullable();
            $table->boolean('otros_sintomatologia_actual_estado')->nullable();
            $table->string('otros_sintomatologia_actual')->nullable();
              /*EXAMEN ORL*/
            $table->string('nariz')->nullable();
            $table->string('garganta')->nullable();
            $table->string('oido')->nullable();
            $table->string('otoscopia_od')->nullable();
            $table->string('otoscopia_oi')->nullable();
            $table->string('otros_orl')->nullable();


            /*Datos del audiometro*/
            $table->string('marca')->nullable();
            $table->string('modelo')->nullable();
            $table->string('calibracion')->nullable();
            /*profesional que realiza la audiometria*/

            $table->foreign('personales_id')->references('id')->on('personales');
            $table->integer('personales_id')->unsigned()->nullable();
            /*oido derecho hz*/
            $table->string('od_va1')->nullable();
            $table->string('od_va2')->nullable();
            $table->string('od_va3')->nullable();
            $table->string('od_va4')->nullable();
            $table->string('od_va5')->nullable();
            $table->string('od_va6')->nullable();
            $table->string('od_va7')->nullable();
            $table->string('od_va8')->nullable();
            $table->string('od_va9')->nullable();

            $table->string('od_vo1')->nullable();
            $table->string('od_vo2')->nullable();
            $table->string('od_vo3')->nullable();
            $table->string('od_vo4')->nullable();
            $table->string('od_vo5')->nullable();
            $table->string('od_vo6')->nullable();
            $table->string('od_vo7')->nullable();
            $table->string('od_vo8')->nullable();
            $table->string('od_vo9')->nullable();
            /*oido izquierdo hz*/
            $table->string('oi_va1')->nullable();
            $table->string('oi_va2')->nullable();
            $table->string('oi_va3')->nullable();
            $table->string('oi_va4')->nullable();
            $table->string('oi_va5')->nullable();
            $table->string('oi_va6')->nullable();
            $table->string('oi_va7')->nullable();
            $table->string('oi_va8')->nullable();
            $table->string('oi_va9')->nullable();

            $table->string('oi_vo1')->nullable();
            $table->string('oi_vo2')->nullable();
            $table->string('oi_vo3')->nullable();
            $table->string('oi_vo4')->nullable();
            $table->string('oi_vo5')->nullable();
            $table->string('oi_vo6')->nullable();
            $table->string('oi_vo7')->nullable();
            $table->string('oi_vo8')->nullable();
            $table->string('oi_vo9')->nullable();

            /**/
            $table->date('fecha_registro');
            $table->foreign('lista_examen_id')->references('id')->on('lista_examenes');
            $table->integer('lista_examen_id')->unsigned()->nullable();
            $table->foreign('cita_id')->references('id')->on('citas');
            $table->integer('cita_id')->unsigned()->nullable();
            $table->boolean('estado');
          //  $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('audiometrias');
    }
}
