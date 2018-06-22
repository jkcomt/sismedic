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
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use View;
use Illuminate\Http\Request;

class EvaluacionMedicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $examenes_fisicos = array(
        'CABEZA'=>'NORMOCEFALA',
        'PIEL Y FANERAS'=>'TIBIA, ELASTICA, HUMEDA, TURGENTE, LLENADO CAPILAR MENOR A 2 SEGUNDOS',
        'REFLEJOS PUPILARES VISTA DERECHA'=>'CIRCULARES, ISCORICAS, REACTIVAS',
        'REFLEJOS PUPILARES VISTA IZQUIERDA'=>'CIRCULARES, ISOCORICAS, REACTIVAS',
        'ENFERMEDADES OCULARES'=>'NO PTERIGION',
        'NARIZ'=>'PIRAMIDAL, NO DESVIACION DE TABIQUE NASAL, FOSAS NASALES PERMEABLES',
        'OTOSCOPIA OIDO DERECHO'=>'',
        'OTOSCOPIA OIDO IZQUIERDO'=>'',
        'BOCA, AMIGDALAS, FARINGE, LARINGE'=>'LENGUA CENTRAL, MOVIL AMIGDALAS',
        'PIEZAS MAL ESTADO'=>0,
        'PIEZAS QUE FALTAN'=>0,
        'ULTIMO CONTROL DENTAL'=>'',
        'CUELLO Y PERIMETRO'=>'CIRCULAR, NO ADENOPATIAS MANIFIESTAS, MOVIL, NO INGURGITACION',
        'TORAX'=>'CILINDRICO, SIMETRICO, AMPLEXACION CONVERSVADA',
        'CORAZON'=>'RUIDOS CARDIACOS RITMICOS, DE BUANA INTENSIDAD, NO SOPLOS, IMPULSO VENTRICULAR CONSERVADO',
        'PULMON DERECHO'=>'MURMULLO VESICULAR PASA BIEN AMBOS CAMPOS PULMONARES, NO RUIDOS SOBREAGREGADOS',
        'PULMON IZQUIERDO'=>'MURMULLO VESICULAR PASA BIEN AMBOS CAMPOS PULMONARES, NO RUIDOS SOBREAGREGADOS',
        'COLUMNA VERTEBRAL'=>'NO IMPRESIONA DESVIACION, DANDY NEGATIVO, LASEGUE NEGATIVO',
        'ABDOMEN'=>'PLANO, RUIDOS HIDROAEREOS PRESENTES, BLANDO DEPRESIBLE, NO DOLOROSO A LA PALPACION, NO VISCEROMEGALIAS',
        'ANILLOS INGUINALES'=>'CERRADOS',
        'HERNIAS'=>'AUSENTES',
        'ORGANOS GENITALES'=>'ADECUADOS A EDAD Y SEXO',
        'GANGLIOS'=>'NO ADENOPATIAS',
        'MIEMBRO SUPERIOR DERECHO'=>'COMPLETO, RANGOS ARTICULARES CONSERVADOS, PULSOS PERIFERICOS PRESENTES',
        'MIEMBRO SUPERIOR IZQUIERDO'=>'COMPLETO, RANGOS ARTICULARES CONSERVADOS, PULSOS PERIFERICOS PRESENTES',
        'MIEMBRO INFERIOR DERECHO'=>'COMPLETO, RANGOS ARTICULARES CONSERVADOS, PULSOS PERIFERICOS PRESENTES',
        'MIEMBRO INFERIOR IZQUIERDO'=>'COMPLETO, RANGOS ARTICULARES CONSERVADOS, PULSOS PERIFERICOS PRESENTES',
        'VARICES'=>'AUSENTES',
        'TACTO RECTAL'=>'NO SE HIZO',
        'LENGUAJE, ATENCION, MEMORIA,ORIENTACION, INTELIGENCIA'=>'NORMALES',
        'FUERZA MUSCULAR'=>'NORMALES',
        'REFLEJOS OSTEOTENDINOSOS'=>'NORMALES',
        'MARCHA'=>'NORMALES',
        'EVALUACION CARDIOVASCULAR'=>'0'
    );

    public function index()
    {
        $citas = Cita::where('estado',true)->orderBy('fecha_examen','desc')->orderBy('hora_examen','desc')->paginate(10);
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

        $examenes_fisicos = $this->examenes_fisicos;
        return view('evaluacionmedica.create',compact('cita','paciente','paisOrigen','departamentosOrigen','provinciasOrigen','paisDomicilio','departamentosDomicilio','provinciasDomicilio','distritosDomicilio','tipoInstrucciones','profesiones','contratadores','areas','ocupaciones','lugarLabores','alturas','grupoSanguineos','regimenes','distritosOrigen','examenes_fisicos'));
    }

    public function recargarListaExamenes($id){
        $cita = Cita::find($id);
        $view = view('evaluacionmedica.tablaexamenes',compact('cita'))->render();
        return response()->json(['html'=>$view]);
    }

//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
//    public function store(Request $request)
//    {
//        //
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function show($id)
//    {
//        //
//    }

//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function edit($id)
//    {
//        //
//    }

//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, $id)
//    {
//        //
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy($id)
//    {
//        //
//    }
    public function informelaboratorio($id)
    {
      $cita=Cita::find($id);
      $view=View::make('evaluacionmedica.reportes.informelaboratorio',compact('cita'));
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      $pdf->stream($view);
      return $pdf->stream();
    }
    public function informemedicoocupacional($id)
    {
      $cita=Cita::find($id);
      $view=View::make('evaluacionmedica.reportes.informemedicoocupacional',compact('cita'));
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      $pdf->stream($view);
      return $pdf->stream();
    }

    public function certificadoocupacional($id)
    {
      $cita=Cita::find($id);
      $view=View::make('evaluacionmedica.reportes.certificadoaptitudmedico',compact('cita'));
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      $pdf->stream($view);
      return $pdf->stream();
    }


    public function anexo16($id)
    {
     set_time_limit(120);
      $cita=Cita::find($id);
      $view=View::make('evaluacionmedica.reportes.anexo16',compact('cita'));
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      $pdf->stream($view);
      return $pdf->stream();
    }





}
