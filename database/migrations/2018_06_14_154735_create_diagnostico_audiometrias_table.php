<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosticoAudiometriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnostico_audiometrias', function (Blueprint $table) {
            $table->increments('id');


                        $table->string('examenes_auxiliares')->nullable();
                        $table->string('observaciones')->nullable();
                        $table->string('diagnosticos_cie10_medico')->nullable();
                        $table->string('concluciones')->nullable();
                        $table->string('recomendaciones')->nullable();


                        $table->string('audiometria_normal')->nullable();
                        $table->string('hipoacusia_neurosensorial_bilateral')->nullable();
                        $table->string('hipoacusia_neurosensorial_derecha')->nullable();
                        $table->string('hipoacusia_neurosensorial_izquierda')->nullable();
                        $table->string('hipoacusia_conductiva_Bilateral')->nullable();
                        $table->string('hipoacusia_conductiva_derecha')->nullable();
                        $table->string('hipoacusia_conductiva_izquierda')->nullable();
                        $table->string('hipoacusia_mixta_Bilateral')->nullable();
                        $table->string('hipoacusia_mixta_derecha')->nullable();
                        $table->string('hipoacusia_mixta_izquierda')->nullable();
                        $table->string('alteracion_no_inducida_por_ruido')->nullable();
                        $table->string('descartar_trauma_acustico_leve')->nullable();
                        $table->string('descartar_trauma_acustico_avanzado')->nullable();
                        $table->string('descartar_danio_acustico_leve')->nullable();
                        $table->string('descartar_danio_acustico_moderado')->nullable();
                        $table->string('descartar_danio_acustico_avanzado')->nullable();
                        $table->string('cambio_significativo_positivo')->nullable();
                        $table->string('audiometria_pendiente')->nullable();
                        $table->string('repetir_audiometria')->nullable();
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
        Schema::dropIfExists('diagnostico_audiometrias');
    }
}
