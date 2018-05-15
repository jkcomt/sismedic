<?php

namespace App\Http\Controllers;

use App\Triglicerido;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TrigliceridoController extends Controller
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
                'triglicerido'=>'required',
                'lista_examen_id'=>'required',
                'cita_id'=>'required'
            ]);

            $triglicerido = Triglicerido::create([
                'triglicerido'=>$data['triglicerido'],
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
     * @param  \App\Triglicerido  $triglicerido
     * @return \Illuminate\Http\Response
     */
    public function show(Triglicerido $triglicerido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Triglicerido  $triglicerido
     * @return \Illuminate\Http\Response
     */
    public function edit(Triglicerido $triglicerido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Triglicerido  $triglicerido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $triglicerido = Triglicerido::find($request['triglicerido_id']);
      if(request()->ajax()) {
          $data = request()->validate([
              'triglicerido'=>'required',
              'lista_examen_id'=>'required',
              'cita_id'=>'required'
          ]);

          $triglicerido->update([
              'triglicerido'=>$data['triglicerido'],
              'fecha_registro'=>Carbon::now(),
              'lista_examen_id'=>$data['lista_examen_id'],
              'cita_id'=>$data['cita_id'],
              'estado'=>true
          ]);
            $triglicerido->save();
          return response()->json(['mensaje' => 'registro actualizado']);
      }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Triglicerido  $triglicerido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Triglicerido $triglicerido)
    {
        //
    }
    public function examenes($id)
    {
      $cita=Cita::find($id);
      $sedimentacions = VelocidadSedimentacion::where('cita_id','=',$cita->id)->get()->toArray();
      $view=View::make('evaluacionmedica.reportes.examenes',compact('cita','sedimentacions'));
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      $pdf->stream($view);
      return $pdf->stream();
    }
}
