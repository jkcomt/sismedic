<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nro_historia');
            $table->string('matricula');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('nombres');
            $table->string('sexo');
            $table->date('fecha_nacimiento');
            $table->date('fecha_ingreso');
            $table->date('fecha_ingreso_minera');
            $table->string('jefe_inmediato');

            $table->foreign('pais_origen_id')->references('id')->on('paises');
            $table->integer('pais_origen_id')->unsigned()->nullable();
            $table->foreign('departamento_origen_id')->references('id')->on('departamentos');
            $table->integer('departamento_origen_id')->unsigned()->nullable();
            $table->foreign('provincia_origen_id')->references('id')->on('provincias');
            $table->integer('provincia_origen_id')->unsigned()->nullable();
            $table->foreign('distrito_origen_id')->references('id')->on('distritos');
            $table->integer('distrito_origen_id')->unsigned()->nullable();

            $table->foreign('pais_domicilio_id')->references('id')->on('paises');
            $table->integer('pais_domicilio_id')->unsigned()->nullable();
            $table->foreign('departamento_domicilio_id')->references('id')->on('departamentos');
            $table->integer('departamento_domicilio_id')->unsigned()->nullable();
            $table->foreign('provincia_domicilio_id')->references('id')->on('provincias');
            $table->integer('provincia_domicilio_id')->unsigned()->nullable();
            $table->foreign('distrito_domicilio_id')->references('id')->on('distritos');
            $table->integer('distrito_domicilio_id')->unsigned()->nullable();

            $table->string('direccion')->nullable();
            $table->string('telf_fijo')->nullable();
            $table->string('celular')->nullable();
            $table->string('trabajo')->nullable();
            $table->string('tipo_dni')->nullable();
            $table->string('num_dni')->nullable();
            $table->string('estado_civil')->nullable();

            $table->foreign('instruccion_id')->references('id')->on('tipo_instrucciones');
            $table->integer('instruccion_id')->unsigned()->nullable();

            $table->foreign('contrata_id')->references('id')->on('contratadores');
            $table->integer('contrata_id')->unsigned()->nullable();

            $table->foreign('ocupacion_id')->references('id')->on('ocupaciones');
            $table->integer('ocupacion_id')->unsigned()->nullable();

            $table->foreign('lugar_labores_id')->references('id')->on('lugar_labores');
            $table->integer('lugar_labores_id')->unsigned()->nullable();
            //$table->string('tiempo_desempeno')->nullable();

            $table->string('email')->nullable();
            $table->string('comentarios')->nullable();
            $table->string('alergias')->nullable();
            $table->string('en_caso_emergencia')->nullable();
            $table->integer('nro_hijo_vivos',0)->nullable();
            $table->integer('nro_hijo_muertos',0)->nullable();

            $table->foreign('profesion_id')->references('id')->on('profesiones');
            $table->integer('profesion_id')->unsigned()->nullable();

            $table->foreign('area_id')->references('id')->on('areas');
            $table->integer('area_id')->unsigned()->nullable();

            $table->string('seccion')->nullable();

            $table->foreign('altura_id')->references('id')->on('alturas');
            $table->integer('altura_id')->unsigned()->nullable();

            $table->foreign('gs_id')->references('id')->on('grupo_sanguineos');
            $table->integer('gs_id')->unsigned()->nullable();

            $table->foreign('regimen_id')->references('id')->on('regimenes');
            $table->integer('regimen_id')->unsigned()->nullable();

            $table->date('fecha_registro')->nullable();
            $table->time('hora_registro')->nullable();
            $table->boolean('estado',true)->nullable();
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
        Schema::dropIfExists('pacientes');
    }
}
