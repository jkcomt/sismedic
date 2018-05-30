<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApneaSueniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apnea_suenios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('licencia')->nullable();
            $table->boolean('trabajo_noche')->nullable();
            $table->string('num_dias_trabajados')->nullable();
            $table->string('num_dias_descanso')->nullable();
            $table->string('anios_trabaja_horario')->nullable();

            $table->boolean('apnea_suenio')->nullable();
            $table->string('ctrl_apnea')->nullable();
            $table->boolean('hta')->nullable();
            $table->string('medicacion')->nullable();
            $table->boolean('psg')->nullable();
            $table->string('ctrl_psg')->nullable();

            $table->boolean('en_mina')->nullable();
            $table->boolean('fuera_mina')->nullable();

            $table->boolean('criterio_uno_valor')->nullable();
            $table->boolean('criterio_dos_valor1')->nullable();
            $table->boolean('criterio_dos_valor2')->nullable();
            $table->boolean('criterio_dos_valor3')->nullable();
            $table->boolean('criterio_dos_valor4')->nullable();
            $table->boolean('criterio_dos_valor5')->nullable();
            $table->boolean('criterio_dos_valor6')->nullable();
            $table->boolean('criterio_dos_valor7')->nullable();
            $table->boolean('criterio_dos_valor8')->nullable();
            $table->boolean('criterio_dos_valor9')->nullable();

            $table->boolean('clasificacion_valor1')->nullable();
            $table->boolean('clasificacion_valor2')->nullable();
            $table->boolean('clasificacion_valor3')->nullable();
            $table->boolean('clasificacion_valor4')->nullable();
            $table->boolean('clasificacion_valor5')->nullable();

            $table->boolean('antecedente_faminiliar_apnea')->nullable();
            $table->string('antecedente_faminiliar_apnea_descripcion')->nullable();

            $table->boolean('entrevista_valor1')->nullable();
            $table->boolean('entrevista_valor2')->nullable();
            $table->boolean('entrevista_valor3')->nullable();
            $table->boolean('entrevista_valor4')->nullable();

            $table->string('peso')->nullable();
            $table->string('talla')->nullable();
            $table->string('imc')->nullable();
            $table->string('circunferencia')->nullable();
            $table->boolean('genero_paciente')->nullable();
            $table->string('psistolica')->nullable();
            $table->string('pdiastolica')->nullable();
            $table->boolean('hta_nueva')->nullable();

            $table->boolean('criterio_a')->nullable();
            $table->boolean('criterio_b')->nullable();
            $table->boolean('criterio_c')->nullable();
            $table->boolean('criterio_d')->nullable();
            $table->boolean('criterio_e')->nullable();
            $table->boolean('riesgo_bajo')->nullable();

            $table->string('observaciones_recomendaciones')->nullable();

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
        Schema::dropIfExists('apnea_suenios');
    }
}
