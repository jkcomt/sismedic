<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConclucionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concluciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('diagnosticos_medicos')->nullable();
            $table->string('diagnosticos_examenes_medicos')->nullable();
            $table->string('recomendaciones')->nullable();
            $table->string('observacion_interconsulta')->nullable();
            $table->string('rc10_anios')->nullable();
            $table->string('aptitud_larabal')->nullable();
            $table->string('vencimiento_laboral')->nullable();
            $table->date('fecha_registro')->nullable();
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->integer('paciente_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('user_id')->unsigned()->nullable();
        //    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('concluciones');
    }
}
