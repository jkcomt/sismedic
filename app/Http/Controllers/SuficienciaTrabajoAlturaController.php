<?php

namespace App\Http\Controllers;

use App\SuficienciaTrabajoAltura;
use App\Cita;
use Illuminate\Http\Request;
use Carbon\Carbon;
use View;

class SuficienciaTrabajoAlturaController extends Controller
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
            'optradio'=>'nullable',
            'anamnesis_item1'=>'nullable',
            'anamnesis_item2'=>'nullable',
            'anamnesis_item3'=>'nullable',
            'anamnesis_item4'=>'nullable',
            'anamnesis_item5'=>'nullable',
            'anamnesis_item6'=>'nullable',
            'anamnesis_item7'=>'nullable',
            'anamnesis_item8'=>'nullable',
            'anamnesis_item9'=>'nullable',
            'anamnesis_item10'=>'nullable',
            'anamnesis_comentarios'=>'nullable',
            'exploracion_fisica_fc'=>'nullable',
            'exploracion_fisica_fr'=>'nullable',
            'exploracion_fisica_pa'=>'nullable',
            'exploracion_fisica_talla'=>'nullable',
            'exploracion_fisica_peso'=>'nullable',
            'exploracion_fisica_imc'=>'nullable',
            'exploracion_fisica_perimetro_cuello'=>'nullable',
            'exploracion_fisica_perimetro_cintura'=>'nullable',
            'exploracion_fisica_perimetro_cadera'=>'nullable',
            'exploracion_fisica_icc'=>'nullable',
            'exploracion_fisica_perimetro_toracico_inspiracion'=>'nullable',
            'exploracion_fisica_perimetro_toracico_espiracion'=>'nullable',
            'exploracion_fisica_item_1'=>'nullable',
            'exploracion_fisica_item_2'=>'nullable',
            'exploracion_fisica_item_3'=>'nullable',
            'exploracion_fisica_item_4'=>'nullable',
            'exploracion_fisica_item_5'=>'nullable',
            'exploracion_fisica_item_6'=>'nullable',
            'exploracion_fisica_item_7'=>'nullable',
            'exploracion_fisica_item_8'=>'nullable',
            'exploracion_fisica_item_9'=>'nullable',
            'exploracion_fisica_item_10'=>'nullable',
            'exploracion_fisica_detalle'=>'nullable',
            'prueba_auxiliar_item_1'=>'nullable',
            'prueba_auxiliar_item_2'=>'nullable',
            'prueba_auxiliar_item_3'=>'nullable',
            'prueba_auxiliar_item_4'=>'nullable',
            'prueba_auxiliar_item_5'=>'nullable',
            'prueba_auxiliar_detalle_medicina'=>'nullable',
            'prueba_auxiliar_otro'=>'nullable',
            'conclusion_apto'=>'nullable',
            'desde'=>'nullable',
            'hasta'=>'nullable',
            'recomendacion'=>'nullable',
            'lista_examen_id'=>'nullable',
            'cita_id'=>'nullable'
          ]);

          $primera_aptiud="1";
          $revalidacion="0";
          if($data['optradio']=='primera_aptitud')
          {
            $primera_aptiud="1";
            $revalidacion="0";
          }
          else {
              $primera_aptiud="0";
              $revalidacion='1';
          }
          $trabajoaltura = SuficienciaTrabajoAltura::create([
            'primera_aptitud'=>$primera_aptiud,
            'revalidacion'=>$revalidacion,
            'anamnesis_item1'=>isset($data['anamnesis_item1'])? $data['anamnesis_item1']:0,
            'anamnesis_item2'=>isset($data['anamnesis_item2'])? $data['anamnesis_item2']:0,
            'anamnesis_item3'=>isset($data['anamnesis_item3'])? $data['anamnesis_item3']:0,
            'anamnesis_item4'=>isset($data['anamnesis_item4'])? $data['anamnesis_item4']:0,
            'anamnesis_item5'=>isset($data['anamnesis_item5'])? $data['anamnesis_item5']:0,
            'anamnesis_item6'=>isset($data['anamnesis_item6'])? $data['anamnesis_item6']:0,
            'anamnesis_item7'=>isset($data['anamnesis_item7'])? $data['anamnesis_item7']:0,
            'anamnesis_item8'=>isset($data['anamnesis_item8'])? $data['anamnesis_item8']:0,
            'anamnesis_item9'=>isset($data['anamnesis_item9'])? $data['anamnesis_item9']:0,
            'anamnesis_item10'=>isset($data['anamnesis_item10'])? $data['anamnesis_item10']:0,
            'anamnesis_comentarios'=>isset($data['anamnesis_comentarios'])? $data['anamnesis_comentarios']:null,
            'exploracion_fisica_fc'=>isset($data['exploracion_fisica_fc'])? $data['exploracion_fisica_fc']:null,
            'exploracion_fisica_fr'=>isset($data['exploracion_fisica_fr'])? $data['exploracion_fisica_fr']:null,
            'exploracion_fisica_pa'=>isset($data['exploracion_fisica_pa'])? $data['exploracion_fisica_pa']:null,
            'exploracion_fisica_talla'=>isset($data['exploracion_fisica_talla'])? $data['exploracion_fisica_talla']:null,
            'exploracion_fisica_peso'=>isset($data['exploracion_fisica_peso'])? $data['exploracion_fisica_peso']:null,
            'exploracion_fisica_imc'=>isset($data['exploracion_fisica_imc'])? $data['exploracion_fisica_imc']:null,
            'exploracion_fisica_perimetro_cuello'=>isset($data['exploracion_fisica_perimetro_cuello'])? $data['exploracion_fisica_perimetro_cuello']:null,
            'exploracion_fisica_perimetro_cintura'=>isset($data['exploracion_fisica_perimetro_cintura'])? $data['exploracion_fisica_perimetro_cintura']:null,
            'exploracion_fisica_perimetro_cadera'=>isset($data['exploracion_fisica_perimetro_cadera'])? $data['exploracion_fisica_perimetro_cadera']:null,
            'exploracion_fisica_icc'=>isset($data['exploracion_fisica_icc'])? $data['exploracion_fisica_icc']:null,
            'exploracion_fisica_perimetro_toracico_inspiracion'=>isset($data['exploracion_fisica_perimetro_toracico_inspiracion'])? $data['exploracion_fisica_perimetro_toracico_inspiracion']:null,
            'exploracion_fisica_perimetro_toracico_espiracion'=>isset($data['exploracion_fisica_perimetro_toracico_espiracion'])? $data['exploracion_fisica_perimetro_toracico_espiracion']:null,
            'exploracion_fisica_item_1'=>isset($data['exploracion_fisica_item_1'])? $data['exploracion_fisica_item_1']:0,
            'exploracion_fisica_item_2'=>isset($data['exploracion_fisica_item_2'])? $data['exploracion_fisica_item_2']:0,
            'exploracion_fisica_item_3'=>isset($data['exploracion_fisica_item_3'])? $data['exploracion_fisica_item_3']:0,
            'exploracion_fisica_item_4'=>isset($data['exploracion_fisica_item_4'])? $data['exploracion_fisica_item_4']:0,
            'exploracion_fisica_item_5'=>isset($data['exploracion_fisica_item_5'])? $data['exploracion_fisica_item_5']:0,
            'exploracion_fisica_item_6'=>isset($data['exploracion_fisica_item_6'])? $data['exploracion_fisica_item_6']:0,
            'exploracion_fisica_item_7'=>isset($data['exploracion_fisica_item_7'])? $data['exploracion_fisica_item_7']:0,
            'exploracion_fisica_item_8'=>isset($data['exploracion_fisica_item_8'])? $data['exploracion_fisica_item_8']:0,
            'exploracion_fisica_item_9'=>isset($data['exploracion_fisica_item_9'])? $data['exploracion_fisica_item_9']:0,
            'exploracion_fisica_item_10'=>isset($data['exploracion_fisica_item_10'])? $data['exploracion_fisica_item_10']:0,
            'exploracion_fisica_detalle'=>isset($data['exploracion_fisica_detalle'])? $data['exploracion_fisica_detalle']:null,
            'prueba_auxiliar_item_1'=>isset($data['prueba_auxiliar_item_1'])? $data['prueba_auxiliar_item_1']:0,
            'prueba_auxiliar_item_2'=>isset($data['prueba_auxiliar_item_2'])? $data['prueba_auxiliar_item_2']:0,
            'prueba_auxiliar_item_3'=>isset($data['prueba_auxiliar_item_3'])? $data['prueba_auxiliar_item_3']:0,
            'prueba_auxiliar_item_4'=>isset($data['prueba_auxiliar_item_4'])? $data['prueba_auxiliar_item_4']:0,
            'prueba_auxiliar_item_5'=>isset($data['prueba_auxiliar_item_5'])? $data['prueba_auxiliar_item_5']:0,
            'prueba_auxiliar_detalle_medicina'=>isset($data['prueba_auxiliar_detalle_medicina'])? $data['prueba_auxiliar_detalle_medicina']:null,
            'prueba_auxiliar_otro'=>isset($data['prueba_auxiliar_otro'])? $data['prueba_auxiliar_otro']:null,
            'conclusion_apto'=>isset($data['conclusion_apto'])? $data['conclusion_apto']:null,
            'desde'=>isset($data['desde'])? $data['desde']:null,
            'hasta'=>isset($data['hasta'])? $data['hasta']:null,
            'recomendacion'=>isset($data['recomendacion'])? $data['recomendacion']:null,
            'fecha_registro'=>Carbon::now(),
            'lista_examen_id'=>isset($data['lista_examen_id'])? $data['lista_examen_id']:null,
            'cita_id'=>isset($data['cita_id'])? $data['cita_id']:null,
            'estado'=>true
          ]);

          return response()->json(['mensaje' => 'registro exitoso']);
      }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SuficienciaTrabajoAltura  $suficienciaTrabajoAltura
     * @return \Illuminate\Http\Response
     */
    public function show(SuficienciaTrabajoAltura $suficienciaTrabajoAltura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SuficienciaTrabajoAltura  $suficienciaTrabajoAltura
     * @return \Illuminate\Http\Response
     */
    public function edit(SuficienciaTrabajoAltura $suficienciaTrabajoAltura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SuficienciaTrabajoAltura  $suficienciaTrabajoAltura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

          $trabajoaltura=SuficienciaTrabajoAltura::find($request['trabajo_altura_id']);
            if(request()->ajax()) {
                $data = request()->validate([
                  'optradio'=>'nullable',
                  'anamnesis_item1'=>'nullable',
                  'anamnesis_item2'=>'nullable',
                  'anamnesis_item3'=>'nullable',
                  'anamnesis_item4'=>'nullable',
                  'anamnesis_item5'=>'nullable',
                  'anamnesis_item6'=>'nullable',
                  'anamnesis_item7'=>'nullable',
                  'anamnesis_item8'=>'nullable',
                  'anamnesis_item9'=>'nullable',
                  'anamnesis_item10'=>'nullable',
                  'anamnesis_comentarios'=>'nullable',
                  'exploracion_fisica_fc'=>'nullable',
                  'exploracion_fisica_fr'=>'nullable',
                  'exploracion_fisica_pa'=>'nullable',
                  'exploracion_fisica_talla'=>'nullable',
                  'exploracion_fisica_peso'=>'nullable',
                  'exploracion_fisica_imc'=>'nullable',
                  'exploracion_fisica_perimetro_cuello'=>'nullable',
                  'exploracion_fisica_perimetro_cintura'=>'nullable',
                  'exploracion_fisica_perimetro_cadera'=>'nullable',
                  'exploracion_fisica_icc'=>'nullable',
                  'exploracion_fisica_perimetro_toracico_inspiracion'=>'nullable',
                  'exploracion_fisica_perimetro_toracico_espiracion'=>'nullable',
                  'exploracion_fisica_item_1'=>'nullable',
                  'exploracion_fisica_item_2'=>'nullable',
                  'exploracion_fisica_item_3'=>'nullable',
                  'exploracion_fisica_item_4'=>'nullable',
                  'exploracion_fisica_item_5'=>'nullable',
                  'exploracion_fisica_item_6'=>'nullable',
                  'exploracion_fisica_item_7'=>'nullable',
                  'exploracion_fisica_item_8'=>'nullable',
                  'exploracion_fisica_item_9'=>'nullable',
                  'exploracion_fisica_item_10'=>'nullable',
                  'exploracion_fisica_detalle'=>'nullable',
                  'prueba_auxiliar_item_1'=>'nullable',
                  'prueba_auxiliar_item_2'=>'nullable',
                  'prueba_auxiliar_item_3'=>'nullable',
                  'prueba_auxiliar_item_4'=>'nullable',
                  'prueba_auxiliar_item_5'=>'nullable',
                  'prueba_auxiliar_detalle_medicina'=>'nullable',
                  'prueba_auxiliar_otro'=>'nullable',
                  'conclusion_apto'=>'nullable',
                  'desde'=>'nullable',
                  'hasta'=>'nullable',
                  'recomendacion'=>'nullable',
                   'lista_examen_id'=>'nullable',
                   'cita_id'=>'nullable'
                ]);

      $primera_aptiud="";
      $revalidacion="";
      if($data['optradio']=='primera_aptitud')
      {
        $primera_aptiud="1";
        $revalidacion="0";
      }
      else {
          $primera_aptiud="0";
        $revalidacion='1';
      }
                $trabajoaltura->update([


                  'primera_aptitud'=>$primera_aptiud,
                  'revalidacion'=>$revalidacion,
                  'anamnesis_item1'=>isset($data['anamnesis_item1'])? $data['anamnesis_item1']:0,
                  'anamnesis_item2'=>isset($data['anamnesis_item2'])? $data['anamnesis_item2']:0,
                  'anamnesis_item3'=>isset($data['anamnesis_item3'])? $data['anamnesis_item3']:0,
                  'anamnesis_item4'=>isset($data['anamnesis_item4'])? $data['anamnesis_item4']:0,
                  'anamnesis_item5'=>isset($data['anamnesis_item5'])? $data['anamnesis_item5']:0,
                  'anamnesis_item6'=>isset($data['anamnesis_item6'])? $data['anamnesis_item6']:0,
                  'anamnesis_item7'=>isset($data['anamnesis_item7'])? $data['anamnesis_item7']:0,
                  'anamnesis_item8'=>isset($data['anamnesis_item8'])? $data['anamnesis_item8']:0,
                  'anamnesis_item9'=>isset($data['anamnesis_item9'])? $data['anamnesis_item9']:0,
                  'anamnesis_item10'=>isset($data['anamnesis_item10'])? $data['anamnesis_item10']:0,
                  'anamnesis_comentarios'=>isset($data['anamnesis_comentarios'])? $data['anamnesis_comentarios']:null,
                  'exploracion_fisica_fc'=>isset($data['exploracion_fisica_fc'])? $data['exploracion_fisica_fc']:null,
                  'exploracion_fisica_fr'=>isset($data['exploracion_fisica_fr'])? $data['exploracion_fisica_fr']:null,
                  'exploracion_fisica_pa'=>isset($data['exploracion_fisica_pa'])? $data['exploracion_fisica_pa']:null,
                  'exploracion_fisica_talla'=>isset($data['exploracion_fisica_talla'])? $data['exploracion_fisica_talla']:null,
                  'exploracion_fisica_peso'=>isset($data['exploracion_fisica_peso'])? $data['exploracion_fisica_peso']:null,
                  'exploracion_fisica_imc'=>isset($data['exploracion_fisica_imc'])? $data['exploracion_fisica_imc']:null,
                  'exploracion_fisica_perimetro_cuello'=>isset($data['exploracion_fisica_perimetro_cuello'])? $data['exploracion_fisica_perimetro_cuello']:null,
                  'exploracion_fisica_perimetro_cintura'=>isset($data['exploracion_fisica_perimetro_cintura'])? $data['exploracion_fisica_perimetro_cintura']:null,
                  'exploracion_fisica_perimetro_cadera'=>isset($data['exploracion_fisica_perimetro_cadera'])? $data['exploracion_fisica_perimetro_cadera']:null,
                  'exploracion_fisica_icc'=>isset($data['exploracion_fisica_icc'])? $data['exploracion_fisica_icc']:null,
                  'exploracion_fisica_perimetro_toracico_inspiracion'=>isset($data['exploracion_fisica_perimetro_toracico_inspiracion'])? $data['exploracion_fisica_perimetro_toracico_inspiracion']:null,
                  'exploracion_fisica_perimetro_toracico_espiracion'=>isset($data['exploracion_fisica_perimetro_toracico_espiracion'])? $data['exploracion_fisica_perimetro_toracico_espiracion']:null,
                  'exploracion_fisica_item_1'=>isset($data['exploracion_fisica_item_1'])? $data['exploracion_fisica_item_1']:0,
                  'exploracion_fisica_item_2'=>isset($data['exploracion_fisica_item_2'])? $data['exploracion_fisica_item_2']:0,
                  'exploracion_fisica_item_3'=>isset($data['exploracion_fisica_item_3'])? $data['exploracion_fisica_item_3']:0,
                  'exploracion_fisica_item_4'=>isset($data['exploracion_fisica_item_4'])? $data['exploracion_fisica_item_4']:0,
                  'exploracion_fisica_item_5'=>isset($data['exploracion_fisica_item_5'])? $data['exploracion_fisica_item_5']:0,
                  'exploracion_fisica_item_6'=>isset($data['exploracion_fisica_item_6'])? $data['exploracion_fisica_item_6']:0,
                  'exploracion_fisica_item_7'=>isset($data['exploracion_fisica_item_7'])? $data['exploracion_fisica_item_7']:0,
                  'exploracion_fisica_item_8'=>isset($data['exploracion_fisica_item_8'])? $data['exploracion_fisica_item_8']:0,
                  'exploracion_fisica_item_9'=>isset($data['exploracion_fisica_item_9'])? $data['exploracion_fisica_item_9']:0,
                  'exploracion_fisica_item_10'=>isset($data['exploracion_fisica_item_10'])? $data['exploracion_fisica_item_10']:0,
                  'exploracion_fisica_detalle'=>isset($data['exploracion_fisica_detalle'])? $data['exploracion_fisica_detalle']:null,
                  'prueba_auxiliar_item_1'=>isset($data['prueba_auxiliar_item_1'])? $data['prueba_auxiliar_item_1']:0,
                  'prueba_auxiliar_item_2'=>isset($data['prueba_auxiliar_item_2'])? $data['prueba_auxiliar_item_2']:0,
                  'prueba_auxiliar_item_3'=>isset($data['prueba_auxiliar_item_3'])? $data['prueba_auxiliar_item_3']:0,
                  'prueba_auxiliar_item_4'=>isset($data['prueba_auxiliar_item_4'])? $data['prueba_auxiliar_item_4']:0,
                  'prueba_auxiliar_item_5'=>isset($data['prueba_auxiliar_item_5'])? $data['prueba_auxiliar_item_5']:0,
                  'prueba_auxiliar_detalle_medicina'=>isset($data['prueba_auxiliar_detalle_medicina'])? $data['prueba_auxiliar_detalle_medicina']:null,
                  'prueba_auxiliar_otro'=>isset($data['prueba_auxiliar_otro'])? $data['prueba_auxiliar_otro']:null,
                  'conclusion_apto'=>isset($data['conclusion_apto'])? $data['conclusion_apto']:null,
                  'desde'=>isset($data['desde'])? $data['desde']:null,
                  'hasta'=>isset($data['hasta'])? $data['hasta']:null,
                  'recomendacion'=>isset($data['recomendacion'])? $data['recomendacion']:null,


                  // 'fecha_registro'=>Carbon::now(),
                  // 'lista_examen_id'=>isset($data['lista_examen_id'])? $data['']:null,
                  // 'cita_id'=>isset($data['cita_id'])? $data['']:null,
                  // 'estado'=>true
                ]);
                  $trabajoaltura->save();
                return response()->json(['mensaje' => 'registro actualizado']);
            }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SuficienciaTrabajoAltura  $suficienciaTrabajoAltura
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuficienciaTrabajoAltura $suficienciaTrabajoAltura)
    {
        //
    }


    public function reporte_certificacion_suficiencia_medica($id)
    {
      $cita=Cita::find($id);
      $view=View::make('evaluacionmedica.reportes.certificadosuficienciaaltura',compact('cita'));
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      $pdf->stream($view);
      return $pdf->stream();
    }


}
