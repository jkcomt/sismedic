<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cita;
use App\Event;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events= Event::where('estado',true)->get();
        //$citas= Cita::where('estado',true)->get();

        $citas=Cita::where('fecha_examen','=',\Carbon\Carbon::now()->toDateString())
                    //->where('hora_examen','>',\Carbon\Carbon::now()->toTimeString())
                    ->orderBy('hora_examen')->get();

        if(Auth::user()->perfil->descripcion == "sistema"){
            return view('dashboard',compact('citas','events'));
        }else{
            return redirect(route('pacientes.index'));
        }

    }
}
