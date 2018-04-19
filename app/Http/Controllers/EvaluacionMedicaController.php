<?php

namespace App\Http\Controllers;

use App\Altura;
use App\Area;
use App\Cita;
use App\CitaExamen;
use App\ClienteCuenta;
use App\Contratador;
use App\Departamento;
use App\Distrito;
use App\Event;
use App\GrupoSanguineo;
use App\LugarLabor;
use App\Ocupacion;
use App\Paciente;
use App\Pais;
use App\Perfil;
use App\PerfilExamen;
use App\Profesion;
use App\Provincia;
use App\Regimen;
use App\TipoExamen;
use App\TipoInstruccion;
use Illuminate\Http\Request;

class EvaluacionMedicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citas = Cita::where('estado',true)->orderBy('fecha_examen','asc')->orderBy('hora_examen','asc')->paginate(10);
        return view('evaluacionmedica.index',compact('citas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $cita = Cita::find($id);
        $paciente = Paciente::find($cita->paciente->id);

        //$paciente = Paciente::find($id);

        $paisOrigen =Pais::select('nombre','id')
            ->where('estado',true)
            ->where('id',$paciente->pais_origen_id)->first();

        $departamentosOrigen = Departamento::where('estado',true)->where('id',$paciente->departamento_origen_id)->first();
        //$departamentos = null;

        $provinciasOrigen = Provincia::where('estado',true)->where('id',$paciente->provincia_origen_id)->first();
        //$provincias = null;

        $distritosOrigen = Distrito::where('estado',true)->where('id',$paciente->distrito_origen_id)->first();

        $paisDomicilio =Pais::select('nombre','id')
            ->where('estado',true)
            ->where('id',$paciente->pais_domicilio_id)->first();

        $departamentosDomicilio = Departamento::where('estado',true)->where('id',$paciente->departamento_domicilio_id)->first();
        //$departamentos = null;

        $provinciasDomicilio = Provincia::where('estado',true)->where('id',$paciente->provincia_domicilio_id)->first();

        $distritosDomicilio = Distrito::where('estado',true)->where('id',$paciente->distrito_domicilio_id)->first();

        $tipoInstrucciones = TipoInstruccion::where('estado',true)->get()->pluck('nombre','id')->toArray();

        $profesiones = Profesion::where('estado',true)->get()->pluck('nombre','id')->toArray();

        $contratadores = Contratador::where('estado',true)->get()->pluck('nombre','id')->toArray();

        $areas = Area::where('estado',true)->get()->pluck('nombre','id')->toArray();

        $ocupaciones = Ocupacion::where('estado',true)->get()->pluck('nombre','id')->toArray();

        $lugarLabores = LugarLabor::where('estado',true)->get()->pluck('nombre','id')->toArray();

        $alturas = Altura::where('estado',true)->get()->pluck('descripcion','id')->toArray();

        $grupoSanguineos = GrupoSanguineo::where('estado',true)->get()->pluck('descripcion','id')->toArray();

        $regimenes = Regimen::where('estado',true)->get()->pluck('descripcion','id')->toArray();
        return view('evaluacionmedica.create',compact('cita','paciente','paisOrigen','departamentosOrigen','provinciasOrigen','paisDomicilio','departamentosDomicilio','provinciasDomicilio','distritosDomicilio','tipoInstrucciones','profesiones','contratadores','areas','ocupaciones','lugarLabores','alturas','grupoSanguineos','regimenes','distritosOrigen'));
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
    public function destroy($id)
    {
        //
    }
}
