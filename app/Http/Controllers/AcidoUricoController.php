<?php

namespace App\Http\Controllers;

use App\AcidoUrico;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class AcidoUricoController extends Controller
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
    public function store()
    {
        if(request()->ajax()) {
            $data = request()->validate([
                'acido_urico'=>'required',
                'lista_examen_id'=>'required',
                'cita_id'=>'required'
            ]);

            $acidoUrico = AcidoUrico::create([
                'acido_urico'=>$data['acido_urico'],
                'fecha_registro'=>Carbon::now(),
                'lista_examen_id'=>$data['lista_examen_id'],
                'cita_id'=>$data['cita_id'],
                'estado'=>true,
                'user_id'=>Auth::user()->id
            ]);

            return response()->json(['mensaje' => 'registro exitoso']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AcidoUrico  $acidoUrico
     * @return \Illuminate\Http\Response
     */
    public function show(AcidoUrico $acidoUrico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AcidoUrico  $acidoUrico
     * @return \Illuminate\Http\Response
     */
    public function edit(AcidoUrico $acidoUrico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AcidoUrico  $acidoUrico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $acidoUrico = AcidoUrico::find($request['acidourico_id']);
      if(request()->ajax())
      {
          $data = request()->validate([
              'acido_urico'=>'required',
              'lista_examen_id'=>'required',
              'cita_id'=>'required'
          ]);
          $acidoUrico->update([
              'acido_urico'=>$data['acido_urico'],
              'fecha_registro'=>Carbon::now(),
              'lista_examen_id'=>$data['lista_examen_id'],
              'cita_id'=>$data['cita_id'],
              'estado'=>true
          ]);
          $acidoUrico->save();
          return response()->json(['mensaje' => 'registro actualizado']);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AcidoUrico  $acidoUrico
     * @return \Illuminate\Http\Response
     */
    public function destroy(AcidoUrico $acidoUrico)
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
