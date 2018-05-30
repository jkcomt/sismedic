<?php

namespace App\Http\Controllers;

use App\ListaExamen;
use Illuminate\Http\Request;
use App\Cita;
use App\Event;
use App\PerfilExamen;
use App\FuncionVital;
use App\Paciente;
use App\ClienteCuenta;
use App\TipoExamen;
use App\Perfil;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\CitaExamen;
use View;
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

      /*$citas = Cita::Where('estado',true)->where('paciente_id',$id)->paginate(10);
      return view('citas.create',compact('citas'));*/

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
             $citas = $citas->where('estado', true)->get();
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

     public function searchDniFecha(Request $request)
     {
       if($request->ajax())
       {
           $citas = Cita::leftjoin('pacientes','citas.paciente_id','pacientes.id')
              ->where('pacientes.num_dni','like','%'.$request['dni'].'%')
               ->where('fecha_examen','>=',$request['startdate'])
               ->where('fecha_examen','<=',$request['enddate'])
               ->orderBy('fecha_examen','asc')
               ->orderBy('hora_examen','asc')->paginate(10);

               $view = view('citas.table',compact('citas'))->render();
               return response()->json(['html'=>$view]);
       }

     }

    public function catalogo()
    {
      $citas= Cita::where('estado',true)
              ->orderBy('fecha_registro','desc')
              ->orderBy('hora_registro','desc')
              ->paginate(10);
      return view('citas.catalogo',compact('citas'));
    }

    public function nuevacita()
    {
      $clienteCuentas = ClienteCuenta::where('estado',true)->get()->pluck('descripcion','id')->toArray();
      $tipoExamenes = TipoExamen::where('estado',true)->get()->pluck('descripcion','id')->toArray();
      $perfiles = Perfil::where('estado',true)->get()->pluck('descripcion','id')->toArray();
      $perfilesExamenes = PerfilExamen::where('estado',true)->get();
      $cita = Cita::where('estado','=',true)->get()->last();

      $pacientes=Paciente::select(DB::raw("CONCAT(apellido_paterno,' ',apellido_materno,' ',nombres) as nombres_completos"),'id')
            ->where('estado',true)
                    ->get()->pluck('nombres_completos','id')->toArray();

      return view('citas.create',compact('clienteCuentas','tipoExamenes','perfiles','perfilesExamenes','cita','pacientes'));
    //  dd($citas);
    }
    public function searchPaciente(Request $request)
    {
      $term = $request->term ?:'';
      $pacientes =Paciente::select(DB::raw("CONCAT(apellido_paterno,' ',apellido_materno,' ',nombres) as nombres_completos"),'id')
          ->where('estado',true)
          ->where('apellido_paterno','like','%'.$term.'%')
          ->orWhere('nombres','like','%'.$term.'%')
          ->orWhere('num_dni','like','%'.$term.'%')
          ->take(5)
          ->get()->pluck('nombres_completos','id')->toArray();

      $listapaciente = [];
      foreach ($pacientes as $id => $tag){
          $listapaciente[] = ['id'=>$id,'text'=>$tag];
      }

      return response()->json(
          $listapaciente
      );
    }


    public function registrar(Request $request)
    {

      if(request()->ajax())
      {
          //$data = request()->input();
          $data = request()->validate([
              'nro_serie_cita'=>'required',
              'paciente'=>'required',
              'fecha_examen'=>'required',
              'hora_examen'=>'required',
              'clienteCuenta'=>'required',
              'examenes_id'=>'required',
              'tipoExamen'=>'required',
              'perfil'=>'required',
              'items'=>'required|array'
          ],[
              'items.required'=>'Seleccione al menos un examen para la cita'
          ]);

          $cita = Cita::create([
              'nro_serie_cita'=>$data['nro_serie_cita'],
              'paciente_id'=>$data['paciente'],
              'cliente_cuenta_id'=>$data['clienteCuenta'],
              'examenes_id'=>$data['examenes_id'],
              'tipo_examen_id'=>$data['tipoExamen'],
              'perfil_id'=>$data['perfil'],//$variable,//$data['perfil'],
              'fecha_examen'=>$data['fecha_examen'],
              'hora_examen'=>$data['hora_examen'],
              'fecha_registro'=>Carbon::now(),
              'hora_registro'=>Carbon::now(),
              'estado_cita'=>'agendado',
              'estado'=>true
          ]);

          Event::create([
                  'title'=>$cita->paciente->apellido_paterno.' '.$cita->paciente->apellido_materno.' '.$cita->paciente->nombres,
                  'start_date'=>$cita->fecha_examen,
                  'end_date'=>$cita->fecha_examen,
                  'color'=>'#00C1DE',
                  'cita_id'=>$cita->id,
                  'estado'=>true
              ]);

          foreach ($request['items'] as $item){
              $citaItem = CitaExamen::create([
                 'cita_id'=>$cita->id,
                 'item_examen_id'=>$item,
                 'estado'=>true
              ]);
          }

          return response()->json(['mensaje' =>$cita->with('paciente')->get()->last()]);
      }


    //  return response()->json(["mensaje de  req"=>$request['paciente']]);



    }

    public function listareporte()
    {
      $citas=Cita::where('estado',true)->orderBy('hora_examen','asc')->get();
      $view=View::make('citas.reporte.listacitas',compact('citas'));
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      $pdf->stream($view);
      return $pdf->stream();
    }

    public function examenescliente($id)
    {
      $cita=Cita::find($id);

      //$paciente = Paciente::find($cita->paciente->id);
/*
      $tipoExamenes = TipoExamen::where('estado',true)->get()->pluck('descripcion','id')->toArray();

      $clienteCuentas = ClienteCuenta::where('estado',true)->get()->pluck('descripcion','id')->toArray();

      $perfiles = Perfil::where('estado',true)->get()->pluck('descripcion','id')->toArray();

      $perfilesExamenes = PerfilExamen::where('estado',true)->get();*/

      $view=View::make('citas.reporte.examenescliente',compact('cita'));
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      $pdf->stream($view);
      return $pdf->stream();
    }

    public function busquedafecha(Request $request)
    {
      if($request->ajax())
      {
          $citas = Cita::where('estado',true)
              ->where('fecha_examen','>=',$request['startdate'])
              ->where('fecha_examen','<=',$request['enddate'])
              ->orderBy('fecha_examen','asc')
              ->orderBy('hora_examen','asc')->paginate(10);

              $view = view('citas.table',compact('citas'))->render();
              return response()->json(['html'=>$view]);
      }
    }

    public function filtrarExamen(Request $request){
        $cita = Cita::find($request['idCita']);
        $listaExamen = ListaExamen::find($request['idExamen']);
        $view = null;
        switch ($listaExamen->id)
        {
            case 1:
                $view = view('evaluacionmedica.examenes.anexo7d.create',compact('cita','listaExamen'))->render();
                break;
            case 2:
                $view = view('evaluacionmedica.examenes.electrocardiograma.create',compact('cita','listaExamen'))->render();
                break;
            case 3:
                $view = view('evaluacionmedica.examenes.espirometria.create',compact('cita','listaExamen'))->render();
                break;
            case 4:
                $view = view('evaluacionmedica.examenes.hemograma.create',compact('cita','listaExamen'))->render();
                break;
            case 5:
                $view = view('evaluacionmedica.examenes.velocidaddesedimentacion.create',compact('cita','listaExamen'))->render();
                break;
            case 6:
               // $view = view('evaluacionmedica.examenes.gruposanguineo.create',compact('cita','listaExamen'))->render();
                $view = view('evaluacionmedica.examenes.enproceso.create',compact('cita','listaExamen'))->render();
                break;
            case 7:
                $view = view('evaluacionmedica.examenes.glucosa.create',compact('cita','listaExamen'))->render();
                break;
            case 8:
                $view = view('evaluacionmedica.examenes.creatina.create',compact('cita','listaExamen'))->render();
                break;
            case 9:
                $view = view('evaluacionmedica.examenes.acidourico.create',compact('cita','listaExamen'))->render();
                break;
            case 10:
                $view = view('evaluacionmedica.examenes.colesteroltotal.create',compact('cita','listaExamen'))->render();
                break;
            case 11:
                $view = view('evaluacionmedica.examenes.trigliceridos.create',compact('cita','listaExamen'))->render();
                break;
            case 12:
                $view = view('evaluacionmedica.examenes.colesterolhdl.create',compact('cita','listaExamen'))->render();
                break;
            case 13:
                $view = view('evaluacionmedica.examenes.colesterolldl.create',compact('cita','listaExamen'))->render();
                break;
            case 14:
                $view = view('evaluacionmedica.examenes.gamma.create',compact('cita','listaExamen'))->render();
                break;
            case 15:
                $view = view('evaluacionmedica.examenes.vision.create',compact('cita','listaExamen'))->render();
                break;
            case 16:
                $view = view('evaluacionmedica.examenes.orina.create',compact('cita','listaExamen'))->render();
                break;
            case 17:
                $view = view('evaluacionmedica.examenes.sifilis.create',compact('cita','listaExamen'))->render();
                break;
            case 18:
                $view = view('evaluacionmedica.examenes.examenmedicoinsuficiencia.create',compact('cita','listaExamen'))->render();
                break;
            case 19:
                $view = view('evaluacionmedica.examenes.apneasuenio.create',compact('cita','listaExamen'))->render();
                break;
            case 20:
                $view = view('evaluacionmedica.examenes.usorespiradores.create',compact('cita','listaExamen'))->render();
                break;
            case 21:
                $view = view('evaluacionmedica.examenes.cuestionarionordico.create',compact('cita','listaExamen'))->render();
                break;
            case 22:
                $view = view('evaluacionmedica.examenes.conduccionvehiculo.create',compact('cita','listaExamen'))->render();
                break;
            case 23:
                $view = view('evaluacionmedica.examenes.conductoroperador.create',compact('cita','listaExamen'))->render();
                break;
            case 24:
                $view = view('evaluacionmedica.examenes.evaluacioncognitiva.create',compact('cita','listaExamen'))->render();
                break;


        }

        if($request->ajax())
        {
            return response()->json(['html'=>$view]);
        }

    }

}
