<style media="screen">
#mdlconduccionvehiculos{
width: 90% !important;
}
</style>
<div class="modal fade" tabindex="-1" role="dialog" id="modal-vision">
    <div class="modal-dialog" id="mdlconduccionvehiculos" role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form action="" id="" method="post">
            <div class="modal-body ">
                {{csrf_field()}}

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
                              <label class="radio-inline"><input type="radio" name="optradio">Primera Evaluacion</label>
                              <label class="radio-inline"><input type="radio" name="optradio">Revalidación</label>
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
                                  <input type="checkbox">
                                </td>
                                <td>

                                </td>
                                <td>
                                  Personas que consumen sustancias estupefacientes o psicotrópicas en niveles que alteren su  capacidad o trabajar como controlar un vehículo
                                </td>
                                <td>
                                    <input type="checkbox">
                                </td>
                              </tr>
                              <tr>
                                <td>
                                              Alcoholismo crónico y en general  todas aquellas enfermedades que produzcan incapacidad de efectuar movimientos voluntarios y/o que limiten la capacidad de trabajo como conduccion, maneja o control fisico de un vehículo motorizado,subir y bajar escaleras, etc
                                </td>
                                <td>
                                  <input type="checkbox">
                                </td>
                                <td>

                                </td>
                                <td>
                                  Personas que consumen sustancias estupefacientes o psicotrópicas en niveles que no alteren su capacidad de rabajar, pero  que se encuentran sin tratamiento o en tratamiento sin prescripcion médica
                                </td>
                                <td>
                                    <input type="checkbox">
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  Todas aquellas enfermedades que se caractericen por movimientos involuntarios y que  interfieran seriamente su capacidad de trabajar, independientemente de su tratamiento farmalogico
                                </td>
                                <td>
                                  <input type="checkbox">
                                </td>
                                <td>

                                </td>
                                <td>
                                  Personas que como consecuencia de una enfermedad o su tratamiento sufran uno o varios de los siguientes efectos: alteracion del estado de consciencia, alteracion del equilibrio, en la percepción, en la habilidad motriz, en la estabilidad emocional y en el juicio
                                  </p>
                                </td>
                                <td>
                                    <input type="checkbox">
                                </td>
                              </tr>
                              <tr>
                                <td>
                                    Perdida recurrente de la consciencia, independiente de su tratamiento, tales como narcolepsia, epilepsia, etc
                                </td>
                                <td>
                                  <input type="checkbox">
                                </td>
                                <td>

                                </td>
                                <td>
                                  Síndrome apnea obstructiva del sueño sospecha o confirmada(Ficha SAS)
                                </td>
                                <td>
                                    <input type="checkbox">
                                </td>
                              </tr>
                              <tr>
                                <td>
                                    Anemia de cualquier grado, según criterios OMS 2011
                                </td>
                                <td>
                                  <input type="checkbox">
                                </td>
                                <td>

                                </td>
                                <td>
                                  Obesidad (IMC > o igual a 35)
                                </td>
                                <td>
                                    <input type="checkbox">
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
                                       <input type="email" class="form-control">
                                     </div>
                                  </div>
                                  <div class="col-md-2 form-group">
                                       <label for="inputEmail3" class="col-sm-2 control-label">FR:</label>
                                       <div class="col-sm-8">
                                         <input type="email" class="form-control">
                                       </div>
                                    </div>
                                    <div class="col-md-2 form-group">
                                         <label for="inputEmail3" class="col-sm-2 control-label">PA:</label>
                                         <div class="col-sm-8">
                                           <input type="email" class="form-control">
                                         </div>
                                      </div>
                                      <div class="col-md-2 form-group">
                                           <label for="inputEmail3" class="col-sm-4 control-label">Talla:</label>
                                           <div class="col-sm-8">
                                             <input type="email" class="form-control">
                                       </div>
                                    </div>
                                    <div class="col-md-2 form-group">
                                         <label for="inputEmail3" class="col-sm-4 control-label">Peso</label>
                                         <div class="col-sm-8">
                                           <input type="email" class="form-control">
                                         </div>
                                      </div>
                                    <div class="col-md-2 form-group">
                                         <label for="inputEmail3" class="col-sm-2 control-label">IMC:</label>
                                         <div class="col-sm-8">
                                           <input type="email" class="form-control">
                                         </div>
                                      </div>
                            </div>
                            <div class="col-md-12  form-horizontal">
                                <div class="col-md-4 form-group">
                                     <label for="inputEmail3" class="col-sm-6 control-label">Perímetro del cuello:</label>
                                     <div class="col-sm-6">
                                       <input type="email" class="form-control">
                                     </div>
                                  </div>

                                  <div class="col-md-4 form-group">
                                       <label for="inputEmail3" class="col-sm-6 control-label">Perímetro de cintura:</label>
                                       <div class="col-sm-6">
                                         <input type="email" class="form-control">
                                       </div>
                                    </div>

                                    <div class="col-md-4 form-group">
                                         <label for="inputEmail3" class="col-sm-6 control-label">Perímetro de cadera:</label>
                                         <div class="col-md-4">
                                           <div class="input-group">
                                                 <input type="text" class="form-control">
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
                                       <input type="email" class="form-control">
                                     </div>
                                  </div>

                                  <div class="col-md-4 form-group">
                                       <label for="inputEmail3" class="col-sm-6 control-label">P Toraxico Inspiracion:</label>
                                       <div class="col-sm-6">
                                         <input type="email" class="form-control">
                                       </div>
                                    </div>

                                    <div class="col-md-4 form-group">
                                         <label for="inputEmail3" class="col-sm-6 control-label">P Toraxico Espiracion:</label>
                                         <div class="col-md-6">
                                           <div class="input-group">
                                                 <input type="text" class="form-control">
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
                                      <input type="checkbox">
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                      presencia de nistagmus
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Alteración presente del equilibrio(Romberg)
                                    </td>
                                    <td>
                                      <input type="checkbox">
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                      Anormalidad en movimientos oculares
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Anormalidad en marcha con ojos cerrados
                                    </td>
                                    <td>
                                      <input type="checkbox">
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                      pupilas no CIRLA
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Alteración de la coordinacion presente(dedo Indice Nariz)
                                    </td>
                                    <td>
                                      <input type="checkbox">
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                      Anormalidad del Lenguaje
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                        Asimetria Facial
                                    </td>
                                    <td>
                                      <input type="checkbox">
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                      Movimientos involuntarios
                                    </td>
                                    <td>
                                        <input type="checkbox">
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
                                    <input type="text" class="form-control" value="">
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
                                          <input type="checkbox">
                                        </td>
                                        <td>

                                        </td>
                                        <td>
                                          No Reconocimiento de colores Rojo,Azul y verde
                                        </td>
                                        <td>
                                            <input type="checkbox">
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          Alteración de la agudeza visual(de lejos diferente a 20/30 en carda ojo) y/o de la vision en profundidad incluso con lentes correctores
                                        </td>
                                        <td>
                                          <input type="checkbox">
                                        </td>
                                        <td>

                                        </td>
                                        <td>
                                          Prueba de visión de profundidad alterada
                                        </td>
                                        <td>
                                            <input type="checkbox">
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          Campintería Anormal(Test de confrontacion alterada)
                                        </td>
                                        <td>
                                          <input type="checkbox">
                                        </td>
                                        <td>

                                        </td>
                                        <td>
                                          Alguno de los parametros de la evaluacion psicosensometrica alterada:test de palanca, punteo o reactimetria o su equivalente clinico
                                        </td>
                                        <td>
                                            <input type="checkbox">
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
                                               <input type="email" class="form-control">
                                             </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-12">
                                      <div class="form-horizontal">
                                        <div class="col-md-12 form-group">
                                             <label for="inputEmail3" class="col-sm-3 control-label text-left">Otro: </label>
                                             <div class="col-sm-9">
                                               <input type="email" class="form-control">
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
                                               <input type="date" class="form-control">
                                             </div>
                                             <div class="col-sm-1">
                                               <input type="text" class="form-control">
                                             </div>
                                             <label for="inputEmail3" class="col-sm-1 control-label text-left">Desde</label>
                                             <div class="col-sm-2">
                                               <input type="date" class="form-control">
                                             </div>
                                             <div class="col-sm-1">
                                                    <div class="checkbox">
                                                       <label>
                                                         <input type="checkbox"> No Apto
                                                       </label>
                                                     </div>
                                             </div>
                                             <div class="col-sm-1">
                                                 <div class="checkbox">
                                                    <label>
                                                      <input type="checkbox"> Observado
                                                    </label>
                                                  </div>
                                             </div>
                                             <div class="col-sm-2">
                                               <div class="checkbox">
                                                  <label>
                                                    <input type="checkbox">Apto con Restriccion
                                                  </label>
                                                </div>
                                             </div>
                                             <div class="col-sm-1">
                                               <div class="checkbox">
                                                  <label>
                                                    <input type="checkbox"> Apto
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
                                      <input type="text" class="form-control" name="" value="">
                                  </div>
                              </div>
                              <h5></h5>
                              <div class="row">
                                  <div class="col-md-12">
                                    <label> Observaciones y recomendaciones</label>
                                  </div>
                                  <div class="col-md-12">
                                      <input type="text" class="form-control" name="" value="">
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
                        <a href="" class="btn btn-sm btn-success" data-dismiss="modal">GUARDAR</a>
                        <a href="" class="btn btn-sm btn-info" data-dismiss="modal">TERMINAR</a>

                        <a href="" class="btn btn-sm btn-warning" data-dismiss="modal">Volver</a>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
