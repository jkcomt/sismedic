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
            $table->boolean('sobrepeso');
            $table->boolean('enfermedad_cronica');
            $table->boolean('farmacos_uso_comun');
            $table->boolean('alergias_no_medicantosa');
            $table->string('alergias_no_medicantosa_descripcion');
            $table->boolean('ram');
            $table->string('ram_descripcion');
            $table->boolean('practica_deportiva');
            $table->integer('practica_deportiva_frecuencia');
            $table->boolean('fuma');
            $table->string('fuma_descripcion');
            $table->boolean('fumaba');
            $table->integer('fuma_prom_semanal');
            $table->boolean('alcohol');
            $table->integer('alcohol_frecuencia');
            $table->string('alcohol_descripcion');
            $table->integer('alcohol_tiempo');
            $table->boolean('coca');
            $table->integer('coca_frecuencia');
            $table->string('coca_descripcion');
            $table->boolean('droga');
            $table->integer('droga_frecuencia');
            $table->boolean('cafe');
            $table->integer('cafe_frecuencia');
            $table->boolean('marcapasos');
            $table->boolean('coronariopatia');
            $table->boolean('epilepsia');
            $table->boolean('gota');
            $table->boolean('migrana');
            $table->boolean('vacuna_tetanos');
            $table->boolean('ronquidos');
            $table->boolean('humo_de_lena');
            $table->boolean('diabetes_melitus');
            $table->integer('diabetes_melitus_ano_dx');
            $table->string('diabetes_melitus_tratamiento_actual');
            $table->boolean('hipertension_arterial');
            $table->integer('hipertension_arterial_ano_dx');
            $table->string('hipertension_arterial_tratamiento_actual');
            $table->boolean('trombosis');
            $table->boolean('enfermedad_cardio_vascular');
            $table->string('enfermedad_cardio_vascular_descripcion');
            $table->boolean('insuficiencia_venosa');
            $table->integer('insuficiencia_venosa_ano_dx');
            $table->string('insuficiencia_venosa_tratamiento_actual');
            $table->boolean('dislipidemia');
            $table->integer('dislipidemia_ano_dx');
            $table->string('dislipidemia_tratamiento_actual');
            $table->boolean('enfermedades_tiroidea');
            $table->integer('enfermedades_tiroidea_ano_dx');
            $table->string('enfermedades_tiroidea_tratamiendo_actual');
            $table->boolean('neoplasias');
            $table->string('neoplasias_descripcion');
            $table->integer('neoplasias_ano_dx');
            $table->string('neoplasias_tratamiento_actual');
            $table->boolean('hobbies');
            $table->string('hobbies_descripcion');
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
        Schema::dropIfExists('antecedente_personales');
    }
}
