<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamenFisicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examen_fisicos', function (Blueprint $table) {
            $table->increments('id');//34
            $table->string('cabeza')->nullable();
            $table->string('pies_faneras')->nullable();
            $table->string('reflejos_pupilares_derecha')->nullable();
            $table->string('reflejos_pupilares_izquierda')->nullable();
            $table->string('enfermedades_oculares')->nullable();
            $table->string('nariz')->nullable();
            $table->string('otoscopia_oido_derecho')->nullable();
            $table->string('otoscopia_oido_izquierdo')->nullable();
            $table->string('boca_amigdalas_faringe_laringe')->nullable();
            $table->string('piezas_malestado')->nullable();
            $table->string('piezas_faltan')->nullable();
            $table->string('ultimo_ctrl_dental')->nullable();
            $table->string('cuello_perimetro')->nullable();
            $table->string('torax')->nullable();
            $table->string('corazon')->nullable();
            $table->string('pulmon_derecho')->nullable();
            $table->string('pulmon_izquierdo')->nullable();
            $table->string('columna_vertebral')->nullable();
            $table->string('abdomen')->nullable();
            $table->string('anillos_inguinales')->nullable();
            $table->string('hernias')->nullable();
            $table->string('organos_genitales')->nullable();
            $table->string('ganglios')->nullable();
            $table->string('miembro_superior_derecho')->nullable();
            $table->string('mienbro_superior_izquierdo')->nullable();
            $table->string('miembro_inferior_derecho')->nullable();
            $table->string('mienbro_inferior_izquierdo')->nullable();
            $table->string('varices')->nullable();
            $table->string('tacto_rectal')->nullable();
            $table->string('lenguaje_atencion_memoria_orientacion_inteligencia')->nullable();
            $table->string('fuerza_muscular')->nullable();
            $table->string('relojes_osteotendinosos')->nullable();
            $table->string('marcha')->nullable();
            $table->string('evaluacion_cardiovascular')->nullable();
            $table->date('fecha_registro')->nullable();
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->integer('paciente_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('user_id')->unsigned()->nullable();
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
        Schema::dropIfExists('examen_fisicos');
    }
}
