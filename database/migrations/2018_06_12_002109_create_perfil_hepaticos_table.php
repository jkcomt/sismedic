<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilHepaticosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil_hepaticos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bilirrubina_total')->nullable();
            $table->string('bilirrubina_dta')->nullable();
            $table->string('bilirrubina_idta')->nullable();
            $table->string('fosfatosa_alc')->nullable();
            $table->string('tgo')->nullable();
            $table->string('tgp')->nullable();
            $table->string('proteinas_totales')->nullable();
            $table->string('albumina')->nullable();
            $table->date('fecha_registro');
            $table->foreign('lista_examen_id')->references('id')->on('lista_examenes');
            $table->integer('lista_examen_id')->unsigned()->nullable();
            $table->foreign('cita_id')->references('id')->on('citas');
            $table->integer('cita_id')->unsigned()->nullable();
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
        Schema::dropIfExists('perfil_hepaticos');
    }
}
