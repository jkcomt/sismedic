<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosticoVistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnostico_vistas', function (Blueprint $table) {
            $table->increments('id');

            $table->string('examenes_auxiliares')->nullable();
            $table->string('observaciones')->nullable();
            $table->string('diagnosticos_cie10_medico')->nullable();
            $table->string('concluciones')->nullable();
            $table->string('recomendaciones')->nullable();


            $table->string('vision_emetrope')->nullable();
            $table->string('ametropia_corregida')->nullable();
            $table->string('ametropia_no_corregida')->nullable();
            $table->string('ambliopia_suficiente')->nullable();
            $table->string('ambliopia_insuficiente')->nullable();
            $table->string('discromatopsia')->nullable();
            $table->string('vision_estereooptica')->nullable();
            $table->string('vision_nocturna')->nullable();
            $table->string('recuperacion_al_encadilamiento')->nullable();
            $table->string('foria_alterada')->nullable();
            $table->string('campo_visual_alterado')->nullable();
            $table->string('pendiente_examen_oftalmologico')->nullable();
            $table->string('repetir_examen_oftalmologico')->nullable();
            $table->string('clasificacion')->nullable();

            $table->date('fecha_registro');
            $table->foreign('lista_examen_id')->references('id')->on('lista_examenes');
            $table->integer('lista_examen_id')->unsigned()->nullable();
            $table->foreign('cita_id')->references('id')->on('citas');
            $table->integer('cita_id')->unsigned()->nullable();
            $table->boolean('estado');


          //  $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diagnostico_vistas');
    }
}
