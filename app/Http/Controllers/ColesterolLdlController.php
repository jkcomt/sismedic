<?php

namespace App\Http\Controllers;

use App\ColesterolLdl;
use Illuminate\Http\Request;
use Carbon\Carbon;
class ColesterolLdlController extends Controller
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
                'colesterol_ldl'=>'required',
                'lista_examen_id'=>'required',
                'cita_id'=>'required'
            ]);

            $colesterolLdl = ColesterolLdl::create([
                'colesterol_ldl'=>$data['colesterol_ldl'],
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
     * @param  \App\ColesterolLdl  $colesterolLdl
     * @return \Illuminate\Http\Response
     */
    public function show(ColesterolLdl $colesterolLdl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ColesterolLdl  $colesterolLdl
     * @return \Illuminate\Http\Response
     */
    public function edit(ColesterolLdl $colesterolLdl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ColesterolLdl  $colesterolLdl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $colesterolLdl = ColesterolLdl::find($request['colesterol_ldl_id']);
      if(request()->ajax()) {
          $data = request()->validate([
              'colesterol_ldl'=>'required',
              'lista_examen_id'=>'required',
              'cita_id'=>'required'
          ]);

          $colesterolLdl->update([
              'colesterol_ldl'=>$data['colesterol_ldl'],
              'fecha_registro'=>Carbon::now(),
              'lista_examen_id'=>$data['lista_examen_id'],
              'cita_id'=>$data['cita_id'],
              'estado'=>true
          ]);
          $colesterolLdl->save();
          return response()->json(['mensaje' => 'registro exitoso']);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ColesterolLdl  $colesterolLdl
     * @return \Illuminate\Http\Response
     */
    public function destroy(ColesterolLdl $colesterolLdl)
    {
        //
    }
}
