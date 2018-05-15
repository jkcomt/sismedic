<?php

namespace App\Http\Controllers;

use App\Sifilis;
use Illuminate\Http\Request;
use Carbon\Carbon;
class SifilisController extends Controller
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
                'resultado'=>'required',
                'lista_examen_id'=>'required',
                'cita_id'=>'required'
            ]);

            $sifilis = Sifilis::create([
                'resultado'=>$data['resultado'],
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
     * @param  \App\Sifilis  $sifilis
     * @return \Illuminate\Http\Response
     */
    public function show(Sifilis $sifilis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sifilis  $sifilis
     * @return \Illuminate\Http\Response
     */
    public function edit(Sifilis $sifilis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sifilis  $sifilis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $sifilis = Sifilis::find($request['sifilis_id']);
      if(request()->ajax()) {
          $data = request()->validate([
              'resultado'=>'required',
              'lista_examen_id'=>'required',
              'cita_id'=>'required'
          ]);

          $sifilis->update([
              'resultado'=>$data['resultado'],
              'fecha_registro'=>Carbon::now(),
              'lista_examen_id'=>$data['lista_examen_id'],
              'cita_id'=>$data['cita_id'],
              'estado'=>true
          ]);
          $sifilis->save();
          return response()->json(['mensaje' => 'registro actualizado']);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sifilis  $sifilis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sifilis $sifilis)
    {
        //
    }
}
