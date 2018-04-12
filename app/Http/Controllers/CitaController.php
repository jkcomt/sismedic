<?php

namespace App\Http\Controllers;

use App\Cita;
use App\Event;
use App\PerfilExamen;
use Illuminate\Http\Request;

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
    public function create($id)
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
     * @param  \App\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function show(Cita $cita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function edit(Cita $cita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cita $cita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cita  $cita
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


}
