<?php

namespace App\Http\Controllers;

use App\Triglicerido;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TrigliceridoController extends Controller
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
                'triglicerido'=>'required',
                'lista_examen_id'=>'required',
                'cita_id'=>'required'
            ]);

            $triglicerido = Triglicerido::create([
                'triglicerido'=>$data['triglicerido'],
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
     * @param  \App\Triglicerido  $triglicerido
     * @return \Illuminate\Http\Response
     */
    public function show(Triglicerido $triglicerido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Triglicerido  $triglicerido
     * @return \Illuminate\Http\Response
     */
    public function edit(Triglicerido $triglicerido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Triglicerido  $triglicerido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Triglicerido $triglicerido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Triglicerido  $triglicerido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Triglicerido $triglicerido)
    {
        //
    }
}
