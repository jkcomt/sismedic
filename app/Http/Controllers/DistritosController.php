<?php

namespace App\Http\Controllers;

use App\Distrito;
use App\Distritos;
use Illuminate\Http\Request;

class DistritosController extends Controller
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
     * @param  \App\Distritos  $distritos
     * @return \Illuminate\Http\Response
     */
    public function show(Distritos $distritos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Distritos  $distritos
     * @return \Illuminate\Http\Response
     */
    public function edit(Distritos $distritos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Distritos  $distritos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Distritos $distritos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Distritos  $distritos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Distritos $distritos)
    {
        //
    }

    public function filtro(Request $request){
        $id =$request['filtro'];
        $distritos = Distrito::where('estado',true)->where('provincia_id',$id)->pluck('nombre','id')->toArray();

        $view = view('pacientes.distrito',compact('distritos'))->render();
        return response()->json(['html'=>$view]);
    }

//    public function filtroDomicilio(Request $request){
//        $id =$request['filtro'];
//        $departamentos = Departamento::where('estado',true)->where('pais_id',$id)->pluck('nombre','id')->toArray();
//
//        $view = view('pacientes.departamento_dom',compact('departamentos'))->render();
//        return response()->json(['html'=>$view]);
//    }
}
