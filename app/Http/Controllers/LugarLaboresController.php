<?php

namespace App\Http\Controllers;

use App\LugarLabor;
use Illuminate\Http\Request;

class LugarLaboresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $lugares = LugarLabor::where('estado',true)->paginate(10);
       return view('LugarLabor.index',compact("lugares"));
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
        //
              if(request()->ajax())
     {
            //$data = request();
            //dd($data['rbTipoAgri']);
        $data = request()->validate([
            'nombre'=>'required',
        ],[
            'nombre.required'=>'El campo nombres es obligatorio',
        ]);

        LugarLabor::create([
            'nombre'=>$data['nombre'],
            'estado'=>true
        ]);
        return response()->json(['mensaje'=>"registro exitoso"]);
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LugarLabor  $lugarLabores
     * @return \Illuminate\Http\Response
     */
    public function show(LugarLabor $lugarLabores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LugarLabor  $lugarLabores
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $lugarlabor = LugarLabor::find($id);    

        return response()->json(
          $lugarlabor->toArray()
      );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LugarLabor  $lugarLabores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $lugarlabor= LugarLabor::find($request['id']); 

        $data = request()->validate([
            'id'=>'required',
            'nombre'=>'required'
        ],[
            'nombre.required'=>'El campo nombres es obligatorio',
        ]);


        $lugarlabor->update([
            'id'=>$data['id'],
            'nombre'=>$data['nombre']
        ]);

        $lugarlabor->save();


        return response()->json([
            'mensaje'=>$lugarlabor->toArray()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LugarLabor  $lugarLabores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
              $lugarlabor = LugarLabor::find($request['id']);

       $lugarlabor->update(
            ['estado'=>false]
        );

        $lugarlabor->save();

        return response()->json(
            ['mensaje'=>'eliminacion exitosa']
        );
    }
}
