<?php

namespace App\Http\Controllers;

use App\Hemograma;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HemogramaController extends Controller
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
                'hemoglobina'=>'nullable',
                'hematocrito'=>'nullable',
                'leucocitos'=>'nullable',
                'abastonados'=>'nullable',
                'segmentados'=>'nullable',
                'monocitos'=>'nullable',
                'linfocitos'=>'nullable',
                'eosinofilos'=>'nullable',
                'basofilos'=>'nullable',
                'conclusion'=>'nullable',
                'lista_examen_id'=>'required',
                'cita_id'=>'required'
            ]);

            $hemograma = Hemograma::create([
              'hemoglobina'=>isset($data['hemoglobina'])? $data['hemoglobina']:null,
              'hematocrito'=>isset($data['hematocrito'])? $data['hematocrito']:null,
              'leucocitos'=>isset($data['leucocitos'])? $data['leucocitos']:null,
              'abastonados'=>isset($data['abastonados'])? $data['abastonados']:null,
              'segmentados'=>isset($data['segmentados'])? $data['segmentados']:null,
              'monocitos'=>isset($data['monocitos'])? $data['monocitos']:null,
              'linfocitos'=>isset($data['linfocitos'])? $data['linfocitos']:null,
              'eosinofilos'=>isset($data['eosinofilos'])? $data['eosinofilos']:null,
              'basofilos'=>isset($data['basofilos'])? $data['basofilos']:null,
             'conclusion_hemograma'=>isset($data['conclusion'])? $data['conclusion']:null,
             'fecha_registro'=>Carbon::now(),
             'lista_examen_id'=>isset($data['lista_examen_id'])? $data['lista_examen_id']:null,
             'cita_id'=>isset($data['cita_id'])? $data['cita_id']:null,
             'estado'=>true
            ]);

            return response()->json(['mensaje' =>"registro exitoso"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hemograma  $hemograma
     * @return \Illuminate\Http\Response
     */
    public function show(Hemograma $hemograma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hemograma  $hemograma
     * @return \Illuminate\Http\Response
     */
    public function edit(Hemograma $hemograma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hemograma  $hemograma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $hemograma = Hemograma::find($request['hemograma_id']);
      if(request()->ajax()) {
          $data = request()->validate([
              'hemoglobina'=>'nullable',
              'hematocrito'=>'nullable',
              'leucocitos'=>'nullable',
              'abastonados'=>'nullable',
              'segmentados'=>'nullable',
              'monocitos'=>'nullable',
              'linfocitos'=>'nullable',
              'eosinofilos'=>'nullable',
              'basofilos'=>'nullable',
              'conclusion'=>'nullable',
              'lista_examen_id'=>'required',
              'cita_id'=>'required'
          ]);

          $hemograma->update([
               'hemoglobina'=>isset($data['hemoglobina'])? $data['hemoglobina']:null,
               'hematocrito'=>isset($data['hematocrito'])? $data['hematocrito']:null,
               'leucocitos'=>isset($data['leucocitos'])? $data['leucocitos']:null,
               'abastonados'=>isset($data['abastonados'])? $data['abastonados']:null,
               'segmentados'=>isset($data['segmentados'])? $data['segmentados']:null,
               'monocitos'=>isset($data['monocitos'])? $data['monocitos']:null,
               'linfocitos'=>isset($data['linfocitos'])? $data['linfocitos']:null,
               'eosinofilos'=>isset($data['eosinofilos'])? $data['eosinofilos']:null,
               'basofilos'=>isset($data['basofilos'])? $data['basofilos']:null,
              'conclusion_hemograma'=>isset($data['conclusion'])? $data['conclusion']:null,
              'fecha_registro'=>Carbon::now(),
              'lista_examen_id'=>isset($data['lista_examen_id'])? $data['lista_examen_id']:null,
              'cita_id'=>isset($data['cita_id'])? $data['cita_id']:null,
              'estado'=>true
          ]);
            $hemograma->save();
          return response()->json(['mensaje' =>"registro exitoso"]);
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hemograma  $hemograma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hemograma $hemograma)
    {
        //
    }
}
