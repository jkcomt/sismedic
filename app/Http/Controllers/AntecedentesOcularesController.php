<?php

namespace App\Http\Controllers;

use App\AntecedentesOculares;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AntecedentesOcularesController extends Controller
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
              'glaucoma'=>'nullable',
              'txtglaucoma'=>'required_if:glaucoma,==,1',
              'txtanioglaucoma'=>'required_if:glaucoma,==,1',
              'txttratamientoactualglaucoma'=>'required_if:glaucoma,==,1',
              'cataratas'=>'nullable',
              'txtcataratas'=>'required_if:cataratas,==,1',
              'txtaniocataratas'=>'required_if:cataratas,==,1',
              'txttratamientoactualcataratas'=>'required_if:cataratas,==,1',
              'ametropia'=>'nullable',
              'txtametropia'=>'required_if:ametropia,==,1',
              'txtanioametropia'=>'required_if:ametropia,==,1',
              'txttratamientoactualametropia'=>'required_if:ametropia,==,1',
              'retinopatia'=>'nullable',
              'otrosoculares'=>'nullable',
              'txtotrosoculares'=>'required_if:otrosoculares,==,1',
            ]);

            $antecedentesOculares=AntecedentesOculares::create([
              'glaucoma'=>isset($data['glaucoma'])?$data['glaucoma']:null,
              'glaucoma_descripcion'=>isset($data['txtglaucoma'])?$data['txtglaucoma']:null,
              'glaucoma_anio_dx'=>isset($data['txtanioglaucoma'])?$data['txtanioglaucoma']:null,
              'glaucoma_tratamiento_actual'=>isset($data['txttratamientoactualglaucoma'])?$data['txttratamientoactualglaucoma']:null,
              'cataratas'=>isset($data['cataratas'])?$data['cataratas']:null,
              'cataratas_descripcion'=>isset($data['txtcataratas'])?$data['txtcataratas']:null,
              'cataratas_anio_dx'=>isset($data['txtaniocataratas'])?$data['txtaniocataratas']:null,
              'cataratas_tratamiento_actual'=>isset($data['txttratamientoactualcataratas'])?$data['txttratamientoactualcataratas']:null,
              'ametropia'=>isset($data['ametropia'])?$data['ametropia']:null,
              'ametropia_descripcion'=>isset($data['txtametropia'])?$data['txtametropia']:null,
              'ametropia_anio_dx'=>isset($data['txtanioametropia'])?$data['txtanioametropia']:null,
              'ametropia_tratamiento_actual'=>isset($data['txttratamientoactualametropia'])?$data['txttratamientoactualametropia']:null,
              'retinopatia'=>isset($data['retinopatia'])?$data['retinopatia']:null,
              'otros_oculares'=>isset($data['otrosoculares'])?$data['otrosoculares']:null,
              'otros_oculares_descripcion'=>isset($data['txtotrosoculares'])?$data['txtotrosoculares']:null,
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
     * @param  \App\AntecedentesOculares  $antecedentesOculares
     * @return \Illuminate\Http\Response
     */
    public function show(AntecedentesOculares $antecedentesOculares)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AntecedentesOculares  $antecedentesOculares
     * @return \Illuminate\Http\Response
     */
    public function edit(AntecedentesOculares $antecedentesOculares)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AntecedentesOculares  $antecedentesOculares
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

      $antecedentesOculares=AntecedentesOculares::find($request['antecedentestres_id']);

      if(request()->ajax())
      {
          $data=request()->validate([
            'paciente_id'=>'required',
            'glaucoma'=>'nullable',
            'txtglaucoma'=>'required_if:glaucoma,==,1',
            'txtanioglaucoma'=>'required_if:glaucoma,==,1',
            'txttratamientoactualglaucoma'=>'required_if:glaucoma,==,1',
            'cataratas'=>'nullable',
            'txtcataratas'=>'required_if:cataratas,==,1',
            'txtaniocataratas'=>'required_if:cataratas,==,1',
            'txttratamientoactualcataratas'=>'required_if:cataratas,==,1',
            'ametropia'=>'nullable',
            'txtametropia'=>'required_if:ametropia,==,1',
            'txtanioametropia'=>'required_if:ametropia,==,1',
            'txttratamientoactualametropia'=>'required_if:ametropia,==,1',
            'retinopatia'=>'nullable',
            'otrosoculares'=>'nullable',
            'txtotrosoculares'=>'required_if:otrosoculares,==,1',
          ]);

            $antecedentesOculares->update([
              'glaucoma'=>isset($data['glaucoma'])?$data['glaucoma']:null,
              'glaucoma_descripcion'=>isset($data['txtglaucoma'])?$data['txtglaucoma']:null,
              'glaucoma_anio_dx'=>isset($data['txtanioglaucoma'])?$data['txtanioglaucoma']:null,
              'glaucoma_tratamiento_actual'=>isset($data['txttratamientoactualglaucoma'])?$data['txttratamientoactualglaucoma']:null,
              'cataratas'=>isset($data['cataratas'])?$data['cataratas']:null,
              'cataratas_descripcion'=>isset($data['txtcataratas'])?$data['txtcataratas']:null,
              'cataratas_anio_dx'=>isset($data['txtaniocataratas'])?$data['txtaniocataratas']:null,
              'cataratas_tratamiento_actual'=>isset($data['txttratamientoactualcataratas'])?$data['txttratamientoactualcataratas']:null,
              'ametropia'=>isset($data['ametropia'])?$data['ametropia']:null,
              'ametropia_descripcion'=>isset($data['txtametropia'])?$data['txtametropia']:null,
              'ametropia_anio_dx'=>isset($data['txtanioametropia'])?$data['txtanioametropia']:null,
              'ametropia_tratamiento_actual'=>isset($data['txttratamientoactualametropia'])?$data['txttratamientoactualametropia']:null,
              'retinopatia'=>isset($data['retinopatia'])?$data['retinopatia']:null,
              'otros_oculares'=>isset($data['otrosoculares'])?$data['otrosoculares']:null,
              'otros_oculares_descripcion'=>isset($data['txtotrosoculares'])?$data['txtotrosoculares']:null,
              'fecha_registro'=>Carbon::now(),
              'paciente_id'=>$data['paciente_id'],
              'estado'=>true
          ]);
          $antecedentesOculares->save();
             return response()->json(['mensaje'=>"Registro Actualizado"]);

      }




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AntecedentesOculares  $antecedentesOculares
     * @return \Illuminate\Http\Response
     */
    public function destroy(AntecedentesOculares $antecedentesOculares)
    {
        //
    }
}
