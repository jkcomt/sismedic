<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntecedentesFamiliaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedentes_familiares', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('sobrepeso')->nullable();
            $table->string('sobrepeso_parentesco_uno')->nullable();
            $table->string('sobrepeso_parentesco_dos')->nullable();
            $table->boolean('hipertension_arterial')->nullable();
            $table->string('hipertension_arterial_parentesco_uno')->nullable();
            $table->string('hipertension_arterial_parentesco_dos')->nullable();
            $table->boolean('enfermedad_cardiovascular')->nullable();
            $table->string('enfermedad_cardiovascular_parentesco_uno')->nullable();
            $table->string('enfermedad_cardiovascular_parentesco_dos')->nullable();
            $table->boolean('insuficiencia_venosa')->nullable();
            $table->string('insuficiencia_venosa_parentesco_uno')->nullable();
            $table->string('insuficiencia_venosa_parentesco_dos')->nullable();
            $table->boolean('dislipidemia')->nullable();
            $table->string('dislipidemia_parentesco_uno')->nullable();
            $table->string('dislipidemia_parentesco_dos')->nullable();
            $table->boolean('diabetes_melitus')->nullable();
            $table->string('diabetes_melitus_parentesco_uno')->nullable();
            $table->string('diabetes_melitus_parentesco_dos')->nullable();
            $table->boolean('glaucoma')->nullable();
            $table->string('glaucoma_parentesco_uno')->nullable();
            $table->string('glaucoma_parentesco_dos')->nullable();
            $table->boolean('cataratas')->nullable();
            $table->string('cataratas_parentesco_uno')->nullable();
            $table->string('cataratas_parentesco_dos')->nullable();
            $table->boolean('cancer_ginecologico')->nullable();
            $table->string('cancer_ginecologico_parentesco_uno')->nullable();
            $table->string('cancer_ginecologico_parentesco_dos')->nullable();
            $table->string('cancer_ginecologico_descripcion')->nullable();
            $table->boolean('cancer_colon')->nullable();
            $table->string('cancer_colon_parentesco_uno')->nullable();
            $table->string('cancer_colon_parentesco_dos')->nullable();
            $table->boolean('otros_formas_cancer')->nullable();
            $table->string('otros_formas_cancer_parentesco_uno')->nullable();
            $table->string('otros_formas_cancer_parentesco_dos')->nullable();
            $table->string('otros_formas_cancer_descripcion')->nullable();
            $table->boolean('epilepsia')->nullable();
            $table->string('epilepsia_parentesco_uno')->nullable();
            $table->string('epilepsia_parentesco_dos')->nullable();
            $table->boolean('asma')->nullable();
            $table->string('asma_parentesco_uno')->nullable();
            $table->string('asma_parentesco_dos')->nullable();
            $table->string('familiares_otros')->nullable();
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
        Schema::dropIfExists('antecedentes_familiares');
    }
}
