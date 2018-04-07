<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nro_serie_cita');

            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->integer('paciente_id')->unsigned()->nullable();

            $table->foreign('cliente_cuenta_id')->references('id')->on('cliente_cuentas');
            $table->integer('cliente_cuenta_id')->unsigned()->nullable();

            $table->foreign('tipo_examen_id')->references('id')->on('tipo_examenes');
            $table->integer('tipo_examen_id')->unsigned()->nullable();

            $table->foreign('perfil_id')->references('id')->on('perfiles');
            $table->integer('perfil_id')->unsigned()->nullable();

            $table->date('fecha_examen');
            $table->time('hora_examen');
            $table->date('fecha_registro');
            $table->time('hora_registro');
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
        Schema::dropIfExists('citas');
    }
}
