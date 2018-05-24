<div class="modal fade" tabindex="-1" role="dialog" id="modal-trabajoaltura">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form id="suficiencia_trabajo_alturas">
            <div class="modal-body ">
                {{csrf_field()}}

                @isset($cita->sudicienciatrabajoaltura->id)
                   <input type="hidden" name="trabajo_altura_id" value="{{$cita->sudicienciatrabajoaltura->id}}">
               @endisset
               <input type="hidden" name="lista_examen_id" value="{{$listaExamen->id}}">
               <input type="hidden" name="cita_id" value="{{$cita->id}}">

                <div class="row form-horizontal">

                  <div class="col-md-12">
                    <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#home">2. Anamnesis</a></li>
                      <li><a data-toggle="tab" href="#menu1">3. Exploración Física</a></li>
                      <li><a data-toggle="tab" href="#menu2">4 y 5.Pruebas Auxiliares</a></li>
                      <li><a data-toggle="tab" href="#menu3">6. Conclusión de Evaluación Funcional</a></li>
                    </ul>

                    <div class="tab-content">
                      <div id="home" class="tab-pane fade in active">
                      <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-8">

                            </div>
                            <div class="col-md-4">
                              <label class="radio-inline"><input type="radio" value="primera_aptitud" @isset($cita->sudicienciatrabajoaltura->primera_aptitud) @if($cita->sudicienciatrabajoaltura->primera_aptitud)  checked @endif @endisset name="optradio"> Primera Aptitud</label>
                              <label class="radio-inline"><input type="radio" value="revalidacion" @isset($cita->sudicienciatrabajoaltura->revalidacion) @if($cita->sudicienciatrabajoaltura->revalidacion)  checked @endif @endisset name="optradio">Revalidación</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                          <table class="table">
                            <thead>
                              <tr>
                                <th colspan="4" class="text-left"><strong> Evalucacion de Capacidades Funcionales A Traves de La Entrevista</strong></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>
                                  <p>Todas  las enfermedades que produzcan alteración de la consciencia sin importar su causa e independientemente de su tratamiento</p>

                                </td>
                                <td>
                                  <input value="1" name="anamnesis_item1" type="checkbox"  @isset($cita->sudicienciatrabajoaltura->anamnesis_item1) checked  @endisset>

                                </td>
                                <td>

                                </td>
                                <td>
                                  <p>    Personas que consumen sustancias estupefacientes o psicotrópicas en niveles que alteren su capacidad o trabajar como controlar un vehículo
                                  </p>
                                </td>
                                <td>
                                    <input value="1" name="anamnesis_item2"  type="checkbox"  @isset($cita->sudicienciatrabajoaltura->anamnesis_item2) checked  @endisset>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <p>Alcoholismo crónico y en general todas aquellas enfermedades que produzcan incapacidad de efectuar movimientos voluntarios y/o que limiten la capacidad de trabajo como conducción, manejo o control fisico de un vehículo motorizado, subir y bajar escaleras, etc</p>
                                </td>
                                <td>
                                  <input value="1" name="anamnesis_item3"  type="checkbox"  @isset($cita->sudicienciatrabajoaltura->anamnesis_item3) checked  @endisset>
                                </td>
                                <td>

                                </td>
                                <td>
                                  <p>Personas que consumen sustancias estupefacientes o psicotrópicas en niveles que no alteren su capacidad de trabajar, pero que se encuentran sin tratamiento o en tratamiento sin prescripción médica.
                                  </p>
                                </td>
                                <td>
                                    <input value="1" name="anamnesis_item4" type="checkbox"  @isset($cita->sudicienciatrabajoaltura->anamnesis_item4) checked  @endisset>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  Todas Aquellas enfermedades que se caractericen por movimientos involuntarios y que interfieran seriamente su capacidad de trabajar, independiente de su tratamiento farmacológico
                                </td>
                                <td>
                                  <input value="1" name="anamnesis_item5" type="checkbox"  @isset($cita->sudicienciatrabajoaltura->anamnesis_item5) checked  @endisset>
                                </td>
                                <td>

                                </td>
                                <td>
                                  Personas que como consecuencia de una enfermedad o su tratamiento, sufran uno o varios de los siguientes efectos: alteración del estado de consiencia, alteracion del equilibrio, en la percepcion, en la habilidad motriz, en la estabilidad emocional y en el juicio.
                                </td>
                                <td>
                                    <input value="1" name="anamnesis_item6" type="checkbox"  @isset($cita->sudicienciatrabajoaltura->anamnesis_item6) checked  @endisset>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <p>Perdida recurrente de la consciencia, independientemente de su tratamiento, tales como narcolepsia, epilepsia, etc.</p>
                                </td>
                                <td>
                                  <input value="1" name="anamnesis_item7" type="checkbox"  @isset($cita->sudicienciatrabajoaltura->anamnesis_item7) checked  @endisset>
                                </td>
                                <td>

                                </td>
                                <td>
                                  <p>Sindrome Apnea Obstructiva del sueño sospecha o confirmada (Ficha SAS)
                                  </p>
                                </td>
                                <td>
                                    <input value="1" name="anamnesis_item8" type="checkbox"  @isset($cita->sudicienciatrabajoaltura->anamnesis_item8) checked  @endisset>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <p>Anemia de cualquier grado, según criterios OMS 2011</p>
                                </td>
                                <td>
                                  <input value="1" name="anamnesis_item9" type="checkbox"  @isset($cita->sudicienciatrabajoaltura->anamnesis_item9) checked  @endisset>
                                </td>
                                <td>

                                </td>
                                <td>
                                  <p> Obesidad(IMC>o igual a 30)
                                  </p>
                                </td>
                                <td>
                                    <input value="1" name="anamnesis_item10" type="checkbox"  @isset($cita->sudicienciatrabajoaltura->anamnesis_item10) checked  @endisset>
                                </td>
                              </tr>
                              <tr>
                                <td colspan="5">
                                  <input type="text" name="anamnesis_comentarios"  @isset($cita->sudicienciatrabajoaltura->anamnesis_comentarios) value="{{$cita->sudicienciatrabajoaltura->anamnesis_comentarios}}"  @endisset class="form-control" placeholder="Comentarios/Detalles">
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      </div>

                      <div id="menu1" class="tab-pane fade">
                                                <div class="row">
                                                          <div class="col-md-12">
                                                             <h5><strong>Evalucacion de Capacidades Funcionales A Traves del Examen Clinico</strong></h5>
                                                          </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-4 form-horizontal">
                                                            <div class="form-group">
                                                              <label class="col-sm-4 control-label">FC x min</label>
                                                              <div class="col-sm-6">
                                                                 <input type="text" name="exploracion_fisica_fc"  @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_fc) value="{{$cita->sudicienciatrabajoaltura->exploracion_fisica_fc}}"  @endisset class="form-control" >
                                                              </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4 form-horizontal">
                                                            <div class="form-group">
                                                              <label class="col-sm-4 control-label">FR x min</label>
                                                              <div class="col-sm-6">
                                                                 <input type="text" name="exploracion_fisica_fr" @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_fr) value="{{$cita->sudicienciatrabajoaltura->exploracion_fisica_fr}}"  @endisset class="form-control" >
                                                              </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4 form-horizontal">
                                                            <div class="form-group">
                                                              <label class="col-sm-4 control-label">PA mm HG</label>
                                                              <div class="col-sm-6">
                                                                 <input type="text" name="exploracion_fisica_pa" @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_pa) value="{{$cita->sudicienciatrabajoaltura->exploracion_fisica_pa}}"  @endisset class="form-control" >
                                                              </div>
                                                            </div>
                                                        </div>
                                                  </div>
                                              </div>

                                              <div class="row">
                                                  <div class="col-md-12">
                                                      <div class="col-md-4 form-horizontal">
                                                          <div class="form-group">
                                                            <label class="col-sm-4 control-label">Talla (cms)</label>
                                                            <div class="col-sm-6">
                                                               <input type="text" name="exploracion_fisica_talla" @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_talla) value="{{$cita->sudicienciatrabajoaltura->exploracion_fisica_talla}}"  @endisset  class="form-control" >
                                                            </div>
                                                          </div>
                                                      </div>

                                                      <div class="col-md-4 form-horizontal">
                                                          <div class="form-group">
                                                            <label class="col-sm-4 control-label">Peso (Kg)</label>
                                                            <div class="col-sm-6">
                                                               <input type="text" name="exploracion_fisica_peso" @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_peso) value="{{$cita->sudicienciatrabajoaltura->exploracion_fisica_peso}}"  @endisset class="form-control" >
                                                            </div>
                                                          </div>
                                                      </div>

                                                      <div class="col-md-4 form-horizontal">
                                                          <div class="form-group">
                                                            <label class="col-sm-4 control-label">IMC</label>
                                                            <div class="col-sm-6">
                                                               <input type="text" name="exploracion_fisica_imc" @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_imc) value="{{$cita->sudicienciatrabajoaltura->exploracion_fisica_imc}}"  @endisset class="form-control" >
                                                            </div>
                                                          </div>
                                                      </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 form-horizontal">
                                                        <div class="form-group">
                                                          <label class="col-sm-4 control-label">P. Cuello (cms)</label>
                                                          <div class="col-sm-6">
                                                             <input type="text" name="exploracion_fisica_perimetro_cuello" @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_perimetro_cuello) value="{{$cita->sudicienciatrabajoaltura->exploracion_fisica_perimetro_cuello}}"  @endisset class="form-control" >
                                                          </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 form-horizontal">
                                                        <div class="form-group">
                                                          <label class="col-sm-4  control-label">P. Cintura (cms)</label>
                                                          <div class="col-sm-6">
                                                             <input type="text" name="exploracion_fisica_perimetro_cintura" @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_perimetro_cintura) value="{{$cita->sudicienciatrabajoaltura->exploracion_fisica_perimetro_cintura}}"  @endisset class="form-control" >
                                                          </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 form-horizontal">
                                                        <div class="form-group">
                                                          <label class="col-sm-4 control-label">P. Cadera (cms)</label>
                                                          <div class="col-sm-6">
                                                             <input type="text" name="exploracion_fisica_perimetro_cadera" @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_perimetro_cadera) value="{{$cita->sudicienciatrabajoaltura->exploracion_fisica_perimetro_cadera}}"  @endisset  class="form-control" >
                                                          </div>
                                                        </div>
                                                    </div>
                                              </div>
                                          </div>

                                          <div class="row">
                                              <div class="col-md-12">
                                                  <div class="col-md-4 form-horizontal">
                                                      <div class="form-group">
                                                        <label class="col-sm-4 control-label">ICC</label>
                                                        <div class="col-sm-6">
                                                           <input type="text" name="exploracion_fisica_icc" @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_icc) value="{{$cita->sudicienciatrabajoaltura->exploracion_fisica_icc}}"  @endisset  class="form-control" >
                                                        </div>
                                                      </div>
                                                  </div>

                                                  <div class="col-md-4 form-horizontal">
                                                      <div class="form-group">
                                                        <label class="col-sm-4 control-label">P. torácico inspiración (cms)</label>
                                                        <div class="col-sm-6">
                                                           <input type="text" name="exploracion_fisica_perimetro_toracico_inspiracion" @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_perimetro_toracico_inspiracion) value="{{$cita->sudicienciatrabajoaltura->exploracion_fisica_perimetro_toracico_inspiracion}}"  @endisset  class="form-control" >
                                                        </div>
                                                      </div>
                                                  </div>

                                                  <div class="col-md-4 form-horizontal">
                                                      <div class="form-group">
                                                        <label class="col-sm-4 control-label">P. torácico espiración (cms)</label>
                                                        <div class="col-sm-6">
                                                           <input type="text" name="exploracion_fisica_perimetro_toracico_espiracion" @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_perimetro_toracico_espiracion) value="{{$cita->sudicienciatrabajoaltura->exploracion_fisica_perimetro_toracico_espiracion}}"  @endisset class="form-control" >
                                                        </div>
                                                      </div>
                                                  </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="col-md-6">
                                              <div class="row">
                                                <div class="col-md-10 ">
                                                          <p>limitación en fuerza y/o movilidad de extremidades (Mayor a 2kg / fuerza cada mano)</p>
                                                </div>
                                                <div class="col-md2">
                                                        <input type="checkbox" name="exploracion_fisica_item_1" @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_1) checked  @endisset   value="1">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-6 ">
                                              <div class="col-md-10 ">
                                                        <p>Presencia de nistagnus</p>
                                              </div>
                                              <div class="col-md2">
                                                      <input type="checkbox" name="exploracion_fisica_item_2" value="1" @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_2) checked  @endisset >
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="col-md-6">
                                              <div class="row">
                                                <div class="col-md-10 ">
                                                          <p>Alteracion presente del equilibrio</p>
                                                </div>
                                                <div class="col-md2">
                                                        <input type="checkbox" name="exploracion_fisica_item_3" value="1" @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_3) checked  @endisset>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-6 ">
                                              <div class="col-md-10 ">
                                                        <p>Anormalidad en movimientos oculares</p>
                                              </div>
                                              <div class="col-md2">
                                                      <input type="checkbox" name="exploracion_fisica_item_4" value="1" @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_4) checked  @endisset>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="col-md-6">
                                              <div class="row">
                                                <div class="col-md-10 ">
                                                          <p>Anormalidad en la marcha con los ojos cerrados y/o abiertos</p>
                                                </div>
                                                <div class="col-md2">
                                                        <input type="checkbox" name="exploracion_fisica_item_5" value="1" @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_5) checked  @endisset>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-6 ">
                                              <div class="col-md-10 ">
                                                        <p>Pupilas no CIRLA</p>
                                              </div>
                                              <div class="col-md2">
                                                      <input type="checkbox" name="exploracion_fisica_item_6" value="1" @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_6) checked  @endisset>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="col-md-6">
                                              <div class="row">
                                                <div class="col-md-10 ">
                                                          <p>Alteración de la coordinacion presente(dedo nariz)</p>
                                                </div>
                                                <div class="col-md2">
                                                        <input type="checkbox" name="exploracion_fisica_item_7" value="1" @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_7) checked  @endisset>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-6 ">
                                              <div class="col-md-10 ">
                                                        <p>Anormalidad del lenguaje</p>
                                              </div>
                                              <div class="col-md2">
                                                      <input type="checkbox" name="exploracion_fisica_item_8" value="1" @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_8) checked  @endisset>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="col-md-6">
                                              <div class="row">
                                                <div class="col-md-10 ">
                                                          <p>Asimetria facil</p>
                                                </div>
                                                <div class="col-md2">
                                                        <input type="checkbox" name="exploracion_fisica_item_9" value="1" @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_9) checked  @endisset>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-6 ">
                                              <div class="col-md-10 ">
                                                        <p>Movimientos involuntarios</p>
                                              </div>
                                              <div class="col-md2">
                                                      <input type="checkbox" name="exploracion_fisica_item_10" value="1" @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_10) checked  @endisset>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                          <h5><strong>Detalle Información</strong></h5>
                                          <input type="text" class="form-control" @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_detalle) value="{{$cita->sudicienciatrabajoaltura->exploracion_fisica_detalle}}"  @endisset  name="exploracion_fisica_detalle">
                                          </div>
                                        </div>
                    </div>
                      <div id="menu2" class="tab-pane fade">
                          <div class="row">
                                <div class="col-md-12">
                                      <h4><strong>Evaluacion de Capacidades Funcionales a Traves de Pruebas Adicionales</strong></h4>
                                      <div class="row">
                                        <div class="col-md-6">
                                          <div class="col-md-10 ">
                                              <p>Hipoacusia con compromiso de frecuencias conversacionales con promedio mayor de 40 db o bilateral incluso con audifonos</p>
                                          </div>
                                          <div class="col-md-2">
                                            <input type="checkbox" name="prueba_auxiliar_item_1" value="1" @isset($cita->sudicienciatrabajoaltura->prueba_auxiliar_item_1) checked  @endisset>
                                          </div>
                                        </div>
                                        <div class="col-md-6">
                                          <div class="col-md-10 ">
                                              <p>Evaluación psicológica anormal</p>
                                          </div>
                                          <div class="col-md-2">
                                            <input type="checkbox" name="prueba_auxiliar_item_2" value="1"@isset($cita->sudicienciatrabajoaltura->prueba_auxiliar_item_2) checked  @endisset>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-6">
                                          <div class="col-md-10 ">
                                              <p>Alteración de la agudeza visual(de los diferente a 20/20 en cada ojo) y/o de la vision profundidad incluso con lentes correctores.</p>
                                          </div>
                                          <div class="col-md-2">
                                            <input type="checkbox" name="prueba_auxiliar_item_3" value="1" @isset($cita->sudicienciatrabajoaltura->prueba_auxiliar_item_3) checked  @endisset>
                                          </div>
                                        </div>
                                        <div class="col-md-6">
                                          <div class="col-md-10 ">
                                              <p>Prueba de visión de profundidad alterada</p>
                                          </div>
                                          <div class="col-md-2">
                                            <input type="checkbox" name="prueba_auxiliar_item_4" value="1" @isset($cita->sudicienciatrabajoaltura->prueba_auxiliar_item_4) checked  @endisset>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-6">
                                          <div class="col-md-10 ">
                                              <p>Campimetría Anormal(Test de confrontación alterada)</p>
                                          </div>
                                          <div class="col-md-2">
                                            <input type="checkbox" name="prueba_auxiliar_item_5" value="1" @isset($cita->sudicienciatrabajoaltura->prueba_auxiliar_item_5) checked  @endisset>
                                          </div>
                                        </div>
                                        <div class="col-md-6">


                                        </div>
                                      </div>
                                </div>
                          </div>

                          <div class="row">
                            <div class="col-md-12">
                                  <h4> <strong> Otros Datos de Relevancia  </strong> </h4>
                                  <div class="row">
                                    <div class="col-md-12">
                                      <h5>Detalle las Medicinas que están tomando:</h5>
                                      <input type="text" class="form-control" @isset($cita->sudicienciatrabajoaltura->prueba_auxiliar_detalle_medicina) value="{{$cita->sudicienciatrabajoaltura->prueba_auxiliar_detalle_medicina}}"  @endisset name="prueba_auxiliar_detalle_medicina">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-12">

                                        <h5>Otro:</h5>
                                        <input type="text" class="form-control" @isset($cita->sudicienciatrabajoaltura->prueba_auxiliar_otro) value="{{$cita->sudicienciatrabajoaltura->prueba_auxiliar_otro}}"  @endisset name="prueba_auxiliar_otro">
                                    </div>
                                  </div>
                            </div>
                          </div>

                      </div>
                      <div id="menu3" class="tab-pane fade">

                          <div class="row">
                              <div class="col-md-12">
                                  <h4> <strong> Conclusion de Evaluacion Funcional </strong> </h4>
                                <div class="row">
                                  <div class="col-md-4">
                                    <h5><strong> Apto Para Trabajar Encima De Los 1.8 Metros</strong> </h5>
                                        <div class="row ">

                                            <div class="col-md-8 text-right">
                                                No Apto
                                            </div>
                                            <div class="col-md-2">
                                                <input type="radio" name="conclusion_apto" value="noapto" @isset($cita->sudicienciatrabajoaltura->conclusion_apto) @if($cita->sudicienciatrabajoaltura->conclusion_apto=='noapto')  checked @endif @endisset >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 text-right">
                                                Observado
                                            </div>
                                            <div class="col-md-2">
                                                <input type="radio" name="conclusion_apto" value="observado" @isset($cita->sudicienciatrabajoaltura->conclusion_apto) @if($cita->sudicienciatrabajoaltura->conclusion_apto=='observado')  checked @endif @endisset>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 text-right">
                                                Apto con Restricciones
                                            </div>
                                            <div class="col-md-2">
                                                <input type="radio" name="conclusion_apto" value="aptorestriccion" @isset($cita->sudicienciatrabajoaltura->conclusion_apto) @if($cita->sudicienciatrabajoaltura->conclusion_apto=='aptorestriccion')  checked @endif @endisset>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 text-right">
                                                Apto
                                            </div>
                                            <div class="col-md-2">
                                                <input type="radio" name="conclusion_apto" value="apto" @isset($cita->sudicienciatrabajoaltura->conclusion_apto) @if($cita->sudicienciatrabajoaltura->conclusion_apto=='apto')  checked @endif @endisset>
                                            </div>
                                        </div>

                                  </div>
                                  <div class="col-md-8">
                                    <div class="">
                                      <div class="form-group col-md-5">
                                        <label for="" class="control-label">Desde:</label>
                                        <input type="date" name="desde" @isset($cita->sudicienciatrabajoaltura->desde) value="{{$cita->sudicienciatrabajoaltura->desde}}"  @endisset  class="form-control ">
                                      </div>
                                      <div class="form-group col-md-2" style="margin-left:5px; margin-right:5px;">
                                        <label for="">&nbsp</label>
                                        <input type="text" name=""  class="form-control ">
                                      </div>
                                      <div class="form-group col-md-5">
                                        <label for="" class="control-label">Hasta:</label>
                                        <input type="date" name="hasta" @isset($cita->sudicienciatrabajoaltura->hasta) value="{{$cita->sudicienciatrabajoaltura->hasta}}"  @endisset  class="form-control ">
                                      </div>
                                    </div>

                                  </div>
                                </div>
                              </div>
                          </div>


                          <div class="row">
                              <div class="col-md-12">
                                  <h4> <strong> Observaciones y Recomendaciones</strong> </h4>
                                  <input type="text" class="form-control" name="recomendacion" @isset($cita->sudicienciatrabajoaltura->recomendacion) value="{{$cita->sudicienciatrabajoaltura->recomendacion}}"  @endisset>
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
                      {{-- a href="" class="btn btn-sm btn-success trabajoaltura"  tipo="trabajoaltura_modificar" data-dismiss="modal">GUARDAR</a> --}}

                        @isset($cita->sudicienciatrabajoaltura->id)
                         <button class="btn btn-sm btn-primary trabajoaltura" tipo="trabajoaltura_modificar" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDITAR</button>
                         @else
                         <button class="btn btn-sm btn-success trabajoaltura" tipo="trabajoaltura_guardar" type="button">GUARDAR</button>
                         @endisset


                        {{-- <a href="" class="btn btn-sm btn-info" data-dismiss="modal">TERMINAR</a>--}}
                        <a href="" class="btn btn-sm btn-warning" data-dismiss="modal">Volver</a>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
