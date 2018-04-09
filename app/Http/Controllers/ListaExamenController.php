<?php

namespace App\Http\Controllers;

use App\ListaExamen;
use Illuminate\Http\Request;

class ListaExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $listaexamenes= ListaExamen::where('estado',true)->paginate(10);
       return view('listaexamen.index',compact("listaexamenes"));
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
              'tipo'=>'required',
              'valor'=>'required',
              'descuento'=>'required',
          ],[
              'nombre.required'=>'El campo nombres es obligatorio',
              'tipo.required'=>'El campo nombres es obligatorio',
              'valor.required'=>'El campo nombres es obligatorio',
              'descuento.required'=>'El campo nombres es obligatorio',
          ]);

          listaexamen::create([
              'descripcion'=>$data['nombre'],
              'tipo'=>$data['tipo'],
              'valor'=>$data['valor'],
              'dscto'=>$data['descuento'],
              'estado'=>true
          ]);
          return response()->json(['mensaje'=>'Registro Exitoso']);

      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ListaExamen  $listaExamen
     * @return \Illuminate\Http\Response
     */
    public function show(ListaExamen $listaExamen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ListaExamen  $listaExamen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $listaExamen = listaexamen::find($id);

     return response()->json(
       $listaExamen->toArray()
   );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ListaExamen  $listaExamen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
    $listaExamen =  ListaExamen::find($request['id']);

          $data = request()->validate([
              'id'=>'required',
              'editnombre'=>'required',
              'edittipo'=>'required',
              'editvalor'=>'required',
              'editdescuento'=>'required'
          ],[
              'editnombre.required'=>'El campo nombres es obligatorio',
              'edittipo.required'=>'El campo nombres es obligatorio',
              'editvalor.required'=>'El campo nombres es obligatorio',
              'editdescuento.required'=>'El campo nombres es obligatorio',
          ]);


             $listaExamen->update([
              'id'=>$data['id'],
              'descripcion'=>$data['editnombre'],
              'tipo'=>$data['edittipo'],
              'valor'=>$data['editvalor'],
              'dscto'=>$data['editdescuento']
          ]);

             $listaExamen->save();


          return response()->json([
              'mensaje'=>   $listaExamen->toArray()
          ]);

//return response()->json(['mensaje'=>$request['id']." ".$request['editnombre']/*." ".$request['edittipo']." ".$request['editvalor']." ".$request['editdescuento']*/]);
//    return response()->json(['mensaje'=>$request['id']." ".$request['editnombre']." ".$request['edittipo']." ".$request['editvalor']." ".$request['editdescuento']]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ListaExamen  $listaExamen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $listaExamen = ListaExamen::find($request['id']);

        $listaExamen->update(
        ['estado'=>false]
        );

        $listaExamen->save();

        return response()->json(
        ['mensaje'=>'eliminacion exitosa']
      );

    }
}
