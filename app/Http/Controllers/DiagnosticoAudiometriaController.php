<?php

namespace App\Http\Controllers;

use App\DiagnosticoAudiometria;
use Illuminate\Http\Request;
use Carbon\Carbon;
class DiagnosticoAudiometriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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


      if(request()->ajax())
      {
          $data = request()->validate([
              'examenes_auxiliares'=>'nullable',
              'observaciones'=>'nullable',
              'diagnosticos_cie10_medico'=>'nullable',
              'concluciones'=>'nullable',
              'recomendaciones'=>'nullable',
              'audiometria_normal'=>'nullable',
              'hipoacusia_neurosensorial_bilateral'=>'nullable',
              'hipoacusia_neurosensorial_derecha'=>'nullable',
              'hipoacusia_neurosensorial_izquierda'=>'nullable',
              'hipoacusia_conductiva_Bilateral'=>'nullable',
              'hipoacusia_conductiva_derecha'=>'nullable',
              'hipoacusia_conductiva_izquierda'=>'nullable',
              'hipoacusia_mixta_Bilateral'=>'nullable',
              'hipoacusia_mixta_derecha'=>'nullable',
              'hipoacusia_mixta_izquierda'=>'nullable',
              'alteracion_no_inducida_por_ruido'=>'nullable',
              'descartar_trauma_acustico_leve'=>'nullable',
              'descartar_trauma_acustico_avanzado'=>'nullable',
              'descartar_danio_acustico_leve'=>'nullable',
              'descartar_danio_acustico_moderado'=>'nullable',
              'descartar_danio_acustico_avanzado'=>'nullable',
              'cambio_significativo_positivo'=>'nullable',
              'audiometria_pendiente'=>'nullable',
              'repetir_audiometria'=>'nullable',
              'lista_examen_id'=>'nullable',
              'cita_id'=>'nullable'
          ]);

          $diagnosticoaudiometria = DiagnosticoAudiometria::create([
             'examenes_auxiliares'=>isset($data['examenes_auxiliares'])? $data['examenes_auxiliares']:null,
             'observaciones'=>isset($data['observaciones'])? $data['observaciones']:null,
             'diagnosticos_cie10_medico'=>isset($data['diagnosticos_cie10_medico'])? $data['diagnosticos_cie10_medico']:null,
             'concluciones'=>isset($data['concluciones'])? $data['concluciones']:null,
             'recomendaciones'=>isset($data['recomendaciones'])? $data['recomendaciones']:null,
             'audiometria_normal'=>isset($data['audiometria_normal'])? $data['audiometria_normal']:0,
             'hipoacusia_neurosensorial_bilateral'=>isset($data['hipoacusia_neurosensorial_bilateral'])? $data['hipoacusia_neurosensorial_bilateral']:0,
             'hipoacusia_neurosensorial_derecha'=>isset($data['hipoacusia_neurosensorial_derecha'])? $data['hipoacusia_neurosensorial_derecha']:0,
             'hipoacusia_neurosensorial_izquierda'=>isset($data['hipoacusia_neurosensorial_izquierda'])? $data['hipoacusia_neurosensorial_izquierda']:0,
             'hipoacusia_conductiva_Bilateral'=>isset($data['hipoacusia_conductiva_Bilateral'])? $data['hipoacusia_conductiva_Bilateral']:0,
             'hipoacusia_conductiva_derecha'=>isset($data['hipoacusia_conductiva_derecha'])? $data['hipoacusia_conductiva_derecha']:0,
             'hipoacusia_conductiva_izquierda'=>isset($data['hipoacusia_conductiva_izquierda'])? $data['hipoacusia_conductiva_izquierda']:0,
             'hipoacusia_mixta_Bilateral'=>isset($data['hipoacusia_mixta_Bilateral'])? $data['hipoacusia_mixta_Bilateral']:0,
             'hipoacusia_mixta_derecha'=>isset($data['hipoacusia_mixta_derecha'])? $data['hipoacusia_mixta_derecha']:0,
             'hipoacusia_mixta_izquierda'=>isset($data['hipoacusia_mixta_izquierda'])? $data['hipoacusia_mixta_izquierda']:0,
             'alteracion_no_inducida_por_ruido'=>isset($data['alteracion_no_inducida_por_ruido'])? $data['alteracion_no_inducida_por_ruido']:0,
             'descartar_trauma_acustico_leve'=>isset($data['descartar_trauma_acustico_leve'])? $data['descartar_trauma_acustico_leve']:0,
             'descartar_trauma_acustico_avanzado'=>isset($data['descartar_trauma_acustico_avanzado'])? $data['descartar_trauma_acustico_avanzado']:0,
             'descartar_danio_acustico_leve'=>isset($data['descartar_danio_acustico_leve'])? $data['descartar_danio_acustico_leve']:0,
             'descartar_danio_acustico_moderado'=>isset($data['descartar_danio_acustico_moderado'])? $data['descartar_danio_acustico_moderado']:0,
             'descartar_danio_acustico_avanzado'=>isset($data['descartar_danio_acustico_avanzado'])? $data['descartar_danio_acustico_avanzado']:0,
             'cambio_significativo_positivo'=>isset($data['cambio_significativo_positivo'])? $data['cambio_significativo_positivo']:0,
             'audiometria_pendiente'=>isset($data['audiometria_pendiente'])? $data['audiometria_pendiente']:0,
             'repetir_audiometria'=>isset($data['repetir_audiometria'])? $data['repetir_audiometria']:0,
             'fecha_registro'=>Carbon::now(),
             'lista_examen_id'=>isset($data['lista_examen_id'])? $data['lista_examen_id']:null,
             'cita_id'=>isset($data['cita_id'])? $data['cita_id']:null,
             'estado'=>true
          ]);
          return response()->json(['mensaje' =>"registro diagnostico audiometria exitoso"]);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DiagnosticoAudiometria  $diagnosticoAudiometria
     * @return \Illuminate\Http\Response
     */
    public function show(DiagnosticoAudiometria $diagnosticoAudiometria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DiagnosticoAudiometria  $diagnosticoAudiometria
     * @return \Illuminate\Http\Response
     */
    public function edit(DiagnosticoAudiometria $diagnosticoAudiometria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DiagnosticoAudiometria  $diagnosticoAudiometria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $diagnosticoaudiometria = DiagnosticoAudiometria::find($request['diagnosticoaudiometria_id']);
      if(request()->ajax())
      {
          $data = request()->validate([
              'examenes_auxiliares'=>'nullable',
              'observaciones'=>'nullable',
              'diagnosticos_cie10_medico'=>'nullable',
              'concluciones'=>'nullable',
              'recomendaciones'=>'nullable',
              'audiometria_normal'=>'nullable',
              'hipoacusia_neurosensorial_bilateral'=>'nullable',
              'hipoacusia_neurosensorial_derecha'=>'nullable',
              'hipoacusia_neurosensorial_izquierda'=>'nullable',
              'hipoacusia_conductiva_Bilateral'=>'nullable',
              'hipoacusia_conductiva_derecha'=>'nullable',
              'hipoacusia_conductiva_izquierda'=>'nullable',
              'hipoacusia_mixta_Bilateral'=>'nullable',
              'hipoacusia_mixta_derecha'=>'nullable',
              'hipoacusia_mixta_izquierda'=>'nullable',
              'alteracion_no_inducida_por_ruido'=>'nullable',
              'descartar_trauma_acustico_leve'=>'nullable',
              'descartar_trauma_acustico_avanzado'=>'nullable',
              'descartar_danio_acustico_leve'=>'nullable',
              'descartar_danio_acustico_moderado'=>'nullable',
              'descartar_danio_acustico_avanzado'=>'nullable',
              'cambio_significativo_positivo'=>'nullable',
              'audiometria_pendiente'=>'nullable',
              'repetir_audiometria'=>'nullable',
              'lista_examen_id'=>'nullable',
              'cita_id'=>'nullable'
          ]);

          $diagnosticoaudiometria->update([
             'examenes_auxiliares'=>isset($data['examenes_auxiliares'])? $data['examenes_auxiliares']:null,
             'observaciones'=>isset($data['observaciones'])? $data['observaciones']:null,
             'diagnosticos_cie10_medico'=>isset($data['diagnosticos_cie10_medico'])? $data['diagnosticos_cie10_medico']:null,
             'concluciones'=>isset($data['concluciones'])? $data['concluciones']:null,
             'recomendaciones'=>isset($data['recomendaciones'])? $data['recomendaciones']:null,
             'audiometria_normal'=>isset($data['audiometria_normal'])? $data['audiometria_normal']:0,
             'hipoacusia_neurosensorial_bilateral'=>isset($data['hipoacusia_neurosensorial_bilateral'])? $data['hipoacusia_neurosensorial_bilateral']:0,
             'hipoacusia_neurosensorial_derecha'=>isset($data['hipoacusia_neurosensorial_derecha'])? $data['hipoacusia_neurosensorial_derecha']:0,
             'hipoacusia_neurosensorial_izquierda'=>isset($data['hipoacusia_neurosensorial_izquierda'])? $data['hipoacusia_neurosensorial_izquierda']:0,
             'hipoacusia_conductiva_Bilateral'=>isset($data['hipoacusia_conductiva_Bilateral'])? $data['hipoacusia_conductiva_Bilateral']:0,
             'hipoacusia_conductiva_derecha'=>isset($data['hipoacusia_conductiva_derecha'])? $data['hipoacusia_conductiva_derecha']:0,
             'hipoacusia_conductiva_izquierda'=>isset($data['hipoacusia_conductiva_izquierda'])? $data['hipoacusia_conductiva_izquierda']:0,
             'hipoacusia_mixta_Bilateral'=>isset($data['hipoacusia_mixta_Bilateral'])? $data['hipoacusia_mixta_Bilateral']:0,
             'hipoacusia_mixta_derecha'=>isset($data['hipoacusia_mixta_derecha'])? $data['hipoacusia_mixta_derecha']:0,
             'hipoacusia_mixta_izquierda'=>isset($data['hipoacusia_mixta_izquierda'])? $data['hipoacusia_mixta_izquierda']:0,
             'alteracion_no_inducida_por_ruido'=>isset($data['alteracion_no_inducida_por_ruido'])? $data['alteracion_no_inducida_por_ruido']:0,
             'descartar_trauma_acustico_leve'=>isset($data['descartar_trauma_acustico_leve'])? $data['descartar_trauma_acustico_leve']:0,
             'descartar_trauma_acustico_avanzado'=>isset($data['descartar_trauma_acustico_avanzado'])? $data['descartar_trauma_acustico_avanzado']:0,
             'descartar_danio_acustico_leve'=>isset($data['descartar_danio_acustico_leve'])? $data['descartar_danio_acustico_leve']:0,
             'descartar_danio_acustico_moderado'=>isset($data['descartar_danio_acustico_moderado'])? $data['descartar_danio_acustico_moderado']:0,
             'descartar_danio_acustico_avanzado'=>isset($data['descartar_danio_acustico_avanzado'])? $data['descartar_danio_acustico_avanzado']:0,
             'cambio_significativo_positivo'=>isset($data['cambio_significativo_positivo'])? $data['cambio_significativo_positivo']:0,
             'audiometria_pendiente'=>isset($data['audiometria_pendiente'])? $data['audiometria_pendiente']:0,
             'repetir_audiometria'=>isset($data['repetir_audiometria'])? $data['repetir_audiometria']:0,
             'fecha_registro'=>Carbon::now(),
             'lista_examen_id'=>isset($data['lista_examen_id'])? $data['lista_examen_id']:null,
             'cita_id'=>isset($data['cita_id'])? $data['cita_id']:null,
             'estado'=>true
          ]);
          $diagnosticoaudiometria->save();
          return response()->json(['mensaje' =>"registro diagnostico audiometria exitoso"]);
      }



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DiagnosticoAudiometria  $diagnosticoAudiometria
     * @return \Illuminate\Http\Response
     */
    public function destroy(DiagnosticoAudiometria $diagnosticoAudiometria)
    {
        //
    }
}
