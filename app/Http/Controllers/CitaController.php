<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cita;
use App\Event;
use App\PerfilExamen;
use App\FuncionVital;
use App\Paciente;
use App\clienteCuenta;
use App\TipoExamen;
use App\Perfil;

class CitaController extends Controller
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
      $citas = Cita::Where('estado',true)->where('paciente_id',$id)->paginate(10);

      return view('citas.create',compact('citas'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $cita = Cita::find($request['id']);

          $cita->update([
              'estado'=>false
          ]);

          $cita->save();

          $event = Event::find($cita->event->id);

          $event->update([
              'estado'=>false
          ]);

          $event->save();

           if(isset($cita->funcionVital))
           {
             $funcionVital=FuncionVital::find($cita->funcionVital->id);
             $funcionVital->delete();

           }

          return response()->json([
              'mensaje'=>"eliminación exitosa"
          ]);
    }

    public function searchFecha(Request $request){
         $citas = null;

         if($request['fecha'] != '') {
             $citas = Cita::where('fecha_examen','=', $request['fecha'])
                 //->orWhere('num_dni', 'like', '%' . $request['buscar'] . '%')
                 ->orderBy('hora_examen', 'asc');
             $citas = $citas->where('estado', true)->paginate(10);
         }

         if($request->ajax())
         {
             $view = view('citas.modal.tabla',compact('citas'))->render();
             return response()->json(['html'=>$view]);
         }
     }
     public function searchdni(Request $request)
     {
       $citas = null;

       if($request['buscar'] != '')
       {
         $citas= Cita::leftjoin('pacientes','citas.paciente_id','pacientes.id')
         ->where('pacientes.num_dni','like','%'.$request['buscar'].'%')
         ->where('citas.estado',true)
         ->orderBy('citas.fecha_registro','desc')
         ->orderBy('citas.hora_registro','desc')->paginate(10);
       }
       else{
         $citas= Cita::where('estado',true)
         ->orderBy('fecha_registro','desc')
         ->orderBy('hora_registro','desc')->paginate(10);
       }

           if($request->ajax())
           {
               $view = view('citas.table',compact('citas'))->render();
               return response()->json(['html'=>$view]);
           }
      /*  return  response()->json([
            'mensaje'=>$request['buscar']
        ]);*/
     }


    public function catalogo()
    {
      $citas= Cita::where('estado',true)->paginate(10);
      return view('citas.catalogo',compact('citas'));
    }
    public function cata()
    {
      $citas= Cita::where('estado',true)->paginate(10);
      return view('citas.catalogo',compact('citas'));
    }

    public function nuevacita()
    {
      $clienteCuentas = ClienteCuenta::where('estado',true)->get()->pluck('descripcion','id')->toArray();
      $tipoExamenes = TipoExamen::where('estado',true)->get()->pluck('descripcion','id')->toArray();
      $perfiles = Perfil::where('estado',true)->get()->pluck('descripcion','id')->toArray();
      $perfilesExamenes = PerfilExamen::where('estado',true)->get();
      $cita = Cita::where('estado','=',true)->get()->last();
      
      return view('citas.create',compact('clienteCuentas','tipoExamenes','perfiles','perfilesExamenes','cita'));
    //  dd($citas);
    }


}
