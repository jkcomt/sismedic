<?php

namespace App\Http\Controllers;

use App\Cita;
use App\FuncionVital;
use Illuminate\Http\Request;
use View;
class FuncionVitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citas = Cita::where('estado',true)
            ->orderBy('nro_serie_cita','desc')
            //->orderBy('fecha_examen','desc')->orderBy('hora_examen')
            ->paginate(10);
        return view('funcionvital.index',compact('citas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $cita = Cita::find($id);
        return view('funcionvital.create',compact('cita'));
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
                'fecha_funcion_vital'=>'required',
                'talla'=>'required',
                'peso'=>'required',
                'imc'=>'required',
                'temperatura'=>'required',
                'fc'=>'required',
                'fr'=>'required',
                'ps'=>'required',
                'pd'=>'required',
                'sat02'=>'required',
                'en_reposo'=>'required',
                'perimetro_abdominal'=>'required',
                'maxima_inspiracion'=>'required',
                'perimetro_cadera'=>'required',
                'expiracion_forzada'=>'required',
                'indice_cintura'=>'required',
                'circunferencia_cuello'=>'required',
                'cita_id'=>'required',
            ]);

            FuncionVital::create([
                'fecha'=>$data['fecha_funcion_vital'],
                'talla'=>$data['talla'],
                'peso'=>$data['peso'],
                'imc'=>$data['imc'],
                'temperatura'=>$data['temperatura'],
                'fc'=>$data['fc'],
                'fr'=>$data['fr'],
                'ps'=>$data['ps'],
                'pd'=>$data['pd'],
                'sat_02'=>$data['sat02'],
                'en_reposo'=>$data['en_reposo'],
                'perimetro_abdominal'=>$data['perimetro_abdominal'],
                'maxima_inspiracion'=>$data['maxima_inspiracion'],
                'perimetro_cadera'=>$data['perimetro_cadera'],
                'expiracion_forzada'=>$data['expiracion_forzada'],
                'indice_cintura'=>$data['indice_cintura'],
                'circunferencia_cuello'=>$data['circunferencia_cuello'],
                'cita_id'=>$data['cita_id'],
                'estado'=>true
            ]);
            return response()->json(['mensaje'=>"registro exitoso"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FuncionVital  $funcionVital
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $funcionVital = FuncionVital::where('cita_id',$id)->get()->first();
//        dd($funcionVital);
        return view('funcionvital.detalle',compact('funcionVital'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FuncionVital  $funcionVital
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $funcionVital = FuncionVital::where('cita_id',$id)->get()->first();
    //        dd($funcionVital);
      return view('funcionvital.edit',compact('funcionVital'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FuncionVital  $funcionVital
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
          $funcionVital=  FuncionVital::find($request['id']);
        if(request()->ajax())
        {
          $data = request()->validate([
              'fecha_funcion_vital'=>'required',
              'talla'=>'required',
              'peso'=>'required',
              'imc'=>'required',
              'temperatura'=>'required',
              'fc'=>'required',
              'fr'=>'required',
              'ps'=>'required',
              'pd'=>'required',
              'sat02'=>'required',
              'en_reposo'=>'required',
              'perimetro_abdominal'=>'required',
              'maxima_inspiracion'=>'required',
              'perimetro_cadera'=>'required',
              'expiracion_forzada'=>'required',
              'indice_cintura'=>'required',
              'circunferencia_cuello'=>'required',
          ]);

          $funcionVital->update([
              'fecha'=>$data['fecha_funcion_vital'],
              'talla'=>$data['talla'],
              'peso'=>$data['peso'],
              'imc'=>$data['imc'],
              'temperatura'=>$data['temperatura'],
              'fc'=>$data['fc'],
              'fr'=>$data['fr'],
              'ps'=>$data['ps'],
              'pd'=>$data['pd'],
              'sat_02'=>$data['sat02'],
              'en_reposo'=>$data['en_reposo'],
              'perimetro_abdominal'=>$data['perimetro_abdominal'],
              'maxima_inspiracion'=>$data['maxima_inspiracion'],
              'perimetro_cadera'=>$data['perimetro_cadera'],
              'expiracion_forzada'=>$data['expiracion_forzada'],
              'indice_cintura'=>$data['indice_cintura'],
              'circunferencia_cuello'=>$data['circunferencia_cuello'],
              'estado'=>true
          ]);

          $funcionVital->save();
          return response()->json([
              'mensaje'=>   $funcionVital->toArray()
          ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FuncionVital  $funcionVital
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        FuncionVital::destroy($request['id']);
        return response()->json(["mensaje"=>"Registro Eliminado"]);
    }

    public function search(Request $request)
    {

      if($request['buscar'] != ''){
        if($request['filtro']=='historia')
        {
            $citas= Cita::leftjoin('pacientes','citas.paciente_id','pacientes.id')
            ->where('pacientes.nro_historia','like','%'.$request['buscar'].'%')
            ->where('citas.estado',true)
            ->orderBy('fecha_examen')
            ->orderBy('hora_examen')->paginate(10);

        }
        else if($request['filtro']=='paciente')
        {

            $citas= Cita::leftjoin('pacientes','citas.paciente_id','pacientes.id')
            ->where('pacientes.apellido_paterno','like','%'.$request['buscar'].'%')
            ->where('citas.estado',true)
            ->orderBy('fecha_examen')->orderBy('hora_examen')->paginate(10);

        }
      }
      else
      {
        $citas= Cita::where('estado',true)
      ->orderBy('fecha_examen')->orderBy('hora_examen')->paginate(10);
      }

          if($request->ajax())
          {
              $view = view('funcionvital.tabla',compact('citas'))->render();
              return response()->json(['html'=>$view]);
          }
    }

      public function listareporte()
      {

          $citas = Cita::where('estado',true)
            ->orderBy('fecha_examen','asc')
            ->orderBy('hora_examen','asc')->get();
          $view=View::make('funcionvital.reporte.listafuncionvital',compact('citas'));
          $pdf = \App::make('dompdf.wrapper');
          $pdf->loadHTML($view);
          $pdf->stream($view);
          return $pdf->stream();

      }



}
