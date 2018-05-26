<?php

namespace App\Http\Controllers;

use App\EvaluacionCognitiva;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Cita;
use View;

class EvaluacionCognitivaController extends Controller
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
                'en_ano' => 'nullable',
                'en_estacion' => 'nullable',
                'en_dia_semana' => 'nullable',
                'en_mes'=>'nullable',
                'en_fecha'=>'nullable',

                'en_lugar_estamos'=>'nullable',
                'en_servicio_estamos'=>'nullable',
                'en_distrito_estamos'=>'nullable',
                'en_provincia_estamos'=>'nullable',
                'en_pais_estamos'=>'nullable',

                'repite_arbol'=>'nullable',
                'repite_mesa'=>'nullable',
                'repite_avion'=>'nullable',

                'tiene_30_monedas'=>'nullable',
                'tiene_27_monedas'=>'nullable',
                'tiene_24_monedas'=>'nullable',
                'tiene_21_monedas'=>'nullable',
                'tiene_18_monedas'=>'nullable',

                'toma_papel'=>'nullable',
                'dobla_mitad'=>'nullable',
                'puso_suelo'=>'nullable',

                'repite_arbol_dos'=>'nullable',
                'repite_mesa_dos'=>'nullable',
                'repite_avion_dos'=>'nullable',

                'reconoce_lapiz'=>'nullable',
                'reconoce_reloj'=>'nullable',

                'repite_frase'=>'nullable',

                'escribe_lee_actua'=>'nullable',

                'escribe_sujeto_predicado'=>'nullable',

                'copia_dibujo'=>'nullable',

                'puntaje'=>'nullable',

                'lista_examen_id'=>'required',
                'cita_id'=>'required'

            ]);

            $evaluacionCognitiva = EvaluacionCognitiva::create([
                'en_ano' => isset($data['en_ano'])? $data['en_ano']:null,
                'en_estacion'=>isset($data['en_estacion'])? $data['en_estacion']:null,
                'en_dia_semana'=>isset($data['en_dia_semana'])? $data['en_dia_semana']:null,
                'en_mes'=>isset($data['en_mes'])? $data['en_mes']:null,
                'en_fecha'=>isset($data['en_fecha'])? $data['en_fecha']:null,

                'en_lugar_estamos'=>isset($data['en_lugar_estamos'])? $data['en_lugar_estamos']:null,
                'en_servicio_estamos'=>isset($data['en_servicio_estamos'])? $data['en_servicio_estamos']:null,
                'en_distrito_estamos'=>isset($data['en_distrito_estamos'])? $data['en_distrito_estamos']:null,
                'en_provincia_estamos'=>isset($data['en_provincia_estamos'])? $data['en_provincia_estamos']:null,
                'en_pais_estamos'=>isset($data['en_pais_estamos'])? $data['en_pais_estamos']:null,

                'repite_arbol'=>isset($data['repite_arbol'])? $data['repite_arbol']:null,
                'repite_mesa'=>isset($data['repite_mesa'])? $data['repite_mesa']:null,
                'repite_avion'=>isset($data['repite_avion'])? $data['repite_avion']:null,

                'tiene_30_monedas'=>isset($data['tiene_30_monedas'])? $data['tiene_30_monedas']:null,
                'tiene_27_monedas'=>isset($data['tiene_27_monedas'])? $data['tiene_27_monedas']:null,
                'tiene_24_monedas'=>isset($data['tiene_24_monedas'])? $data['tiene_24_monedas']:null,
                'tiene_21_monedas'=>isset($data['tiene_21_monedas'])? $data['tiene_21_monedas']:null,
                'tiene_18_monedas'=>isset($data[''])? $data['']:null,

                'toma_papel'=>isset($data['toma_papel'])? $data['toma_papel']:null,
                'dobla_mitad'=>isset($data['dobla_mitad'])? $data['dobla_mitad']:null,
                'puso_suelo'=>isset($data['puso_suelo'])? $data['puso_suelo']:null,

                'repite_arbol_dos'=>isset($data['repite_arbol_dos'])? $data['repite_arbol_dos']:null,
                'repite_mesa_dos'=>isset($data['repite_arbol_dos'])? $data['repite_arbol_dos']:null,
                'repite_avion_dos'=>isset($data['repite_avion_dos'])? $data['repite_avion_dos']:null,

                'reconoce_lapiz'=>isset($data['reconoce_lapiz'])? $data['reconoce_lapiz']:null,
                'reconoce_reloj'=>isset($data['reconoce_reloj'])? $data['reconoce_reloj']:null,

                'repite_frase'=>isset($data['repite_frase'])? $data['repite_frase']:null,

                'escribe_lee_actua'=>isset($data['escribe_lee_actua'])? $data['escribe_lee_actua']:null,

                'escribe_sujeto_predicado'=>isset($data['escribe_sujeto_predicado'])? $data['escribe_sujeto_predicado']:null,

                'copia_dibujo'=>isset($data['copia_dibujo'])? $data['copia_dibujo']:null,

                'puntaje'=>$data['puntaje'],

                'fecha_registro' => Carbon::now(),
                'lista_examen_id' => $data['lista_examen_id'],
                'cita_id' => $data['cita_id'],
                'estado' => true
            ]);

            return response()->json(['mensaje' => 'registro exitoso']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EvaluacionCognitiva  $evaluacionCognitiva
     * @return \Illuminate\Http\Response
     */
    public function show(EvaluacionCognitiva $evaluacionCognitiva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EvaluacionCognitiva  $evaluacionCognitiva
     * @return \Illuminate\Http\Response
     */
    public function edit(EvaluacionCognitiva $evaluacionCognitiva)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EvaluacionCognitiva  $evaluacionCognitiva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $evaluacionCognitiva = EvaluacionCognitiva::find($request['evaluacionCognitivia_id']);

        if(request()->ajax()) {
            $data = request()->validate([
                'en_ano' => 'nullable',
                'en_estacion' => 'nullable',
                'en_dia_semana' => 'nullable',
                'en_mes'=>'nullable',
                'en_fecha'=>'nullable',

                'en_lugar_estamos'=>'nullable',
                'en_servicio_estamos'=>'nullable',
                'en_distrito_estamos'=>'nullable',
                'en_provincia_estamos'=>'nullable',
                'en_pais_estamos'=>'nullable',

                'repite_arbol'=>'nullable',
                'repite_mesa'=>'nullable',
                'repite_avion'=>'nullable',

                'tiene_30_monedas'=>'nullable',
                'tiene_27_monedas'=>'nullable',
                'tiene_24_monedas'=>'nullable',
                'tiene_21_monedas'=>'nullable',
                'tiene_18_monedas'=>'nullable',

                'toma_papel'=>'nullable',
                'dobla_mitad'=>'nullable',
                'puso_suelo'=>'nullable',

                'repite_arbol_dos'=>'nullable',
                'repite_mesa_dos'=>'nullable',
                'repite_avion_dos'=>'nullable',

                'reconoce_lapiz'=>'nullable',
                'reconoce_reloj'=>'nullable',

                'repite_frase'=>'nullable',

                'escribe_lee_actua'=>'nullable',

                'escribe_sujeto_predicado'=>'nullable',

                'copia_dibujo'=>'nullable',

                'puntaje'=>'nullable',

                'lista_examen_id'=>'required',
                'cita_id'=>'required'

            ]);

            $evaluacionCognitiva->update([
                'en_ano' => isset($data['en_ano'])? $data['en_ano']:null,
                'en_estacion'=>isset($data['en_estacion'])? $data['en_estacion']:null,
                'en_dia_semana'=>isset($data['en_dia_semana'])? $data['en_dia_semana']:null,
                'en_mes'=>isset($data['en_mes'])? $data['en_mes']:null,
                'en_fecha'=>isset($data['en_fecha'])? $data['en_fecha']:null,

                'en_lugar_estamos'=>isset($data['en_lugar_estamos'])? $data['en_lugar_estamos']:null,
                'en_servicio_estamos'=>isset($data['en_servicio_estamos'])? $data['en_servicio_estamos']:null,
                'en_distrito_estamos'=>isset($data['en_distrito_estamos'])? $data['en_distrito_estamos']:null,
                'en_provincia_estamos'=>isset($data['en_provincia_estamos'])? $data['en_provincia_estamos']:null,
                'en_pais_estamos'=>isset($data['en_pais_estamos'])? $data['en_pais_estamos']:null,

                'repite_arbol'=>isset($data['repite_arbol'])? $data['repite_arbol']:null,
                'repite_mesa'=>isset($data['repite_mesa'])? $data['repite_mesa']:null,
                'repite_avion'=>isset($data['repite_avion'])? $data['repite_avion']:null,

                'tiene_30_monedas'=>isset($data['tiene_30_monedas'])? $data['tiene_30_monedas']:null,
                'tiene_27_monedas'=>isset($data['tiene_27_monedas'])? $data['tiene_27_monedas']:null,
                'tiene_24_monedas'=>isset($data['tiene_24_monedas'])? $data['tiene_24_monedas']:null,
                'tiene_21_monedas'=>isset($data['tiene_21_monedas'])? $data['tiene_21_monedas']:null,
                'tiene_18_monedas'=>isset($data[''])? $data['']:null,

                'toma_papel'=>isset($data['toma_papel'])? $data['toma_papel']:null,
                'dobla_mitad'=>isset($data['dobla_mitad'])? $data['dobla_mitad']:null,
                'puso_suelo'=>isset($data['puso_suelo'])? $data['puso_suelo']:null,

                'repite_arbol_dos'=>isset($data['repite_arbol_dos'])? $data['repite_arbol_dos']:null,
                'repite_mesa_dos'=>isset($data['repite_arbol_dos'])? $data['repite_arbol_dos']:null,
                'repite_avion_dos'=>isset($data['repite_avion_dos'])? $data['repite_avion_dos']:null,

                'reconoce_lapiz'=>isset($data['reconoce_lapiz'])? $data['reconoce_lapiz']:null,
                'reconoce_reloj'=>isset($data['reconoce_reloj'])? $data['reconoce_reloj']:null,

                'repite_frase'=>isset($data['repite_frase'])? $data['repite_frase']:null,

                'escribe_lee_actua'=>isset($data['escribe_lee_actua'])? $data['escribe_lee_actua']:null,

                'escribe_sujeto_predicado'=>isset($data['escribe_sujeto_predicado'])? $data['escribe_sujeto_predicado']:null,

                'copia_dibujo'=>isset($data['copia_dibujo'])? $data['copia_dibujo']:null,

                'puntaje'=>$data['puntaje']

            ]);

            return response()->json(['mensaje' => 'registro actualizado']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EvaluacionCognitiva  $evaluacionCognitiva
     * @return \Illuminate\Http\Response
     */
    public function destroy(EvaluacionCognitiva $evaluacionCognitiva)
    {
        //
    }

    public function reporte($id){

        //$cita=Cita::find($id);
        $evaluacionCognitiva = EvaluacionCognitiva::find($id);
        $view=View::make('evaluacionmedica.reportes.evaluacioncognitiva',compact('evaluacionCognitiva'));
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        $pdf->stream($view);
        return $pdf->stream();
    }
}
