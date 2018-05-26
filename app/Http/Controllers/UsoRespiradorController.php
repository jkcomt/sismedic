<?php

namespace App\Http\Controllers;

use App\UsoRespirador;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Cita;
use View;
use Illuminate\Support\Facades\DB;

class UsoRespiradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(request()->ajax()) {
            $data = request()->validate([
                //7.1 ficha evaluacion del lugar
                //tipo respirador utilizar
                'tipo_respirador_mascara_polvo'=>'nullable',
                'tipo_respirador_media_cara'=>'nullable',
                'tipo_respirador_cara_completa'=>'nullable',
                'tipo_respirador_puri_aire_sin_energia'=>'nullable',
                'tipo_respirador_puri_aire_con_energia'=>'nullable',
                'tipo_respirador_respirador_atmosfera'=>'nullable',
                'tipo_respirador_combinacion_linea_aire_scba'=>'nullable',
                'tipo_respirador_respirador_flujo_continuo'=>'nullable',
                'tipo_respirador_respirador_suministro_aire'=>'nullable',
                'tipo_respirador_scba_circuito_abierto'=>'nullable',
                'tipo_respirador_scba_circuito_cerrado'=>'nullable',

                //tipo proteccion
                'tipo_respirador_filtro_hepa'=>'nullable',
                'tipo_respirador_cartucho_gas_acido'=>'nullable',
                'tipo_respirador_cartucho_vapor_organico'=>'nullable',
                'tipo_respirador_cartucho_amoniaco'=>'nullable',
                'tipo_respirador_cartucho_mercurio'=>'nullable',

                //esfuerzo esperado requerido
                'esfuerzo_fisico_esperado'=>'nullable',

                //frecuencia de uso
                'frecuencia_uso'=>'nullable',
                'promedio_horas_dia'=>'nullable',

                //exposicion materiales peligrosos
                'expo_materiales_peligrosos_humo_metal'=>'nullable',
                'expo_materiales_peligrosos_arsenico'=>'nullable',
                'expo_materiales_peligrosos_plomo'=>'nullable',
                'expo_materiales_peligrosos_asbesto'=>'nullable',
                'expo_materiales_peligrosos_dpm'=>'nullable',
                'expo_materiales_peligrosos_monoxido_carbono'=>'nullable',
                'expo_materiales_peligrosos_dioxido_carbono'=>'nullable',
                'expo_materiales_peligrosos_vapor_organico'=>'nullable',
                'expo_materiales_peligrosos_amoniaco'=>'nullable',
                'expo_materiales_peligrosos_polvo_respirable'=>'nullable',
                'expo_materiales_peligrosos_silice'=>'nullable',
                'expo_materiales_peligrosos_mercurio'=>'nullable',
                'expo_materiales_peligrosos_otros'=>'nullable',

                //condiciones especiales de trabajo
                'cond_especiales_elevaciones_altas_2500'=>'nullable',
                'cond_especiales_temperaturas_extremas'=>'nullable',
                'cond_especiales_atmosferas_humedas'=>'nullable',
                'cond_especiales_espacios_confirmados'=>'nullable',
                'cond_especiales_atmosferas_idlh'=>'nullable',
                'cond_especiales_hazmat_fuego_rescate_mina'=>'nullable',
                'cond_especiales_epp_adicional_utilizado'=>'nullable',
                'cond_especiales_otros'=>'nullable',
                'cond_especiales_otros_descripcion'=>'nullable',

                //7.2 ficha evaluacion personal del empleado
                //seccion 1
                //1
                'fuma'=>'nullable',
                //2
                'cond_palpitaciones'=>'nullable',
                'cond_convulsiones'=>'nullable',
                'cond_diabetes'=>'nullable',
                'cond_reacciones_alergicas'=>'nullable',
                'cond_claustrofia'=>'nullable',
                //3
                'prob_pulmonar_asbestosis'=>'nullable',
                'prob_pulmonar_asma'=>'nullable',
                'prob_bronquitis_cronica'=>'nullable',
                'prob_enfisema'=>'nullable',
                'prob_neumonia'=>'nullable',
                'prob_tuberculosis'=>'nullable',
                'prob_silicosis'=>'nullable',
                'prob_neumotorax'=>'nullable',
                'prob_cancer_pulmon'=>'nullable',
                'prob_costillas_fracturadas'=>'nullable',
                'prob_cualquier_lesion_pulmon'=>'nullable',
                'prob_otros'=>'nullable',
                'prob_otros_descripcion'=>'nullable',
                //4
                'enf_pulmonar_dif_respirar_reposo'=>'nullable',
                'enf_pulmonar_dif_respirar_camina_nivel_suelo'=>'nullable',
                'enf_pulmonar_dif_respirar_camina_inclinado'=>'nullable',
                'enf_pulmonar_dif_respirar_realiza_tarea'=>'nullable',
                'enf_pulmonar_dif_tos_expectoracion'=>'nullable',
                'enf_pulmonar_dif_tos_despierta_temprano'=>'nullable',
                'enf_pulmonar_dif_tos_echado'=>'nullable',
                'enf_pulmonar_dif_tos_sangre'=>'nullable',
                'enf_pulmonar_dif_silbidos_pecho_respira'=>'nullable',
                'enf_pulmonar_dif_dolor_pecho_respira_profundo'=>'nullable',
                'enf_pulmonar_dif_otros'=>'nullable',
                'enf_pulmonar_dif_otros_descripcion'=>'nullable',
                //5
                'pro_cardiovascular_infarto'=>'nullable',
                'pro_cardiovascular_angina'=>'nullable',
                'pro_cardiovascular_insuficiencia_cardiaca'=>'nullable',
                'pro_cardiovascular_hinchazon_piernas'=>'nullable',
                'pro_cardiovascular_arritmia_corazon'=>'nullable',
                'pro_cardiovascular_reflujo_gastroesofagico'=>'nullable',
                'pro_cardiovascular_otros'=>'nullable',
                'pro_cardiovascular_otros_descripcion'=>'nullable',

                //6
                'sint_dolor_pecho'=>'nullable',
                'sint_dolor_pecho_actividad_fisica'=>'nullable',
                'sint_dolor_pecho_actividad_trabajo'=>'nullable',
                'sint_palpitaciones'=>'nullable',
                'sint_acidez_estomacal_indigestion'=>'nullable',
                'sint_otros'=>'nullable',
                'sint_otros_descripcion'=>'nullable',
                //7
                'usa_medicina_problema_respiratorio'=>'nullable',
                'usa_medicina_problema_corazon'=>'nullable',
                'usa_medicina_presion_sanguinea'=>'nullable',
                'usa_medicina_convulsion'=>'nullable',
                //8
                'usa_respirador_irritacion_ojos'=>'nullable',
                'usa_respirador_alergias'=>'nullable',
                'usa_respirador_ansiedad'=>'nullable',
                'usa_respirador_fatiga'=>'nullable',
                'usa_respirador_otros'=>'nullable',
                'usa_respirador_otros_descripcion'=>'nullable',
                //seccion2
                //9
                'perdida_vision_cualquier_ojo_temporal_permanente'=>'nullable',
                //10
                'perdida_vision_cualquier_usa_lentes_contacto'=>'nullable',
                'perdida_vision_usa_lentes'=>'nullable',
                'perdida_vision_daltonismo'=>'nullable',
                'perdida_vision_otros'=>'nullable',
                'perdida_vision_otros_descripcion'=>'nullable',
                //11
                'lesion_oido'=>'nullable',
                //12
                'prob_audicion_dificultad_escucha'=>'nullable',
                'prob_audicion_usa_audifono'=>'nullable',
                'prob_audicion_otros'=>'nullable',
                'prob_audicion_otros_descripcion'=>'nullable',
                //13
                'lesion_espalda'=>'nullable',
                //14
                'prob_muscular_debilidad_extremidades'=>'nullable',
                'prob_muscular_debilidad_dolor_espalda'=>'nullable',
                'prob_muscular_dificultad_mover_brazos_piernas'=>'nullable',
                'prob_muscular_dolor_inclina_adelanta_atras_cintura'=>'nullable',
                'prob_muscular_dificultad_mover_cabeza_arriba_abajo'=>'nullable',
                'prob_muscular_dificultad_mover_cabeza_lado'=>'nullable',
                'prob_muscular_doblar_rodillas'=>'nullable',
                'prob_muscular_ponerse_cuclillas'=>'nullable',
                'prob_muscular_subir_escaleras'=>'nullable',
                'prob_muscular_otros'=>'nullable',
                'prob_muscular_otros_descripcion'=>'nullable',
                //seccion 3
                //1
                'sensacion_mareos'=>'nullable',
                'sensacion_dificultad_respirar'=>'nullable',
                'sensacion_palpitaciones'=>'nullable',
                'sensacion_otros'=>'nullable',
                'sensacion_otros_descripcion'=>'nullable',
                //2
                'trabaja_material_asbestos'=>'nullable',
                'trabaja_material_silice'=>'nullable',
                'trabaja_material_tungsteno_cobalto'=>'nullable',
                'trabaja_material_berilio'=>'nullable',
                'trabaja_material_aluminio'=>'nullable',
                'trabaja_material_carbon'=>'nullable',
                'trabaja_material_hierro'=>'nullable',
                'trabaja_material_laton'=>'nullable',
                'trabaja_material_ambientes_polvo'=>'nullable',
                'trabaja_otros'=>'nullable',
                'trabaja_otros_descripcion'=>'nullable',
                //3
                'trabajo_previo_pasatiempo_riesgo'=>'nullable',
                //4
                'servicio_militar'=>'nullable',
                //5
                'equipo_matpel_respuesta_emergencia'=>'nullable',
                //7.3
                //
                'autorizacion_clase'=>'nullable',

                'uso_emergencia_solamente'=>'nullable',
                'solo_papr'=>'nullable',
                'no_sbca'=>'nullable',
                'autorizacion_otros'=>'nullable',
//                'autorizacion_clase_ii'=>'nullable',
//                'autorizacion_clase_iii'=>'nullable',
//                'autorizacion_clase_iv'=>'nullable',
//                'autorizacion_clase_v'=>'nullable',

                //datos medico
                'nombre_medico'=>'nullable',
                'cmp'=>'nullable',

                'fecha_expiracion'=>'nullable',

                'lista_examen_id' => 'required',
                'cita_id' => 'required'

            ]);
        }

        $usoRespirador = UsoRespirador::create([
            //7.1 ficha evaluacion del lugar
            //tipo respirador utilizar
            'tipo_respirador_mascara_polvo'=>isset($data['tipo_respirador_mascara_polvo'])? $data['tipo_respirador_mascara_polvo']:null,
            'tipo_respirador_media_cara'=>isset($data['tipo_respirador_media_cara'])? $data['tipo_respirador_media_cara']:null,
            'tipo_respirador_cara_completa'=>isset($data['tipo_respirador_cara_completa'])? $data['tipo_respirador_cara_completa']:null,
            'tipo_respirador_puri_aire_sin_energia'=>isset($data['tipo_respirador_puri_aire_sin_energia'])? $data['tipo_respirador_puri_aire_sin_energia']:null,
            'tipo_respirador_puri_aire_con_energia'=>isset($data['tipo_respirador_puri_aire_con_energia'])? $data['tipo_respirador_puri_aire_con_energia']:null,
            'tipo_respirador_respirador_atmosfera'=>isset($data['tipo_respirador_respirador_atmosfera'])? $data['tipo_respirador_respirador_atmosfera']:null,
            'tipo_respirador_combinacion_linea_aire_scba'=>isset($data['tipo_respirador_combinacion_linea_aire_scba'])? $data['tipo_respirador_combinacion_linea_aire_scba']:null,
            'tipo_respirador_respirador_flujo_continuo'=>isset($data['tipo_respirador_respirador_flujo_continuo'])? $data['tipo_respirador_respirador_flujo_continuo']:null,
            'tipo_respirador_respirador_suministro_aire'=>isset($data['tipo_respirador_respirador_suministro_aire'])? $data['tipo_respirador_respirador_suministro_aire']:null,
            'tipo_respirador_scba_circuito_abierto'=>isset($data['tipo_respirador_scba_circuito_abierto'])? $data['tipo_respirador_scba_circuito_abierto']:null,
            'tipo_respirador_scba_circuito_cerrado'=>isset($data['tipo_respirador_scba_circuito_cerrado'])? $data['tipo_respirador_scba_circuito_cerrado']:null,

            //tipo proteccion
            'tipo_respirador_filtro_hepa'=>isset($data['tipo_respirador_filtro_hepa'])? $data['tipo_respirador_filtro_hepa']:null,
            'tipo_respirador_cartucho_gas_acido'=>isset($data['tipo_respirador_cartucho_gas_acido'])? $data['tipo_respirador_cartucho_gas_acido']:null,
            'tipo_respirador_cartucho_vapor_organico'=>isset($data['tipo_respirador_cartucho_vapor_organico'])? $data['tipo_respirador_cartucho_vapor_organico']:null,
            'tipo_respirador_cartucho_amoniaco'=>isset($data['tipo_respirador_cartucho_amoniaco'])? $data['tipo_respirador_cartucho_amoniaco']:null,
            'tipo_respirador_cartucho_mercurio'=>isset($data['tipo_respirador_cartucho_mercurio'])? $data['tipo_respirador_cartucho_mercurio']:null,

            //esfuerzo esperado requerido
            'esfuerzo_fisico_esperado'=>isset($data['esfuerzo_fisico_esperado'])? $data['esfuerzo_fisico_esperado']:null,

            //frecuencia de uso
            'frecuencia_uso'=>isset($data['frecuencia_uso'])? $data['frecuencia_uso']:null,
            'promedio_horas_dia'=>isset($data['promedio_horas_dia'])? $data['promedio_horas_dia']:null,

            //exposicion materiales peligrosos
            'expo_materiales_peligrosos_humo_metal'=>isset($data['expo_materiales_peligrosos_humo_metal'])? $data['expo_materiales_peligrosos_humo_metal']:null,
            'expo_materiales_peligrosos_arsenico'=>isset($data['expo_materiales_peligrosos_arsenico'])? $data['expo_materiales_peligrosos_arsenico']:null,
            'expo_materiales_peligrosos_plomo'=>isset($data['expo_materiales_peligrosos_plomo'])? $data['expo_materiales_peligrosos_plomo']:null,
            'expo_materiales_peligrosos_asbesto'=>isset($data['expo_materiales_peligrosos_asbesto'])? $data['expo_materiales_peligrosos_asbesto']:null,
            'expo_materiales_peligrosos_dpm'=>isset($data['expo_materiales_peligrosos_dpm'])? $data['expo_materiales_peligrosos_dpm']:null,
            'expo_materiales_peligrosos_monoxido_carbono'=>isset($data['expo_materiales_peligrosos_monoxido_carbono'])? $data['expo_materiales_peligrosos_monoxido_carbono']:null,
            'expo_materiales_peligrosos_dioxido_carbono'=>isset($data['expo_materiales_peligrosos_dioxido_carbono'])? $data['expo_materiales_peligrosos_dioxido_carbono']:null,
            'expo_materiales_peligrosos_vapor_organico'=>isset($data['expo_materiales_peligrosos_vapor_organico'])? $data['expo_materiales_peligrosos_vapor_organico']:null,
            'expo_materiales_peligrosos_amoniaco'=>isset($data['expo_materiales_peligrosos_amoniaco'])? $data['expo_materiales_peligrosos_amoniaco']:null,
            'expo_materiales_peligrosos_polvo_respirable'=>isset($data['expo_materiales_peligrosos_polvo_respirable'])? $data['expo_materiales_peligrosos_polvo_respirable']:null,
            'expo_materiales_peligrosos_silice'=>isset($data['expo_materiales_peligrosos_silice'])? $data['expo_materiales_peligrosos_silice']:null,
            'expo_materiales_peligrosos_mercurio'=>isset($data['expo_materiales_peligrosos_mercurio'])? $data['expo_materiales_peligrosos_mercurio']:null,
            'expo_materiales_peligrosos_otros'=>isset($data['expo_materiales_peligrosos_otros'])? $data['expo_materiales_peligrosos_otros']:null,

            //condiciones especiales de trabajo
            'cond_especiales_elevaciones_altas_2500'=>isset($data['cond_especiales_elevaciones_altas_2500'])? $data['cond_especiales_elevaciones_altas_2500']:null,
            'cond_especiales_temperaturas_extremas'=>isset($data['cond_especiales_temperaturas_extremas'])? $data['cond_especiales_temperaturas_extremas']:null,
            'cond_especiales_atmosferas_humedas'=>isset($data['cond_especiales_atmosferas_humedas'])? $data['cond_especiales_atmosferas_humedas']:null,
            'cond_especiales_espacios_confirmados'=>isset($data['cond_especiales_espacios_confirmados'])? $data['cond_especiales_espacios_confirmados']:null,
            'cond_especiales_atmosferas_idlh'=>isset($data['cond_especiales_atmosferas_idlh'])? $data['cond_especiales_atmosferas_idlh']:null,
            'cond_especiales_hazmat_fuego_rescate_mina'=>isset($data['cond_especiales_hazmat_fuego_rescate_mina'])? $data['cond_especiales_hazmat_fuego_rescate_mina']:null,
            'cond_especiales_epp_adicional_utilizado'=>isset($data['cond_especiales_epp_adicional_utilizado'])? $data['cond_especiales_epp_adicional_utilizado']:null,
            'cond_especiales_otros'=>isset($data['cond_especiales_otros'])? $data['cond_especiales_otros']:null,
            'cond_especiales_otros_descripcion'=>isset($data['cond_especiales_otros_descripcion'])? $data['cond_especiales_otros_descripcion']:null,

            //7.2 ficha evaluacion personal del empleado
            //seccion 1
            //1
            'fuma'=>isset($data['fuma'])? $data['fuma']:null,
            //2
            'cond_palpitaciones'=>isset($data['cond_palpitaciones'])? $data['cond_palpitaciones']:null,
            'cond_convulsiones'=>isset($data['cond_convulsiones'])? $data['cond_convulsiones']:null,
            'cond_diabetes'=>isset($data['cond_diabetes'])? $data['cond_diabetes']:null,
            'cond_reacciones_alergicas'=>isset($data['cond_reacciones_alergicas'])? $data['cond_reacciones_alergicas']:null,
            'cond_claustrofia'=>isset($data['cond_claustrofia'])? $data['cond_claustrofia']:null,
            //3
            'prob_pulmonar_asbestosis'=>isset($data['prob_pulmonar_asbestosis'])? $data['prob_pulmonar_asbestosis']:null,
            'prob_pulmonar_asma'=>isset($data['prob_pulmonar_asma'])? $data['prob_pulmonar_asma']:null,
            'prob_bronquitis_cronica'=>isset($data['prob_bronquitis_cronica'])? $data['prob_bronquitis_cronica']:null,
            'prob_enfisema'=>isset($data['prob_enfisema'])? $data['prob_enfisema']:null,
            'prob_neumonia'=>isset($data['prob_neumonia'])? $data['prob_neumonia']:null,
            'prob_tuberculosis'=>isset($data['prob_tuberculosis'])? $data['prob_tuberculosis']:null,
            'prob_silicosis'=>isset($data['prob_silicosis'])? $data['prob_silicosis']:null,
            'prob_neumotorax'=>isset($data['prob_neumotorax'])? $data['prob_neumotorax']:null,
            'prob_cancer_pulmon'=>isset($data['prob_cancer_pulmon'])? $data['prob_cancer_pulmon']:null,
            'prob_costillas_fracturadas'=>isset($data['prob_costillas_fracturadas'])? $data['prob_costillas_fracturadas']:null,
            'prob_cualquier_lesion_pulmon'=>isset($data['prob_cualquier_lesion_pulmon'])? $data['prob_cualquier_lesion_pulmon']:null,
            'prob_otros'=>isset($data['prob_otros'])? $data['prob_otros']:null,
            'prob_otros_descripcion'=>isset($data['prob_otros_descripcion'])? $data['prob_otros_descripcion']:null,
            //4
            'enf_pulmonar_dif_respirar_reposo'=>isset($data['enf_pulmonar_dif_respirar_reposo'])? $data['enf_pulmonar_dif_respirar_reposo']:null,
            'enf_pulmonar_dif_respirar_camina_nivel_suelo'=>isset($data['enf_pulmonar_dif_respirar_camina_nivel_suelo'])? $data['enf_pulmonar_dif_respirar_camina_nivel_suelo']:null,
            'enf_pulmonar_dif_respirar_camina_inclinado'=>isset($data['enf_pulmonar_dif_respirar_camina_inclinado'])? $data['enf_pulmonar_dif_respirar_camina_inclinado']:null,
            'enf_pulmonar_dif_respirar_realiza_tarea'=>isset($data['enf_pulmonar_dif_respirar_realiza_tarea'])? $data['enf_pulmonar_dif_respirar_realiza_tarea']:null,
            'enf_pulmonar_dif_tos_expectoracion'=>isset($data['enf_pulmonar_dif_tos_expectoracion'])? $data['enf_pulmonar_dif_tos_expectoracion']:null,
            'enf_pulmonar_dif_tos_despierta_temprano'=>isset($data['enf_pulmonar_dif_tos_despierta_temprano'])? $data['enf_pulmonar_dif_tos_despierta_temprano']:null,
            'enf_pulmonar_dif_tos_echado'=>isset($data['enf_pulmonar_dif_tos_echado'])? $data['enf_pulmonar_dif_tos_echado']:null,
            'enf_pulmonar_dif_tos_sangre'=>isset($data['enf_pulmonar_dif_tos_sangre'])? $data['enf_pulmonar_dif_tos_sangre']:null,
            'enf_pulmonar_dif_silbidos_pecho_respira'=>isset($data['enf_pulmonar_dif_silbidos_pecho_respira'])? $data['enf_pulmonar_dif_silbidos_pecho_respira']:null,
            'enf_pulmonar_dif_dolor_pecho_respira_profundo'=>isset($data['enf_pulmonar_dif_dolor_pecho_respira_profundo'])? $data['enf_pulmonar_dif_dolor_pecho_respira_profundo']:null,
            'enf_pulmonar_dif_otros'=>isset($data['enf_pulmonar_dif_otros'])? $data['enf_pulmonar_dif_otros']:null,
            'enf_pulmonar_dif_otros_descripcion'=>isset($data['enf_pulmonar_dif_otros_descripcion'])? $data['enf_pulmonar_dif_otros_descripcion']:null,
            //5
            'pro_cardiovascular_infarto'=>isset($data['pro_cardiovascular_infarto'])? $data['pro_cardiovascular_infarto']:null,
            'pro_cardiovascular_angina'=>isset($data['pro_cardiovascular_angina'])? $data['pro_cardiovascular_angina']:null,
            'pro_cardiovascular_insuficiencia_cardiaca'=>isset($data['pro_cardiovascular_insuficiencia_cardiaca'])? $data['pro_cardiovascular_insuficiencia_cardiaca']:null,
            'pro_cardiovascular_hinchazon_piernas'=>isset($data['pro_cardiovascular_hinchazon_piernas'])? $data['pro_cardiovascular_hinchazon_piernas']:null,
            'pro_cardiovascular_arritmia_corazon'=>isset($data['pro_cardiovascular_arritmia_corazon'])? $data['pro_cardiovascular_arritmia_corazon']:null,
            'pro_cardiovascular_reflujo_gastroesofagico'=>isset($data['pro_cardiovascular_reflujo_gastroesofagico'])? $data['pro_cardiovascular_reflujo_gastroesofagico']:null,
            'pro_cardiovascular_otros'=>isset($data['pro_cardiovascular_otros'])? $data['pro_cardiovascular_otros']:null,
            'pro_cardiovascular_otros_descripcion'=>isset($data['pro_cardiovascular_otros_descripcion'])? $data['pro_cardiovascular_otros_descripcion']:null,

            //6
            'sint_dolor_pecho'=>isset($data['sint_dolor_pecho'])? $data['sint_dolor_pecho']:null,
            'sint_dolor_pecho_actividad_fisica'=>isset($data['sint_dolor_pecho_actividad_fisica'])? $data['sint_dolor_pecho_actividad_fisica']:null,
            'sint_dolor_pecho_actividad_trabajo'=>isset($data['sint_dolor_pecho_actividad_trabajo'])? $data['sint_dolor_pecho_actividad_trabajo']:null,
            'sint_palpitaciones'=>isset($data['sint_palpitaciones'])? $data['sint_palpitaciones']:null,
            'sint_acidez_estomacal_indigestion'=>isset($data['sint_acidez_estomacal_indigestion'])? $data['sint_acidez_estomacal_indigestion']:null,
            'sint_otros'=>isset($data['sint_otros'])? $data['sint_otros']:null,
            'sint_otros_descripcion'=>isset($data['sint_otros_descripcion'])? $data['sint_otros_descripcion']:null,
            //7
            'usa_medicina_problema_respiratorio'=>isset($data['usa_medicina_problema_respiratorio'])? $data['usa_medicina_problema_respiratorio']:null,
            'usa_medicina_problema_corazon'=>isset($data['usa_medicina_problema_corazon'])? $data['usa_medicina_problema_corazon']:null,
            'usa_medicina_presion_sanguinea'=>isset($data['usa_medicina_presion_sanguinea'])? $data['usa_medicina_presion_sanguinea']:null,
            'usa_medicina_convulsion'=>isset($data['usa_medicina_convulsion'])? $data['usa_medicina_convulsion']:null,
            //8
            'usa_respirador_irritacion_ojos'=>isset($data['usa_respirador_irritacion_ojos'])? $data['usa_respirador_irritacion_ojos']:null,
            'usa_respirador_alergias'=>isset($data['usa_respirador_alergias'])? $data['usa_respirador_alergias']:null,
            'usa_respirador_ansiedad'=>isset($data['usa_respirador_ansiedad'])? $data['usa_respirador_ansiedad']:null,
            'usa_respirador_fatiga'=>isset($data['usa_respirador_fatiga'])? $data['usa_respirador_fatiga']:null,
            'usa_respirador_otros'=>isset($data['usa_respirador_otros'])? $data['usa_respirador_otros']:null,
            'usa_respirador_otros_descripcion'=>isset($data['usa_respirador_otros_descripcion'])? $data['usa_respirador_otros_descripcion']:null,
            //seccion2
            //9
            'perdida_vision_cualquier_ojo_temporal_permanente'=>isset($data['perdida_vision_cualquier_ojo_temporal_permanente'])? $data['perdida_vision_cualquier_ojo_temporal_permanente']:null,
            //10
            'perdida_vision_cualquier_usa_lentes_contacto'=>isset($data['perdida_vision_cualquier_usa_lentes_contacto'])? $data['perdida_vision_cualquier_usa_lentes_contacto']:null,
            'perdida_vision_usa_lentes'=>isset($data['perdida_vision_usa_lentes'])? $data['perdida_vision_usa_lentes']:null,
            'perdida_vision_daltonismo'=>isset($data['perdida_vision_daltonismo'])? $data['perdida_vision_daltonismo']:null,
            'perdida_vision_otros'=>isset($data['perdida_vision_otros'])? $data['perdida_vision_otros']:null,
            'perdida_vision_otros_descripcion'=>isset($data['perdida_vision_otros_descripcion'])? $data['perdida_vision_otros_descripcion']:null,
            //11
            'lesion_oido'=>isset($data['lesion_oido'])? $data['lesion_oido']:null,
            //12
            'prob_audicion_dificultad_escucha'=>isset($data['prob_audicion_dificultad_escucha'])? $data['prob_audicion_dificultad_escucha']:null,
            'prob_audicion_usa_audifono'=>isset($data['prob_audicion_usa_audifono'])? $data['prob_audicion_usa_audifono']:null,
            'prob_audicion_otros'=>isset($data['prob_audicion_otros'])? $data['prob_audicion_otros']:null,
            'prob_audicion_otros_descripcion'=>isset($data['prob_audicion_otros_descripcion'])? $data['prob_audicion_otros_descripcion']:null,
            //13
            'lesion_espalda'=>isset($data['lesion_espalda'])? $data['lesion_espalda']:null,
            //14
            'prob_muscular_debilidad_extremidades'=>isset($data['prob_muscular_debilidad_extremidades'])? $data['prob_muscular_debilidad_extremidades']:null,
            'prob_muscular_debilidad_dolor_espalda'=>isset($data['prob_muscular_debilidad_dolor_espalda'])? $data['prob_muscular_debilidad_dolor_espalda']:null,
            'prob_muscular_dificultad_mover_brazos_piernas'=>isset($data['prob_muscular_dificultad_mover_brazos_piernas'])? $data['prob_muscular_dificultad_mover_brazos_piernas']:null,
            'prob_muscular_dolor_inclina_adelanta_atras_cintura'=>isset($data['prob_muscular_dolor_inclina_adelanta_atras_cintura'])? $data['prob_muscular_dolor_inclina_adelanta_atras_cintura']:null,
            'prob_muscular_dificultad_mover_cabeza_arriba_abajo'=>isset($data['prob_muscular_dificultad_mover_cabeza_arriba_abajo'])? $data['prob_muscular_dificultad_mover_cabeza_arriba_abajo']:null,
            'prob_muscular_dificultad_mover_cabeza_lado'=>isset($data['prob_muscular_dificultad_mover_cabeza_lado'])? $data['prob_muscular_dificultad_mover_cabeza_lado']:null,
            'prob_muscular_doblar_rodillas'=>isset($data['prob_muscular_doblar_rodillas'])? $data['prob_muscular_doblar_rodillas']:null,
            'prob_muscular_ponerse_cuclillas'=>isset($data['prob_muscular_ponerse_cuclillas'])? $data['prob_muscular_ponerse_cuclillas']:null,
            'prob_muscular_subir_escaleras'=>isset($data['prob_muscular_subir_escaleras'])? $data['prob_muscular_subir_escaleras']:null,
            'prob_muscular_otros'=>isset($data['prob_muscular_otros'])? $data['prob_muscular_otros']:null,
            'prob_muscular_otros_descripcion'=>isset($data['prob_muscular_otros_descripcion'])? $data['prob_muscular_otros_descripcion']:null,
            //seccion 3
            //1
            'sensacion_mareos'=>isset($data['sensacion_mareos'])? $data['sensacion_mareos']:null,
            'sensacion_dificultad_respirar'=>isset($data['sensacion_dificultad_respirar'])? $data['sensacion_dificultad_respirar']:null,
            'sensacion_palpitaciones'=>isset($data['sensacion_palpitaciones'])? $data['sensacion_palpitaciones']:null,
            'sensacion_otros'=>isset($data['sensacion_otros'])? $data['sensacion_otros']:null,
            'sensacion_otros_descripcion'=>isset($data['sensacion_otros_descripcion'])? $data['sensacion_otros_descripcion']:null,
            //2
            'trabaja_material_asbestos'=>isset($data['trabaja_material_asbestos'])? $data['trabaja_material_asbestos']:null,
            'trabaja_material_silice'=>isset($data['trabaja_material_silice'])? $data['trabaja_material_silice']:null,
            'trabaja_material_tungsteno_cobalto'=>isset($data['trabaja_material_tungsteno_cobalto'])? $data['trabaja_material_tungsteno_cobalto']:null,
            'trabaja_material_berilio'=>isset($data['trabaja_material_berilio'])? $data['trabaja_material_berilio']:null,
            'trabaja_material_aluminio'=>isset($data['trabaja_material_aluminio'])? $data['trabaja_material_aluminio']:null,
            'trabaja_material_carbon'=>isset($data['trabaja_material_carbon'])? $data['trabaja_material_carbon']:null,
            'trabaja_material_hierro'=>isset($data['trabaja_material_hierro'])? $data['trabaja_material_hierro']:null,
            'trabaja_material_laton'=>isset($data['trabaja_material_laton'])? $data['trabaja_material_laton']:null,
            'trabaja_material_ambientes_polvo'=>isset($data['trabaja_material_ambientes_polvo'])? $data['trabaja_material_ambientes_polvo']:null,
            'trabaja_otros'=>isset($data['trabaja_otros'])? $data['trabaja_otros']:null,
            'trabaja_otros_descripcion'=>isset($data['trabaja_otros_descripcion'])? $data['trabaja_otros_descripcion']:null,
            //3
            'trabajo_previo_pasatiempo_riesgo'=>isset($data['trabajo_previo_pasatiempo_riesgo'])? $data['trabajo_previo_pasatiempo_riesgo']:null,
            //4
            'servicio_militar'=>isset($data['servicio_militar'])? $data['servicio_militar']:null,
            //5
            'equipo_matpel_respuesta_emergencia'=>isset($data['equipo_matpel_respuesta_emergencia'])? $data['equipo_matpel_respuesta_emergencia']:null,
            //7.3
            //
            'autorizacion_clase'=>isset($data['autorizacion_clase'])? $data['autorizacion_clase']:null,
            'uso_emergencia_solamente'=>isset($data['uso_emergencia_solamente'])? $data['uso_emergencia_solamente']:null,
            'solo_papr'=>isset($data['solo_papr'])? $data['solo_papr']:null,
            'no_sbca'=>isset($data['no_sbca'])? $data['no_sbca']:null,
            'autorizacion_otros'=>isset($data['autorizacion_otros'])? $data['autorizacion_otros']:null,

            //datos medico
            'nombre_medico'=>isset($data['nombre_medico'])? $data['nombre_medico']:null,
            'cmp'=>isset($data['cmp'])? $data['cmp']:null,
            'fecha_expiracion'=>isset($data['fecha_expiracion'])? $data['fecha_expiracion']:null,

            'fecha_registro' => Carbon::now(),
            'lista_examen_id' => $data['lista_examen_id'],
            'cita_id' => $data['cita_id'],
            'estado' => true
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UsoRespirador  $usoRespirador
     * @return \Illuminate\Http\Response
     */
    public function show(UsoRespirador $usoRespirador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UsoRespirador  $usoRespirador
     * @return \Illuminate\Http\Response
     */
    public function edit(UsoRespirador $usoRespirador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UsoRespirador  $usoRespirador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $usoRespirador = UsoRespirador::find($request['usoRespirador_id']);

        //dd($request['promedio_horas_dia']);

        if(request()->ajax()) {
            $data = request()->validate([
                //7.1 ficha evaluacion del lugar
                //tipo respirador utilizar
                'tipo_respirador_mascara_polvo' => 'nullable',
                'tipo_respirador_media_cara' => 'nullable',
                'tipo_respirador_cara_completa' => 'nullable',
                'tipo_respirador_puri_aire_sin_energia' => 'nullable',
                'tipo_respirador_puri_aire_con_energia' => 'nullable',
                'tipo_respirador_respirador_atmosfera' => 'nullable',
                'tipo_respirador_combinacion_linea_aire_scba' => 'nullable',
                'tipo_respirador_respirador_flujo_continuo' => 'nullable',
                'tipo_respirador_respirador_suministro_aire' => 'nullable',
                'tipo_respirador_scba_circuito_abierto' => 'nullable',
                'tipo_respirador_scba_circuito_cerrado' => 'nullable',

                //tipo proteccion
                'tipo_respirador_filtro_hepa' => 'nullable',
                'tipo_respirador_cartucho_gas_acido' => 'nullable',
                'tipo_respirador_cartucho_vapor_organico' => 'nullable',
                'tipo_respirador_cartucho_amoniaco' => 'nullable',
                'tipo_respirador_cartucho_mercurio' => 'nullable',

                //esfuerzo esperado requerido
                'esfuerzo_fisico_esperado' => 'nullable',

                //frecuencia de uso
                'frecuencia_uso' => 'nullable',
                'promedio_horas_dia' => 'nullable',

                //exposicion materiales peligrosos
                'expo_materiales_peligrosos_humo_metal' => 'nullable',
                'expo_materiales_peligrosos_arsenico' => 'nullable',
                'expo_materiales_peligrosos_plomo' => 'nullable',
                'expo_materiales_peligrosos_asbesto' => 'nullable',
                'expo_materiales_peligrosos_dpm' => 'nullable',
                'expo_materiales_peligrosos_monoxido_carbono' => 'nullable',
                'expo_materiales_peligrosos_dioxido_carbono' => 'nullable',
                'expo_materiales_peligrosos_vapor_organico' => 'nullable',
                'expo_materiales_peligrosos_amoniaco' => 'nullable',
                'expo_materiales_peligrosos_polvo_respirable' => 'nullable',
                'expo_materiales_peligrosos_silice' => 'nullable',
                'expo_materiales_peligrosos_mercurio' => 'nullable',
                'expo_materiales_peligrosos_otros' => 'nullable',

                //condiciones especiales de trabajo
                'cond_especiales_elevaciones_altas_2500' => 'nullable',
                'cond_especiales_temperaturas_extremas' => 'nullable',
                'cond_especiales_atmosferas_humedas' => 'nullable',
                'cond_especiales_espacios_confirmados' => 'nullable',
                'cond_especiales_atmosferas_idlh' => 'nullable',
                'cond_especiales_hazmat_fuego_rescate_mina' => 'nullable',
                'cond_especiales_epp_adicional_utilizado' => 'nullable',
                'cond_especiales_otros' => 'nullable',
                'cond_especiales_otros_descripcion' => 'nullable',

                //7.2 ficha evaluacion personal del empleado
                //seccion 1
                //1
                'fuma' => 'nullable',
                //2
                'cond_palpitaciones' => 'nullable',
                'cond_convulsiones' => 'nullable',
                'cond_diabetes' => 'nullable',
                'cond_reacciones_alergicas' => 'nullable',
                'cond_claustrofia' => 'nullable',
                //3
                'prob_pulmonar_asbestosis' => 'nullable',
                'prob_pulmonar_asma' => 'nullable',
                'prob_bronquitis_cronica' => 'nullable',
                'prob_enfisema' => 'nullable',
                'prob_neumonia' => 'nullable',
                'prob_tuberculosis' => 'nullable',
                'prob_silicosis' => 'nullable',
                'prob_neumotorax' => 'nullable',
                'prob_cancer_pulmon' => 'nullable',
                'prob_costillas_fracturadas' => 'nullable',
                'prob_cualquier_lesion_pulmon' => 'nullable',
                'prob_otros' => 'nullable',
                'prob_otros_descripcion' => 'nullable',
                //4
                'enf_pulmonar_dif_respirar_reposo' => 'nullable',
                'enf_pulmonar_dif_respirar_camina_nivel_suelo' => 'nullable',
                'enf_pulmonar_dif_respirar_camina_inclinado' => 'nullable',
                'enf_pulmonar_dif_respirar_realiza_tarea' => 'nullable',
                'enf_pulmonar_dif_tos_expectoracion' => 'nullable',
                'enf_pulmonar_dif_tos_despierta_temprano' => 'nullable',
                'enf_pulmonar_dif_tos_echado' => 'nullable',
                'enf_pulmonar_dif_tos_sangre' => 'nullable',
                'enf_pulmonar_dif_silbidos_pecho_respira' => 'nullable',
                'enf_pulmonar_dif_dolor_pecho_respira_profundo' => 'nullable',
                'enf_pulmonar_dif_otros' => 'nullable',
                'enf_pulmonar_dif_otros_descripcion' => 'nullable',
                //5
                'pro_cardiovascular_infarto' => 'nullable',
                'pro_cardiovascular_angina' => 'nullable',
                'pro_cardiovascular_insuficiencia_cardiaca' => 'nullable',
                'pro_cardiovascular_hinchazon_piernas' => 'nullable',
                'pro_cardiovascular_arritmia_corazon' => 'nullable',
                'pro_cardiovascular_reflujo_gastroesofagico' => 'nullable',
                'pro_cardiovascular_otros' => 'nullable',
                'pro_cardiovascular_otros_descripcion' => 'nullable',

                //6
                'sint_dolor_pecho' => 'nullable',
                'sint_dolor_pecho_actividad_fisica' => 'nullable',
                'sint_dolor_pecho_actividad_trabajo' => 'nullable',
                'sint_palpitaciones' => 'nullable',
                'sint_acidez_estomacal_indigestion' => 'nullable',
                'sint_otros' => 'nullable',
                'sint_otros_descripcion' => 'nullable',
                //7
                'usa_medicina_problema_respiratorio' => 'nullable',
                'usa_medicina_problema_corazon' => 'nullable',
                'usa_medicina_presion_sanguinea' => 'nullable',
                'usa_medicina_convulsion' => 'nullable',
                //8
                'usa_respirador_irritacion_ojos' => 'nullable',
                'usa_respirador_alergias' => 'nullable',
                'usa_respirador_ansiedad' => 'nullable',
                'usa_respirador_fatiga' => 'nullable',
                'usa_respirador_otros' => 'nullable',
                'usa_respirador_otros_descripcion' => 'nullable',
                //seccion2
                //9
                'perdida_vision_cualquier_ojo_temporal_permanente' => 'nullable',
                //10
                'perdida_vision_cualquier_usa_lentes_contacto' => 'nullable',
                'perdida_vision_usa_lentes' => 'nullable',
                'perdida_vision_daltonismo' => 'nullable',
                'perdida_vision_otros' => 'nullable',
                'perdida_vision_otros_descripcion' => 'nullable',
                //11
                'lesion_oido' => 'nullable',
                //12
                'prob_audicion_dificultad_escucha' => 'nullable',
                'prob_audicion_usa_audifono' => 'nullable',
                'prob_audicion_otros' => 'nullable',
                'prob_audicion_otros_descripcion' => 'nullable',
                //13
                'lesion_espalda' => 'nullable',
                //14
                'prob_muscular_debilidad_extremidades' => 'nullable',
                'prob_muscular_debilidad_dolor_espalda' => 'nullable',
                'prob_muscular_dificultad_mover_brazos_piernas' => 'nullable',
                'prob_muscular_dolor_inclina_adelanta_atras_cintura' => 'nullable',
                'prob_muscular_dificultad_mover_cabeza_arriba_abajo' => 'nullable',
                'prob_muscular_dificultad_mover_cabeza_lado' => 'nullable',
                'prob_muscular_doblar_rodillas' => 'nullable',
                'prob_muscular_ponerse_cuclillas' => 'nullable',
                'prob_muscular_subir_escaleras' => 'nullable',
                'prob_muscular_otros' => 'nullable',
                'prob_muscular_otros_descripcion' => 'nullable',
                //seccion 3
                //1
                'sensacion_mareos' => 'nullable',
                'sensacion_dificultad_respirar' => 'nullable',
                'sensacion_palpitaciones' => 'nullable',
                'sensacion_otros' => 'nullable',
                'sensacion_otros_descripcion' => 'nullable',
                //2
                'trabaja_material_asbestos' => 'nullable',
                'trabaja_material_silice' => 'nullable',
                'trabaja_material_tungsteno_cobalto' => 'nullable',
                'trabaja_material_berilio' => 'nullable',
                'trabaja_material_aluminio' => 'nullable',
                'trabaja_material_carbon' => 'nullable',
                'trabaja_material_hierro' => 'nullable',
                'trabaja_material_laton' => 'nullable',
                'trabaja_material_ambientes_polvo' => 'nullable',
                'trabaja_otros' => 'nullable',
                'trabaja_otros_descripcion' => 'nullable',
                //3
                'trabajo_previo_pasatiempo_riesgo' => 'nullable',
                //4
                'servicio_militar' => 'nullable',
                //5
                'equipo_matpel_respuesta_emergencia' => 'nullable',
                //7.3
                //
                'autorizacion_clase' => 'nullable',
                'uso_emergencia_solamente'=>'nullable',
                'solo_papr'=>'nullable',
                'no_sbca'=>'nullable',
                'autorizacion_otros'=>'nullable',
//                'autorizacion_clase_i' => 'nullable',
//                'autorizacion_clase_ii' => 'nullable',
//                'autorizacion_clase_iii' => 'nullable',
//                'autorizacion_clase_iv' => 'nullable',
//                'autorizacion_clase_v' => 'nullable',

                //datos medico
                'nombre_medico' => 'nullable',
                'cmp' => 'nullable',

                'fecha_expiracion' => 'nullable',

                'lista_examen_id' => 'required',
                'cita_id' => 'required'

            ]);

            $usoRespirador->update([
                //7.1 ficha evaluacion del lugar
                //tipo respirador utilizar
                'tipo_respirador_mascara_polvo' => isset($data['tipo_respirador_mascara_polvo']) ? $data['tipo_respirador_mascara_polvo'] : null,
                'tipo_respirador_media_cara' => isset($data['tipo_respirador_media_cara']) ? $data['tipo_respirador_media_cara'] : null,
                'tipo_respirador_cara_completa' => isset($data['tipo_respirador_cara_completa']) ? $data['tipo_respirador_cara_completa'] : null,
                'tipo_respirador_puri_aire_sin_energia' => isset($data['tipo_respirador_puri_aire_sin_energia']) ? $data['tipo_respirador_puri_aire_sin_energia'] : null,
                'tipo_respirador_puri_aire_con_energia' => isset($data['tipo_respirador_puri_aire_con_energia']) ? $data['tipo_respirador_puri_aire_con_energia'] : null,
                'tipo_respirador_respirador_atmosfera' => isset($data['tipo_respirador_respirador_atmosfera']) ? $data['tipo_respirador_respirador_atmosfera'] : null,
                'tipo_respirador_combinacion_linea_aire_scba' => isset($data['tipo_respirador_combinacion_linea_aire_scba']) ? $data['tipo_respirador_combinacion_linea_aire_scba'] : null,
                'tipo_respirador_respirador_flujo_continuo' => isset($data['tipo_respirador_respirador_flujo_continuo']) ? $data['tipo_respirador_respirador_flujo_continuo'] : null,
                'tipo_respirador_respirador_suministro_aire' => isset($data['tipo_respirador_respirador_suministro_aire']) ? $data['tipo_respirador_respirador_suministro_aire'] : null,
                'tipo_respirador_scba_circuito_abierto' => isset($data['tipo_respirador_scba_circuito_abierto']) ? $data['tipo_respirador_scba_circuito_abierto'] : null,
                'tipo_respirador_scba_circuito_cerrado' => isset($data['tipo_respirador_scba_circuito_cerrado']) ? $data['tipo_respirador_scba_circuito_cerrado'] : null,

                //tipo proteccion
                'tipo_respirador_filtro_hepa' => isset($data['tipo_respirador_filtro_hepa']) ? $data['tipo_respirador_filtro_hepa'] : null,
                'tipo_respirador_cartucho_gas_acido' => isset($data['tipo_respirador_cartucho_gas_acido']) ? $data['tipo_respirador_cartucho_gas_acido'] : null,
                'tipo_respirador_cartucho_vapor_organico' => isset($data['tipo_respirador_cartucho_vapor_organico']) ? $data['tipo_respirador_cartucho_vapor_organico'] : null,
                'tipo_respirador_cartucho_amoniaco' => isset($data['tipo_respirador_cartucho_amoniaco']) ? $data['tipo_respirador_cartucho_amoniaco'] : null,
                'tipo_respirador_cartucho_mercurio' => isset($data['tipo_respirador_cartucho_mercurio']) ? $data['tipo_respirador_cartucho_mercurio'] : null,

                //esfuerzo esperado requerido
                'esfuerzo_fisico_esperado' => isset($data['esfuerzo_fisico_esperado']) ? $data['esfuerzo_fisico_esperado'] : null,

                //frecuencia de uso
                'frecuencia_uso' => isset($data['frecuencia_uso']) ? $data['frecuencia_uso'] : null,
                'promedio_horas_dia' => isset($data['promedio_horas_dia']) ? $data['promedio_horas_dia'] : null,

                //exposicion materiales peligrosos
                'expo_materiales_peligrosos_humo_metal' => isset($data['expo_materiales_peligrosos_humo_metal']) ? $data['expo_materiales_peligrosos_humo_metal'] : null,
                'expo_materiales_peligrosos_arsenico' => isset($data['expo_materiales_peligrosos_arsenico']) ? $data['expo_materiales_peligrosos_arsenico'] : null,
                'expo_materiales_peligrosos_plomo' => isset($data['expo_materiales_peligrosos_plomo']) ? $data['expo_materiales_peligrosos_plomo'] : null,
                'expo_materiales_peligrosos_asbesto' => isset($data['expo_materiales_peligrosos_asbesto']) ? $data['expo_materiales_peligrosos_asbesto'] : null,
                'expo_materiales_peligrosos_dpm' => isset($data['expo_materiales_peligrosos_dpm']) ? $data['expo_materiales_peligrosos_dpm'] : null,
                'expo_materiales_peligrosos_monoxido_carbono' => isset($data['expo_materiales_peligrosos_monoxido_carbono']) ? $data['expo_materiales_peligrosos_monoxido_carbono'] : null,
                'expo_materiales_peligrosos_dioxido_carbono' => isset($data['expo_materiales_peligrosos_dioxido_carbono']) ? $data['expo_materiales_peligrosos_dioxido_carbono'] : null,
                'expo_materiales_peligrosos_vapor_organico' => isset($data['expo_materiales_peligrosos_vapor_organico']) ? $data['expo_materiales_peligrosos_vapor_organico'] : null,
                'expo_materiales_peligrosos_amoniaco' => isset($data['expo_materiales_peligrosos_amoniaco']) ? $data['expo_materiales_peligrosos_amoniaco'] : null,
                'expo_materiales_peligrosos_polvo_respirable' => isset($data['expo_materiales_peligrosos_polvo_respirable']) ? $data['expo_materiales_peligrosos_polvo_respirable'] : null,
                'expo_materiales_peligrosos_silice' => isset($data['expo_materiales_peligrosos_silice']) ? $data['expo_materiales_peligrosos_silice'] : null,
                'expo_materiales_peligrosos_mercurio' => isset($data['expo_materiales_peligrosos_mercurio']) ? $data['expo_materiales_peligrosos_mercurio'] : null,
                'expo_materiales_peligrosos_otros' => isset($data['expo_materiales_peligrosos_otros']) ? $data['expo_materiales_peligrosos_otros'] : null,

                //condiciones especiales de trabajo
                'cond_especiales_elevaciones_altas_2500' => isset($data['cond_especiales_elevaciones_altas_2500']) ? $data['cond_especiales_elevaciones_altas_2500'] : null,
                'cond_especiales_temperaturas_extremas' => isset($data['cond_especiales_temperaturas_extremas']) ? $data['cond_especiales_temperaturas_extremas'] : null,
                'cond_especiales_atmosferas_humedas' => isset($data['cond_especiales_atmosferas_humedas']) ? $data['cond_especiales_atmosferas_humedas'] : null,
                'cond_especiales_espacios_confirmados' => isset($data['cond_especiales_espacios_confirmados']) ? $data['cond_especiales_espacios_confirmados'] : null,
                'cond_especiales_atmosferas_idlh' => isset($data['cond_especiales_atmosferas_idlh']) ? $data['cond_especiales_atmosferas_idlh'] : null,
                'cond_especiales_hazmat_fuego_rescate_mina' => isset($data['cond_especiales_hazmat_fuego_rescate_mina']) ? $data['cond_especiales_hazmat_fuego_rescate_mina'] : null,
                'cond_especiales_epp_adicional_utilizado' => isset($data['cond_especiales_epp_adicional_utilizado']) ? $data['cond_especiales_epp_adicional_utilizado'] : null,
                'cond_especiales_otros' => isset($data['cond_especiales_otros']) ? $data['cond_especiales_otros'] : null,
                'cond_especiales_otros_descripcion' => isset($data['cond_especiales_otros_descripcion']) ? $data['cond_especiales_otros_descripcion'] : null,

                //7.2 ficha evaluacion personal del empleado
                //seccion 1
                //1
                'fuma' => isset($data['fuma']) ? $data['fuma'] : null,
                //2
                'cond_palpitaciones' => isset($data['cond_palpitaciones']) ? $data['cond_palpitaciones'] : null,
                'cond_convulsiones' => isset($data['cond_convulsiones']) ? $data['cond_convulsiones'] : null,
                'cond_diabetes' => isset($data['cond_diabetes']) ? $data['cond_diabetes'] : null,
                'cond_reacciones_alergicas' => isset($data['cond_reacciones_alergicas']) ? $data['cond_reacciones_alergicas'] : null,
                'cond_claustrofia' => isset($data['cond_claustrofia']) ? $data['cond_claustrofia'] : null,
                //3
                'prob_pulmonar_asbestosis' => isset($data['prob_pulmonar_asbestosis']) ? $data['prob_pulmonar_asbestosis'] : null,
                'prob_pulmonar_asma' => isset($data['prob_pulmonar_asma']) ? $data['prob_pulmonar_asma'] : null,
                'prob_bronquitis_cronica' => isset($data['prob_bronquitis_cronica']) ? $data['prob_bronquitis_cronica'] : null,
                'prob_enfisema' => isset($data['prob_enfisema']) ? $data['prob_enfisema'] : null,
                'prob_neumonia' => isset($data['prob_neumonia']) ? $data['prob_neumonia'] : null,
                'prob_tuberculosis' => isset($data['prob_tuberculosis']) ? $data['prob_tuberculosis'] : null,
                'prob_silicosis' => isset($data['prob_silicosis']) ? $data['prob_silicosis'] : null,
                'prob_neumotorax' => isset($data['prob_neumotorax']) ? $data['prob_neumotorax'] : null,
                'prob_cancer_pulmon' => isset($data['prob_cancer_pulmon']) ? $data['prob_cancer_pulmon'] : null,
                'prob_costillas_fracturadas' => isset($data['prob_costillas_fracturadas']) ? $data['prob_costillas_fracturadas'] : null,
                'prob_cualquier_lesion_pulmon' => isset($data['prob_cualquier_lesion_pulmon']) ? $data['prob_cualquier_lesion_pulmon'] : null,
                'prob_otros' => isset($data['prob_otros']) ? $data['prob_otros'] : null,
                'prob_otros_descripcion' => isset($data['prob_otros_descripcion']) ? $data['prob_otros_descripcion'] : null,
                //4
                'enf_pulmonar_dif_respirar_reposo' => isset($data['enf_pulmonar_dif_respirar_reposo']) ? $data['enf_pulmonar_dif_respirar_reposo'] : null,
                'enf_pulmonar_dif_respirar_camina_nivel_suelo' => isset($data['enf_pulmonar_dif_respirar_camina_nivel_suelo']) ? $data['enf_pulmonar_dif_respirar_camina_nivel_suelo'] : null,
                'enf_pulmonar_dif_respirar_camina_inclinado' => isset($data['enf_pulmonar_dif_respirar_camina_inclinado']) ? $data['enf_pulmonar_dif_respirar_camina_inclinado'] : null,
                'enf_pulmonar_dif_respirar_realiza_tarea' => isset($data['enf_pulmonar_dif_respirar_realiza_tarea']) ? $data['enf_pulmonar_dif_respirar_realiza_tarea'] : null,
                'enf_pulmonar_dif_tos_expectoracion' => isset($data['enf_pulmonar_dif_tos_expectoracion']) ? $data['enf_pulmonar_dif_tos_expectoracion'] : null,
                'enf_pulmonar_dif_tos_despierta_temprano' => isset($data['enf_pulmonar_dif_tos_despierta_temprano']) ? $data['enf_pulmonar_dif_tos_despierta_temprano'] : null,
                'enf_pulmonar_dif_tos_echado' => isset($data['enf_pulmonar_dif_tos_echado']) ? $data['enf_pulmonar_dif_tos_echado'] : null,
                'enf_pulmonar_dif_tos_sangre' => isset($data['enf_pulmonar_dif_tos_sangre']) ? $data['enf_pulmonar_dif_tos_sangre'] : null,
                'enf_pulmonar_dif_silbidos_pecho_respira' => isset($data['enf_pulmonar_dif_silbidos_pecho_respira']) ? $data['enf_pulmonar_dif_silbidos_pecho_respira'] : null,
                'enf_pulmonar_dif_dolor_pecho_respira_profundo' => isset($data['enf_pulmonar_dif_dolor_pecho_respira_profundo']) ? $data['enf_pulmonar_dif_dolor_pecho_respira_profundo'] : null,
                'enf_pulmonar_dif_otros' => isset($data['enf_pulmonar_dif_otros']) ? $data['enf_pulmonar_dif_otros'] : null,
                'enf_pulmonar_dif_otros_descripcion' => isset($data['enf_pulmonar_dif_otros_descripcion']) ? $data['enf_pulmonar_dif_otros_descripcion'] : null,
                //5
                'pro_cardiovascular_infarto' => isset($data['pro_cardiovascular_infarto']) ? $data['pro_cardiovascular_infarto'] : null,
                'pro_cardiovascular_angina' => isset($data['pro_cardiovascular_angina']) ? $data['pro_cardiovascular_angina'] : null,
                'pro_cardiovascular_insuficiencia_cardiaca' => isset($data['pro_cardiovascular_insuficiencia_cardiaca']) ? $data['pro_cardiovascular_insuficiencia_cardiaca'] : null,
                'pro_cardiovascular_hinchazon_piernas' => isset($data['pro_cardiovascular_hinchazon_piernas']) ? $data['pro_cardiovascular_hinchazon_piernas'] : null,
                'pro_cardiovascular_arritmia_corazon' => isset($data['pro_cardiovascular_arritmia_corazon']) ? $data['pro_cardiovascular_arritmia_corazon'] : null,
                'pro_cardiovascular_reflujo_gastroesofagico' => isset($data['pro_cardiovascular_reflujo_gastroesofagico']) ? $data['pro_cardiovascular_reflujo_gastroesofagico'] : null,
                'pro_cardiovascular_otros' => isset($data['pro_cardiovascular_otros']) ? $data['pro_cardiovascular_otros'] : null,
                'pro_cardiovascular_otros_descripcion' => isset($data['pro_cardiovascular_otros_descripcion']) ? $data['pro_cardiovascular_otros_descripcion'] : null,

                //6
                'sint_dolor_pecho' => isset($data['sint_dolor_pecho']) ? $data['sint_dolor_pecho'] : null,
                'sint_dolor_pecho_actividad_fisica' => isset($data['sint_dolor_pecho_actividad_fisica']) ? $data['sint_dolor_pecho_actividad_fisica'] : null,
                'sint_dolor_pecho_actividad_trabajo' => isset($data['sint_dolor_pecho_actividad_trabajo']) ? $data['sint_dolor_pecho_actividad_trabajo'] : null,
                'sint_palpitaciones' => isset($data['sint_palpitaciones']) ? $data['sint_palpitaciones'] : null,
                'sint_acidez_estomacal_indigestion' => isset($data['sint_acidez_estomacal_indigestion']) ? $data['sint_acidez_estomacal_indigestion'] : null,
                'sint_otros' => isset($data['sint_otros']) ? $data['sint_otros'] : null,
                'sint_otros_descripcion' => isset($data['sint_otros_descripcion']) ? $data['sint_otros_descripcion'] : null,
                //7
                'usa_medicina_problema_respiratorio' => isset($data['usa_medicina_problema_respiratorio']) ? $data['usa_medicina_problema_respiratorio'] : null,
                'usa_medicina_problema_corazon' => isset($data['usa_medicina_problema_corazon']) ? $data['usa_medicina_problema_corazon'] : null,
                'usa_medicina_presion_sanguinea' => isset($data['usa_medicina_presion_sanguinea']) ? $data['usa_medicina_presion_sanguinea'] : null,
                'usa_medicina_convulsion' => isset($data['usa_medicina_convulsion']) ? $data['usa_medicina_convulsion'] : null,
                //8
                'usa_respirador_irritacion_ojos' => isset($data['usa_respirador_irritacion_ojos']) ? $data['usa_respirador_irritacion_ojos'] : null,
                'usa_respirador_alergias' => isset($data['usa_respirador_alergias']) ? $data['usa_respirador_alergias'] : null,
                'usa_respirador_ansiedad' => isset($data['usa_respirador_ansiedad']) ? $data['usa_respirador_ansiedad'] : null,
                'usa_respirador_fatiga' => isset($data['usa_respirador_fatiga']) ? $data['usa_respirador_fatiga'] : null,
                'usa_respirador_otros' => isset($data['usa_respirador_otros']) ? $data['usa_respirador_otros'] : null,
                'usa_respirador_otros_descripcion' => isset($data['usa_respirador_otros_descripcion']) ? $data['usa_respirador_otros_descripcion'] : null,
                //seccion2
                //9
                'perdida_vision_cualquier_ojo_temporal_permanente' => isset($data['perdida_vision_cualquier_ojo_temporal_permanente']) ? $data['perdida_vision_cualquier_ojo_temporal_permanente'] : null,
                //10
                'perdida_vision_cualquier_usa_lentes_contacto' => isset($data['perdida_vision_cualquier_usa_lentes_contacto']) ? $data['perdida_vision_cualquier_usa_lentes_contacto'] : null,
                'perdida_vision_usa_lentes' => isset($data['perdida_vision_usa_lentes']) ? $data['perdida_vision_usa_lentes'] : null,
                'perdida_vision_daltonismo' => isset($data['perdida_vision_daltonismo']) ? $data['perdida_vision_daltonismo'] : null,
                'perdida_vision_otros' => isset($data['perdida_vision_otros']) ? $data['perdida_vision_otros'] : null,
                'perdida_vision_otros_descripcion' => isset($data['perdida_vision_otros_descripcion']) ? $data['perdida_vision_otros_descripcion'] : null,
                //11
                'lesion_oido' => isset($data['lesion_oido']) ? $data['lesion_oido'] : null,
                //12
                'prob_audicion_dificultad_escucha' => isset($data['prob_audicion_dificultad_escucha']) ? $data['prob_audicion_dificultad_escucha'] : null,
                'prob_audicion_usa_audifono' => isset($data['prob_audicion_usa_audifono']) ? $data['prob_audicion_usa_audifono'] : null,
                'prob_audicion_otros' => isset($data['prob_audicion_otros']) ? $data['prob_audicion_otros'] : null,
                'prob_audicion_otros_descripcion' => isset($data['prob_audicion_otros_descripcion']) ? $data['prob_audicion_otros_descripcion'] : null,
                //13
                'lesion_espalda' => isset($data['lesion_espalda']) ? $data['lesion_espalda'] : null,
                //14
                'prob_muscular_debilidad_extremidades' => isset($data['prob_muscular_debilidad_extremidades']) ? $data['prob_muscular_debilidad_extremidades'] : null,
                'prob_muscular_debilidad_dolor_espalda' => isset($data['prob_muscular_debilidad_dolor_espalda']) ? $data['prob_muscular_debilidad_dolor_espalda'] : null,
                'prob_muscular_dificultad_mover_brazos_piernas' => isset($data['prob_muscular_dificultad_mover_brazos_piernas']) ? $data['prob_muscular_dificultad_mover_brazos_piernas'] : null,
                'prob_muscular_dolor_inclina_adelanta_atras_cintura' => isset($data['prob_muscular_dolor_inclina_adelanta_atras_cintura']) ? $data['prob_muscular_dolor_inclina_adelanta_atras_cintura'] : null,
                'prob_muscular_dificultad_mover_cabeza_arriba_abajo' => isset($data['prob_muscular_dificultad_mover_cabeza_arriba_abajo']) ? $data['prob_muscular_dificultad_mover_cabeza_arriba_abajo'] : null,
                'prob_muscular_dificultad_mover_cabeza_lado' => isset($data['prob_muscular_dificultad_mover_cabeza_lado']) ? $data['prob_muscular_dificultad_mover_cabeza_lado'] : null,
                'prob_muscular_doblar_rodillas' => isset($data['prob_muscular_doblar_rodillas']) ? $data['prob_muscular_doblar_rodillas'] : null,
                'prob_muscular_ponerse_cuclillas' => isset($data['prob_muscular_ponerse_cuclillas']) ? $data['prob_muscular_ponerse_cuclillas'] : null,
                'prob_muscular_subir_escaleras' => isset($data['prob_muscular_subir_escaleras']) ? $data['prob_muscular_subir_escaleras'] : null,
                'prob_muscular_otros' => isset($data['prob_muscular_otros']) ? $data['prob_muscular_otros'] : null,
                'prob_muscular_otros_descripcion' => isset($data['prob_muscular_otros_descripcion']) ? $data['prob_muscular_otros_descripcion'] : null,
                //seccion 3
                //1
                'sensacion_mareos' => isset($data['sensacion_mareos']) ? $data['sensacion_mareos'] : null,
                'sensacion_dificultad_respirar' => isset($data['sensacion_dificultad_respirar']) ? $data['sensacion_dificultad_respirar'] : null,
                'sensacion_palpitaciones' => isset($data['sensacion_palpitaciones']) ? $data['sensacion_palpitaciones'] : null,
                'sensacion_otros' => isset($data['sensacion_otros']) ? $data['sensacion_otros'] : null,
                'sensacion_otros_descripcion' => isset($data['sensacion_otros_descripcion']) ? $data['sensacion_otros_descripcion'] : null,
                //2
                'trabaja_material_asbestos' => isset($data['trabaja_material_asbestos']) ? $data['trabaja_material_asbestos'] : null,
                'trabaja_material_silice' => isset($data['trabaja_material_silice']) ? $data['trabaja_material_silice'] : null,
                'trabaja_material_tungsteno_cobalto' => isset($data['trabaja_material_tungsteno_cobalto']) ? $data['trabaja_material_tungsteno_cobalto'] : null,
                'trabaja_material_berilio' => isset($data['trabaja_material_berilio']) ? $data['trabaja_material_berilio'] : null,
                'trabaja_material_aluminio' => isset($data['trabaja_material_aluminio']) ? $data['trabaja_material_aluminio'] : null,
                'trabaja_material_carbon' => isset($data['trabaja_material_carbon']) ? $data['trabaja_material_carbon'] : null,
                'trabaja_material_hierro' => isset($data['trabaja_material_hierro']) ? $data['trabaja_material_hierro'] : null,
                'trabaja_material_laton' => isset($data['trabaja_material_laton']) ? $data['trabaja_material_laton'] : null,
                'trabaja_material_ambientes_polvo' => isset($data['trabaja_material_ambientes_polvo']) ? $data['trabaja_material_ambientes_polvo'] : null,
                'trabaja_otros' => isset($data['trabaja_otros']) ? $data['trabaja_otros'] : null,
                'trabaja_otros_descripcion' => isset($data['trabaja_otros_descripcion']) ? $data['trabaja_otros_descripcion'] : null,
                //3
                'trabajo_previo_pasatiempo_riesgo' => isset($data['trabajo_previo_pasatiempo_riesgo']) ? $data['trabajo_previo_pasatiempo_riesgo'] : null,
                //4
                'servicio_militar' => isset($data['servicio_militar']) ? $data['servicio_militar'] : null,
                //5
                'equipo_matpel_respuesta_emergencia' => isset($data['equipo_matpel_respuesta_emergencia']) ? $data['equipo_matpel_respuesta_emergencia'] : null,
                //7.3
                //
                'autorizacion_clase' => isset($data['autorizacion_clase']) ? $data['autorizacion_clase'] : null,
                'uso_emergencia_solamente'=> isset($data['uso_emergencia_solamente']) ? $data['uso_emergencia_solamente'] : null,
                'solo_papr'=> isset($data['solo_papr']) ? $data['solo_papr'] : null,
                'no_sbca'=> isset($data['no_sbca']) ? $data['no_sbca'] : null,
                'autorizacion_otros'=>isset($data['autorizacion_otros']) ? $data['autorizacion_otros'] : null,

//                'autorizacion_clase_i' => isset($data['autorizacion_clase_i']) ? $data['autorizacion_clase_i'] : null,
//                'autorizacion_clase_ii' => isset($data['autorizacion_clase_ii']) ? $data['autorizacion_clase_ii'] : null,
//                'autorizacion_clase_iii' => isset($data['autorizacion_clase_iii']) ? $data['autorizacion_clase_iii'] : null,
//                'autorizacion_clase_iv' => isset($data['autorizacion_clase_iv']) ? $data['autorizacion_clase_iv'] : null,
//                'autorizacion_clase_v' => isset($data['autorizacion_clase_v']) ? $data['autorizacion_clase_v'] : null,

                //datos medico
                'nombre_medico' => isset($data['nombre_medico']) ? $data['nombre_medico'] : null,
                'cmp' => isset($data['cmp']) ? $data['cmp'] : null,
                'fecha_expiracion' => isset($data['fecha_expiracion']) ? $data['fecha_expiracion'] : null,

                'fecha_registro' => Carbon::now(),
                'lista_examen_id' => $data['lista_examen_id'],
                'cita_id' => $data['cita_id'],
                'estado' => true
            ]);

            return response()->json(['mensaje' => 'registro actualizado']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UsoRespirador  $usoRespirador
     * @return \Illuminate\Http\Response
     */
    public function destroy(UsoRespirador $usoRespirador)
    {
        //
    }

    public function reporte_uso_respiradores($id){
      $cita=Cita::find($id);
      $view=View::make('evaluacionmedica.reportes.usorespiradores',compact('cita'));
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      $pdf->stream($view);
      return $pdf->stream();
    }




}
