<?php

namespace App\Http\Controllers;

use App\Contratador;
use Illuminate\Http\Request;

class ConfiguracionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
       return view('configuracion.index');
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
   
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contratador  $contratadores
     * @return \Illuminate\Http\Response
     */
    public function show(Contratador $contratadores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contratador  $contratadores
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contratador  $contratadores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       
   

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contratador  $contratadores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
       
    }
}
