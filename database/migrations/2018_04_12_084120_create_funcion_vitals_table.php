<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionVitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcion_vitales', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->decimal('talla',10,2)->nullable();
            $table->decimal('peso',10,2)->nullable();
            $table->decimal('temperatura',10,2)->nullable();
            $table->decimal('fc',10,2)->nullable();
            $table->decimal('fr',10,2)->nullable();
            $table->decimal('ps',10,2)->nullable();
            $table->decimal('pd',10,2)->nullable();
            $table->decimal('sat_02',10,2)->nullable();
            $table->decimal('imc',10,2)->nullable();
            $table->decimal('en_reposo',10,2)->nullable();
            $table->decimal('maxima_inspiracion',10,2)->nullable();
            $table->decimal('expiracion_forzada',10,2)->nullable();
            $table->decimal('perimetro_abdominal',10,2)->nullable();
            $table->decimal('perimetro_cadera',10,2)->nullable();
            $table->decimal('indice_cintura',10,2)->nullable();
            $table->decimal('circunferencia_cuello',10,2)->nullable();
            $table->foreign('cita_id')->references('id')->on('citas');
            $table->integer('cita_id')->unsigned()->nullable();
            $table->boolean('estado',true);
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
        Schema::dropIfExists('funcion_vitales');
    }
}
