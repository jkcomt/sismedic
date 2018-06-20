<?php

namespace App\Http\Controllers;

use App\Personal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $personales= Personal::where('estado',true)->paginate(10);
       return view('personal.index',compact('personales'));
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
     //       $data = request();
            //dd($data['rbTipoAgri']);
       $data = request()->validate([
            'nombres'=>'required',
            'apellidos'=>'required',
            'email'=>'required',
            'dni'=>'required',
            'direccion'=>'required',
            'celular'=>'required'
        ],[
            'nombres.required'=>'El campo nombres es obligatorio',
            'apellidos.required'=>'El campo apellidos es obligatorio',
            'email.required'=>'El campo email es obligatorio',
            'direccion.required'=>'El campo direccion es obligatorio',
            'dni.required'=>'El campo dni es obligatorio',
            'celular.required'=>'El campo celular es obligatorio'
        ]);


        Personal::create([
            'nombres'=>$data['nombres'],
            'apellidos'=>$data['apellidos'],
            'dni'=>$data['dni'],
            'celular'=>$data['celular'],
            'direccion'=>$data['direccion'],
            'email'=>$data['email'],
            'estado'=>true
        ]);
        return response()->json(['mensaje'=>"Registro Exitoso"]);//$data['nombres']." ".$data['apellidos']." ".$data['email']." ".$data['dni']." ".$data['direccion']." ".$data['celular']
    }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function show(Personal $personal)
    {




    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $altura = Personal::find($id);
        return response()->json(
          $altura->toArray()
      );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $personal=  Personal::find($request['editid']);

        $data = request()->validate([
            'editid'=>'required',
            'editnombres'=>'required',
            'editapellidos'=>'required',
            'editemail'=>'required',
            'editdni'=>'required',
            'editdireccion'=>'required',
            'editcelular'=>'required'
        ],[
            'editnombres.required'=>'El campo nombres es obligatorio',
            'editapellidos.required'=>'El campo apellidos es obligatorio',
            'editemail.required'=>'El campo email es obligatorio',
            'editdireccion.required'=>'El campo direccion es obligatorio',
            'editdni.required'=>'El campo dni es obligatorio',
            'editcelular.required'=>'El campo celular es obligatorio'
        ]);


           $personal->update([
            'id'=>$data['editid'],
            'nombres'=>$data['editnombres'],
            'apellidos'=>$data['editapellidos'],
            'email'=>$data['editemail'],
            'dni'=>$data['editdni'],
            'direccion'=>$data['editdireccion'],
            'celular'=>$data['editcelular']

        ]);

           $personal->save();



        return response()->json([
            'mensaje'=>$personal->toArray()
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

         $personal = Personal::find($request['id']);

       $personal->update(
            ['estado'=>false]
        );

        $personal->save();

        return response()->json(
            ['mensaje'=>'eliminacion exitosa']
        );
    }


    public function buscarpersonal(Request $request)
    {
      $term = $request->term ?:'';
      $personal =Personal::select(DB::raw("CONCAT(apellidos,' ',nombres) as nombres_completos"),'id')
          ->where('estado',true)
          ->where('apellidos','like','%'.$term.'%')
          ->orWhere('nombres','like','%'.$term.'%')
          ->orWhere('dni','like','%'.$term.'%')
          ->take(5)
          ->get()->pluck('nombres_completos','id')->toArray();

      $personales = [];
      foreach ($personal as $id => $tag){
          $personales[] = ['id'=>$id,'text'=>$tag];
      }

      return response()->json(
          $personales
      );
    }
}
