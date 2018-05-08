<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntecedentesQuirurgicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedentes_quirurgicos', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('apendicetomia')->nullable();
            $table->string('apendicetomia_anio')->nullable();
            $table->boolean('colecistectomia')->nullable();
            $table->string('colecistectomia_anio')->nullable();
            $table->boolean('herniorrafa_umbilical')->nullable();
            $table->string('herniorrafa_umbilical_anio')->nullable();
            $table->boolean('herniorrafa_inguinal')->nullable();
            $table->string('herniorrafa_inguinal_anio')->nullable();
            $table->boolean('ocular')->nullable();
            $table->string('ocular_descripcion')->nullable();
            $table->boolean('otorrino')->nullable();
            $table->string('otorrino_descripcion')->nullable();
            $table->boolean('obstetricia')->nullable();
            $table->boolean('cesarea')->nullable();
            $table->string('cesarea_descripcion')->nullable();
            $table->boolean('otras_cirugias')->nullable();
            $table->date('otras_cirugias_fecha')->nullable();
            $table->string('otras_cirugias_observaciones')->nullable();
            $table->date('fecha_registro')->nullable();
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->integer('paciente_id')->unsigned()->nullable();
            $table->boolean('estado');
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
        Schema::dropIfExists('antecedentes_quirurgicos');
    }
}
