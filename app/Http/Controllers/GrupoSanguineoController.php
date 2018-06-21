<?php

namespace App\Http\Controllers;

use App\GrupoSanguineo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class GrupoSanguineoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupoSanguineos= GrupoSanguineo::where('estado',true)->paginate(10);
       return view('grupoSanguineo.index',compact("grupoSanguineos"));
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

        GrupoSanguineo::create([
            'descripcion'=>$data['nombre'],
            'estado'=>true,
            'user_id'=>Auth::user()->id
        ]);
        return response()->json(['mensaje'=>"registro exitoso"]);
    }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GrupoSanguineo  $grupoSanguineo
     * @return \Illuminate\Http\Response
     */
    public function show(GrupoSanguineo $grupoSanguineo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GrupoSanguineo  $grupoSanguineo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


           $grupoSanguineo = GrupoSanguineo::find($id);

        return response()->json(
          $grupoSanguineo->toArray()
      );



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GrupoSanguineo  $grupoSanguineo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
           $grupoSanguineo=  GrupoSanguineo::find($request['id']);

        $data = request()->validate([
            'id'=>'required',
            'nombre'=>'required'
        ],[
            'nombre.required'=>'El campo nombres es obligatorio',
        ]);


           $grupoSanguineo->update([
            'id'=>$data['id'],
            'descripcion'=>$data['nombre']
        ]);

           $grupoSanguineo->save();


        return response()->json([
            'mensaje'=>   $grupoSanguineo->toArray()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GrupoSanguineo  $grupoSanguineo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
               $grupoSanguineo = GrupoSanguineo::find($request['id']);

       $grupoSanguineo->update(
            ['estado'=>false]
        );

        $grupoSanguineo->save();

        return response()->json(
            ['mensaje'=>'eliminacion exitosa']
        );
    }
}
