<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosticoEspirometriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnostico_espirometrias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('examenes_auxiliares')->nullable();
            $table->string('observaciones')->nullable();
            $table->string('diagnosticos_cie10_medico')->nullable();
            $table->string('concluciones')->nullable();
            $table->string('recomendaciones')->nullable();


            $table->string('espirometria_normal')->nullable();
            $table->string('patron_obstructivo_estacionario')->nullable();
            $table->string('patron_obstructivo_cambio')->nullable();
            $table->string('patron_restrictivo_estacionario')->nullable();
            $table->string('patron_restrictivo_cambio')->nullable();
            $table->string('patron_mixto_estacionario')->nullable();
            $table->string('patron_mixto_cambio')->nullable();
            $table->string('espirometria_pendiente')->nullable();
            $table->string('repetir_espirometria')->nullable();
            $table->string('espirometria_normal_cambio_significativo')->nullable();
            $table->string('patron_espirometrico_posible_variante_normal')->nullable();
            $table->string('patron_obstructivo_leve')->nullable();
            $table->string('patron_obstructivo_moderado')->nullable();
            $table->string('patron_obstructivo_moderado_grave')->nullable();
            $table->string('patron_obstructivo_grave')->nullable();
            $table->string('patron_obstructivo_posible_variante_normal')->nullable();
            $table->string('clasificacion')->nullable();

            $table->date('fecha_registro');
            $table->foreign('lista_examen_id')->references('id')->on('lista_examenes');
            $table->integer('lista_examen_id')->unsigned()->nullable();
            $table->foreign('cita_id')->references('id')->on('citas');
            $table->integer('cita_id')->unsigned()->nullable();
            $table->boolean('estado');
          //  $table->timestamps()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diagnostico_espirometrias')->nullable();
    }
}
