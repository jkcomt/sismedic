<?php

namespace App\Http\Controllers;

use App\AntecedentePersonal;
use App\Antper_Hozpitalizaciones;
use App\AntperAccidenteLaborales;
use App\AntperAccidenteParticulares;
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
      $hospitalizaciones = Antper_Hozpitalizaciones::where('paciente_id','=',$cita->paciente->id)->get()->toArray();
      $laborales=AntperAccidenteLaborales::where('paciente_id','=',$cita->paciente->id)->get()->toArray();
      $particulares=AntperAccidenteParticulares::where('paciente_id','=',$cita->paciente->id)->get()->toArray();

      return view('antecedentes.index',compact('paciente','cita','hospitalizaciones','laborales','particulares'));
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
                'id_paciente'=>'required',
                'sobrepeso'=>'nullable',
                'enfermedadcronica'=>'nullable',
                'farmacoscomun'=>'nullable',
                'txtfarmacoscomun'=>'required_if:farmacoscomun,==,1',
                'alergiasmedicamentosas'=>'nullable',
                'txtalergiasmedicamentosas'=>'required_if:alergiasmedicamentosas,==,1',
                'ram'=>'nullable',
                'txtram'=>'required_if:ram,==,1',
                'practicadeportiva'=>'nullable',
                'txtpracticadeportiva'=>'required_if:practicadeportiva,==,1',
                'txtpdfrecuencia'=>'required_if:practicadeportiva,==,1',
                'fuma'=>'nullable',
                'txtfumafrecuencia'=>'required_if:fuma,==,1',
                'cbofuma'=>'required_if:fuma,==,on',
                'fumaba'=>'nullable',
                'txtfumabapromsemana'=>'required_if:fumaba,==,1',
                'alcohol'=>'nullable',
                'txtalcoholfrecuencia'=>'required_if:alcohol,==,1',
                'cboalcohol'=>'required_if:alcohol,==,on',
                'txtalcoholtiempo'=>'required_if:alcohol,==,1',
                'coca'=>'nullable',
                'txtfrecuenciacoca'=>'required_if:coca,==,1',
                'cbococa'=>'required_if:coca,==,on',
                'drogas'=>'nullable',
                'txtfrecuenciadrogas'=>'required_if:droga,==,1',
                'cafe'=>'nullable',
                'txtfrecuenciacafe'=>'required_if:cafe,==,1',
                'marcapasos'=>'nullable',
                'coronaipatia'=>'nullable',
                'epilipsia'=>'nullable',
                'gota'=>'nullable',
                'migrania'=>'nullable',
                'vactetano'=>'nullable',
                'ronquidos'=>'nullable',
                'humodeleña'=>'nullable',
                'diabetesmelitus'=>'nullable',
                'txtaniodiabetesmelitus'=>'required_if:diabetesmelitus,==,1',
                'txtdiabetesmelitustratamientoactual'=>'required_if:diabetesmelitus,==,1',
                'hipertencionarterial'=>'nullable',
                'txtaniohipertencionarterial'=>'required_if:hipertencionarterial,==,1',
                'txttratamientoactualhipertencionarterial'=>'required_if:hipertencionarterial,==,1',
                'trombosis'=>'nullable',
                'envardiovascular'=>'nullable',
                'txtenvardiovascular'=>'required_if:envardiovascular,==,1',
                'insuficienciavenosa'=>'nullable',
                'txtanioinsuficienciavenosa'=>'required_if:insuficienciavenosa,==,1',
                'txtinsuficienciavenosatratamientoactual'=>'required_if:insuficienciavenosa,==,1',
                'dislipidemia'=>'nullable',
                'txtdislipidemiaanio'=>'required_if:dislipidemia,==,1',
                'txtdislipidemiatratamientoactual'=>'required_if:dislipidemia,==,1',
                'enfermedadestiroidea'=>'nullable',
                'txtenfermedadestiroidea'=>'required_if:enfermedadestiroidea,==,1',
                'txtanioenfermedadestiroidea'=>'required_if:enfermedadestiroidea,==,1',
                'txtenfermedadestiroideatratamientoactual'=>'required_if:enfermedadestiroidea,==,1',
                'neoplasias'=>'nullable',
                'txtneoplasia'=>'required_if:neoplasias,==,1',
                'txtneoplasiaanio'=>'required_if:neoplasias,==,1',
                'txtneoplasiastratamientoactual'=>'required_if:neoplasias,==,1',
                'hobbies'=>'nullable',
                'txthobbies'=>'required_if:hobbies,==,1'
                ]
              );
                 $antecedentePersonal=AntecedentePersonal::create(
              [
                'sobrepeso'=>  isset($data['sobrepeso']) ? $data['sobrepeso'] : null,
                'enfermedad_cronica'=>  isset($data['enfermedadcronica']) ? $data['enfermedadcronica'] : null,
                'farmacos_uso_comun'=>isset($data['farmacoscomun']) ? $data['farmacoscomun'] : null,
                'farmacos_uso_comun_descripcion'=>  isset($data['txtfarmacoscomun']) ? $data['txtfarmacoscomun'] : null,
                'alergias_no_medicantosa'=>  isset($data['alergiasmedicamentosas']) ? $data['alergiasmedicamentosas'] : null,
                'alergias_no_medicantosa_descripcion'=>  isset($data['txtalergiasmedicamentosas']) ? $data['txtalergiasmedicamentosas'] : null,
                'ram'=>  isset($data['ram']) ? $data['ram'] : null,
                'ram_descripcion'=>  isset($data['txtram']) ? $data['txtram'] : null,
                'practica_deportiva'=>  isset($data['practicadeportiva']) ? $data['practicadeportiva'] : null,
                'practica_deportiva_descripcion'=>isset($data['txtpracticadeportiva']) ? $data['txtpracticadeportiva']:null,
                'practica_deportiva_frecuencia'=>  isset($data['txtpdfrecuencia']) ? $data['txtpdfrecuencia'] : null,
                'fuma'=>  isset($data['fuma']) ? $data['fuma'] : null,
                'fuma_descripcion'=>  isset($data['txtfumafrecuencia']) ? $data['txtfumafrecuencia'] : null,
                'fumaba'=>  isset($data['fumaba']) ? $data['fumaba'] : null,
                'fuma_opciones'=>  isset($data['cbofuma']) ? $data['cbofuma'] : null,
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
                'enfermedades_tiroidea_descripcion'=>  isset($data['txtenfermedadestiroidea']) ? $data['txtenfermedadestiroidea'] : null,
                'enfermedades_tiroidea_ano_dx'=>  isset($data['txtanioenfermedadestiroidea']) ? $data['txtanioenfermedadestiroidea'] : null,
                'enfermedades_tiroidea_tratamiendo_actual'=>  isset($data['txtenfermedadestiroideatratamientoactual']) ? $data['txtenfermedadestiroideatratamientoactual'] : null,
                'neoplasias'=>  isset($data['neoplasias']) ? $data['neoplasias'] : null,
                'neoplasias_descripcion'=>  isset($data['txtneoplasia']) ? $data['txtneoplasia'] : null,
                'neoplasias_ano_dx'=>  isset($data['txtneoplasiaanio']) ? $data['txtneoplasiaanio'] : null,
                'neoplasias_tratamiento_actual'=>  isset($data['txtneoplasiastratamientoactual']) ? $data['txtneoplasiastratamientoactual'] : null,
                'hobbies'=>  isset($data['hobbies']) ? $data['hobbies'] : null,
                'hobbies_descripcion'=>  isset($data['txthobbies']) ? $data['txthobbies'] : null,
                'fecha_registro'=>  Carbon::now(),
                'paciente_id'=>  $data['id_paciente'],
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
    public function update(Request $request)
    {
          if(request()->ajax())
          {
              $antecedentePersonal=AntecedentePersonal::find($request['antecedentesuno_id']);


              $data = request()->validate(
                [
                  'id_paciente'=>'required',
                  'sobrepeso'=>'nullable',
                  'enfermedadcronica'=>'nullable',
                  'farmacoscomun'=>'nullable',
                  'txtfarmacoscomun'=>'required_if:farmacoscomun,==,1',
                  'alergiasmedicamentosas'=>'nullable',
                  'txtalergiasmedicamentosas'=>'required_if:alergiasmedicamentosas,==,1',
                  'ram'=>'nullable',
                  'txtram'=>'required_if:ram,==,1',
                  'practicadeportiva'=>'nullable',
                  'txtpracticadeportiva'=>'required_if:practicadeportiva,==,1',
                  'txtpdfrecuencia'=>'required_if:practicadeportiva,==,1',
                  'fuma'=>'nullable',
                  'txtfumafrecuencia'=>'required_if:fuma,==,1',
                  'cbofuma'=>'required_if:fuma,==,on',
                  'fumaba'=>'nullable',
                  'txtfumabapromsemana'=>'required_if:fumaba,==,1',
                  'alcohol'=>'nullable',
                  'txtalcoholfrecuencia'=>'required_if:alcohol,==,1',
                  'cboalcohol'=>'required_if:alcohol,==,on',
                  'txtalcoholtiempo'=>'required_if:alcohol,==,1',
                  'coca'=>'nullable',
                  'txtfrecuenciacoca'=>'required_if:coca,==,1',
                  'cbococa'=>'required_if:coca,==,on',
                  'drogas'=>'nullable',
                  'txtfrecuenciadrogas'=>'required_if:droga,==,1',
                  'cafe'=>'nullable',
                  'txtfrecuenciacafe'=>'required_if:cafe,==,1',
                  'marcapasos'=>'nullable',
                  'coronaipatia'=>'nullable',
                  'epilipsia'=>'nullable',
                  'gota'=>'nullable',
                  'migrania'=>'nullable',
                  'vactetano'=>'nullable',
                  'ronquidos'=>'nullable',
                  'humodeleña'=>'nullable',
                  'diabetesmelitus'=>'nullable',
                  'txtaniodiabetesmelitus'=>'required_if:diabetesmelitus,==,1',
                  'txtdiabetesmelitustratamientoactual'=>'required_if:diabetesmelitus,==,1',
                  'hipertencionarterial'=>'nullable',
                  'txtaniohipertencionarterial'=>'required_if:hipertencionarterial,==,1',
                  'txttratamientoactualhipertencionarterial'=>'required_if:hipertencionarterial,==,1',
                  'trombosis'=>'nullable',
                  'envardiovascular'=>'nullable',
                  'txtenvardiovascular'=>'required_if:envardiovascular,==,1',
                  'insuficienciavenosa'=>'nullable',
                  'txtanioinsuficienciavenosa'=>'required_if:insuficienciavenosa,==,1',
                  'txtinsuficienciavenosatratamientoactual'=>'required_if:insuficienciavenosa,==,1',
                  'dislipidemia'=>'nullable',
                  'txtdislipidemiaanio'=>'required_if:dislipidemia,==,1',
                  'txtdislipidemiatratamientoactual'=>'required_if:dislipidemia,==,1',
                  'enfermedadestiroidea'=>'nullable',
                  'txtenfermedadestiroidea'=>'required_if:enfermedadestiroidea,==,1',
                  'txtanioenfermedadestiroidea'=>'required_if:enfermedadestiroidea,==,1',
                  'txtenfermedadestiroideatratamientoactual'=>'required_if:enfermedadestiroidea,==,1',
                  'neoplasias'=>'nullable',
                  'txtneoplasia'=>'required_if:neoplasias,==,1',
                  'txtneoplasiaanio'=>'required_if:neoplasias,==,1',
                  'txtneoplasiastratamientoactual'=>'required_if:neoplasias,==,1',
                  'hobbies'=>'nullable',
                  'txthobbies'=>'required_if:hobbies,==,1'
                  ]
                );

//dd($data['txtneoplasia']);

              $antecedentePersonal->update(
                [
                    'sobrepeso'=>  isset($data['sobrepeso']) ? $data['sobrepeso'] : null,
                    'enfermedad_cronica'=>  isset($data['enfermedadcronica']) ? $data['enfermedadcronica'] : null,
                    'farmacos_uso_comun'=>isset($data['farmacoscomun']) ? $data['farmacoscomun'] : null,
                    'farmacos_uso_comun_descripcion'=>  isset($data['txtfarmacoscomun']) ? $data['txtfarmacoscomun'] : null,
                    'alergias_no_medicantosa'=>  isset($data['alergiasmedicamentosas']) ? $data['alergiasmedicamentosas'] : null,
                    'alergias_no_medicantosa_descripcion'=>  isset($data['txtalergiasmedicamentosas']) ? $data['txtalergiasmedicamentosas'] : null,
                    'ram'=>  isset($data['ram']) ? $data['ram'] : null,
                    'ram_descripcion'=>  isset($data['txtram']) ? $data['txtram'] : null,
                    'practica_deportiva'=>  isset($data['practicadeportiva']) ? $data['practicadeportiva'] : null,
                    'practica_deportiva_descripcion'=>isset($data['txtpracticadeportiva']) ? $data['txtpracticadeportiva']:null,
                    'practica_deportiva_frecuencia'=>  isset($data['txtpdfrecuencia']) ? $data['txtpdfrecuencia'] : null,
                    'fuma'=>  isset($data['fuma']) ? $data['fuma'] : null,
                    'fuma_descripcion'=>  isset($data['txtfumafrecuencia']) ? $data['txtfumafrecuencia'] : null,
                    'fumaba'=>  isset($data['fumaba']) ? $data['fumaba'] : null,
                    'fuma_opciones'=>  isset($data['cbofuma']) ? $data['cbofuma'] : null,
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
                    'enfermedades_tiroidea_descripcion'=>  isset($data['txtenfermedadestiroidea']) ? $data['txtenfermedadestiroidea'] : null,
                    'enfermedades_tiroidea_ano_dx'=>  isset($data['txtanioenfermedadestiroidea']) ? $data['txtanioenfermedadestiroidea'] : null,
                    'enfermedades_tiroidea_tratamiendo_actual'=>  isset($data['txtenfermedadestiroideatratamientoactual']) ? $data['txtenfermedadestiroideatratamientoactual'] : null,
                    'neoplasias'=>  isset($data['neoplasias']) ? $data['neoplasias'] : null,
                    'neoplasias_descripcion'=>  isset($data['txtneoplasia']) ? $data['txtneoplasia'] : null,
                    'neoplasias_ano_dx'=>  isset($data['txtneoplasiaanio']) ? $data['txtneoplasiaanio'] : null,
                    'neoplasias_tratamiento_actual'=>  isset($data['txtneoplasiastratamientoactual']) ? $data['txtneoplasiastratamientoactual'] : null,
                    'hobbies'=>  isset($data['hobbies']) ? $data['hobbies'] : null,
                    'hobbies_descripcion'=>  isset($data['txthobbies']) ? $data['txthobbies'] : null,
                    'fecha_registro'=>  Carbon::now()//,
                  //  'paciente_id'=>  $data['id_paciente'],
                  //  'estado'=> true
                ]
              );
               $antecedentePersonal->save();

              return response()->json(["mensaje"=>"Registro Actualizado"]);
          }
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
