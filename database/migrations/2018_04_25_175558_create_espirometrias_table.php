<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEspirometriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('espirometrias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('grupo_etnico')->nullable();
            $table->string('fumador')->nullable();
            $table->string('calidad')->nullable();
            $table->string('talla')->nullable();
            $table->string('peso')->nullable();

            $table->string('result1')->nullable();
            $table->string('result2')->nullable();
            $table->string('result3')->nullable();
            $table->string('result4')->nullable();
            $table->string('result5')->nullable();


            $table->string('prediccion1')->nullable();
            $table->string('prediccion2')->nullable();
            $table->string('prediccion3')->nullable();
            $table->string('prediccion4')->nullable();
            $table->string('prediccion5')->nullable();

            $table->string('porcentaje_prediccion1')->nullable();
            $table->string('porcentaje_prediccion2')->nullable();
            $table->string('porcentaje_prediccion3')->nullable();
            $table->string('porcentaje_prediccion4')->nullable();
            $table->string('porcentaje_prediccion5')->nullable();


            $table->date('fecha_registro');
            $table->foreign('lista_examen_id')->references('id')->on('lista_examenes');
            $table->integer('lista_examen_id')->unsigned()->nullable();
            $table->foreign('cita_id')->references('id')->on('citas');
            $table->integer('cita_id')->unsigned()->nullable();
            $table->boolean('estado');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('user_id')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('espirometrias');
    }
}
