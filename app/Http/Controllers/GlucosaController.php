<?php

namespace App\Http\Controllers;

use App\Glucosa;
use Illuminate\Http\Request;
use Carbon\Carbon;

class GlucosaController extends Controller
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
                'glucosa'=>'required',
                'lista_examen_id'=>'required',
                'cita_id'=>'required'
            ]);

            $glucosa = Glucosa::create([
                'glucosa'=>$data['glucosa'],
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
     * @param  \App\Glucosa  $glucosa
     * @return \Illuminate\Http\Response
     */
    public function show(Glucosa $glucosa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Glucosa  $glucosa
     * @return \Illuminate\Http\Response
     */
    public function edit(Glucosa $glucosa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Glucosa  $glucosa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Glucosa $glucosa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Glucosa  $glucosa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Glucosa $glucosa)
    {
        //
    }
}
