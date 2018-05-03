<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntecendeDosPersonalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecende_dos_personales', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('tuberculosis')->nullable();
            $table->integer('tuberculosis_meses_tratamiento')->nullable();
            $table->boolean('hepatitis')->nullable();
            $table->string('hepatitis_descripcion')->nullable();
            $table->integer('hepatitis_edad')->nullable();
            $table->boolean('tifoidea')->nullable();
            $table->integer('tifoidea_ano_dx')->nullable();
            $table->boolean('tifoidea_brucelosis')->nullable();
            $table->integer('tifoidea_ulcera_peptica')->nullable();
            $table->boolean('convulsiones')->nullable();
            $table->string('convulsiones_descripcion')->nullable();
            $table->integer('convulsiones_ano_dx')->nullable();
            $table->string('convulsiones_tratamiento_actual')->nullable();
            $table->boolean('gastritis')->nullable();
            $table->string('gastritis_descripcion')->nullable();
            $table->integer('gastritis_ano_dx')->nullable();
            $table->string('gastritis_tratamiento')->nullable();
            $table->boolean('erge')->nullable();
            $table->string('erge_descripcion')->nullable();
            $table->integer('erge_ano_dx')->nullable();
            $table->string('erge_tratamiento_actual')->nullable();
            $table->boolean('urolitiasis')->nullable();
            $table->integer('urolitiasis_ano_dx')->nullable();
            $table->string('urolitiasis_tratamiento_actual')->nullable();
            $table->boolean('hernia_inguinal')->nullable();
            $table->string('hernia_inguinal_lado')->nullable();
            $table->integer('hernial_inguinal_ano_dx')->nullable();
            $table->boolean('hernia_umbilical')->nullable();
            $table->integer('hernia_umbilical_ano_dx')->nullable();
            $table->boolean('lumbalgia')->nullable();
            $table->string('lumbalgia_lado')->nullable();
            $table->integer('lumbalgia_ano_dx')->nullable();
            $table->integer('lumbalgia_frecuencia_actual')->nullable();
            $table->boolean('otros_transtornos_columna')->nullable();
            $table->string('otros_transtornos_columna_descripcion')->nullable();
            $table->boolean('desordenes_piel')->nullable();
            $table->string('desordenes_piel_descripcion')->nullable();
            $table->boolean('varices_miembros_inferior')->nullable();
            $table->string('varices_miembros_inferior_descripcion')->nullable();
            $table->boolean('its')->nullable();
            $table->string('its_descripcion')->nullable();
            $table->integer('its_ano_dx')->nullable();
            $table->string('its_tratamiento_actual')->nullable();
            $table->boolean('otros')->nullable();
            $table->string('otros_descripcion')->nullable();
            $table->string('sintomatologia_6_meses')->nullable();
            $table->date('fecha_registro')->nullable();
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
        Schema::dropIfExists('antecende_dos_personales');
    }
}
