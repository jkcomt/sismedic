<?php

namespace App\Http\Controllers;

use App\Anexo7ds;
use Illuminate\Http\Request;
use Carbon\Carbon;

class Anexo7dsController extends Controller
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
                'anemia'=>'nullable',
                'cirugia_mayor'=>'nullable',
                'desordenes_coagulacion'=>'nullable',
                'diabetes_mellitus'=>'nullable',
                'hipertension_arterial'=>'nullable',
                'embarazo'=>'nullable',
                'problemas_neurologicos'=>'nullable',
                'infecciones_recientes'=>'nullable',
                'obesidad_morbida'=>'nullable',
                'problemas_cardiacos'=>'nullable',
                'problemas_respiratorios'=>'nullable',
                'problemas_oftalmologicos'=>'nullable',
                'problemas_digestivos'=>'nullable',
                'apnea_sueno'=>'nullable',
                'otra_condicion'=>'nullable',
                'alergias'=>'nullable',
                'uso_medicacion'=>'nullable',
                'observacion'=>'nullable',
                'aptitud_7d'=>'nullable',
                'lista_examen_id'=>'required',
                'cita_id'=>'required'
            ]);

            $anexo7d = Anexo7ds::create([
                'anemia'=>isset($data['anemia'])? $data['anemia']:null,
                'cirugia_mayor_reciente'=>isset($data['cirugia_mayor'])? $data['cirugia_mayor']:null,
                'desordenes_coagulacion'=>isset($data['desordenes_coagulacion'])? $data['desordenes_coagulacion']:null,
                'diabetes_mellitus'=>isset($data['diabetes_mellitus'])? $data['diabetes_mellitus']:null,
                'hipertension_arterial'=>isset($data['hipertension_arterial'])? $data['hipertension_arterial']:null,
                'embarazo'=>isset($data['embarazo'])? $data['embarazo']:null,
                'problemas_neurologicos'=>isset($data['problemas_neurologicos'])? $data['problemas_neurologicos']:null,
                'infecciones_recientes'=>isset($data['infecciones_recientes'])? $data['infecciones_recientes']:null,
                'obesidad_morbida'=>isset($data['obesidad_morbida'])? $data['obesidad_morbida']:null,
                'problemas_cardiacos'=>isset($data['problemas_cardiacos'])? $data['problemas_cardiacos']:null,
                'problemas_respiratorios'=>isset($data['problemas_respiratorios'])? $data['problemas_respiratorios']:null,
                'problemas_oftalmologicos'=>isset($data['problemas_oftalmologicos'])? $data['problemas_oftalmologicos']:null,
                'problemas_digestivos'=>isset($data['problemas_digestivos'])? $data['problemas_digestivos']:null,
                'apnea_del_sueno'=>isset($data['apnea_sueno'])? $data['apnea_sueno']:null,
                'otra_condicion'=>isset($data['otra_condicion'])? $data['otra_condicion']:null,
                'alergias'=>isset($data['alergias'])? $data['alergias']:null,
                'uso_de_medicacion_actual'=>$data['uso_medicacion'],
                'observacion'=>$data['observacion'],
                'apto'=>isset($data['aptitud_7d'])? $data['aptitud_7d']:null,
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
     * @param  \App\Anexo7ds  $anexo7ds
     * @return \Illuminate\Http\Response
     */
    public function show(Anexo7ds $anexo7ds)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Anexo7ds  $anexo7ds
     * @return \Illuminate\Http\Response
     */
    public function edit(Anexo7ds $anexo7ds)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Anexo7ds  $anexo7ds
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anexo7ds $anexo7ds)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Anexo7ds  $anexo7ds
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anexo7ds $anexo7ds)
    {
        //
    }
}
