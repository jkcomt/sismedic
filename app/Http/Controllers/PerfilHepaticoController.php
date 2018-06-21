<?php

namespace App\Http\Controllers;

use App\PerfilHepatico;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class PerfilHepaticoController extends Controller
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
              'bilirrubina_total'=>'nullable',
              'bilirrubina_dta'=>'nullable',
              'bilirrubina_idta'=>'nullable',
              'fosfatosa_alc'=>'nullable',
              'tgo'=>'nullable',
              'tgp'=>'nullable',
              'proteinas_totales'=>'nullable',
              'albumina'=>'nullable',
              'fecha_registro'=>'nullable',
              'lista_examen_id'=>'nullable',
              'cita_id'=>'nullable',
          ]);

          $perfilHepatico = PerfilHepatico::create([
             'bilirrubina_total'=>isset($data['bilirrubina_total'])? $data['bilirrubina_total']:0,
             'bilirrubina_dta'=>isset($data['bilirrubina_dta'])? $data['bilirrubina_dta']:0,
             'bilirrubina_idta'=>isset($data['bilirrubina_idta'])? $data['bilirrubina_idta']:0,
             'fosfatosa_alc'=>isset($data['fosfatosa_alc'])? $data['fosfatosa_alc']:0,
             'tgo'=>isset($data['tgo'])? $data['tgo']:0,
             'tgp'=>isset($data['tgp'])? $data['tgp']:0,
             'proteinas_totales'=>isset($data['proteinas_totales'])? $data['proteinas_totales']:0,
             'albumina'=>isset($data['albumina'])? $data['albumina']:0,
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
     * @param  \App\PerfilHepatico  $perfilHepatico
     * @return \Illuminate\Http\Response
     */
    public function show(PerfilHepatico $perfilHepatico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PerfilHepatico  $perfilHepatico
     * @return \Illuminate\Http\Response
     */
    public function edit(PerfilHepatico $perfilHepatico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PerfilHepatico  $perfilHepatico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PerfilHepatico $perfilHepatico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PerfilHepatico  $perfilHepatico
     * @return \Illuminate\Http\Response
     */
    public function destroy(PerfilHepatico $perfilHepatico)
    {
        //
    }
}
