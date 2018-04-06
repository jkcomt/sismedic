<?php

namespace App\Http\Controllers;

use App\Profesion;
use Illuminate\Http\Request;

class ProfesionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $profesiones = Profesion::where('estado',true)->paginate(10);
        return view('profesion.index',compact("profesiones"));
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

            Profesion::create([
                'nombre'=>$data['nombre'],
                'estado'=>true
            ]);
            return response()->json(['mensaje'=>"registro exitoso"]);
        }

     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profesion  $profesiones
     * @return \Illuminate\Http\Response
     */
    public function show(Profesion $profesiones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profesion  $profesiones
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $profesiones = Profesion::find($id);    

        return response()->json(
          $profesiones->toArray()
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profesion  $profesiones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $profesiones = Profesion::find($request['id']); 

        $data = request()->validate([
                'id'=>'required',
                'nombre'=>'required'
            ],[
                'nombre.required'=>'El campo nombres es obligatorio',
            ]);


        $profesiones->update([
            'id'=>$data['id'],
            'nombre'=>$data['nombre']
        ]);

        $profesiones->save();


        return response()->json([
            'mensaje'=>$profesiones->toArray()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profesion  $profesiones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      
        $profesiones = Profesion::find($request['id']);

        $profesiones->update(
            ['estado'=>false]
        );

        $profesiones->save();

        return response()->json(
            ['mensaje'=>'eliminacion exitosa']
        );


     }
}
