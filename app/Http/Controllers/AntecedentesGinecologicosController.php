<?php

namespace App\Http\Controllers;

use App\AntecedentesGinecologicos;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AntecedentesGinecologicosController extends Controller
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
              'fechaultimaregla'=>'nullable',
              'gestaciones'=>'nullable',
              'atermino'=>'nullable',
              'abortos'=>'nullable',
              'prematuro'=>'nullable',
              'vivos'=>'nullable',
              'menarquia'=>'nullable',
              'regimencatamenial'=>'nullable',
              'ultimoparto'=>'nullable',
              'txtanioultimoparto'=>'required_if:ultimoparto,==,1',
              'txtdescripcionultimoparto'=>'required_if:ultimoparto,==,1',
              'papanocolau'=>'nullable',
              'txtaniopapanocolau'=>'required_if:papanocolau,==,1',
              'txtdescripcionpapanocolau'=>'required_if:papanocolau,==,1',
              'ultimamamografia'=>'nullable',
              'txtanioultimamamografia'=>'required_if:ultimamamografia,==,1',
              'txtdescripcionultimamamografia'=>'required_if:ultimamamografia,==,1',
              'incotinenciaurinaria'=>'nullable',
              'txtanioincotinenciaurinaria'=>'required_if:incotinenciaurinaria,==,1',
              'txtdescripcionincotinenciaurinaria'=>'required_if:incotinenciaurinaria,==,1',
              'ultimoginecologico'=>'nullable',
              'txtanioultimoginecologico'=>'required_if:ultimoginecologico,==,1',
              'txtdescripcionultimoginecologico'=>'required_if:ultimoginecologico,==,1',
              'UsoAnticonceptivo'=>'nullable',
              'txtUsoAnticonceptivo'=>'required_if:UsoAnticonceptivo,==,1',
              'otrosantecedentes'=>'nullable',
              'txtotrosantecedentes'=>'required_if:otrosantecedentes,==,1',
              'cancercervix'=>'nullable',
              'txtaniocancercervix'=>'required_if:cancercervix,==,1',
              'txtdescripcioncancercervix'=>'required_if:cancercervix,==,1',
              'cancermama'=>'nullable',
              'txtaniocancermama'=>'required_if:cancermama,==,1',
              'txtdescripcioncancermama'=>'required_if:cancermama,==,1',
          ]);
          $antecedentesGinecologicos=AntecedentesGinecologicos::create([
            'fecha_ultima_regla'=>isset($data['fechaultimaregla'])?$data['fechaultimaregla']:null,
              'gestaciones'=>isset($data['gestaciones'])?$data['gestaciones']:null,
              'atermino'=>isset($data['atermino'])?$data['atermino']:null,
              'abortos'=>isset($data['abortos'])?$data['abortos']:null,
              'prematuro'=>isset($data['prematuro'])?$data['prematuro']:null,
              'vivos'=>isset($data['vivos'])?$data['vivos']:null,
            'menarquia'=>isset($data['menarquia'])?$data['menarquia']:null,
            'regimen_catamenial'=>isset($data['regimencatamenial'])?$data['regimencatamenial']:null,
              'ultimo_parto'=>isset($data['ultimoparto'])?$data['ultimoparto']:null,
            'ultimo_parto_anio'=>isset($data['txtanioultimoparto'])?$data['txtanioultimoparto']:null,
            'ultimo_parto_descripcion'=>isset($data['txtdescripcionultimoparto'])?$data['txtdescripcionultimoparto']:null,
              'ultimo_papanocolau'=>isset($data['papanocolau'])?$data['papanocolau']:null,
            'ultimo_papanocolau_anio'=>isset($data['txtaniopapanocolau'])?$data['txtaniopapanocolau']:null,
            'ultimo_papanocolau_descripcion'=>isset($data['txtdescripcionpapanocolau'])?$data['txtdescripcionpapanocolau']:null,
              'ultima_Mamografia'=>isset($data['ultimamamografia'])?$data['ultimamamografia']:null,
            'ultima_Mamografia_anio'=>isset($data['txtanioultimamamografia'])?$data['txtanioultimamamografia']:null,
            'ultima_Mamografia_descripcion'=>isset($data['txtdescripcionultimamamografia'])?$data['txtdescripcionultimamamografia']:null,
              'incontinencia_urinaria'=>isset($data['incotinenciaurinaria'])?$data['incotinenciaurinaria']:null,
            'incontinencia_urinaria_anio'=>isset($data['txtanioincotinenciaurinaria'])?$data['txtanioincotinenciaurinaria']:null,
            'incontinencia_urinaria_descripcion'=>isset($data['txtdescripcionincotinenciaurinaria'])?$data['txtdescripcionincotinenciaurinaria']:null,
              'ultimo_chequeo_ginecologico'=>isset($data['ultimoginecologico'])?$data['ultimoginecologico']:null,
            'ultimo_chequeo_ginecologico_anio'=>isset($data['txtanioultimoginecologico'])?$data['txtanioultimoginecologico']:null,
            'ultimo_chequeo_ginecologico_descripcion'=>isset($data['txtdescripcionultimoginecologico'])?$data['txtdescripcionultimoginecologico']:null,
              'uso_anticonceptivo'=>isset($data['UsoAnticonceptivo'])?$data['UsoAnticonceptivo']:null,
            'uso_anticonceptivo_descripcion'=>isset($data['txtUsoAnticonceptivo'])?$data['txtUsoAnticonceptivo']:null,
              'otros_antecedentes'=>isset($data['otrosantecedentes'])?$data['otrosantecedentes']:null,
            'otros_antecedentes_descripcion'=>isset($data['txtotrosantecedentes'])?$data['txtotrosantecedentes']:null,
              'cancer_cervix'=>isset($data['cancercervix'])?$data['cancercervix']:null,
            'cancer_cervix_anio'=>isset($data['txtaniocancercervix'])?$data['txtaniocancercervix']:null,
            'cancer_cervix_descripcion'=>isset($data['txtdescripcioncancercervix'])?$data['txtdescripcioncancercervix']:null,
              'cancer_mama'=>isset($data['cancermama'])?$data['cancermama']:null,
            'cancer_mama_anio'=>isset($data['txtaniocancermama'])?$data['txtaniocancermama']:null,
            'cancer_mama_descripcion'=>isset($data['txtdescripcioncancermama'])?$data['txtdescripcioncancermama']:null,
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
     * @param  \App\AntecedentesGinecologicos  $antecedentesGinecologicos
     * @return \Illuminate\Http\Response
     */
    public function show(AntecedentesGinecologicos $antecedentesGinecologicos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AntecedentesGinecologicos  $antecedentesGinecologicos
     * @return \Illuminate\Http\Response
     */
    public function edit(AntecedentesGinecologicos $antecedentesGinecologicos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AntecedentesGinecologicos  $antecedentesGinecologicos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

      if(request()->ajax())
      {
            $antecedentesGinecologicos=AntecedentesGinecologicos::find($request['antecedentesginecologicos_id']);
          $data=request()->validate([
              'paciente_id'=>'required',
              'fechaultimaregla'=>'nullable',
              'gestaciones'=>'nullable',
              'atermino'=>'nullable',
              'abortos'=>'nullable',
              'prematuro'=>'nullable',
              'vivos'=>'nullable',
              'menarquia'=>'nullable',
              'regimencatamenial'=>'nullable',
              'ultimoparto'=>'nullable',
              'txtanioultimoparto'=>'required_if:ultimoparto,==,1',
              'txtdescripcionultimoparto'=>'required_if:ultimoparto,==,1',
              'papanocolau'=>'nullable',
              'txtaniopapanocolau'=>'required_if:papanocolau,==,1',
              'txtdescripcionpapanocolau'=>'required_if:papanocolau,==,1',
              'ultimamamografia'=>'nullable',
              'txtanioultimamamografia'=>'required_if:ultimamamografia,==,1',
              'txtdescripcionultimamamografia'=>'required_if:ultimamamografia,==,1',
              'incotinenciaurinaria'=>'nullable',
              'txtanioincotinenciaurinaria'=>'required_if:incotinenciaurinaria,==,1',
              'txtdescripcionincotinenciaurinaria'=>'required_if:incotinenciaurinaria,==,1',
              'ultimoginecologico'=>'nullable',
              'txtanioultimoginecologico'=>'required_if:ultimoginecologico,==,1',
              'txtdescripcionultimoginecologico'=>'required_if:ultimoginecologico,==,1',
              'UsoAnticonceptivo'=>'nullable',
              'txtUsoAnticonceptivo'=>'required_if:UsoAnticonceptivo,==,1',
              'otrosantecedentes'=>'nullable',
              'txtotrosantecedentes'=>'required_if:otrosantecedentes,==,1',
              'cancercervix'=>'nullable',
              'txtaniocancercervix'=>'required_if:cancercervix,==,1',
              'txtdescripcioncancercervix'=>'required_if:cancercervix,==,1',
              'cancermama'=>'nullable',
              'txtaniocancermama'=>'required_if:cancermama,==,1',
              'txtdescripcioncancermama'=>'required_if:cancermama,==,1',
          ]);
          $antecedentesGinecologicos->update([
            'fecha_ultima_regla'=>isset($data['fechaultimaregla'])?$data['fechaultimaregla']:null,
              'gestaciones'=>isset($data['gestaciones'])?$data['gestaciones']:null,
              'atermino'=>isset($data['atermino'])?$data['atermino']:null,
              'abortos'=>isset($data['abortos'])?$data['abortos']:null,
              'prematuro'=>isset($data['prematuro'])?$data['prematuro']:null,
              'vivos'=>isset($data['vivos'])?$data['vivos']:null,
            'menarquia'=>isset($data['menarquia'])?$data['menarquia']:null,
            'regimen_catamenial'=>isset($data['regimencatamenial'])?$data['regimencatamenial']:null,
              'ultimo_parto'=>isset($data['ultimoparto'])?$data['ultimoparto']:null,
            'ultimo_parto_anio'=>isset($data['txtanioultimoparto'])?$data['txtanioultimoparto']:null,
            'ultimo_parto_descripcion'=>isset($data['txtdescripcionultimoparto'])?$data['txtdescripcionultimoparto']:null,
              'ultimo_papanocolau'=>isset($data['papanocolau'])?$data['papanocolau']:null,
            'ultimo_papanocolau_anio'=>isset($data['txtaniopapanocolau'])?$data['txtaniopapanocolau']:null,
            'ultimo_papanocolau_descripcion'=>isset($data['txtdescripcionpapanocolau'])?$data['txtdescripcionpapanocolau']:null,
              'ultima_Mamografia'=>isset($data['ultimamamografia'])?$data['ultimamamografia']:null,
            'ultima_Mamografia_anio'=>isset($data['txtanioultimamamografia'])?$data['txtanioultimamamografia']:null,
            'ultima_Mamografia_descripcion'=>isset($data['txtdescripcionultimamamografia'])?$data['txtdescripcionultimamamografia']:null,
              'incontinencia_urinaria'=>isset($data['incotinenciaurinaria'])?$data['incotinenciaurinaria']:null,
            'incontinencia_urinaria_anio'=>isset($data['txtanioincotinenciaurinaria'])?$data['txtanioincotinenciaurinaria']:null,
            'incontinencia_urinaria_descripcion'=>isset($data['txtdescripcionincotinenciaurinaria'])?$data['txtdescripcionincotinenciaurinaria']:null,
              'ultimo_chequeo_ginecologico'=>isset($data['ultimoginecologico'])?$data['ultimoginecologico']:null,
            'ultimo_chequeo_ginecologico_anio'=>isset($data['txtanioultimoginecologico'])?$data['txtanioultimoginecologico']:null,
            'ultimo_chequeo_ginecologico_descripcion'=>isset($data['txtdescripcionultimoginecologico'])?$data['txtdescripcionultimoginecologico']:null,
              'uso_anticonceptivo'=>isset($data['UsoAnticonceptivo'])?$data['UsoAnticonceptivo']:null,
            'uso_anticonceptivo_descripcion'=>isset($data['txtUsoAnticonceptivo'])?$data['txtUsoAnticonceptivo']:null,
              'otros_antecedentes'=>isset($data['otrosantecedentes'])?$data['otrosantecedentes']:null,
            'otros_antecedentes_descripcion'=>isset($data['txtotrosantecedentes'])?$data['txtotrosantecedentes']:null,
              'cancer_cervix'=>isset($data['cancercervix'])?$data['cancercervix']:null,
            'cancer_cervix_anio'=>isset($data['txtaniocancercervix'])?$data['txtaniocancercervix']:null,
            'cancer_cervix_descripcion'=>isset($data['txtdescripcioncancercervix'])?$data['txtdescripcioncancercervix']:null,
              'cancer_mama'=>isset($data['cancermama'])?$data['cancermama']:null,
            'cancer_mama_anio'=>isset($data['txtaniocancermama'])?$data['txtaniocancermama']:null,
            'cancer_mama_descripcion'=>isset($data['txtdescripcioncancermama'])?$data['txtdescripcioncancermama']:null,
             'fecha_registro'=>Carbon::now(),
             'paciente_id'=>$data['paciente_id'],
              'estado'=>true
          ]);
          $antecedentesGinecologicos->save();
              return response()->json(['mensaje'=>"Registro exitoso"]);
      }



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AntecedentesGinecologicos  $antecedentesGinecologicos
     * @return \Illuminate\Http\Response
     */
    public function destroy(AntecedentesGinecologicos $antecedentesGinecologicos)
    {
        //
    }
}
