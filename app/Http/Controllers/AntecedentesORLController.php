<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\AntecedentesORL;
use Illuminate\Http\Request;

class AntecedentesORLController extends Controller
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
            'hipoacusia'=>'nullable',
            'txthipoacusia'=>'required_if:hipoacusia,==,1',
            'txtaniohipoacusia'=>'required_if:hipoacusia,==,1',
            'txttratamientoactualhipoacusia'=>'required_if:hipoacusia,==,1',
            'traumas'=>'nullable',
            'txttraumas'=>'required_if:traumas,==,1',
            'txtaniotraumas'=>'required_if:traumas,==,1',
            'txttratamientoactualtraumas'=>'required_if:traumas,==,1',
            'otitiscronica'=>'nullable',
            'txtotitiscronica'=>'required_if:otitiscronica,==,1',
            'txtaniootitiscronica'=>'required_if:otitiscronica,==,1',
            'txttratamientoactualotitiscronica'=>'required_if:otitiscronica,==,1',
            'sordera'=>'nullable',
            'meningitis'=>'nullable',
            'sarampion'=>'nullable',
            'ExpLaboralRuido'=>'nullable',
            'tiro_orl'=>'nullable',
            'tec_orl'=>'nullable',
            'parotiditis'=>'nullable',
            'uso_audifonos'=>'nullable',
            'uso_ototoxicos'=>'nullable',
            'discotecas'=>'nullable',
            'taponesauditivos'=>'nullable',
            'cbotaponesauditivos'=>'required_if:taponesauditivos,==,1',
            'algodones'=>'nullable',
            'cboalgodones'=>'required_if:algodones,==,1',
            'orejeras'=>'nullable',
            'cboorejeras'=>'required_if:orejeras,==,1',
            'otrosespecificar'=>'nullable',
            'cbootrosespecificar'=>'required_if:otrosespecificar,==,1',
            'apreciacionruido'=>'nullable',
            'cboapreciacionruido'=>'required_if:apreciacionruido,==,1',
            'obsorl'=>'nullable'
          ]);
          $antecedentesOrl=AntecedentesORL::create([
          'hipoacusia'=>isset($data['hipoacusia'])?$data['hipoacusia']:null,
          'hipoacusia_descripcion' =>isset($data['txthipoacusia'])?$data['txthipoacusia']:null,
          'hipoacusia_anio_dx' =>isset($data['txtaniohipoacusia'])?$data['txtaniohipoacusia']:null,
          'hipoacusia_tratamiento_actual' =>isset($data['txttratamientoactualhipoacusia'])?$data['txttratamientoactualhipoacusia']:null,
          'traumas' =>isset($data['traumas'])?$data['traumas']:null,
          'traumas_descripcion' =>isset($data['txttraumas'])?$data['txttraumas']:null,
          'traumas_anio_dx' =>isset($data['txtaniotraumas'])?$data['txtaniotraumas']:null,
          'traumas_tratamiento_actual' =>isset($data['txttratamientoactualhipoacusia'])?$data['txttratamientoactualhipoacusia']:null,
          'otitiscronica' =>isset($data['otitiscronica'])?$data['otitiscronica']:null,
          'otitiscronica_descripcion' =>isset($data['txtotitiscronica'])?$data['txtotitiscronica']:null,
          'otitiscronica_anio_dx' =>isset($data['txtaniootitiscronica'])?$data['txtaniootitiscronica']:null,
          'otitiscronica_tratamiento_actual' =>isset($data['txttratamientoactualotitiscronica'])?$data['txttratamientoactualotitiscronica']:null,
          'sordera' =>isset($data['sordera'])?$data['sordera']:null,
          'meningitis' =>isset($data['meningitis'])?$data['meningitis']:null,
          'sarampion' =>isset($data['sarampion'])?$data['sarampion']:null,
          'exp_lab_al_ruido' =>isset($data['exp_lab_al_ruido'])?$data['exp_lab_al_ruido']:null,
          'tiro' =>isset($data['tiro'])?$data['tiro']:null,
          'tec' =>isset($data['tec'])?$data['tec']:null,
          'parotiditis' =>isset($data['parotiditis'])?$data['parotiditis']:null,
          'uso_audifonos' =>isset($data['uso_audifonos'])?$data['uso_audifonos']:null,
          'uso_ototoxicos' =>isset($data['uso_ototoxicos'])?$data['uso_ototoxicos']:null,
          'tapones_auditivos' =>isset($data['taponesauditivos'])?$data['taponesauditivos']:null,
          'tapones_auditivos_descripcion' =>isset($data['cbotaponesauditivos'])?$data['cbotaponesauditivos']:null,
          'orejeras' =>isset($data['orejeras'])?$data['orejeras']:null,
          'orejeras_descripcion' =>isset($data['cboorejeras'])?$data['cboorejeras']:null,
          'algodones' =>isset($data['algodones'])?$data['algodones']:null,
          'algodones_descripcion' =>isset($data['cboalgodones'])?$data['cboalgodones']:null,
          'otros_especificar' =>isset($data['otrosespecificar'])?$data['otrosespecificar']:null,
          'otros_especificar_descripcion' =>isset($data['cbootrosespecificar'])?$data['cbootrosespecificar']:null,
          'apreciacion_ruido' =>isset($data['apreciacionruido'])?$data['apreciacionruido']:null,
          'apreciacion_ruido_descripcion' =>isset($data['cboapreciacionruido'])?$data['cboapreciacionruido']:null,
          'observaciones' =>isset($data['obsorl'])?$data['obsorl']:null,
          'fecha_registro'=>Carbon::now(),
          'paciente_id'=> $data['paciente_id'] ,
          'estado'=>true
          ]);
              return response()->json(['mensaje'=>"Registro exitoso"]);
      }



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AntecedentesORL  $antecedentesORL
     * @return \Illuminate\Http\Response
     */
    public function show(AntecedentesORL $antecedentesORL)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AntecedentesORL  $antecedentesORL
     * @return \Illuminate\Http\Response
     */
    public function edit(AntecedentesORL $antecedentesORL)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AntecedentesORL  $antecedentesORL
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
          $antecedentesOrl=AntecedentesORL::find($request['antecedentesorl_id']);
      if(request()->ajax())
      {
          $data=request()->validate([
            'paciente_id'=>'required',
            'hipoacusia'=>'nullable',
            'txthipoacusia'=>'required_if:hipoacusia,==,1',
            'txtaniohipoacusia'=>'required_if:hipoacusia,==,1',
            'txttratamientoactualhipoacusia'=>'required_if:hipoacusia,==,1',
            'traumas'=>'nullable',
            'txttraumas'=>'required_if:traumas,==,1',
            'txtaniotraumas'=>'required_if:traumas,==,1',
            'txttratamientoactualtraumas'=>'required_if:traumas,==,1',
            'otitiscronica'=>'nullable',
            'txtotitiscronica'=>'required_if:otitiscronica,==,1',
            'txtaniootitiscronica'=>'required_if:otitiscronica,==,1',
            'txttratamientoactualotitiscronica'=>'required_if:otitiscronica,==,1',
            'sordera'=>'nullable',
            'meningitis'=>'nullable',
            'sarampion'=>'nullable',
            'ExpLaboralRuido'=>'nullable',
            'tiro_orl'=>'nullable',
            'tec_orl'=>'nullable',
            'parotiditis'=>'nullable',
            'uso_audifonos'=>'nullable',
            'uso_ototoxicos'=>'nullable',
            'discotecas'=>'nullable',
            'taponesauditivos'=>'nullable',
            'cbotaponesauditivos'=>'required_if:taponesauditivos,==,1',
            'algodones'=>'nullable',
            'cboalgodones'=>'required_if:algodones,==,1',
            'orejeras'=>'nullable',
            'cboorejeras'=>'required_if:orejeras,==,1',
            'otrosespecificar'=>'nullable',
            'cbootrosespecificar'=>'required_if:otrosespecificar,==,1',
            'apreciacionruido'=>'nullable',
            'cboapreciacionruido'=>'required_if:apreciacionruido,==,1',
            'obsorl'=>'nullable'
          ]);
          $antecedentesOrl->update([
          'hipoacusia'=>isset($data['hipoacusia'])?$data['hipoacusia']:null,
          'hipoacusia_descripcion' =>isset($data['txthipoacusia'])?$data['txthipoacusia']:null,
          'hipoacusia_anio_dx' =>isset($data['txtaniohipoacusia'])?$data['txtaniohipoacusia']:null,
          'hipoacusia_tratamiento_actual' =>isset($data['txttratamientoactualhipoacusia'])?$data['txttratamientoactualhipoacusia']:null,
          'traumas' =>isset($data['traumas'])?$data['traumas']:null,
          'traumas_descripcion' =>isset($data['txttraumas'])?$data['txttraumas']:null,
          'traumas_anio_dx' =>isset($data['txtaniotraumas'])?$data['txtaniotraumas']:null,
          'traumas_tratamiento_actual' =>isset($data['txttratamientoactualhipoacusia'])?$data['txttratamientoactualhipoacusia']:null,
          'otitiscronica' =>isset($data['otitiscronica'])?$data['otitiscronica']:null,
          'otitiscronica_descripcion' =>isset($data['txtotitiscronica'])?$data['txtotitiscronica']:null,
          'otitiscronica_anio_dx' =>isset($data['txtaniootitiscronica'])?$data['txtaniootitiscronica']:null,
          'otitiscronica_tratamiento_actual' =>isset($data['txttratamientoactualotitiscronica'])?$data['txttratamientoactualotitiscronica']:null,
          'sordera' =>isset($data['sordera'])?$data['sordera']:null,
          'meningitis' =>isset($data['meningitis'])?$data['meningitis']:null,
          'sarampion' =>isset($data['sarampion'])?$data['sarampion']:null,
          'exp_lab_al_ruido' =>isset($data['ExpLaboralRuido'])?$data['ExpLaboralRuido']:null,
          'tiro' =>isset($data['tiro_orl'])?$data['tiro_orl']:null,
          'tec' =>isset($data['tec_orl'])?$data['tec_orl']:null,
          'parotiditis' =>isset($data['parotiditis'])?$data['parotiditis']:null,
          'uso_audifonos' =>isset($data['uso_audifonos'])?$data['uso_audifonos']:null,
          'uso_ototoxicos' =>isset($data['uso_ototoxicos'])?$data['uso_ototoxicos']:null,
          'tapones_auditivos' =>isset($data['taponesauditivos'])?$data['taponesauditivos']:null,
          'tapones_auditivos_descripcion' =>isset($data['cbotaponesauditivos'])?$data['cbotaponesauditivos']:null,
          'orejeras' =>isset($data['orejeras'])?$data['orejeras']:null,
          'orejeras_descripcion' =>isset($data['cboorejeras'])?$data['cboorejeras']:null,
          'algodones' =>isset($data['algodones'])?$data['algodones']:null,
          'algodones_descripcion' =>isset($data['cboalgodones'])?$data['cboalgodones']:null,
          'otros_especificar' =>isset($data['otrosespecificar'])?$data['otrosespecificar']:null,
          'otros_especificar_descripcion' =>isset($data['cbootrosespecificar'])?$data['cbootrosespecificar']:null,
          'apreciacion_ruido' =>isset($data['apreciacionruido'])?$data['apreciacionruido']:null,
          'apreciacion_ruido_descripcion' =>isset($data['cboapreciacionruido'])?$data['cboapreciacionruido']:null,
          'observaciones' =>isset($data['obsorl'])?$data['obsorl']:null,
          'fecha_registro'=>Carbon::now(),
          'paciente_id'=> $data['paciente_id'] ,
          'estado'=>true
          ]);
             $antecedentesOrl->save();
             return response()->json(['mensaje'=>$data['obsorl']]);
      }






    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AntecedentesORL  $antecedentesORL
     * @return \Illuminate\Http\Response
     */
    public function destroy(AntecedentesORL $antecedentesORL)
    {
        //
    }
}
