<?php

namespace App\Http\Controllers;

use App\Vision;
use Illuminate\Http\Request;
use Carbon\Carbon;
class VisionController extends Controller
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
              'av_lejos_od_sl'=>'nullable',
              'av_lejos_od_cl'=>'nullable',
              'av_lejos_oi_sl'=>'nullable',
              'av_lejos_oi_cl'=>'nullable',
              'av_cerca_od_sl'=>'nullable',
              'av_cerca_od_cl'=>'nullable',
              'av_cerca_oi_sl'=>'nullable',
              'av_cerca_oi_cl'=>'nullable',
              'av_binocular'=>'nullable',
              'test_ishihara_colores'=>'nullable',
              'discriminacion_colores'=>'nullable',
              'vision_profundidad'=>'nullable',
              'vision_perimetral'=>'nullable',
              'foria_vertical'=>'nullable',
              'foria_horizontal'=>'nullable',
              'vision_nocturna'=>'nullable',
              'vision_encandilada'=>'nullable',
              'recuperacion_encandilamiento'=>'nullable',
              'lista_examen_id'=>'required',
              'cita_id'=>'required'
            ]);

          $vision = Vision::create([
              'av_lejos_od_sl'=>$data['av_lejos_od_sl'],
              'av_lejos_od_cl'=>$data['av_lejos_od_cl'],
              'av_lejos_oi_sl'=>$data['av_lejos_oi_sl'],
              'av_lejos_oi_cl'=>$data['av_lejos_oi_cl'],
              'av_cerca_od_sl'=>$data['av_cerca_od_sl'],
              'av_cerca_od_cl'=>$data['av_cerca_od_cl'],
              'av_cerca_oi_sl'=>$data['av_cerca_oi_sl'],
              'av_cerca_oi_cl'=>$data['av_cerca_oi_cl'],
              'av_binocular'=>$data['av_binocular'],
              'test_ishihara_colores'=>$data['test_ishihara_colores'],
              'discriminacion_colores'=>$data['discriminacion_colores'],
              'vision_profundidad'=>$data['vision_profundidad'],
              'vision_perimetral'=>$data['vision_perimetral'],
              'foria_vertical'=>$data['foria_vertical'],
              'foria_horizontal'=>$data['foria_horizontal'],
              'vision_nocturna'=>$data['vision_nocturna'],
              'vision_encandilada'=>$data['vision_encandilada'],
              'recuperacion_encandilamiento'=>$data['recuperacion_encandilamiento'],
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
     * @param  \App\Vision  $vision
     * @return \Illuminate\Http\Response
     */
    public function show(Vision $vision)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vision  $vision
     * @return \Illuminate\Http\Response
     */
    public function edit(Vision $vision)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vision  $vision
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $vision = Vision::find($request['vision_id']);
      if(request()->ajax())
      {
        $data = request()->validate([
            'av_lejos_od_sl'=>'nullable',
            'av_lejos_od_cl'=>'nullable',
            'av_lejos_oi_sl'=>'nullable',
            'av_lejos_oi_cl'=>'nullable',
            'av_cerca_od_sl'=>'nullable',
            'av_cerca_od_cl'=>'nullable',
            'av_cerca_oi_sl'=>'nullable',
            'av_cerca_oi_cl'=>'nullable',
            'av_binocular'=>'nullable',
            'test_ishihara_colores'=>'nullable',
            'discriminacion_colores'=>'nullable',
            'vision_profundidad'=>'nullable',
            'vision_perimetral'=>'nullable',
            'foria_vertical'=>'nullable',
            'foria_horizontal'=>'nullable',
            'vision_nocturna'=>'nullable',
            'vision_encandilada'=>'nullable',
            'recuperacion_encandilamiento'=>'nullable',
            'lista_examen_id'=>'required',
            'cita_id'=>'required'
          ]);

        $vision->update([
            'av_lejos_od_sl'=>$data['av_lejos_od_sl'],
            'av_lejos_od_cl'=>$data['av_lejos_od_cl'],
            'av_lejos_oi_sl'=>$data['av_lejos_oi_sl'],
            'av_lejos_oi_cl'=>$data['av_lejos_oi_cl'],
            'av_cerca_od_sl'=>$data['av_cerca_od_sl'],
            'av_cerca_od_cl'=>$data['av_cerca_od_cl'],
            'av_cerca_oi_sl'=>$data['av_cerca_oi_sl'],
            'av_cerca_oi_cl'=>$data['av_cerca_oi_cl'],
            'av_binocular'=>$data['av_binocular'],
            'test_ishihara_colores'=>$data['test_ishihara_colores'],
            'discriminacion_colores'=>$data['discriminacion_colores'],
            'vision_profundidad'=>$data['vision_profundidad'],
            'vision_perimetral'=>$data['vision_perimetral'],
            'foria_vertical'=>$data['foria_vertical'],
            'foria_horizontal'=>$data['foria_horizontal'],
            'vision_nocturna'=>$data['vision_nocturna'],
            'vision_encandilada'=>$data['vision_encandilada'],
            'recuperacion_encandilamiento'=>$data['recuperacion_encandilamiento'],
            'fecha_registro'=>Carbon::now(),
            'lista_examen_id'=>$data['lista_examen_id'],
            'cita_id'=>$data['cita_id'],
            'estado'=>true
        ]);
          $vision->save();
        return response()->json(['mensaje' => 'registro actualizado']);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vision  $vision
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vision $vision)
    {
        //
    }
}
