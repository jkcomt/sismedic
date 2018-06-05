<?php

namespace App\Http\Controllers;

use App\TipoExamen;
use App\Cita;
use App\PerfilExamen;
use App\ListaExamen;
use App\Perfil;
use Illuminate\Http\Request;
use DB;

class TipoExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tipoExamens= TipoExamen::where('estado',true)->paginate(10);
       return view('tipoexamen.index',compact("tipoExamens"));
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
    ],[
        'nombre.required'=>'El campo nombres es obligatorio',
    ]);

    TipoExamen::create([
        'descripcion'=>$data['nombre'],
        'estado'=>true
    ]);
    return response()->json(['mensaje'=>"registro exitoso"]);
}


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoExamen  $tipoExamen
     * @return \Illuminate\Http\Response
     */
    public function show(TipoExamen $tipoExamen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoExamen  $tipoExamen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $tipoExamen = TipoExamen::find($id);

     return response()->json(
       $tipoExamen->toArray()
   );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoExamen  $tipoExamen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $tipoExamen=  TipoExamen::find($request['id']);

      $data = request()->validate([
          'id'=>'required',
          'nombre'=>'required'
      ],[
          'nombre.required'=>'El campo nombres es obligatorio',
      ]);


         $tipoExamen->update([
          'id'=>$data['id'],
          'descripcion'=>$data['nombre']
      ]);

         $tipoExamen->save();


      return response()->json([
          'mensaje'=>   $tipoExamen->toArray()
      ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoExamen  $tipoExamen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $tipoExamen = TipoExamen::find($request['id']);

        $tipoExamen->update(
        ['estado'=>false]
        );

        $tipoExamen->save();

        return response()->json(
        ['mensaje'=>'eliminacion exitosa']
        );
    }

    public function searchListaExamen(Request $request){
        $perfilesExamenes = null;
        if($request['buscar'] != '')
        {
            // $perfilesExamenes = PerfilExamen::where('perfil_id',$request['buscar'])->where('estado',true)->get();

            //  $perfil=ListaExamen::all();
            $perfilesExamenes = PerfilExamen::where('perfil_id','3')//sacar por el id de individual
              ->join('lista_examenes', 'perfil_examenes.lista_examen_id', '=', 'lista_examenes.id')
              ->where('lista_examenes.individual',true)
            ->get();


            // $listaexamenes=ListaExamen::where('estado',true)
            //                  ->whereNOTIn('id',function($query)  use($perfil)
            //                  {
            //                      $query->select('lista_examen_id')->from('perfil_examenes')->where('perfil_examenes.perfil_id',$perfil->id);
            //                  })->get();

                      // $perfilesExamenes = DB::table('perfil_examenes')
                      //         ->join('lista_examenes', 'perfil_examenes.lista_examen_id', '=', 'lista_examenes.id')
                      //         ->select('perfil_examenes.id', 'perfil_examenes.perfil_id', 'perfil_examenes.lista_examen_id','perfil_examenes.estado')
                      //         ->where('perfil_id',$request['buscar'])
                      //         ->where('lista_examenes.individual',true)
                      //         ->get();

        }

        if($request->ajax())
        {
            $view = view('pacientes.citas.perfilexamen',compact('perfilesExamenes'))->render();
            return response()->json(['html'=>$view]);
            // dd($perfilesExamenes);
        }
    }

    public function filtroTipoExamen(Request $request)
    {
        $id =$request['filtro'];
        if($id=='1')
        {
          $lista_ocupacional = TipoExamen::where('estado',true)->where('id','<>','5')->pluck('descripcion','id')->toArray();
          //dd($lista_ocupacional); //crear una tabla   tipo examen para ocupaional y para individual

        }
        else if($id='2')
        {
          $lista_ocupacional = TipoExamen::where('estado',true)->where('id','5')->pluck('descripcion','id')->toArray();
        }
        $view = view('citas.examen',compact('lista_ocupacional'))->render();
        return response()->json(['html'=>$view]);
    }




}
