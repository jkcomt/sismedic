<?php

namespace App\Http\Controllers;

use App\AcidoUrico;
use Illuminate\Http\Request;
use Carbon\Carbon;
class AcidoUricoController extends Controller
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
    public function store()
    {
        if(request()->ajax()) {
            $data = request()->validate([
                'acido_urico'=>'required',
                'lista_examen_id'=>'required',
                'cita_id'=>'required'
            ]);

            $acidoUrico = AcidoUrico::create([
                'acido_urico'=>$data['acido_urico'],
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
     * @param  \App\AcidoUrico  $acidoUrico
     * @return \Illuminate\Http\Response
     */
    public function show(AcidoUrico $acidoUrico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AcidoUrico  $acidoUrico
     * @return \Illuminate\Http\Response
     */
    public function edit(AcidoUrico $acidoUrico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AcidoUrico  $acidoUrico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AcidoUrico $acidoUrico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AcidoUrico  $acidoUrico
     * @return \Illuminate\Http\Response
     */
    public function destroy(AcidoUrico $acidoUrico)
    {
        //
    }
}
