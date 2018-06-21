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
            $table->string('av_lejos_od_sl');
            $table->string('av_lejos_od_cl');

            $table->string('av_lejos_oi_sl');
            $table->string('av_lejos_oi_cl');

            $table->string('av_cerca_od_sl');
            $table->string('av_cerca_od_cl');

            $table->string('av_cerca_oi_sl');
            $table->string('av_cerca_oi_cl');

            $table->string('av_binocular');
            $table->string('test_ishihara_colores');
            $table->string('discriminacion_colores');
            $table->string('vision_profundidad');
            $table->string('vision_perimetral');
            $table->string('foria_vertical');
            $table->string('foria_horizontal');
            $table->string('vision_nocturna');
            $table->string('vision_encandilada');
            $table->string('recuperacion_encandilamiento');
            $table->date('fecha_registro');
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
