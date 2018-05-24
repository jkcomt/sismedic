<style media="screen">
#mdlapnea{
width: 90% !important;
}
</style>

<div class="modal fade" tabindex="-1" role="dialog" id="modal-apneasuenio">
    <div class="modal-dialog" id="mdlapnea" role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form id="apnea_suenio">

              {{-- @isset($cita->conduccionvehiculo->id)
                 <input type="hidden" name="conduccion_vehicular_id" value="{{$cita->conduccionvehiculo->id}}">
             @endisset --}}

                <input type="hidden" name="lista_examen_id" value="{{$listaExamen->id}}">
                <input type="hidden" name="cita_id" value="{{$cita->id}}">
                <div class="modal-body ">
                    {{csrf_field()}}
                    <div class="row form-horizontal">
                      <div class="col-md-12">
                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#home">Filiacion / Antecedentes Personales</a></li>
                          <li><a data-toggle="tab" href="#menu1">Examen Fisico</a></li>
                          <li><a data-toggle="tab" href="#menu2">Conclusiones</a></li>
                        </ul>
                        <div class="tab-content">
                          <div id="home" class="tab-pane fade in active">
                          <div class="row">
                                <div class="col-md-12">
                                  <div class="row">

                                    <div class="col-md-2">
                                      <strong> 1.-Filiacion</strong>
                                    </div>
                                  </div>
                                </div>
                                  <div class="col-md-12">
                                          <div class="col-md-4 form-horizontal">
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-4 control-label">Tipo de Licencia</label>
                                                <div class="col-sm-8">
                                                  <select class="form-control" name="">
                                                      <option value="">A2B</option>
                                                      <option value="">A3B</option>
                                                  </select>
                                                </div>
                                              </div>
                                          </div>
                                          <div class="col-md-2">
                                            <div class="checkbox">
                                            <label>
                                              <input type="checkbox"> Trabaja de Noche
                                            </label>
                                          </div>
                                          </div>
                                          <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-6 control-label">N° Dias Trabajados</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" >
                                                </div>
                                              </div>
                                          </div>
                                          <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-6 control-label">N° Dias Descanso</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control">
                                                </div>
                                              </div>
                                          </div>
                                  </div>
                                  <div class=" col-md-12">
                                        <div class=" col-md-12">

                                                <div class="col-md-6 form-inline">
                                                    <div class="form-group">
                                                    <label for="exampleInputName2">Años que trabaja en dicho horario de trabajo</label>
                                                    <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                        </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <strong>2.- Antecedentes Personales</strong>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="col-md-2">
                                          <div class="input-group" >
                                            <label for="apneasuenio_m" style="border:none;"  class="form-control">Apnea del sueño</label>
                                            <span class="input-group-addon" id="basic-addon2" style="border:none;" >  <input id="apneasuenio_m" type="checkbox"  value="1"></span>
                                          </div>
                                        </div>
                                        <div class="col-md-8">
                                          <div class="input-group">
                                            <span class="span-width input-group-addon" style="border:none;">Ultimo control de Apnea</span>
                                            <input type="text" class="form-control" >
                                          </div>
                                        </div>
                                      </div>
                                    </div>
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

                        </div>

                      </div>

                    </div>


                </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-right">
                      @isset($cita->colesterolTotal->id)
                        <button class="btn btn-sm btn-primary  registrarAnexo7d" tipo="anexo7d_modificar" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDITAR</button>
                       @else
                        <button class="btn btn-sm btn-success registrarAnexo7d"  tipo="anexo7d_guardar" type="button">GUARDAR</button>
                      @endisset
                        <a href="" class="btn btn-sm btn-info" data-dismiss="modal">DIAGNOSTICO</a>

                        <a href="" class="btn btn-sm btn-warning" data-dismiss="modal">Volver</a>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
