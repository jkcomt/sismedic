<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluacionConductorOperadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacion_conductor_operadores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('clase');
            $table->string('nro_licencia');
            $table->string('categoria');
            $table->string('maquina');
            $table->date('fecha_revalidacion');
            $table->string('aptitud');
            $table->string('observaciones');

            $table->date('fecha_registro');
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
        Schema::dropIfExists('evaluacion_conductor_operadores');
    }
}
