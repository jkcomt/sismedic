<?php

namespace App\Http\Controllers;

use App\Cita;
use App\PerfilExamen;
use App\ListaExamen;
use App\Perfil;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PerfilExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
      //$perfiles=Perfil::where('estado',true)->paginate(10);}
        $perfil=Perfil::find($id);

        $perfilExamens= PerfilExamen::where('estado',true)->where('perfil_id',$perfil->id)->get();

       $listaexamenes=ListaExamen::where('estado',true)
                        ->whereNOTIn('id',function($query)  use($perfil)
                        {
                            $query->select('lista_examen_id')->from('perfil_examenes')->where('perfil_examenes.perfil_id',$perfil->id);
                        })->get();

       return view('perfilexamen.index',compact("perfil","listaexamenes"));

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
                'perfil_id'=>'required',
                'listaexamen'=>'required'
            ],[
                'perfil_id.required'=>'El campo perfil es obligatorio',
                'listaexamen.required'=>'El campo examen es obligatorio',
            ]);

            PerfilExamen::create([
                'perfil_id'=>$data['perfil_id'],
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
