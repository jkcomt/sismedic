<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToraxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toraxes', function (Blueprint $table) {
            $table->increments('id');

            $table->foreign('personal_tomo_placa_id')->references('id')->on('personales');
            $table->integer('personal_tomo_placa_id')->unsigned()->nullable();

            $table->foreign('personal_leyo_placa_id')->references('id')->on('personales');
            $table->integer('personal_leyo_placa_id')->unsigned()->nullable();

            $table->string('calidad')->nullable();
            $table->string('causa')->nullable();
            $table->string('numero_placa')->nullable();
            $table->date('fecha_placa')->nullable();
            $table->string('comentarios_radiografia')->nullable();


            $table->string('zona_afectada_superior_derecha')->nullable();
            $table->string('zona_afectada_superior_izquierda')->nullable();
            $table->string('zona_afectada_medio_derecha')->nullable();
            $table->string('zona_afectada_medio_izquierda')->nullable();
            $table->string('zona_afectada_bajo_derecha')->nullable();
            $table->string('zona_afectada_bajo_izquierda')->nullable();

            $table->boolean('profusion_col1_row1')->nullable();//es la columna uno  que empieza con 0/- y es hacia abajo col =columna
            $table->boolean('profusion_col1_row2')->nullable();
            $table->boolean('profusion_col1_row3')->nullable();
            $table->boolean('profusion_col1_row4')->nullable();
            $table->boolean('profusion_col1_row5')->nullable();

            $table->boolean('profusion_col2_row1')->nullable();//es la columna dos  que empieza con 1/2 y es hacia abajo col =columna
            $table->boolean('profusion_col2_row2')->nullable();
            $table->boolean('profusion_col2_row3')->nullable();
            $table->boolean('profusion_col2_row4')->nullable();
            $table->boolean('profusion_col2_row5')->nullable();

            $table->boolean('profusion_col3_row1')->nullable();//es la columna tres  que empieza con 3/3 y es hacia abajo col =columna
            $table->boolean('profusion_col3_row2')->nullable();


            $table->boolean('formatamanio_primario_p')->nullable();
            $table->boolean('formatamanio_primario_q')->nullable();
            $table->boolean('formatamanio_primario_r')->nullable();
            $table->boolean('formatamanio_primario_s')->nullable();
            $table->boolean('formatamanio_primario_t')->nullable();
            $table->boolean('formatamanio_primario_u')->nullable();

            $table->boolean('formatamanio_secundario_p')->nullable();
            $table->boolean('formatamanio_secundario_q')->nullable();
            $table->boolean('formatamanio_secundario_r')->nullable();
            $table->boolean('formatamanio_secundario_s')->nullable();
            $table->boolean('formatamanio_secundario_t')->nullable();
            $table->boolean('formatamanio_secundario_u')->nullable();

            $table->boolean('opacidad_0')->nullable();
            $table->boolean('opacidad_A')->nullable();
            $table->boolean('opacidad_B')->nullable();
            $table->boolean('opacidad_C')->nullable();

            $table->boolean('anormalidad_pleural')->nullable();

            $table->boolean('sitio_pared_toraxica_0')->nullable();
            $table->boolean('sitio_pared_toraxica_D')->nullable();
            $table->boolean('sitio_pared_toraxica_I')->nullable();

            $table->boolean('sitio_defrente_0')->nullable();
            $table->boolean('sitio_defrente_D')->nullable();
            $table->boolean('sitio_defrente_I')->nullable();

            $table->boolean('sitio_diafragma_0')->nullable();
            $table->boolean('sitio_diafragma_D')->nullable();
            $table->boolean('sitio_diafragma_I')->nullable();

            $table->boolean('sitio_otros_0')->nullable();
            $table->boolean('sitio_otros_D')->nullable();
            $table->boolean('sitio_otros_I')->nullable();


            $table->boolean('clasificacion_pared_toraxica_0')->nullable();
            $table->boolean('clasificacion_pared_toraxica_D')->nullable();
            $table->boolean('clasificacion_pared_toraxica_I')->nullable();

            $table->boolean('clasificacion_defrente_0')->nullable();
            $table->boolean('clasificacion_defrente_D')->nullable();
            $table->boolean('clasificacion_defrente_I')->nullable();

            $table->boolean('clasificacion_diafragma_0')->nullable();
            $table->boolean('clasificacion_diafragma_D')->nullable();
            $table->boolean('clasificacion_diafragma_I')->nullable();

            $table->boolean('clasificacion_otros_0')->nullable();
            $table->boolean('clasificacion_otros_D')->nullable();
            $table->boolean('clasificacion_otros_I')->nullable();

            $table->boolean('extencion_col1_row1')->nullable();
            $table->boolean('extencion_col3_row1')->nullable();
            $table->boolean('extencion_col1_row2')->nullable();
            $table->boolean('extencion_col2_row2')->nullable();
            $table->boolean('extencion_col3_row2')->nullable();


            $table->boolean('extencion_col4_row1')->nullable();
            $table->boolean('extencion_col6_row1')->nullable();
            $table->boolean('extencion_col4_row2')->nullable();
            $table->boolean('extencion_col5_row2')->nullable();
            $table->boolean('extencion_col6_row2')->nullable();



            $table->boolean('ancho_col1_row1')->nullable();
            $table->boolean('ancho_col1_row2')->nullable();
            $table->boolean('ancho_col2_row2')->nullable();
            $table->boolean('ancho_col3_row2')->nullable();

            $table->boolean('ancho_col2_row1')->nullable();
            $table->boolean('ancho_col4_row2')->nullable();
            $table->boolean('ancho_col5_row2')->nullable();
            $table->boolean('ancho_col6_row2')->nullable();

            $table->boolean('angulo_costofrenico_0')->nullable();
            $table->boolean('angulo_costofrenico_D')->nullable();
            $table->boolean('angulo_costofrenico_I')->nullable();


            $table->boolean('pared_toraxica_perfil_0')->nullable();
            $table->boolean('pared_toraxica_perfil_D')->nullable();
            $table->boolean('pared_toraxica_perfil_I')->nullable();
            $table->boolean('pared_toraxica_frente_0')->nullable();
            $table->boolean('pared_toraxica_frente_D')->nullable();
            $table->boolean('pared_toraxica_frente_I')->nullable();

            $table->boolean('clasificacion_perfil_0')->nullable();
            $table->boolean('clasificacion_perfil_D')->nullable();
            $table->boolean('clasificacion_perfil_I')->nullable();
            $table->boolean('clasificacion_frente_0')->nullable();
            $table->boolean('clasificacion_frente_D')->nullable();
            $table->boolean('clasificacion_frente_I')->nullable();


            $table->boolean('extencion2_col1_row1')->nullable();
            $table->boolean('extencion2_col3_row1')->nullable();
            $table->boolean('extencion2_col1_row2')->nullable();
            $table->boolean('extencion2_col2_row2')->nullable();
            $table->boolean('extencion2_col3_row2')->nullable();


            $table->boolean('extencion2_col4_row1')->nullable();
            $table->boolean('extencion2_col6_row1')->nullable();
            $table->boolean('extencion2_col4_row2')->nullable();
            $table->boolean('extencion2_col5_row2')->nullable();
            $table->boolean('extencion2_col6_row2')->nullable();



            $table->boolean('ancho2_col1_row1')->nullable();
            $table->boolean('ancho2_col1_row2')->nullable();
            $table->boolean('ancho2_col2_row2')->nullable();
            $table->boolean('ancho2_col3_row2')->nullable();

            $table->boolean('ancho2_col2_row1')->nullable();
            $table->boolean('ancho2_col4_row2')->nullable();
            $table->boolean('ancho2_col5_row2')->nullable();
            $table->boolean('ancho2_col6_row2')->nullable();


            $table->boolean('simbolo_estado')->nullable();

            $table->boolean('simbolo_col1_row1')->nullable();
            $table->boolean('simbolo_col1_row2')->nullable();
            $table->boolean('simbolo_col1_row3')->nullable();
            $table->boolean('simbolo_col1_row4')->nullable();
            $table->boolean('simbolo_col1_row5')->nullable();
            $table->boolean('simbolo_col1_row6')->nullable();
            $table->boolean('simbolo_col1_row7')->nullable();
            $table->boolean('simbolo_col1_row8')->nullable();
            $table->boolean('simbolo_col1_row9')->nullable();
            $table->boolean('simbolo_col1_row10')->nullable();
            $table->boolean('simbolo_col1_row11')->nullable();
            $table->boolean('simbolo_col1_row12')->nullable();
            $table->boolean('simbolo_col1_row13')->nullable();
            $table->boolean('simbolo_col1_row14')->nullable();
            $table->boolean('simbolo_col1_row15')->nullable();

            $table->boolean('simbolo_col2_row1')->nullable();
            $table->boolean('simbolo_col2_row2')->nullable();
            $table->boolean('simbolo_col2_row3')->nullable();
            $table->boolean('simbolo_col2_row4')->nullable();
            $table->boolean('simbolo_col2_row5')->nullable();
            $table->boolean('simbolo_col2_row6')->nullable();
            $table->boolean('simbolo_col2_row7')->nullable();
            $table->boolean('simbolo_col2_row8')->nullable();
            $table->boolean('simbolo_col2_row9')->nullable();
            $table->boolean('simbolo_col2_row10')->nullable();
            $table->boolean('simbolo_col2_row11')->nullable();
            $table->boolean('simbolo_col2_row12')->nullable();
            $table->boolean('simbolo_col2_row13')->nullable();
            $table->boolean('simbolo_col2_row14')->nullable();


            $table->string('torax_conclusion')->nullable();



            $table->string('vertices')->nullable();
            $table->string('campos_pulmonares')->nullable();
            $table->string('hilos')->nullable();
            $table->string('senos')->nullable();
            $table->string('mediastinos')->nullable();
            $table->string('siluete_cardiaca')->nullable();
            $table->string('diafragma')->nullable();
            $table->string('kb')->nullable();
            $table->string('tiempo')->nullable();
            $table->string('amperaje')->nullable();
            $table->string('diametro_torax')->nullable();
            /**/
            $table->date('fecha_registro');
            $table->foreign('lista_examen_id')->references('id')->on('lista_examenes');
            $table->integer('lista_examen_id')->unsigned()->nullable();
            $table->foreign('cita_id')->references('id')->on('citas');
            $table->integer('cita_id')->unsigned()->nullable();
            $table->boolean('estado');

            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('user_id')->unsigned()->nullable();
        //    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('toraxes');
    }
}
