<?php

namespace App\Http\Controllers;

use App\EncargadoAudiometrias;
use App\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class EncargadoAudiometriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $encargados = EncargadoAudiometrias::where('estado',true)->paginate(10);
     return view('personalAudiometria.index',compact("encargados"));
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
           $data = request()->validate([
               'personal'=>'required',
               'dni'=>'required',
           ],[
               'nombre.required'=>'El campo nombres es obligatorio',
           ]);
           EncargadoAudiometrias::create([
               'personal'=>$data['personal'],
               'dni'=>$data['dni'],
               'estado'=>true
           ]);
           return response()->json(['mensaje'=>"registro exitoso"]);
       }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EncargadoAudiometrias  $encargadoAudiometrias
     * @return \Illuminate\Http\Response
     */
    public function show(EncargadoAudiometrias $encargadoAudiometrias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EncargadoAudiometrias  $encargadoAudiometrias
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $encargado = EncargadoAudiometrias::find($id);
      return response()->json(
      $encargado->toArray()  );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EncargadoAudiometrias  $encargadoAudiometrias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $encargado= EncargadoAudiometrias::find($request['id']);
      if(request()->ajax())
      {
         $data = request()->validate([
             'personal'=>'required',
             'dni'=>'required',
         ],[
             'nombre.required'=>'El campo nombres es obligatorio',
         ]);
         $encargado->update([
             'personal'=>$data['personal'],
             'dni'=>$data['dni'],
             'estado'=>true
         ]);
         $encargado->save();
         return response()->json([
             'mensaje'=>$encargado->toArray()
         ]);
     }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EncargadoAudiometrias  $encargadoAudiometrias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $encargado= EncargadoAudiometrias::find($request['id']);
      $encargado->update(
          ['estado'=>false]
      );
      $encargado->save();
      return response()->json(
          ['mensaje'=>'eliminacion exitosa']
      );


    }

    public function buscarpersonal(Request $request)
    {
      // $term = $request->term ?:'';
      // $pacientes =EncargadoAudiometrias::select(DB::raw("CONCAT(apellido_paterno,' ',apellido_materno,' ',nombres) as nombres_completos"),'id')
      //     ->where('estado',true)
      //     ->where('apellido_paterno','like','%'.$term.'%')
      //     ->orWhere('nombres','like','%'.$term.'%')
      //     ->orWhere('num_dni','like','%'.$term.'%')
      //     ->take(5)
      //     ->get()->pluck('nombres_completos','id')->toArray();
      //
      // $listapaciente = [];
      // foreach ($pacientes as $id => $tag){
      //     $listapaciente[] = ['id'=>$id,'text'=>$tag];
      // }
      //
      // return response()->json(
      //     $listapaciente
      // );
    }
}
