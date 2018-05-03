<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntecedentePersonalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedente_personales', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('sobrepeso')->nullable();
            $table->boolean('enfermedad_cronica')->nullable();

            $table->boolean('farmacos_uso_comun')->nullable();
            $table->string('farmacos_uso_comun_descripcion')->nullable();

            $table->boolean('alergias_no_medicantosa')->nullable();
            $table->string('alergias_no_medicantosa_descripcion')->nullable();

            $table->boolean('ram')->nullable();
            $table->string('ram_descripcion')->nullable();

            $table->boolean('practica_deportiva')->nullable();
            $table->string('practica_deportiva_frecuencia')->nullable();

            $table->boolean('fuma')->nullable();
            $table->string('fuma_descripcion')->nullable();
            $table->string('fuma_opciones')->nullable();

            $table->boolean('fumaba')->nullable();
            $table->string('fuma_prom_semanal')->nullable();


            $table->boolean('alcohol')->nullable();
            $table->string('alcohol_frecuencia')->nullable();
            $table->string('alcohol_descripcion')->nullable();
            $table->string('alcohol_tiempo')->nullable();

            $table->boolean('coca')->nullable();
            $table->string('coca_frecuencia')->nullable();
            $table->string('coca_descripcion')->nullable();

            $table->boolean('droga')->nullable();
            $table->string('droga_frecuencia')->nullable();

            $table->boolean('cafe')->nullable();
            $table->string('cafe_frecuencia')->nullable();

            $table->boolean('marcapasos')->nullable();
            $table->boolean('coronariopatia')->nullable();
            $table->boolean('epilepsia')->nullable();
            $table->boolean('gota')->nullable();
            $table->boolean('migrana')->nullable();
            $table->boolean('vacuna_tetanos')->nullable();
            $table->boolean('ronquidos')->nullable();
            $table->boolean('humo_de_lena')->nullable();

            $table->boolean('diabetes_melitus')->nullable();
            $table->string('diabetes_melitus_ano_dx')->nullable();
            $table->string('diabetes_melitus_tratamiento_actual')->nullable();

            $table->boolean('hipertension_arterial')->nullable();
            $table->string('hipertension_arterial_ano_dx')->nullable();
            $table->string('hipertension_arterial_tratamiento_actual')->nullable();
            $table->boolean('trombosis')->nullable();
            $table->boolean('enfermedad_cardio_vascular')->nullable();
            $table->string('enfermedad_cardio_vascular_descripcion')->nullable();
            $table->boolean('insuficiencia_venosa')->nullable();
            $table->integer('insuficiencia_venosa_ano_dx')->nullable();
            $table->string('insuficiencia_venosa_tratamiento_actual')->nullable();
            $table->boolean('dislipidemia')->nullable();
            $table->integer('dislipidemia_ano_dx')->nullable();
            $table->string('dislipidemia_tratamiento_actual')->nullable();
            $table->boolean('enfermedades_tiroidea')->nullable();
            $table->integer('enfermedades_tiroidea_ano_dx')->nullable();
            $table->string('enfermedades_tiroidea_tratamiendo_actual')->nullable();
            $table->boolean('neoplasias')->nullable();
            $table->string('neoplasias_descripcion')->nullable();
            $table->integer('neoplasias_ano_dx')->nullable();
            $table->string('neoplasias_tratamiento_actual')->nullable();
            $table->boolean('hobbies')->nullable();
            $table->string('hobbies_descripcion')->nullable();
            $table->date('fecha_registro')->nullable();
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
        Schema::dropIfExists('antecedente_personales');
    }
}
