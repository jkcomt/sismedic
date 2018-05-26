<?php

namespace App\Http\Controllers;

use App\AntperHistoriaOcupacionales;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Cita;
use App\Paciente;
use View;
class AntperHistoriaOcupacionalesController extends Controller
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
            'paciente_id'=>'nullable',
            'fechainicio'=>'nullable',
            'fechafin'=>'nullable',
            'empresa_lugar'=>'nullable',
            'rubro'=>'nullable',
            'altitud'=>'nullable',
            'area_empresa'=>'nullable',
            'ocupacion'=>'nullable',
            'labor_superficie'=>'nullable',
            'labor_socavon'=>'nullable',
            'check1'=>'nullable',
            'check2'=>'nullable',
            'check3'=>'nullable',
            'check4'=>'nullable',
            'check5'=>'nullable',
            'medios_proteccion'=>'nullable',
            'accidentes_ocupacionales'=>'nullable',
            'Enfermedad_ocupacional'=>'nullable',
            'uso_epp'=>'nullable',
            'tipos_proteccion'=>'nullable',
          ]);

              $var1=isset($data['check1'])?$data['check1']:" ";
              $var2=isset($data['check2'])?$data['check2']:" ";
              $var3=isset($data['check3'])?$data['check3']:" ";
              $var4=isset($data['check4'])?$data['check4']:" ";
              $var5=isset($data['check5'])?$data['check5']:" ";
            $riesgo_ocupacional=' '.$var1.' '.$var2.' '.$var3.' '.$var4.' '.$var5.' ';

          $antecedentes=AntperHistoriaOcupacionales::create([
            'fechainicio'=>isset($data['fechainicio'] )?$data['fechainicio']:null,
            'fechafin'=>isset($data['fechafin'] )?$data['fechafin']:null,
            'empresa_lugar'=>isset($data['empresa_lugar'] )?$data['empresa_lugar']:null,
            'rubro'=>isset($data['rubro'] )?$data['rubro']:null,
            'altitud'=>isset($data['altitud'] )?$data['altitud']:null,
            'area_empresa'=>isset($data['area_empresa'] )?$data['area_empresa']:null,
            'ocupacion'=>isset($data['ocupacion'] )?$data['ocupacion']:null,
            'labor_superficie'=>isset($data['labor_superficie'] )?$data['labor_superficie']:null,
            'labor_socavon'=>isset($data['labor_socavon'] )?$data['labor_socavon']:null,
            'riesgo_ocupacional'=>$riesgo_ocupacional,
            'medios_proteccion'=>isset($data['medios_proteccion'] )?$data['medios_proteccion']:null,
            'accidentes_ocupacionales'=>isset($data['accidentes_ocupacionales'] )?$data['accidentes_ocupacionales']:null,
            'Enfermedad_ocupacional'=>isset($data['Enfermedad_ocupacional'] )?$data['Enfermedad_ocupacional']:null,
            'uso_epp'=>isset($data['uso_epp'] )?$data['uso_epp']:null,
            'tipos_proteccion'=>isset($data['tipos_proteccion'] )?$data['tipos_proteccion']:null,
            'fecha_registro'=>Carbon::now(),
            'paciente_id'=>isset($data['paciente_id'] )?$data['paciente_id']:null,
            'estado'=>true
          ]);
              return response()->json(['mensaje'=>"Registro exitoso"]);
      }





    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AntperHistoriaOcupacionales  $antperHistoriaOcupacionales
     * @return \Illuminate\Http\Response
     */
    public function show(AntperHistoriaOcupacionales $antperHistoriaOcupacionales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AntperHistoriaOcupacionales  $antperHistoriaOcupacionales
     * @return \Illuminate\Http\Response
     */
    public function edit(AntperHistoriaOcupacionales $antperHistoriaOcupacionales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AntperHistoriaOcupacionales  $antperHistoriaOcupacionales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AntperHistoriaOcupacionales $antperHistoriaOcupacionales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AntperHistoriaOcupacionales  $antperHistoriaOcupacionales
     * @return \Illuminate\Http\Response
     */
    public function destroy(AntperHistoriaOcupacionales $antperHistoriaOcupacionales)
    {
        //
    }





  public function reporte_antecedentes_ocupacionales($id)
  {
    $paciente=Paciente::find($id);
  //  $view=View::make('evaluacionmedica.reportes.certificadoconduccionvehiculos',compact('cita'));
  $view=View::make('evaluacionmedica.reportes.antecedentesocupacionales',compact('paciente'));
    $pdf = \App::make('dompdf.wrapper');
    $pdf->loadHTML($view);
    $pdf->setPaper([0, 0,595.276 ,841.89 ], 'landscape');
    $pdf->stream($view);
    return $pdf->stream();
  }


}
