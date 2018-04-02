<?php

namespace App\Http\Controllers;

use App\Altura;
use App\Area;
use App\Cargo;
use App\Contratador;
use App\Departamento;
use App\Distrito;
use App\GrupoSanguineo;
use App\LugarLabor;
use App\Ocupacion;
use App\Paciente;
use App\Pais;
use App\Profesion;
use App\Provincia;
use App\Regimen;
use App\TipoInstruccion;
use Illuminate\Http\Request;

class PacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::where('estado',true)->paginate(10);
        return view('pacientes.index',compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paciente = Paciente::where('estado','=',true)->get()->last();

        $paises =Pais::select('nombre','id')
            ->where('estado',true)
            ->get()->pluck('nombre','id')->toArray();

        $departamentos = Departamento::where('estado',true)->get()->pluck('nombre','id')->toArray();
        $departamentos = null;

        //$provincias = Provincia::where('estado',true)->get()->pluck('nombre','id')->toArray();
        $provincias = null;

        $distritos = Distrito::where('estado',true)->get()->pluck('nombre','id')->toArray();

        $tipoInstrucciones = TipoInstruccion::where('estado',true)->get()->pluck('nombre','id')->toArray();

        $profesiones = Profesion::where('estado',true)->get()->pluck('nombre','id')->toArray();

        $contratadores = Contratador::where('estado',true)->get()->pluck('nombre','id')->toArray();

        $areas = Area::where('estado',true)->get()->pluck('nombre','id')->toArray();

        $ocupaciones = Ocupacion::where('estado',true)->get()->pluck('nombre','id')->toArray();

        $lugarLabores = LugarLabor::where('estado',true)->get()->pluck('nombre','id')->toArray();

        $alturas = Altura::where('estado',true)->get()->pluck('descripcion','id')->toArray();

        $grupoSanguineos = GrupoSanguineo::where('estado',true)->get()->pluck('descripcion','id')->toArray();

        $regimenes = Regimen::where('estado',true)->get()->pluck('descripcion','id')->toArray();

        return view('pacientes.create',compact('paciente','paises','departamentos','provincias','tipoInstrucciones','profesiones','contratadores','areas','ocupaciones','lugarLabores','alturas','grupoSanguineos','regimenes','distritos'));
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
            //$data = request()->input();
            $data = request()->validate([
                'nro_historia'=>'required',
                'matricula'=>'required',
                'apellido_paterno'=>'required',
                'apellido_materno'=>'required',
                'nombres'=>'required',
                'sexo'=>'required',
                'fecha_nacimiento'=>'required',
                'fecha_ingreso'=>'required',
                'fecha_ingreso_minera'=>'required',
                'jefe_inmediato'=>'required',

                'paisOrigen'=>'required',
                'departamentoOrigen'=>'required',
                'provinciaOrigen'=>'required',
                'distritoOrigen'=>'required',
                'paisOrigenDom'=>'required',
                'departamentoDomicilio'=>'required',
                'provinciaDomicilio'=>'required',
                'distritoDom'=>'required',
                'direccion'=>'required',
                'telf_fijo'=>'required',
                'celular'=>'required',

                'trabajo'=>'required',
                'tipo_dni'=>'required',
                'num_dni'=>'required',
                'estadoCivil'=>'required',
                'tipoIntruccion'=>'required',
                'profesion'=>'required',
                'contrata'=>'required',
                'area'=>'required',
                'ocupacion'=>'required',
                'seccion'=>'required',

                'lugarLabores'=>'required',
                'email'=>'nullable|email',
                'comentarios'=>'nullable',
                'alergias'=>'nullable',
                'emergencia'=>'nullable',
                'nr_hijo_muertos'=>'required',
                'nr_hijo_vivos'=>'required',
                'altura'=>'required',
                'grupoSanguineo'=>'required',
                'regimen'=>'required'

            ]);

            Paciente::create([
               'nro_historia'=>$data['nro_historia'],
               'matricula'=>$data['matricula'],
               'apellido_paterno'=>$data['apellido_paterno'],
               'apellido_materno'=>$data['apellido_materno'],
               'nombres'=>$data['nombres'],
               'sexo' =>$data['sexo'],
               'fecha_nacimiento'=>$data['fecha_nacimiento'],
               'fecha_ingreso'=>$data['fecha_ingreso'],
               'fecha_ingreso_minera'=>$data['fecha_ingreso_minera'],
               'jefe_inmediato'=>$data['jefe_inmediato'],
               'pais_origen_id'=>$data['paisOrigen'],
               'departamento_origen_id'=>$data['departamentoOrigen'],
               'provincia_origen_id'=>$data['provinciaOrigen'],
               'distrito_origen_id'=>$data['distritoOrigen'],
               'pais_domicilio_id'=>$data['paisOrigenDom'],
               'departamento_domicilio_id'=>$data['departamentoDomicilio'],
               'provincia_domicilio_id'=>$data['provinciaDomicilio'],
               'distrito_domicilio_id'=>$data['distritoDom'],
               'direccion'=>$data['direccion'],
               'telf_fijo'=>$data['telf_fijo'],
               'celular'=>$data['celular'],
               'trabajo'=>$data['trabajo'],
               'tipo_dni'=>$data['tipo_dni'],
               'num_dni'=>$data['num_dni'],
               'estado_civil'=>$data['estadoCivil'],
               'instruccion_id'=>$data['tipoIntruccion'],
               'contrata_id'=>$data['contrata'],
               'lugar_labores_id'=>$data['lugarLabores'],
               'email'=>'email',
               'comentarios'=>'comentarios',
               'alergias'=>'alergias',
               'en_caso_emergencia'=>'emergencia',
               'nro_hijo_vivos'=>'nr_hijo_vivos',
               'nro_hijo_muertos'=>'nr_hijo_muertos',
               'profesion_id'=>'profesion',
               'area_id'=>'area',
               'seccion'=>'seccion',
               'altura_id'=>'altura',
               'gs_id'=>'grupoSanguineo',
               'regimen_id'=>'regimen',
               'estado'=>true

            ]);

            return response()->json(['mensaje' => $data]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paciente  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $pacientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paciente  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $pacientes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paciente  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $pacientes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paciente  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $pacientes)
    {
        //
    }
}
