<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntperAccidenteLaboralesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antper_accidente_laborales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion')->nullable();
            $table->string('anio')->nullable();
            $table->string('tratamiento_actual')->nullable();
            $table->string('importancia_patologica')->nullable();
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
        Schema::dropIfExists('antper_accidente_laborales');
    }
}
