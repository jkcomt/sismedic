<?php

namespace App\Http\Controllers;

use App\DiagnosticoElectrocardiograma;
use Illuminate\Http\Request;
use Carbon\Carbon;
class DiagnosticoElectrocardiogramaController extends Controller
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
      if(request()->ajax())
      {
          $data = request()->validate([
              'examenes_auxiliares'=>'nullable',
              'observaciones'=>'nullable',
              'diagnosticos_cie10_medico'=>'nullable',
              'concluciones'=>'nullable',
              'recomendaciones'=>'nullable',
              'electrocardiograma_normal'=>'nullable',
              'electrocardiograma_sin_patologico'=>'nullable',
              'electrocardiograma_probable_patologico'=>'nullable',
              'bradicardia'=>'nullable',
              'bloqueo_incompleto_rama_derecha'=>'nullable',
              'bloqueo_completo_rama_derecha'=>'nullable',
              'hemibloqueo_anterior_izquierdo'=>'nullable',
              'hemibloqueo_posterior_izquierdo'=>'nullable',
              'bloqueo_primer_grado'=>'nullable',
              'bloqueo_segundo_grado'=>'nullable',
              'bloqueo_completo'=>'nullable',
              'hipertrofia_ventricular_izquierda'=>'nullable',
              'electrocardiograma_pendiente'=>'nullable',
              'repetir_electrocardiograma'=>'nullable',
              'lista_examen_id'=>'nullable',
              'cita_id'=>'nullable'
          ]);

          $diagnosticoElectrocardiograma = DiagnosticoElectrocardiograma::create([
            'examenes_auxiliares'=>isset($data['examenes_auxiliares'])? $data['examenes_auxiliares']:null,
            'observaciones'=>isset($data['observaciones'])? $data['observaciones']:null,
            'diagnosticos_cie10_medico'=>isset($data['diagnosticos_cie10_medico'])? $data['diagnosticos_cie10_medico']:null,
            'concluciones'=>isset($data['concluciones'])? $data['concluciones']:null,
            'recomendaciones'=>isset($data['recomendaciones'])? $data['recomendaciones']:null,
             'electrocardiograma_normal'=>isset($data['electrocardiograma_normal'])? $data['electrocardiograma_normal']:0,
             'electrocardiograma_sin_patologico'=>isset($data['electrocardiograma_sin_patologico'])? $data['electrocardiograma_sin_patologico']:0,
             'electrocardiograma_probable_patologico'=>isset($data['electrocardiograma_probable_patologico'])? $data['electrocardiograma_probable_patologico']:0,
             'bradicardia'=>isset($data['bradicardia'])? $data['bradicardia']:0,
             'bloqueo_incompleto_rama_derecha'=>isset($data['bloqueo_incompleto_rama_derecha'])? $data['bloqueo_incompleto_rama_derecha']:0,
             'bloqueo_completo_rama_derecha'=>isset($data['bloqueo_completo_rama_derecha'])? $data['bloqueo_completo_rama_derecha']:0,
             'hemibloqueo_anterior_izquierdo'=>isset($data['hemibloqueo_anterior_izquierdo'])? $data['hemibloqueo_anterior_izquierdo']:0,
             'hemibloqueo_posterior_izquierdo'=>isset($data['hemibloqueo_posterior_izquierdo'])? $data['hemibloqueo_posterior_izquierdo']:0,
             'bloqueo_primer_grado'=>isset($data['bloqueo_primer_grado'])? $data['bloqueo_primer_grado']:0,
             'bloqueo_segundo_grado'=>isset($data['bloqueo_segundo_grado'])? $data['bloqueo_segundo_grado']:0,
             'bloqueo_completo'=>isset($data['bloqueo_completo'])? $data['bloqueo_completo']:0,
             'hipertrofia_ventricular_izquierda'=>isset($data['hipertrofia_ventricular_izquierda'])? $data['hipertrofia_ventricular_izquierda']:0,
             'electrocardiograma_pendiente'=>isset($data['electrocardiograma_pendiente'])? $data['electrocardiograma_pendiente']:0,
             'repetir_electrocardiograma'=>isset($data['repetir_electrocardiograma'])? $data['repetir_electrocardiograma']:0,
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
     * @param  \App\DiagnosticoElectrocardiograma  $diagnosticoElectrocardiograma
     * @return \Illuminate\Http\Response
     */
    public function show(DiagnosticoElectrocardiograma $diagnosticoElectrocardiograma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DiagnosticoElectrocardiograma  $diagnosticoElectrocardiograma
     * @return \Illuminate\Http\Response
     */
    public function edit(DiagnosticoElectrocardiograma $diagnosticoElectrocardiograma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DiagnosticoElectrocardiograma  $diagnosticoElectrocardiograma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $diagnosticoElectrocardiograma = DiagnosticoElectrocardiograma::find($request['diagnosticoelectrocardiograma_id']);
        if(request()->ajax())
        {
            $data = request()->validate([
                'examenes_auxiliares'=>'nullable',
                'observaciones'=>'nullable',
                'diagnosticos_cie10_medico'=>'nullable',
                'concluciones'=>'nullable',
                'recomendaciones'=>'nullable',
                'electrocardiograma_normal'=>'nullable',
                'electrocardiograma_sin_patologico'=>'nullable',
                'electrocardiograma_probable_patologico'=>'nullable',
                'bradicardia'=>'nullable',
                'bloqueo_incompleto_rama_derecha'=>'nullable',
                'bloqueo_completo_rama_derecha'=>'nullable',
                'hemibloqueo_anterior_izquierdo'=>'nullable',
                'hemibloqueo_posterior_izquierdo'=>'nullable',
                'bloqueo_primer_grado'=>'nullable',
                'bloqueo_segundo_grado'=>'nullable',
                'bloqueo_completo'=>'nullable',
                'hipertrofia_ventricular_izquierda'=>'nullable',
                'electrocardiograma_pendiente'=>'nullable',
                'repetir_electrocardiograma'=>'nullable',
                'lista_examen_id'=>'nullable',
                'cita_id'=>'nullable'
            ]);

            $diagnosticoElectrocardiograma->update([
              'examenes_auxiliares'=>isset($data['examenes_auxiliares'])? $data['examenes_auxiliares']:null,
              'observaciones'=>isset($data['observaciones'])? $data['observaciones']:null,
              'diagnosticos_cie10_medico'=>isset($data['diagnosticos_cie10_medico'])? $data['diagnosticos_cie10_medico']:null,
              'concluciones'=>isset($data['concluciones'])? $data['concluciones']:null,
              'recomendaciones'=>isset($data['recomendaciones'])? $data['recomendaciones']:null,
               'electrocardiograma_normal'=>isset($data['electrocardiograma_normal'])? $data['electrocardiograma_normal']:0,
               'electrocardiograma_sin_patologico'=>isset($data['electrocardiograma_sin_patologico'])? $data['electrocardiograma_sin_patologico']:0,
               'electrocardiograma_probable_patologico'=>isset($data['electrocardiograma_probable_patologico'])? $data['electrocardiograma_probable_patologico']:0,
               'bradicardia'=>isset($data['bradicardia'])? $data['bradicardia']:0,
               'bloqueo_incompleto_rama_derecha'=>isset($data['bloqueo_incompleto_rama_derecha'])? $data['bloqueo_incompleto_rama_derecha']:0,
               'bloqueo_completo_rama_derecha'=>isset($data['bloqueo_completo_rama_derecha'])? $data['bloqueo_completo_rama_derecha']:0,
               'hemibloqueo_anterior_izquierdo'=>isset($data['hemibloqueo_anterior_izquierdo'])? $data['hemibloqueo_anterior_izquierdo']:0,
               'hemibloqueo_posterior_izquierdo'=>isset($data['hemibloqueo_posterior_izquierdo'])? $data['hemibloqueo_posterior_izquierdo']:0,
               'bloqueo_primer_grado'=>isset($data['bloqueo_primer_grado'])? $data['bloqueo_primer_grado']:0,
               'bloqueo_segundo_grado'=>isset($data['bloqueo_segundo_grado'])? $data['bloqueo_segundo_grado']:0,
               'bloqueo_completo'=>isset($data['bloqueo_completo'])? $data['bloqueo_completo']:0,
               'hipertrofia_ventricular_izquierda'=>isset($data['hipertrofia_ventricular_izquierda'])? $data['hipertrofia_ventricular_izquierda']:0,
               'electrocardiograma_pendiente'=>isset($data['electrocardiograma_pendiente'])? $data['electrocardiograma_pendiente']:0,
               'repetir_electrocardiograma'=>isset($data['repetir_electrocardiograma'])? $data['repetir_electrocardiograma']:0
            ]);
            $diagnosticoElectrocardiograma->save();
            return response()->json(['mensaje' =>"registro diagnostico actualizado"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DiagnosticoElectrocardiograma  $diagnosticoElectrocardiograma
     * @return \Illuminate\Http\Response
     */
    public function destroy(DiagnosticoElectrocardiograma $diagnosticoElectrocardiograma)
    {
        //
    }
}
