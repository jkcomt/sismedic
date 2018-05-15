<div class="modal fade" tabindex="-1" role="dialog" id="modal-electrocardiograma">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form  id="registrarElectrocardiograma"  class="form-horizontal">
                <div class="modal-body">
                    {{csrf_field()}}
                    @isset($cita->electrocardiograma->id)
                      <input type="hidden" name="electrocardiograma_id" value="{{$cita->electrocardiograma->id}}">
                     @endisset
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group form-group-sm">
                                <label for="cboritmo" class="col-md-3 control-label">RITMO</label>
                                <div class="col-md-6">
                                  <select  name="cboritmo" class="form-control">
                                      @isset($cita->electrocardiograma->ritmo)
                                        <option value="sinusal"  @if($cita->electrocardiograma->ritmo == "sinusal") selected @else  @endif >SINUSAL</option>
                                        <option value="sinusaldos"  @if($cita->electrocardiograma->ritmo == "sinusaldos") selected @else  @endif >SINUSALDOS</option>
                                         @else
                                           <option value="sinusal" selected>SINUSAL</option>
                                           <option value="sinusaldos">SINUSALDOS</option>
                                         @endisset
                                  </select>
                                </div>
                        </div>

                        <div class="form-group form-group-sm">
                          <label for="" class="col-md-3 control-label">FRECUENCIA CARDIACA</label>
                          <div class="col-md-6">
                            <input type="text" class="form-control" name="frecuencia_cardiaca"   @isset($cita->electrocardiograma->frecuencia_cardiaca) value="{{$cita->electrocardiograma->frecuencia_cardiaca}}" @endisset>
                          </div>
                        </div>


                        <div class="form-group form-group-sm">
                          <label for="" class="col-md-3 control-label">EJE QRS:</label>
                          <div class="col-md-3">
                            <div class="input-group">
                             <input type="text" class="form-control" name="eje_qrs"  @isset($cita->electrocardiograma->eje_qrs) value="{{$cita->electrocardiograma->eje_qrs}}" @endisset>
                             <div class="input-group-addon">°</div>
                           </div>
                          </div>
                          <div class="col-md-3">
                            <input type="text" class="form-control"  name="eje_qrs_dos"  @isset($cita->electrocardiograma->eje_qrs_dos) value="{{$cita->electrocardiograma->eje_qrs_dos}}" @endisset>
                          </div>
                        </div>

                        <div class="form-group form-group-sm">
                          <label for="" class="col-md-3 control-label">ONDA P</label>
                          <div class="col-md-6">
                            <div class="input-group">
                             <input type="text" class="form-control" name="onda_p" @isset($cita->electrocardiograma->onda_p) value="{{$cita->electrocardiograma->onda_p}}" @endisset>
                             <div class="input-group-addon">seg</div>
                           </div>
                          </div>
                        </div>

                        <div class="form-group form-group-sm">
                          <label for="" class="col-md-3 control-label">INTERVALO PR</label>
                          <div class="col-md-6">
                            <div class="input-group">
                             <input type="text" class="form-control" name="intervalo" @isset($cita->electrocardiograma->intervalo) value="{{$cita->electrocardiograma->intervalo}}" @endisset>
                             <div class="input-group-addon">seg</div>
                           </div>
                          </div>
                        </div>

                        <div class="form-group form-group-sm">
                          <label for="" class="col-md-3 control-label">SEGMENTO QRS</label>
                          <div class="col-md-6">
                            <div class="input-group">
                             <input type="text" class="form-control" name="segmento_qrs" @isset($cita->electrocardiograma->segmento_qrs) value="{{$cita->electrocardiograma->segmento_qrs}}" @endisset>
                             <div class="input-group-addon">seg</div>
                           </div>
                          </div>
                        </div>

                        <div class="form-group form-group-sm">
                          <label for="" class="col-md-3 control-label">QT CORREGIDO</label>
                          <div class="col-md-6">
                            <div class="input-group">
                             <input type="text" class="form-control" name="qt_corregido"  @isset($cita->electrocardiograma->qt_corregido) value="{{$cita->electrocardiograma->qt_corregido}}" @endisset>
                             <div class="input-group-addon">seg</div>
                           </div>
                          </div>
                        </div>


                        <div class="form-group form-group-sm">
                          <label for="" class="col-md-3 control-label">ISQUEMA</label>
                          <div class="col-md-3">
                            <select   class="form-control" name="isquemia">
                              @isset($cita->electrocardiograma->isquemia)
                                <option value="si"  @if($cita->electrocardiograma->isquemia == "si") selected @else  @endif >SI</option>
                                <option value="no"  @if($cita->electrocardiograma->isquemia == "no") selected @else  @endif >NO</option>
                                 @else
                                   <option value="si"selected>SI</option>
                                   <option value="no">NO</option>
                                 @endisset

                            </select>
                          </div>
                        </div>

                        <div class="form-group form-group-sm">
                          <label for="" class="col-md-3 control-label">HIPERTROFIAS</label>
                          <div class="col-md-3">
                            <select  class="form-control" name="hipertrofias">
                              @isset($cita->electrocardiograma->hipertrofias)
                                <option value="si"  @if($cita->electrocardiograma->hipertrofias == "si") selected @else  @endif >SI</option>
                                <option value="no"  @if($cita->electrocardiograma->hipertrofias == "no") selected @else  @endif >NO</option>
                                 @else
                                   <option value="si"selected>SI</option>
                                   <option value="no">NO</option>
                                 @endisset
                            </select>
                          </div>
                        </div>

                        <div class="form-group form-group-sm">
                          <label for="" class="col-md-3 control-label">Otros Hallazgos</label>
                          <div class="col-md-5">
                            <input type="text" class="form-control" name="otros_hallazgos"  @isset($cita->electrocardiograma->otros_hallazgos) value="{{$cita->electrocardiograma->otros_hallazgos}}" @endisset>
                              <input type="hidden" name="lista_examen_id" value="{{$listaExamen->id}}">
                              <input type="hidden" name="cita_id" value="{{$cita->id}}">
                          </div>
                        </div>


                      </div>
                      {{--<div class="col-md-6">--}}
                        {{--<div class="row">--}}

                          {{--<div class="" style="height:25vh;overflow:hidden;border:1px solid rgba(0,0,0,0.1);margin:10px;">--}}

                          {{--</div>--}}

                        {{--</div>--}}
                        {{--<div class="row">--}}
                          {{--<div class="col-md-3">--}}
                            {{--<a href="" class="btn btn-sm btn-block btn-primary" data-dismiss="modal">ADJUNTAR</a>--}}
                          {{--</div>--}}
                          {{--<div class="col-md-3">--}}
                            {{--<a href="" class="btn btn-sm btn-block btn-primary" data-dismiss="modal">PEGAR</a>--}}
                          {{--</div>--}}
                          {{--<div class="col-md-3">--}}
                            {{--<a href="" class="btn btn-sm btn-block btn-primary" data-dismiss="modal">LIMPIAR</a>--}}
                          {{--</div>--}}
                          {{--<div class="col-md-3">--}}
                              {{--<a href="" class="btn btn-sm btn-block btn-primary" data-dismiss="modal">V.REAL</a>--}}
                          {{--</div>--}}
                        {{--</div>--}}




                      {{--</div>--}}
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-md-12 text-right">
                          @isset($cita->electrocardiograma->id)
                            <button class="btn btn-sm btn-primary  registrarElectrocardiograma" tipo="Electrocardiograma_modificar" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDITAR</button>
                           @else
                            <button class="btn btn-sm btn-success registrarElectrocardiograma" tipo="Electrocardiograma_guardar" type="button">GUARDAR</button>
                          @endisset
                          <a href="" class="btn btn-sm  btn-info" data-dismiss="modal">DIAGNOSTICO</a>
                            <a href="" class="btn btn-sm  btn-warning" data-dismiss="modal">Volver</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
