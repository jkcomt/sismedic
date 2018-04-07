<?php

namespace App\Http\Controllers;

use App\Ocupacion;
use Illuminate\Http\Request;

class OcupacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $ocupaciones = Ocupacion::where('estado',true)->paginate(10);
       return view('ocupaciones.index',compact("ocupaciones"));
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

        Ocupacion::create([
            'nombre'=>$data['nombre'],
            'estado'=>true
        ]);
        return response()->json(['mensaje'=>"registro exitoso"]);
    }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ocupaciones  $ocupaciones
     * @return \Illuminate\Http\Response
     */
    public function show(Ocupacion $ocupaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ocupaciones  $ocupaciones
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $ocupaciones = Ocupacion::find($id);    

        return response()->json(
           $ocupaciones->toArray()
      );

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ocupaciones  $ocupaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
          $ocupaciones= Ocupacion::find($request['id']); 

        $data = request()->validate([
            'id'=>'required',
            'nombre'=>'required'
        ],[
            'nombre.required'=>'El campo nombres es obligatorio',
        ]);


         $ocupaciones->update([
            'id'=>$data['id'],
            'nombre'=>$data['nombre']
        ]);

         $ocupaciones->save();


        return response()->json([
            'mensaje'=> $ocupaciones->toArray()
        ]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ocupaciones  $ocupaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
           $ocupaciones = Ocupacion::find($request['id']);

        $ocupaciones->update(
            ['estado'=>false]
        );

         $ocupaciones->save();

        return response()->json(
            ['mensaje'=>'eliminacion exitosa']
        );
    }
}
