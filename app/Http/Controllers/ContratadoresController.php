<?php

namespace App\Http\Controllers;

use App\Contratador;
use Illuminate\Http\Request;

class ContratadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contratas = Contratador::where('estado',true)->paginate(10);
       return view('contrata.index',compact("contratas"));
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

        Contratador::create([
            'nombre'=>$data['nombre'],
            'estado'=>true
        ]);
        return response()->json(['mensaje'=>"registro exitoso"]);
    }

    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contratador  $contratadores
     * @return \Illuminate\Http\Response
     */
    public function show(Contratador $contratadores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contratador  $contratadores
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
           $contrata = Contratador::find($id);    

        return response()->json(
          $contrata->toArray()
      );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contratador  $contratadores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       
    $contrata= Contratador::find($request['id']); 

        $data = request()->validate([
            'id'=>'required',
            'nombre'=>'required'
        ],[
            'nombre.required'=>'El campo nombres es obligatorio',
        ]);


        $contrata->update([
            'id'=>$data['id'],
            'nombre'=>$data['nombre']
        ]);

        $contrata->save();


        return response()->json([
            'mensaje'=>$contrata->toArray()
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contratador  $contratadores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
            $contrata = Contratador::find($request['id']);

        $contrata->update(
            ['estado'=>false]
        );

        $contrata->save();

        return response()->json(
            ['mensaje'=>'eliminacion exitosa']
        );
    }
}
