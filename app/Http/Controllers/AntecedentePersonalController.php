<?php

namespace App\Http\Controllers;

use App\AntecedentePersonal;
use Illuminate\Http\Request;
use App\Paciente;
use App\Cita;
use Carbon\Carbon;
class AntecedentePersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index($id)
    // {
    //   $paciente=Paciente::find($id);
    //   return view('antecedentes.index',compact('paciente'));
    // }

    public function principal($id)
    {
      $cita=Cita::find($id);
      $paciente = Paciente::find($cita->paciente->id);
      return view('antecedentes.index',compact('paciente','cita'));
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
          //
            $data = request()->validate(
              [
                'id_cita'=>'required',
                'sobrepeso'=>'nullable',
                'enfermedadcronica'=>'nullable',
                'farmacoscomun'=>'nullable',
                'txtfarmacoscomun'=>'required_if:farmacoscomun,==,on',
                'alergiasmedicamentosas'=>'nullable',
                'txtalergiasmedicamentosas'=>'required_if:alergiasmedicamentosas,==,on',
                'ram'=>'nullable',
                'txtram'=>'required_if:ram,==,on',
                'practicadeportiva'=>'nullable',
                'txtpracticadeportiva'=>'required_if:practicadeportiva,==,on',
                'txtpdfrecuencia'=>'required_if:practicadeportiva,==,on',
                'fuma'=>'nullable',
                'txtfumafrecuencia'=>'required_if:fuma,==,on',
                'cbofuma'=>'required_if:fuma,==,on',
                'fumaba'=>'nullable',
                'txtfumabapromsemana'=>'required_if:fumaba,==,on',
                'alcohol'=>'nullable',
                'txtalcoholfrecuencia'=>'required_if:alcohol,==,on',
                'cboalcohol'=>'required_if:alcohol,==,on',
                'txtalcoholtiempo'=>'required_if:alcohol,==,on',
                'coca'=>'nullable',
                'txtfrecuenciacoca'=>'required_if:coca,==,on',
                'cbococa'=>'required_if:coca,==,on',
                'drogas'=>'nullable',
                'txtfrecuenciadrogas'=>'required_if:droga,==,on',
                'cafe'=>'nullable',
                'txtfrecuenciacafe'=>'required_if:cafe,==,on',
                'marcapasos'=>'nullable',
                'coronaipatia'=>'nullable',
                'epilipsia'=>'nullable',
                'gota'=>'nullable',
                'migrania'=>'nullable',
                'vactetano'=>'nullable',
                'ronquidos'=>'nullable',
                'humodeleña'=>'nullable',
                'diabetesmelitus'=>'nullable',
                'txtaniodiabetesmelitus'=>'required_if:diabetesmelitus,==,on',
                'txtdiabetesmelitustratamientoactual'=>'required_if:diabetesmelitus,==,on',
                'hipertencionarterial'=>'nullable',
                'txtaniohipertencionarterial'=>'required_if:hipertencionarterial,==,on',
                'txttratamientoactualhipertencionarterial'=>'required_if:hipertencionarterial,==,on',
                'trombosis'=>'nullable',
                'envardiovascular'=>'nullable',
                'txtenvardiovascular'=>'required_if:envardiovascular,==,on',
                'enfermedadestiroidea'=>'nullable',
                'txtanioenfermedadestiroidea'=>'required_if:enfermedadestiroidea,==,on',
                'txtenfermedadestiroideatratamientoactual'=>'required_if:enfermedadestiroidea,==,on',
                'neoplasias'=>'nullable',
                'txtneoplasiaanio'=>'required_if:neoplasias,==,on',
                'txtneoplasiastratamientoactual'=>'required_if:neoplasias,==,on',
                'hobbies'=>'nullable',
                'txthobbies'=>'required_if:hobbies,==,on'
                ]
              );

            $antecedentePersonal=AntecedentePersonal::create(
              [
                  'sobrepeso'=>  isset($data['sobrepeso']) ? $data['sobrepeso'] : null,
                  'enfermedad_cronica'=>  isset($data['enfermedadcronica']) ? $data['enfermedadcronica'] : null,
                  'farmacos_uso_comun'=>  isset($data['farmacoscomun']) ? $data['farmacoscomun'] : null,
                  'farmacos_uso_comun_descripcion'=>  isset($data['txtfarmacoscomun']) ? $data['txtfarmacoscomun'] : null,
                  'alergias_no_medicantosa'=>  isset($data['alergiasmedicamentosas']) ? $data['alergiasmedicamentosas'] : null,
                  'alergias_no_medicantosa_descripcion'=>  isset($data['txtalergiasmedicamentosas']) ? $data['txtalergiasmedicamentosas'] : null,
                  'ram'=>  isset($data['ram']) ? $data['ram'] : null,
                  'ram_descripcion'=>  isset($data['txtram']) ? $data['txtram'] : null,
                  'practica_deportiva'=>  isset($data['txtpracticadeportiva']) ? $data['txtpracticadeportiva'] : null,
                  'practica_deportiva_frecuencia'=>  isset($data['txtpdfrecuencia']) ? $data['txtpdfrecuencia'] : null,
                  'fuma'=>  isset($data['fumafrecuencia']) ? $data['fumafrecuencia'] : null,
                  'fuma_descripcion'=>  isset($data['txtfumafrecuencia']) ? $data['txtfumafrecuencia'] : null,
                  'fumaba'=>  isset($data['fumaba']) ? $data['fumaba'] : null,
                  'fuma_prom_semanal'=>  isset($data['txtfumabapromsemana']) ? $data['txtfumabapromsemana'] : null,
                  'alcohol'=>  isset($data['alcohol']) ? $data['alcohol'] : null,
                  'alcohol_frecuencia'=>  isset($data['txtalcoholfrecuencia'])? $data['txtalcoholfrecuencia'] : null,
                  'alcohol_descripcion'=>  isset($data['cboalcohol']) ? $data['cboalcohol'] : null,
                  'alcohol_tiempo'=>  isset($data['txtalcoholtiempo']) ? $data['txtalcoholtiempo'] : null,
                  'coca'=>  isset($data['coca']) ? $data['coca'] : null,
                  'coca_frecuencia'=>  isset($data['txtfrecuenciacoca']) ? $data['txtfrecuenciacoca'] : null,
                  'coca_descripcion'=>  isset($data['cbococa']) ? $data['cbococa'] : null,
                  'droga'=>  isset($data['drogas']) ? $data['drogas'] : null,
                  'droga_frecuencia'=>  isset($data['txtfrecuenciadrogas']) ? $data['txtfrecuenciadrogas'] : null,
                  'cafe'=>  isset($data['cafe']) ? $data['cafe'] : null,
                  'cafe_frecuencia'=>  isset($data['txtfrecuenciacafe']) ? $data['txtfrecuenciacafe'] : null,
                  'marcapasos'=>  isset($data['marcapasos']) ? $data['marcapasos'] : null,
                  'coronariopatia'=>  isset($data['coronaipatia']) ? $data['coronaipatia'] : null,
                  'epilepsia'=>  isset($data['epilipsia']) ? $data['epilipsia'] : null,
                  'gota'=>  isset($data['gota']) ? $data['gota'] : null,
                  'migrana'=>  isset($data['migrania']) ? $data['migrania'] : null,
                  'vacuna_tetanos'=>  isset($data['vactetano']) ? $data['vactetano'] : null,
                  'ronquidos'=>  isset($data['ronquidos']) ? $data['ronquidos'] : null,
                  'humo_de_lena'=>  isset($data['humodeleña']) ? $data['humodeleña'] : null,
                  'diabetes_melitus'=>  isset($data['diabetesmelitus']) ? $data['diabetesmelitus'] : null,
                  'diabetes_melitus_ano_dx'=>  isset($data['txtaniodiabetesmelitus']) ? $data['txtaniodiabetesmelitus'] : null,
                  'diabetes_melitus_tratamiento_actual'=>  isset($data['txtdiabetesmelitustratamientoactual']) ? $data['txtdiabetesmelitustratamientoactual'] : null,
                  'hipertension_arterial'=>  isset($data['hipertencionarterial']) ? $data['hipertencionarterial'] : null,
                  'hipertension_arterial_ano_dx'=>  isset($data['txtaniohipertencionarterial']) ? $data['txtaniohipertencionarterial'] : null,
                  'hipertension_arterial_tratamiento_actual'=>  isset($data['txttratamientoactualhipertencionarterial']) ? $data['txttratamientoactualhipertencionarterial'] : null,
                  'trombosis'=>  isset($data['trombosis']) ? $data['trombosis'] : null,
                  'enfermedad_cardio_vascular'=>  isset($data['envardiovascular']) ? $data['envardiovascular'] : null,
                  'enfermedad_cardio_vascular_descripcion'=>  isset($data['txtenvardiovascular']) ? $data['txtenvardiovascular'] : null,
                  'insuficiencia_venosa'=>  isset($data['insuficienciavenosa']) ? $data['insuficienciavenosa'] : null,
                  'insuficiencia_venosa_ano_dx'=>  isset($data['txtanioinsuficienciavenosa']) ? $data['txtanioinsuficienciavenosa'] : null,
                  'insuficiencia_venosa_tratamiento_actual'=>  isset($data['txtinsuficienciavenosatratamientoactual']) ? $data['txtinsuficienciavenosatratamientoactual'] : null,
                  'dislipidemia'=>  isset($data['dislipidemia']) ? $data['dislipidemia'] : null,
                  'dislipidemia_ano_dx'=>  isset($data['txtdislipidemiaanio']) ? $data['txtdislipidemiaanio'] : null,
                  'dislipidemia_tratamiento_actual'=>  isset($data['txtdislipidemiatratamientoactual']) ? $data['txtdislipidemiatratamientoactual'] : null,
                  'enfermedades_tiroidea'=>  isset($data['enfermedadestiroidea']) ? $data['enfermedadestiroidea'] : null,
                  'enfermedades_tiroidea_ano_dx'=>  isset($data['txtanioenfermedadestiroidea']) ? $data['txtanioenfermedadestiroidea'] : null,
                  'enfermedades_tiroidea_tratamiendo_actual'=>  isset($data['txtenfermedadestiroideatratamientoactual']) ? $data['txtenfermedadestiroideatratamientoactual'] : null,
                  'neoplasias'=>  isset($data['neoplasias']) ? $data['neoplasias'] : null,
                  'neoplasias_descripcion'=>  isset($data['txtneoplasia']) ? $data['txtneoplasia'] : null,
                  'neoplasias_ano_dx'=>  isset($data['txtneoplasiaanio']) ? $data['txtneoplasiaanio'] : null,
                  'neoplasias_tratamiento_actual'=>  isset($data['txtneoplasiastratamientoactual']) ? $data['txtneoplasiastratamientoactual'] : null,
                  'hobbies'=>  isset($data['hobbies']) ? $data['hobbies'] : null,
                  'hobbies_descripcion'=>  isset($data['txthobbies']) ? $data['txthobbies'] : null,
                  'fecha_registro'=>  Carbon::now(),
                  'cita_id'=>  $data['id_cita'],
                  'estado'=> true
              ]
            );
                 return response()->json(['mensaje'=>'Registro exitoso']);
      }//$data['farmacoscomun']

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AntecedentePersonal  $antecedentePersonal
     * @return \Illuminate\Http\Response
     */
    public function show(AntecedentePersonal $antecedentePersonal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AntecedentePersonal  $antecedentePersonal
     * @return \Illuminate\Http\Response
     */
    public function edit(AntecedentePersonal $antecedentePersonal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AntecedentePersonal  $antecedentePersonal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AntecedentePersonal $antecedentePersonal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AntecedentePersonal  $antecedentePersonal
     * @return \Illuminate\Http\Response
     */
    public function destroy(AntecedentePersonal $antecedentePersonal)
    {
        //
    }
}
