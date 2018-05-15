<?php

namespace App\Http\Controllers;

use App\Electrocardiograma;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ElectrocardiogramaController extends Controller
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
                'cboritmo'=>'nullable',
                'frecuencia_cardiaca'=>'nullable',
                'eje_qrs'=>'nullable',
                'eje_qrs_dos'=>'nullable',
                'onda_p'=>'nullable',
                'intervalo'=>'nullable',
                'segmento_qrs'=>'nullable',
                'qt_corregido'=>'nullable',
                'isquemia'=>'nullable',
                'hipertrofias'=>'nullable',
                'otros_hallazgos'=>'nullable',
                'lista_examen_id'=>'required',
                'cita_id'=>'required'
            ]);

            $electrocardiograma = Electrocardiograma::create([
                'ritmo'=>$data['cboritmo'],
                'frecuencia_cardiaca'=>$data['frecuencia_cardiaca'],
                'eje_qrs'=>$data['eje_qrs'],
                'eje_qrs_dos'=>$data['eje_qrs_dos'],
                'onda_p'=>$data['onda_p'],
                'intervalo'=>$data['intervalo'],
                'segmento_qrs'=>$data['segmento_qrs'],
                'qt_corregido'=>$data['qt_corregido'],
                'isquemia'=>$data['isquemia'],
                'hipertrofias'=>$data['hipertrofias'],
                'otros_hallazgos'=>$data['otros_hallazgos'],
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
     * @param  \App\Electrocardiograma  $electrocardiograma
     * @return \Illuminate\Http\Response
     */
    public function show(Electrocardiograma $electrocardiograma)
    {



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Electrocardiograma  $electrocardiograma
     * @return \Illuminate\Http\Response
     */
    public function edit(Electrocardiograma $electrocardiograma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Electrocardiograma  $electrocardiograma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $electrocardiograma = Electrocardiograma::find($request['electrocardiograma_id']);
      if(request()->ajax()) {
          $data = request()->validate([
              'cboritmo'=>'nullable',
              'frecuencia_cardiaca'=>'nullable',
              'eje_qrs'=>'nullable',
              'eje_qrs_dos'=>'nullable',
              'onda_p'=>'nullable',
              'intervalo'=>'nullable',
              'segmento_qrs'=>'nullable',
              'qt_corregido'=>'nullable',
              'isquemia'=>'nullable',
              'hipertrofias'=>'nullable',
              'otros_hallazgos'=>'nullable',
              'lista_examen_id'=>'required',
              'cita_id'=>'required'
          ]);
          $electrocardiograma->update([
              'ritmo'=>$data['cboritmo'],
              'frecuencia_cardiaca'=>$data['frecuencia_cardiaca'],
              'eje_qrs'=>$data['eje_qrs'],
              'eje_qrs_dos'=>$data['eje_qrs_dos'],
              'onda_p'=>$data['onda_p'],
              'intervalo'=>$data['intervalo'],
              'segmento_qrs'=>$data['segmento_qrs'],
              'qt_corregido'=>$data['qt_corregido'],
              'isquemia'=>$data['isquemia'],
              'hipertrofias'=>$data['hipertrofias'],
              'otros_hallazgos'=>$data['otros_hallazgos'],
              'fecha_registro'=>Carbon::now(),
              'lista_examen_id'=>$data['lista_examen_id'],
              'cita_id'=>$data['cita_id'],
              'estado'=>true
          ]);
            $electrocardiograma->save();
          return response()->json(['mensaje' => 'registro actualizado']);
      }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Electrocardiograma  $electrocardiograma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Electrocardiograma $electrocardiograma)
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
