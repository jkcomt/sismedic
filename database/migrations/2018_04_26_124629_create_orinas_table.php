<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orinas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('color');
            $table->string('aspecto');
            $table->decimal('densidad',10,2);
            $table->decimal('ph',10,2);
            $table->string('glucosa');
            $table->string('bilirrubinas');
            $table->string('cuerpos_cetonicos');
            $table->string('proteinas');
            $table->string('urobilinogeno');
            $table->string('nitritos');
            $table->string('hemoglobina');
            $table->string('sangre');
            $table->string('leucocitos');
            $table->string('hematies');
            $table->string('celulas_epiteliales');
            $table->string('cilindros');
            $table->string('cristales');
            $table->string('germenes');
            $table->string('filamentos_mucoides');
            $table->string('otros');
            $table->string('conclusion_orina');
            $table->date('fecha_registro');
            $table->foreign('lista_examen_id')->references('id')->on('lista_examenes');
            $table->integer('lista_examen_id')->unsigned()->nullable();
            $table->foreign('cita_id')->references('id')->on('citas');
            $table->integer('cita_id')->unsigned()->nullable();
            $table->boolean('estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orinas');
    }
}
