<?php

namespace App\Http\Controllers;

use App\AntperAccidenteLaborales;
use Illuminate\Http\Request;
use Carbon\Carbon;


class AntperAccidenteLaboralesController extends Controller
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
            'descripcion'=>'required',
            'anio'=>'required',
            'tratamiento_actual'=>'required',
            'importancia_patologica'=>'nullable',
          ]);
          $antecedentes=AntperAccidenteLaborales::create([
            'descripcion'=>$data['descripcion'],
            'anio'=>$data['anio'],
            'tratamiento_actual'=>$data['tratamiento_actual'],
            'importancia_patologica'=>$data['importancia_patologica'],
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
     * @param  \App\AntperAccidenteLaborales  $antperAccidenteLaborales
     * @return \Illuminate\Http\Response
     */
    public function show(AntperAccidenteLaborales $antperAccidenteLaborales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AntperAccidenteLaborales  $antperAccidenteLaborales
     * @return \Illuminate\Http\Response
     */
    public function edit(AntperAccidenteLaborales $antperAccidenteLaborales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AntperAccidenteLaborales  $antperAccidenteLaborales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $antecedenteslaborales=AntperAccidenteLaborales::find($request['laborales_id']);
          if(request()->ajax())
          {
              $data=request()->validate([
                'laborales_id'=>'required'
              ]);
              $antecedenteslaborales->update([
                          'estado'=>false
              ]);
    //              $request['hos_id']
            return response()->json(['mensaje'=>'Registro Eliminado']);
          }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AntperAccidenteLaborales  $antperAccidenteLaborales
     * @return \Illuminate\Http\Response
     */
    public function destroy(AntperAccidenteLaborales $antperAccidenteLaborales)
    {
        //
    }
}
