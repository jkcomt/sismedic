<?php

namespace App\Http\Controllers;

use App\Orina;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class OrinaController extends Controller
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
                    'color'=>'nullable',
                    'aspecto'=>'nullable',
                    'densidad'=>'nullable',
                    'ph'=>'nullable',
                    'glucosa'=>'nullable',
                    'bilirrubinas'=>'nullable',
                    'cuerpos_cetonicos'=>'nullable',
                    'proteinas'=>'nullable',
                    'urobilinogeno'=>'nullable',
                    'nitritos'=>'nullable',
                    'hemoglobina'=>'nullable',
                    'sangre'=>'nullable',
                    'leucocitos'=>'nullable',
                    'hematies'=>'nullable',
                    'celulas_epiteliales'=>'nullable',
                    'cilindros'=>'nullable',
                    'cristales'=>'nullable',
                    'germenes'=>'nullable',
                    'filamentos_mucoides'=>'nullable',
                    'dosaje_cocaina'=>'nullable',
                    'dosaje_marihuana'=>'nullable',
                    'otros'=>'nullable',
                    'conclusion_orina'=>'nullable',
                    'lista_examen_id'=>'nullable',
                    'cita_id'=>'nullable',
                  ]);

                $orina = Orina::create([
                    'color'=>isset($data['color'])? $data['color']:null,
                    'aspecto'=>isset($data['aspecto'])? $data['aspecto']:null,
                    'densidad'=>isset($data['densidad'])? $data['densidad']:null,
                    'ph'=>isset($data['ph'])? $data['ph']:null,
                    'glucosa'=>isset($data['glucosa'])? $data['glucosa']:null,
                    'bilirrubinas'=>isset($data['bilirrubinas'])? $data['bilirrubinas']:null,
                    'cuerpos_cetonicos'=>isset($data['cuerpos_cetonicos'])? $data['cuerpos_cetonicos']:null,
                    'proteinas'=>isset($data['proteinas'])? $data['proteinas']:null,
                    'urobilinogeno'=>isset($data['urobilinogeno'])? $data['urobilinogeno']:null,
                    'nitritos'=>isset($data['nitritos'])? $data['nitritos']:null,
                    'hemoglobina'=>isset($data['hemoglobina'])? $data['hemoglobina']:null,
                    'sangre'=>isset($data['sangre'])? $data['sangre']:null,
                    'leucocitos'=>isset($data['leucocitos'])? $data['leucocitos']:null,
                    'hematies'=>isset($data['hematies'])? $data['hematies']:null,
                    'celulas_epiteliales'=>isset($data['celulas_epiteliales'])? $data['celulas_epiteliales']:null,
                    'cilindros'=>isset($data['cilindros'])? $data['cilindros']:null,
                    'cristales'=>isset($data['cristales'])? $data['cristales']:null,
                    'germenes'=>isset($data['germenes'])? $data['germenes']:null,
                    'filamentos_mucoides'=>isset($data['filamentos_mucoides'])? $data['filamentos_mucoides']:null,
                    'otros'=>isset($data['otros'])? $data['otros']:null,
                    'conclusion_orina'=>isset($data['conclusion_orina'])? $data['conclusion_orina']:null,
                    'dosaje_cocaina'=>isset($data['dosaje_cocaina'])? $data['dosaje_cocaina']:null,
                    'dosaje_marihuana'=>isset($data['dosaje_marihuana'])? $data['dosaje_marihuana']:null,
                    'fecha_registro'=>Carbon::now(),
                    'lista_examen_id'=>isset($data['lista_examen_id'])? $data['lista_examen_id']:null,
                    'cita_id'=>isset($data['cita_id'])? $data['cita_id']:null,
                    'estado'=>true,
                    'user_id'=>Auth::user()->id
                ]);

                return response()->json(['mensaje' => 'registro exitoso']);
              }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Orina  $orina
     * @return \Illuminate\Http\Response
     */
    public function show(Orina $orina)
    {



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Orina  $orina
     * @return \Illuminate\Http\Response
     */
    public function edit(Orina $orina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Orina  $orina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
                $orina = Orina::find($request['orina_id']);
                    if(request()->ajax())
                    {
                      $data = request()->validate([
                          'color'=>'nullable',
                          'aspecto'=>'nullable',
                          'densidad'=>'nullable',
                          'ph'=>'nullable',
                          'glucosa'=>'nullable',
                          'bilirrubinas'=>'nullable',
                          'cuerpos_cetonicos'=>'nullable',
                          'proteinas'=>'nullable',
                          'urobilinogeno'=>'nullable',
                          'nitritos'=>'nullable',
                          'hemoglobina'=>'nullable',
                          'sangre'=>'nullable',
                          'leucocitos'=>'nullable',
                          'hematies'=>'nullable',
                          'celulas_epiteliales'=>'nullable',
                          'cilindros'=>'nullable',
                          'cristales'=>'nullable',
                          'germenes'=>'nullable',
                          'filamentos_mucoides'=>'nullable',
                          'otros'=>'nullable',
                          'conclusion_orina'=>'nullable',
                            'dosaje_cocaina'=>'nullable',
                            'dosaje_marihuana'=>'nullable',
                          'lista_examen_id'=>'nullable',
                          'cita_id'=>'nullable',
                        ]);

                      $orina->update([
                        'color'=>isset($data['color'])? $data['color']:null,
                        'aspecto'=>isset($data['aspecto'])? $data['aspecto']:null,
                        'densidad'=>isset($data['densidad'])? $data['densidad']:null,
                        'ph'=>isset($data['ph'])? $data['ph']:null,
                        'glucosa'=>isset($data['glucosa'])? $data['glucosa']:null,
                        'bilirrubinas'=>isset($data['bilirrubinas'])? $data['bilirrubinas']:null,
                        'cuerpos_cetonicos'=>isset($data['cuerpos_cetonicos'])? $data['cuerpos_cetonicos']:null,
                        'proteinas'=>isset($data['proteinas'])? $data['proteinas']:null,
                        'urobilinogeno'=>isset($data['urobilinogeno'])? $data['urobilinogeno']:null,
                        'nitritos'=>isset($data['nitritos'])? $data['nitritos']:null,
                        'hemoglobina'=>isset($data['hemoglobina'])? $data['hemoglobina']:null,
                        'sangre'=>isset($data['sangre'])? $data['sangre']:null,
                        'leucocitos'=>isset($data['leucocitos'])? $data['leucocitos']:null,
                        'hematies'=>isset($data['hematies'])? $data['hematies']:null,
                        'celulas_epiteliales'=>isset($data['celulas_epiteliales'])? $data['celulas_epiteliales']:null,
                        'cilindros'=>isset($data['cilindros'])? $data['cilindros']:null,
                        'cristales'=>isset($data['cristales'])? $data['cristales']:null,
                        'germenes'=>isset($data['germenes'])? $data['germenes']:null,
                        'filamentos_mucoides'=>isset($data['filamentos_mucoides'])? $data['filamentos_mucoides']:null,
                        'otros'=>isset($data['otros'])? $data['otros']:null,
                        'conclusion_orina'=>isset($data['conclusion_orina'])? $data['conclusion_orina']:null,
                        'dosaje_cocaina'=>isset($data['dosaje_cocaina'])? $data['dosaje_cocaina']:null,
                        'dosaje_marihuana'=>isset($data['dosaje_marihuana'])? $data['dosaje_marihuana']:null,
                        'fecha_registro'=>Carbon::now(),
                        'lista_examen_id'=>isset($data['lista_examen_id'])? $data['lista_examen_id']:null,
                        'cita_id'=>isset($data['cita_id'])? $data['cita_id']:null,
                        'user_id'=>Auth::user()->id
                      ]);
                      $orina->save();
                      return response()->json(['mensaje' => 'registro actualizado']);
                    }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Orina  $orina
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orina $orina)
    {
        //
    }
}
