<?php

namespace App\Http\Controllers;

use App\TipoExamen;
use Illuminate\Http\Request;

class TipoExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tipoExamens= TipoExamen::where('estado',true)->paginate(10);
       return view('tipoexamen.index',compact("tipoExamens"));
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

    TipoExamen::create([
        'descripcion'=>$data['nombre'],
        'estado'=>true
    ]);
    return response()->json(['mensaje'=>"registro exitoso"]);
}


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoExamen  $tipoExamen
     * @return \Illuminate\Http\Response
     */
    public function show(TipoExamen $tipoExamen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoExamen  $tipoExamen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $tipoExamen = TipoExamen::find($id);

     return response()->json(
       $tipoExamen->toArray()
   );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoExamen  $tipoExamen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $tipoExamen=  TipoExamen::find($request['id']);

      $data = request()->validate([
          'id'=>'required',
          'nombre'=>'required'
      ],[
          'nombre.required'=>'El campo nombres es obligatorio',
      ]);


         $tipoExamen->update([
          'id'=>$data['id'],
          'descripcion'=>$data['nombre']
      ]);

         $tipoExamen->save();


      return response()->json([
          'mensaje'=>   $tipoExamen->toArray()
      ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoExamen  $tipoExamen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $tipoExamen = TipoExamen::find($request['id']);

        $tipoExamen->update(
        ['estado'=>false]
        );

        $tipoExamen->save();

        return response()->json(
        ['mensaje'=>'eliminacion exitosa']
        );
    }
}
