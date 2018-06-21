<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluacionConduccionVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *47
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacion_conduccion_vehiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estado_evaluacion')->nullable();
            $table->boolean('anamnesis_evaluacion_capacidades1')->nullable();
            $table->boolean('anamnesis_evaluacion_capacidades2')->nullable();
            $table->boolean('anamnesis_evaluacion_capacidades3')->nullable();
            $table->boolean('anamnesis_evaluacion_capacidades4')->nullable();
            $table->boolean('anamnesis_evaluacion_capacidades5')->nullable();
            $table->boolean('anamnesis_evaluacion_capacidades6')->nullable();
            $table->boolean('anamnesis_evaluacion_capacidades7')->nullable();
            $table->boolean('anamnesis_evaluacion_capacidades8')->nullable();
            $table->boolean('anamnesis_evaluacion_capacidades9')->nullable();
            $table->boolean('anamnesis_evaluacion_capacidades10')->nullable();

            $table->string('exploracion_fisica_fc')->nullable();
            $table->string('exploracion_fisica_fr')->nullable();
            $table->string('exploracion_fisica_pa')->nullable();
            $table->string('exploracion_fisica_talla')->nullable();
            $table->string('exploracion_fisica_peso')->nullable();
            $table->string('exploracion_fisica_imc')->nullable();

            $table->string('exploracion_fisica_perimetro_cuello')->nullable();
            $table->string('exploracion_fisica_perimetro_cintura')->nullable();
            $table->string('exploracion_fisica_perimetro_cadera')->nullable();
            $table->string('exploracion_fisica_icc')->nullable();
            $table->string('exploracion_fisica_perimetro_toraxico_inspiracion')->nullable();
            $table->string('exploracion_fisica_perimetro_toraxico_espiracion')->nullable();

            $table->boolean('exploracion_fisica_capacidades1')->nullable();
            $table->boolean('exploracion_fisica_capacidades2')->nullable();
            $table->boolean('exploracion_fisica_capacidades3')->nullable();
            $table->boolean('exploracion_fisica_capacidades4')->nullable();
            $table->boolean('exploracion_fisica_capacidades5')->nullable();
            $table->boolean('exploracion_fisica_capacidades6')->nullable();
            $table->boolean('exploracion_fisica_capacidades7')->nullable();
            $table->boolean('exploracion_fisica_capacidades8')->nullable();
            $table->boolean('exploracion_fisica_capacidades9')->nullable();
            $table->boolean('exploracion_fisica_capacidades10')->nullable();

            $table->string('exploracion_fisica_perimetro_detalle')->nullable();

            $table->boolean('prueba_auxiliar_capacidades1')->nullable();
            $table->boolean('prueba_auxiliar_capacidades2')->nullable();
            $table->boolean('prueba_auxiliar_capacidades3')->nullable();
            $table->boolean('prueba_auxiliar_capacidades4')->nullable();
            $table->boolean('prueba_auxiliar_capacidades5')->nullable();
            $table->boolean('prueba_auxiliar_capacidades6')->nullable();

            $table->string('detalle_medicinas')->nullable();
            $table->string('otro')->nullable();

            $table->date('evaluacion_funcional_desde')->nullable();
            $table->date('evaluacion_funcional_hasta')->nullable();
            $table->string('evaluacion_funcional_estado')->nullable();

            $table->string('evaluacion_funcional_comentarios')->nullable();
            $table->string('evaluacion_funcional_observaciones')->nullable();

            $table->date('fecha_registro');
            $table->foreign('lista_examen_id')->references('id')->on('lista_examenes');
            $table->integer('lista_examen_id')->unsigned()->nullable();
            $table->foreign('cita_id')->references('id')->on('citas');
            $table->integer('cita_id')->unsigned()->nullable();
            $table->boolean('estado');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('user_id')->unsigned()->nullable();
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
        Schema::dropIfExists('evaluacion_conduccion_vehiculos');
    }
}
