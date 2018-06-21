<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuficienciaTrabajoAlturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suficiencia_trabajo_alturas', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('primera_aptitud')->nullable();
            $table->boolean('revalidacion')->nullable();
            $table->boolean('anamnesis_item1')->nullable();
            $table->boolean('anamnesis_item2')->nullable();
            $table->boolean('anamnesis_item3')->nullable();
            $table->boolean('anamnesis_item4')->nullable();
            $table->boolean('anamnesis_item5')->nullable();
            $table->boolean('anamnesis_item6')->nullable();
            $table->boolean('anamnesis_item7')->nullable();
            $table->boolean('anamnesis_item8')->nullable();
            $table->boolean('anamnesis_item9')->nullable();
            $table->boolean('anamnesis_item10')->nullable();
            $table->string('anamnesis_comentarios')->nullable();
            $table->integer('exploracion_fisica_fc')->nullable();
            $table->integer('exploracion_fisica_fr')->nullable();
            $table->integer('exploracion_fisica_pa')->nullable();
            $table->decimal('exploracion_fisica_talla',10,2)->nullable();
            $table->decimal('exploracion_fisica_peso',10,2)->nullable();
            $table->integer('exploracion_fisica_imc')->nullable();
            $table->integer('exploracion_fisica_perimetro_cuello')->nullable();
            $table->integer('exploracion_fisica_perimetro_cintura')->nullable();
            $table->integer('exploracion_fisica_perimetro_cadera')->nullable();
            $table->integer('exploracion_fisica_icc')->nullable();//aclarar tipo de dato
            $table->integer('exploracion_fisica_perimetro_toracico_inspiracion')->nullable();
            $table->integer('exploracion_fisica_perimetro_toracico_espiracion')->nullable();
            $table->boolean('exploracion_fisica_item_1')->nullable();
            $table->boolean('exploracion_fisica_item_2')->nullable();
            $table->boolean('exploracion_fisica_item_3')->nullable();
            $table->boolean('exploracion_fisica_item_4')->nullable();
            $table->boolean('exploracion_fisica_item_5')->nullable();
            $table->boolean('exploracion_fisica_item_6')->nullable();
            $table->boolean('exploracion_fisica_item_7')->nullable();
            $table->boolean('exploracion_fisica_item_8')->nullable();
            $table->boolean('exploracion_fisica_item_9')->nullable();
            $table->boolean('exploracion_fisica_item_10')->nullable();
            $table->string('exploracion_fisica_detalle')->nullable();
            $table->boolean('prueba_auxiliar_item_1')->nullable();
            $table->boolean('prueba_auxiliar_item_2')->nullable();
            $table->boolean('prueba_auxiliar_item_3')->nullable();
            $table->boolean('prueba_auxiliar_item_4')->nullable();
            $table->boolean('prueba_auxiliar_item_5')->nullable();
            $table->string('prueba_auxiliar_detalle_medicina')->nullable();
            $table->string('prueba_auxiliar_otro')->nullable();
            $table->string('conclusion_apto')->nullable();
            $table->date('desde')->nullable();
            $table->date('hasta')->nullable();
            $table->string('recomendacion')->nullable();
            $table->date('fecha_registro');
            $table->foreign('lista_examen_id')->references('id')->on('lista_examenes');
            $table->integer('lista_examen_id')->unsigned()->nullable();
            $table->foreign('cita_id')->references('id')->on('citas');
            $table->integer('cita_id')->unsigned()->nullable();
            $table->boolean('estado');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('user_id')->unsigned()->nullable();

           // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suficiencia_trabajo_alturas');
    }
}
