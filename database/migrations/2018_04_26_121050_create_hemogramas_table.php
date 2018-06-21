<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHemogramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hemogramas', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('hemoglobina',10,2)->nullable();
            $table->decimal('hematocrito',10,2)->nullable();
            $table->decimal('leucocitos',10,2)->nullable();
            $table->decimal('abastonados',10,2)->nullable();
            $table->decimal('segmentados',10,2)->nullable();
            $table->decimal('monocitos',10,2)->nullable();
            $table->decimal('linfocitos',10,2)->nullable();
            $table->decimal('eosinofilos',10,2)->nullable();
            $table->decimal('basofilos',10,2)->nullable();
            $table->string('conclusion_hemograma')->nullable();
            $table->string('vsg')->nullable();
            $table->string('gpo_sanguineo')->nullable();
            $table->string('factor_rh')->nullable();
            $table->date('fecha_registro');
            $table->foreign('lista_examen_id')->references('id')->on('lista_examenes');
            $table->integer('lista_examen_id')->unsigned()->nullable();
            $table->foreign('cita_id')->references('id')->on('citas');
            $table->integer('cita_id')->unsigned()->nullable();
            $table->boolean('estado');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('user_id')->unsigned()->nullable();
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
        Schema::dropIfExists('hemogramas');
    }
}
