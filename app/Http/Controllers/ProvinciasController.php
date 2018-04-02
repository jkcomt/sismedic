<?php

namespace App\Http\Controllers;

use App\Provincia;
use Illuminate\Http\Request;

class ProvinciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Provincia  $provincias
     * @return \Illuminate\Http\Response
     */
    public function show(Provincia $provincias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Provincia  $provincias
     * @return \Illuminate\Http\Response
     */
    public function edit(Provincia $provincias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Provincia  $provincias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provincia $provincias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Provincia  $provincias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provincia $provincias)
    {
        //
    }

    public function filtro(Request $request){
        $id =$request['filtro'];
        //dd($id);
        $provincias = Provincia::where('estado',true)->where('departamento_id',$id)->pluck('nombre','id')->toArray();

        $view = view('pacientes.provincia',compact('provincias'))->render();
        return response()->json(['html'=>$view]);
    }

    public function filtrodomicilio(Request $request){
        $id =$request['filtro'];
        //dd($id);
        $provincias = Provincia::where('estado',true)->where('departamento_id',$id)->pluck('nombre','id')->toArray();

        $view = view('pacientes.provincia_dom',compact('provincias'))->render();
        return response()->json(['html'=>$view]);
    }
}
