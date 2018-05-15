<?php

namespace App\Http\Controllers;

use App\Antper_Hozpitalizaciones;
use Illuminate\Http\Request;
use Carbon\Carbon;
class AntperHozpitalizacionesController extends Controller
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
          $data=request()->validate([
            'paciente_id'=>'required',
            'hospitalizacion_descripcion'=>'required',
            'hospitalizacion_anio'=>'required',
            'hos_id'=>'nullable'
          ]);
          $antecedentesHospitalizacion=Antper_Hozpitalizaciones::create([
            'motivo'=>isset($data['hospitalizacion_descripcion'])?$data['hospitalizacion_descripcion']:null,
            'anio'=>isset($data['hospitalizacion_anio'])?$data['hospitalizacion_anio']:null,
            'fecha_registro'=>Carbon::now(),
            'paciente_id'=>$data['paciente_id'],
            'estado'=>true
          ]);
              return response()->json(['mensaje'=>"Registro exitoso"]);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Antper_Hozpitalizaciones  $antper_Hozpitalizaciones
     * @return \Illuminate\Http\Response
     */
    public function show(Antper_Hozpitalizaciones $antper_Hozpitalizaciones)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Antper_Hozpitalizaciones  $antper_Hozpitalizaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Antper_Hozpitalizaciones $antper_Hozpitalizaciones)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Antper_Hozpitalizaciones  $antper_Hozpitalizaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
  $antecedentesHospitalizacion=Antper_Hozpitalizaciones::find($request['hos_id']);
      if(request()->ajax())
      {
          $data=request()->validate([
            'hos_id'=>'required'
          ]);
          $antecedentesHospitalizacion->update([
                      'estado'=>false
          ]);
//              $request['hos_id']
        return response()->json(['mensaje'=>'Registro Eliminado']);
      }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Antper_Hozpitalizaciones  $antper_Hozpitalizaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Antper_Hozpitalizaciones $antper_Hozpitalizaciones)
    {
        //
    }
}
