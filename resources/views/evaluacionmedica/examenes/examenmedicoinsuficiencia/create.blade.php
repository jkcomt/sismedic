<div class="modal fade" tabindex="-1" role="dialog" id="modal-vision">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form action="" id="" method="post">
            <div class="modal-body ">
                {{csrf_field()}}

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
                              <label class="radio-inline"><input type="radio" name="optradio">Primera Aptitud</label>
                              <label class="radio-inline"><input type="radio" name="optradio">Revalidación</label>
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
                                  <input type="checkbox">
                                </td>
                                <td>

                                </td>
                                <td>
                                  <p>    Personas que consumen sustancias estupefacientes o psicotrópicas en niveles que alteren su capacidad o trabajar como controlar un vehículo
                                  </p>
                                </td>
                                <td>
                                    <input type="checkbox">
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <p>Alcoholismo crónico y en general todas aquellas enfermedades que produzcan incapacidad de efectuar movimientos voluntarios y/o que limiten la capacidad de trabajo como conducción, manejo o control fisico de un vehículo motorizado, subir y bajar escaleras, etc</p>
                                </td>
                                <td>
                                  <input type="checkbox">
                                </td>
                                <td>

                                </td>
                                <td>
                                  <p>Personas que consumen sustancias estupefacientes o psicotrópicas en niveles que no alteren su capacidad de trabajar, pero que se encuentran sin tratamiento o en tratamiento sin prescripción médica.
                                  </p>
                                </td>
                                <td>
                                    <input type="checkbox">
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <p>Perdida recurrente de la consciencia, independientemente de su tratamiento, tales como narcolepsia, epilepsia, etc.</p>
                                </td>
                                <td>
                                  <input type="checkbox">
                                </td>
                                <td>

                                </td>
                                <td>
                                  <p>Sindrome Apnea Obstructiva del sueño sospecha o confirmada (Ficha SAS)
                                  </p>
                                </td>
                                <td>
                                    <input type="checkbox">
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <p>Anemia de cualquier grado, según criterios OMS 2011</p>
                                </td>
                                <td>
                                  <input type="checkbox">
                                </td>
                                <td>

                                </td>
                                <td>
                                  <p> Obesidad(IMC>o igual a 30)
                                  </p>
                                </td>
                                <td>
                                    <input type="checkbox">
                                </td>
                              </tr>
                              <tr>
                                <td colspan="5">
                                  <input type="text" name="" value="" class="form-control" placeholder="Comentarios/Detalles">
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
                                                                 <input type="text" class="form-control" >
                                                              </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4 form-horizontal">
                                                            <div class="form-group">
                                                              <label class="col-sm-4 control-label">FR x min</label>
                                                              <div class="col-sm-6">
                                                                 <input type="text" class="form-control" >
                                                              </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4 form-horizontal">
                                                            <div class="form-group">
                                                              <label class="col-sm-4 control-label">PA mm HG</label>
                                                              <div class="col-sm-6">
                                                                 <input type="text" class="form-control" >
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
                                                               <input type="text" class="form-control" >
                                                            </div>
                                                          </div>
                                                      </div>

                                                      <div class="col-md-4 form-horizontal">
                                                          <div class="form-group">
                                                            <label class="col-sm-4 control-label">Peso (Kg)</label>
                                                            <div class="col-sm-6">
                                                               <input type="text" class="form-control" >
                                                            </div>
                                                          </div>
                                                      </div>

                                                      <div class="col-md-4 form-horizontal">
                                                          <div class="form-group">
                                                            <label class="col-sm-4 control-label">IMC</label>
                                                            <div class="col-sm-6">
                                                               <input type="text" class="form-control" >
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
                                                             <input type="text" class="form-control" >
                                                          </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 form-horizontal">
                                                        <div class="form-group">
                                                          <label class="col-sm-4 control-label">P. Cintura (cms)</label>
                                                          <div class="col-sm-6">
                                                             <input type="text" class="form-control" >
                                                          </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 form-horizontal">
                                                        <div class="form-group">
                                                          <label class="col-sm-4 control-label">P. Cadera (cms)</label>
                                                          <div class="col-sm-6">
                                                             <input type="text" class="form-control" >
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
                                                           <input type="text" class="form-control" >
                                                        </div>
                                                      </div>
                                                  </div>

                                                  <div class="col-md-4 form-horizontal">
                                                      <div class="form-group">
                                                        <label class="col-sm-4 control-label">P. torácico inspiración (cms)</label>
                                                        <div class="col-sm-6">
                                                           <input type="text" class="form-control" >
                                                        </div>
                                                      </div>
                                                  </div>

                                                  <div class="col-md-4 form-horizontal">
                                                      <div class="form-group">
                                                        <label class="col-sm-4 control-label">P. torácico espiración (cms)</label>
                                                        <div class="col-sm-6">
                                                           <input type="text" class="form-control" >
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
                                                        <input type="checkbox" name="" value="">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-6 ">
                                              <div class="col-md-10 ">
                                                        <p>Presencia de nistagnus</p>
                                              </div>
                                              <div class="col-md2">
                                                      <input type="checkbox" name="" value="">
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
                                                        <input type="checkbox" name="" value="">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-6 ">
                                              <div class="col-md-10 ">
                                                        <p>Anormalidad en movimientos oculares</p>
                                              </div>
                                              <div class="col-md2">
                                                      <input type="checkbox" name="" value="">
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
                                                        <input type="checkbox" name="" value="">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-6 ">
                                              <div class="col-md-10 ">
                                                        <p>Pupilas no CIRLA</p>
                                              </div>
                                              <div class="col-md2">
                                                      <input type="checkbox" name="" value="">
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
                                                        <input type="checkbox" name="" value="">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-6 ">
                                              <div class="col-md-10 ">
                                                        <p>Anormalidad del lenguaje</p>
                                              </div>
                                              <div class="col-md2">
                                                      <input type="checkbox" name="" value="">
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
                                                        <input type="checkbox" name="" value="">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-6 ">
                                              <div class="col-md-10 ">
                                                        <p>Movimientos involuntarios</p>
                                              </div>
                                              <div class="col-md2">
                                                      <input type="checkbox" name="" value="">
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                          <h5><strong>Detalle Información</strong></h5>
                                          <input type="text" class="form-control" name="" value="">
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
                                            <input type="checkbox" name="" value="">
                                          </div>
                                        </div>
                                        <div class="col-md-6">
                                          <div class="col-md-10 ">
                                              <p>Evaluación psicológica anormal</p>
                                          </div>
                                          <div class="col-md-2">
                                            <input type="checkbox" name="" value="">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-6">
                                          <div class="col-md-10 ">
                                              <p>Alteración de la agudeza visual(de los diferente a 20/20 en cada ojo) y/o de la vision profundidad incluso con lentes correctores.</p>
                                          </div>
                                          <div class="col-md-2">
                                            <input type="checkbox" name="" value="">
                                          </div>
                                        </div>
                                        <div class="col-md-6">
                                          <div class="col-md-10 ">
                                              <p>Prueba de visión de profundidad alterada</p>
                                          </div>
                                          <div class="col-md-2">
                                            <input type="checkbox" name="" value="">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-6">
                                          <div class="col-md-10 ">
                                              <p>Campimetría Anormal(Test de confrontación alterada)</p>
                                          </div>
                                          <div class="col-md-2">
                                            <input type="checkbox" name="" value="">
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
                                      <input type="text" class="form-control" name="" value="">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-12">

                                        <h5>Otro:</h5>
                                        <input type="text" class="form-control" name="" value="">
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
                                                <input type="radio" name="radiouno" value="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 text-right">
                                                Observado
                                            </div>
                                            <div class="col-md-2">
                                                <input type="radio" name="radiouno" value="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 text-right">
                                                Apto con Restricciones
                                            </div>
                                            <div class="col-md-2">
                                                <input type="radio" name="radiouno" value="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 text-right">
                                                Apto
                                            </div>
                                            <div class="col-md-2">
                                                <input type="radio" name="radiouno" value="">
                                            </div>
                                        </div>

                                  </div>
                                  <div class="col-md-8">
                                    <div class="">
                                      <div class="form-group col-md-5">
                                        <label for="" class="control-label">Desde:</label>
                                        <input type="date" name="" value="" class="form-control ">
                                      </div>
                                      <div class="form-group col-md-2" style="margin-left:5px; margin-right:5px;">
                                        <label for="">&nbsp</label>
                                        <input type="text" name="" value="" class="form-control ">
                                      </div>
                                      <div class="form-group col-md-5">
                                        <label for="" class="control-label">Hasta:</label>
                                        <input type="date" name="" value="" class="form-control ">
                                      </div>
                                    </div>


                                                {{-- <div class="col-md-6">

                                                </div> --}}

                                                {{-- <div class="col-md-2">
                                                  <h5>&nbsp</h5>
                                                  <input type="text" name="" value="" class="form-control">
                                                </div>

                                                <div class="col-md-4">
                                                  <h5>Hasta</h5>
                                                  <input type="date" name="" value="" class="form-control">
                                                </div> --}}

                                  </div>
                                </div>
                              </div>
                          </div>


                          <div class="row">
                              <div class="col-md-12">
                                  <h4> <strong> Observaciones y Recomendaciones</strong> </h4>
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
