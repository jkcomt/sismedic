<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElectrocardiogramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electrocardiogramas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ritmo')->nullable();
            $table->string('frecuencia_cardiaca')->nullable();
            $table->string('eje_qrs')->nullable();
            $table->string('eje_qrs_dos')->nullable();
            $table->decimal('onda_p',10,2)->nullable();
            $table->decimal('intervalo',10,2)->nullable();
            $table->decimal('segmento_qrs',10,2)->nullable();
            $table->decimal('qt_corregido',10,2)->nullable();
            $table->string('isquemia')->nullable();
            $table->string('hipertrofias')->nullable();
            $table->string('otros_hallazgos',400)->nullable();
            $table->foreign('lista_examen_id')->references('id')->on('lista_examenes')->nullable();
            $table->integer('lista_examen_id')->unsigned()->nullable();
            $table->foreign('cita_id')->references('id')->on('citas');
            $table->integer('cita_id')->unsigned()->nullable();
            $table->date('fecha_registro');
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
        Schema::dropIfExists('electrocardiogramas');
    }
}
