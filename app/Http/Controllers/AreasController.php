<?php

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;

class AreasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = Area::where('estado',true)->paginate(10);
       return view('area.index',compact("areas"));
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

        Area::create([
            'nombre'=>$data['nombre'],
            'estado'=>true
        ]);
        return response()->json(['mensaje'=>"registro exitoso"]);
    }





    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Area  $areas
     * @return \Illuminate\Http\Response
     */
    public function show(Area $areas)
    {
        //



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Area  $areas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

           $area = Area::find($id);
           return response()->json(
           $area->toArray()
      );


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Area  $areas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //

    $area= Area::find($request['id']);

        $data = request()->validate([
            'id'=>'required',
            'nombre'=>'required'
        ],[
            'nombre.required'=>'El campo nombres es obligatorio',
        ]);


        $area->update([
            'id'=>$data['id'],
            'nombre'=>$data['nombre']
        ]);

        $area->save();


        return response()->json([
            'mensaje'=>$area->toArray()
        ]);



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Area  $areas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $area = Area::find($request['id']);

        $area->update(
            ['estado'=>false]
        );

        $area->save();

        return response()->json(
            ['mensaje'=>'eliminacion exitosa']
        );

    }
}
