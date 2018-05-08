<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntecedentesORLsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedentes_o_r_ls', function (Blueprint $table) {
          $table->increments('id');
          $table->boolean('hipoacusia')->nullable();
          $table->string('hipoacusia_descripcion')->nullable();
          $table->string('hipoacusia_anio_dx')->nullable();
          $table->string('hipoacusia_tratamiento_actual')->nullable();
          $table->boolean('traumas')->nullable();
          $table->string('traumas_descripcion')->nullable();
          $table->string('traumas_anio_dx')->nullable();
          $table->string('traumas_tratamiento_actual')->nullable();
          $table->boolean('otitiscronica')->nullable();
          $table->string('otitiscronica_descripcion')->nullable();
          $table->string('otitiscronica_anio_dx')->nullable();
          $table->string('otitiscronica_tratamiento_actual')->nullable();
          $table->boolean('sordera')->nullable();
          $table->boolean('meningitis')->nullable();
          $table->boolean('sarampion')->nullable();
          $table->boolean('exp_lab_al_ruido')->nullable();
          $table->boolean('tiro')->nullable();
          $table->boolean('tec')->nullable();
          $table->boolean('parotiditis')->nullable();
          $table->boolean('uso_audifonos')->nullable();
          $table->boolean('uso_ototoxicos')->nullable();
          $table->boolean('discoteca')->nullable();
          $table->boolean('tapones_auditivos')->nullable();
          $table->string('tapones_auditivos_descripcion')->nullable();
          $table->boolean('orejeras')->nullable();
          $table->string('orejeras_descripcion')->nullable();
          $table->boolean('algodones')->nullable();
          $table->string('algodones_descripcion')->nullable();
          $table->boolean('otros_especificar')->nullable();
          $table->string('otros_especificar_descripcion')->nullable();
          $table->boolean('apreciacion_ruido')->nullable();
          $table->string('apreciacion_ruido_descripcion')->nullable();
          $table->string('observaciones')->nullable();
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
        Schema::dropIfExists('antecedentes_o_r_ls');
    }
}
