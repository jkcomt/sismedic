<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntecedentesOcularesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedentes_oculares', function (Blueprint $table) {
          $table->increments('id');
          $table->boolean('glaucoma')->nullable();
          $table->string('glaucoma_descripcion')->nullable();
          $table->string('glaucoma_anio_dx')->nullable();
          $table->string('glaucoma_tratamiento_actual')->nullable();
          $table->boolean('cataratas')->nullable();
          $table->string('cataratas_descripcion')->nullable();
          $table->string('cataratas_anio_dx')->nullable();
          $table->string('cataratas_tratamiento_actual')->nullable();
          $table->boolean('ametropia')->nullable();
          $table->string('ametropia_descripcion')->nullable();
          $table->string('ametropia_anio_dx')->nullable();
          $table->string('ametropia_tratamiento_actual')->nullable();
          $table->boolean('retinopatia')->nullable();
          $table->boolean('otros_oculares')->nullable();
          $table->string('otros_oculares_descripcion')->nullable();
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
        Schema::dropIfExists('antecedentes_oculares');
    }
}
