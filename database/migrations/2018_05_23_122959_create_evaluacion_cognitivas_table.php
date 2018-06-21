<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluacionCognitivasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacion_cognitivas', function (Blueprint $table) {
            $table->increments('id');
            //bloque uno
            $table->boolean('en_ano')->nullable();
            $table->boolean('en_estacion')->nullable();
            $table->boolean('en_dia_semana')->nullable();
            $table->boolean('en_mes')->nullable();
            $table->boolean('en_fecha')->nullable();
            //bloque dos
            $table->boolean('en_lugar_estamos')->nullable();
            $table->boolean('en_servicio_estamos')->nullable();
            $table->boolean('en_distrito_estamos')->nullable();
            $table->boolean('en_provincia_estamos')->nullable();
            $table->boolean('en_pais_estamos')->nullable();
            //bloque tres
            $table->boolean('repite_arbol')->nullable();
            $table->boolean('repite_mesa')->nullable();
            $table->boolean('repite_avion')->nullable();

            //bloque cuatro
            $table->boolean('tiene_30_monedas')->nullable();
            $table->boolean('tiene_27_monedas')->nullable();
            $table->boolean('tiene_24_monedas')->nullable();
            $table->boolean('tiene_21_monedas')->nullable();
            $table->boolean('tiene_18_monedas')->nullable();

            //bloque cinco
            $table->boolean('toma_papel')->nullable();
            $table->boolean('dobla_mitad')->nullable();
            $table->boolean('puso_suelo')->nullable();

            //bloque seis
            $table->boolean('repite_arbol_dos')->nullable();
            $table->boolean('repite_mesa_dos')->nullable();
            $table->boolean('repite_avion_dos')->nullable();

            //bloque siete
            $table->boolean('reconoce_lapiz')->nullable();
            $table->boolean('reconoce_reloj')->nullable();

            //bloque ocho
            $table->boolean('repite_frase')->nullable();

            //bloque nueve
            $table->boolean('escribe_lee_actua')->nullable();

            //bloque diez
            $table->boolean('escribe_sujeto_predicado')->nullable();

            //bloque once
            $table->boolean('copia_dibujo')->nullable();

            //puntaje
            $table->integer('puntaje')->nullable();

            $table->date('fecha_registro');
            $table->foreign('lista_examen_id')->references('id')->on('lista_examenes');
            $table->integer('lista_examen_id')->unsigned()->nullable();
            $table->foreign('cita_id')->references('id')->on('citas');
            $table->integer('cita_id')->unsigned()->nullable();
            $table->boolean('estado');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('user_id')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluacion_cognitivas');
    }
}
