<?php

namespace App\Http\Controllers;

use App\TipoInstruccion;
use Illuminate\Http\Request;

class TipoInstruccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $tipoinstrucciones = TipoInstruccion::where('estado',true)->paginate(10);
       return view('tipoinstruccion.index',compact("tipoinstrucciones"));
       //  return view('TipoInstruccion.create');
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipoinstruccion.create');
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

        TipoInstruccion::create([
            'nombre'=>$data['nombre'],
            'estado'=>true
        ]);
        return response()->json(['mensaje'=>"registro exitoso"]);
    }

    


}

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoInstruccion  $tipoInstruccion
     * @return \Illuminate\Http\Response
     */
    public function show(TipoInstruccion $tipoInstruccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoInstruccion  $tipoInstruccion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {/*
        $tipoInstruccion = TipoInstruccion::find($id);    

        return view("TipoInstruccion.edit",compact('tipoInstruccion'));*/
        
        $tipoInstruccion = TipoInstruccion::find($id);    

        return response()->json(
          $tipoInstruccion->toArray()
      );

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoInstruccion  $tipoInstruccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        $tipoInstruccion= TipoInstruccion::find($request['id']); 

        $data = request()->validate([
            'id'=>'required',
            'nombre'=>'required'
        ],[
            'nombre.required'=>'El campo nombres es obligatorio',
        ]);


        $tipoInstruccion->update([
            'id'=>$data['id'],
            'nombre'=>$data['nombre']
        ]);

        $tipoInstruccion->save();


        return response()->json([
            'mensaje'=>$tipoInstruccion->toArray()
        ]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoInstruccion  $tipoInstruccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $tipoinstruccion = TipoInstruccion::find($request['id']);

        $tipoinstruccion->update(
            ['estado'=>false]
        );

        $tipoinstruccion->save();

        return response()->json(
            ['mensaje'=>'eliminacion exitosa']
        );
    }


    public function search(Request $request)
    {

        $tipoinstrucciones = null;
        if($request['buscar'] != '')
        {
            $tipoinstrucciones = TipoInstruccion::where('nombre','like','%'.$request['buscar'].'%')->paginate(10);
        }else{
            $tipoinstrucciones = TipoInstruccion::where('estado',true)->paginate(10);
        }


        if($request->ajax())
        {
            $view = view('tipoinstruccion.table',compact('tipoinstrucciones'))->render();
            return  response()->json(['html'=>$view]);
        }

    }
}
