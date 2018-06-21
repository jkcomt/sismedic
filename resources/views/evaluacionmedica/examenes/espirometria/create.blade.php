<div class="modal fade" tabindex="-1" role="dialog" id="modal-espirometria">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')

                <div class="modal-body ">

                    <ul class="nav nav-pills">
                      <li class="active"><a data-toggle="tab" href="#home">Inicio</a></li>
                      <li><a data-toggle="tab" href="#menu1">Diagnosticos</a></li>
                      {{-- <li><a data-toggle="tab" href="#menu2">Menu 2</a></li> --}}
                    </ul>
                                  <div class="tab-content">
                                    <div id="home" class="tab-pane fade in active">
                              <form  id="formespirometria">
                                    {{csrf_field()}}
                                @isset($cita->espirometria->id)
                                 <input type="hidden" name="espirometria_id" value="{{$cita->espirometria->id}}">
                               @endisset
                                 <input type="hidden" name="lista_examen_id" value="{{$listaExamen->id}}">
                                 <input type="hidden" name="cita_id" value="{{$cita->id}}">

                                      <div class="row">
                                        <div class="col-md-12">
                                          <h5> <strong> DATOS PERSONALES</strong>  </h5>
                                        </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-12" >
                                              <div class="row ">
                                                <div class="col-md-12 ">

                                                            <div class="row">
                                                              <div class="col-md-4">
                                                                <div class="row form-group">
                                                                  <div class="col-md-12">
                                                                    <div class="input-group ">
                                                                      <span class="input-group-addon span-width" style="border:none;">Grupo Etnico</span>
                                                                      <select  class="form-control" name="grupo_etnico">
                                                                        <option  ></option>
                                                                      </select>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-4">
                                                                <div class="row form-group">
                                                                  <div class="col-md-12">
                                                                    <div class="input-group ">
                                                                      <span class="input-group-addon span-width" style="border:none;">Fumador</span>
                                                                      <select  class="form-control" name="fumador">
                                                                        <option  ></option>
                                                                      </select>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-4">
                                                                <div class="row form-group">
                                                                  <div class="col-md-12">
                                                                    <div class="input-group ">
                                                                      <span class="input-group-addon span-width" style="border:none;">Calidad</span>
                                                                      <select  class="form-control" name="calidad">
                                                                        <option value="1" >BUENA</option>
                                                                        <option  value="2" >ACEPTABLE</option>
                                                                        <option  value="3" >BAJA CALIDAD</option>
                                                                        <option  value="4" >INACEPTABLE</option>
                                                                      </select>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>

                                                            <div class="row">
                                                                  <div class="col-md-4">
                                                                    <div class="row form-group">
                                                                      <div class="col-md-12">
                                                                        <div class="input-group ">
                                                                          <span class="input-group-addon span-width" style="border:none;">Talla &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span>
                                                                          <input type="text" name="talla" @isset($cita->espirometria->talla)  value="{{$cita->espirometria->talla}}" @endisset class="form-control">
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                    <div class="row form-group">
                                                                      <div class="col-md-12">
                                                                        <div class="input-group ">
                                                                          <span class="input-group-addon span-width" style="border:none;">Peso &nbsp; &nbsp; &nbsp; &nbsp;  </span>
                                                                          <input type="text" name="peso" @isset($cita->espirometria->peso)  value="{{$cita->espirometria->peso}}" @endisset  class="form-control">
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                  </div>
                                                            </div>



                                                </div>

                                              </div>
                                              <div class="row">
                                                <div class="col-md-6">
                                                  <h5> <strong> ESPIROMETRIA MANUAL </strong>  </h5>
                                                </div>
                                                <div class="col-md-6 text-right">
                                                  <button type="button" class="btn btn-sm btn-success" name="button"> Generar Calculos</button>
                                                </div>
                                              </div>
                                              <div class="row">
                                                <table class="table  table-bordered">
                                                  <thead>
                                                    <tr>
                                                      <th colspan="1"></th>
                                                      <th colspan="1"></th>
                                                      <th colspan="3" class="text-center">Result1nBest</th>

                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td>Datos</td>
                                                      <td>UM</td>
                                                      <td>Result</td>
                                                      <td>Predicted</td>
                                                      <td>%Predicted</td>
                                                    </tr>
                                                    <tr>
                                                      <td>FVC</td>
                                                      <td>L</td>
                                                      <td> <input type="text" class="form-control"  @isset($cita->espirometria->result1)  value="{{$cita->espirometria->result1}}" @endisset   name="result1"   > </td>
                                                        <td> <input type="text" class="form-control"  @isset($cita->espirometria->prediccion1)  value="{{$cita->espirometria->prediccion1}}" @endisset   name="prediccion1"  > </td>
                                                        <td> <input type="text" class="form-control"  @isset($cita->espirometria->porcentaje_prediccion1)  value="{{$cita->espirometria->porcentaje_prediccion1}}" @endisset   name="porcentaje_prediccion1"  > </td>
                                                    </tr>
                                                    <tr>
                                                      <td>FEV1</td>
                                                      <td>L</td>
                                                      <td> <input type="text" class="form-control"  @isset($cita->espirometria->result2)  value="{{$cita->espirometria->result2}}" @endisset   name="result2"  > </td>
                                                        <td> <input type="text" class="form-control"  @isset($cita->espirometria->prediccion2)  value="{{$cita->espirometria->prediccion2}}" @endisset   name="prediccion2"  > </td>
                                                        <td> <input type="text" class="form-control"  @isset($cita->espirometria->porcentaje_prediccion2)  value="{{$cita->espirometria->porcentaje_prediccion2}}" @endisset   name="porcentaje_prediccion2"  > </td>
                                                    </tr>
                                                    <tr>
                                                      <td>FEV1/FVC</td>
                                                      <td>L</td>
                                                      <td> <input type="text" class="form-control"  @isset($cita->espirometria->result3)  value="{{$cita->espirometria->result3}}" @endisset   name="result3"  > </td>
                                                        <td> <input type="text" class="form-control"  @isset($cita->espirometria->prediccion3)  value="{{$cita->espirometria->prediccion3}}" @endisset   name="prediccion3"  > </td>
                                                        <td> <input type="text" class="form-control"  @isset($cita->espirometria->porcentaje_prediccion3)  value="{{$cita->espirometria->porcentaje_prediccion3}}" @endisset   name="porcentaje_prediccion3"  > </td>
                                                    </tr>
                                                    <tr>
                                                      <td>PEF</td>
                                                      <td>L/s</td>
                                                      <td> <input type="text" class="form-control"  @isset($cita->espirometria->result4)  value="{{$cita->espirometria->result4}}" @endisset   name="result4"  > </td>
                                                        <td> <input type="text" class="form-control"  @isset($cita->espirometria->prediccion4)  value="{{$cita->espirometria->prediccion4}}" @endisset   name="prediccion4"  > </td>
                                                        <td> <input type="text" class="form-control"  @isset($cita->espirometria->porcentaje_prediccion4)  value="{{$cita->espirometria->porcentaje_prediccion4}}" @endisset   name="porcentaje_prediccion4"  > </td>
                                                    </tr>
                                                    <tr>
                                                      <td>FEF2575</td>
                                                      <td>L/s</td>
                                                      <td> <input type="text" class="form-control"  @isset($cita->espirometria->result5)  value="{{$cita->espirometria->result5}}" @endisset   name="result5"  > </td>
                                                        <td> <input type="text" class="form-control"  @isset($cita->espirometria->prediccion5)  value="{{$cita->espirometria->prediccion5}}" @endisset   name="prediccion5"  > </td>
                                                        <td> <input type="text" class="form-control"  @isset($cita->espirometria->porcentaje_prediccion5)  value="{{$cita->espirometria->porcentaje_prediccion5}}" @endisset   name="porcentaje_prediccion5"  > </td>
                                                    </tr>

                                                  </tbody>

                                                </table>
                                              </div>
                                          </div>

                                      </div>
                                      <div class="row">
                                          <div class="col-md-12 text-right">
                                            @isset($cita->espirometria->id)
                                              <button class="btn btn-sm btn-primary espirometria" tipo="espirometria_modificar" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDITAR</button>
                                             @else
                                              <button class="btn btn-sm btn-success espirometria" tipo="espirometria_guardar" type="button">GUARDAR</button>
                                            @endisset
                                          </div>
                                      </div>
                                  </form>
                                    </div>
                                    <div id="menu1" class="tab-pane fade">
                                      <form id="formdiagnosticoespirometria">
                                        @isset($cita->diagnosticoespirometria->id)
                                         <input type="hidden" name="diagnosticoespirometria_id" value="{{$cita->diagnosticoespirometria->id}}">
                                       @endisset
                                         <input type="hidden" name="lista_examen_id" value="{{$listaExamen->id}}">
                                         <input type="hidden" name="cita_id" value="{{$cita->id}}">
                                        @csrf
                                        <div class="row">
                                        <div class="col-md-6 text-center">
                                            <h5> <strong> CONSULTAS OCUPACIONALES - REGISTRO DE EXAMEN</strong> </h5>

                                            <div class="col-md-12 text-left">
                                              <h6>Examenes Auxiliares</h6>
                                              <textarea name="examenes_auxiliares" rows="3" cols="750" class="form-control" style="resize:none;">@isset($cita->diagnosticoespirometria->examenes_auxiliares){{$cita->diagnosticoespirometria->examenes_auxiliares}}  @endisset</textarea>
                                              </div>
                                            <div class="col-md-12 text-left">
                                              <h6>Observaciones</h6>
                                              <textarea name="observaciones" rows="3" cols="750" class="form-control" style="resize:none;">@isset($cita->diagnosticoespirometria->observaciones){{$cita->diagnosticoespirometria->observaciones}}  @endisset</textarea>
                                              </div>
                                            <div class="col-md-12 text-left">
                                              <h6 style="color:red">DIAGNOSTICOS CIE10 Y MEDICO</h6>
                                              <textarea name="diagnosticos_cie10_medico" rows="3" cols="750" class="form-control" style="resize:none;">@isset($cita->diagnosticoespirometria->diagnosticos_cie10_medico){{$cita->diagnosticoespirometria->diagnosticos_cie10_medico}}  @endisset</textarea>
                                              </div>
                                            <div class="col-md-12 text-left">
                                              <h6>Conclusiones</h6>
                                              <textarea name="concluciones" rows="3" cols="750" class="form-control" style="resize:none;">@isset($cita->diagnosticoespirometria->concluciones){{$cita->diagnosticoespirometria->concluciones}}  @endisset</textarea>
                                            </div>
                                            <div class="col-md-12 text-left">
                                              <h6>Recomendaciones</h6>
                                              <textarea name="recomendaciones" rows="3" cols="750" class="form-control" style="resize:none;">@isset($cita->diagnosticoespirometria->recomendaciones){{$cita->diagnosticoespirometria->recomendaciones}}  @endisset</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-left">
                                            <h5 class="text-center"> <strong> DIAGNOSTICOS EMA</strong> </h5>
                                                        <div class="checkbox">
                                                           <label>
                                                             <input type="checkbox" name="espirometria_normal"  @isset($cita->diagnosticoespirometria->espirometria_normal) @if($cita->diagnosticoespirometria->espirometria_normal=='1') checked @else @endif @endisset value="1">Z01.8 -ESPIROMETRIA NORMAL
                                                           </label>
                                                         </div>

                                                         <div class="checkbox">
                                                          <label>
                                                            <input type="checkbox" name="patron_obstructivo_estacionario"  @isset($cita->diagnosticoespirometria->patron_obstructivo_estacionario) @if($cita->diagnosticoespirometria->patron_obstructivo_estacionario=='1') checked @else @endif @endisset value="1">R94.2 -PATRON OBSTRUCTIVO(ESTACIONARIO)
                                                          </label>
                                                        </div>
                                                        <div class="checkbox">
                                                         <label>
                                                           <input type="checkbox" name="patron_obstructivo_cambio"  @isset($cita->diagnosticoespirometria->patron_obstructivo_cambio) @if($cita->diagnosticoespirometria->patron_obstructivo_cambio=='1') checked @else @endif @endisset value="1">R94.2 -PATRON OBSTRUCTIVO(CAMBIO SIGNIFICATIVO)
                                                         </label>
                                                       </div>
                                                       <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="patron_restrictivo_estacionario"  @isset($cita->diagnosticoespirometria->patron_restrictivo_estacionario) @if($cita->diagnosticoespirometria->patron_restrictivo_estacionario=='1') checked @else @endif @endisset value="1">R94.2 -PATRON RESTRICTIVO(ESTACIONARIO)
                                                        </label>
                                                      </div>
                                                      <div class="checkbox">
                                                       <label>
                                                         <input type="checkbox" name="patron-restrictivo_cambio"  @isset($cita->diagnosticoespirometria->patron_restrictivo_cambio) @if($cita->diagnosticoespirometria->patron_restrictivo_cambio=='1') checked @else @endif @endisset value="1">R94.2 -PATRON RESTRICTIVO(CAMBIO SIGNIFICATIVO)
                                                       </label>
                                                     </div>
                                                     <div class="checkbox">
                                                      <label>
                                                        <input type="checkbox" name="patron_mixto_estacionario"  @isset($cita->diagnosticoespirometria->patron_mixto_estacionario) @if($cita->diagnosticoespirometria->patron_mixto_estacionario=='1') checked @else @endif @endisset value="1">R94.2 -PATRON MIXTO(ESTACIONARIO)
                                                      </label>
                                                    </div>
                                                    <div class="checkbox">
                                                     <label>
                                                       <input type="checkbox" name="patron_mixto_cambio"  @isset($cita->diagnosticoespirometria->patron_mixto_cambio) @if($cita->diagnosticoespirometria->patron_mixto_cambio=='1') checked @else @endif @endisset value="1">R94.2 -PATRON MIXTO(CAMBIO SIGNIFICATIVO)
                                                     </label>
                                                   </div>
                                                   <div class="checkbox">
                                                    <label>
                                                      <input type="checkbox" name="espirometria_pendiente"  @isset($cita->diagnosticoespirometria->espirometria_pendiente) @if($cita->diagnosticoespirometria->espirometria_pendiente =='1') checked @else @endif @endisset value="1">Z53.8 -ESPIROMETRIA PENDIENTE
                                                    </label>
                                                  </div>
                                                  <div class="checkbox">
                                                   <label>
                                                     <input type="checkbox" name="repetir_espirometria"  @isset($cita->diagnosticoespirometria->repetir_espirometria) @if($cita->diagnosticoespirometria->repetir_espirometria =='1') checked @else @endif @endisset value="1">Z13.9 REPETIR ESPIROMETRIA
                                                   </label>
                                                 </div>
                                                 <div class="checkbox">
                                                  <label>
                                                    <input type="checkbox" name="espirometria_normal_cambio_significativo"  @isset($cita->diagnosticoespirometria->espirometria_normal_cambio_significativo) @if($cita->diagnosticoespirometria->espirometria_normal_cambio_significativo=='1') checked @else @endif @endisset value="1">R94.8 -ESPIROMETRIA CAMBIO SIGNIFICATIVO(CAMBIO SIGNIFICATIVO)
                                                  </label>
                                                </div>
                                                <div class="checkbox">
                                                 <label>
                                                   <input type="checkbox" name="patron_espirometrico_posible_variante_normal"  @isset($cita->diagnosticoespirometria->patron_espirometrico_posible_variante_normal) @if($cita->diagnosticoespirometria->patron_espirometrico_posible_variante_normal =='1') checked @else @endif @endisset value="1">R94.2 -PATRON ESPIROMETRICO POSIBLE VARIANTE NORMAL
                                                 </label>
                                               </div>
                                               <div class="checkbox">
                                                <label>
                                                  <input type="checkbox" name="patron_obstructivo_leve"  @isset($cita->diagnosticoespirometria->patron_obstructivo_leve) @if($cita->diagnosticoespirometria->patron_obstructivo_leve =='1') checked @else @endif @endisset value="1">R94.2 -PATRON OBSTRUCTIVO LEVE
                                                </label>
                                              </div>
                                              <div class="checkbox">
                                               <label>
                                                 <input type="checkbox" name="patron_obstructivo_moderado"  @isset($cita->diagnosticoespirometria->patron_obstructivo_moderado) @if($cita->diagnosticoespirometria->patron_obstructivo_moderado) checked @else @endif @endisset value="1">R94.2 -PATRON OBSTRUCTIVO MODERADO
                                               </label>
                                             </div>
                                             <div class="checkbox">
                                              <label>
                                                <input type="checkbox" name="patron_obstructivo_moderado_grave"  @isset($cita->diagnosticoespirometria->patron_obstructivo_moderado_grave) @if($cita->diagnosticoespirometria->patron_obstructivo_moderado_grave) checked @else @endif @endisset value="1">R94.2 -PATRON OBSTRUCTIVO MODERADAMENTE GRAVE
                                              </label>
                                            </div>
                                            <div class="checkbox">
                                             <label>
                                               <input type="checkbox" name="patron_obstructivo_grave"  @isset($cita->diagnosticoespirometria->patron_obstructivo_grave) @if($cita->diagnosticoespirometria->patron_obstructivo_grave) checked @else @endif @endisset value="1">R94.2 -PATRON OBSTRUCTIVO  GRAVE
                                             </label>
                                           </div>
                                           <div class="checkbox">
                                            <label>
                                              <input type="checkbox" name="patron_obstructivo_posible_variante_normal"  @isset($cita->diagnosticoespirometria->patron_obstructivo_posible_variante_normal) @if($cita->diagnosticoespirometria->patron_obstructivo_posible_variante_normal) checked @else @endif @endisset value="1">R94.2 -PATRON OBSTRUCTIVO  POSIBLE VARIANTE NORMAL
                                            </label>
                                          </div>
                                            <div class="col-md-12">
                                              <h6>Clasificacion</h6>
                                              <div class="col-md-6">
                                                <label class="btn btn-default">
                                                   <input type="radio" name="quality[25]" value="1" /> Presuntivo
                                               </label>
                                              </div>
                                              <div class="col-md-6">
                                                <label class="btn btn-default">
                                                   <input type="radio"  name="quality[25]" value="1" /> Definitivo
                                               </label>
                                              </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 text-right">
                                          @isset($cita->diagnosticoespirometria->id)
                                            <button class="btn btn-sm btn-primary diagnosticoespirometria" tipo="diagnosticoespirometria_modificar" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDITAR</button>
                                           @else
                                            <button class="btn btn-sm btn-success diagnosticoespirometria" tipo="diagnosticoespirometria_guardar" type="button">GUARDAR</button>
                                          @endisset
                                        </div>
                                    </div>

                                        </form>
                                    </div>

                                  </div>

{{-- 945265162 misionero araujo --}}

                </div>
                <div class="modal-footer">

                </div>

        </div>
    </div>
</div>
