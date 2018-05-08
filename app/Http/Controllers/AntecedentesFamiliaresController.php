<?php

namespace App\Http\Controllers;

use App\AntecedentesFamiliares;
use Illuminate\Http\Request;
use Carbon\Carbon;


class AntecedentesFamiliaresController extends Controller
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

        $data=request()->validate([
          'paciente_id'=>'required',
          'famsobrepeso'=>'nullable',
          'cbosobrepeso'=>'required_if:famsobrepeso,==,1',
          'cbodossobrepeso'=>'required_if:famsobrepeso,==,1',
          'hipertensionarterial'=>'nullable',
          'cbohipertensionarterial'=>'required_if:hipertensionarterial,==,1',
          'cbodoshipertensionarterial'=>'required_if:hipertensionarterial,==,1',
          'enfermedadcardiovascular'=>'nullable',
          'cboenfermedadcardiovascular'=>'required_if:enfermedadcardiovascular,==,1',
          'cbodosenfermedadcardiovascular'=>'required_if:enfermedadcardiovascular,==,1',
          'faminsuficienciavenosa'=>'nullable',
          'cboinsuficienciavenosa'=>'required_if:faminsuficienciavenosa,==,1',
          'cbodosinsuficienciavenosa'=>'required_if:faminsuficienciavenosa,==,1',
          'famdislipidemia'=>'nullable',
          'cbodislipidemia'=>'required_if:famdislipidemia,==,1',
          'cbodosdislipidemia'=>'required_if:famdislipidemia,==,1',
          'famdiabetesmelitus'=>'nullable',
          'cbodiabetesmelitus'=>'required_if:famdiabetesmelitus,==,1',
          'cbodosdiabetesmelitus'=>'required_if:famdiabetesmelitus,==,1',
          'famglaucoma'=>'nullable',
          'cboglaucoma'=>'required_if:famglaucoma,==,1',
          'cbodosglaucoma'=>'required_if:famglaucoma,==,1',
          'famcataratas'=>'nullable',
          'cbocataratas'=>'required_if:famcataratas,==,1',
          'cbodoscataratas'=>'required_if:famcataratas,==,1',
          'famcancerginecologico'=>'nullable',
          'cbocancerginecologico'=>'required_if:famcancerginecologico,==,1',
          'cbodoscancerginecologico'=>'required_if:famcancerginecologico,==,1',
          'txtcancerginecologico'=>'required_if:famcancerginecologico,==,1',
          'famcancercolon'=>'nullable',
          'cbocancercolon'=>'required_if:famcancercolon,==,1',
          'cbodoscancercolon'=>'required_if:famcancercolon,==,1',
          'famotroscancer'=>'nullable',
          'cbootroscancer'=>'required_if:famotroscancer,==,1',
          'cbodosotroscancer'=>'required_if:famotroscancer,==,1',
          'txtotroscancer'=>'required_if:famotroscancer,==,1',
          'famepilepsia'=>'nullable',
          'cboepilepsia'=>'required_if:famepilepsia,==,1',
          'cbodosepilepsia'=>'required_if:famepilepsia,==,1',
          'famasma'=>'nullable',
          'cboasma'=>'required_if:famasma,==,1',
          'cbodosasma'=>'required_if:famasma,==,1',
          'famespecificarotros'=>'nullable'

        ]);


          $antecedentesFamiliares=AntecedentesFamiliares::create([
            'sobrepeso'=>isset($data['famsobrepeso'])?$data['famsobrepeso']:null,
            'sobrepeso_parentesco_uno'=>isset($data['cbosobrepeso'])?$data['cbosobrepeso']:null,
            'sobrepeso_parentesco_dos'=>isset($data['cbodossobrepeso'])?$data['cbodossobrepeso']:null,
            'hipertension_arterial'=>isset($data['hipertensionarterial'])?$data['hipertensionarterial']:null,
            'hipertension_arterial_parentesco_uno'=>isset($data['cbohipertensionarterial'])?$data['cbohipertensionarterial']:null,
            'hipertension_arterial_parentesco_dos'=>isset($data['cbodoshipertensionarterial'])?$data['cbodoshipertensionarterial']:null,
            'enfermedad_cardiovascular'=>isset($data['enfermedadcardiovascular'])?$data['enfermedadcardiovascular']:null,
            'enfermedad_cardiovascular_parentesco_uno'=>isset($data['cboenfermedadcardiovascular'])?$data['cboenfermedadcardiovascular']:null,
            'enfermedad_cardiovascular_parentesco_dos'=>isset($data['cbodosenfermedadcardiovascular'])?$data['cbodosenfermedadcardiovascular']:null,
            'insuficiencia_venosa'=>isset($data['faminsuficienciavenosa'])?$data['faminsuficienciavenosa']:null,
            'insuficiencia_venosa_parentesco_uno'=>isset($data['cboinsuficienciavenosa'])?$data['cboinsuficienciavenosa']:null,
            'insuficiencia_venosa_parentesco_dos'=>isset($data['cbodosinsuficienciavenosa'])?$data['cbodosinsuficienciavenosa']:null,
            'dislipidemia'=>isset($data['famdislipidemia'])?$data['famdislipidemia']:null,
            'dislipidemia_parentesco_uno'=>isset($data['cbodislipidemia'])?$data['cbodislipidemia']:null,
            'dislipidemia_parentesco_dos'=>isset($data['cbodosdislipidemia'])?$data['cbodosdislipidemia']:null,
            'diabetes_melitus'=>isset($data['famdiabetesmelitus'])?$data['famdiabetesmelitus']:null,
            'diabetes_melitus_parentesco_uno'=>isset($data['cbodiabetesmelitus'])?$data['cbodiabetesmelitus']:null,
            'diabetes_melitus_parentesco_dos'=>isset($data['cbodosdiabetesmelitus'])?$data['cbodosdiabetesmelitus']:null,
            'glaucoma'=>isset($data['famglaucoma'])?$data['famglaucoma']:null,
            'glaucoma_parentesco_uno'=>isset($data['cboglaucoma'])?$data['cboglaucoma']:null,
            'glaucoma_parentesco_dos'=>isset($data['cbodosglaucoma'])?$data['cbodosglaucoma']:null,
            'cataratas'=>isset($data['famcataratas'])?$data['famcataratas']:null,
            'cataratas_parentesco_uno'=>isset($data['cbocataratas'])?$data['cbocataratas']:null,
            'cataratas_parentesco_dos'=>isset($data['cbodoscataratas'])?$data['cbodoscataratas']:null,
            'cancer_ginecologico'=>isset($data['famcancerginecologico'])?$data['famcancerginecologico']:null,
            'cancer_ginecologico_parentesco_uno'=>isset($data['cbocancerginecologico'])?$data['cbocancerginecologico']:null,
            'cancer_ginecologico_parentesco_dos'=>isset($data['cbodoscancerginecologico'])?$data['cbodoscancerginecologico']:null,
            'cancer_ginecologico_descripcion'=>isset($data['txtcancerginecologico'])?$data['txtcancerginecologico']:null,
            'cancer_colon'=>isset($data['famcancercolon'])?$data['famcancercolon']:null,
            'cancer_colon_parentesco_uno'=>isset($data['cbocancercolon'])?$data['cbocancercolon']:null,
            'cancer_colon_parentesco_dos'=>isset($data['cbodoscancercolon'])?$data['cbodoscancercolon']:null,
            'otros_formas_cancer'=>isset($data['famotroscancer'])?$data['famotroscancer']:null,
            'otros_formas_cancer_parentesco_uno'=>isset($data['cbootroscancer'])?$data['cbootroscancer']:null,
            'otros_formas_cancer_parentesco_dos'=>isset($data['cbodosotroscancer'])?$data['cbodosotroscancer']:null,
            'otros_formas_cancer_descripcion'=>isset($data['txtotroscancer'])?$data['txtotroscancer']:null,
            'epilepsia'=>isset($data['famepilepsia'])?$data['famepilepsia']:null,
            'epilepsia_parentesco_uno'=>isset($data['cboepilepsia'])?$data['cboepilepsia']:null,
            'epilepsia_parentesco_dos'=>isset($data['cbodosepilepsia'])?$data['cbodosepilepsia']:null,
            'asma'=>isset($data['famepilepsia'])?$data['famepilepsia']:null,
            'asma_parentesco_uno'=>isset($data['cboasma'])?$data['cboasma']:null,
            'asma_parentesco_dos'=>isset($data['cbodosasma'])?$data['cbodosasma']:null,
           'familiares_otros'=>isset($data['famespecificarotros'])?$data['famespecificarotros']:null,
            'fecha_registro'=>Carbon::now(),
            'paciente_id'=>$data['paciente_id'],
            'estado'=>true
      ]);
        return response()->json(['mensaje'=>"Registro exitoso"]);
      }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AntecedentesFamiliares  $antecedentesFamiliares
     * @return \Illuminate\Http\Response
     */
    public function show(AntecedentesFamiliares $antecedentesFamiliares)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AntecedentesFamiliares  $antecedentesFamiliares
     * @return \Illuminate\Http\Response
     */
    public function edit(AntecedentesFamiliares $antecedentesFamiliares)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AntecedentesFamiliares  $antecedentesFamiliares
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

            $antecedentesFamiliares=AntecedentesFamiliares::find($request['antecedentesfamiliares_id']);

            if(request()->ajax())
            {

              $data=request()->validate([
                'paciente_id'=>'required',
                'famsobrepeso'=>'nullable',
                'cbosobrepeso'=>'required_if:famsobrepeso,==,1',
                'cbodossobrepeso'=>'required_if:famsobrepeso,==,1',
                'hipertensionarterial'=>'nullable',
                'cbohipertensionarterial'=>'required_if:hipertensionarterial,==,1',
                'cbodoshipertensionarterial'=>'required_if:hipertensionarterial,==,1',
                'enfermedadcardiovascular'=>'nullable',
                'cboenfermedadcardiovascular'=>'required_if:enfermedadcardiovascular,==,1',
                'cbodosenfermedadcardiovascular'=>'required_if:enfermedadcardiovascular,==,1',
                'faminsuficienciavenosa'=>'nullable',
                'cboinsuficienciavenosa'=>'required_if:faminsuficienciavenosa,==,1',
                'cbodosinsuficienciavenosa'=>'required_if:faminsuficienciavenosa,==,1',
                'famdislipidemia'=>'nullable',
                'cbodislipidemia'=>'required_if:famdislipidemia,==,1',
                'cbodosdislipidemia'=>'required_if:famdislipidemia,==,1',
                'famdiabetesmelitus'=>'nullable',
                'cbodiabetesmelitus'=>'required_if:famdiabetesmelitus,==,1',
                'cbodosdiabetesmelitus'=>'required_if:famdiabetesmelitus,==,1',
                'famglaucoma'=>'nullable',
                'cboglaucoma'=>'required_if:famglaucoma,==,1',
                'cbodosglaucoma'=>'required_if:famglaucoma,==,1',
                'famcataratas'=>'nullable',
                'cbocataratas'=>'required_if:famcataratas,==,1',
                'cbodoscataratas'=>'required_if:famcataratas,==,1',
                'famcancerginecologico'=>'nullable',
                'cbocancerginecologico'=>'required_if:famcancerginecologico,==,1',
                'cbodoscancerginecologico'=>'required_if:famcancerginecologico,==,1',
                'txtcancerginecologico'=>'required_if:famcancerginecologico,==,1',
                'famcancercolon'=>'nullable',
                'cbocancercolon'=>'required_if:famcancercolon,==,1',
                'cbodoscancercolon'=>'required_if:famcancercolon,==,1',
                'famotroscancer'=>'nullable',
                'cbootroscancer'=>'required_if:famotroscancer,==,1',
                'cbodosotroscancer'=>'required_if:famotroscancer,==,1',
                'txtotroscancer'=>'required_if:famotroscancer,==,1',
                'famepilepsia'=>'nullable',
                'cboepilepsia'=>'required_if:famepilepsia,==,1',
                'cbodosepilepsia'=>'required_if:famepilepsia,==,1',
                'famasma'=>'nullable',
                'cboasma'=>'required_if:famasma,==,1',
                'cbodosasma'=>'required_if:famasma,==,1',
                'famespecificarotros'=>'nullable'

              ]);


                $antecedentesFamiliares->update([
                  'sobrepeso'=>isset($data['famsobrepeso'])?$data['famsobrepeso']:null,
                  'sobrepeso_parentesco_uno'=>isset($data['cbosobrepeso'])?$data['cbosobrepeso']:null,
                  'sobrepeso_parentesco_dos'=>isset($data['cbodossobrepeso'])?$data['cbodossobrepeso']:null,
                  'hipertension_arterial'=>isset($data['hipertensionarterial'])?$data['hipertensionarterial']:null,
                  'hipertension_arterial_parentesco_uno'=>isset($data['cbohipertensionarterial'])?$data['cbohipertensionarterial']:null,
                  'hipertension_arterial_parentesco_dos'=>isset($data['cbodoshipertensionarterial'])?$data['cbodoshipertensionarterial']:null,
                  'enfermedad_cardiovascular'=>isset($data['enfermedadcardiovascular'])?$data['enfermedadcardiovascular']:null,
                  'enfermedad_cardiovascular_parentesco_uno'=>isset($data['cboenfermedadcardiovascular'])?$data['cboenfermedadcardiovascular']:null,
                  'enfermedad_cardiovascular_parentesco_dos'=>isset($data['cbodosenfermedadcardiovascular'])?$data['cbodosenfermedadcardiovascular']:null,
                  'insuficiencia_venosa'=>isset($data['faminsuficienciavenosa'])?$data['faminsuficienciavenosa']:null,
                  'insuficiencia_venosa_parentesco_uno'=>isset($data['cboinsuficienciavenosa'])?$data['cboinsuficienciavenosa']:null,
                  'insuficiencia_venosa_parentesco_dos'=>isset($data['cbodosinsuficienciavenosa'])?$data['cbodosinsuficienciavenosa']:null,
                  'dislipidemia'=>isset($data['famdislipidemia'])?$data['famdislipidemia']:null,
                  'dislipidemia_parentesco_uno'=>isset($data['cbodislipidemia'])?$data['cbodislipidemia']:null,
                  'dislipidemia_parentesco_dos'=>isset($data['cbodosdislipidemia'])?$data['cbodosdislipidemia']:null,
                  'diabetes_melitus'=>isset($data['famdiabetesmelitus'])?$data['famdiabetesmelitus']:null,
                  'diabetes_melitus_parentesco_uno'=>isset($data['cbodiabetesmelitus'])?$data['cbodiabetesmelitus']:null,
                  'diabetes_melitus_parentesco_dos'=>isset($data['cbodosdiabetesmelitus'])?$data['cbodosdiabetesmelitus']:null,
                  'glaucoma'=>isset($data['famglaucoma'])?$data['famglaucoma']:null,
                  'glaucoma_parentesco_uno'=>isset($data['cboglaucoma'])?$data['cboglaucoma']:null,
                  'glaucoma_parentesco_dos'=>isset($data['cbodosglaucoma'])?$data['cbodosglaucoma']:null,
                  'cataratas'=>isset($data['famcataratas'])?$data['famcataratas']:null,
                  'cataratas_parentesco_uno'=>isset($data['cbocataratas'])?$data['cbocataratas']:null,
                  'cataratas_parentesco_dos'=>isset($data['cbodoscataratas'])?$data['cbodoscataratas']:null,
                  'cancer_ginecologico'=>isset($data['famcancerginecologico'])?$data['famcancerginecologico']:null,
                  'cancer_ginecologico_parentesco_uno'=>isset($data['cbocancerginecologico'])?$data['cbocancerginecologico']:null,
                  'cancer_ginecologico_parentesco_dos'=>isset($data['cbodoscancerginecologico'])?$data['cbodoscancerginecologico']:null,
                  'cancer_ginecologico_descripcion'=>isset($data['txtcancerginecologico'])?$data['txtcancerginecologico']:null,
                  'cancer_colon'=>isset($data['famcancercolon'])?$data['famcancercolon']:null,
                  'cancer_colon_parentesco_uno'=>isset($data['cbocancercolon'])?$data['cbocancercolon']:null,
                  'cancer_colon_parentesco_dos'=>isset($data['cbodoscancercolon'])?$data['cbodoscancercolon']:null,
                  'otros_formas_cancer'=>isset($data['famotroscancer'])?$data['famotroscancer']:null,
                  'otros_formas_cancer_parentesco_uno'=>isset($data['cbootroscancer'])?$data['cbootroscancer']:null,
                  'otros_formas_cancer_parentesco_dos'=>isset($data['cbodosotroscancer'])?$data['cbodosotroscancer']:null,
                  'otros_formas_cancer_descripcion'=>isset($data['txtotroscancer'])?$data['txtotroscancer']:null,
                  'epilepsia'=>isset($data['famepilepsia'])?$data['famepilepsia']:null,
                  'epilepsia_parentesco_uno'=>isset($data['cboepilepsia'])?$data['cboepilepsia']:null,
                  'epilepsia_parentesco_dos'=>isset($data['cbodosepilepsia'])?$data['cbodosepilepsia']:null,
                  'asma'=>isset($data['famepilepsia'])?$data['famepilepsia']:null,
                  'asma_parentesco_uno'=>isset($data['cboasma'])?$data['cboasma']:null,
                  'asma_parentesco_dos'=>isset($data['cbodosasma'])?$data['cbodosasma']:null,
                 'familiares_otros'=>isset($data['famespecificarotros'])?$data['famespecificarotros']:null,
                  'fecha_registro'=>Carbon::now(),
                  'paciente_id'=>$data['paciente_id'],
                  'estado'=>true
            ]);
            $antecedentesFamiliares->save();
              return response()->json(['mensaje'=>"Registro Actualizado"]);
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AntecedentesFamiliares  $antecedentesFamiliares
     * @return \Illuminate\Http\Response
     */
    public function destroy(AntecedentesFamiliares $antecedentesFamiliares)
    {
        //
    }
}
