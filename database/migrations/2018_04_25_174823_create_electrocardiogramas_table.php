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
            $table->string('ritmo');
            $table->string('frecuencia_cardiaca');
            $table->string('eje_qrs');
            $table->decimal('onda_p',10,2);
            $table->decimal('intervalo',10,2);
            $table->decimal('segmento_qrs',10,2);
            $table->decimal('qt_corregido',10,2);
            $table->string('isquemia');
            $table->string('hipertrofias');
            $table->string('otros_hallazgos',400);
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
