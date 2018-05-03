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
            $table->boolean('tuberculosis');
            $table->integer('tuberculosis_meses_tratamiento');
            $table->boolean('hepatitis');
            $table->string('hepatitis_descripcion');
            $table->integer('hepatitis_edad');
            $table->boolean('tifoidea');
            $table->integer('tifoidea_ano_dx');
            $table->boolean('tifoidea_brucelosis');
            $table->integer('tifoidea_ulcera_peptica');
            $table->boolean('convulsiones');
            $table->string('convulsiones_descripcion');
            $table->integer('convulsiones_ano_dx');
            $table->string('convulsiones_tratamiento_actual');
            $table->boolean('gastritis');
            $table->string('gastritis_descripcion');
            $table->integer('gastritis_ano_dx');
            $table->string('gastritis_tratamiento');
            $table->boolean('erge');
            $table->string('erge_descripcion');
            $table->integer('erge_ano_dx');
            $table->string('erge_tratamiento_actual');
            $table->boolean('urolitiasis');
            $table->integer('urolitiasis_ano_dx');
            $table->string('urolitiasis_tratamiento_actual');
            $table->boolean('hernia_inguinal');
            $table->string('hernia_inguinal_lado');
            $table->integer('hernial_inguinal_ano_dx');
            $table->boolean('hernia_umbilical');
            $table->integer('hernia_umbilical_ano_dx');
            $table->boolean('lumbalgia');
            $table->string('lumbalgia_lado');
            $table->integer('lumbalgia_ano_dx');
            $table->integer('lumbalgia_frecuencia_actual');
            $table->boolean('otros_transtornos_columna');
            $table->string('otros_transtornos_columna_descripcion');
            $table->boolean('desordenes_piel');
            $table->string('desordenes_piel_descripcion');
            $table->boolean('varices_miembros_inferior');
            $table->string('varices_miembros_inferior_descripcion');
            $table->boolean('its');
            $table->string('its_descripcion');
            $table->integer('its_ano_dx');
            $table->string('its_tratamiento_actual');
            $table->boolean('otros');
            $table->string('otros_descripcion');
            $table->string('sintomatologia_6_meses');
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
        Schema::dropIfExists('antecende_dos_personales');
    }
}
