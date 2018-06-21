<?php

namespace App\Http\Controllers;

use App\EvaluacionConduccionVehiculos;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Cita;
use View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class EvaluacionConduccionVehiculosController extends Controller
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
            'estado_evaluacion'=>'nullable',
            'anamnesis_evaluacion_capacidades1'=>'nullable',
            'anamnesis_evaluacion_capacidades2'=>'nullable',
            'anamnesis_evaluacion_capacidades3'=>'nullable',
            'anamnesis_evaluacion_capacidades4'=>'nullable',
            'anamnesis_evaluacion_capacidades5'=>'nullable',
            'anamnesis_evaluacion_capacidades6'=>'nullable',
            'anamnesis_evaluacion_capacidades7'=>'nullable',
            'anamnesis_evaluacion_capacidades8'=>'nullable',
            'anamnesis_evaluacion_capacidades9'=>'nullable',
            'anamnesis_evaluacion_capacidades10'=>'nullable',
            'exploracion_fisica_fc'=>'nullable',
            'exploracion_fisica_fr'=>'nullable',
            'exploracion_fisica_pa'=>'nullable',
            'exploracion_fisica_talla'=>'nullable',
            'exploracion_fisica_peso'=>'nullable',
            'exploracion_fisica_imc'=>'nullable',
            'exploracion_fisica_perimetro_cuello'=>'nullable',
            'exploracion_fisica_perimetro_cintura'=>'nullable',
            'exploracion_fisica_perimetro_cadera'=>'nullable',
            'exploracion_fisica_icc'=>'nullable',
            'exploracion_fisica_perimetro_toraxico_inspiracion'=>'nullable',
            'exploracion_fisica_perimetro_toraxico_espiracion'=>'nullable',
            'exploracion_fisica_capacidades1'=>'nullable',
            'exploracion_fisica_capacidades2'=>'nullable',
            'exploracion_fisica_capacidades3'=>'nullable',
            'exploracion_fisica_capacidades4'=>'nullable',
            'exploracion_fisica_capacidades5'=>'nullable',
            'exploracion_fisica_capacidades6'=>'nullable',
            'exploracion_fisica_capacidades7'=>'nullable',
            'exploracion_fisica_capacidades8'=>'nullable',
            'exploracion_fisica_capacidades9'=>'nullable',
            'exploracion_fisica_capacidades10'=>'nullable',
            'exploracion_fisica_perimetro_detalle'=>'nullable',
            'prueba_auxiliar_capacidades1'=>'nullable',
            'prueba_auxiliar_capacidades2'=>'nullable',
            'prueba_auxiliar_capacidades3'=>'nullable',
            'prueba_auxiliar_capacidades4'=>'nullable',
            'prueba_auxiliar_capacidades5'=>'nullable',
            'prueba_auxiliar_capacidades6'=>'nullable',
            'detalle_medicinas'=>'nullable',
            'otro'=>'nullable',
            'evaluacion_funcional_desde'=>'nullable',
            'evaluacion_funcional_hasta'=>'nullable',
            'evaluacion_funcional_estado'=>'nullable',
            'evaluacion_funcional_comentarios'=>'nullable',
            'evaluacion_funcional_observaciones'=>'nullable',
            'fecha_registro'=>'nullable',
            'lista_examen_id'=>'nullable',
            'cita_id'=>'nullable',
          ]);
          $conduccionvehiculo = EvaluacionConduccionVehiculos::create([
            'estado_evaluacion'=>isset($data['estado_evaluacion'])? $data['estado_evaluacion']:null,
            'anamnesis_evaluacion_capacidades1'=>isset($data['anamnesis_evaluacion_capacidades1'])? $data['anamnesis_evaluacion_capacidades1']:0,
            'anamnesis_evaluacion_capacidades2'=>isset($data['anamnesis_evaluacion_capacidades2'])? $data['anamnesis_evaluacion_capacidades2']:0,
            'anamnesis_evaluacion_capacidades3'=>isset($data['anamnesis_evaluacion_capacidades3'])? $data['anamnesis_evaluacion_capacidades3']:0,
            'anamnesis_evaluacion_capacidades4'=>isset($data['anamnesis_evaluacion_capacidades4'])? $data['anamnesis_evaluacion_capacidades4']:0,
            'anamnesis_evaluacion_capacidades5'=>isset($data['anamnesis_evaluacion_capacidades5'])? $data['anamnesis_evaluacion_capacidades5']:0,
            'anamnesis_evaluacion_capacidades6'=>isset($data['anamnesis_evaluacion_capacidades6'])? $data['anamnesis_evaluacion_capacidades6']:0,
            'anamnesis_evaluacion_capacidades7'=>isset($data['anamnesis_evaluacion_capacidades7'])? $data['anamnesis_evaluacion_capacidades7']:0,
            'anamnesis_evaluacion_capacidades8'=>isset($data['anamnesis_evaluacion_capacidades8'])? $data['anamnesis_evaluacion_capacidades8']:0,
            'anamnesis_evaluacion_capacidades9'=>isset($data['anamnesis_evaluacion_capacidades9'])? $data['anamnesis_evaluacion_capacidades9']:0,
            'anamnesis_evaluacion_capacidades10'=>isset($data['anamnesis_evaluacion_capacidades10'])? $data['anamnesis_evaluacion_capacidades10']:0,
            'exploracion_fisica_fc'=>isset($data['exploracion_fisica_fc'])? $data['exploracion_fisica_fc']:null,
            'exploracion_fisica_fr'=>isset($data['exploracion_fisica_fr'])? $data['exploracion_fisica_fr']:null,
            'exploracion_fisica_pa'=>isset($data['exploracion_fisica_pa'])? $data['exploracion_fisica_pa']:null,
            'exploracion_fisica_talla'=>isset($data['exploracion_fisica_talla'])? $data['exploracion_fisica_talla']:null,
            'exploracion_fisica_peso'=>isset($data['exploracion_fisica_peso'])? $data['exploracion_fisica_peso']:null,
            'exploracion_fisica_imc'=>isset($data['exploracion_fisica_imc'])? $data['exploracion_fisica_imc']:null,
            'exploracion_fisica_perimetro_cuello'=>isset($data['exploracion_fisica_perimetro_cuello'])? $data['exploracion_fisica_perimetro_cuello']:null,
            'exploracion_fisica_perimetro_cintura'=>isset($data['exploracion_fisica_perimetro_cintura'])? $data['exploracion_fisica_perimetro_cintura']:null,
            'exploracion_fisica_perimetro_cadera'=>isset($data['exploracion_fisica_perimetro_cadera'])? $data['exploracion_fisica_perimetro_cadera']:null,
            'exploracion_fisica_icc'=>isset($data['exploracion_fisica_icc'])? $data['exploracion_fisica_icc']:null,
            'exploracion_fisica_perimetro_toraxico_inspiracion'=>isset($data['exploracion_fisica_perimetro_toraxico_inspiracion'])? $data['exploracion_fisica_perimetro_toraxico_inspiracion']:null,
            'exploracion_fisica_perimetro_toraxico_espiracion'=>isset($data['exploracion_fisica_perimetro_toraxico_espiracion'])? $data['exploracion_fisica_perimetro_toraxico_espiracion']:null,
            'exploracion_fisica_capacidades1'=>isset($data['exploracion_fisica_capacidades1'])? $data['exploracion_fisica_capacidades1']:0,
            'exploracion_fisica_capacidades2'=>isset($data['exploracion_fisica_capacidades2'])? $data['exploracion_fisica_capacidades2']:0,
            'exploracion_fisica_capacidades3'=>isset($data['exploracion_fisica_capacidades3'])? $data['exploracion_fisica_capacidades3']:0,
            'exploracion_fisica_capacidades4'=>isset($data['exploracion_fisica_capacidades4'])? $data['exploracion_fisica_capacidades4']:0,
            'exploracion_fisica_capacidades5'=>isset($data['exploracion_fisica_capacidades5'])? $data['exploracion_fisica_capacidades5']:0,
            'exploracion_fisica_capacidades6'=>isset($data['exploracion_fisica_capacidades6'])? $data['exploracion_fisica_capacidades6']:0,
            'exploracion_fisica_capacidades7'=>isset($data['exploracion_fisica_capacidades7'])? $data['exploracion_fisica_capacidades7']:0,
            'exploracion_fisica_capacidades8'=>isset($data['exploracion_fisica_capacidades8'])? $data['exploracion_fisica_capacidades8']:0,
            'exploracion_fisica_capacidades9'=>isset($data['exploracion_fisica_capacidades9'])? $data['exploracion_fisica_capacidades9']:0,
            'exploracion_fisica_capacidades10'=>isset($data['exploracion_fisica_capacidades10'])? $data['exploracion_fisica_capacidades10']:0,
            'exploracion_fisica_perimetro_detalle'=>isset($data['exploracion_fisica_perimetro_detalle'])? $data['exploracion_fisica_perimetro_detalle']:null,
            'prueba_auxiliar_capacidades1'=>isset($data['prueba_auxiliar_capacidades1'])? $data['prueba_auxiliar_capacidades1']:null,
            'prueba_auxiliar_capacidades2'=>isset($data['prueba_auxiliar_capacidades2'])? $data['prueba_auxiliar_capacidades2']:null,
            'prueba_auxiliar_capacidades3'=>isset($data['prueba_auxiliar_capacidades3'])? $data['prueba_auxiliar_capacidades3']:null,
            'prueba_auxiliar_capacidades4'=>isset($data['prueba_auxiliar_capacidades4'])? $data['prueba_auxiliar_capacidades4']:null,
            'prueba_auxiliar_capacidades5'=>isset($data['prueba_auxiliar_capacidades5'])? $data['prueba_auxiliar_capacidades5']:null,
            'prueba_auxiliar_capacidades6'=>isset($data['prueba_auxiliar_capacidades6'])? $data['prueba_auxiliar_capacidades6']:null,
            'detalle_medicinas'=>isset($data['detalle_medicinas'])? $data['detalle_medicinas']:null,
            'otro'=>isset($data['otro'])? $data['otro']:null,
            'evaluacion_funcional_desde'=>isset($data['evaluacion_funcional_desde'])? $data['evaluacion_funcional_desde']:null,
            'evaluacion_funcional_hasta'=>isset($data['evaluacion_funcional_hasta'])? $data['evaluacion_funcional_hasta']:null,
            'evaluacion_funcional_estado'=>isset($data['evaluacion_funcional_estado'])? $data['evaluacion_funcional_estado']:null,
            'evaluacion_funcional_comentarios'=>isset($data['evaluacion_funcional_comentarios'])? $data['evaluacion_funcional_comentarios']:null,
            'evaluacion_funcional_observaciones'=>isset($data['evaluacion_funcional_observaciones'])? $data['evaluacion_funcional_observaciones']:null,
            'fecha_registro'=>Carbon::now(),
            'cita_id'=>isset($data['cita_id'])? $data['cita_id']:null,
            'lista_examen_id'=>isset($data['lista_examen_id'])? $data['lista_examen_id']:null,
            'estado'=>true,
            'user_id'=>Auth::user()->id
          ]);

          return response()->json(['mensaje' => 'registro conduccion exitoso']);
      }
    //    return response()->json(['mensaje' => 'registro conduccion exitoso']);
    //return "evaluacionconduccionvehicular";
    //  dd("EvaluacionConduccionVehiculosController");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EvaluacionConduccionVehiculos  $evaluacionConduccionVehiculos
     * @return \Illuminate\Http\Response
     */
    public function show(EvaluacionConduccionVehiculos $evaluacionConduccionVehiculos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EvaluacionConduccionVehiculos  $evaluacionConduccionVehiculos
     * @return \Illuminate\Http\Response
     */
    public function edit(EvaluacionConduccionVehiculos $evaluacionConduccionVehiculos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EvaluacionConduccionVehiculos  $evaluacionConduccionVehiculos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $conduccionvehiculo = EvaluacionConduccionVehiculos::find($request['conduccion_vehicular_id']);
      if(request()->ajax()) {
          $data = request()->validate([
            'estado_evaluacion'=>'nullable',
            'anamnesis_evaluacion_capacidades1'=>'nullable',
            'anamnesis_evaluacion_capacidades2'=>'nullable',
            'anamnesis_evaluacion_capacidades3'=>'nullable',
            'anamnesis_evaluacion_capacidades4'=>'nullable',
            'anamnesis_evaluacion_capacidades5'=>'nullable',
            'anamnesis_evaluacion_capacidades6'=>'nullable',
            'anamnesis_evaluacion_capacidades7'=>'nullable',
            'anamnesis_evaluacion_capacidades8'=>'nullable',
            'anamnesis_evaluacion_capacidades9'=>'nullable',
            'anamnesis_evaluacion_capacidades10'=>'nullable',
            'exploracion_fisica_fc'=>'nullable',
            'exploracion_fisica_fr'=>'nullable',
            'exploracion_fisica_pa'=>'nullable',
            'exploracion_fisica_talla'=>'nullable',
            'exploracion_fisica_peso'=>'nullable',
            'exploracion_fisica_imc'=>'nullable',
            'exploracion_fisica_perimetro_cuello'=>'nullable',
            'exploracion_fisica_perimetro_cintura'=>'nullable',
            'exploracion_fisica_perimetro_cadera'=>'nullable',
            'exploracion_fisica_icc'=>'nullable',
            'exploracion_fisica_perimetro_toraxico_inspiracion'=>'nullable',
            'exploracion_fisica_perimetro_toraxico_espiracion'=>'nullable',
            'exploracion_fisica_capacidades1'=>'nullable',
            'exploracion_fisica_capacidades2'=>'nullable',
            'exploracion_fisica_capacidades3'=>'nullable',
            'exploracion_fisica_capacidades4'=>'nullable',
            'exploracion_fisica_capacidades5'=>'nullable',
            'exploracion_fisica_capacidades6'=>'nullable',
            'exploracion_fisica_capacidades7'=>'nullable',
            'exploracion_fisica_capacidades8'=>'nullable',
            'exploracion_fisica_capacidades9'=>'nullable',
            'exploracion_fisica_capacidades10'=>'nullable',
            'exploracion_fisica_perimetro_detalle'=>'nullable',
            'prueba_auxiliar_capacidades1'=>'nullable',
            'prueba_auxiliar_capacidades2'=>'nullable',
            'prueba_auxiliar_capacidades3'=>'nullable',
            'prueba_auxiliar_capacidades4'=>'nullable',
            'prueba_auxiliar_capacidades5'=>'nullable',
            'prueba_auxiliar_capacidades6'=>'nullable',
            'detalle_medicinas'=>'nullable',
            'otro'=>'nullable',
            'evaluacion_funcional_desde'=>'nullable',
            'evaluacion_funcional_hasta'=>'nullable',
            'evaluacion_funcional_estado'=>'nullable',
            'evaluacion_funcional_comentarios'=>'nullable',
            'evaluacion_funcional_observaciones'=>'nullable',
            'fecha_registro'=>'nullable',
            'lista_examen_id'=>'nullable',
            'cita_id'=>'nullable',
          ]);
          $conduccionvehiculo->update([
            'estado_evaluacion'=>isset($data['estado_evaluacion'])? $data['estado_evaluacion']:null,
            'anamnesis_evaluacion_capacidades1'=>isset($data['anamnesis_evaluacion_capacidades1'])? $data['anamnesis_evaluacion_capacidades1']:0,
            'anamnesis_evaluacion_capacidades2'=>isset($data['anamnesis_evaluacion_capacidades2'])? $data['anamnesis_evaluacion_capacidades2']:0,
            'anamnesis_evaluacion_capacidades3'=>isset($data['anamnesis_evaluacion_capacidades3'])? $data['anamnesis_evaluacion_capacidades3']:0,
            'anamnesis_evaluacion_capacidades4'=>isset($data['anamnesis_evaluacion_capacidades4'])? $data['anamnesis_evaluacion_capacidades4']:0,
            'anamnesis_evaluacion_capacidades5'=>isset($data['anamnesis_evaluacion_capacidades5'])? $data['anamnesis_evaluacion_capacidades5']:0,
            'anamnesis_evaluacion_capacidades6'=>isset($data['anamnesis_evaluacion_capacidades6'])? $data['anamnesis_evaluacion_capacidades6']:0,
            'anamnesis_evaluacion_capacidades7'=>isset($data['anamnesis_evaluacion_capacidades7'])? $data['anamnesis_evaluacion_capacidades7']:0,
            'anamnesis_evaluacion_capacidades8'=>isset($data['anamnesis_evaluacion_capacidades8'])? $data['anamnesis_evaluacion_capacidades8']:0,
            'anamnesis_evaluacion_capacidades9'=>isset($data['anamnesis_evaluacion_capacidades9'])? $data['anamnesis_evaluacion_capacidades9']:0,
            'anamnesis_evaluacion_capacidades10'=>isset($data['anamnesis_evaluacion_capacidades10'])? $data['anamnesis_evaluacion_capacidades10']:0,
            'exploracion_fisica_fc'=>isset($data['exploracion_fisica_fc'])? $data['exploracion_fisica_fc']:null,
            'exploracion_fisica_fr'=>isset($data['exploracion_fisica_fr'])? $data['exploracion_fisica_fr']:null,
            'exploracion_fisica_pa'=>isset($data['exploracion_fisica_pa'])? $data['exploracion_fisica_pa']:null,
            'exploracion_fisica_talla'=>isset($data['exploracion_fisica_talla'])? $data['exploracion_fisica_talla']:null,
            'exploracion_fisica_peso'=>isset($data['exploracion_fisica_peso'])? $data['exploracion_fisica_peso']:null,
            'exploracion_fisica_imc'=>isset($data['exploracion_fisica_imc'])? $data['exploracion_fisica_imc']:null,
            'exploracion_fisica_perimetro_cuello'=>isset($data['exploracion_fisica_perimetro_cuello'])? $data['exploracion_fisica_perimetro_cuello']:null,
            'exploracion_fisica_perimetro_cintura'=>isset($data['exploracion_fisica_perimetro_cintura'])? $data['exploracion_fisica_perimetro_cintura']:null,
            'exploracion_fisica_perimetro_cadera'=>isset($data['exploracion_fisica_perimetro_cadera'])? $data['exploracion_fisica_perimetro_cadera']:null,
            'exploracion_fisica_icc'=>isset($data['exploracion_fisica_icc'])? $data['exploracion_fisica_icc']:null,
            'exploracion_fisica_perimetro_toraxico_inspiracion'=>isset($data['exploracion_fisica_perimetro_toraxico_inspiracion'])? $data['exploracion_fisica_perimetro_toraxico_inspiracion']:null,
            'exploracion_fisica_perimetro_toraxico_espiracion'=>isset($data['exploracion_fisica_perimetro_toraxico_espiracion'])? $data['exploracion_fisica_perimetro_toraxico_espiracion']:null,
            'exploracion_fisica_capacidades1'=>isset($data['exploracion_fisica_capacidades1'])? $data['exploracion_fisica_capacidades1']:0,
            'exploracion_fisica_capacidades2'=>isset($data['exploracion_fisica_capacidades2'])? $data['exploracion_fisica_capacidades2']:0,
            'exploracion_fisica_capacidades3'=>isset($data['exploracion_fisica_capacidades3'])? $data['exploracion_fisica_capacidades3']:0,
            'exploracion_fisica_capacidades4'=>isset($data['exploracion_fisica_capacidades4'])? $data['exploracion_fisica_capacidades4']:0,
            'exploracion_fisica_capacidades5'=>isset($data['exploracion_fisica_capacidades5'])? $data['exploracion_fisica_capacidades5']:0,
            'exploracion_fisica_capacidades6'=>isset($data['exploracion_fisica_capacidades6'])? $data['exploracion_fisica_capacidades6']:0,
            'exploracion_fisica_capacidades7'=>isset($data['exploracion_fisica_capacidades7'])? $data['exploracion_fisica_capacidades7']:0,
            'exploracion_fisica_capacidades8'=>isset($data['exploracion_fisica_capacidades8'])? $data['exploracion_fisica_capacidades8']:0,
            'exploracion_fisica_capacidades9'=>isset($data['exploracion_fisica_capacidades9'])? $data['exploracion_fisica_capacidades9']:0,
            'exploracion_fisica_capacidades10'=>isset($data['exploracion_fisica_capacidades10'])? $data['exploracion_fisica_capacidades10']:0,
            'exploracion_fisica_perimetro_detalle'=>isset($data['exploracion_fisica_perimetro_detalle'])? $data['exploracion_fisica_perimetro_detalle']:null,
            'prueba_auxiliar_capacidades1'=>isset($data['prueba_auxiliar_capacidades1'])? $data['prueba_auxiliar_capacidades1']:null,
            'prueba_auxiliar_capacidades2'=>isset($data['prueba_auxiliar_capacidades2'])? $data['prueba_auxiliar_capacidades2']:null,
            'prueba_auxiliar_capacidades3'=>isset($data['prueba_auxiliar_capacidades3'])? $data['prueba_auxiliar_capacidades3']:null,
            'prueba_auxiliar_capacidades4'=>isset($data['prueba_auxiliar_capacidades4'])? $data['prueba_auxiliar_capacidades4']:null,
            'prueba_auxiliar_capacidades5'=>isset($data['prueba_auxiliar_capacidades5'])? $data['prueba_auxiliar_capacidades5']:null,
            'prueba_auxiliar_capacidades6'=>isset($data['prueba_auxiliar_capacidades6'])? $data['prueba_auxiliar_capacidades6']:null,
            'detalle_medicinas'=>isset($data['detalle_medicinas'])? $data['detalle_medicinas']:null,
            'otro'=>isset($data['otro'])? $data['otro']:null,
            'evaluacion_funcional_desde'=>isset($data['evaluacion_funcional_desde'])? $data['evaluacion_funcional_desde']:null,
            'evaluacion_funcional_hasta'=>isset($data['evaluacion_funcional_hasta'])? $data['evaluacion_funcional_hasta']:null,
            'evaluacion_funcional_estado'=>isset($data['evaluacion_funcional_estado'])? $data['evaluacion_funcional_estado']:null,
            'evaluacion_funcional_comentarios'=>isset($data['evaluacion_funcional_comentarios'])? $data['evaluacion_funcional_comentarios']:null,
            'evaluacion_funcional_observaciones'=>isset($data['evaluacion_funcional_observaciones'])? $data['evaluacion_funcional_observaciones']:null

          ]);
          $conduccionvehiculo->save();
          return response()->json(['mensaje' => 'registro conduccion exitoso']);
      }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EvaluacionConduccionVehiculos  $evaluacionConduccionVehiculos
     * @return \Illuminate\Http\Response
     */
    public function destroy(EvaluacionConduccionVehiculos $evaluacionConduccionVehiculos)
    {
        //
    }


    public function reporte_certificacion_conduccion_vehicular($id)
    {
      $cita=Cita::find($id);
      $view=View::make('evaluacionmedica.reportes.certificadoconduccionvehiculos',compact('cita'));
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      $pdf->stream($view);
      return $pdf->stream();
    }
}
