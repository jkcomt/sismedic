<?php

namespace App\Http\Controllers;

use App\CuestionarioNordico;
use Illuminate\Http\Request;
use Carbon\Carbon;
use View;
class CuestionarioNordicoController extends Controller
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
            'datos_personales_anio'=>'nullable',
           'datos_personales_mes'=>'nullable',
           'datos_personales_horas'=>'nullable',
           'datos_personales_usted_es'=>'nullable',
           'problemas_organos_cuello'=>'nullable',
           'cuello_rendimiento_laboral_casa'=>'nullable',
           'cuello_ultimos7dias'=>'nullable',
           'problemas_organos_hombros'=>'nullable',
           'hombros_rendimiento_laboral_casa'=>'nullable',
           'hombros_ultimos7dias'=>'nullable',
           'problemas_organos_codos'=>'nullable',
           'codos_rendimiento_laboral_casa'=>'nullable',
           'codos_ultimos7dias'=>'nullable',
           'problemas_organos_muniecas'=>'nullable',
           'muniecas_rendimiento_laboral_casa'=>'nullable',
           'muniecas_ultimos7dias'=>'nullable',
           'problemas_organos_espalda_alta'=>'nullable',
           'espalda_alta_rendimiento_laboral_casa'=>'nullable',
           'espalda_alta_ultimos7dias'=>'nullable',
           'problemas_organos_espalda_baja'=>'nullable',
           'espalda_baja_rendimiento_laboral_casa'=>'nullable',
           'espalda_baja_ultimos7dias'=>'nullable',
           'problemas_organos_caderas_muslos'=>'nullable',
           'caderas_muslos_rendimiento_laboral_casa'=>'nullable',
           'caderas_muslos_ultimos7dias'=>'nullable',
           'problemas_organos_rodillas'=>'nullable',
           'rodillas_rendimiento_laboral_casa'=>'nullable',
           'rodillas_ultimos7dias'=>'nullable',
           'problemas_organos_tobillos_pies'=>'nullable',
           'tobillos_pies_laboral_casa'=>'nullable',
           'tobillos_pies_ultimos7dias'=>'nullable',
           'problemas_espalda_baja_uno'=>'nullable',
           'problemas_espalda_baja_dos'=>'nullable',
           'problemas_espalda_baja_tres'=>'nullable',
           'problemas_espalda_baja_cuatro'=>'nullable',
           'problemas_espalda_baja_cinco'=>'nullable',
           'problemas_espalda_baja_seis'=>'nullable',
           'problemas_espalda_baja_siete'=>'nullable',
           'problemas_espalda_baja_ocho'=>'nullable',
           'problemas_espalda_baja_nueve'=>'nullable',
           'problemas_hombros_uno'=>'nullable',
           'problemas_hombros_dos'=>'nullable',
           'problemas_hombros_tres'=>'nullable',
           'problemas_hombros_cuatro'=>'nullable',
           'problemas_hombros_cinco'=>'nullable',
           'problemas_hombros_seis'=>'nullable',
           'problemas_hombros_siete'=>'nullable',
           'problemas_hombros_ocho'=>'nullable',
           'problemas_hombros_nueve'=>'nullable',
           'problemas_hombros_dies'=>'nullable',
           'problemas_cuello_uno'=>'nullable',
           'problemas_cuello_dos'=>'nullable',
           'problemas_cuello_tres'=>'nullable',
           'problemas_cuello_cuatro'=>'nullable',
           'problemas_cuello_cinco'=>'nullable',
           'problemas_cuello_seis'=>'nullable',
           'problemas_cuello_siete'=>'nullable',
           'problemas_cuello_ocho'=>'nullable',
           'problemas_cuello_nueve'=>'nullable',
           'fecha_registro'=>'nullable',
           'lista_examen_id'=>'nullable',
           'cita_id'=>'nullable',
           ]);
            $cuestionarionordico=CuestionarioNordico::create([
              'datos_personales_anio'=>isset($data['datos_personales_anio'])? $data['datos_personales_anio']:null,
              'datos_personales_mes'=>isset($data['datos_personales_mes'])? $data['datos_personales_mes']:null,
              'datos_personales_horas'=>isset($data['datos_personales_horas'])? $data['datos_personales_horas']:null,
              'datos_personales_usted_es'=>isset($data['datos_personales_usted_es'])? $data['datos_personales_usted_es']:null,
              'problemas_organos_cuello'=>isset($data['problemas_organos_cuello'])? $data['problemas_organos_cuello']:null,
              'cuello_rendimiento_laboral_casa'=>isset($data['cuello_rendimiento_laboral_casa'])? $data['cuello_rendimiento_laboral_casa']:null,
              'cuello_ultimos7dias'=>isset($data['cuello_ultimos7dias'])? $data['cuello_ultimos7dias']:null,
              'problemas_organos_hombros'=>isset($data['problemas_organos_hombros'])? $data['problemas_organos_hombros']:null,
              'hombros_rendimiento_laboral_casa'=>isset($data['hombros_rendimiento_laboral_casa'])? $data['hombros_rendimiento_laboral_casa']:null,
              'hombros_ultimos7dias'=>isset($data['hombros_ultimos7dias'])? $data['hombros_ultimos7dias']:null,
              'problemas_organos_codos'=>isset($data['problemas_organos_codos'])? $data['problemas_organos_codos']:null,
              'codos_rendimiento_laboral_casa'=>isset($data['codos_rendimiento_laboral_casa'])? $data['codos_rendimiento_laboral_casa']:null,
              'codos_ultimos7dias'=>isset($data['codos_ultimos7dias'])? $data['codos_ultimos7dias']:null,
              'problemas_organos_muniecas'=>isset($data['problemas_organos_muniecas'])? $data['problemas_organos_muniecas']:null,
              'muniecas_rendimiento_laboral_casa'=>isset($data['muniecas_rendimiento_laboral_casa'])? $data['muniecas_rendimiento_laboral_casa']:null,
              'muniecas_ultimos7dias'=>isset($data['muniecas_ultimos7dias'])? $data['muniecas_ultimos7dias']:null,
              'problemas_organos_espalda_alta'=>isset($data['problemas_organos_espalda_alta'])? $data['problemas_organos_espalda_alta']:null,
              'espalda_alta_rendimiento_laboral_casa'=>isset($data['espalda_alta_rendimiento_laboral_casa'])? $data['espalda_alta_rendimiento_laboral_casa']:null,
              'espalda_alta_ultimos7dias'=>isset($data['espalda_alta_ultimos7dias'])? $data['espalda_alta_ultimos7dias']:null,
              'problemas_organos_espalda_baja'=>isset($data['problemas_organos_espalda_baja'])? $data['problemas_organos_espalda_baja']:null,
              'espalda_baja_rendimiento_laboral_casa'=>isset($data['espalda_baja_rendimiento_laboral_casa'])? $data['espalda_baja_rendimiento_laboral_casa']:null,
              'espalda_baja_ultimos7dias'=>isset($data['espalda_baja_ultimos7dias'])? $data['espalda_baja_ultimos7dias']:null,
              'problemas_organos_caderas_muslos'=>isset($data['problemas_organos_caderas_muslos'])? $data['problemas_organos_caderas_muslos']:null,
              'caderas_muslos_rendimiento_laboral_casa'=>isset($data['caderas_muslos_rendimiento_laboral_casa'])? $data['caderas_muslos_rendimiento_laboral_casa']:null,
              'caderas_muslos_ultimos7dias'=>isset($data['caderas_muslos_ultimos7dias'])? $data['caderas_muslos_ultimos7dias']:null,
              'problemas_organos_rodillas'=>isset($data['problemas_organos_rodillas'])? $data['problemas_organos_rodillas']:null,
              'rodillas_rendimiento_laboral_casa'=>isset($data['rodillas_rendimiento_laboral_casa'])? $data['rodillas_rendimiento_laboral_casa']:null,
              'rodillas_ultimos7dias'=>isset($data['rodillas_ultimos7dias'])? $data['rodillas_ultimos7dias']:null,
              'problemas_organos_tobillos_pies'=>isset($data['problemas_organos_tobillos_pies'])? $data['problemas_organos_tobillos_pies']:null,
              'tobillos_pies_laboral_casa'=>isset($data['tobillos_pies_laboral_casa'])? $data['tobillos_pies_laboral_casa']:null,
              'tobillos_pies_ultimos7dias'=>isset($data['tobillos_pies_ultimos7dias'])? $data['tobillos_pies_ultimos7dias']:null,
              'problemas_espalda_baja_uno'=>isset($data['problemas_espalda_baja_uno'])? $data['problemas_espalda_baja_uno']:null,
              'problemas_espalda_baja_dos'=>isset($data['problemas_espalda_baja_dos'])? $data['problemas_espalda_baja_dos']:null,
              'problemas_espalda_baja_tres'=>isset($data['problemas_espalda_baja_tres'])? $data['problemas_espalda_baja_tres']:null,
              'problemas_espalda_baja_cuatro'=>isset($data['problemas_espalda_baja_cuatro'])? $data['problemas_espalda_baja_cuatro']:null,
              'problemas_espalda_baja_cinco'=>isset($data['problemas_espalda_baja_cinco'])? $data['problemas_espalda_baja_cinco']:null,
              'problemas_espalda_baja_seis'=>isset($data['problemas_espalda_baja_seis'])? $data['problemas_espalda_baja_seis']:null,
              'problemas_espalda_baja_siete'=>isset($data['problemas_espalda_baja_siete'])? $data['problemas_espalda_baja_siete']:null,
              'problemas_espalda_baja_ocho'=>isset($data['problemas_espalda_baja_ocho'])? $data['problemas_espalda_baja_ocho']:null,
              'problemas_espalda_baja_nueve'=>isset($data['problemas_espalda_baja_nueve'])? $data['problemas_espalda_baja_nueve']:null,
              'problemas_hombros_uno'=>isset($data['problemas_hombros_uno'])? $data['problemas_hombros_uno']:null,
              'problemas_hombros_dos'=>isset($data['problemas_hombros_dos'])? $data['problemas_hombros_dos']:null,
              'problemas_hombros_tres'=>isset($data['problemas_hombros_tres'])? $data['problemas_hombros_tres']:null,
              'problemas_hombros_cuatro'=>isset($data['problemas_hombros_cuatro'])? $data['problemas_hombros_cuatro']:null,
              'problemas_hombros_cinco'=>isset($data['problemas_hombros_cinco'])? $data['problemas_hombros_cinco']:null,
              'problemas_hombros_seis'=>isset($data['problemas_hombros_seis'])? $data['problemas_hombros_seis']:null,
              'problemas_hombros_siete'=>isset($data['problemas_hombros_siete'])? $data['problemas_hombros_siete']:null,
              'problemas_hombros_ocho'=>isset($data['problemas_hombros_ocho'])? $data['problemas_hombros_ocho']:null,
              'problemas_hombros_nueve'=>isset($data['problemas_hombros_nueve'])? $data['problemas_hombros_nueve']:null,
              'problemas_hombros_dies'=>isset($data['problemas_hombros_dies'])? $data['problemas_hombros_dies']:null,
              'problemas_cuello_uno'=>isset($data['problemas_cuello_uno'])? $data['problemas_cuello_uno']:null,
              'problemas_cuello_dos'=>isset($data['problemas_cuello_dos'])? $data['problemas_cuello_dos']:null,
              'problemas_cuello_tres'=>isset($data['problemas_cuello_tres'])? $data['problemas_cuello_tres']:null,
              'problemas_cuello_cuatro'=>isset($data['problemas_cuello_cuatro'])? $data['problemas_cuello_cuatro']:null,
              'problemas_cuello_cinco'=>isset($data['problemas_cuello_cinco'])? $data['problemas_cuello_cinco']:null,
              'problemas_cuello_seis'=>isset($data['problemas_cuello_seis'])? $data['problemas_cuello_seis']:null,
              'problemas_cuello_siete'=>isset($data['problemas_cuello_siete'])? $data['problemas_cuello_siete']:null,
              'problemas_cuello_ocho'=>isset($data['problemas_cuello_ocho'])? $data['problemas_cuello_ocho']:null,
              'problemas_cuello_nueve'=>isset($data['problemas_cuello_nueve'])? $data['problemas_cuello_nueve']:null,
              'fecha_registro'=>Carbon::now(),
              'cita_id'=>isset($data['cita_id'])? $data['cita_id']:null,
              'lista_examen_id'=>isset($data['lista_examen_id'])? $data['lista_examen_id']:null,
              'estado'=>true
            ]);
        }
        return response()->json(['mensaje' => 'registro cuestionario nordico exitoso']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CuestionarioNordico  $cuestionarioNordico
     * @return \Illuminate\Http\Response
     */
    public function show(CuestionarioNordico $cuestionarioNordico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CuestionarioNordico  $cuestionarioNordico
     * @return \Illuminate\Http\Response
     */
    public function edit(CuestionarioNordico $cuestionarioNordico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CuestionarioNordico  $cuestionarioNordico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $cuestionarionordico=CuestionarioNordico::find($request['cuestionario_nordico_id']);
      if(request()->ajax()) {
          $data = request()->validate([
            'datos_personales_anio'=>'nullable',
           'datos_personales_mes'=>'nullable',
           'datos_personales_horas'=>'nullable',
           'datos_personales_usted_es'=>'nullable',
           'problemas_organos_cuello'=>'nullable',
           'cuello_rendimiento_laboral_casa'=>'nullable',
           'cuello_ultimos7dias'=>'nullable',
           'problemas_organos_hombros'=>'nullable',
           'hombros_rendimiento_laboral_casa'=>'nullable',
           'hombros_ultimos7dias'=>'nullable',
           'problemas_organos_codos'=>'nullable',
           'codos_rendimiento_laboral_casa'=>'nullable',
           'codos_ultimos7dias'=>'nullable',
           'problemas_organos_muniecas'=>'nullable',
           'muniecas_rendimiento_laboral_casa'=>'nullable',
           'muniecas_ultimos7dias'=>'nullable',
           'problemas_organos_espalda_alta'=>'nullable',
           'espalda_alta_rendimiento_laboral_casa'=>'nullable',
           'espalda_alta_ultimos7dias'=>'nullable',
           'problemas_organos_espalda_baja'=>'nullable',
           'espalda_baja_rendimiento_laboral_casa'=>'nullable',
           'espalda_baja_ultimos7dias'=>'nullable',
           'problemas_organos_caderas_muslos'=>'nullable',
           'caderas_muslos_rendimiento_laboral_casa'=>'nullable',
           'caderas_muslos_ultimos7dias'=>'nullable',
           'problemas_organos_rodillas'=>'nullable',
           'rodillas_rendimiento_laboral_casa'=>'nullable',
           'rodillas_ultimos7dias'=>'nullable',
           'problemas_organos_tobillos_pies'=>'nullable',
           'tobillos_pies_laboral_casa'=>'nullable',
           'tobillos_pies_ultimos7dias'=>'nullable',
           'problemas_espalda_baja_uno'=>'nullable',
           'problemas_espalda_baja_dos'=>'nullable',
           'problemas_espalda_baja_tres'=>'nullable',
           'problemas_espalda_baja_cuatro'=>'nullable',
           'problemas_espalda_baja_cinco'=>'nullable',
           'problemas_espalda_baja_seis'=>'nullable',
           'problemas_espalda_baja_siete'=>'nullable',
           'problemas_espalda_baja_ocho'=>'nullable',
           'problemas_espalda_baja_nueve'=>'nullable',
           'problemas_hombros_uno'=>'nullable',
           'problemas_hombros_dos'=>'nullable',
           'problemas_hombros_tres'=>'nullable',
           'problemas_hombros_cuatro'=>'nullable',
           'problemas_hombros_cinco'=>'nullable',
           'problemas_hombros_seis'=>'nullable',
           'problemas_hombros_siete'=>'nullable',
           'problemas_hombros_ocho'=>'nullable',
           'problemas_hombros_nueve'=>'nullable',
           'problemas_hombros_dies'=>'nullable',
           'problemas_cuello_uno'=>'nullable',
           'problemas_cuello_dos'=>'nullable',
           'problemas_cuello_tres'=>'nullable',
           'problemas_cuello_cuatro'=>'nullable',
           'problemas_cuello_cinco'=>'nullable',
           'problemas_cuello_seis'=>'nullable',
           'problemas_cuello_siete'=>'nullable',
           'problemas_cuello_ocho'=>'nullable',
           'problemas_cuello_nueve'=>'nullable',
           'fecha_registro'=>'nullable',
           'lista_examen_id'=>'nullable',
           'cita_id'=>'nullable',
           ]);
            $cuestionarionordico->update([
              'datos_personales_anio'=>isset($data['datos_personales_anio'])? $data['datos_personales_anio']:null,
              'datos_personales_mes'=>isset($data['datos_personales_mes'])? $data['datos_personales_mes']:null,
              'datos_personales_horas'=>isset($data['datos_personales_horas'])? $data['datos_personales_horas']:null,
              'datos_personales_usted_es'=>isset($data['datos_personales_usted_es'])? $data['datos_personales_usted_es']:null,
              'problemas_organos_cuello'=>isset($data['problemas_organos_cuello'])? $data['problemas_organos_cuello']:null,
              'cuello_rendimiento_laboral_casa'=>isset($data['cuello_rendimiento_laboral_casa'])? $data['cuello_rendimiento_laboral_casa']:null,
              'cuello_ultimos7dias'=>isset($data['cuello_ultimos7dias'])? $data['cuello_ultimos7dias']:null,
              'problemas_organos_hombros'=>isset($data['problemas_organos_hombros'])? $data['problemas_organos_hombros']:null,
              'hombros_rendimiento_laboral_casa'=>isset($data['hombros_rendimiento_laboral_casa'])? $data['hombros_rendimiento_laboral_casa']:null,
              'hombros_ultimos7dias'=>isset($data['hombros_ultimos7dias'])? $data['hombros_ultimos7dias']:null,
              'problemas_organos_codos'=>isset($data['problemas_organos_codos'])? $data['problemas_organos_codos']:null,
              'codos_rendimiento_laboral_casa'=>isset($data['codos_rendimiento_laboral_casa'])? $data['codos_rendimiento_laboral_casa']:null,
              'codos_ultimos7dias'=>isset($data['codos_ultimos7dias'])? $data['codos_ultimos7dias']:null,
              'problemas_organos_muniecas'=>isset($data['problemas_organos_muniecas'])? $data['problemas_organos_muniecas']:null,
              'muniecas_rendimiento_laboral_casa'=>isset($data['muniecas_rendimiento_laboral_casa'])? $data['muniecas_rendimiento_laboral_casa']:null,
              'muniecas_ultimos7dias'=>isset($data['muniecas_ultimos7dias'])? $data['muniecas_ultimos7dias']:null,
              'problemas_organos_espalda_alta'=>isset($data['problemas_organos_espalda_alta'])? $data['problemas_organos_espalda_alta']:null,
              'espalda_alta_rendimiento_laboral_casa'=>isset($data['espalda_alta_rendimiento_laboral_casa'])? $data['espalda_alta_rendimiento_laboral_casa']:null,
              'espalda_alta_ultimos7dias'=>isset($data['espalda_alta_ultimos7dias'])? $data['espalda_alta_ultimos7dias']:null,
              'problemas_organos_espalda_baja'=>isset($data['problemas_organos_espalda_baja'])? $data['problemas_organos_espalda_baja']:null,
              'espalda_baja_rendimiento_laboral_casa'=>isset($data['espalda_baja_rendimiento_laboral_casa'])? $data['espalda_baja_rendimiento_laboral_casa']:null,
              'espalda_baja_ultimos7dias'=>isset($data['espalda_baja_ultimos7dias'])? $data['espalda_baja_ultimos7dias']:null,
              'problemas_organos_caderas_muslos'=>isset($data['problemas_organos_caderas_muslos'])? $data['problemas_organos_caderas_muslos']:null,
              'caderas_muslos_rendimiento_laboral_casa'=>isset($data['caderas_muslos_rendimiento_laboral_casa'])? $data['caderas_muslos_rendimiento_laboral_casa']:null,
              'caderas_muslos_ultimos7dias'=>isset($data['caderas_muslos_ultimos7dias'])? $data['caderas_muslos_ultimos7dias']:null,
              'problemas_organos_rodillas'=>isset($data['problemas_organos_rodillas'])? $data['problemas_organos_rodillas']:null,
              'rodillas_rendimiento_laboral_casa'=>isset($data['rodillas_rendimiento_laboral_casa'])? $data['rodillas_rendimiento_laboral_casa']:null,
              'rodillas_ultimos7dias'=>isset($data['rodillas_ultimos7dias'])? $data['rodillas_ultimos7dias']:null,
              'problemas_organos_tobillos_pies'=>isset($data['problemas_organos_tobillos_pies'])? $data['problemas_organos_tobillos_pies']:null,
              'tobillos_pies_laboral_casa'=>isset($data['tobillos_pies_laboral_casa'])? $data['tobillos_pies_laboral_casa']:null,
              'tobillos_pies_ultimos7dias'=>isset($data['tobillos_pies_ultimos7dias'])? $data['tobillos_pies_ultimos7dias']:null,
              'problemas_espalda_baja_uno'=>isset($data['problemas_espalda_baja_uno'])? $data['problemas_espalda_baja_uno']:null,
              'problemas_espalda_baja_dos'=>isset($data['problemas_espalda_baja_dos'])? $data['problemas_espalda_baja_dos']:null,
              'problemas_espalda_baja_tres'=>isset($data['problemas_espalda_baja_tres'])? $data['problemas_espalda_baja_tres']:null,
              'problemas_espalda_baja_cuatro'=>isset($data['problemas_espalda_baja_cuatro'])? $data['problemas_espalda_baja_cuatro']:null,
              'problemas_espalda_baja_cinco'=>isset($data['problemas_espalda_baja_cinco'])? $data['problemas_espalda_baja_cinco']:null,
              'problemas_espalda_baja_seis'=>isset($data['problemas_espalda_baja_seis'])? $data['problemas_espalda_baja_seis']:null,
              'problemas_espalda_baja_siete'=>isset($data['problemas_espalda_baja_siete'])? $data['problemas_espalda_baja_siete']:null,
              'problemas_espalda_baja_ocho'=>isset($data['problemas_espalda_baja_ocho'])? $data['problemas_espalda_baja_ocho']:null,
              'problemas_espalda_baja_nueve'=>isset($data['problemas_espalda_baja_nueve'])? $data['problemas_espalda_baja_nueve']:null,
              'problemas_hombros_uno'=>isset($data['problemas_hombros_uno'])? $data['problemas_hombros_uno']:null,
              'problemas_hombros_dos'=>isset($data['problemas_hombros_dos'])? $data['problemas_hombros_dos']:null,
              'problemas_hombros_tres'=>isset($data['problemas_hombros_tres'])? $data['problemas_hombros_tres']:null,
              'problemas_hombros_cuatro'=>isset($data['problemas_hombros_cuatro'])? $data['problemas_hombros_cuatro']:null,
              'problemas_hombros_cinco'=>isset($data['problemas_hombros_cinco'])? $data['problemas_hombros_cinco']:null,
              'problemas_hombros_seis'=>isset($data['problemas_hombros_seis'])? $data['problemas_hombros_seis']:null,
              'problemas_hombros_siete'=>isset($data['problemas_hombros_siete'])? $data['problemas_hombros_siete']:null,
              'problemas_hombros_ocho'=>isset($data['problemas_hombros_ocho'])? $data['problemas_hombros_ocho']:null,
              'problemas_hombros_nueve'=>isset($data['problemas_hombros_nueve'])? $data['problemas_hombros_nueve']:null,
              'problemas_hombros_dies'=>isset($data['problemas_hombros_dies'])? $data['problemas_hombros_dies']:null,
              'problemas_cuello_uno'=>isset($data['problemas_cuello_uno'])? $data['problemas_cuello_uno']:null,
              'problemas_cuello_dos'=>isset($data['problemas_cuello_dos'])? $data['problemas_cuello_dos']:null,
              'problemas_cuello_tres'=>isset($data['problemas_cuello_tres'])? $data['problemas_cuello_tres']:null,
              'problemas_cuello_cuatro'=>isset($data['problemas_cuello_cuatro'])? $data['problemas_cuello_cuatro']:null,
              'problemas_cuello_cinco'=>isset($data['problemas_cuello_cinco'])? $data['problemas_cuello_cinco']:null,
              'problemas_cuello_seis'=>isset($data['problemas_cuello_seis'])? $data['problemas_cuello_seis']:null,
              'problemas_cuello_siete'=>isset($data['problemas_cuello_siete'])? $data['problemas_cuello_siete']:null,
              'problemas_cuello_ocho'=>isset($data['problemas_cuello_ocho'])? $data['problemas_cuello_ocho']:null,
              'problemas_cuello_nueve'=>isset($data['problemas_cuello_nueve'])? $data['problemas_cuello_nueve']:null
            ]);
        }

        $cuestionarionordico->save();
        return response()->json(['mensaje' => 'registro cuestionario nordico exitoso']);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CuestionarioNordico  $cuestionarioNordico
     * @return \Illuminate\Http\Response
     */
    public function destroy(CuestionarioNordico $cuestionarioNordico)
    {
        //
    }

    public function reporte($id){
        //$cita=Cita::find($id);
        set_time_limit(120);
        $cuestionarioNordico = CuestionarioNordico::find($id);
        $view=View::make('evaluacionmedica.reportes.cuestionarionordico',compact('cuestionarioNordico'));
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        $pdf->stream($view);
        return $pdf->stream();
    }
}
