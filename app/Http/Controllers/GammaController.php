<?php

namespace App\Http\Controllers;

use App\Gamma;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class GammaController extends Controller
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
                'ggt'=>'required',
                'lista_examen_id'=>'required',
                'cita_id'=>'required'
            ]);

            $gama = Gamma::create([
                'ggt'=>$data['ggt'],
                'fecha_registro'=>Carbon::now(),
                'lista_examen_id'=>$data['lista_examen_id'],
                'cita_id'=>$data['cita_id'],
                'estado'=>true,
                'user_id'=>Auth::user()->id
            ]);

            return response()->json(['mensaje' => 'registro exitoso']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gamma  $gamma
     * @return \Illuminate\Http\Response
     */
    public function show(Gamma $gamma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gamma  $gamma
     * @return \Illuminate\Http\Response
     */
    public function edit(Gamma $gamma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gamma  $gamma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $gama = Gamma::find($request['ggt_id']);
      if(request()->ajax()) {
          $data = request()->validate([
              'ggt'=>'required',
              'lista_examen_id'=>'required',
              'cita_id'=>'required'
          ]);

          $gama->update([
              'ggt'=>$data['ggt'],
              'fecha_registro'=>Carbon::now(),
              'lista_examen_id'=>$data['lista_examen_id'],
              'cita_id'=>$data['cita_id'],
              'estado'=>true
          ]);
          $gama->save();
          return response()->json(['mensaje' => 'registro actualizado']);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gamma  $gamma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gamma $gamma)
    {
        //
    }
}
