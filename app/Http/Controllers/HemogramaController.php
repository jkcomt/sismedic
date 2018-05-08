<?php

namespace App\Http\Controllers;

use App\Hemograma;
use Illuminate\Http\Request;

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
                'hemoglobina'=>'',
                'hematocrito'=>'',
                'leucocitos'=>'',
                'abastonados'=>'',
                'segmentados'=>'',
                'monocitos'=>'',
                'linfocitos'=>'',
                'eosinofilos'=>'',
                'basofilos'=>'',
                'conclusion_hemograma'=>'',
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
    public function update(Request $request, Hemograma $hemograma)
    {
        //
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
