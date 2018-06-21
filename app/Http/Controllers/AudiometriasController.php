<?php

namespace App\Http\Controllers;

use App\Audiometrias;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Cita;
use View;
class AudiometriasController extends Controller
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
              'acufenos'=>'nullable',
              'vertigo'=>'nullable',
              'hipoacusia'=>'nullable',
              'otalgia'=>'nullable',
              'exposicion_ruido'=>'nullable',
              'enfermedad_respiratorio'=>'nullable',
              'antecedente_viaje'=>'nullable',
              'otros_sintomatologia_actual'=>'nullable',
              'nariz'=>'nullable',
              'garganta'=>'nullable',
              'oido'=>'nullable',
              'otoscopia_od'=>'nullable',
              'otoscopia_oi'=>'nullable',
              'otros_orl'=>'nullable',
              'marca'=>'nullable',
              'modelo'=>'nullable',
              'calibracion'=>'nullable',
              'personales_id'=>'nullable',
              'od_va1'=>'nullable',
              'od_va2'=>'nullable',
              'od_va3'=>'nullable',
              'od_va4'=>'nullable',
              'od_va5'=>'nullable',
              'od_va6'=>'nullable',
              'od_va7'=>'nullable',
              'od_va8'=>'nullable',
              'od_va9'=>'nullable',
              'od_vo1'=>'nullable',
              'od_vo2'=>'nullable',
              'od_vo3'=>'nullable',
              'od_vo4'=>'nullable',
              'od_vo5'=>'nullable',
              'od_vo6'=>'nullable',
              'od_vo7'=>'nullable',
              'od_vo8'=>'nullable',
              'od_vo9'=>'nullable',
              'oi_va1'=>'nullable',
              'oi_va2'=>'nullable',
              'oi_va3'=>'nullable',
              'oi_va4'=>'nullable',
              'oi_va5'=>'nullable',
              'oi_va6'=>'nullable',
              'oi_va7'=>'nullable',
              'oi_va8'=>'nullable',
              'oi_va9'=>'nullable',
              'oi_vo1'=>'nullable',
              'oi_vo2'=>'nullable',
              'oi_vo3'=>'nullable',
              'oi_vo4'=>'nullable',
              'oi_vo5'=>'nullable',
              'oi_vo6'=>'nullable',
              'oi_vo7'=>'nullable',
              'oi_vo8'=>'nullable',
              'oi_vo9'=>'nullable',
              'lista_examen_id'=>'nullable',
              'cita_id'=>'nullable',
              'grafico_derecho'=>'nullable',
              'grafico_izquierdo'=>'nullable',
          ]);

          $audiometrias = Audiometrias::create([
            'acufenos'=>isset($data['acufenos'])? $data['acufenos']:0,
            'vertigo'=>isset($data['vertigo'])? $data['vertigo']:0,
            'hipoacusia'=>isset($data['hipoacusia'])? $data['hipoacusia']:0,
            'otalgia'=>isset($data['otalgia'])? $data['otalgia']:0,
            'exposicion_ruido'=>isset($data['exposicion_ruido'])? $data['exposicion_ruido']:0,
            'enfermedad_respiratorio'=>isset($data['enfermedad_respiratorio'])? $data['enfermedad_respiratorio']:0,
            'antecedente_viaje'=>isset($data['antecedente_viaje'])? $data['antecedente_viaje']:0,
            'otros_sintomatologia_actual_estado'=>isset($data['otros_sintomatologia_actual_estado'])? $data['otros_sintomatologia_actual_estado']:0,
            'otros_sintomatologia_actual'=>isset($data['otros_sintomatologia_actual'])? $data['otros_sintomatologia_actual']:null,
            'nariz'=>isset($data['nariz'])? $data['nariz']:null,
            'garganta'=>isset($data['garganta'])? $data['garganta']:null,
            'oido'=>isset($data['oido'])? $data['oido']:null,
            'otoscopia_od'=>isset($data['otoscopia_od'])? $data['otoscopia_od']:null,
            'otoscopia_oi'=>isset($data['otoscopia_oi'])? $data['otoscopia_oi']:null,
            'otros_orl'=>isset($data['otros_orl'])? $data['otros_orl']:null,
            'marca'=>isset($data['marca'])? $data['marca']:null,
            'modelo'=>isset($data['modelo'])? $data['modelo']:null,
            'calibracion'=>isset($data['calibracion'])? $data['calibracion']:null,
            'personales_id'=>isset($data['personales_id'])? $data['personales_id']:null,
            'od_va1'=>isset($data['od_va1'])? $data['od_va1']:null,
            'od_va2'=>isset($data['od_va2'])? $data['od_va2']:null,
            'od_va3'=>isset($data['od_va3'])? $data['od_va3']:null,
            'od_va4'=>isset($data['od_va4'])? $data['od_va4']:null,
            'od_va5'=>isset($data['od_va5'])? $data['od_va5']:null,
            'od_va6'=>isset($data['od_va6'])? $data['od_va6']:null,
            'od_va7'=>isset($data['od_va7'])? $data['od_va7']:null,
            'od_va8'=>isset($data['od_va8'])? $data['od_va8']:null,
            'od_va9'=>isset($data['od_va9'])? $data['od_va9']:null,
            'od_vo1'=>isset($data['od_vo1'])? $data['od_vo1']:null,
            'od_vo2'=>isset($data['od_vo2'])? $data['od_vo2']:null,
            'od_vo3'=>isset($data['od_vo3'])? $data['od_vo3']:null,
            'od_vo4'=>isset($data['od_vo4'])? $data['od_vo4']:null,
            'od_vo5'=>isset($data['od_vo5'])? $data['od_vo5']:null,
            'od_vo6'=>isset($data['od_vo6'])? $data['od_vo6']:null,
            'od_vo7'=>isset($data['od_vo7'])? $data['od_vo7']:null,
            'od_vo8'=>isset($data['od_vo8'])? $data['od_vo8']:null,
            'od_vo9'=>isset($data['od_vo9'])? $data['od_vo9']:null,
            'oi_va1'=>isset($data['oi_va1'])? $data['oi_va1']:null,
            'oi_va2'=>isset($data['oi_va2'])? $data['oi_va2']:null,
            'oi_va3'=>isset($data['oi_va3'])? $data['oi_va3']:null,
            'oi_va4'=>isset($data['oi_va4'])? $data['oi_va4']:null,
            'oi_va5'=>isset($data['oi_va5'])? $data['oi_va5']:null,
            'oi_va6'=>isset($data['oi_va6'])? $data['oi_va6']:null,
            'oi_va7'=>isset($data['oi_va7'])? $data['oi_va7']:null,
            'oi_va8'=>isset($data['oi_va8'])? $data['oi_va8']:null,
            'oi_va9'=>isset($data['oi_va9'])? $data['oi_va9']:null,
            'oi_vo1'=>isset($data['oi_vo1'])? $data['oi_vo1']:null,
            'oi_vo2'=>isset($data['oi_vo2'])? $data['oi_vo2']:null,
            'oi_vo3'=>isset($data['oi_vo3'])? $data['oi_vo3']:null,
            'oi_vo4'=>isset($data['oi_vo4'])? $data['oi_vo4']:null,
            'oi_vo5'=>isset($data['oi_vo5'])? $data['oi_vo5']:null,
            'oi_vo6'=>isset($data['oi_vo6'])? $data['oi_vo6']:null,
            'oi_vo7'=>isset($data['oi_vo7'])? $data['oi_vo7']:null,
            'oi_vo8'=>isset($data['oi_vo8'])? $data['oi_vo8']:null,
            'oi_vo9'=>isset($data['oi_vo9'])? $data['oi_vo9']:null,

            'grafico_derecho'=>isset($data['grafico_derecho'])? $data['grafico_derecho']:null,
            'grafico_izquierdo'=>isset($data['grafico_izquierdo'])? $data['grafico_izquierdo']:null,
           'fecha_registro'=>Carbon::now(),
           'lista_examen_id'=>isset($data['lista_examen_id'])? $data['lista_examen_id']:null,
           'cita_id'=>isset($data['cita_id'])? $data['cita_id']:null,
           'estado'=>true
          ]);
          return response()->json(['mensaje' =>"registro exitoso"]);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Audiometrias  $audiometrias
     * @return \Illuminate\Http\Response
     */
    public function show(Audiometrias $audiometrias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Audiometrias  $audiometrias
     * @return \Illuminate\Http\Response
     */
    public function edit(Audiometrias $audiometrias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Audiometrias  $audiometrias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $audiometrias = Audiometrias::find($request['aduiometria_id']);
      if(request()->ajax())
      {
          $data = request()->validate([
              'acufenos'=>'nullable',
              'vertigo'=>'nullable',
              'hipoacusia'=>'nullable',
              'otalgia'=>'nullable',
              'exposicion_ruido'=>'nullable',
              'enfermedad_respiratorio'=>'nullable',
              'antecedente_viaje'=>'nullable',
              'otros_sintomatologia_actual'=>'nullable',
              'nariz'=>'nullable',
              'garganta'=>'nullable',
              'oido'=>'nullable',
              'otoscopia_od'=>'nullable',
              'otoscopia_oi'=>'nullable',
              'otros_orl'=>'nullable',
              'marca'=>'nullable',
              'modelo'=>'nullable',
              'calibracion'=>'nullable',
              'personales_id'=>'nullable',
              'od_va1'=>'nullable',
              'od_va2'=>'nullable',
              'od_va3'=>'nullable',
              'od_va4'=>'nullable',
              'od_va5'=>'nullable',
              'od_va6'=>'nullable',
              'od_va7'=>'nullable',
              'od_va8'=>'nullable',
              'od_va9'=>'nullable',
              'od_vo1'=>'nullable',
              'od_vo2'=>'nullable',
              'od_vo3'=>'nullable',
              'od_vo4'=>'nullable',
              'od_vo5'=>'nullable',
              'od_vo6'=>'nullable',
              'od_vo7'=>'nullable',
              'od_vo8'=>'nullable',
              'od_vo9'=>'nullable',
              'oi_va1'=>'nullable',
              'oi_va2'=>'nullable',
              'oi_va3'=>'nullable',
              'oi_va4'=>'nullable',
              'oi_va5'=>'nullable',
              'oi_va6'=>'nullable',
              'oi_va7'=>'nullable',
              'oi_va8'=>'nullable',
              'oi_va9'=>'nullable',
              'oi_vo1'=>'nullable',
              'oi_vo2'=>'nullable',
              'oi_vo3'=>'nullable',
              'oi_vo4'=>'nullable',
              'oi_vo5'=>'nullable',
              'oi_vo6'=>'nullable',
              'oi_vo7'=>'nullable',
              'oi_vo8'=>'nullable',
              'oi_vo9'=>'nullable',
              'grafico_derecho'=>'nullable',
              'grafico_izquierdo'=>'nullable',
              'lista_examen_id'=>'nullable',
              'cita_id'=>'nullable'
          ]);

          $audiometrias->update([
            'acufenos'=>isset($data['acufenos'])? $data['acufenos']:0,
            'vertigo'=>isset($data['vertigo'])? $data['vertigo']:0,
            'hipoacusia'=>isset($data['hipoacusia'])? $data['hipoacusia']:0,
            'otalgia'=>isset($data['otalgia'])? $data['otalgia']:0,
            'exposicion_ruido'=>isset($data['exposicion_ruido'])? $data['exposicion_ruido']:0,
            'enfermedad_respiratorio'=>isset($data['enfermedad_respiratorio'])? $data['enfermedad_respiratorio']:0,
            'antecedente_viaje'=>isset($data['antecedente_viaje'])? $data['antecedente_viaje']:0,
            'otros_sintomatologia_actual_estado'=>isset($data['otros_sintomatologia_actual_estado'])? $data['otros_sintomatologia_actual_estado']:0,
            'otros_sintomatologia_actual'=>isset($data['otros_sintomatologia_actual'])? $data['otros_sintomatologia_actual']:null,
            'nariz'=>isset($data['nariz'])? $data['nariz']:null,
            'garganta'=>isset($data['garganta'])? $data['garganta']:null,
            'oido'=>isset($data['oido'])? $data['oido']:null,
            'otoscopia_od'=>isset($data['otoscopia_od'])? $data['otoscopia_od']:null,
            'otoscopia_oi'=>isset($data['otoscopia_oi'])? $data['otoscopia_oi']:null,
            'otros_orl'=>isset($data['otros_orl'])? $data['otros_orl']:null,
            'marca'=>isset($data['marca'])? $data['marca']:null,
            'modelo'=>isset($data['modelo'])? $data['modelo']:null,
            'calibracion'=>isset($data['calibracion'])? $data['calibracion']:null,
            'personales_id'=>isset($data['personales_id'])? $data['personales_id']:null,
            'od_va1'=>isset($data['od_va1'])? $data['od_va1']:null,
            'od_va2'=>isset($data['od_va2'])? $data['od_va2']:null,
            'od_va3'=>isset($data['od_va3'])? $data['od_va3']:null,
            'od_va4'=>isset($data['od_va4'])? $data['od_va4']:null,
            'od_va5'=>isset($data['od_va5'])? $data['od_va5']:null,
            'od_va6'=>isset($data['od_va6'])? $data['od_va6']:null,
            'od_va7'=>isset($data['od_va7'])? $data['od_va7']:null,
            'od_va8'=>isset($data['od_va8'])? $data['od_va8']:null,
            'od_va9'=>isset($data['od_va9'])? $data['od_va9']:null,
            'od_vo1'=>isset($data['od_vo1'])? $data['od_vo1']:null,
            'od_vo2'=>isset($data['od_vo2'])? $data['od_vo2']:null,
            'od_vo3'=>isset($data['od_vo3'])? $data['od_vo3']:null,
            'od_vo4'=>isset($data['od_vo4'])? $data['od_vo4']:null,
            'od_vo5'=>isset($data['od_vo5'])? $data['od_vo5']:null,
            'od_vo6'=>isset($data['od_vo6'])? $data['od_vo6']:null,
            'od_vo7'=>isset($data['od_vo7'])? $data['od_vo7']:null,
            'od_vo8'=>isset($data['od_vo8'])? $data['od_vo8']:null,
            'od_vo9'=>isset($data['od_vo9'])? $data['od_vo9']:null,
            'oi_va1'=>isset($data['oi_va1'])? $data['oi_va1']:null,
            'oi_va2'=>isset($data['oi_va2'])? $data['oi_va2']:null,
            'oi_va3'=>isset($data['oi_va3'])? $data['oi_va3']:null,
            'oi_va4'=>isset($data['oi_va4'])? $data['oi_va4']:null,
            'oi_va5'=>isset($data['oi_va5'])? $data['oi_va5']:null,
            'oi_va6'=>isset($data['oi_va6'])? $data['oi_va6']:null,
            'oi_va7'=>isset($data['oi_va7'])? $data['oi_va7']:null,
            'oi_va8'=>isset($data['oi_va8'])? $data['oi_va8']:null,
            'oi_va9'=>isset($data['oi_va9'])? $data['oi_va9']:null,
            'oi_vo1'=>isset($data['oi_vo1'])? $data['oi_vo1']:null,
            'oi_vo2'=>isset($data['oi_vo2'])? $data['oi_vo2']:null,
            'oi_vo3'=>isset($data['oi_vo3'])? $data['oi_vo3']:null,
            'oi_vo4'=>isset($data['oi_vo4'])? $data['oi_vo4']:null,
            'oi_vo5'=>isset($data['oi_vo5'])? $data['oi_vo5']:null,
            'oi_vo6'=>isset($data['oi_vo6'])? $data['oi_vo6']:null,
            'oi_vo7'=>isset($data['oi_vo7'])? $data['oi_vo7']:null,
            'oi_vo8'=>isset($data['oi_vo8'])? $data['oi_vo8']:null,
            'oi_vo9'=>isset($data['oi_vo9'])? $data['oi_vo9']:null,
            'grafico_derecho'=>isset($data['grafico_derecho'])? $data['grafico_derecho']:null,
            'grafico_izquierdo'=>isset($data['grafico_izquierdo'])? $data['grafico_izquierdo']:null,
          ]);

          $audiometrias->save();
          return response()->json(['mensaje' =>"registro Actualizado"]);
      }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Audiometrias  $audiometrias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Audiometrias $audiometrias)
    {
        //
    }

    public function reporteaudiometria($id)
    {
      $cita=Cita::find($id);
      $view=View::make('evaluacionmedica.reportes.audiometria',compact('cita'));
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      $pdf->stream($view);
      return $pdf->stream();
    }
}
