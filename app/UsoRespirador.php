<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsoRespirador extends Model
{
    protected $table = "uso_respiradores";

    protected $fillable = [
        //7.1 ficha evaluacion del lugar
        //tipo respirador utilizar
        'tipo_respirador_mascara_polvo',
        'tipo_respirador_media_cara',
        'tipo_respirador_cara_completa',
        'tipo_respirador_puri_aire_sin_energia',
        'tipo_respirador_puri_aire_con_energia',
        'tipo_respirador_respirador_atmosfera',
        'tipo_respirador_combinacion_linea_aire_scba',
        'tipo_respirador_respirador_flujo_continuo',
        'tipo_respirador_respirador_suministro_aire',
        'tipo_respirador_scba_circuito_abierto',
        'tipo_respirador_scba_circuito_cerrado',

        //tipo proteccion
        'tipo_respirador_filtro_hepa',
        'tipo_respirador_cartucho_gas_acido',
        'tipo_respirador_cartucho_vapor_organico',
        'tipo_respirador_cartucho_amoniaco',
        'tipo_respirador_cartucho_mercurio',

        //esfuerzo esperado requerido
        'esfuerzo_fisico_esperado',

        //frecuencia de uso
        'frecuencia_uso',
        'promedio_horas_dia',

        //exposicion materiales peligrosos
        'expo_materiales_peligrosos_humo_metal',
        'expo_materiales_peligrosos_arsenico',
        'expo_materiales_peligrosos_plomo',
        'expo_materiales_peligrosos_asbesto',
        'expo_materiales_peligrosos_dpm',
        'expo_materiales_peligrosos_monoxido_carbono',
        'expo_materiales_peligrosos_dioxido_carbono',
        'expo_materiales_peligrosos_vapor_organico',
        'expo_materiales_peligrosos_amoniaco',
        'expo_materiales_peligrosos_polvo_respirable',
        'expo_materiales_peligrosos_silice',
        'expo_materiales_peligrosos_mercurio',
        'expo_materiales_peligrosos_otros',

        //condiciones especiales de trabajo
        'cond_especiales_elevaciones_altas_2500',
        'cond_especiales_temperaturas_extremas',
        'cond_especiales_atmosferas_humedas',
        'cond_especiales_espacios_confirmados',
        'cond_especiales_atmosferas_idlh',
        'cond_especiales_hazmat_fuego_rescate_mina',
        'cond_especiales_epp_adicional_utilizado',
        'cond_especiales_otros',
        'cond_especiales_otros_descripcion',

        //7.2 ficha evaluacion personal del empleado
        //seccion 1
        //1
        'fuma',
        //2
        'cond_palpitaciones',
        'cond_convulsiones',
        'cond_diabetes',
        'cond_reacciones_alergicas',
        'cond_claustrofia',
        //3
        'prob_pulmonar_asbestosis',
        'prob_pulmonar_asma',
        'prob_bronquitis_cronica',
        'prob_enfisema',
        'prob_neumonia',
        'prob_tuberculosis',
        'prob_silicosis',
        'prob_neumotorax',
        'prob_cancer_pulmon',
        'prob_costillas_fracturadas',
        'prob_cualquier_lesion_pulmon',
        'prob_otros',
        'prob_otros_descripcion',
        //4
        'enf_pulmonar_dif_respirar_reposo',
        'enf_pulmonar_dif_respirar_camina_nivel_suelo',
        'enf_pulmonar_dif_respirar_camina_inclinado',
        'enf_pulmonar_dif_respirar_realiza_tarea',
        'enf_pulmonar_dif_tos_expectoracion',
        'enf_pulmonar_dif_tos_despierta_temprano',
        'enf_pulmonar_dif_tos_echado',
        'enf_pulmonar_dif_tos_sangre',
        'enf_pulmonar_dif_silbidos_pecho_respira',
        'enf_pulmonar_dif_dolor_pecho_respira_profundo',
        'enf_pulmonar_dif_otros',
        'enf_pulmonar_dif_otros_descripcion',
        //5
        'pro_cardiovascular_infarto',
        'pro_cardiovascular_angina',
        'pro_cardiovascular_insuficiencia_cardiaca',
        'pro_cardiovascular_hinchazon_piernas',
        'pro_cardiovascular_arritmia_corazon',
        'pro_cardiovascular_reflujo_gastroesofagico',
        'pro_cardiovascular_otros',
        'pro_cardiovascular_otros_descripcion',

        //6
        'sint_dolor_pecho',
        'sint_dolor_pecho_actividad_fisica',
        'sint_dolor_pecho_actividad_trabajo',
        'sint_palpitaciones',
        'sint_acidez_estomacal_indigestion',
        'sint_otros',
        'sint_otros_descripcion',
        //7
        'usa_medicina_problema_respiratorio',
        'usa_medicina_problema_corazon',
        'usa_medicina_presion_sanguinea',
        'usa_medicina_convulsion',
        //8
        'usa_respirador_irritacion_ojos',
        'usa_respirador_alergias',
        'usa_respirador_ansiedad',
        'usa_respirador_fatiga',
        'usa_respirador_otros',
        'usa_respirador_otros_descripcion',
        //seccion2
        //9
        'perdida_vision_cualquier_ojo_temporal_permanente',
        //10
        'perdida_vision_cualquier_usa_lentes_contacto',
        'perdida_vision_usa_lentes',
        'perdida_vision_daltonismo',
        'perdida_vision_otros',
        'perdida_vision_otros_descripcion',
        //11
        'lesion_oido',
        //12
        'prob_audicion_dificultad_escucha',
        'prob_audicion_usa_audifono',
        'prob_audicion_otros',
        'prob_audicion_otros_descripcion',
        //13
        'lesion_espalda',
        //14
        'prob_muscular_debilidad_extremidades',
        'prob_muscular_debilidad_dolor_espalda',
        'prob_muscular_dificultad_mover_brazos_piernas',
        'prob_muscular_dolor_inclina_adelanta_atras_cintura',
        'prob_muscular_dificultad_mover_cabeza_arriba_abajo',
        'prob_muscular_dificultad_mover_cabeza_lado',
        'prob_muscular_doblar_rodillas',
        'prob_muscular_ponerse_cuclillas',
        'prob_muscular_subir_escaleras',
        'prob_muscular_otros',
        'prob_muscular_otros_descripcion',
        //seccion 3
        //1
        'sensacion_mareos',
        'sensacion_dificultad_respirar',
        'sensacion_palpitaciones',
        'sensacion_otros',
        'sensacion_otros_descripcion',
        //2
        'trabaja_material_asbestos',
        'trabaja_material_silice',
        'trabaja_material_tungsteno_cobalto',
        'trabaja_material_berilio',
        'trabaja_material_aluminio',
        'trabaja_material_carbon',
        'trabaja_material_hierro',
        'trabaja_material_laton',
        'trabaja_material_ambientes_polvo',
        'trabaja_otros',
        'trabaja_otros_descripcion',
        //3
        'trabajo_previo_pasatiempo_riesgo',
        //4
        'servicio_militar',
        //5
        'equipo_matpel_respuesta_emergencia',
        //7.3
        //
        'autorizacion_clase',
//        'autorizacion_clase_ii',
//        'autorizacion_clase_iii',
//        'autorizacion_clase_iv',
//        'autorizacion_clase_v',

        'uso_emergencia_solamente',
        'solo_papr',
        'no_sbca',
        'autorizacion_otros',

        //datos medico
        'nombre_medico',
        'cmp',
        'fecha_expiracion',

        'fecha_registro',
        'lista_examen_id',
        'cita_id',
        'estado'
    ];

    public $timestamps = false;

    public function cita(){
        return $this->belongsTo(Cita::class);
    }

    public function listaExamen(){
        return $this->belongsTo(ListaExamen::class);
    }
}
