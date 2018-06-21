<?php

namespace App\Http\Controllers;

use App\Psa;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class PsaController extends Controller
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
              'psa'=>'nullable',
              'lista_examen_id'=>'nullable',
              'cita_id'=>'nullable'
          ]);

          $psa = Psa::create([
             'psa_descripcion'=>isset($data['psa'])? $data['psa']:0,
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
     * @param  \App\Psa  $psa
     * @return \Illuminate\Http\Response
     */
    public function show(Psa $psa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Psa  $psa
     * @return \Illuminate\Http\Response
     */
    public function edit(Psa $psa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Psa  $psa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       $psa= Psa::find($request['psa_id']);
      if(request()->ajax())
      {
          $data = request()->validate([
              'psa'=>'nullable',
              'lista_examen_id'=>'nullable',
              'cita_id'=>'nullable'
          ]);

          $psa->update([
             'psa_descripcion'=>isset($data['psa'])? $data['psa']:0,
             'fecha_registro'=>Carbon::now(),
             'lista_examen_id'=>isset($data['lista_examen_id'])? $data['lista_examen_id']:null,
             'cita_id'=>isset($data['cita_id'])? $data['cita_id']:null,
             'estado'=>true
          ]);
          $psa->save();
          return response()->json(['mensaje' =>"registro exitoso"]);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Psa  $psa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Psa $psa)
    {
        //
    }
}
