<?php

namespace App\Http\Controllers;

use App\ColesterolTotal;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ColesterolTotalController extends Controller
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
                'colesterol_total'=>'required',
                'lista_examen_id'=>'required',
                'cita_id'=>'required'
            ]);

            $colesterolTotal = ColesterolTotal::create([
                'colesterol_total'=>$data['colesterol_total'],
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
     * @param  \App\ColesterolTotal  $colesterolTotal
     * @return \Illuminate\Http\Response
     */
    public function show(ColesterolTotal $colesterolTotal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ColesterolTotal  $colesterolTotal
     * @return \Illuminate\Http\Response
     */
    public function edit(ColesterolTotal $colesterolTotal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ColesterolTotal  $colesterolTotal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ColesterolTotal $colesterolTotal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ColesterolTotal  $colesterolTotal
     * @return \Illuminate\Http\Response
     */
    public function destroy(ColesterolTotal $colesterolTotal)
    {
        //
    }
}
