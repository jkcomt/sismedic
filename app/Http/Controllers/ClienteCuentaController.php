<?php

namespace App\Http\Controllers;

use App\ClienteCuenta;
use Illuminate\Http\Request;

class ClienteCuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $clientecuentas= ClienteCuenta::where('estado',true)->paginate(10);

      return view('clientecuenta.index',compact("clientecuentas"));
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

          ClienteCuenta::create([
              'descripcion'=>$data['nombre'],
              'estado'=>true
          ]);
          return response()->json(['mensaje'=>"registro exitoso"]);

      }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClienteCuenta  $clienteCuenta
     * @return \Illuminate\Http\Response
     */
    public function show(ClienteCuenta $clienteCuenta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClienteCuenta  $clienteCuenta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientecuenta = ClienteCuenta::find($id);

       return response()->json(
         $clientecuenta->toArray()
     );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClienteCuenta  $clienteCuenta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $clientecuenta =  ClienteCuenta::find($request['id']);

          $data = request()->validate([
              'id'=>'required',
              'nombre'=>'required'
          ],[
              'nombre.required'=>'El campo nombres es obligatorio',
          ]);


             $clientecuenta->update([
              'id'=>$data['id'],
              'descripcion'=>$data['nombre']
          ]);

             $clientecuenta->save();


          return response()->json([
              'mensaje'=>   $clientecuenta->toArray()
          ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClienteCuenta  $clienteCuenta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $clientecuenta = ClienteCuenta::find($request['id']);

        $clientecuenta->update(
        ['estado'=>false]
        );

        $clientecuenta->save();

        return response()->json(
        ['mensaje'=>'eliminacion exitosa']
      );
    }
}
