<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosticoElectrocardiogramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnostico_electrocardiogramas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('examenes_auxiliares')->nullable();
            $table->string('observaciones')->nullable();
            $table->string('diagnosticos_cie10_medico')->nullable();
            $table->string('concluciones')->nullable();
            $table->string('recomendaciones')->nullable();


            $table->string('electrocardiograma_normal')->nullable();
            $table->string('electrocardiograma_sin_patologico')->nullable();
            $table->string('electrocardiograma_probable_patologico')->nullable();
            $table->string('bradicardia')->nullable();
            $table->string('bloqueo_incompleto_rama_derecha')->nullable();
            $table->string('bloqueo_completo_rama_derecha')->nullable();
            $table->string('hemibloqueo_anterior_izquierdo')->nullable();
            $table->string('hemibloqueo_posterior_izquierdo')->nullable();
            $table->string('bloqueo_primer_grado')->nullable();
            $table->string('bloqueo_segundo_grado')->nullable();
            $table->string('bloqueo_completo')->nullable();
            $table->string('hipertrofia_ventricular_izquierda')->nullable();
            $table->string('electrocardiograma_pendiente')->nullable();
            $table->string('repetir_electrocardiograma')->nullable();
            $table->string('clasificacion')->nullable();

            $table->date('fecha_registro');
            $table->foreign('lista_examen_id')->references('id')->on('lista_examenes');
            $table->integer('lista_examen_id')->unsigned()->nullable();
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
        Schema::dropIfExists('diagnostico_electrocardiogramas');
    }
}
