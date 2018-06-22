<?php

namespace App\Http\Controllers;

use App\ApneaSuenios;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Cita;
use View;
use Illuminate\Support\Facades\Auth;
class ApneaSueniosController extends Controller
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
            'licencia'=>'nullable',
            'trabajo_noche'=>'nullable',
            'num_dias_trabajados'=>'nullable',
            'num_dias_descanso'=>'nullable',
            'anios_trabaja_horario'=>'nullable',
            'apnea_suenio'=>'nullable',
            'ctrl_apnea'=>'nullable',
            'hta'=>'nullable',
            'medicacion'=>'nullable',
            'psg'=>'nullable',
            'ctrl_psg'=>'nullable',
            'en_mina'=>'nullable',
            'fuera_mina'=>'nullable',
            'criterio_uno_valor'=>'nullable',
            'criterio_dos_valor1'=>'nullable',
            'criterio_dos_valor2'=>'nullable',
            'criterio_dos_valor3'=>'nullable',
            'criterio_dos_valor4'=>'nullable',
            'criterio_dos_valor5'=>'nullable',
            'criterio_dos_valor6'=>'nullable',
            'criterio_dos_valor7'=>'nullable',
            'criterio_dos_valor8'=>'nullable',
            'criterio_dos_valor9'=>'nullable',
            'clasificacion_valor1'=>'nullable',
            'clasificacion_valor2'=>'nullable',
            'clasificacion_valor3'=>'nullable',
            'clasificacion_valor4'=>'nullable',
            'clasificacion_valor5'=>'nullable',
            'antecedente_faminiliar_apnea'=>'nullable',
            'antecedente_faminiliar_apnea_descripcion'=>'nullable',
            'entrevista_valor1'=>'nullable',
            'entrevista_valor2'=>'nullable',
            'entrevista_valor3'=>'nullable',
            'entrevista_valor4'=>'nullable',
            'peso'=>'nullable',
            'talla'=>'nullable',
            'imc'=>'nullable',
            'circunferencia'=>'nullable',
            'genero_paciente'=>'nullable',
            'psistolica'=>'nullable',
            'pdiastolica'=>'nullable',
            'hta_nueva'=>'nullable',
            'grado'=>'nullable',
            'criterio_a'=>'nullable',
            'criterio_b'=>'nullable',
            'criterio_c'=>'nullable',
            'criterio_d'=>'nullable',
            'criterio_e'=>'nullable',
            'riesgo_bajo'=>'nullable',
            'observaciones_recomendaciones'=>'nullable',
            'fecha_registro date'=>'nullable',
            'lista_examen_id'=>'nullable',
            'cita_id'=>'nullable'
          ]);

          $apneaSuenios = ApneaSuenios::create([
              'licencia'=>isset($data['licencia']) ? $data['licencia'] :null,
              'trabajo_noche'=>isset($data['trabajo_noche']) ? $data['trabajo_noche'] :null,
              'num_dias_trabajados'=>isset($data['num_dias_trabajados']) ? $data['num_dias_trabajados'] :null,
              'num_dias_descanso'=>isset($data['num_dias_descanso']) ? $data['num_dias_descanso'] :null,
              'anios_trabaja_horario'=>isset($data['anios_trabaja_horario']) ? $data['anios_trabaja_horario'] :null,
              'apnea_suenio'=>isset($data['apnea_suenio']) ? $data['apnea_suenio'] :0,
              'ctrl_apnea'=>isset($data['ctrl_apnea']) ? $data['ctrl_apnea'] :null,
              'hta'=>isset($data['hta']) ? $data['hta'] :0,
              'medicacion'=>isset($data['medicacion']) ? $data['medicacion'] :null,
              'psg'=>isset($data['psg']) ? $data['psg'] :0,
              'ctrl_psg'=>isset($data['ctrl_psg']) ? $data['ctrl_psg'] :null,
              'en_mina'=>isset($data['en_mina']) ? $data['en_mina'] :null,
              'fuera_mina'=>isset($data['fuera_mina']) ? $data['fuera_mina'] :null,
              'criterio_uno_valor'=>isset($data['criterio_uno_valor']) ? $data['criterio_uno_valor'] :0,
              'criterio_dos_valor1'=>isset($data['criterio_dos_valor1']) ? $data['criterio_dos_valor1'] :0,
              'criterio_dos_valor2'=>isset($data['criterio_dos_valor2']) ? $data['criterio_dos_valor2'] :0,
              'criterio_dos_valor3'=>isset($data['criterio_dos_valor3']) ? $data['criterio_dos_valor3'] :0,
              'criterio_dos_valor4'=>isset($data['criterio_dos_valor4']) ? $data['criterio_dos_valor4'] :0,
              'criterio_dos_valor5'=>isset($data['criterio_dos_valor5']) ? $data['criterio_dos_valor5'] :0,
              'criterio_dos_valor6'=>isset($data['criterio_dos_valor6']) ? $data['criterio_dos_valor6'] :0,
              'criterio_dos_valor7'=>isset($data['criterio_dos_valor7']) ? $data['criterio_dos_valor7'] :0,
              'criterio_dos_valor8'=>isset($data['criterio_dos_valor8']) ? $data['criterio_dos_valor8'] :0,
              'criterio_dos_valor9'=>isset($data['criterio_dos_valor9']) ? $data['criterio_dos_valor9'] :0,
              'clasificacion_valor1'=>isset($data['clasificacion_valor1']) ? $data['clasificacion_valor1'] :0,
              'clasificacion_valor2'=>isset($data['clasificacion_valor2']) ? $data['clasificacion_valor2'] :0,
              'clasificacion_valor3'=>isset($data['clasificacion_valor3']) ? $data['clasificacion_valor3'] :0,
              'clasificacion_valor4'=>isset($data['clasificacion_valor4']) ? $data['clasificacion_valor4'] :0,
              'clasificacion_valor5'=>isset($data['clasificacion_valor5']) ? $data['clasificacion_valor5'] :0,
              'antecedente_faminiliar_apnea'=>isset($data['antecedente_faminiliar_apnea']) ? $data['antecedente_faminiliar_apnea'] :0,
              'antecedente_faminiliar_apnea_descripcion'=>isset($data['antecedente_faminiliar_apnea_descripcion']) ? $data['antecedente_faminiliar_apnea_descripcion'] :null,
              'entrevista_valor1'=>isset($data['entrevista_valor1']) ? $data['entrevista_valor1'] :0,
              'entrevista_valor2'=>isset($data['entrevista_valor2']) ? $data['entrevista_valor2'] :0,
              'entrevista_valor3'=>isset($data['entrevista_valor3']) ? $data['entrevista_valor3'] :0,
              'entrevista_valor4'=>isset($data['entrevista_valor4']) ? $data['entrevista_valor4'] :0,
              'peso'=>isset($data['peso']) ? $data['peso'] :null,
              'talla'=>isset($data['talla']) ? $data['talla'] :null,
              'imc'=>isset($data['imc']) ? $data['imc'] :null,
              'circunferencia'=>isset($data['circunferencia']) ? $data['circunferencia'] :null,
              'genero_paciente'=>isset($data['genero_paciente']) ? $data['genero_paciente'] :null,
              'psistolica'=>isset($data['psistolica']) ? $data['psistolica'] :null,
              'pdiastolica'=>isset($data['pdiastolica']) ? $data['pdiastolica'] :null,
              'hta_nueva'=>isset($data['hta_nueva']) ? $data['hta_nueva'] :null,
              'grado'=>isset($data['grado']) ? $data['grado'] :null,
              'criterio_a'=>isset($data['criterio_a']) ? $data['criterio_a'] :0,
              'criterio_b'=>isset($data['criterio_b']) ? $data['criterio_b'] :0,
              'criterio_c'=>isset($data['criterio_c']) ? $data['criterio_c'] :0,
              'criterio_d'=>isset($data['criterio_d']) ? $data['criterio_d'] :0,
              'criterio_e'=>isset($data['criterio_e']) ? $data['criterio_e'] :0,
              'riesgo_bajo'=>isset($data['riesgo_bajo']) ? $data['riesgo_bajo'] :0,
              'observaciones_recomendaciones'=>isset($data['observaciones_recomendaciones']) ? $data['observaciones_recomendaciones'] :null,
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
     * @param  \App\ApneaSuenios  $apneaSuenios
     * @return \Illuminate\Http\Response
     */
    public function show(ApneaSuenios $apneaSuenios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ApneaSuenios  $apneaSuenios
     * @return \Illuminate\Http\Response
     */
    public function edit(ApneaSuenios $apneaSuenios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ApneaSuenios  $apneaSuenios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $apneaSuenios= ApneaSuenios::find($request['apnea_suenio_id']);
      if(request()->ajax()) {
          $data = request()->validate([
            'licencia'=>'nullable',
            'trabajo_noche'=>'nullable',
            'num_dias_trabajados'=>'nullable',
            'num_dias_descanso'=>'nullable',
            'anios_trabaja_horario'=>'nullable',
            'apnea_suenio'=>'nullable',
            'ctrl_apnea'=>'nullable',
            'hta'=>'nullable',
            'medicacion'=>'nullable',
            'psg'=>'nullable',
            'ctrl_psg'=>'nullable',
            'en_mina'=>'nullable',
            'fuera_mina'=>'nullable',
            'criterio_uno_valor'=>'nullable',
            'criterio_dos_valor1'=>'nullable',
            'criterio_dos_valor2'=>'nullable',
            'criterio_dos_valor3'=>'nullable',
            'criterio_dos_valor4'=>'nullable',
            'criterio_dos_valor5'=>'nullable',
            'criterio_dos_valor6'=>'nullable',
            'criterio_dos_valor7'=>'nullable',
            'criterio_dos_valor8'=>'nullable',
            'criterio_dos_valor9'=>'nullable',
            'clasificacion_valor1'=>'nullable',
            'clasificacion_valor2'=>'nullable',
            'clasificacion_valor3'=>'nullable',
            'clasificacion_valor4'=>'nullable',
            'clasificacion_valor5'=>'nullable',
            'antecedente_faminiliar_apnea'=>'nullable',
            'antecedente_faminiliar_apnea_descripcion'=>'nullable',
            'entrevista_valor1'=>'nullable',
            'entrevista_valor2'=>'nullable',
            'entrevista_valor3'=>'nullable',
            'entrevista_valor4'=>'nullable',
            'peso'=>'nullable',
            'talla'=>'nullable',
            'imc'=>'nullable',
            'circunferencia'=>'nullable',
            'genero_paciente'=>'nullable',
            'psistolica'=>'nullable',
            'pdiastolica'=>'nullable',
            'hta_nueva'=>'nullable',
            'grado'=>'nullable',
            'criterio_a'=>'nullable',
            'criterio_b'=>'nullable',
            'criterio_c'=>'nullable',
            'criterio_d'=>'nullable',
            'criterio_e'=>'nullable',
            'riesgo_bajo'=>'nullable',
            'observaciones_recomendaciones'=>'nullable',
            'fecha_registro date'=>'nullable',
            'lista_examen_id'=>'nullable',
            'cita_id'=>'nullable'
          ]);

          $apneaSuenios->update([
            'licencia'=>isset($data['licencia']) ? $data['licencia'] :null,
            'trabajo_noche'=>isset($data['trabajo_noche']) ? $data['trabajo_noche'] :null,
            'num_dias_trabajados'=>isset($data['num_dias_trabajados']) ? $data['num_dias_trabajados'] :null,
            'num_dias_descanso'=>isset($data['num_dias_descanso']) ? $data['num_dias_descanso'] :null,
            'anios_trabaja_horario'=>isset($data['anios_trabaja_horario']) ? $data['anios_trabaja_horario'] :null,
            'apnea_suenio'=>isset($data['apnea_suenio']) ? $data['apnea_suenio'] :0,
            'ctrl_apnea'=>isset($data['ctrl_apnea']) ? $data['ctrl_apnea'] :null,
            'hta'=>isset($data['hta']) ? $data['hta'] :0,
            'medicacion'=>isset($data['medicacion']) ? $data['medicacion'] :null,
            'psg'=>isset($data['psg']) ? $data['psg'] :0,
            'ctrl_psg'=>isset($data['ctrl_psg']) ? $data['ctrl_psg'] :null,
            'en_mina'=>isset($data['en_mina']) ? $data['en_mina'] :null,
            'fuera_mina'=>isset($data['fuera_mina']) ? $data['fuera_mina'] :null,
            'criterio_uno_valor'=>isset($data['criterio_uno_valor']) ? $data['criterio_uno_valor'] :0,
            'criterio_dos_valor1'=>isset($data['criterio_dos_valor1']) ? $data['criterio_dos_valor1'] :0,
            'criterio_dos_valor2'=>isset($data['criterio_dos_valor2']) ? $data['criterio_dos_valor2'] :0,
            'criterio_dos_valor3'=>isset($data['criterio_dos_valor3']) ? $data['criterio_dos_valor3'] :0,
            'criterio_dos_valor4'=>isset($data['criterio_dos_valor4']) ? $data['criterio_dos_valor4'] :0,
            'criterio_dos_valor5'=>isset($data['criterio_dos_valor5']) ? $data['criterio_dos_valor5'] :0,
            'criterio_dos_valor6'=>isset($data['criterio_dos_valor6']) ? $data['criterio_dos_valor6'] :0,
            'criterio_dos_valor7'=>isset($data['criterio_dos_valor7']) ? $data['criterio_dos_valor7'] :0,
            'criterio_dos_valor8'=>isset($data['criterio_dos_valor8']) ? $data['criterio_dos_valor8'] :0,
            'criterio_dos_valor9'=>isset($data['criterio_dos_valor9']) ? $data['criterio_dos_valor9'] :0,
            'clasificacion_valor1'=>isset($data['clasificacion_valor1']) ? $data['clasificacion_valor1'] :0,
            'clasificacion_valor2'=>isset($data['clasificacion_valor2']) ? $data['clasificacion_valor2'] :0,
            'clasificacion_valor3'=>isset($data['clasificacion_valor3']) ? $data['clasificacion_valor3'] :0,
            'clasificacion_valor4'=>isset($data['clasificacion_valor4']) ? $data['clasificacion_valor4'] :0,
            'clasificacion_valor5'=>isset($data['clasificacion_valor5']) ? $data['clasificacion_valor5'] :0,
            'antecedente_faminiliar_apnea'=>isset($data['antecedente_faminiliar_apnea']) ? $data['antecedente_faminiliar_apnea'] :0,
            'antecedente_faminiliar_apnea_descripcion'=>isset($data['antecedente_faminiliar_apnea_descripcion']) ? $data['antecedente_faminiliar_apnea_descripcion'] :null,
            'entrevista_valor1'=>isset($data['entrevista_valor1']) ? $data['entrevista_valor1'] :0,
            'entrevista_valor2'=>isset($data['entrevista_valor2']) ? $data['entrevista_valor2'] :0,
            'entrevista_valor3'=>isset($data['entrevista_valor3']) ? $data['entrevista_valor3'] :0,
            'entrevista_valor4'=>isset($data['entrevista_valor4']) ? $data['entrevista_valor4'] :0,
            'peso'=>isset($data['peso']) ? $data['peso'] :null,
            'talla'=>isset($data['talla']) ? $data['talla'] :null,
            'imc'=>isset($data['imc']) ? $data['imc'] :null,
            'circunferencia'=>isset($data['circunferencia']) ? $data['circunferencia'] :null,
            'genero_paciente'=>isset($data['genero_paciente']) ? $data['genero_paciente'] :null,
            'psistolica'=>isset($data['psistolica']) ? $data['psistolica'] :null,
            'pdiastolica'=>isset($data['pdiastolica']) ? $data['pdiastolica'] :null,
            'hta_nueva'=>isset($data['hta_nueva']) ? $data['hta_nueva'] :null,
            'grado'=>isset($data['grado']) ? $data['grado'] :null,
            'criterio_a'=>isset($data['criterio_a']) ? $data['criterio_a'] :0,
            'criterio_b'=>isset($data['criterio_b']) ? $data['criterio_b'] :0,
            'criterio_c'=>isset($data['criterio_c']) ? $data['criterio_c'] :0,
            'criterio_d'=>isset($data['criterio_d']) ? $data['criterio_d'] :0,
            'criterio_e'=>isset($data['criterio_e']) ? $data['criterio_e'] :0,
            'riesgo_bajo'=>isset($data['riesgo_bajo']) ? $data['riesgo_bajo'] :0,
            'observaciones_recomendaciones'=>isset($data['observaciones_recomendaciones']) ? $data['observaciones_recomendaciones'] :null

          ]);
          return response()->json(['mensaje' => 'registro exitoso']);
      }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ApneaSuenios  $apneaSuenios
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApneaSuenios $apneaSuenios)
    {
        //
    }

    public function reporte_apnea_suenio($id)
    {
      $cita=Cita::find($id);
      $view=View::make('evaluacionmedica.reportes.apneasuenio',compact('cita'));
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      $pdf->stream($view);
      return $pdf->stream();
    }
}
