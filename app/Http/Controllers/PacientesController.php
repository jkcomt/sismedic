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
use Carbon\Carbon;
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
        $pacientes = Paciente::where('estado',true)->orderBy('fecha_registro','desc')
            ->orderBy('hora_registro','desc')->paginate(10);
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
                'matricula'=>'required|unique:pacientes,matricula',
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
                'celular'=>'required|unique:pacientes',

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
               'ocupacion_id'=>$data['ocupacion'],
               'lugar_labores_id'=>$data['lugarLabores'],
               'email'=>$data['email'],
               'comentarios'=>$data['comentarios'],
               'alergias'=>$data['alergias'],
               'en_caso_emergencia'=>$data['emergencia'],
               'nro_hijo_vivos'=>$data['nr_hijo_vivos'],
               'nro_hijo_muertos'=>$data['nr_hijo_muertos'],
               'profesion_id'=>$data['profesion'],
               'area_id'=>$data['area'],
               'seccion'=>$data['seccion'],
               'altura_id'=>$data['altura'],
               'gs_id'=>$data['grupoSanguineo'],
               'regimen_id'=>$data['regimen'],
               'fecha_registro'=>Carbon::now(),
               'hora_registro'=>Carbon::now(),
               'estado'=>true

            ]);

            return response()->json(['mensaje' => $data]);
        }
    }

    public function search(Request $request){
        $pacientes = null;
        if($request['buscar'] != '') {
            if($request['filtro'] == "historia") {
                $pacientes = Paciente::where('nro_historia', 'like', '%' . $request['buscar'] . '%')
                    //->orWhere('num_dni', 'like', '%' . $request['buscar'] . '%')
                    ->orderBy('fecha_registro', 'desc')
                    ->orderBy('hora_registro', 'desc');

                $pacientes = $pacientes->where('estado', true)->paginate(10);
            }elseif($request['filtro'] == "dni")
            {
                $pacientes = Paciente::where('num_dni', 'like', '%' . $request['buscar'] . '%')
                    ->orderBy('fecha_registro', 'desc')
                    ->orderBy('hora_registro', 'desc');

                $pacientes = $pacientes->where('estado', true)->paginate(10);
            }
        }else{
            $pacientes = Paciente::where('estado', true)
                ->orderBy('fecha_registro', 'desc')
                ->orderBy('hora_registro', 'desc')
                ->paginate(10);
        }



        if($request->ajax())
        {
            $view = view('pacientes.tabla',compact('pacientes'))->render();
            return response()->json(['html'=>$view]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paciente  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente = Paciente::find($id);

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

        return view('pacientes.details',compact('paciente','paisOrigen','departamentosOrigen','provinciasOrigen','paisDomicilio','departamentosDomicilio','provinciasDomicilio','distritosDomicilio','tipoInstrucciones','profesiones','contratadores','areas','ocupaciones','lugarLabores','alturas','grupoSanguineos','regimenes','distritosOrigen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paciente  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = Paciente::find($id);

        $paises =Pais::select('nombre','id')
            ->where('estado',true)
            ->get()->pluck('nombre','id')->toArray();

        $departamentos = Departamento::where('estado',true)->get()->pluck('nombre','id')->toArray();


        $provincias = Provincia::where('estado',true)->where('departamento_id',$paciente->provinciaOrigen->departamento_id)->get()->pluck('nombre','id')->toArray();


        $distritos = Distrito::where('estado',true)->get()->pluck('nombre','id')->toArray();

        $departamentosDomicilio = Departamento::where('estado',true)->get()->pluck('nombre','id')->toArray();

        $tipoInstrucciones = TipoInstruccion::where('estado',true)->get()->pluck('nombre','id')->toArray();

        $profesiones = Profesion::where('estado',true)->get()->pluck('nombre','id')->toArray();

        $contratadores = Contratador::where('estado',true)->get()->pluck('nombre','id')->toArray();

        $areas = Area::where('estado',true)->get()->pluck('nombre','id')->toArray();

        $ocupaciones = Ocupacion::where('estado',true)->get()->pluck('nombre','id')->toArray();

        $lugarLabores = LugarLabor::where('estado',true)->get()->pluck('nombre','id')->toArray();

        $alturas = Altura::where('estado',true)->get()->pluck('descripcion','id')->toArray();

        $grupoSanguineos = GrupoSanguineo::where('estado',true)->get()->pluck('descripcion','id')->toArray();

        $regimenes = Regimen::where('estado',true)->get()->pluck('descripcion','id')->toArray();

        return view('pacientes.edit',compact('paciente','paises','departamentos','provincias','tipoInstrucciones','profesiones','contratadores','areas','ocupaciones','lugarLabores','alturas','grupoSanguineos','regimenes','distritos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paciente  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if (request()->ajax()) {
            if (request()->ajax()) {
                //$data = request()->input();
                $data = request()->validate([
                    'id'=>'required',
                    'nro_historia' => 'required',
                    'matricula' => 'required',
                    'apellido_paterno' => 'required',
                    'apellido_materno' => 'required',
                    'nombres' => 'required',
                    'sexo' => 'required',
                    'fecha_nacimiento' => 'required',
                    'fecha_ingreso' => 'required',
                    'fecha_ingreso_minera' => 'required',
                    'jefe_inmediato' => 'required',

                    'paisOrigen' => 'required',
                    'departamentoOrigen' => 'required',
                    'provinciaOrigen' => 'required',
                    'distritoOrigen' => 'required',
                    'paisOrigenDom' => 'required',
                    'departamentoDomicilio' => 'required',
                    'provinciaDomicilio' => 'required',
                    'distritoDom' => 'required',
                    'direccion' => 'required',
                    'telf_fijo' => 'required',
                    'celular' => 'required',

                    'trabajo' => 'required',
                    'tipo_dni' => 'required',
                    'num_dni' => 'required',
                    'estadoCivil' => 'required',
                    'tipoIntruccion' => 'required',
                    'profesion' => 'required',
                    'contrata' => 'required',
                    'area' => 'required',
                    'ocupacion' => 'required',
                    'seccion' => 'required',

                    'lugarLabores' => 'required',
                    'email' => 'nullable|email',
                    'comentarios' => 'nullable',
                    'alergias' => 'nullable',
                    'emergencia' => 'nullable',
                    'nr_hijo_muertos' => 'required',
                    'nr_hijo_vivos' => 'required',
                    'altura' => 'required',
                    'grupoSanguineo' => 'required',
                    'regimen' => 'required'

                ]);

                $paciente = Paciente::find($data['id']);

                $paciente->update([
                    'matricula' => $data['matricula'],
                    'apellido_paterno' => $data['apellido_paterno'],
                    'apellido_materno' => $data['apellido_materno'],
                    'nombres' => $data['nombres'],
                    'sexo' => $data['sexo'],
                    'fecha_nacimiento' => $data['fecha_nacimiento'],
                    'fecha_ingreso' => $data['fecha_ingreso'],
                    'fecha_ingreso_minera' => $data['fecha_ingreso_minera'],
                    'jefe_inmediato' => $data['jefe_inmediato'],
                    'pais_origen_id' => $data['paisOrigen'],
                    'departamento_origen_id' => $data['departamentoOrigen'],
                    'provincia_origen_id' => $data['provinciaOrigen'],
                    'distrito_origen_id' => $data['distritoOrigen'],
                    'pais_domicilio_id' => $data['paisOrigenDom'],
                    'departamento_domicilio_id' => $data['departamentoDomicilio'],
                    'provincia_domicilio_id' => $data['provinciaDomicilio'],
                    'distrito_domicilio_id' => $data['distritoDom'],
                    'direccion' => $data['direccion'],
                    'telf_fijo' => $data['telf_fijo'],
                    'celular' => $data['celular'],
                    'trabajo' => $data['trabajo'],
                    'tipo_dni' => $data['tipo_dni'],
                    'num_dni' => $data['num_dni'],
                    'estado_civil' => $data['estadoCivil'],
                    'instruccion_id' => $data['tipoIntruccion'],
                    'contrata_id' => $data['contrata'],
                    'ocupacion_id' => $data['ocupacion'],
                    'lugar_labores_id' => $data['lugarLabores'],
                    'email' => $data['email'],
                    'comentarios' => $data['comentarios'],
                    'alergias' => $data['alergias'],
                    'en_caso_emergencia' => $data['emergencia'],
                    'nro_hijo_vivos' => $data['nr_hijo_vivos'],
                    'nro_hijo_muertos' => $data['nr_hijo_muertos'],
                    'profesion_id' => $data['profesion'],
                    'area_id' => $data['area'],
                    'seccion' => $data['seccion'],
                    'altura_id' => $data['altura'],
                    'gs_id' => $data['grupoSanguineo'],
                    'regimen_id' => $data['regimen']
                ]);

                $paciente->save();

                return response()->json(['mensaje' => $data]);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paciente  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $paciente = Paciente::find($request['id']);

        $paciente->update([
            'estado'=>false
        ]);

        $paciente->save();

        return response()->json([
            'mensaje'=>"eliminación exitosa"
        ]);
    }


}
