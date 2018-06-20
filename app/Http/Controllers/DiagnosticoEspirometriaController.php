<?php

namespace App\Http\Controllers;

use App\DiagnosticoEspirometria;
use Illuminate\Http\Request;
use Carbon\Carbon;
class DiagnosticoEspirometriaController extends Controller
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
              'espirometria_normal'=>'nullable',
              'patron_obstructivo_estacionario'=>'nullable',
              'patron_obstructivo_cambio'=>'nullable',
              'patron_restrictivo_estacionario'=>'nullable',
              'patron_restrictivo_cambio'=>'nullable',
              'patron_mixto_estacionario'=>'nullable',
              'patron_mixto_cambio'=>'nullable',
              'espirometria_pendiente'=>'nullable',
              'repetir_espirometria'=>'nullable',
              'espirometria_normal_cambio_significativo'=>'nullable',
              'patron_espirometrico_posible_variante_normal'=>'nullable',
              'patron_obstructivo_leve'=>'nullable',
              'patron_obstructivo_moderado'=>'nullable',
              'patron_obstructivo_moderado_grave'=>'nullable',
              'patron_obstructivo_grave'=>'nullable',
              'patron_obstructivo_posible_variante_normal'=>'nullable',
              'lista_examen_id'=>'nullable',
              'cita_id'=>'nullable',
          ]);

          $diagnosticoEspirometria = DiagnosticoEspirometria::create([
             'examenes_auxiliares'=>isset($data['examenes_auxiliares'])? $data['examenes_auxiliares']:null,
             'observaciones'=>isset($data['observaciones'])? $data['observaciones']:null,
             'diagnosticos_cie10_medico'=>isset($data['diagnosticos_cie10_medico'])? $data['diagnosticos_cie10_medico']:null,
             'concluciones'=>isset($data['concluciones'])? $data['concluciones']:null,
             'recomendaciones'=>isset($data['recomendaciones'])? $data['recomendaciones']:null,
             'espirometria_normal'=>isset($data['espirometria_normal'])? $data['espirometria_normal']:0,
             'patron_obstructivo_estacionario'=>isset($data['patron_obstructivo_estacionario'])? $data['patron_obstructivo_estacionario']:0,
             'patron_obstructivo_cambio'=>isset($data['patron_obstructivo_cambio'])? $data['patron_obstructivo_cambio']:0,
             'patron_restrictivo_estacionario'=>isset($data['patron_restrictivo_estacionario'])? $data['patron_restrictivo_estacionario']:0,
             'patron_restrictivo_cambio'=>isset($data['patron_restrictivo_cambio'])? $data['patron_restrictivo_cambio']:0,
             'patron_mixto_estacionario'=>isset($data['patron_mixto_estacionario'])? $data['patron_mixto_estacionario']:0,
             'patron_mixto_cambio'=>isset($data['patron_mixto_cambio'])? $data['patron_mixto_cambio']:0,
             'espirometria_pendiente'=>isset($data['espirometria_pendiente'])? $data['espirometria_pendiente']:0,
             'repetir_espirometria'=>isset($data['repetir_espirometria'])? $data['repetir_espirometria']:0,
             'espirometria_normal_cambio_significativo'=>isset($data['espirometria_normal_cambio_significativo'])? $data['espirometria_normal_cambio_significativo']:0,
             'patron_espirometrico_posible_variante_normal'=>isset($data['patron_espirometrico_posible_variante_normal'])? $data['patron_espirometrico_posible_variante_normal']:0,
             'patron_obstructivo_leve'=>isset($data['patron_obstructivo_leve'])? $data['patron_obstructivo_leve']:0,
             'patron_obstructivo_moderado'=>isset($data['patron_obstructivo_moderado'])? $data['patron_obstructivo_moderado']:0,
             'patron_obstructivo_moderado_grave'=>isset($data['patron_obstructivo_moderado_grave'])? $data['patron_obstructivo_moderado_grave']:0,
             'patron_obstructivo_grave'=>isset($data['patron_obstructivo_grave'])? $data['patron_obstructivo_grave']:0,
             'patron_obstructivo_posible_variante_normal'=>isset($data['patron_obstructivo_posible_variante_normal'])? $data['patron_obstructivo_posible_variante_normal']:0,
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
     * @param  \App\DiagnosticoEspirometria  $diagnosticoEspirometria
     * @return \Illuminate\Http\Response
     */
    public function show(DiagnosticoEspirometria $diagnosticoEspirometria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DiagnosticoEspirometria  $diagnosticoEspirometria
     * @return \Illuminate\Http\Response
     */
    public function edit(DiagnosticoEspirometria $diagnosticoEspirometria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DiagnosticoEspirometria  $diagnosticoEspirometria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $diagnosticoEspirometria = DiagnosticoEspirometria::find($request['diagnosticoespirometria_id']);
      if(request()->ajax())
      {
          $data = request()->validate([
              'examenes_auxiliares'=>'nullable',
              'observaciones'=>'nullable',
              'diagnosticos_cie10_medico'=>'nullable',
              'concluciones'=>'nullable',
              'recomendaciones'=>'nullable',
              'espirometria_normal'=>'nullable',
              'patron_obstructivo_estacionario'=>'nullable',
              'patron_obstructivo_cambio'=>'nullable',
              'patron_restrictivo_estacionario'=>'nullable',
              'patron_restrictivo_cambio'=>'nullable',
              'patron_mixto_estacionario'=>'nullable',
              'patron_mixto_cambio'=>'nullable',
              'espirometria_pendiente'=>'nullable',
              'repetir_espirometria'=>'nullable',
              'espirometria_normal_cambio_significativo'=>'nullable',
              'patron_espirometrico_posible_variante_normal'=>'nullable',
              'patron_obstructivo_leve'=>'nullable',
              'patron_obstructivo_moderado'=>'nullable',
              'patron_obstructivo_moderado_grave'=>'nullable',
              'patron_obstructivo_grave'=>'nullable',
              'patron_obstructivo_posible_variante_normal'=>'nullable',
              'lista_examen_id'=>'nullable',
              'cita_id'=>'nullable',
          ]);

          $diagnosticoEspirometria->update([
             'examenes_auxiliares'=>isset($data['examenes_auxiliares'])? $data['examenes_auxiliares']:null,
             'observaciones'=>isset($data['observaciones'])? $data['observaciones']:null,
             'diagnosticos_cie10_medico'=>isset($data['diagnosticos_cie10_medico'])? $data['diagnosticos_cie10_medico']:null,
             'concluciones'=>isset($data['concluciones'])? $data['concluciones']:null,
             'recomendaciones'=>isset($data['recomendaciones'])? $data['recomendaciones']:null,
             'espirometria_normal'=>isset($data['espirometria_normal'])? $data['espirometria_normal']:0,
             'patron_obstructivo_estacionario'=>isset($data['patron_obstructivo_estacionario'])? $data['patron_obstructivo_estacionario']:0,
             'patron_obstructivo_cambio'=>isset($data['patron_obstructivo_cambio'])? $data['patron_obstructivo_cambio']:0,
             'patron_restrictivo_estacionario'=>isset($data['patron_restrictivo_estacionario'])? $data['patron_restrictivo_estacionario']:0,
             'patron_restrictivo_cambio'=>isset($data['patron_restrictivo_cambio'])? $data['patron_restrictivo_cambio']:0,
             'patron_mixto_estacionario'=>isset($data['patron_mixto_estacionario'])? $data['patron_mixto_estacionario']:0,
             'patron_mixto_cambio'=>isset($data['patron_mixto_cambio'])? $data['patron_mixto_cambio']:0,
             'espirometria_pendiente'=>isset($data['espirometria_pendiente'])? $data['espirometria_pendiente']:0,
             'repetir_espirometria'=>isset($data['repetir_espirometria'])? $data['repetir_espirometria']:0,
             'espirometria_normal_cambio_significativo'=>isset($data['espirometria_normal_cambio_significativo'])? $data['espirometria_normal_cambio_significativo']:0,
             'patron_espirometrico_posible_variante_normal'=>isset($data['patron_espirometrico_posible_variante_normal'])? $data['patron_espirometrico_posible_variante_normal']:0,
             'patron_obstructivo_leve'=>isset($data['patron_obstructivo_leve'])? $data['patron_obstructivo_leve']:0,
             'patron_obstructivo_moderado'=>isset($data['patron_obstructivo_moderado'])? $data['patron_obstructivo_moderado']:0,
             'patron_obstructivo_moderado_grave'=>isset($data['patron_obstructivo_moderado_grave'])? $data['patron_obstructivo_moderado_grave']:0,
             'patron_obstructivo_grave'=>isset($data['patron_obstructivo_grave'])? $data['patron_obstructivo_grave']:0,
             'patron_obstructivo_posible_variante_normal'=>isset($data['patron_obstructivo_posible_variante_normal'])? $data['patron_obstructivo_posible_variante_normal']:0,
             'fecha_registro'=>Carbon::now(),
          ]);
          $diagnosticoEspirometria->save();
          return response()->json(['mensaje' =>"registro diagnostico audiometria exitoso"]);
      }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DiagnosticoEspirometria  $diagnosticoEspirometria
     * @return \Illuminate\Http\Response
     */
    public function destroy(DiagnosticoEspirometria $diagnosticoEspirometria)
    {
        //
    }
}
