<?php

namespace App\Http\Controllers;

use App\Electrocardiograma;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
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
                'ritmo'=>isset($data['cboritmo'])? $data['cboritmo']:null,
                'frecuencia_cardiaca'=>isset($data['frecuencia_cardiaca'])? $data['frecuencia_cardiaca']:null,
                'eje_qrs'=>isset($data['eje_qrs'])? $data['eje_qrs']:null,
                'eje_qrs_dos'=>isset($data['eje_qrs_dos'])? $data['eje_qrs_dos']:null,
                'onda_p'=>isset($data['onda_p'])? $data['onda_p']:null,
                'intervalo'=>isset($data['intervalo'])? $data['intervalo']:null,
                'segmento_qrs'=>isset($data['segmento_qrs'])? $data['segmento_qrs']:null,
                'qt_corregido'=>isset($data['qt_corregido'])? $data['qt_corregido']:null,
                'isquemia'=>isset($data['isquemia'])? $data['isquemia']:null,
                'hipertrofias'=>isset($data['hipertrofias'])? $data['hipertrofias']:null,
                'otros_hallazgos'=>isset($data['otros_hallazgos'])? $data['otros_hallazgos']:null,
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
              'ritmo'=>isset($data['cboritmo'])? $data['cboritmo']:null,
              'frecuencia_cardiaca'=>isset($data['frecuencia_cardiaca'])? $data['frecuencia_cardiaca']:null,
              'eje_qrs'=>isset($data['eje_qrs'])? $data['eje_qrs']:null,
              'eje_qrs_dos'=>isset($data['eje_qrs_dos'])? $data['eje_qrs_dos']:null,
              'onda_p'=>isset($data['onda_p'])? $data['onda_p']:null,
              'intervalo'=>isset($data['intervalo'])? $data['intervalo']:null,
              'segmento_qrs'=>isset($data['segmento_qrs'])? $data['segmento_qrs']:null,
              'qt_corregido'=>isset($data['qt_corregido'])? $data['qt_corregido']:null,
              'isquemia'=>isset($data['isquemia'])? $data['isquemia']:null,
              'hipertrofias'=>isset($data['hipertrofias'])? $data['hipertrofias']:null,
              'otros_hallazgos'=>isset($data['otros_hallazgos'])? $data['otros_hallazgos']:null,
              'fecha_registro'=>Carbon::now(),
              'lista_examen_id'=>isset($data['lista_examen_id'])? $data['lista_examen_id']:null,
              'cita_id'=>isset($data['cita_id'])? $data['cita_id']:null,
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
