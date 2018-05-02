<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnexo7dsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anexo7ds', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('anemia')->nullable();
            $table->boolean('cirugia_mayor_reciente')->nullable();
            $table->boolean('desordenes_coagulacion')->nullable();
            $table->boolean('diabetes_mellitus')->nullable();
            $table->boolean('hipertension_arterial')->nullable();
            $table->boolean('embarazo')->nullable();
            $table->boolean('problemas_neurologicos')->nullable();
            $table->boolean('infecciones_recientes')->nullable();
            $table->boolean('obesidad_morbida')->nullable();
            $table->boolean('problemas_cardiacos')->nullable();
            $table->boolean('problemas_respiratorios')->nullable();
            $table->boolean('problemas_oftalmologicos')->nullable();
            $table->boolean('problemas_digestivos')->nullable();
            $table->boolean('apnea_del_sueno')->nullable();
            $table->boolean('otra_condicion')->nullable();
            $table->boolean('alergias')->nullable();
            $table->string('uso_de_medicacion_actual',400)->nullable();
            $table->string('observacion',400)->nullable();
            $table->boolean('apto')->nullable();
            $table->date('fecha_registro');
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
        Schema::dropIfExists('anexo7ds');
    }
}
