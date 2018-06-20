<?php

namespace App\Http\Controllers;

use App\Perfil;
use App\PerfilExamen;
use App\ListaExamen;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $perfiles= Perfil::where('estado',true)->paginate(10);
       return view('perfil.index',compact("perfiles"));
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
              'nombre'=>'required',
              'perfil_copiar_examenes'=>'nullable'
          ],[
              'nombre.required'=>'El campo nombres es obligatorio',
          ]);

          $perfil=Perfil::create([
              'descripcion'=>$data['nombre'],
              'estado'=>true
          ]);
          if(isset($request['perfil_copiar_examenes']))
          {
            if(999999 == $request['perfil_copiar_examenes'])
            {

            }
            else {
              $perfil2=Perfil::find($request['perfil_copiar_examenes']);
              $perfilexamen=PerfilExamen::where('perfil_id',$perfil2->id)->get()->pluck('lista_examen_id','lista_examen_id')->toArray();

              foreach ($perfilexamen as $id => $tag)
              {
                  PerfilExamen::create([
                    'perfil_id'=>$perfil->id,
                    'lista_examen_id'=>$id,
                    'estado'=>true
                  ]);
              }
            }

          }
          return response()->json(['mensaje'=>"registro exitoso"]);

        }
  }
    /**
     * Display the specified resource.
     *
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function show(Perfil $perfil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $perfil = Perfil::find($id);

     return response()->json(
       $perfil->toArray()
   );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
    $perfil =  Perfil::find($request['id']);

        $data = request()->validate([
            'id'=>'required',
            'nombre'=>'required'
        ],[
            'nombre.required'=>'El campo nombres es obligatorio',
        ]);


           $perfil->update([
            'id'=>$data['id'],
            'descripcion'=>$data['nombre']
        ]);

           $perfil->save();


        return response()->json([
            'mensaje'=>   $perfil->toArray()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $perfil = Perfil::find($request['id']);

        $perfil->update(
        ['estado'=>false]
        );

        $perfil->save();

        return response()->json(
        ['mensaje'=>'eliminacion exitosa']
      );
    }

    public function filtroPerfil(Request $request)
    {
        $id =$request['filtro'];
        if($id=='1' || $id=='2' || $id=='3' || $id=='4')
        {
          $lista_perfil = Perfil::where('estado',true)
              ->where('descripcion','!=','sistema')
              ->where('descripcion','!=','INDIVIDUAL')
              //->where('id','<>','3')
              ->pluck('descripcion','id')->toArray();
          //dd($lista_ocupacional); crear una tabla   tipo examen para ocupaional y para individual
        }
        else if($id='5')
        {
          $lista_perfil = Perfil::where('estado',true)->where('descripcion','INDIVIDUAL')->pluck('descripcion','id')->toArray();
        }
        $view = view('citas.perfil',compact('lista_perfil'))->render();
        return response()->json(['html'=>$view]);
      //  dd($lista_perfil);
    }

    public function filtro_perfil_listaexamen(Request $request)
    {
      $perfil=Perfil::find($request['id']);
      $perfilExamenes= PerfilExamen::where('estado',true)->where('perfil_id',$perfil->id)->paginate(10);
      $listaexamenes=ListaExamen::where('estado',true)
                      ->whereNOTIn('id',function($query)  use($perfil)
                      {
                          $query->select('lista_examen_id')->from('perfil_examenes')->where('perfil_examenes.perfil_id',$perfil->id);
                      })->pluck('descripcion','id')->toArray();
     //return view('pacientes.citas.listaexamenes',compact("listaexamenes"));
     $view = view('pacientes.citas.listaexamenes',compact('listaexamenes'))->render();
     return response()->json(['html'=>$view]);
    }



}
