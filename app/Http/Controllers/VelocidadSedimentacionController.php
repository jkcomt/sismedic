<?php

namespace App\Http\Controllers;

use App\VelocidadSedimentacion;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Cita;
use View;
class VelocidadSedimentacionController extends Controller
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
                'sedimentacion'=>'required',
                'lista_examen_id'=>'required',
                'cita_id'=>'required'
            ]);

            $sedimentacion = VelocidadSedimentacion::create([
                'velocidad_sedimentacion_globular'=>$data['sedimentacion'],
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
     * @param  \App\VelocidadSedimentacion  $velocidadSedimentacion
     * @return \Illuminate\Http\Response
     */
    public function show(VelocidadSedimentacion $velocidadSedimentacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VelocidadSedimentacion  $velocidadSedimentacion
     * @return \Illuminate\Http\Response
     */
    public function edit(VelocidadSedimentacion $velocidadSedimentacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VelocidadSedimentacion  $velocidadSedimentacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $sedimentacion = VelocidadSedimentacion::find($request['sedimentacion_id']);
      if(request()->ajax()) {
          $data = request()->validate([
              'sedimentacion'=>'required',
              'lista_examen_id'=>'required',
              'cita_id'=>'required'
          ]);

          $sedimentacion->update([
              'velocidad_sedimentacion_globular'=>$data['sedimentacion'],
              'fecha_registro'=>Carbon::now(),
              'lista_examen_id'=>$data['lista_examen_id'],
              'cita_id'=>$data['cita_id'],
              'estado'=>true
          ]);

          return response()->json(['mensaje' => 'registro actualizado']);
      }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VelocidadSedimentacion  $velocidadSedimentacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(VelocidadSedimentacion $velocidadSedimentacion)
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
