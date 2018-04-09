<?php

namespace App\Http\Controllers;

use App\PerfilExamen;
use App\ListaExamen;
use App\Perfil;
use Illuminate\Http\Request;

class PerfilExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $perfiles=Perfil::where('estado',true)->paginate(10);
      $listaexamenes=ListaExamen::where('estado',true)->paginate(10);
      $perfilExamens= PerfilExamen::where('estado',true)->paginate(10);
       return view('perfilexamen.index',compact("perfilExamens","listaexamenes","perfiles"));
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
                'perfilid'=>'required',
                'listaexamen'=>'required'
            ],[
                'perfilide.required'=>'El campo nombres es obligatorio',
                'listaexamen.required'=>'El campo nombres es obligatorio',
            ]);

            PerfilExamen::create([
                'perfil_id'=>$data['perfilid'],
                'lista_examen_id'=>$data['listaexamen'],
                'estado'=>true
            ]);
            return response()->json(['mensaje'=>"Registro Exitoso"]);

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PerfilExamen  $perfilExamen
     * @return \Illuminate\Http\Response
     */
    public function show(PerfilExamen $perfilExamen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PerfilExamen  $perfilExamen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PerfilExamen  $perfilExamen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PerfilExamen  $perfilExamen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
       $perfilexamen = PerfilExamen::find($request['id']);

        $perfilexamen->update(
        ['estado'=>false]
        );

        $perfilexamen->save();

        return response()->json(
        ['mensaje'=>"Registro Eliminado"]
      );


    }
}
