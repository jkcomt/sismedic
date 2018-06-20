<?php

namespace App\Http\Controllers;

use App\DiagnosticoVista;
use Illuminate\Http\Request;
use Carbon\Carbon;
class DiagnosticoVistaController extends Controller
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
              'vision_emetrope'=>'nullable',
              'ametropia_corregida'=>'nullable',
              'ametropia_no_corregida'=>'nullable',
              'ambliopia_suficiente'=>'nullable',
              'ambliopia_insuficiente'=>'nullable',
              'discromatopsia'=>'nullable',
              'vision_estereooptica'=>'nullable',
              'vision_nocturna'=>'nullable',//
              'recuperacion_al_encadilamiento'=>'nullable',
              'foria_alterada'=>'nullable',
              'campo_visual_alterado'=>'nullable',
              'pendiente_examen_oftalmologico'=>'nullable',//
              'repetir_examen_oftalmologico'=>'nullable',//
              'lista_examen_id'=>'nullable',
              'cita_id'=>'nullable'
          ]);

          $diagnosticoVista = DiagnosticoVista::create([
             'examenes_auxiliares'=>isset($data['examenes_auxiliares'])? $data['examenes_auxiliares']:null,
             'observaciones'=>isset($data['observaciones'])? $data['observaciones']:null,
             'diagnosticos_cie10_medico'=>isset($data['diagnosticos_cie10_medico'])? $data['diagnosticos_cie10_medico']:null,
             'concluciones'=>isset($data['concluciones'])? $data['concluciones']:null,
             'recomendaciones'=>isset($data['recomendaciones'])? $data['recomendaciones']:null,
             'vision_emetrope'=>isset($data['vision_emetrope'])? $data['vision_emetrope']:0,
             'ametropia_corregida'=>isset($data['ametropia_corregida'])? $data['ametropia_corregida']:0,
             'ametropia_no_corregida'=>isset($data['ametropia_no_corregida'])? $data['ametropia_no_corregida']:0,
             'ambliopia_suficiente'=>isset($data['ambliopia_suficiente'])? $data['ambliopia_suficiente']:0,
             'ambliopia_insuficiente'=>isset($data['ambliopia_insuficiente'])? $data['ambliopia_insuficiente']:0,
             'discromatopsia'=>isset($data['discromatopsia'])? $data['discromatopsia']:0,
             'vision_estereooptica'=>isset($data['vision_estereooptica'])? $data['vision_estereooptica']:0,
             'vision_nocturna'=>isset($data['vision_nocturna'])? $data['vision_nocturna']:0,
             'recuperacion_al_encadilamiento'=>isset($data['recuperacion_al_encadilamiento'])? $data['recuperacion_al_encadilamiento']:0,
             'foria_alterada'=>isset($data['foria_alterada'])? $data['foria_alterada']:0,
             'campo_visual_alterado'=>isset($data['campo_visual_alterado'])? $data['campo_visual_alterado']:0,
             'pendiente_examen_oftalmologico'=>isset($data['pendiente_examen_oftalmologico'])? $data['pendiente_examen_oftalmologico']:0,
             'repetir_examen_oftalmologico'=>isset($data['repetir_examen_oftalmologico'])? $data['repetir_examen_oftalmologico']:0,
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
     * @param  \App\DiagnosticoVista  $diagnosticoVista
     * @return \Illuminate\Http\Response
     */
    public function show(DiagnosticoVista $diagnosticoVista)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DiagnosticoVista  $diagnosticoVista
     * @return \Illuminate\Http\Response
     */
    public function edit(DiagnosticoVista $diagnosticoVista)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DiagnosticoVista  $diagnosticoVista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $diagnosticoVista = DiagnosticoVista::find($request['diagnosticovista_id']);
      if(request()->ajax())
      {
          $data = request()->validate([

              'examenes_auxiliares'=>'nullable',
              'observaciones'=>'nullable',
              'diagnosticos_cie10_medico'=>'nullable',
              'concluciones'=>'nullable',
              'recomendaciones'=>'nullable',
              'vision_emetrope'=>'nullable',
              'ametropia_corregida'=>'nullable',
              'ametropia_no_corregida'=>'nullable',
              'ambliopia_suficiente'=>'nullable',
              'ambliopia_insuficiente'=>'nullable',
              'discromatopsia'=>'nullable',
              'vision_estereooptica'=>'nullable',
              'vision_nocturna'=>'nullable',//
              'recuperacion_al_encadilamiento'=>'nullable',
              'foria_alterada'=>'nullable',
              'campo_visual_alterado'=>'nullable',
              'pendiente_examen_oftalmologico'=>'nullable',//
              'repetir_examen_oftalmologico'=>'nullable',//
              'lista_examen_id'=>'nullable',
              'cita_id'=>'nullable'
          ]);

          $diagnosticoVista->update([
             'examenes_auxiliares'=>isset($data['examenes_auxiliares'])? $data['examenes_auxiliares']:null,
             'observaciones'=>isset($data['observaciones'])? $data['observaciones']:null,
             'diagnosticos_cie10_medico'=>isset($data['diagnosticos_cie10_medico'])? $data['diagnosticos_cie10_medico']:null,
             'concluciones'=>isset($data['concluciones'])? $data['concluciones']:null,
             'recomendaciones'=>isset($data['recomendaciones'])? $data['recomendaciones']:null,
             'vision_emetrope'=>isset($data['vision_emetrope'])? $data['vision_emetrope']:0,
             'ametropia_corregida'=>isset($data['ametropia_corregida'])? $data['ametropia_corregida']:0,
             'ametropia_no_corregida'=>isset($data['ametropia_no_corregida'])? $data['ametropia_no_corregida']:0,
             'ambliopia_suficiente'=>isset($data['ambliopia_suficiente'])? $data['ambliopia_suficiente']:0,
             'ambliopia_insuficiente'=>isset($data['ambliopia_insuficiente'])? $data['ambliopia_insuficiente']:0,
             'discromatopsia'=>isset($data['discromatopsia'])? $data['discromatopsia']:0,
             'vision_estereooptica'=>isset($data['vision_estereooptica'])? $data['vision_estereooptica']:0,
             'vision_nocturna'=>isset($data['vision_nocturna'])? $data['vision_nocturna']:0,
             'recuperacion_al_encadilamiento'=>isset($data['recuperacion_al_encadilamiento'])? $data['recuperacion_al_encadilamiento']:0,
             'foria_alterada'=>isset($data['foria_alterada'])? $data['foria_alterada']:0,
             'campo_visual_alterado'=>isset($data['campo_visual_alterado'])? $data['campo_visual_alterado']:0,
             'pendiente_examen_oftalmologico'=>isset($data['pendiente_examen_oftalmologico'])? $data['pendiente_examen_oftalmologico']:0,
             'repetir_examen_oftalmologico'=>isset($data['repetir_examen_oftalmologico'])? $data['repetir_examen_oftalmologico']:0,
             'fecha_registro'=>Carbon::now(),
             'lista_examen_id'=>isset($data['lista_examen_id'])? $data['lista_examen_id']:null,
             'cita_id'=>isset($data['cita_id'])? $data['cita_id']:null,
             'estado'=>true
          ]);
          $diagnosticoVista->update();
          return response()->json(['mensaje' =>"registro diagnostico audiometria exitoso"]);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DiagnosticoVista  $diagnosticoVista
     * @return \Illuminate\Http\Response
     */
    public function destroy(DiagnosticoVista $diagnosticoVista)
    {
        //
    }
}
