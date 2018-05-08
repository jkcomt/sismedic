<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntecedentesGinecologicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedentes_ginecologicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fecha_ultima_regla')->nullable();
            $table->string('gestaciones')->nullable();
            $table->string('atermino')->nullable();
            $table->string('abortos')->nullable();
            $table->string('prematuro')->nullable();
            $table->string('vivos')->nullable();
            $table->string('menarquia')->nullable();
            $table->string('regimen_catamenial')->nullable();
            $table->boolean('ultimo_parto')->nullable();
            $table->string('ultimo_parto_anio')->nullable();
            $table->string('ultimo_parto_descripcion')->nullable();
            $table->boolean('ultimo_papanocolau')->nullable();
            $table->string('ultimo_papanocolau_anio')->nullable();
            $table->string('ultimo_papanocolau_descripcion')->nullable();
            $table->boolean('ultima_Mamografia')->nullable();
            $table->string('ultima_Mamografia_anio')->nullable();
            $table->string('ultima_Mamografia_descripcion')->nullable();
            $table->boolean('incontinencia_urinaria')->nullable();
            $table->string('incontinencia_urinaria_anio')->nullable();
            $table->string('incontinencia_urinaria_descripcion')->nullable();
            $table->boolean('ultimo_chequeo_ginecologico')->nullable();
            $table->string('ultimo_chequeo_ginecologico_anio')->nullable();
            $table->string('ultimo_chequeo_ginecologico_descripcion')->nullable();
            $table->boolean('uso_anticonceptivo')->nullable();
            $table->string('uso_anticonceptivo_descripcion')->nullable();
            $table->boolean('otros_antecedentes')->nullable();
            $table->string('otros_antecedentes_descripcion')->nullable();
            $table->boolean('cancer_cervix')->nullable();
            $table->string('cancer_cervix_anio')->nullable();
            $table->string('cancer_cervix_descripcion')->nullable();
            $table->boolean('cancer_mama')->nullable();
            $table->string('cancer_mama_anio')->nullable();
            $table->string('cancer_mama_descripcion')->nullable();
            $table->date('fecha_registro')->nullable();
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->integer('paciente_id')->unsigned()->nullable();
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
        Schema::dropIfExists('antecedentes_ginecologicos');
    }
}
