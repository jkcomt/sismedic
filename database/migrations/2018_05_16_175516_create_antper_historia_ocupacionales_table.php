<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntperHistoriaOcupacionalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antper_historia_ocupacionales', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fechainicio')->nullable();
            $table->date('fechafin')->nullable();
            $table->string('empresa_lugar')->nullable();
            $table->string('rubro')->nullable();
            $table->string('altitud')->nullable();
            $table->string('area_empresa')->nullable();
            $table->string('ocupacion')->nullable();
            $table->string('labor_superficie')->nullable();
            $table->string('labor_socavon')->nullable();
            $table->string('riesgo_ocupacional')->nullable();
            $table->string('medios_proteccion')->nullable();
            $table->string('accidentes_ocupacionales')->nullable();
            $table->string('Enfermedad_ocupacional')->nullable();
            $table->string('uso_epp')->nullable();
            $table->string('tipos_proteccion')->nullable();
            $table->date('fecha_registro')->nullable();
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->integer('paciente_id')->unsigned()->nullable();
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
        Schema::dropIfExists('antper_historia_ocupacionales');
    }
}
