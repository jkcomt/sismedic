<?php

namespace App\Http\Controllers;

use App\EvaluacionConductorOperador;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EvaluacionConductorOperadorController extends Controller
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
                  'clase'=>'nullable',
                  'nro_licencia'=>'nullable',
                  'categoria'=>'nullable',
                  'maquina'=>'nullable',
                  'fecha_revalidacion'=>'nullable',
                  'aptitud'=>'nullable',
                  'observaciones'=>'nullable',
                  'fecha_registro'=>'nullable',
                  'lista_examen_id'=>'nullable',
                  'cita_id'=>'nullable'
                ]);
                $conductoroperador = EvaluacionConductorOperador::create([
                  'clase'=>isset($data['clase'])? $data['clase']:null,
                  'nro_licencia'=>isset($data['nro_licencia'])? $data['nro_licencia']:null,
                  'categoria'=>isset($data['categoria'])? $data['categoria']:null,
                  'maquina'=>isset($data['maquina'])? $data['maquina']:null,
                  'fecha_revalidacion'=>isset($data['fecha_revalidacion'])? $data['fecha_revalidacion']:null,
                  'aptitud'=>isset($data['aptitud'])? $data['aptitud']:null,
                  'observaciones'=>isset($data['observaciones'])? $data['observaciones']:null,
                  'fecha_registro'=>Carbon::now(),
                  'cita_id'=>isset($data['cita_id'])? $data['cita_id']:null,
                  'lista_examen_id'=>isset($data['lista_examen_id'])? $data['lista_examen_id']:null,
                  'estado'=>true
                ]);

                return response()->json(['mensaje' => 'registro exitoso']);
            }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EvaluacionConductorOperador  $evaluacionConductorOperador
     * @return \Illuminate\Http\Response
     */
    public function show(EvaluacionConductorOperador $evaluacionConductorOperador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EvaluacionConductorOperador  $evaluacionConductorOperador
     * @return \Illuminate\Http\Response
     */
    public function edit(EvaluacionConductorOperador $evaluacionConductorOperador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EvaluacionConductorOperador  $evaluacionConductorOperador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
          $conductoroperador=EvaluacionConductorOperador::find($request['conducto_operador_id']);
      if(request()->ajax()) {
          $data = request()->validate([
            'clase'=>'nullable',
            'nro_licencia'=>'nullable',
            'categoria'=>'nullable',
            'maquina'=>'nullable',
            'fecha_revalidacion'=>'nullable',
            'aptitud'=>'nullable',
            'observaciones'=>'nullable',
            'fecha_registro'=>'nullable',
            'lista_examen_id'=>'nullable',
            'cita_id'=>'nullable'
          ]);
          $conductoroperador->update([
            'clase'=>isset($data['clase'])? $data['clase']:null,
            'nro_licencia'=>isset($data['nro_licencia'])? $data['nro_licencia']:null,
            'categoria'=>isset($data['categoria'])? $data['categoria']:null,
            'maquina'=>isset($data['maquina'])? $data['maquina']:null,
            'fecha_revalidacion'=>isset($data['fecha_revalidacion'])? $data['fecha_revalidacion']:null,
            'aptitud'=>isset($data['aptitud'])? $data['aptitud']:null,
            'observaciones'=>isset($data['observaciones'])? $data['observaciones']:null,
            'fecha_registro'=>Carbon::now(),
            'cita_id'=>isset($data['cita_id'])? $data['cita_id']:null,
            'lista_examen_id'=>isset($data['lista_examen_id'])? $data['lista_examen_id']:null,
            'estado'=>true
          ]);
            $conductoroperador->save();
          return response()->json(['mensaje' => 'registro actualizar']);
      }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EvaluacionConductorOperador  $evaluacionConductorOperador
     * @return \Illuminate\Http\Response
     */
    public function destroy(EvaluacionConductorOperador $evaluacionConductorOperador)
    {
        //
    }
}
