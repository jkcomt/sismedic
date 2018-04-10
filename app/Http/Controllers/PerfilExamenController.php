<?php

namespace App\Http\Controllers;

use App\Cita;
use App\PerfilExamen;
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
    public function edit(PerfilExamen $perfilExamen)
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
    public function update(Request $request, PerfilExamen $perfilExamen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PerfilExamen  $perfilExamen
     * @return \Illuminate\Http\Response
     */
    public function destroy(PerfilExamen $perfilExamen)
    {
        //
    }

    public function search(Request $request){
        $perfilesExamenes = null;
        if($request['buscar'] != '') {
            $perfilesExamenes = PerfilExamen::where('perfil_id',$request['buscar'])->where('estado',true)->get();
        }

        if($request->ajax())
        {
            $view = view('pacientes.citas.perfilexamen',compact('perfilesExamenes'))->render();
            return response()->json(['html'=>$view]);
        }
    }

    public function searchedit(Request $request){
        $perfilesExamenes = null;

        $citax = Cita::find($request['cita']);
        //dd($citax);

        if($request['buscar'] != '') {
            $perfilesExamenes = PerfilExamen::where('perfil_id',$request['buscar'])->where('estado',true)->get();
        }

        if($request->ajax())
        {
            $view = view('pacientes.citas.perfilexamenedit',compact('perfilesExamenes','citax'))->render();
            return response()->json(['html'=>$view]);
        }
    }
}
