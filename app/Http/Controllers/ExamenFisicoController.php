<?php

namespace App\Http\Controllers;

use App\ExamenFisico;
use Illuminate\Http\Request;
use Carbon\Carbon;
class ExamenFisicoController extends Controller
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
          $data = request()->validate([
              'cabeza'=>'nullable',
              'pies_faneras'=>'nullable',
              'reflejos_pupilares_derecha'=>'nullable',
              'reflejos_pupilares_izquierda'=>'nullable',
              'enfermedades_oculares'=>'nullable',
              'nariz'=>'nullable',
              'otoscopia_oido_derecho'=>'nullable',
              'otoscopia_oido_izquierdo'=>'nullable',
              'boca_amigdalas_faringe_laringe'=>'nullable',
              'piezas_malestado'=>'nullable',
              'piezas_faltan'=>'nullable',
              'ultimo_ctrl_dental'=>'nullable',
              'cuello_perimetro'=>'nullable',
              'torax'=>'nullable',
              'corazon'=>'nullable',
              'pulmon_derecho'=>'nullable',
              'pulmon_izquierdo'=>'nullable',
              'columna_vertebral'=>'nullable',
              'abdomen'=>'nullable',
              'anillos_inguinales'=>'nullable',
              'hernias'=>'nullable',
              'organos_genitales'=>'nullable',
              'ganglios'=>'nullable',
              'miembro_superior_derecho'=>'nullable',
              'mienbro_superior_izquierdo'=>'nullable',
              'miembro_inferior_derecho'=>'nullable',
              'mienbro_inferior_izquierdo'=>'nullable',
              'varices'=>'nullable',
              'tacto_rectal'=>'nullable',
              'lenguaje_atencion_memoria_orientacion_inteligencia'=>'nullable',
              'fuerza_muscular'=>'nullable',
              'relojes_osteotendinosos'=>'nullable',
              'marcha'=>'nullable',
              'evaluacion_cardiovascular'=>'nullable',
              'paciente_id'=>'nullable'
          ]);

          $examen = ExamenFisico::create([
             'cabeza'=>isset($data['cabeza'])? $data['cabeza']:null,
             'pies_faneras'=>isset($data['pies_faneras'])? $data['pies_faneras']:null,
             'reflejos_pupilares_derecha'=>isset($data['reflejos_pupilares_derecha'])? $data['reflejos_pupilares_derecha']:null,
             'reflejos_pupilares_izquierda'=>isset($data['reflejos_pupilares_izquierda'])? $data['reflejos_pupilares_izquierda']:null,
             'enfermedades_oculares'=>isset($data['enfermedades_oculares'])? $data['enfermedades_oculares']:null,
             'nariz'=>isset($data['nariz'])? $data['nariz']:null,
             'otoscopia_oido_derecho'=>isset($data['otoscopia_oido_derecho'])? $data['otoscopia_oido_derecho']:null,
             'otoscopia_oido_izquierdo'=>isset($data['otoscopia_oido_izquierdo'])? $data['otoscopia_oido_izquierdo']:null,
             'boca_amigdalas_faringe_laringe'=>isset($data['boca_amigdalas_faringe_laringe'])? $data['boca_amigdalas_faringe_laringe']:null,
             'piezas_malestado'=>isset($data['piezas_malestado'])? $data['piezas_malestado']:null,
             'piezas_faltan'=>isset($data['piezas_faltan'])? $data['piezas_faltan']:null,
             'ultimo_ctrl_dental'=>isset($data['ultimo_ctrl_dental'])? $data['ultimo_ctrl_dental']:null,
             'cuello_perimetro'=>isset($data['cuello_perimetro'])? $data['cuello_perimetro']:null,
             'torax'=>isset($data['torax'])? $data['torax']:null,
             'corazon'=>isset($data['corazon'])? $data['corazon']:null,
             'pulmon_derecho'=>isset($data['pulmon_derecho'])? $data['pulmon_derecho']:null,
             'pulmon_izquierdo'=>isset($data['pulmon_izquierdo'])? $data['pulmon_izquierdo']:null,
             'columna_vertebral'=>isset($data['columna_vertebral'])? $data['columna_vertebral']:null,
             'abdomen'=>isset($data['abdomen'])? $data['abdomen']:null,
             'anillos_inguinales'=>isset($data['anillos_inguinales'])? $data['anillos_inguinales']:null,
             'hernias'=>isset($data['hernias'])? $data['hernias']:null,
             'organos_genitales'=>isset($data['organos_genitales'])? $data['organos_genitales']:null,
             'ganglios'=>isset($data['ganglios'])? $data['ganglios']:null,
             'miembro_superior_derecho'=>isset($data['miembro_superior_derecho'])? $data['miembro_superior_derecho']:null,
             'mienbro_superior_izquierdo'=>isset($data['mienbro_superior_izquierdo'])? $data['mienbro_superior_izquierdo']:null,
             'miembro_inferior_derecho'=>isset($data['miembro_inferior_derecho'])? $data['miembro_inferior_derecho']:null,
             'mienbro_inferior_izquierdo'=>isset($data['mienbro_inferior_izquierdo'])? $data['mienbro_inferior_izquierdo']:null,
             'varices'=>isset($data['varices'])? $data['varices']:null,
             'tacto_rectal'=>isset($data['tacto_rectal'])? $data['tacto_rectal']:null,
             'lenguaje_atencion_memoria_orientacion_inteligencia'=>isset($data['lenguaje_atencion_memoria_orientacion_inteligencia'])? $data['lenguaje_atencion_memoria_orientacion_inteligencia']:null,
             'fuerza_muscular'=>isset($data['fuerza_muscular'])? $data['fuerza_muscular']:null,
             'relojes_osteotendinosos'=>isset($data['relojes_osteotendinosos'])? $data['relojes_osteotendinosos']:null,
             'marcha'=>isset($data['marcha'])? $data['marcha']:null,
             'evaluacion_cardiovascular'=>isset($data['evaluacion_cardiovascular'])? $data['evaluacion_cardiovascular']:null,
             'fecha_registro'=>Carbon::now(),
             'paciente_id'=>isset($data['paciente_id'])? $data['paciente_id']:null,
          ]);
          return response()->json(['mensaje' =>"registro exitoso"]);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ExamenFisico  $examenFisico
     * @return \Illuminate\Http\Response
     */
    public function show(ExamenFisico $examenFisico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ExamenFisico  $examenFisico
     * @return \Illuminate\Http\Response
     */
    public function edit(ExamenFisico $examenFisico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ExamenFisico  $examenFisico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
          $examen = ExamenFisico::find($request['examen_fisico_id']);
          if(request()->ajax())
          {
              $data = request()->validate([
                  'cabeza'=>'nullable',
                  'pies_faneras'=>'nullable',
                  'reflejos_pupilares_derecha'=>'nullable',
                  'reflejos_pupilares_izquierda'=>'nullable',
                  'enfermedades_oculares'=>'nullable',
                  'nariz'=>'nullable',
                  'otoscopia_oido_derecho'=>'nullable',
                  'otoscopia_oido_izquierdo'=>'nullable',
                  'boca_amigdalas_faringe_laringe'=>'nullable',
                  'piezas_malestado'=>'nullable',
                  'piezas_faltan'=>'nullable',
                  'ultimo_ctrl_dental'=>'nullable',
                  'cuello_perimetro'=>'nullable',
                  'torax'=>'nullable',
                  'corazon'=>'nullable',
                  'pulmon_derecho'=>'nullable',
                  'pulmon_izquierdo'=>'nullable',
                  'columna_vertebral'=>'nullable',
                  'abdomen'=>'nullable',
                  'anillos_inguinales'=>'nullable',
                  'hernias'=>'nullable',
                  'organos_genitales'=>'nullable',
                  'ganglios'=>'nullable',
                  'miembro_superior_derecho'=>'nullable',
                  'mienbro_superior_izquierdo'=>'nullable',
                  'miembro_inferior_derecho'=>'nullable',
                  'mienbro_inferior_izquierdo'=>'nullable',
                  'varices'=>'nullable',
                  'tacto_rectal'=>'nullable',
                  'lenguaje_atencion_memoria_orientacion_inteligencia'=>'nullable',
                  'fuerza_muscular'=>'nullable',
                  'relojes_osteotendinosos'=>'nullable',
                  'marcha'=>'nullable',
                  'evaluacion_cardiovascular'=>'nullable',
                  'paciente_id'=>'nullable'
              ]);

              $examen->update([
                 'cabeza'=>isset($data['cabeza'])? $data['cabeza']:null,
                 'pies_faneras'=>isset($data['pies_faneras'])? $data['pies_faneras']:null,
                 'reflejos_pupilares_derecha'=>isset($data['reflejos_pupilares_derecha'])? $data['reflejos_pupilares_derecha']:null,
                 'reflejos_pupilares_izquierda'=>isset($data['reflejos_pupilares_izquierda'])? $data['reflejos_pupilares_izquierda']:null,
                 'enfermedades_oculares'=>isset($data['enfermedades_oculares'])? $data['enfermedades_oculares']:null,
                 'nariz'=>isset($data['nariz'])? $data['nariz']:null,
                 'otoscopia_oido_derecho'=>isset($data['otoscopia_oido_derecho'])? $data['otoscopia_oido_derecho']:null,
                 'otoscopia_oido_izquierdo'=>isset($data['otoscopia_oido_izquierdo'])? $data['otoscopia_oido_izquierdo']:null,
                 'boca_amigdalas_faringe_laringe'=>isset($data['boca_amigdalas_faringe_laringe'])? $data['boca_amigdalas_faringe_laringe']:null,
                 'piezas_malestado'=>isset($data['piezas_malestado'])? $data['piezas_malestado']:null,
                 'piezas_faltan'=>isset($data['piezas_faltan'])? $data['piezas_faltan']:null,
                 'ultimo_ctrl_dental'=>isset($data['ultimo_ctrl_dental'])? $data['ultimo_ctrl_dental']:null,
                 'cuello_perimetro'=>isset($data['cuello_perimetro'])? $data['cuello_perimetro']:null,
                 'torax'=>isset($data['torax'])? $data['torax']:null,
                 'corazon'=>isset($data['corazon'])? $data['corazon']:null,
                 'pulmon_derecho'=>isset($data['pulmon_derecho'])? $data['pulmon_derecho']:null,
                 'pulmon_izquierdo'=>isset($data['pulmon_izquierdo'])? $data['pulmon_izquierdo']:null,
                 'columna_vertebral'=>isset($data['columna_vertebral'])? $data['columna_vertebral']:null,
                 'abdomen'=>isset($data['abdomen'])? $data['abdomen']:null,
                 'anillos_inguinales'=>isset($data['anillos_inguinales'])? $data['anillos_inguinales']:null,
                 'hernias'=>isset($data['hernias'])? $data['hernias']:null,
                 'organos_genitales'=>isset($data['organos_genitales'])? $data['organos_genitales']:null,
                 'ganglios'=>isset($data['ganglios'])? $data['ganglios']:null,
                 'miembro_superior_derecho'=>isset($data['miembro_superior_derecho'])? $data['miembro_superior_derecho']:null,
                 'mienbro_superior_izquierdo'=>isset($data['mienbro_superior_izquierdo'])? $data['mienbro_superior_izquierdo']:null,
                 'miembro_inferior_derecho'=>isset($data['miembro_inferior_derecho'])? $data['miembro_inferior_derecho']:null,
                 'mienbro_inferior_izquierdo'=>isset($data['mienbro_inferior_izquierdo'])? $data['mienbro_inferior_izquierdo']:null,
                 'varices'=>isset($data['varices'])? $data['varices']:null,
                 'tacto_rectal'=>isset($data['tacto_rectal'])? $data['tacto_rectal']:null,
                 'lenguaje_atencion_memoria_orientacion_inteligencia'=>isset($data['lenguaje_atencion_memoria_orientacion_inteligencia'])? $data['lenguaje_atencion_memoria_orientacion_inteligencia']:null,
                 'fuerza_muscular'=>isset($data['fuerza_muscular'])? $data['fuerza_muscular']:null,
                 'relojes_osteotendinosos'=>isset($data['relojes_osteotendinosos'])? $data['relojes_osteotendinosos']:null,
                 'marcha'=>isset($data['marcha'])? $data['marcha']:null,
                 'evaluacion_cardiovascular'=>isset($data['evaluacion_cardiovascular'])? $data['evaluacion_cardiovascular']:null,
                 'fecha_registro'=>Carbon::now(),
                 'paciente_id'=>isset($data['paciente_id'])? $data['paciente_id']:null,
              ]);
              $examen->save();
              return response()->json(['mensaje' =>"registro exitoso"]);
          }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ExamenFisico  $examenFisico
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExamenFisico $examenFisico)
    {
        //
    }
}
