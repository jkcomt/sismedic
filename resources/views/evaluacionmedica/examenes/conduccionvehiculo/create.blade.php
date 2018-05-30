<style media="screen">
#mdlconduccionvehiculos{
width: 90% !important;
}
</style>
<div class="modal fade" tabindex="-1" role="dialog" id="modal-conduccionvehicular">
    <div class="modal-dialog" id="mdlconduccionvehiculos" role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form id="conduccion_vehicularesq">
            <div class="modal-body ">
                {{csrf_field()}}


                @isset($cita->conduccionvehiculo->id)
                   <input type="hidden" name="conduccion_vehicular_id" value="{{$cita->conduccionvehiculo->id}}">
               @endisset
               <input type="hidden" name="lista_examen_id" value="{{$listaExamen->id}}">
               <input type="hidden" name="cita_id" value="{{$cita->id}}">

                <div class="row">



                  <div class="col-md-12">
                    <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#home">Antecedentes</a></li>
                      <li><a data-toggle="tab" href="#menu1">Examen Fisico - Conclusión</a></li>
                    </ul>

                    <div class="tab-content">
                      <div id="home" class="tab-pane fade in active">
                      <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-4">
                              <label class="radio-inline"><input type="radio" name="estado_evaluacion" value="primera_evaluacion" @isset($cita->conduccionvehiculo->estado_evaluacion) @if($cita->conduccionvehiculo->estado_evaluacion=='primera_evaluacion') checked @endif @endisset>Primera Evaluacion</label>
                              <label class="radio-inline"><input type="radio" name="estado_evaluacion" value="revalidacion" @isset($cita->conduccionvehiculo->estado_evaluacion) @if($cita->conduccionvehiculo->estado_evaluacion=='revalidacion') checked @endif @endisset>Revalidación</label>
                            </div>
                            <div class="col-md-8">
                            </div>
                        </div>
                        <div class="col-md-12">
                          <table class="table">
                            <thead>
                              <tr>
                                <th colspan="4" class="text-left"><strong> Anamnesis - Evaluacion de capacidades funcionales a travez de entrevista</strong></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>
                                    Todas las enfermedades que produzcan alteración de la consciencia sin importar su causa e independientemente de su tratamiento
                                </td>
                                <td>
                                  <input type="checkbox" name="anamnesis_evaluacion_capacidades1" value="1" @isset($cita->conduccionvehiculo->anamnesis_evaluacion_capacidades1)   @if($cita->conduccionvehiculo->anamnesis_evaluacion_capacidades1=='1') checked @endif @endisset>
                                </td>
                                <td>

                                </td>
                                <td>
                                  Personas que consumen sustancias estupefacientes o psicotrópicas en niveles que alteren su  capacidad o trabajar como controlar un vehículo
                                </td>
                                <td>
                                    <input type="checkbox" name="anamnesis_evaluacion_capacidades2" value="1" @isset($cita->conduccionvehiculo->anamnesis_evaluacion_capacidades2)  @if($cita->conduccionvehiculo->anamnesis_evaluacion_capacidades2=='1') checked @endif @endisset >
                                </td>
                              </tr>
                              <tr>
                                <td>
                                              Alcoholismo crónico y en general  todas aquellas enfermedades que produzcan incapacidad de efectuar movimientos voluntarios y/o que limiten la capacidad de trabajo como conduccion, maneja o control fisico de un vehículo motorizado,subir y bajar escaleras, etc
                                </td>
                                <td>
                                  <input type="checkbox" name="anamnesis_evaluacion_capacidades3" value="1" @isset($cita->conduccionvehiculo->anamnesis_evaluacion_capacidades3)  @if($cita->conduccionvehiculo->anamnesis_evaluacion_capacidades3=='1') checked @endif  @endisset >
                                </td>
                                <td>

                                </td>
                                <td>
                                  Personas que consumen sustancias estupefacientes o psicotrópicas en niveles que no alteren su capacidad de rabajar, pero  que se encuentran sin tratamiento o en tratamiento sin prescripcion médica
                                </td>
                                <td>
                                    <input type="checkbox" name="anamnesis_evaluacion_capacidades4" value="1" @isset($cita->conduccionvehiculo->anamnesis_evaluacion_capacidades4)   @if($cita->conduccionvehiculo->anamnesis_evaluacion_capacidades4=='1') checked @endif  @endisset>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  Todas aquellas enfermedades que se caractericen por movimientos involuntarios y que  interfieran seriamente su capacidad de trabajar, independientemente de su tratamiento farmalogico
                                </td>
                                <td>
                                  <input type="checkbox" name="anamnesis_evaluacion_capacidades5" value="1" @isset($cita->conduccionvehiculo->anamnesis_evaluacion_capacidades5)  @if($cita->conduccionvehiculo->anamnesis_evaluacion_capacidades5=='1') checked @endif @endisset>
                                </td>
                                <td>

                                </td>
                                <td>
                                  Personas que como consecuencia de una enfermedad o su tratamiento sufran uno o varios de los siguientes efectos: alteracion del estado de consciencia, alteracion del equilibrio, en la percepción, en la habilidad motriz, en la estabilidad emocional y en el juicio
                                  </p>
                                </td>
                                <td>
                                    <input type="checkbox" name="anamnesis_evaluacion_capacidades6" value="1" @isset($cita->conduccionvehiculo->anamnesis_evaluacion_capacidades6)  @if($cita->conduccionvehiculo->anamnesis_evaluacion_capacidades6=='1') checked @endif  @endisset >
                                </td>
                              </tr>
                              <tr>
                                <td>
                                    Perdida recurrente de la consciencia, independiente de su tratamiento, tales como narcolepsia, epilepsia, etc
                                </td>
                                <td>
                                  <input type="checkbox" name="anamnesis_evaluacion_capacidades7" value="1" @isset($cita->conduccionvehiculo->anamnesis_evaluacion_capacidades7)  @if($cita->conduccionvehiculo->anamnesis_evaluacion_capacidades7=='1') checked @endif  @endisset >
                                </td>
                                <td>

                                </td>
                                <td>
                                  Síndrome apnea obstructiva del sueño sospecha o confirmada(Ficha SAS)
                                </td>
                                <td>
                                    <input type="checkbox" name="anamnesis_evaluacion_capacidades8" value="1" @isset($cita->conduccionvehiculo->anamnesis_evaluacion_capacidades8)   @if($cita->conduccionvehiculo->anamnesis_evaluacion_capacidades8=='1') checked @endif  @endisset  >
                                </td>
                              </tr>
                              <tr>
                                <td>
                                    Anemia de cualquier grado, según criterios OMS 2011
                                </td>
                                <td>
                                  <input type="checkbox" name="anamnesis_evaluacion_capacidades9" value="1" @isset($cita->conduccionvehiculo->anamnesis_evaluacion_capacidades9)  @if($cita->conduccionvehiculo->anamnesis_evaluacion_capacidades9=='1') checked @endif  @endisset>
                                </td>
                                <td>

                                </td>
                                <td>
                                  Obesidad (IMC > o igual a 30)
                                </td>
                                <td>
                                    <input type="checkbox"  name="anamnesis_evaluacion_capacidades10" value="1" @isset($cita->conduccionvehiculo->anamnesis_evaluacion_capacidades10)   @if($cita->conduccionvehiculo->anamnesis_evaluacion_capacidades10=='1') checked @endif  @endisset>
                                </td>
                              </tr>
                            </tbody>
                          </table>

                        </div>

                        <div class="col-md-12">
                            <div class="col-md-12">
                                    <label for="">Exploracion Fisicar - Evaluacion de Capacidades Funcionales a traves del examen clinico</label>
                            </div>

                            <div class="form-horizontal">
                                <div class="col-md-2 form-group">
                                     <label for="inputEmail3" class="col-sm-2 control-label">FC:</label>
                                     <div class="col-sm-8">
                                       <input type="text" class="form-control" name="exploracion_fisica_fc" @isset($cita->conduccionvehiculo->exploracion_fisica_fc)  value="{{$cita->conduccionvehiculo->exploracion_fisica_fc}}" @endisset >
                                     </div>
                                  </div>
                                  <div class="col-md-2 form-group">
                                       <label for="inputEmail3" class="col-sm-2 control-label">FR:</label>
                                       <div class="col-sm-8">
                                         <input type="text" class="form-control"  name="exploracion_fisica_fr" @isset($cita->conduccionvehiculo->exploracion_fisica_fr)  value="{{$cita->conduccionvehiculo->exploracion_fisica_fr}}" @endisset >
                                       </div>
                                    </div>
                                    <div class="col-md-2 form-group">
                                         <label for="inputEmail3" class="col-sm-2 control-label">PA:</label>
                                         <div class="col-sm-8">
                                           <input type="text" class="form-control" name="exploracion_fisica_pa" @isset($cita->conduccionvehiculo->exploracion_fisica_pa)  value="{{$cita->conduccionvehiculo->exploracion_fisica_pa}}" @endisset>
                                         </div>
                                      </div>
                                      <div class="col-md-2 form-group">
                                           <label for="inputEmail3" class="col-sm-4 control-label">Talla:</label>
                                           <div class="col-sm-8">
                                             <input type="text" class="form-control" name="exploracion_fisica_talla" @isset($cita->conduccionvehiculo->exploracion_fisica_talla)  value="{{$cita->conduccionvehiculo->exploracion_fisica_talla}}" @endisset >
                                       </div>
                                    </div>
                                    <div class="col-md-2 form-group">
                                         <label for="inputEmail3" class="col-sm-4 control-label">Peso</label>
                                         <div class="col-sm-8">
                                           <input type="text" class="form-control" name="exploracion_fisica_peso" @isset($cita->conduccionvehiculo->anamnesis_exploracion_fisica_peso)  value="{{$cita->conduccionvehiculo->exploracion_fisica_peso}}" @endisset>
                                         </div>
                                      </div>
                                    <div class="col-md-2 form-group">
                                         <label for="inputEmail3" class="col-sm-2 control-label">IMC:</label>
                                         <div class="col-sm-8">
                                           <input type="text" class="form-control" name="exploracion_fisica_imc" @isset($cita->conduccionvehiculo->exploracion_fisica_imc)  value="{{$cita->conduccionvehiculo->exploracion_fisica_imc}}" @endisset>
                                         </div>
                                      </div>
                            </div>
                            <div class="col-md-12  form-horizontal">
                                <div class="col-md-4 form-group">
                                     <label for="inputEmail3" class="col-sm-6 control-label">Perímetro del cuello:</label>
                                     <div class="col-sm-6">
                                       <input type="text" class="form-control" name="exploracion_fisica_perimetro_cuello" @isset($cita->conduccionvehiculo->exploracion_fisica_perimetro_cuello)  value="{{$cita->conduccionvehiculo->exploracion_fisica_perimetro_cuello}}" @endisset>
                                     </div>
                                  </div>

                                  <div class="col-md-4 form-group">
                                       <label for="inputEmail3" class="col-sm-6 control-label">Perímetro de cintura:</label>
                                       <div class="col-sm-6">
                                         <input type="text" class="form-control" name="exploracion_fisica_perimetro_cintura" @isset($cita->conduccionvehiculo->exploracion_fisica_perimetro_cintura)  value="{{$cita->conduccionvehiculo->exploracion_fisica_perimetro_cintura}}" @endisset>
                                       </div>
                                    </div>

                                    <div class="col-md-4 form-group">
                                         <label for="inputEmail3" class="col-sm-6 control-label">Perímetro de cadera:</label>
                                         <div class="col-md-4">
                                           <div class="input-group">
                                                 <input type="text" class="form-control" name="exploracion_fisica_perimetro_cadera" @isset($cita->conduccionvehiculo->exploracion_fisica_perimetro_cadera)  value="{{$cita->conduccionvehiculo->exploracion_fisica_perimetro_cadera}}" @endisset >
                                             </div>
                                         </div>
                                         <div class="col-sm-2">
                                           <button type="button" class="btn  btn-sm btn-primary" name="button">F</button>
                                         </div>
                                      </div>
                            </div>
                            <div class="col-md-12  form-horizontal">
                                <div class="col-md-4 form-group">
                                     <label for="inputEmail3" class="col-sm-6 control-label">ICC:</label>
                                     <div class="col-sm-6">
                                       <input type="text" class="form-control" name="exploracion_fisica_icc" @isset($cita->conduccionvehiculo->exploracion_fisica_icc)  value="{{$cita->conduccionvehiculo->exploracion_fisica_icc}}" @endisset >
                                     </div>
                                  </div>

                                  <div class="col-md-4 form-group">
                                       <label for="inputEmail3" class="col-sm-6 control-label">P Toraxico Inspiracion:</label>
                                       <div class="col-sm-6">
                                         <input type="text" class="form-control" name="exploracion_fisica_perimetro_toraxico_inspiracion" @isset($cita->conduccionvehiculo->exploracion_fisica_perimetro_toraxico_inspiracion)  value="{{$cita->conduccionvehiculo->exploracion_fisica_perimetro_toraxico_inspiracion}}" @endisset >
                                       </div>
                                    </div>

                                    <div class="col-md-4 form-group">
                                         <label for="inputEmail3" class="col-sm-6 control-label">P Toraxico Espiracion:</label>
                                         <div class="col-md-6">
                                           <div class="input-group">
                                                 <input type="text" class="form-control" name="exploracion_fisica_perimetro_toraxico_espiracion" @isset($cita->conduccionvehiculo->exploracion_fisica_perimetro_toraxico_espiracion)  value="{{$cita->conduccionvehiculo->exploracion_fisica_perimetro_toraxico_espiracion}}" @endisset >
                                             </div>
                                         </div>
                                      </div>
                            </div>

                            <div class="col-md-12">
                              <table class="table">
                                <thead>
                                  <tr>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>
                                        Limitación en fuerza y/o movilidad de extremidades (Mayor a 2kg/ fuerza cada mano)
                                    </td>
                                    <td>
                                      <input type="checkbox" name="exploracion_fisica_capacidades1" value="1" @isset($cita->conduccionvehiculo->exploracion_fisica_capacidades1)   @if($cita->conduccionvehiculo->exploracion_fisica_capacidades1=='1') checked @endif  @endisset >
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                      presencia de nistagmus
                                    </td>
                                    <td>
                                        <input type="checkbox" name="exploracion_fisica_capacidades2" value="1" @isset($cita->conduccionvehiculo->exploracion_fisica_capacidades2)   @if($cita->conduccionvehiculo->exploracion_fisica_capacidades2=='1') checked @endif @endisset>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Alteración presente del equilibrio(Romberg)
                                    </td>
                                    <td>
                                      <input type="checkbox" name="exploracion_fisica_capacidades3" value="1" @isset($cita->conduccionvehiculo->exploracion_fisica_capacidades3)   @if($cita->conduccionvehiculo->exploracion_fisica_capacidades3=='1') checked @endif @endisset>
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                      Anormalidad en movimientos oculares
                                    </td>
                                    <td>
                                        <input type="checkbox" name="exploracion_fisica_capacidades4" value="1" @isset($cita->conduccionvehiculo->exploracion_fisica_capacidades4)  @if($cita->conduccionvehiculo->exploracion_fisica_capacidades4=='1') checked @endif @endisset >
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Anormalidad en marcha con ojos cerrados
                                    </td>
                                    <td>
                                      <input type="checkbox" name="exploracion_fisica_capacidades5" value="1" @isset($cita->conduccionvehiculo->exploracion_fisica_capacidades5)  @if($cita->conduccionvehiculo->exploracion_fisica_capacidades5=='1') checked @endif @endisset>
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                      pupilas no CIRLA
                                    </td>
                                    <td>
                                        <input type="checkbox" name="exploracion_fisica_capacidades6" value="1" @isset($cita->conduccionvehiculo->exploracion_fisica_capacidades6)  @if($cita->conduccionvehiculo->exploracion_fisica_capacidades6=='1') checked @endif  @endisset>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Alteración de la coordinacion presente(dedo Indice Nariz)
                                    </td>
                                    <td>
                                      <input type="checkbox" name="exploracion_fisica_capacidades7" value="1" @isset($cita->conduccionvehiculo->exploracion_fisica_capacidades7)  @if($cita->conduccionvehiculo->exploracion_fisica_capacidades7=='1') checked @endif @endisset >
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                      Anormalidad del Lenguaje
                                    </td>
                                    <td>
                                        <input type="checkbox" name="exploracion_fisica_capacidades8" value="1" @isset($cita->conduccionvehiculo->exploracion_fisica_capacidades8)  @if($cita->conduccionvehiculo->exploracion_fisica_capacidades8=='1') checked @endif  @endisset>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                        Asimetria Facial
                                    </td>
                                    <td>
                                      <input type="checkbox" name="exploracion_fisica_capacidades9" value="1" @isset($cita->conduccionvehiculo->exploracion_fisica_capacidades9)  @if($cita->conduccionvehiculo->exploracion_fisica_capacidades9=='1') checked @endif @endisset>
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                      Movimientos involuntarios
                                    </td>
                                    <td>
                                        <input type="checkbox" name="exploracion_fisica_capacidades10" value="1" @isset($cita->conduccionvehiculo->exploracion_fisica_capacidades10)  @if($cita->conduccionvehiculo->exploracion_fisica_capacidades10=='1') checked @endif @endisset>
                                    </td>
                                  </tr>

                                </tbody>
                              </table>

                            </div>
                            <div class="col-md-12">
                                <div class="col-md-2 text-right">
                                    <label for="">Detalle Información</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="exploracion_fisica_perimetro_detalle" @isset($cita->conduccionvehiculo->exploracion_fisica_perimetro_detalle)  value="{{$cita->conduccionvehiculo->exploracion_fisica_perimetro_detalle}}" @endisset>
                                </div>
                            </div>
                        </div>
                      </div>
                      </div>
                      <div id="menu1" class="tab-pane fade">
                              <div class="row">
                                <div class="col-md-12">
                                  <table class="table">
                                    <thead>
                                      <tr>
                                        <th colspan="2">Pruebas Auxiliares- Evaluacion de Capacidades Funcionales a travez de pruebas adicionales</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>
                                            Hipoacusia con compromiso de frecuencias conversacionales con promedio mayor a 40 db uni o bilateral incluso con audifonos
                                        </td>
                                        <td>
                                          <input type="checkbox" name="prueba_auxiliar_capacidades1" value="1" @isset($cita->conduccionvehiculo->prueba_auxiliar_capacidades1)  @if($cita->conduccionvehiculo->prueba_auxiliar_capacidades1=='1') checked @endif @endisset >
                                        </td>
                                        <td>

                                        </td>
                                        <td>
                                          No Reconocimiento de colores Rojo,Azul y verde
                                        </td>
                                        <td>
                                            <input type="checkbox" name="prueba_auxiliar_capacidades2" value="1" @isset($cita->conduccionvehiculo->prueba_auxiliar_capacidades2)    @if($cita->conduccionvehiculo->prueba_auxiliar_capacidades2=='1') checked @endif  @endisset >
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          Alteración de la agudeza visual(de lejos diferente a 20/30 en carda ojo) y/o de la vision en profundidad incluso con lentes correctores
                                        </td>
                                        <td>
                                          <input type="checkbox" name="prueba_auxiliar_capacidades3" value="1" @isset($cita->conduccionvehiculo->prueba_auxiliar_capacidades3)    @if($cita->conduccionvehiculo->prueba_auxiliar_capacidades3=='1') checked @endif  @endisset >
                                        </td>
                                        <td>

                                        </td>
                                        <td>
                                          Prueba de visión de profundidad alterada
                                        </td>
                                        <td>
                                            <input type="checkbox" name="prueba_auxiliar_capacidades4" value="1" @isset($cita->conduccionvehiculo->prueba_auxiliar_capacidades4)    @if($cita->conduccionvehiculo->prueba_auxiliar_capacidades4=='1') checked @endif  @endisset >
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          Campintería Anormal(Test de confrontacion alterada)
                                        </td>
                                        <td>
                                          <input type="checkbox" name="prueba_auxiliar_capacidades5" value="1" @isset($cita->conduccionvehiculo->prueba_auxiliar_capacidades5)   @if($cita->conduccionvehiculo->prueba_auxiliar_capacidades5=='1') checked @endif  @endisset >
                                        </td>
                                        <td>

                                        </td>
                                        <td>
                                          Alguno de los parametros de la evaluacion psicosensometrica alterada:test de palanca, punteo o reactimetria o su equivalente clinico
                                        </td>
                                        <td>
                                            <input type="checkbox" name="prueba_auxiliar_capacidades6" value="1" @isset($cita->conduccionvehiculo->prueba_auxiliar_capacidades6)  @if($cita->conduccionvehiculo->prueba_auxiliar_capacidades6=='1') checked @endif @endisset>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>

                                </div>
                              </div>

                              <div class="row">
                                  <div class="col-md-12">
                                      <label>Otros Datos de Relevancia</label>
                                  </div>
                                  <div class="col-md-12">
                                      <div class="form-horizontal">
                                        <div class="col-md-12 form-group">
                                             <label for="inputEmail3" class="col-sm-3 control-label text-left">Detalle las medicinas que esta tomando</label>
                                             <div class="col-sm-9">
                                               <input type="text" class="form-control" name="detalle_medicinas" @isset($cita->conduccionvehiculo->detalle_medicinas)  value="{{$cita->conduccionvehiculo->detalle_medicinas}}" @endisset>
                                             </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-12">
                                      <div class="form-horizontal">
                                        <div class="col-md-12 form-group">
                                             <label for="inputEmail3" class="col-sm-3 control-label text-left">Otro: </label>
                                             <div class="col-sm-9">
                                               <input type="text" class="form-control" name="otro" @isset($cita->conduccionvehiculo->otro)  value="{{$cita->conduccionvehiculo->otro}}" @endisset >
                                             </div>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                              <div class="row">
                                  <div class="col-md-12">
                                      <label>Conclusion de la Evaluacion Funcional</label>
                                  </div>
                                  <div class="col-md-12">
                                      <div class="form-horizontal">
                                        <div class=" form-group">
                                             <label for="inputEmail3" class="col-sm-1 control-label text-left">Desde</label>
                                             <div class="col-sm-2">
                                               <input type="date" class="form-control" name="evaluacion_funcional_desde" @isset($cita->conduccionvehiculo->evaluacion_funcional_desde)  value="{{$cita->conduccionvehiculo->evaluacion_funcional_desde}}" @endisset >
                                             </div>
                                             <div class="col-sm-1">
                                               <input type="text" class="form-control">
                                             </div>
                                             <label for="inputEmail3" class="col-sm-1 control-label text-left">Desde</label>
                                             <div class="col-sm-2">
                                               <input type="date" class="form-control" name="evaluacion_funcional_hasta" @isset($cita->conduccionvehiculo->evaluacion_funcional_hasta)  value="{{$cita->conduccionvehiculo->evaluacion_funcional_hasta}}" @endisset  >
                                             </div>
                                             <div class="col-sm-1">
                                                    <div class="checkbox">
                                                       <label>
                                                         <input type="checkbox" value="noapto" name="evaluacion_funcional_estado"  @isset($cita->conduccionvehiculo->evaluacion_funcional_estado)   @if($cita->conduccionvehiculo->evaluacion_funcional_estado=='noapto') checked @endif @endisset> No Apto
                                                       </label>
                                                     </div>
                                             </div>
                                             <div class="col-sm-1">
                                                 <div class="checkbox">
                                                    <label>
                                                      <input type="checkbox"  value="observado" name="evaluacion_funcional_estado" @isset($cita->conduccionvehiculo->evaluacion_funcional_estado)  @if($cita->conduccionvehiculo->evaluacion_funcional_estado=='observado') checked @endif @endisset> Observado
                                                    </label>
                                                  </div>
                                             </div>
                                             <div class="col-sm-2">
                                               <div class="checkbox">
                                                  <label>
                                                    <input type="checkbox"  value="aptoconrestriccion" name="evaluacion_funcional_estado" @isset($cita->conduccionvehiculo->evaluacion_funcional_estado)   @if($cita->conduccionvehiculo->evaluacion_funcional_estado=='aptoconrestriccion') checked @endif @endisset >Apto con Restriccion
                                                  </label>
                                                </div>
                                             </div>
                                             <div class="col-sm-1">
                                               <div class="checkbox">
                                                  <label>
                                                    <input type="checkbox"  value="apto" name="evaluacion_funcional_estado" @isset($cita->conduccionvehiculo->evaluacion_funcional_estado)   @if($cita->conduccionvehiculo->evaluacion_funcional_estado=='apto') checked @endif @endisset > Apto
                                                  </label>
                                                </div>
                                             </div>

                                          </div>
                                      </div>
                                  </div>

                              </div>
                              <div class="row">
                                  <div class="col-md-12">
                                    <label> comentarios</label>
                                  </div>
                                  <div class="col-md-12">
                                      <input type="text" class="form-control"  name="evaluacion_funcional_comentarios" @isset($cita->conduccionvehiculo->evaluacion_funcional_comentarios)  value="{{$cita->conduccionvehiculo->evaluacion_funcional_comentarios}}" @endisset  >
                                  </div>
                              </div>
                              <h5></h5>
                              <div class="row">
                                  <div class="col-md-12">
                                    <label> Observaciones y recomendaciones</label>
                                  </div>
                                  <div class="col-md-12">
                                      <input type="text" class="form-control" name="evaluacion_funcional_observaciones" @isset($cita->conduccionvehiculo->evaluacion_funcional_observaciones)  value="{{$cita->conduccionvehiculo->evaluacion_funcional_observaciones}}" @endisset  >
                                  </div>
                              </div>
                      </div>

                    </div>

                  </div>

                </div>


            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-right">


                      @isset($cita->conduccionvehiculo->id)
                       <button class="btn btn-sm btn-primary conduccionvehicular" tipo="conduccion_vehicular_modificar" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDITAR</button>
                       @else
                       <button class="btn btn-sm btn-success conduccionvehicular" tipo="conduccion_vehicular_guardar" type="button">GUARDAR</button>
                       @endisset
                        {{-- <a href="" class="btn btn-sm btn-success" data-dismiss="modal">GUARDAR</a>
                        <a href="" class="btn btn-sm btn-info" data-dismiss="modal">TERMINAR</a>

                        <a href="" class="btn btn-sm btn-warning" data-dismiss="modal">Volver</a> --}}
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
