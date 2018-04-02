<?php

namespace App\Http\Controllers;

use App\Departamento;
use Illuminate\Http\Request;

class DepartamentosController extends Controller
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
     * @param  \App\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function show(Departamento $departamentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Departamento  $departamentos
     * @return \Illuminate\Http\Response
     */
    public function edit(Departamento $departamentos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Departamento  $departamentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departamento $departamentos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Departamento  $departamentos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departamento $departamentos)
    {
        //
    }

    public function filtro(Request $request){
        $id =$request['filtro'];
        $departamentos = Departamento::where('estado',true)->where('pais_id',$id)->pluck('nombre','id')->toArray();

        $view = view('pacientes.departamento',compact('departamentos'))->render();
        return response()->json(['html'=>$view]);
    }

    public function filtroDomicilio(Request $request){
        $id =$request['filtro'];
        $departamentos = Departamento::where('estado',true)->where('pais_id',$id)->pluck('nombre','id')->toArray();

        $view = view('pacientes.departamento_dom',compact('departamentos'))->render();
        return response()->json(['html'=>$view]);
    }
}
