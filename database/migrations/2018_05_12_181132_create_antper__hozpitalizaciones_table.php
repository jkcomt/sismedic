<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntperHozpitalizacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antper__hozpitalizaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('motivo')->nullable();
            $table->string('anio')->nullable();
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
        Schema::dropIfExists('antper__hozpitalizaciones');
    }
}
