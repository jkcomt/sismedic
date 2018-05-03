<?php

namespace App\Http\Controllers;

use App\VelocidadSedimentacion;
use Illuminate\Http\Request;
use Carbon\Carbon;
class VelocidadSedimentacionController extends Controller
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
                'sedimentacion'=>'required',
                'lista_examen_id'=>'required',
                'cita_id'=>'required'
            ]);

            $sedimentacion = VelocidadSedimentacion::create([
                'velocidad_sedimentacion_globular'=>$data['sedimentacion'],
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
     * @param  \App\VelocidadSedimentacion  $velocidadSedimentacion
     * @return \Illuminate\Http\Response
     */
    public function show(VelocidadSedimentacion $velocidadSedimentacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VelocidadSedimentacion  $velocidadSedimentacion
     * @return \Illuminate\Http\Response
     */
    public function edit(VelocidadSedimentacion $velocidadSedimentacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VelocidadSedimentacion  $velocidadSedimentacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VelocidadSedimentacion $velocidadSedimentacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VelocidadSedimentacion  $velocidadSedimentacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(VelocidadSedimentacion $velocidadSedimentacion)
    {
        //
    }
}
