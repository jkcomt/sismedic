<?php

namespace App\Http\Controllers;

use App\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargos= Cargo::where('estado',true)->paginate(10);
        return view('cargo.index',compact('cargos'));


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
            //$data = request();
            //dd($data['rbTipoAgri']);
        $data = request()->validate([
            'nombre'=>'required',
        ],[
            'nombre.required'=>'El campo nombres es obligatorio',
        ]);

        Cargo::create([
            'descripcion'=>$data['nombre'],
            'estado'=>true
        ]);
        return response()->json(['mensaje'=>"registro exitoso"]);
    }



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function show(Cargo $cargo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cargo = Cargo::find($id);    
        return response()->json(
          $cargo->toArray()
      );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        $cargo= Cargo::find($request['id']); 
        $data = request()->validate([
            'id'=>'required',
            'nombre'=>'required'
        ],[    
            'nombre.required'=>'El campo nombres es obligatorio',
        ]);


        $cargo->update([
            'id'=>$data['id'],
            'descripcion'=>$data['nombre']
        ]);

        $cargo->save();


        return response()->json([
            'mensaje'=>$cargo->toArray()
        ]);    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $cargo = Cargo::find($request['id']);

        $cargo->update(
            ['estado'=>false]
        );

        $cargo->save();

        return response()->json(
            ['mensaje'=>'eliminacion exitosa']
        );
        
    }
}
