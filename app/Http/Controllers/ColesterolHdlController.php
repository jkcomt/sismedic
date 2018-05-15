<?php

namespace App\Http\Controllers;

use App\ColesterolHdl;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ColesterolHdlController extends Controller
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
                'colesterol_hdl'=>'required',
                'lista_examen_id'=>'required',
                'cita_id'=>'required'
            ]);

            $colesterolHdl = ColesterolHdl::create([
                'colesterol_hdl'=>$data['colesterol_hdl'],
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
     * @param  \App\ColesterolHdl  $colesterolHdl
     * @return \Illuminate\Http\Response
     */
    public function show(ColesterolHdl $colesterolHdl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ColesterolHdl  $colesterolHdl
     * @return \Illuminate\Http\Response
     */
    public function edit(ColesterolHdl $colesterolHdl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ColesterolHdl  $colesterolHdl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $colesterolHdl = ColesterolHdl::find($request['colesterol_hdl_id']);
      if(request()->ajax()) {
          $data = request()->validate([
              'colesterol_hdl'=>'required',
              'lista_examen_id'=>'required',
              'cita_id'=>'required'
          ]);

          $colesterolHdl->update([
              'colesterol_hdl'=>$data['colesterol_hdl'],
              'fecha_registro'=>Carbon::now(),
              'lista_examen_id'=>$data['lista_examen_id'],
              'cita_id'=>$data['cita_id'],
              'estado'=>true
          ]);
          $colesterolHdl->save();
          return response()->json(['mensaje' => 'registro actualizado']);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ColesterolHdl  $colesterolHdl
     * @return \Illuminate\Http\Response
     */
    public function destroy(ColesterolHdl $colesterolHdl)
    {
        //
    }
}
