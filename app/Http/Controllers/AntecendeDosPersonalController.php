<?php

namespace App\Http\Controllers;

use App\AntecendeDosPersonal;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AntecendeDosPersonalController extends Controller
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
          $data=request()->validate(
              [
                'paciente_id'=>'required',
                'tuberculosis'=>'nullable',
                'txttuberculosis'=>'required_if:tuberculosis,==,1',
                'cbotuberculosis'=>'required_if:tuberculosis,==,1',
                'hepatitis'=>'nullable',
                'txthepatitis'=>'required_if:hepatitis,==,1',
                'cbohepatitis'=>'required_if:hepatitis,==,1',
                'tifoidea'=>'nullable',
                'txttifoidea'=>'required_if:tifoidea,==,1',
                'brucelosis'=>'nullable',
                'txtbrucelosis'=>'required_if:brucelosis,==,1',
                'ulcerahepatica'=>'nullable',
                'convulsiones'=>'nullable',
                'txtconvulsiones'=>'required_if:convulsiones,==,1',
                'txtanio'=>'required_if:convulsiones,==,1',
                'txtctratamientoactual'=>'required_if:convulsiones,==,1',
                'gastritis'=>'nullable',
                'txtgastritis'=>'required_if:gastritis,==,1',
                'txtganio'=>'required_if:gastritis,==,1',
                'txtgtratamientoactual'=>'required_if:gastritis,==,1',
                'erge'=>'nullable',
                'txterge'=>'required_if:erge,==,1',
                'txtergeanio'=>'required_if:erge,==,1',
                'txtergetratamientoactual'=>'required_if:erge,==,1',
                'urolitiasis'=>'nullable',
                'txturolitiasisanio'=>'required_if:urolitiasis,==,1',
                'txturolitiasisaniotratamientoactual'=>'required_if:urolitiasis,==,1',
                'herniainguinal'=>'nullable',
                'cboherniainguinal'=>'required_if:herniainguinal,==,1',
                'txtherniainguinal'=>'required_if:herniainguinal,==,1',
                'herniaumbilical'=>'nullable',
                'txtherniaumbilical'=>'required_if:herniaumbilical,==,1',
                'lumbalgia'=>'nullable',
                'cbolumbalgia'=>'required_if:lumbalgia,==,1',
                'txtlumbalgiaanio'=>'required_if:lumbalgia,==,1',
                'txtlumbalgiafrecuenciaanual'=>'required_if:lumbalgia,==,1',
                'otrostranstornoscolumna'=>'nullable',
                'txtotrostranstornoscolumna'=>'required_if:otrostranstornoscolumna,==,1',
                'desordenespiel'=>'nullable',
                'txtdesordenespiel'=>'required_if:desordenespiel,==,1',
                'varicesmienbrosinferiores'=>'nullable',
                'txtvaricesmienbrosinferiores'=>'required_if:varicesmienbrosinferiores,==,1',
                'its'=>'nullable',
                'txtits'=>'required_if:its,==,1',
                'txtitsanio'=>'required_if:its,==,1',
                'txtitstratamientoactual'=>'required_if:its,==,1',
                'otros_sintomas'=>'nullable',
                'txtotrosdescripcion'=>'required_if:otros_sintomas,==,1',
                'sintomatologiaultimosmeses'=>'nullable'
              ]
              );
              $antecendeDosPersonal=AntecendeDosPersonal::create(
                [
                  'tuberculosis'=>  isset($data['tuberculosis']) ? $data['tuberculosis'] : null,
                  'tuberculosis_anio_dx'=>  isset($data['txttuberculosis']) ? $data['txttuberculosis'] : null,
                  'tuberculosis_meses_tratamiento'=>  isset($data['cbotuberculosis']) ? $data['cbotuberculosis'] : null,
                  'hepatitis'=>  isset($data['hepatitis']) ? $data['hepatitis'] : null,
                  'hepatitis_descripcion'=>  isset($data['cbohepatitis']) ? $data['cbohepatitis'] : null,
                  'hepatitis_edad'=>  isset($data['txthepatitis']) ? $data['txthepatitis'] : null,
                  'tifoidea'=>  isset($data['tifoidea']) ? $data['tifoidea'] : null,
                  'tifoidea_ano_dx'=>  isset($data['txttifoidea']) ? $data['txttifoidea'] : null,
                  'brucelosis'=>  isset($data['brucelosis']) ? $data['brucelosis'] : null,
                  'brucelosis_anio_dx'=>  isset($data['txtbrucelosis']) ? $data['txtbrucelosis'] : null,
                  'ulcera_hepatica'=>  isset($data['ulcerahepatica']) ? $data['ulcerahepatica'] : null,
                  'convulsiones'=>  isset($data['convulsiones']) ? $data['convulsiones'] : null,
                  'convulsiones_descripcion'=>  isset($data['txtconvulsiones']) ? $data['txtconvulsiones'] : null,
                  'convulsiones_ano_dx'=>  isset($data['txtanio']) ? $data['txtanio'] : null,
                  'convulsiones_tratamiento_actual'=>  isset($data['txtctratamientoactual']) ? $data['txtctratamientoactual'] : null,
                  'gastritis'=>  isset($data['gastritis']) ? $data['gastritis'] : null,
                  'gastritis_descripcion'=>  isset($data['txtgastritis']) ? $data['txtgastritis'] : null,
                  'gastritis_ano_dx'=>  isset($data['txtganio']) ? $data['txtganio'] : null,
                  'gastritis_tratamiento'=>  isset($data['txtgtratamientoactual']) ? $data['txtgtratamientoactual'] : null,
                  'erge'=>  isset($data['erge']) ? $data['erge'] : null,
                  'erge_descripcion'=>  isset($data['txterge']) ? $data['txterge'] : null,
                  'erge_ano_dx'=>  isset($data['txtergeanio']) ? $data['txtergeanio'] : null,
                  'erge_tratamiento_actual'=>  isset($data['txtergetratamientoactual']) ? $data['txtergetratamientoactual'] : null,
                  'urolitiasis'=>  isset($data['urolitiasis']) ? $data['urolitiasis'] : null,
                  'urolitiasis_ano_dx'=>  isset($data['txturolitiasisanio']) ? $data['txturolitiasisanio'] : null,
                  'urolitiasis_tratamiento_actual'=>  isset($data['txturolitiasisaniotratamientoactual']) ? $data['txturolitiasisaniotratamientoactual'] : null,
                  'hernia_inguinal'=>  isset($data['herniainguinal']) ? $data['herniainguinal'] : null,
                  'hernia_inguinal_lado'=>  isset($data['cboherniainguinal']) ? $data['cboherniainguinal'] : null,
                  'hernial_inguinal_ano_dx'=>  isset($data['txtherniainguinal']) ? $data['txtherniainguinal'] : null,
                  'hernia_umbilical'=>  isset($data['herniaumbilical']) ? $data['herniaumbilical'] : null,
                  'hernia_umbilical_ano_dx'=>  isset($data['txtherniaumbilical']) ? $data['txtherniaumbilical'] : null,
                  'lumbalgia'=>  isset($data['lumbalgia']) ? $data['lumbalgia'] : null,
                  'lumbalgia_lado'=>  isset($data['cbolumbalgia']) ? $data['cbolumbalgia'] : null,
                  'lumbalgia_ano_dx'=>  isset($data['txtlumbalgiaanio']) ? $data['txtlumbalgiaanio'] : null,
                  'lumbalgia_frecuencia_actual'=>  isset($data['txtlumbalgiafrecuenciaanual']) ? $data['txtlumbalgiafrecuenciaanual'] : null,
                  'otros_transtornos_columna'=>  isset($data['otrostranstornoscolumna']) ? $data['otrostranstornoscolumna'] : null,
                  'otros_transtornos_columna_descripcion'=>  isset($data['txtotrostranstornoscolumna']) ? $data['txtotrostranstornoscolumna'] : null,
                  'desordenes_piel'=>  isset($data['desordenespiel']) ? $data['desordenespiel'] : null,
                  'desordenes_piel_descripcion'=>  isset($data['txtdesordenespiel']) ? $data['txtdesordenespiel'] : null,
                  'varices_miembros_inferior'=>  isset($data['varicesmienbrosinferiores']) ? $data['varicesmienbrosinferiores'] : null,
                  'varices_miembros_inferior_descripcion'=>  isset($data['txtvaricesmienbrosinferiores']) ? $data['txtvaricesmienbrosinferiores'] : null,
                  'its'=>  isset($data['its']) ? $data['its'] : null,
                  'its_descripcion'=>  isset($data['txtits']) ? $data['txtits'] : null,
                  'its_ano_dx'=>  isset($data['txtitsanio']) ? $data['txtitsanio'] : null,
                  'its_tratamiento_actual'=>  isset($data['txtitstratamientoactual']) ? $data['txtitstratamientoactual'] : null,
                  'otros_sintomas'=>  isset($data['otros_sintomas']) ? $data['otros_sintomas'] : null,
                  'otros_sintomas_descripcion'=>  isset($data['txtotrosdescripcion']) ? $data['txtotrosdescripcion'] : null,
                  'sintomatologia_6_meses'=>  isset($data['sintomatologiaultimosmeses']) ? $data['sintomatologiaultimosmeses'] : null,
                  'fecha_registro'=>   Carbon::now(),
                  'paciente_id'=>  $data['paciente_id'],
                  'estado'=>true
                ]);


        return response()->json(['mensaje'=>"Registro Exitoso"]);

      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AntecendeDosPersonal  $antecendeDosPersonal
     * @return \Illuminate\Http\Response
     */
    public function show(AntecendeDosPersonal $antecendeDosPersonal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AntecendeDosPersonal  $antecendeDosPersonal
     * @return \Illuminate\Http\Response
     */
    public function edit(AntecendeDosPersonal $antecendeDosPersonal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AntecendeDosPersonal  $antecendeDosPersonal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      if(request()->ajax())
      {
        $antecedentedosPersonal=AntecendeDosPersonal::find($request['antecedentesdos_id']);

        $data=request()->validate(
            [
              'paciente_id'=>'required',
              'tuberculosis'=>'nullable',
              'txttuberculosis'=>'required_if:tuberculosis,==,1',
              'cbotuberculosis'=>'required_if:tuberculosis,==,1',
              'hepatitis'=>'nullable',
              'txthepatitis'=>'required_if:hepatitis,==,1',
              'cbohepatitis'=>'required_if:hepatitis,==,1',
              'tifoidea'=>'nullable',
              'txttifoidea'=>'required_if:tifoidea,==,1',
              'brucelosis'=>'nullable',
              'txtbrucelosis'=>'required_if:brucelosis,==,1',
              'ulcerahepatica'=>'nullable',
              'convulsiones'=>'nullable',
              'txtconvulsiones'=>'required_if:convulsiones,==,1',
              'txtanio'=>'required_if:convulsiones,==,1',
              'txtctratamientoactual'=>'required_if:convulsiones,==,1',
              'gastritis'=>'nullable',
              'txtgastritis'=>'required_if:gastritis,==,1',
              'txtganio'=>'required_if:gastritis,==,1',
              'txtgtratamientoactual'=>'required_if:gastritis,==,1',
              'erge'=>'nullable',
              'txterge'=>'required_if:erge,==,1',
              'txtergeanio'=>'required_if:erge,==,1',
              'txtergetratamientoactual'=>'required_if:erge,==,1',
              'urolitiasis'=>'nullable',
              'txturolitiasisanio'=>'required_if:urolitiasis,==,1',
              'txturolitiasisaniotratamientoactual'=>'required_if:urolitiasis,==,1',
              'herniainguinal'=>'nullable',
              'cboherniainguinal'=>'required_if:herniainguinal,==,1',
              'txtherniainguinal'=>'required_if:herniainguinal,==,1',
              'herniaumbilical'=>'nullable',
              'txtherniaumbilical'=>'required_if:herniaumbilical,==,1',
              'lumbalgia'=>'nullable',
              'cbolumbalgia'=>'required_if:lumbalgia,==,1',
              'txtlumbalgiaanio'=>'required_if:lumbalgia,==,1',
              'txtlumbalgiafrecuenciaanual'=>'required_if:lumbalgia,==,1',
              'otrostranstornoscolumna'=>'nullable',
              'txtotrostranstornoscolumna'=>'required_if:otrostranstornoscolumna,==,1',
              'desordenespiel'=>'nullable',
              'txtdesordenespiel'=>'required_if:desordenespiel,==,1',
              'varicesmienbrosinferiores'=>'nullable',
              'txtvaricesmienbrosinferiores'=>'required_if:varicesmienbrosinferiores,==,1',
              'its'=>'nullable',
              'txtits'=>'required_if:its,==,1',
              'txtitsanio'=>'required_if:its,==,1',
              'txtitstratamientoactual'=>'required_if:its,==,1',
              'otros_sintomas'=>'nullable',
              'txtotrosdescripcion'=>'required_if:otros_sintomas,==,1',
              'sintomatologiaultimosmeses'=>'nullable'
            ]
            );

              $antecedentedosPersonal->update([
                'tuberculosis'=>  isset($data['tuberculosis']) ? $data['tuberculosis'] : null,
                'tuberculosis_anio_dx'=>  isset($data['txttuberculosis']) ? $data['txttuberculosis'] : null,
                'tuberculosis_meses_tratamiento'=>  isset($data['cbotuberculosis']) ? $data['cbotuberculosis'] : null,
                'hepatitis'=>  isset($data['hepatitis']) ? $data['hepatitis'] : null,
                'hepatitis_descripcion'=>  isset($data['cbohepatitis']) ? $data['cbohepatitis'] : null,
                'hepatitis_edad'=>  isset($data['txthepatitis']) ? $data['txthepatitis'] : null,
                'tifoidea'=>  isset($data['tifoidea']) ? $data['tifoidea'] : null,
                'tifoidea_ano_dx'=>  isset($data['txttifoidea']) ? $data['txttifoidea'] : null,
                'brucelosis'=>  isset($data['brucelosis']) ? $data['brucelosis'] : null,
                'brucelosis_anio_dx'=>  isset($data['txtbrucelosis']) ? $data['txtbrucelosis'] : null,
                'ulcera_hepatica'=>  isset($data['ulcerahepatica']) ? $data['ulcerahepatica'] : null,
                'convulsiones'=>  isset($data['convulsiones']) ? $data['convulsiones'] : null,
                'convulsiones_descripcion'=>  isset($data['txtconvulsiones']) ? $data['txtconvulsiones'] : null,
                'convulsiones_ano_dx'=>  isset($data['txtanio']) ? $data['txtanio'] : null,
                'convulsiones_tratamiento_actual'=>  isset($data['txtctratamientoactual']) ? $data['txtctratamientoactual'] : null,
                'gastritis'=>  isset($data['gastritis']) ? $data['gastritis'] : null,
                'gastritis_descripcion'=>  isset($data['txtgastritis']) ? $data['txtgastritis'] : null,
                'gastritis_ano_dx'=>  isset($data['txtganio']) ? $data['txtganio'] : null,
                'gastritis_tratamiento'=>  isset($data['txtgtratamientoactual']) ? $data['txtgtratamientoactual'] : null,
                'erge'=>  isset($data['erge']) ? $data['erge'] : null,
                'erge_descripcion'=>  isset($data['txterge']) ? $data['txterge'] : null,
                'erge_ano_dx'=>  isset($data['txtergeanio']) ? $data['txtergeanio'] : null,
                'erge_tratamiento_actual'=>  isset($data['txtergetratamientoactual']) ? $data['txtergetratamientoactual'] : null,
                'urolitiasis'=>  isset($data['urolitiasis']) ? $data['urolitiasis'] : null,
                'urolitiasis_ano_dx'=>  isset($data['txturolitiasisanio']) ? $data['txturolitiasisanio'] : null,
                'urolitiasis_tratamiento_actual'=>  isset($data['txturolitiasisaniotratamientoactual']) ? $data['txturolitiasisaniotratamientoactual'] : null,
                'hernia_inguinal'=>  isset($data['herniainguinal']) ? $data['herniainguinal'] : null,
                'hernia_inguinal_lado'=>  isset($data['cboherniainguinal']) ? $data['cboherniainguinal'] : null,
                'hernial_inguinal_ano_dx'=>  isset($data['txtherniainguinal']) ? $data['txtherniainguinal'] : null,
                'hernia_umbilical'=>  isset($data['herniaumbilical']) ? $data['herniaumbilical'] : null,
                'hernia_umbilical_ano_dx'=>  isset($data['txtherniaumbilical']) ? $data['txtherniaumbilical'] : null,
                'lumbalgia'=>  isset($data['lumbalgia']) ? $data['lumbalgia'] : null,
                'lumbalgia_lado'=>  isset($data['cbolumbalgia']) ? $data['cbolumbalgia'] : null,
                'lumbalgia_ano_dx'=>  isset($data['txtlumbalgiaanio']) ? $data['txtlumbalgiaanio'] : null,
                'lumbalgia_frecuencia_actual'=>  isset($data['txtlumbalgiafrecuenciaanual']) ? $data['txtlumbalgiafrecuenciaanual'] : null,
                'otros_transtornos_columna'=>  isset($data['otrostranstornoscolumna']) ? $data['otrostranstornoscolumna'] : null,
                'otros_transtornos_columna_descripcion'=>  isset($data['txtotrostranstornoscolumna']) ? $data['txtotrostranstornoscolumna'] : null,
                'desordenes_piel'=>  isset($data['desordenespiel']) ? $data['desordenespiel'] : null,
                'desordenes_piel_descripcion'=>  isset($data['txtdesordenespiel']) ? $data['txtdesordenespiel'] : null,
                'varices_miembros_inferior'=>  isset($data['varicesmienbrosinferiores']) ? $data['varicesmienbrosinferiores'] : null,
                'varices_miembros_inferior_descripcion'=>  isset($data['txtvaricesmienbrosinferiores']) ? $data['txtvaricesmienbrosinferiores'] : null,
                'its'=>  isset($data['its']) ? $data['its'] : null,
                'its_descripcion'=>  isset($data['txtits']) ? $data['txtits'] : null,
                'its_ano_dx'=>  isset($data['txtitsanio']) ? $data['txtitsanio'] : null,
                'its_tratamiento_actual'=>  isset($data['txtitstratamientoactual']) ? $data['txtitstratamientoactual'] : null,
                'otros_sintomas'=>  isset($data['otros_sintomas']) ? $data['otros_sintomas'] : null,
                'otros_sintomas_descripcion'=>  isset($data['txtotrosdescripcion']) ? $data['txtotrosdescripcion'] : null,
                'sintomatologia_6_meses'=>  isset($data['sintomatologiaultimosmeses']) ? $data['sintomatologiaultimosmeses'] : null,
                'fecha_registro'=>   Carbon::now(),
                'paciente_id'=>  $data['paciente_id'],
                'estado'=>true

              ]);
              $antecedentedosPersonal->save();

                    //return response()->json(["mensaje"=>$data['otros_sintomas']." ".$data['cbolumbalgia']]);
                    return response()->json(["mensaje"=>"Registro Actualizado"]);
      }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AntecendeDosPersonal  $antecendeDosPersonal
     * @return \Illuminate\Http\Response
     */
    public function destroy(AntecendeDosPersonal $antecendeDosPersonal)
    {
        //
    }
}
