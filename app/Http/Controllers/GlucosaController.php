<?php

namespace App\Http\Controllers;

use App\Glucosa;
use Illuminate\Http\Request;
use Carbon\Carbon;

class GlucosaController extends Controller
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
                'glucosa'=>'required',
                'lista_examen_id'=>'required',
                'cita_id'=>'required'
            ]);

            $glucosa = Glucosa::create([
                'glucosa'=>$data['glucosa'],
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
     * @param  \App\Glucosa  $glucosa
     * @return \Illuminate\Http\Response
     */
    public function show(Glucosa $glucosa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Glucosa  $glucosa
     * @return \Illuminate\Http\Response
     */
    public function edit(Glucosa $glucosa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Glucosa  $glucosa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $glucosa = Glucosa::find($request['glucosa_id']);
      if(request()->ajax()) {
          $data = request()->validate([
              'glucosa'=>'required',
              'lista_examen_id'=>'required',
              'cita_id'=>'required'
          ]);

          $glucosa->update([
            'glucosa'=>$data['glucosa'],
            'fecha_registro'=>Carbon::now(),
            'lista_examen_id'=>$data['lista_examen_id'],
            'cita_id'=>$data['cita_id'],
            'estado'=>true
          ]);
          $glucosa->save();
          return response()->json(['mensaje' => 'registro actualizado']);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Glucosa  $glucosa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Glucosa $glucosa)
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
