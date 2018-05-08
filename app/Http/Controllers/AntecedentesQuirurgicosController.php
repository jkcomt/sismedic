<?php

namespace App\Http\Controllers;

use App\AntecedentesQuirurgicos;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AntecedentesQuirurgicosController extends Controller
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
              'apendicectomia'=>'nullable',
              'txtanioapendicectomia'=>'required_if:apendicectomia,==,1',
              'colecistectomia'=>'nullable',
              'txtaniocolecistectomia'=>'required_if:colecistectomia,==,1',
              'herniorrafiaumbilical'=>'nullable',
              'txtanioherniorrafiaumbilical'=>'required_if:herniorrafiaumbilical,==,1',
              'herniorrafiainguinal'=>'nullable',
              'txtanioherniorrafiainguinal'=>'required_if:herniorrafiainguinal,==,1',
              'ocular'=>'nullable',
              'txtocular'=>'required_if:ocular,==,1',
              'otorrino'=>'nullable',
              'txtotorrino'=>'required_if:otorrino,==,1',
              'obstetricia'=>'nullable',
              'ginecologia'=>'nullable',
              'txtginecologia'=>'required_if:ginecologia,==,1',
              'otrascirugias'=>'nullable',
              'otrascirugiasfecha'=>'required_if:otrascirugias,==,1',
              'otrascirugiasobser'=>'required_if:otrascirugias,==,1'

          ]);
          $antecedentesQuirurgicos=AntecedentesQuirurgicos::create([
              'apendicetomia'=>isset($data['apendicectomia'])?$data['apendicectomia']:null,
              'apendicetomia_anio'=>isset($data['txtanioapendicectomia'])?$data['txtanioapendicectomia']:null,
              'colecistectomia'=>isset($data['colecistectomia'])?$data['colecistectomia']:null,
              'colecistectomia_anio'=>isset($data['txtaniocolecistectomia'])?$data['txtaniocolecistectomia']:null,
              'herniorrafa_umbilical'=>isset($data['herniorrafiaumbilical'])?$data['herniorrafiaumbilical']:null,
              'herniorrafa_umbilical_anio'=>isset($data['txtanioherniorrafiaumbilical'])?$data['txtanioherniorrafiaumbilical']:null,
              'herniorrafa_inguinal'=>isset($data['herniorrafiainguinal'])?$data['herniorrafiainguinal']:null,
              'herniorrafa_inguinal_anio'=>isset($data['txtanioherniorrafiainguinal'])?$data['txtanioherniorrafiainguinal']:null,
              'ocular'=>isset($data['ocular'])?$data['ocular']:null,
              'ocular_descripcion'=>isset($data['txtocular'])?$data['txtocular']:null,
              'otorrino'=>isset($data['otorrino'])?$data['otorrino']:null,
              'otorrino_descripcion'=>isset($data['txtotorrino'])?$data['txtotorrino']:null,
              'obstetricia'=>isset($data['obstetricia'])?$data['obstetricia']:null,
              'cesarea'=>isset($data['ginecologia'])?$data['ginecologia']:null,
              'cesarea_descripcion'=>isset($data['txtginecologia'])?$data['txtginecologia']:null,
              'otras_cirugias'=>isset($data['otrascirugias'])?$data['otrascirugias']:null,
              'otras_cirugias_fecha'=>isset($data['otrascirugiasfecha'])?$data['otrascirugiasfecha']:null,
              'otras_cirugias_observaciones'=>isset($data['otrascirugiasobser'])?$data['otrascirugiasobser']:null,
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
     * @param  \App\AntecedentesQuirurgicos  $antecedentesQuirurgicos
     * @return \Illuminate\Http\Response
     */
    public function show(AntecedentesQuirurgicos $antecedentesQuirurgicos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AntecedentesQuirurgicos  $antecedentesQuirurgicos
     * @return \Illuminate\Http\Response
     */
    public function edit(AntecedentesQuirurgicos $antecedentesQuirurgicos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AntecedentesQuirurgicos  $antecedentesQuirurgicos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

      if(request()->ajax())
      {



            $antecedentesQuirurgicos=AntecedentesQuirurgicos::find($request['antecedentesquirugicos_id']);

          $data=request()->validate([
              'paciente_id'=>'required',
              'apendicectomia'=>'nullable',
              'txtanioapendicectomia'=>'required_if:apendicectomia,==,1',
              'colecistectomia'=>'nullable',
              'txtaniocolecistectomia'=>'required_if:colecistectomia,==,1',
              'herniorrafiaumbilical'=>'nullable',
              'txtanioherniorrafiaumbilical'=>'required_if:herniorrafiaumbilical,==,1',
              'herniorrafiainguinal'=>'nullable',
              'txtanioherniorrafiainguinal'=>'required_if:herniorrafiainguinal,==,1',
              'ocular'=>'nullable',
              'txtocular'=>'required_if:ocular,==,1',
              'otorrino'=>'nullable',
              'txtotorrino'=>'required_if:otorrino,==,1',
              'obstetricia'=>'nullable',
              'ginecologia'=>'nullable',
              'txtginecologia'=>'required_if:ginecologia,==,1',
              'otrascirugias'=>'nullable',
              'otrascirugiasfecha'=>'required_if:otrascirugias,==,1',
              'otrascirugiasobser'=>'required_if:otrascirugias,==,1'

          ]);
          $antecedentesQuirurgicos->update([
              'apendicetomia'=>isset($data['apendicectomia'])?$data['apendicectomia']:null,
              'apendicetomia_anio'=>isset($data['txtanioapendicectomia'])?$data['txtanioapendicectomia']:null,
              'colecistectomia'=>isset($data['colecistectomia'])?$data['colecistectomia']:null,
              'colecistectomia_anio'=>isset($data['txtaniocolecistectomia'])?$data['txtaniocolecistectomia']:null,
              'herniorrafa_umbilical'=>isset($data['herniorrafiaumbilical'])?$data['herniorrafiaumbilical']:null,
              'herniorrafa_umbilical_anio'=>isset($data['txtanioherniorrafiaumbilical'])?$data['txtanioherniorrafiaumbilical']:null,
              'herniorrafa_inguinal'=>isset($data['herniorrafiainguinal'])?$data['herniorrafiainguinal']:null,
              'herniorrafa_inguinal_anio'=>isset($data['txtanioherniorrafiainguinal'])?$data['txtanioherniorrafiainguinal']:null,
              'ocular'=>isset($data['ocular'])?$data['ocular']:null,
              'ocular_descripcion'=>isset($data['txtocular'])?$data['txtocular']:null,
              'otorrino'=>isset($data['otorrino'])?$data['otorrino']:null,
              'otorrino_descripcion'=>isset($data['txtotorrino'])?$data['txtotorrino']:null,
              'obstetricia'=>isset($data['obstetricia'])?$data['obstetricia']:null,
              'cesarea'=>isset($data['ginecologia'])?$data['ginecologia']:null,
              'cesarea_descripcion'=>isset($data['txtginecologia'])?$data['txtginecologia']:null,
              'otras_cirugias'=>isset($data['otrascirugias'])?$data['otrascirugias']:null,
              'otras_cirugias_fecha'=>isset($data['otrascirugiasfecha'])?$data['otrascirugiasfecha']:null,
              'otras_cirugias_observaciones'=>isset($data['otrascirugiasobser'])?$data['otrascirugiasobser']:null,
             'fecha_registro'=>Carbon::now(),
             'paciente_id'=>$data['paciente_id'],
             'estado'=>true
          ]);
          $antecedentesQuirurgicos->save();
              return response()->json(['mensaje'=>"Registro Actualizado"]);
      }



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AntecedentesQuirurgicos  $antecedentesQuirurgicos
     * @return \Illuminate\Http\Response
     */
    public function destroy(AntecedentesQuirurgicos $antecedentesQuirurgicos)
    {
        //
    }
}
