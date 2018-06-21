<?php

namespace App\Http\Controllers;

use App\Espirometria;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class EspirometriaController extends Controller
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
              'grupo_etnico'=>'nullable',
              'fumador'=>'nullable',
              'calidad'=>'nullable',
              'talla'=>'nullable',
              'peso'=>'nullable',
              'result1'=>'nullable',
              'result2'=>'nullable',
              'result3'=>'nullable',
              'result4'=>'nullable',
              'result5'=>'nullable',
              'prediccion1'=>'nullable',
              'prediccion2'=>'nullable',
              'prediccion3'=>'nullable',
              'prediccion4'=>'nullable',
              'prediccion5'=>'nullable',
              'porcentaje_prediccion1'=>'nullable',
              'porcentaje_prediccion2'=>'nullable',
              'porcentaje_prediccion3'=>'nullable',
              'porcentaje_prediccion4'=>'nullable',
              'porcentaje_prediccion5'=>'nullable',
              'lista_examen_id'=>'nullable',
              'cita_id'=>'nullable',
          ]);

          $espirometria = Espirometria::create([
             'grupo_etnico'=>isset($data['grupo_etnico'])? $data['grupo_etnico']:null,
             'fumador'=>isset($data['fumador'])? $data['fumador']:null,
             'calidad'=>isset($data['calidad'])? $data['calidad']:null,
             'talla'=>isset($data['talla'])? $data['talla']:null,
             'peso'=>isset($data['peso'])? $data['peso']:null,
             'result1'=>isset($data['result1'])? $data['result1']:null,
             'result2'=>isset($data['result2'])? $data['result2']:null,
             'result3'=>isset($data['result3'])? $data['result3']:null,
             'result4'=>isset($data['result4'])? $data['result4']:null,
             'result5'=>isset($data['result5'])? $data['result5']:null,
             'prediccion1'=>isset($data['prediccion1'])? $data['prediccion1']:null,
             'prediccion2'=>isset($data['prediccion2'])? $data['prediccion2']:null,
             'prediccion3'=>isset($data['prediccion3'])? $data['prediccion3']:null,
             'prediccion4'=>isset($data['prediccion4'])? $data['prediccion4']:null,
             'prediccion5'=>isset($data['prediccion5'])? $data['prediccion5']:null,
             'porcentaje_prediccion1'=>isset($data['porcentaje_prediccion1'])? $data['porcentaje_prediccion1']:null,
             'porcentaje_prediccion2'=>isset($data['porcentaje_prediccion2'])? $data['porcentaje_prediccion2']:null,
             'porcentaje_prediccion3'=>isset($data['porcentaje_prediccion3'])? $data['porcentaje_prediccion3']:null,
             'porcentaje_prediccion4'=>isset($data['porcentaje_prediccion4'])? $data['porcentaje_prediccion4']:null,
             'porcentaje_prediccion5'=>isset($data['porcentaje_prediccion5'])? $data['porcentaje_prediccion5']:null,
             'fecha_registro'=>Carbon::now(),
             'lista_examen_id'=>isset($data['lista_examen_id'])? $data['lista_examen_id']:null,
             'cita_id'=>isset($data['cita_id'])? $data['cita_id']:null,
             'estado'=>true,
             'user_id'=>Auth::user()->id
          ]);
          return response()->json(['mensaje' =>"registro exitoso"]);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Espirometria  $espirometria
     * @return \Illuminate\Http\Response
     */
    public function show(Espirometria $espirometria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Espirometria  $espirometria
     * @return \Illuminate\Http\Response
     */
    public function edit(Espirometria $espirometria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Espirometria  $espirometria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $espirometria = Espirometria::find($request['espirometria_id']);
      if(request()->ajax())
      {
          $data = request()->validate([
              'grupo_etnico'=>'nullable',
              'fumador'=>'nullable',
              'calidad'=>'nullable',
              'talla'=>'nullable',
              'peso'=>'nullable',
              'result1'=>'nullable',
              'result2'=>'nullable',
              'result3'=>'nullable',
              'result4'=>'nullable',
              'result5'=>'nullable',
              'prediccion1'=>'nullable',
              'prediccion2'=>'nullable',
              'prediccion3'=>'nullable',
              'prediccion4'=>'nullable',
              'prediccion5'=>'nullable',
              'porcentaje_prediccion1'=>'nullable',
              'porcentaje_prediccion2'=>'nullable',
              'porcentaje_prediccion3'=>'nullable',
              'porcentaje_prediccion4'=>'nullable',
              'porcentaje_prediccion5'=>'nullable',
              'lista_examen_id'=>'nullable',
              'cita_id'=>'nullable',
          ]);

          $espirometria->update([
             'grupo_etnico'=>isset($data['grupo_etnico'])? $data['grupo_etnico']:null,
             'fumador'=>isset($data['fumador'])? $data['fumador']:null,
             'calidad'=>isset($data['calidad'])? $data['calidad']:null,
             'talla'=>isset($data['talla'])? $data['talla']:null,
             'peso'=>isset($data['peso'])? $data['peso']:null,
             'result1'=>isset($data['result1'])? $data['result1']:null,
             'result2'=>isset($data['result2'])? $data['result2']:null,
             'result3'=>isset($data['result3'])? $data['result3']:null,
             'result4'=>isset($data['result4'])? $data['result4']:null,
             'result5'=>isset($data['result5'])? $data['result5']:null,
             'prediccion1'=>isset($data['prediccion1'])? $data['prediccion1']:null,
             'prediccion2'=>isset($data['prediccion2'])? $data['prediccion2']:null,
             'prediccion3'=>isset($data['prediccion3'])? $data['prediccion3']:null,
             'prediccion4'=>isset($data['prediccion4'])? $data['prediccion4']:null,
             'prediccion5'=>isset($data['prediccion5'])? $data['prediccion5']:null,
             'porcentaje_prediccion1'=>isset($data['porcentaje_prediccion1'])? $data['porcentaje_prediccion1']:null,
             'porcentaje_prediccion2'=>isset($data['porcentaje_prediccion2'])? $data['porcentaje_prediccion2']:null,
             'porcentaje_prediccion3'=>isset($data['porcentaje_prediccion3'])? $data['porcentaje_prediccion3']:null,
             'porcentaje_prediccion4'=>isset($data['porcentaje_prediccion4'])? $data['porcentaje_prediccion4']:null,
             'porcentaje_prediccion5'=>isset($data['porcentaje_prediccion5'])? $data['porcentaje_prediccion5']:null,
          ]);
          $espirometria->save();
          return response()->json(['mensaje' =>"registro exitoso"]);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Espirometria  $espirometria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Espirometria $espirometria)
    {
        //
    }
}
