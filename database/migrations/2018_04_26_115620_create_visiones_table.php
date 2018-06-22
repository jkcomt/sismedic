<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visiones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('av_lejos_od_sl')->nullable();
            $table->string('av_lejos_od_cl')->nullable();

            $table->string('av_lejos_oi_sl')->nullable();
            $table->string('av_lejos_oi_cl')->nullable();

            $table->string('av_cerca_od_sl')->nullable();
            $table->string('av_cerca_od_cl')->nullable();

            $table->string('av_cerca_oi_sl')->nullable();
            $table->string('av_cerca_oi_cl')->nullable();

            $table->string('av_binocular')->nullable();
            $table->string('test_ishihara_colores')->nullable();
            $table->string('discriminacion_colores')->nullable();
            $table->string('vision_profundidad')->nullable();
            $table->string('vision_perimetral')->nullable();
            $table->string('foria_vertical')->nullable();
            $table->string('foria_horizontal')->nullable();
            $table->string('vision_nocturna')->nullable();
            $table->string('vision_encandilada')->nullable();
            $table->string('recuperacion_encandilamiento')->nullable();
            $table->date('fecha_registro')->nullable();
            $table->foreign('lista_examen_id')->references('id')->on('lista_examenes');
            $table->integer('lista_examen_id')->unsigned()->nullable();
            $table->foreign('cita_id')->references('id')->on('citas');
            $table->integer('cita_id')->unsigned()->nullable();
            $table->boolean('estado');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('user_id')->unsigned()->nullable();
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
        Schema::dropIfExists('visiones');
    }
}
