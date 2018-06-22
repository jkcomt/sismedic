<?php

namespace App\Http\Controllers;

use App\Vision;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
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
              'av_lejos_od_sl'=>isset($data['av_lejos_od_sl'])? $data['av_lejos_od_sl']:null,
              'av_lejos_od_cl'=>isset($data['av_lejos_od_cl'])? $data['av_lejos_od_cl']:null,
              'av_lejos_oi_sl'=>isset($data['av_lejos_oi_sl'])? $data['av_lejos_oi_sl']:null,
              'av_lejos_oi_cl'=>isset($data['av_lejos_oi_cl'])? $data['av_lejos_oi_cl']:null,
              'av_cerca_od_sl'=>isset($data['av_cerca_od_sl'])? $data['av_cerca_od_sl']:null,
              'av_cerca_od_cl'=>isset($data['av_cerca_od_cl'])? $data['av_cerca_od_cl']:null,
              'av_cerca_oi_sl'=>isset($data['av_cerca_oi_sl'])? $data['av_cerca_oi_sl']:null,
              'av_cerca_oi_cl'=>isset($data['av_cerca_oi_cl'])? $data['av_cerca_oi_cl']:null,
              'av_binocular'=>isset($data['av_binocular'])? $data['av_binocular']:null,
              'test_ishihara_colores'=>isset($data['test_ishihara_colores'])? $data['test_ishihara_colores']:null,
              'discriminacion_colores'=>isset($data['discriminacion_colores'])? $data['discriminacion_colores']:null,
              'vision_profundidad'=>isset($data['vision_profundidad'])? $data['vision_profundidad']:null,
              'vision_perimetral'=>isset($data['vision_perimetral'])? $data['vision_perimetral']:null,
              'foria_vertical'=>isset($data['foria_vertical'])? $data['foria_vertical']:null,
              'foria_horizontal'=>isset($data['foria_horizontal'])? $data['foria_horizontal']:null,
              'vision_nocturna'=>isset($data['vision_nocturna'])? $data['vision_nocturna']:null,
              'vision_encandilada'=>isset($data['vision_encandilada'])? $data['vision_encandilada']:null,
              'recuperacion_encandilamiento'=>isset($data['recuperacion_encandilamiento'])? $data['recuperacion_encandilamiento']:null,
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
            'av_lejos_od_sl'=>isset($data['av_lejos_od_sl'])? $data['av_lejos_od_sl']:null,
            'av_lejos_od_cl'=>isset($data['av_lejos_od_cl'])? $data['av_lejos_od_cl']:null,
            'av_lejos_oi_sl'=>isset($data['av_lejos_oi_sl'])? $data['av_lejos_oi_sl']:null,
            'av_lejos_oi_cl'=>isset($data['av_lejos_oi_cl'])? $data['av_lejos_oi_cl']:null,
            'av_cerca_od_sl'=>isset($data['av_cerca_od_sl'])? $data['av_cerca_od_sl']:null,
            'av_cerca_od_cl'=>isset($data['av_cerca_od_cl'])? $data['av_cerca_od_cl']:null,
            'av_cerca_oi_sl'=>isset($data['av_cerca_oi_sl'])? $data['av_cerca_oi_sl']:null,
            'av_cerca_oi_cl'=>isset($data['av_cerca_oi_cl'])? $data['av_cerca_oi_cl']:null,
            'av_binocular'=>isset($data['av_binocular'])? $data['av_binocular']:null,
            'test_ishihara_colores'=>isset($data['test_ishihara_colores'])? $data['test_ishihara_colores']:null,
            'discriminacion_colores'=>isset($data['discriminacion_colores'])? $data['discriminacion_colores']:null,
            'vision_profundidad'=>isset($data['vision_profundidad'])? $data['vision_profundidad']:null,
            'vision_perimetral'=>isset($data['vision_perimetral'])? $data['vision_perimetral']:null,
            'foria_vertical'=>isset($data['foria_vertical'])? $data['foria_vertical']:null,
            'foria_horizontal'=>isset($data['foria_horizontal'])? $data['foria_horizontal']:null,
            'vision_nocturna'=>isset($data['vision_nocturna'])? $data['vision_nocturna']:null,
            'vision_encandilada'=>isset($data['vision_encandilada'])? $data['vision_encandilada']:null,
            'recuperacion_encandilamiento'=>isset($data['recuperacion_encandilamiento'])? $data['recuperacion_encandilamiento']:null,
            'fecha_registro'=>Carbon::now(),
            'lista_examen_id'=>isset($data['lista_examen_id'])? $data['lista_examen_id']:null,
            'cita_id'=>isset($data['cita_id'])? $data['cita_id']:null,
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
