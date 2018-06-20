<?php

namespace App\Http\Controllers;

use App\Concluciones;
use Illuminate\Http\Request;
use Carbon\Carbon;
class ConclucionesController extends Controller
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
              'diagnosticos_medicos'=>'nullable',
              'diagnosticos_examenes_medicos'=>'nullable',
              'recomendaciones'=>'nullable',
              'observacion_interconsulta'=>'nullable',
              'rc10_anios'=>'nullable',
              'aptitud_larabal'=>'nullable',
              'vencimiento_laboral'=>'nullable',
              'fecha_registro'=>'nullable',
              'paciente_id'=>'nullable',
          ]);

          $concluciones = Concluciones::create([
            'diagnosticos_medicos'=>isset($data['diagnosticos_medicos'])? $data['diagnosticos_medicos']:null,
             'diagnosticos_examenes_medicos'=>isset($data['diagnosticos_examenes_medicos'])? $data['diagnosticos_examenes_medicos']:null,
            'recomendaciones'=>isset($data['recomendaciones'])? $data['recomendaciones']:null,
             'observacion_interconsulta'=>isset($data['observacion_interconsulta'])? $data['observacion_interconsulta']:null,
             'rc10_anios'=>isset($data['rc10_anios'])? $data['rc10_anios']:null,
             'aptitud_larabal'=>isset($data['aptitud_larabal'])? $data['aptitud_larabal']:null,
             'vencimiento_laboral'=>isset($data['vencimiento_laboral'])? $data['vencimiento_laboral']:null,
             'fecha_registro'=>Carbon::now(),
             'paciente_id'=>isset($data['paciente_id'])? $data['paciente_id']:null,
          ]);
          return response()->json(['mensaje' =>"registro exitoso"]);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Concluciones  $concluciones
     * @return \Illuminate\Http\Response
     */
    public function show(Concluciones $concluciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Concluciones  $concluciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Concluciones $concluciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Concluciones  $concluciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $concluciones = Concluciones::find($request['conclusiones_id']);
      if(request()->ajax())
      {
          $data = request()->validate([
              'diagnosticos_medicos'=>'nullable',
              'diagnosticos_examenes_medicos'=>'nullable',
              'recomendaciones'=>'nullable',
              'observacion_interconsulta'=>'nullable',
              'rc10_anios'=>'nullable',
              'aptitud_larabal'=>'nullable',
              'vencimiento_laboral'=>'nullable',
              'fecha_registro'=>'nullable',
              'paciente_id'=>'nullable',
          ]);
          $concluciones->update([
            'diagnosticos_medicos'=>isset($data['diagnosticos_medicos'])? $data['diagnosticos_medicos']:null,
             'diagnosticos_examenes_medicos'=>isset($data['diagnosticos_examenes_medicos'])? $data['diagnosticos_examenes_medicos']:null,
            'recomendaciones'=>isset($data['recomendaciones'])? $data['recomendaciones']:null,
             'observacion_interconsulta'=>isset($data['observacion_interconsulta'])? $data['observacion_interconsulta']:null,
             'rc10_anios'=>isset($data['rc10_anios'])? $data['rc10_anios']:null,
             'aptitud_larabal'=>isset($data['aptitud_larabal'])? $data['aptitud_larabal']:null,
             'vencimiento_laboral'=>isset($data['vencimiento_laboral'])? $data['vencimiento_laboral']:null,
          ]);
          $concluciones->update();
          return response()->json(['mensaje' =>"registro exitoso"]);
      }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Concluciones  $concluciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Concluciones $concluciones)
    {
        //
    }
}
