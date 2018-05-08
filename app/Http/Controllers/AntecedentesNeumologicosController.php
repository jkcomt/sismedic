<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\AntecedentesNeumologicos;
use Illuminate\Http\Request;

class AntecedentesNeumologicosController extends Controller
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
          'asma'=>'nullable',
          'txtasma'=>'required_if:asma,==,1',
          'txtedadasma'=>'required_if:asma,==,1',
          'txtultimacrisisasma'=>'required_if:asma,==,1',
          'rinitis'=>'nullable',
          'epoc'=>'nullable',
          'tosnocturna'=>'nullable',
          'otros_transtornos_nocturnos'=>'nullable',
          'txtotros_transtornos_nocturnos'=>'required_if:otros_transtornos_nocturnos,==,1',
          'antecedentes_cardiovascular_uno'=>'nullable',
          'antecedentes_cardiovascular_dos'=>'nullable',
          'antecedentes_cardiovascular_tres'=>'nullable',
          'antecedentes_cardiovascular_cuatro'=>'nullable',
          'antecedentes_cardiovascular_cinco'=>'nullable'
        ]);


          $antecedentesNeumologicos=AntecedentesNeumologicos::create([
            'asma'=>isset($data['asma'])?$data['asma']:null,
            'asma_descripcion'=>isset($data['txtasma'])?$data['txtasma']:null,
            'asma_edad_dx'=>isset($data['txtedadasma'])?$data['txtedadasma']:null,
            'asma_ultima_crisis'=>isset($data['txtultimacrisisasma'])?$data['txtultimacrisisasma']:null,
            'rinitis'=>isset($data['rinitis'])?$data['rinitis']:null,
            'epoc'=>isset($data['epoc'])?$data['epoc']:null,
            'tos_nocturna'=>isset($data['tosnocturna'])?$data['tosnocturna']:null,
            'otros_transtornos_nocturnos'=>isset($data['otros_transtornos_nocturnos'])?$data['otros_transtornos_nocturnos']:null,
            'otros_transtornos_nocturnos_descripcion'=>isset($data['txtotros_transtornos_nocturnos'])?$data['txtotros_transtornos_nocturnos']:null,
            'antecedentes_cardiovascular_uno'=>isset($data['antecedentes_cardiovascular_uno'])?$data['antecedentes_cardiovascular_uno']:null,
            'antecedentes_cardiovascular_dos'=>isset($data['antecedentes_cardiovascular_dos'])?$data['antecedentes_cardiovascular_dos']:null,
            'antecedentes_cardiovascular_tres'=>isset($data['antecedentes_cardiovascular_tres'])?$data['antecedentes_cardiovascular_tres']:null,
            'antecedentes_cardiovascular_cuatro'=>isset($data['antecedentes_cardiovascular_cuatro'])?$data['antecedentes_cardiovascular_cuatro']:null,
            'antecedentes_cardiovascular_cinco'=>isset($data['antecedentes_cardiovascular_cinco'])?$data['antecedentes_cardiovascular_cinco']:null,
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
     * @param  \App\AntecedentesNeumologicos  $antecedentesNeumologicos
     * @return \Illuminate\Http\Response
     */
    public function show(AntecedentesNeumologicos $antecedentesNeumologicos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AntecedentesNeumologicos  $antecedentesNeumologicos
     * @return \Illuminate\Http\Response
     */
    public function edit(AntecedentesNeumologicos $antecedentesNeumologicos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AntecedentesNeumologicos  $antecedentesNeumologicos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $antecedentesNeumologicos=AntecedentesNeumologicos::find($request['antecedentesneumologicos_id']);
      if(request()->ajax())
      {

        $data=request()->validate([
          'paciente_id'=>'required',
          'asma'=>'nullable',
          'txtasma'=>'required_if:asma,==,1',
          'txtedadasma'=>'required_if:asma,==,1',
          'txtultimacrisisasma'=>'required_if:asma,==,1',
          'rinitis'=>'nullable',
          'epoc'=>'nullable',
          'tosnocturna'=>'nullable',
          'otros_transtornos_nocturnos'=>'nullable',
          'txtotros_transtornos_nocturnos'=>'required_if:otros_transtornos_nocturnos,==,1',
          'antecedentes_cardiovascular_uno'=>'nullable',
          'antecedentes_cardiovascular_dos'=>'nullable',
          'antecedentes_cardiovascular_tres'=>'nullable',
          'antecedentes_cardiovascular_cuatro'=>'nullable',
          'antecedentes_cardiovascular_cinco'=>'nullable'
        ]);

        $antecedentesNeumologicos->update([
          'asma'=>isset($data['asma'])?$data['asma']:null,
          'asma_descripcion'=>isset($data['txtasma'])?$data['txtasma']:null,
          'asma_edad_dx'=>isset($data['txtedadasma'])?$data['txtedadasma']:null,
          'asma_ultima_crisis'=>isset($data['txtultimacrisisasma'])?$data['txtultimacrisisasma']:null,
          'rinitis'=>isset($data['rinitis'])?$data['rinitis']:null,
          'epoc'=>isset($data['epoc'])?$data['epoc']:null,
          'tos_nocturna'=>isset($data['tosnocturna'])?$data['tosnocturna']:null,
          'otros_transtornos_nocturnos'=>isset($data['otros_transtornos_nocturnos'])?$data['otros_transtornos_nocturnos']:null,
          'otros_transtornos_nocturnos_descripcion'=>isset($data['txtotros_transtornos_nocturnos'])?$data['txtotros_transtornos_nocturnos']:null,
          'antecedentes_cardiovascular_uno'=>isset($data['antecedentes_cardiovascular_uno'])?$data['antecedentes_cardiovascular_uno']:null,
          'antecedentes_cardiovascular_dos'=>isset($data['antecedentes_cardiovascular_dos'])?$data['antecedentes_cardiovascular_dos']:null,
          'antecedentes_cardiovascular_tres'=>isset($data['antecedentes_cardiovascular_tres'])?$data['antecedentes_cardiovascular_tres']:null,
          'antecedentes_cardiovascular_cuatro'=>isset($data['antecedentes_cardiovascular_cuatro'])?$data['antecedentes_cardiovascular_cuatro']:null,
          'antecedentes_cardiovascular_cinco'=>isset($data['antecedentes_cardiovascular_cinco'])?$data['antecedentes_cardiovascular_cinco']:null,
          'fecha_registro'=>Carbon::now(),
          'paciente_id'=>$data['paciente_id'],
          'estado'=>true
        ]);
        $antecedentesNeumologicos->save();
           return response()->json(['mensaje'=>"Registro Actualizado"]);
               }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AntecedentesNeumologicos  $antecedentesNeumologicos
     * @return \Illuminate\Http\Response
     */
    public function destroy(AntecedentesNeumologicos $antecedentesNeumologicos)
    {
        //
    }
}
