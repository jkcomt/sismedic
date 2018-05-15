<?php

namespace App\Http\Controllers;

use App\Orina;
use Illuminate\Http\Request;
use Carbon\Carbon;


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
                    'otros'=>'nullable',
                    'conclusion_orina'=>'nullable',
                    'lista_examen_id'=>'nullable',
                    'cita_id'=>'nullable',
                  ]);

                $orina = Orina::create([
                    'color'=>$data['color'],
                    'aspecto'=>$data['aspecto'],
                    'densidad'=>$data['densidad'],
                    'ph'=>$data['ph'],
                    'glucosa'=>$data['glucosa'],
                    'bilirrubinas'=>$data['bilirrubinas'],
                    'cuerpos_cetonicos'=>$data['cuerpos_cetonicos'],
                    'proteinas'=>$data['proteinas'],
                    'urobilinogeno'=>$data['urobilinogeno'],
                    'nitritos'=>$data['nitritos'],
                    'hemoglobina'=>$data['hemoglobina'],
                    'sangre'=>$data['sangre'],
                    'leucocitos'=>$data['leucocitos'],
                    'hematies'=>$data['hematies'],
                    'celulas_epiteliales'=>$data['celulas_epiteliales'],
                    'cilindros'=>$data['cilindros'],
                    'cristales'=>$data['cristales'],
                    'germenes'=>$data['germenes'],
                    'filamentos_mucoides'=>$data['filamentos_mucoides'],
                    'otros'=>$data['otros'],
                    'conclusion_orina'=>$data['conclusion_orina'],
                    'fecha_registro'=>Carbon::now(),
                    'lista_examen_id'=>$data['lista_examen_id'],
                    'cita_id'=>$data['cita_id'],
                    'estado'=>true
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
                          'lista_examen_id'=>'nullable',
                          'cita_id'=>'nullable',
                        ]);

                      $orina->update([
                          'color'=>$data['color'],
                          'aspecto'=>$data['aspecto'],
                          'densidad'=>$data['densidad'],
                          'ph'=>$data['ph'],
                          'glucosa'=>$data['glucosa'],
                          'bilirrubinas'=>$data['bilirrubinas'],
                          'cuerpos_cetonicos'=>$data['cuerpos_cetonicos'],
                          'proteinas'=>$data['proteinas'],
                          'urobilinogeno'=>$data['urobilinogeno'],
                          'nitritos'=>$data['nitritos'],
                          'hemoglobina'=>$data['hemoglobina'],
                          'sangre'=>$data['sangre'],
                          'leucocitos'=>$data['leucocitos'],
                          'hematies'=>$data['hematies'],
                          'celulas_epiteliales'=>$data['celulas_epiteliales'],
                          'cilindros'=>$data['cilindros'],
                          'cristales'=>$data['cristales'],
                          'germenes'=>$data['germenes'],
                          'filamentos_mucoides'=>$data['filamentos_mucoides'],
                          'otros'=>$data['otros'],
                          'conclusion_orina'=>$data['conclusion_orina'],
                          'fecha_registro'=>Carbon::now(),
                          'lista_examen_id'=>$data['lista_examen_id'],
                          'cita_id'=>$data['cita_id'],
                          'estado'=>true
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
