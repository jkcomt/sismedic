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
            $table->string('color')->nullable();
            $table->string('aspecto')->nullable();
            // $table->decimal('densidad',10,2);
            // $table->decimal('ph',10,2);
            $table->string('densidad')->nullable();
            $table->string('ph')->nullable();
            $table->string('glucosa')->nullable();
            $table->string('bilirrubinas')->nullable();
            $table->string('cuerpos_cetonicos')->nullable();
            $table->string('proteinas')->nullable();
            $table->string('urobilinogeno')->nullable();
            $table->string('nitritos')->nullable();
            $table->string('hemoglobina')->nullable();
            $table->string('sangre')->nullable();
            $table->string('leucocitos')->nullable();
            $table->string('hematies')->nullable();
            $table->string('celulas_epiteliales')->nullable();
            $table->string('cilindros')->nullable();
            $table->string('cristales')->nullable();
            $table->string('germenes')->nullable();
            $table->string('filamentos_mucoides')->nullable();
            $table->string('otros')->nullable();
            $table->string('conclusion_orina')->nullable();
            $table->string('dosaje_cocaina')->nullable();
            $table->string('dosaje_marihuana')->nullable();
            $table->date('fecha_registro')->nullable();
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
        Schema::dropIfExists('orinas');
    }
}
