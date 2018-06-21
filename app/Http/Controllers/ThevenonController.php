<?php

namespace App\Http\Controllers;

use App\Thevenon;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class ThevenonController extends Controller
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
          if(request()->ajax())
            {
                $data = request()->validate([
                    'thevenon'=>'nullable',
                    'lista_examen_id'=>'nullable',
                    'cita_id'=>'nullable'
                ]);
                $thevenon = Thevenon::create([
                   'thevenon_descripcion'=>isset($data['thevenon'])? $data['thevenon']:0,
                   'fecha_registro'=>Carbon::now(),
                   'lista_examen_id'=>isset($data['lista_examen_id'])? $data['lista_examen_id']:null,
                   'cita_id'=>isset($data['cita_id'])? $data['cita_id']:null,
                   'estado'=>true,
                   'user_id'=>Auth::user()->id
                ]);
                return response()->json(['mensaje' =>"registro exitoso"]);
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Thevenon  $thevenon
     * @return \Illuminate\Http\Response
     */
    public function show(Thevenon $thevenon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Thevenon  $thevenon
     * @return \Illuminate\Http\Response
     */
    public function edit(Thevenon $thevenon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Thevenon  $thevenon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       $thevenon= Thevenon::find($request['thevenon_id']);
      if(request()->ajax())
        {
            $data = request()->validate([
                'thevenon'=>'nullable',
                'lista_examen_id'=>'nullable',
                'cita_id'=>'nullable'
            ]);
            $thevenon->update([
               'thevenon_descripcion'=>isset($data['thevenon'])? $data['thevenon']:0
            ]);
            return response()->json(['mensaje' =>"registro Actualizado"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Thevenon  $thevenon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thevenon $thevenon)
    {
        //
    }
}
