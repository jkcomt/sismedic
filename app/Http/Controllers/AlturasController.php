<?php

namespace App\Http\Controllers;

use App\Altura;
use Illuminate\Http\Request;

class AlturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alturas= Altura::where('estado',true)->paginate(10);
       return view('altura.index',compact("alturas"));
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

        Altura::create([
            'descripcion'=>$data['nombre'],
            'estado'=>true
        ]);
        return response()->json(['mensaje'=>"registro exitoso"]);
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alturas  $alturas
     * @return \Illuminate\Http\Response
     */
    public function show(Alturas $alturas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alturas  $alturas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $altura = Altura::find($id);    

        return response()->json(
          $altura->toArray()
      );


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alturas  $alturas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
            $altura=  Altura::find($request['id']); 

        $data = request()->validate([
            'id'=>'required',
            'nombre'=>'required'
        ],[
            'nombre.required'=>'El campo nombres es obligatorio',
        ]);


           $altura->update([
            'id'=>$data['id'],
            'descripcion'=>$data['nombre']
        ]);

           $altura->save();


        return response()->json([
            'mensaje'=>   $altura->toArray()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alturas  $alturas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
                  $altura = Altura::find($request['id']);

       $altura->update(
            ['estado'=>false]
        );

        $altura->save();

        return response()->json(
            ['mensaje'=>'eliminacion exitosa']
        );
    }
}
