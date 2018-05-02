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
            $table->decimal('hemoglobina',10,2);
            $table->decimal('hematocrito',10,2);
            $table->decimal('leucocitos',10,2);
            $table->decimal('abastonados',10,2);
            $table->decimal('segmentados',10,2);
            $table->decimal('monocitos',10,2);
            $table->decimal('linfocitos',10,2);
            $table->decimal('eosinofilos',10,2);
            $table->decimal('basofilos',10,2);
            $table->string('conclusion_hemograma');
            $table->date('fecha_registro');
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
        Schema::dropIfExists('hemogramas');
    }
}
