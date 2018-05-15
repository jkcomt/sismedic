<?php

namespace App\Http\Controllers;

use App\AntperAccidenteParticulares;
use Illuminate\Http\Request;
use Carbon\Carbon;


class AntperAccidenteParticularesController extends Controller
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
            'tratamiento_actual'=>'required'
          ]);
          $antecedentes=AntperAccidenteParticulares::create([
            'descripcion'=>$data['descripcion'],
            'anio'=>$data['anio'],
            'tratamiento_actual'=>$data['tratamiento_actual'],
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
     * @param  \App\AntperAccidenteParticulares  $antperAccidenteParticulares
     * @return \Illuminate\Http\Response
     */
    public function show(AntperAccidenteParticulares $antperAccidenteParticulares)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AntperAccidenteParticulares  $antperAccidenteParticulares
     * @return \Illuminate\Http\Response
     */
    public function edit(AntperAccidenteParticulares $antperAccidenteParticulares)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AntperAccidenteParticulares  $antperAccidenteParticulares
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $antecedentesparticulares=AntperAccidenteParticulares::find($request['particular_id']);
          if(request()->ajax())
          {
              $data=request()->validate([
                'particular_id'=>'required'
              ]);
              $antecedentesparticulares->update([
                          'estado'=>false
              ]);
    //              $request['hos_id']
            return response()->json(['mensaje'=>'Registro Eliminado']);
          }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AntperAccidenteParticulares  $antperAccidenteParticulares
     * @return \Illuminate\Http\Response
     */
    public function destroy(AntperAccidenteParticulares $antperAccidenteParticulares)
    {
        //
    }
}
