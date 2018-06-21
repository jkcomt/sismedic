<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsoRespiradorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uso_respiradores', function (Blueprint $table) {
            $table->increments('id');

            //7.1 ficha evaluacion del lugar
            //tipo respirador utilizar
            $table->boolean('tipo_respirador_mascara_polvo')->nullable();
            $table->boolean('tipo_respirador_media_cara')->nullable();
            $table->boolean('tipo_respirador_cara_completa')->nullable();
            $table->boolean('tipo_respirador_puri_aire_sin_energia')->nullable();
            $table->boolean('tipo_respirador_puri_aire_con_energia')->nullable();
            $table->boolean('tipo_respirador_respirador_atmosfera')->nullable();
            $table->boolean('tipo_respirador_combinacion_linea_aire_scba')->nullable();
            $table->boolean('tipo_respirador_respirador_flujo_continuo')->nullable();
            $table->boolean('tipo_respirador_respirador_suministro_aire')->nullable();
            $table->boolean('tipo_respirador_scba_circuito_abierto')->nullable();
            $table->boolean('tipo_respirador_scba_circuito_cerrado')->nullable();

            //tipo proteccion
            $table->boolean('tipo_respirador_filtro_hepa')->nullable();
            $table->boolean('tipo_respirador_cartucho_gas_acido')->nullable();
            $table->boolean('tipo_respirador_cartucho_vapor_organico')->nullable();
            $table->boolean('tipo_respirador_cartucho_amoniaco')->nullable();
            $table->boolean('tipo_respirador_cartucho_mercurio')->nullable();

            //esfuerzo esperado requerido
            $table->integer('esfuerzo_fisico_esperado')->nullable();

            //frecuencia de uso
            $table->integer('frecuencia_uso')->nullable();
            $table->integer('promedio_horas_dia')->nullable();

            //exposicion materiales peligrosos
            $table->boolean('expo_materiales_peligrosos_humo_metal')->nullable();
            $table->boolean('expo_materiales_peligrosos_arsenico')->nullable();
            $table->boolean('expo_materiales_peligrosos_plomo')->nullable();
            $table->boolean('expo_materiales_peligrosos_asbesto')->nullable();
            $table->boolean('expo_materiales_peligrosos_dpm')->nullable();
            $table->boolean('expo_materiales_peligrosos_monoxido_carbono')->nullable();
            $table->boolean('expo_materiales_peligrosos_dioxido_carbono')->nullable();
            $table->boolean('expo_materiales_peligrosos_vapor_organico')->nullable();
            $table->boolean('expo_materiales_peligrosos_amoniaco')->nullable();
            $table->boolean('expo_materiales_peligrosos_polvo_respirable')->nullable();
            $table->boolean('expo_materiales_peligrosos_silice')->nullable();
            $table->boolean('expo_materiales_peligrosos_mercurio')->nullable();
            $table->boolean('expo_materiales_peligrosos_otros')->nullable();

            //condiciones especiales de trabajo
            $table->boolean('cond_especiales_elevaciones_altas_2500')->nullable();
            $table->boolean('cond_especiales_temperaturas_extremas')->nullable();
            $table->boolean('cond_especiales_atmosferas_humedas')->nullable();
            $table->boolean('cond_especiales_espacios_confirmados')->nullable();
            $table->boolean('cond_especiales_atmosferas_idlh')->nullable();
            $table->boolean('cond_especiales_hazmat_fuego_rescate_mina')->nullable();
            $table->boolean('cond_especiales_epp_adicional_utilizado')->nullable();
            $table->boolean('cond_especiales_otros')->nullable();
            $table->string('cond_especiales_otros_descripcion')->nullable();

            //7.2 ficha evaluacion personal del empleado
            //seccion 1
            //1
            $table->boolean('fuma')->nullable();

            //2
            $table->boolean('cond_palpitaciones')->nullable();
            $table->boolean('cond_convulsiones')->nullable();
            $table->boolean('cond_diabetes')->nullable();
            $table->boolean('cond_reacciones_alergicas')->nullable();
            $table->boolean('cond_claustrofia')->nullable();

            //3
            $table->boolean('prob_pulmonar_asbestosis')->nullable();
            $table->boolean('prob_pulmonar_asma')->nullable();
            $table->boolean('prob_bronquitis_cronica')->nullable();
            $table->boolean('prob_enfisema')->nullable();
            $table->boolean('prob_neumonia')->nullable();
            $table->boolean('prob_tuberculosis')->nullable();
            $table->boolean('prob_silicosis')->nullable();
            $table->boolean('prob_neumotorax')->nullable();
            $table->boolean('prob_cancer_pulmon')->nullable();
            $table->boolean('prob_costillas_fracturadas')->nullable();
            $table->boolean('prob_cualquier_lesion_pulmon')->nullable();
            $table->boolean('prob_otros')->nullable();
            $table->string('prob_otros_descripcion')->nullable();

            //4
            $table->boolean('enf_pulmonar_dif_respirar_reposo')->nullable();
            $table->boolean('enf_pulmonar_dif_respirar_camina_nivel_suelo')->nullable();
            $table->boolean('enf_pulmonar_dif_respirar_camina_inclinado')->nullable();
            $table->boolean('enf_pulmonar_dif_respirar_realiza_tarea')->nullable();
            $table->boolean('enf_pulmonar_dif_tos_expectoracion')->nullable();
            $table->boolean('enf_pulmonar_dif_tos_despierta_temprano')->nullable();
            $table->boolean('enf_pulmonar_dif_tos_echado')->nullable();
            $table->boolean('enf_pulmonar_dif_tos_sangre')->nullable();
            $table->boolean('enf_pulmonar_dif_silbidos_pecho_respira')->nullable();
            $table->boolean('enf_pulmonar_dif_dolor_pecho_respira_profundo')->nullable();
            $table->boolean('enf_pulmonar_dif_otros')->nullable();
            $table->string('enf_pulmonar_dif_otros_descripcion')->nullable();

            //5
            $table->boolean('pro_cardiovascular_infarto')->nullable();
            $table->boolean('pro_cardiovascular_angina')->nullable();
            $table->boolean('pro_cardiovascular_insuficiencia_cardiaca')->nullable();
            $table->boolean('pro_cardiovascular_hinchazon_piernas')->nullable();
            $table->boolean('pro_cardiovascular_arritmia_corazon')->nullable();
            $table->boolean('pro_cardiovascular_reflujo_gastroesofagico')->nullable();
            $table->boolean('pro_cardiovascular_otros')->nullable();
            $table->string('pro_cardiovascular_otros_descripcion')->nullable();

            //6
            $table->boolean('sint_dolor_pecho')->nullable();
            $table->boolean('sint_dolor_pecho_actividad_fisica')->nullable();
            $table->boolean('sint_dolor_pecho_actividad_trabajo')->nullable();
            $table->boolean('sint_palpitaciones')->nullable();
            $table->boolean('sint_acidez_estomacal_indigestion')->nullable();
            $table->boolean('sint_otros')->nullable();
            $table->string('sint_otros_descripcion')->nullable();

            //7
            $table->boolean('usa_medicina_problema_respiratorio')->nullable();
            $table->boolean('usa_medicina_problema_corazon')->nullable();
            $table->boolean('usa_medicina_presion_sanguinea')->nullable();
            $table->boolean('usa_medicina_convulsion')->nullable();

            //8
            $table->boolean('usa_respirador_irritacion_ojos')->nullable();
            $table->boolean('usa_respirador_alergias')->nullable();
            $table->boolean('usa_respirador_ansiedad')->nullable();
            $table->boolean('usa_respirador_fatiga')->nullable();
            $table->boolean('usa_respirador_otros')->nullable();
            $table->string('usa_respirador_otros_descripcion')->nullable();

            //seccion2
            //9
            $table->boolean('perdida_vision_cualquier_ojo_temporal_permanente')->nullable();
            //10
            $table->boolean('perdida_vision_cualquier_usa_lentes_contacto')->nullable();
            $table->boolean('perdida_vision_usa_lentes')->nullable();
            $table->boolean('perdida_vision_daltonismo')->nullable();
            $table->boolean('perdida_vision_otros')->nullable();
            $table->string('perdida_vision_otros_descripcion')->nullable();

            //11
            $table->boolean('lesion_oido')->nullable();

            //12
            $table->boolean('prob_audicion_dificultad_escucha')->nullable();
            $table->boolean('prob_audicion_usa_audifono')->nullable();
            $table->boolean('prob_audicion_otros')->nullable();
            $table->string('prob_audicion_otros_descripcion')->nullable();

            //13
            $table->boolean('lesion_espalda')->nullable();

            //14
            $table->boolean('prob_muscular_debilidad_extremidades')->nullable();
            $table->boolean('prob_muscular_debilidad_dolor_espalda')->nullable();
            $table->boolean('prob_muscular_dificultad_mover_brazos_piernas')->nullable();
            $table->boolean('prob_muscular_dolor_inclina_adelanta_atras_cintura')->nullable();
            $table->boolean('prob_muscular_dificultad_mover_cabeza_arriba_abajo')->nullable();
            $table->boolean('prob_muscular_dificultad_mover_cabeza_lado')->nullable();
            $table->boolean('prob_muscular_doblar_rodillas')->nullable();
            $table->boolean('prob_muscular_ponerse_cuclillas')->nullable();
            $table->boolean('prob_muscular_subir_escaleras')->nullable();
            $table->boolean('prob_muscular_otros')->nullable();
            $table->string('prob_muscular_otros_descripcion')->nullable();

            //seccion 3
            //1
            $table->boolean('sensacion_mareos')->nullable();
            $table->boolean('sensacion_dificultad_respirar')->nullable();
            $table->boolean('sensacion_palpitaciones')->nullable();
            $table->boolean('sensacion_otros')->nullable();
            $table->string('sensacion_otros_descripcion')->nullable();

            //2
            $table->boolean('trabaja_material_asbestos')->nullable();
            $table->boolean('trabaja_material_silice')->nullable();
            $table->boolean('trabaja_material_tungsteno_cobalto')->nullable();
            $table->boolean('trabaja_material_berilio')->nullable();
            $table->boolean('trabaja_material_aluminio')->nullable();
            $table->boolean('trabaja_material_carbon')->nullable();
            $table->boolean('trabaja_material_hierro')->nullable();
            $table->boolean('trabaja_material_laton')->nullable();
            $table->boolean('trabaja_material_ambientes_polvo')->nullable();
            $table->boolean('trabaja_otros')->nullable();
            $table->string('trabaja_otros_descripcion')->nullable();

            //3
            $table->string('trabajo_previo_pasatiempo_riesgo')->nullable();

            //4
            $table->boolean('servicio_militar')->nullable();

            //5
            $table->boolean('equipo_matpel_respuesta_emergencia')->nullable();

            //7.3
            //
            //autorizacion de clase I II III IV V
            $table->integer('autorizacion_clase')->nullable();

            //condicional clase II
            $table->boolean('uso_emergencia_solamente')->nullable();

            $table->boolean('solo_papr')->nullable();

            $table->boolean('no_sbca')->nullable();

            $table->boolean('autorizacion_otros')->nullable();

//            $table->boolean('autorizacion_clase_ii')->nullable();
//            $table->boolean('autorizacion_clase_iii')->nullable();
//            $table->boolean('autorizacion_clase_iv')->nullable();
//            $table->boolean('autorizacion_clase_v')->nullable();

            //datos medico
            $table->string('nombre_medico')->nullable();
            $table->string('cmp')->nullable();
            $table->date('fecha_expiracion')->nullable();

            $table->date('fecha_registro');
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
        Schema::dropIfExists('uso_respiradores');
    }
}
