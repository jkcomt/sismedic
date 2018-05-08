<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntecedentesNeumologicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedentes_neumologicos', function (Blueprint $table) {
          $table->increments('id');
          $table->boolean('asma')->nullable();
          $table->string('asma_descripcion')->nullable();
          $table->string('asma_edad_dx')->nullable();
          $table->string('asma_ultima_crisis')->nullable();
          $table->boolean('rinitis')->nullable();
          $table->boolean('epoc')->nullable();
          $table->boolean('tos_nocturna')->nullable();
          $table->boolean('otros_transtornos_nocturnos')->nullable();
          $table->string('otros_transtornos_nocturnos_descripcion')->nullable();
          $table->boolean('antecedentes_cardiovascular_uno')->nullable();
          $table->boolean('antecedentes_cardiovascular_dos')->nullable();
          $table->boolean('antecedentes_cardiovascular_tres')->nullable();
          $table->boolean('antecedentes_cardiovascular_cuatro')->nullable();
          $table->boolean('antecedentes_cardiovascular_cinco')->nullable();
          $table->date('fecha_registro')->nullable();
          $table->foreign('paciente_id')->references('id')->on('pacientes');
          $table->integer('paciente_id')->unsigned()->nullable();
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
        Schema::dropIfExists('antecedentes_neumologicos');
    }
}
