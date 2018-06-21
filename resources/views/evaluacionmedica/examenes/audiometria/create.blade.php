<style media="screen">
#mdlaudiometria{
width: 90% !important;
}

.select2-container--default .select2-selection--single{
    border-radius: 0px;
    height: 34px;
    border: 1px solid #d2d6de !important;
}
</style>
<div class="modal fade" role="dialog" id="modal-audiometria">
    <div class="modal-dialog" id="mdlaudiometria" role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')


              <ul class="nav nav-pills">
                <li class="active"><a data-toggle="tab" href="#home">Inicio</a></li>
                <li><a data-toggle="tab" href="#menu1">Diagnostico</a></li>
              </ul>

                            <div class="tab-content">
                              <div id="home" class="tab-pane fade in active">
                            <form  id="formaudiometria">
                                <div class="modal-body ">
                                    {{csrf_field()}}
                                         @isset($cita->Audiometria->id)
                                          <input type="hidden" name="aduiometria_id" value="{{$cita->Audiometria->id}}">
                                         @endisset
                                        <input type="hidden" name="lista_examen_id" value="{{$listaExamen->id}}">
                                        <input type="hidden" name="cita_id" value="{{$cita->id}}">

                                    <div class="row form-horizontal">

                                          <div class="col-lg-4">
                                            <div class="col-md-12">
                                                <strong>   Sintomatologia Actual</strong>
                                            </div>
                                            <div class="col-lg-6">
                                              <div class="checkbox">
                                                  <label>
                                                    <input type="checkbox"  @isset($cita->Audiometria->acufenos) @if($cita->Audiometria->acufenos == '1') checked @else @endif  @endisset   value="1" name="acufenos">Acúfenos
                                                  </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                      <input type="checkbox"  @isset($cita->Audiometria->hipoacusia) @if($cita->Audiometria->hipoacusia == '1') checked @else  @endif  @endisset   value="1" name="hipoacusia">Hipoacusia
                                                    </label>
                                                  </div>
                                                  <div class="checkbox">
                                                      <label>
                                                        <input type="checkbox"  @isset($cita->Audiometria->exposicion_ruido) @if($cita->Audiometria->exposicion_ruido == '1') checked @else @endif  @endisset   value="1" name="exposicion_ruido">Exposicion reciente a ruido (14 horas)
                                                      </label>
                                                  </div>

                                            </div>
                                            <div class="col-lg-6">
                                              <div class="checkbox">
                                                  <label>
                                                    <input type="checkbox"  @isset($cita->Audiometria->vertigo) @if($cita->Audiometria->vertigo == '1') checked @else @endif  @endisset   value="1" name="vertigo"> Vertigo
                                                  </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                      <input type="checkbox"  @isset($cita->Audiometria->otalgia) @if($cita->Audiometria->otalgia == '1') checked @else @endif  @endisset   value="1" name="otalgia">Otalgia
                                                    </label>
                                                  </div>
                                                  <div class="checkbox">
                                                      <label>
                                                        <input type="checkbox"  @isset($cita->Audiometria->enfermedad_respiratorio) @if($cita->Audiometria->enfermedad_respiratorio == '1') checked @else @endif  @endisset   value="1" name="enfermedad_respiratorio">Enfermedad Tracto Respiratoria Alto Actual
                                                      </label>
                                                    </div>
                                            </div>
                                            <div class="col-lg-12">
                                              <div class="checkbox">
                                                  <label>
                                                    <input type="checkbox"  @isset($cita->Audiometria->antecedente_viaje) @if($cita->Audiometria->antecedente_viaje == '1') checked @else @endif  @endisset   value="1" name="antecedente_viaje">Antecedente de Viaje en las Ultimas horas
                                                  </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 form-inline" style="margin-top:5px;">

                                                      <div class="form-group">

                                                        <div class="input-group">
                                                          <div class="input-group-addon" style="border:none">
                                                                  <input type="checkbox"  @isset($cita->Audiometria->otros_sintomatologia_actual_estado) @if($cita->Audiometria->otros_sintomatologia_actual_estado == '1') checked @else @endif  @endisset   value="1" name="otros_sintomatologia_actual_estado" id="otroaudiometria">
                                                          </div>
                                                          <div class="input-group-addon" style="border:none">
                                                                        <label for="otroaudiometria">Otros</label>
                                                          </div>
                                                          <input type="text"  @isset($cita->Audiometria->otros_sintomatologia_actual) value="{{$cita->Audiometria->acufotros_sintomatologia_actualenos}}"  @endisset   name="otros_sintomatologia_actual" class="form-control">
                                                        </div>
                                                      </div>

                                            </div>
                                          </div>
                                          <div class="col-lg-4">
                                            <div class="col-lg-12">    <strong> Examen ORL</strong>
                                              </div>
                                              <div class="col-lg-6 form-inline">
                                                <div class="form-group" style="margin-left:10px;">
                                                    <label style="font-weight: lighter;margin-right:5px;">Nariz</label>
                                                    <select class="form-control" name="nariz">
                                                        <option value="1">VAL_UNO</option>
                                                    </select>
                                                </div>
                                                <div class="form-group" style="margin-left:10px;margin-top:5px;">
                                                    <label style="font-weight: lighter;margin-right:6px;">Oído</label>
                                                    <select class="form-control" name="oido">
                                                        <option value="1">VAL_UNO</option>
                                                    </select>
                                                </div>

                                              </div>
                                              <div class="col-lg-6 form-inline">

                                                <div class="form-group" style="margin-left:0px;">
                                                    <label style="font-weight: lighter;margin-right:5px;">Garganta</label>
                                                    <select class="form-control" name="garganta">
                                                        <option value="1">VAL_UNO</option>
                                                    </select>
                                                </div>
                                                <div class="form-group" style="margin-left:10px;margin-top:5px;">
                                                    <label style="font-weight: lighter;margin-right:6px;">&nbsp;</label>
                                                    <select class="form-control" name="" style="border:none;color:white;">
                                                        <option value="1">V</option>
                                                    </select>
                                                </div>

                                              </div>

                                              <div class="col-lg-12 form-horizontal" style="margin-top:5px;">
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight: lighter;">Otoscopia OD</label>
                                                    <div class="col-sm-8">
                                                      <select class="form-control" name="otoscopia_od">
                                                          <option value="1">VAL_UNO  </option>
                                                      </select>
                                                    </div>
                                                </div>
                                                <div class="form-group" style="margin-top:-8px;">
                                                    <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight: lighter;">Otoscopia OI</label>
                                                    <div class="col-sm-8">
                                                      <select class="form-control" name="otoscopia_oi">
                                                          <option value="1">VAL_UNO  </option>
                                                      </select>
                                                    </div>
                                                </div>

                                                </div>

                                          </div>
                                          <div class="col-lg-4">
                                            <div class="col-lg-12"> <strong> Datos de Audiometro</strong>
                                              </div>

                                              <div class="col-lg-12 form-horizontal">

                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight: lighter;">Marca</label>
                                                        <div class="col-sm-8">
                                                        <input type="checkbox"  @isset($cita->Audiometria->marca) value="{{$cita->Audiometria->marca}}"  @endisset    name="marca" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group" style="margin-top:-8px;">
                                                        <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight: lighter;">Modelo</label>
                                                        <div class="col-sm-8">
                                                        <input type="checkbox"  @isset($cita->Audiometria->modelo) value="{{$cita->Audiometria->modelo}}"  @endisset    name="modelo" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group" style="margin-top:-8px;">
                                                        <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight: lighter;">Calibración</label>
                                                        <div class="col-sm-8">
                                                        <input type="checkbox"  @isset($cita->Audiometria->calibracion) value="{{$cita->Audiometria->calibracion}}"  @endisset    name="calibracion" class="form-control">
                                                        </div>
                                                    </div>

                                                     <div class="form-group" style="margin-top:-8px;">
                                                        <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight: lighter;">Personal</label>
                                                        <div class="col-sm-8">
                                                          <select name="personales_id" id="personal_audiometria" style="width:100% !important;" class="form-control">
                                                            @foreach ($personales as $key => $value)
                                                              <option value="{{$key}}">{{$value}}</option>
                                                            @endforeach
                                                          </select>
                                                        </div>
                                                    </div>
                                                </div>

                                          </div>
                                          <div class="col-lg-12">
                                              <div class="col-lg-6">
                                                <h6><strong>Oido Derecho</strong> </h6>
                                                <div class="col-lg-12">
                                                  <div class="col-lg-1 text-center">
                                                    <br> <input type="text"   style="width:30px;border:white;"   placeholder="VA"  readonly>
                                                  </div>
                                                  <div class="col-lg-1 text-center">
                                                      125  <br> <input type="text"  @isset($cita->Audiometria->od_va1) value="{{$cita->Audiometria->od_va1}}"  @endisset   name="od_va1" id="od_va1"  style="width:30px;">
                                                  </div>
                                                  <div class="col-lg-1 text-center">
                                                      250 <br> <input type="text"  @isset($cita->Audiometria->od_va2) value="{{$cita->Audiometria->od_va2}}"  @endisset   name="od_va2" id="od_va2"  style="width:30px;">
                                                  </div>
                                                  <div class="col-lg-1 text-center">
                                                      500 <br> <input type="text"  @isset($cita->Audiometria->od_va3) value="{{$cita->Audiometria->od_va3}}"  @endisset   name="od_va3" id="od_va3"  style="width:30px;">
                                                  </div>
                                                  <div class="col-lg-1 text-center">
                                                      1000 <br> <input type="text"  @isset($cita->Audiometria->od_va4) value="{{$cita->Audiometria->od_va4}}"  @endisset   name="od_va4" id="od_va4"  style="width:30px;">
                                                  </div>
                                                  <div class="col-lg-1 text-center">
                                                      2000 <br> <input type="text"  @isset($cita->Audiometria->od_va5) value="{{$cita->Audiometria->od_va5}}"  @endisset   name="od_va5" id="od_va5"  style="width:30px;">
                                                  </div>
                                                  <div class="col-lg-1 text-center">
                                                      3000 <br> <input type="text"  @isset($cita->Audiometria->od_va6) value="{{$cita->Audiometria->od_va6}}"  @endisset   name="od_va6" id="od_va6"  style="width:30px;">
                                                  </div>
                                                  <div class="col-lg-1 text-center">
                                                      4000 <br> <input type="text"  @isset($cita->Audiometria->od_va7) value="{{$cita->Audiometria->od_va7}}"  @endisset   name="od_va7" id="od_va7"  style="width:30px;">
                                                  </div>
                                                  <div class="col-lg-1 text-center">
                                                      6000 <br> <input type="text"  @isset($cita->Audiometria->od_va8) value="{{$cita->Audiometria->od_va8}}"  @endisset   name="od_va8" id="od_va8"  style="width:30px;">
                                                  </div>
                                                  <div class="col-lg-1 text-center">
                                                      8000 <br> <input type="text"  @isset($cita->Audiometria->od_va9) value="{{$cita->Audiometria->od_va9}}"  @endisset   name="od_va9" id="od_va9"  style="width:30px;">
                                                  </div>
                                                </div>
                                                <div class="col-lg-12">
                                                  <div class="col-lg-1 text-center">
                                                 <input type="text"  name="od_vo1"   style="margin-top: 2.5px;width:30px;border:white;" placeholder="VO"  readonly>
                                                  </div>
                                                  <div class="col-lg-1 text-center">
                                                 <input type="text"  @isset($cita->Audiometria->od_vo1) value="{{$cita->Audiometria->od_vo1}}"  @endisset   name="od_vo1" id="od_vo1"  style="margin-top: 2.5px;width:30px;">
                                                  </div>
                                                  <div class="col-lg-1 text-center">
                                                     <input type="text"  @isset($cita->Audiometria->od_vo2) value="{{$cita->Audiometria->od_vo2}}"  @endisset   name="od_vo2" id="od_vo2"    style="margin-top: 2.5px;width:30px;">
                                                  </div>
                                                  <div class="col-lg-1 text-center">
                                                    <input type="text"  @isset($cita->Audiometria->od_vo3) value="{{$cita->Audiometria->od_vo3}}"  @endisset   name="od_vo3" id="od_vo3"   style="margin-top: 2.5px;width:30px;">
                                                  </div>
                                                  <div class="col-lg-1 text-center">
                                                       <input type="text"  @isset($cita->Audiometria->od_vo4) value="{{$cita->Audiometria->od_vo4}}"  @endisset   name="od_vo4"  id="od_vo4"  style="margin-top: 2.5px;width:30px;">
                                                  </div>
                                                  <div class="col-lg-1 text-center">
                                                       <input type="text"  @isset($cita->Audiometria->od_vo5) value="{{$cita->Audiometria->od_vo5}}"  @endisset   name="od_vo5"  id="od_vo5"   style="margin-top: 2.5px;width:30px;">
                                                  </div>
                                                  <div class="col-lg-1 text-center">
                                                      <input type="text"  @isset($cita->Audiometria->od_vo6) value="{{$cita->Audiometria->od_vo6}}"  @endisset   name="od_vo6"  id="od_vo6"   style="margin-top: 2.5px;width:30px;">
                                                  </div>
                                                  <div class="col-lg-1 text-center">
                                                    <input type="text"  @isset($cita->Audiometria->od_vo7) value="{{$cita->Audiometria->od_vo7}}"  @endisset   name="od_vo7" id="od_vo7"   style="margin-top: 2.5px;width:30px;">
                                                  </div>
                                                  <div class="col-lg-1 text-center">
                                                    <input type="text"  @isset($cita->Audiometria->od_vo8) value="{{$cita->Audiometria->od_vo8}}"  @endisset   name="od_vo8" id="od_vo8"   style="margin-top: 2.5px;width:30px;">
                                                  </div>
                                                  <div class="col-lg-1 text-center">
                                                    <input type="text"  @isset($cita->Audiometria->od_vo9) value="{{$cita->Audiometria->od_vo9}}"  @endisset   name="od_vo9" id="od_vo9"   style="margin-top: 2.5px;width:30px;">
                                                  </div>
                                                </div>
                                                <div class="col-lg-12">
                                                        <canvas id="oido_derecho" width="800" height="450"></canvas>
                                                </div>
                                              </div>

                                              <div class="col-lg-6">
                                                <h6><strong>Oido Izquierdo</strong></h6>
                                                <div class="col-lg-12">
                                                  <div class="col-lg-1 text-center">
                                                   &nbsp;  <br> <input type="text"   name=""   style="width:30px;border:white;"  readonly placeholder="VA">
                                                  </div>
                                                  <div class="col-lg-1 text-center">
                                                      125  <br> <input type="text"  @isset($cita->Audiometria->oi_va1) value="{{$cita->Audiometria->oi_va1}}"  @endisset   name="oi_va1" id="oi_va1"  style="width:30px;">
                                                  </div>
                                                  <div class="col-lg-1 text-center">
                                                      250 <br> <input type="text"  @isset($cita->Audiometria->oi_va2) value="{{$cita->Audiometria->oi_va2}}"  @endisset   name="oi_va2"  id="oi_va2"  style="width:30px;">
                                                  </div>
                                                  <div class="col-lg-1 text-center">
                                                      500 <br> <input type="text"  @isset($cita->Audiometria->oi_va3) value="{{$cita->Audiometria->oi_va3}}"  @endisset   name="oi_va3" id="oi_va3"  style="width:30px;">
                                                  </div>
                                                  <div class="col-lg-1 text-center">
                                                      1000 <br> <input type="text"  @isset($cita->Audiometria->oi_va4) value="{{$cita->Audiometria->oi_va4}}"  @endisset   name="oi_va4"  id="oi_va4"  style="width:30px;">
                                                  </div>
                                                  <div class="col-lg-1 text-center">
                                                      2000 <br> <input type="text"  @isset($cita->Audiometria->oi_va5) value="{{$cita->Audiometria->oi_va5}}"  @endisset   name="oi_va5"  id="oi_va5"  style="width:30px;">
                                                  </div>
                                                  <div class="col-lg-1 text-center">
                                                      3000 <br> <input type="text"  @isset($cita->Audiometria->oi_va6) value="{{$cita->Audiometria->oi_va6}}"  @endisset   name="oi_va6"  id="oi_va6"  style="width:30px;">
                                                  </div>
                                                  <div class="col-lg-1 text-center">
                                                      4000 <br> <input type="text"  @isset($cita->Audiometria->oi_va7) value="{{$cita->Audiometria->oi_va7}}"  @endisset   name="oi_va7"  id="oi_va7"  style="width:30px;">
                                                  </div>
                                                  <div class="col-lg-1 text-center">
                                                      6000 <br> <input type="text"  @isset($cita->Audiometria->oi_va8) value="{{$cita->Audiometria->oi_va8}}"  @endisset   name="oi_va8"  id="oi_va8"  style="width:30px;">
                                                  </div>
                                                  <div class="col-lg-1 text-center">
                                                      8000 <br> <input type="text"  @isset($cita->Audiometria->oi_va9) value="{{$cita->Audiometria->oi_va9}}"  @endisset   name="oi_va9"  id="oi_va9"  style="width:30px;">
                                                  </div>
                                                </div>
                                                <div class="col-lg-12">
                                                  <div class="col-lg-1 text-center">
                                                 <input type="text"  style="margin-top: 2.5px;width:30px;border:white;" readonly placeholder="VO">
                                                  </div>
                                                  <div class="col-lg-1 text-center">
                                                 <input type="text"  @isset($cita->Audiometria->oi_vo1) value="{{$cita->Audiometria->oi_vo1}}"  @endisset   name="oi_vo1" id="oi_vo1"  style="margin-top: 2.5px;width:30px;">
                                                  </div>
                                                  <div class="col-lg-1 text-center">
                                                     <input type="text"  @isset($cita->Audiometria->oi_vo2) value="{{$cita->Audiometria->oi_vo2}}"  @endisset   name="oi_vo2" id="oi_vo2"  style="margin-top: 2.5px;width:30px;">
                                                  </div>
                                                  <div class="col-lg-1 text-center">
                                                    <input type="text"  @isset($cita->Audiometria->oi_vo3) value="{{$cita->Audiometria->oi_vo3}}"  @endisset   name="oi_vo3" id="oi_vo3"  style="margin-top: 2.5px;width:30px;">
                                                  </div>
                                                  <div class="col-lg-1 text-center">
                                                       <input type="text"  @isset($cita->Audiometria->oi_vo4) value="{{$cita->Audiometria->oi_vo4}}"  @endisset   name="oi_vo4" id="oi_vo4"  style="margin-top: 2.5px;width:30px;">
                                                  </div>
                                                  <div class="col-lg-1 text-center">
                                                       <input type="text"  @isset($cita->Audiometria->oi_vo5) value="{{$cita->Audiometria->oi_vo5}}"  @endisset   name="oi_vo5" id="oi_vo5"  style="margin-top: 2.5px;width:30px;">
                                                  </div>
                                                  <div class="col-lg-1 text-center">
                                                      <input type="text"  @isset($cita->Audiometria->oi_vo6) value="{{$cita->Audiometria->oi_vo6}}"  @endisset   name="oi_vo6" id="oi_vo6"  style="margin-top: 2.5px;width:30px;">
                                                  </div>
                                                  <div class="col-lg-1 text-center">
                                                    <input type="text"  @isset($cita->Audiometria->oi_vo7) value="{{$cita->Audiometria->oi_vo7}}"  @endisset   name="oi_vo7" id="oi_vo7"  style="margin-top: 2.5px;width:30px;">
                                                  </div>
                                                  <div class="col-lg-1 text-center">
                                                    <input type="text"  @isset($cita->Audiometria->oi_vo8) value="{{$cita->Audiometria->oi_vo8}}"  @endisset   name="oi_vo8" id="oi_vo8"  style="margin-top: 2.5px;width:30px;">
                                                  </div>
                                                  <div class="col-lg-1 text-center">
                                                    <input type="text"  @isset($cita->Audiometria->oi_vo9) value="{{$cita->Audiometria->oi_vo9}}"  @endisset   name="oi_vo9" id="oi_vo9"  style="margin-top: 2.5px;width:30px;">
                                                  </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <canvas id="oido_izquierdo" width="800" height="450"></canvas>
                                                </div>
                                              </div>
                                          </div>
                                    </div>

                                </div>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <button type="button" style="margin-left:2%;" class="btn btn-sm btn-info" id="grafica_audiometria" name="button">Realizar Grafica</button>
                                    </div>
                                      <div class="col-md-6 text-right" >
                                        @isset($cita->Audiometria->id)
                                          <button class="btn btn-sm btn-primary audiometria" tipo="audiometria_modificar" style="margin-right:2%;" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDITAR</button>
                                         @else
                                          <button class="btn btn-sm btn-success audiometria" tipo="audiometria_guardar" style="margin-right:2%;"  type="button">GUARDAR</button>
                                        @endisset
                                      </div>
                                  </div>
                              </form>
                              </div>
                              <div id="menu1" class="tab-pane fade">
                                <form id="formdiagnosticoaudiometria">
                                    @csrf
                                    @isset($cita->diagnosticoaudiometria->id)
                                     <input type="hidden" name="diagnosticoaudiometria_id" value="{{$cita->diagnosticoaudiometria->id}}">
                                    @endisset
                                   <input type="hidden" name="lista_examen_id" value="{{$listaExamen->id}}">
                                   <input type="hidden" name="cita_id" value="{{$cita->id}}">
                                <div class="row">
                                    <div class="col-md-6 text-center">
                                        <h5> <strong> CONSULTAS OCUPACIONALES - REGISTRO DE EXAMEN</strong> </h5>

                                        <div class="col-md-12 text-left">
                                          <h6>Examenes Auxiliares</h6>
                                        <textarea name="examenes_auxiliares" rows="3" cols="750" class="form-control" style="resize:none;">@isset($cita->diagnosticoaudiometria->examenes_auxiliares){{$cita->diagnosticoaudiometria->examenes_auxiliares}}  @endisset</textarea>
                                        </div>
                                        <div class="col-md-12 text-left">
                                          <h6>Observaciones</h6>
                                        <textarea name="observaciones" rows="3" cols="750" class="form-control" style="resize:none;">@isset($cita->diagnosticoaudiometria->observaciones){{$cita->diagnosticoaudiometria->observaciones}}  @endisset</textarea>
                                        </div>
                                        <div class="col-md-12 text-left">
                                          <h6 style="color:red">DIAGNOSTICOS CIE10 Y MEDICO</h6>
                                        <textarea name="diagnosticos_cie10_medico" rows="3" cols="750" class="form-control" style="resize:none;">@isset($cita->diagnosticoaudiometria->diagnosticos_cie10_medico){{$cita->diagnosticoaudiometria->diagnosticos_cie10_medico}}  @endisset</textarea>
                                        </div>
                                        <div class="col-md-12 text-left">
                                          <h6>Conclusiones</h6>
                                        <textarea name="concluciones" rows="3" cols="750" class="form-control" style="resize:none;">@isset($cita->diagnosticoaudiometria->concluciones){{$cita->diagnosticoaudiometria->concluciones}}  @endisset</textarea>
                                        </div>
                                        <div class="col-md-12 text-left">
                                          <h6>Recomendaciones</h6>
                                        <textarea name="recomendaciones" rows="3" cols="750" class="form-control" style="resize:none;">@isset($cita->diagnosticoaudiometria->recomendaciones){{$cita->diagnosticoaudiometria->recomendaciones}}  @endisset</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-left">
                                        <h5 class="text-center"> <strong> DIAGNOSTICOS EMA</strong> </h5>
                                                    <div class="checkbox">
                                                       <label>
                                                         <input type="checkbox" name="audiometria_normal" value="1" @isset($cita->diagnosticoaudiometria->audiometria_normal) @if($cita->diagnosticoaudiometria->audiometria_normal=="1") checked @else @endif   @endisset>Z01.1 -AUDIOMETRIA NORMAL
                                                       </label>
                                                     </div>

                                                     <div class="checkbox">
                                                      <label>
                                                        <input type="checkbox" name="hipoacusia_neurosensorial_bilateral" value="1" @isset($cita->diagnosticoaudiometria->hipoacusia_neurosensorial_bilateral) @if($cita->diagnosticoaudiometria->hipoacusia_neurosensorial_bilateral=="1") checked @else @endif   @endisset>H90.3 -HIPOACUSIA NEUROSENSORIAL BILATERAL
                                                      </label>
                                                    </div>
                                                    <div class="checkbox">
                                                     <label>
                                                       <input type="checkbox" name="hipoacusia_neurosensorial_derecha" value="1" @isset($cita->diagnosticoaudiometria->hipoacusia_neurosensorial_derecha) @if($cita->diagnosticoaudiometria->hipoacusia_neurosensorial_derecha=="1") checked @else @endif   @endisset>H90.4 -HIPOACUSIA NEUROSENSORIAL DERECHA
                                                     </label>
                                                   </div>
                                                   <div class="checkbox">
                                                    <label>
                                                      <input type="checkbox" name="hipoacusia_neurosensorial_izquierda" value="1" @isset($cita->diagnosticoaudiometria->hipoacusia_neurosensorial_izquierda) @if($cita->diagnosticoaudiometria->hipoacusia_neurosensorial_izquierda=="1") checked @else @endif   @endisset>H90.4 -HIPOACUSIA NEUROSENSORIAL IZQUIERDA
                                                    </label>
                                                  </div>
                                                  <div class="checkbox">
                                                   <label>
                                                     <input type="checkbox" name="hipoacusia_conductiva_Bilateral" value="1" @isset($cita->diagnosticoaudiometria->hipoacusia_conductiva_Bilateral) @if($cita->diagnosticoaudiometria->hipoacusia_conductiva_Bilateral=="1") checked @else @endif   @endisset>H90.0 -HIPOACUSIA CONDUCTIVA BILATERAL
                                                   </label>
                                                 </div>
                                                 <div class="checkbox">
                                                  <label>
                                                    <input type="checkbox" name="hipoacusia_conductiva_derecha" value="1" @isset($cita->diagnosticoaudiometria->hipoacusia_conductiva_derecha) @if($cita->diagnosticoaudiometria->hipoacusia_conductiva_derecha=="1") checked @else @endif   @endisset>H90.1 -HIPOACUSIA CONDUCTIVA DERECHA
                                                  </label>
                                                </div>
                                                <div class="checkbox">
                                                 <label>
                                                   <input type="checkbox" name="hipoacusia_conductiva_izquierda" value="1" @isset($cita->diagnosticoaudiometria->hipoacusia_conductiva_izquierda) @if($cita->diagnosticoaudiometria->hipoacusia_conductiva_izquierda=="1") checked @else @endif   @endisset>H90.1 -HIPOACUSIA CONDUCTIVA IZQUIERDA
                                                 </label>
                                               </div>
                                               <div class="checkbox">
                                                <label>
                                                  <input type="checkbox" name="hipoacusia_mixta_Bilateral" value="1" @isset($cita->diagnosticoaudiometria->hipoacusia_mixta_Bilateral) @if($cita->diagnosticoaudiometria->hipoacusia_mixta_Bilateral=="1") checked @else @endif   @endisset>H90.6 -HIPOACUSIA MIXTA BILATERAL
                                                </label>
                                              </div>
                                              <div class="checkbox">
                                               <label>
                                                 <input type="checkbox" name="hipoacusia_mixta_derecha" value="1" @isset($cita->diagnosticoaudiometria->hipoacusia_mixta_derecha) @if($cita->diagnosticoaudiometria->hipoacusia_mixta_derecha=="1") checked @else @endif   @endisset>H90.7 -HIPOACUSIA MIXTA DERECHA
                                               </label>
                                             </div>
                                             <div class="checkbox">
                                              <label>
                                                <input type="checkbox" name="hipoacusia_mixta_izquierda" value="1" @isset($cita->diagnosticoaudiometria->hipoacusia_mixta_izquierda) @if($cita->diagnosticoaudiometria->hipoacusia_mixta_izquierda=="1") checked @else @endif   @endisset>H90.7 -HIPOACUSIA MIXTA IZQUIERDA
                                              </label>
                                            </div>
                                            <div class="checkbox">
                                             <label>
                                               <input type="checkbox" name="alteracion_no_inducida_por_ruido" value="1" @isset($cita->diagnosticoaudiometria->alteracion_no_inducida_por_ruido) @if($cita->diagnosticoaudiometria->alteracion_no_inducida_por_ruido=="1") checked @else @endif   @endisset>R91.9 -ALTERACION NO INDUCIDA POR RUIDO
                                             </label>
                                           </div>
                                           <div class="checkbox">
                                            <label>
                                              <input type="checkbox" name="descartar_trauma_acustico_leve" value="1" @isset($cita->diagnosticoaudiometria->descartar_trauma_acustico_leve) @if($cita->diagnosticoaudiometria->descartar_trauma_acustico_leve=="1") checked @else @endif   @endisset>R83.3 -DESCARTAR TRAUMA ACUSTICO LEVE
                                            </label>
                                          </div>
                                          <div class="checkbox">
                                           <label>
                                             <input type="checkbox" name="descartar_trauma_acustico_avanzado" value="1" @isset($cita->diagnosticoaudiometria->descartar_trauma_acustico_avanzado) @if($cita->diagnosticoaudiometria->descartar_trauma_acustico_avanzado=="1") checked @else @endif   @endisset>R83.3 -DESCARTAR TRAUMA ACUSTICO AVANZADO
                                           </label>
                                         </div>
                                         <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="descartar_danio_acustico_leve" value="1" @isset($cita->diagnosticoaudiometria->descartar_danio_acustico_leve) @if($cita->diagnosticoaudiometria->descartar_danio_acustico_leve=="1") checked @else @endif   @endisset>R83.3 -DESCARTAR DAÑO ACUSTICO INDUCIDO POR RUIDO LEVE
                                          </label>
                                        </div>
                                        <div class="checkbox">
                                         <label>
                                           <input type="checkbox" name="descartar_danio_acustico_moderado" value="1" @isset($cita->diagnosticoaudiometria->descartar_danio_acustico_moderado) @if($cita->diagnosticoaudiometria->descartar_danio_acustico_moderado=="1") checked @else @endif   @endisset>R83.3 -DESCARTAR DAÑO ACUSTICO INDUCIDO POR RUIDO MODERADO
                                         </label>
                                       </div>
                                       <div class="checkbox">
                                        <label>
                                          <input type="checkbox" name="descartar_danio_acustico_avanzado" value="1" @isset($cita->diagnosticoaudiometria->descartar_danio_acustico_avanzado) @if($cita->diagnosticoaudiometria->descartar_danio_acustico_avanzado=="1") checked @else @endif   @endisset>R83.3 -DESCARTAR DAÑO ACUSTICO INDUCIDO POR RUIDO AVANZADO
                                        </label>
                                      </div>
                                      <div class="checkbox">
                                       <label>
                                         <input type="checkbox" name="cambio_significativo_positivo" value="1" @isset($cita->diagnosticoaudiometria->cambio_significativo_positivo) @if($cita->diagnosticoaudiometria->cambio_significativo_positivo=="1") checked @else @endif   @endisset>R93 -CAMBIO SIGNIFICATIVO (STS) POSITIVO
                                       </label>
                                     </div>
                                     <div class="checkbox">
                                      <label>
                                        <input type="checkbox" name="audiometria_pendiente" value="1" @isset($cita->diagnosticoaudiometria->audiometria_pendiente) @if($cita->diagnosticoaudiometria->audiometria_pendiente=="1") checked @else @endif   @endisset>Z53.8 -AUDIOMETRIA PENDIENTE
                                      </label>
                                    </div>
                                    <div class="checkbox">
                                     <label>
                                       <input type="checkbox" name="repetir_audiometria" value="1" @isset($cita->diagnosticoaudiometria->repetir_audiometria) @if($cita->diagnosticoaudiometria->repetir_audiometria=="1") checked @else @endif   @endisset>Z13.9 -REPETIR AUDIOMETRIA
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
                                    <div class="col-md-12 text-right" >
                                      @isset($cita->diagnosticoaudiometria->id)
                                        <button class="btn btn-sm btn-primary diagnosticoaudiometria" tipo="diagnosticoaudiometria_modificar" style="margin-right:2%;" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDITAR</button>
                                       @else
                                        <button class="btn btn-sm btn-success diagnosticoaudiometria" tipo="diagnosticoaudiometria_guardar" style="margin-right:2%;"  type="button">GUARDAR</button>
                                      @endisset
                                    </div>
                                </div>

                                </form>
                              </div>
                            </div>



            <div class="modal-footer">
            </div>

        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
<script>
var od1=1500;
$(document).ready(function() {
  $('#personal_audiometria').select2({
    minimumResultsForSearch: 5,
    // placeholder: 'Seleccione un paciente | filtre por DNI',
//    url = window.location.protocol + "//" + window.location.host+'/personal/buscarpersonal'
  ajax: {
      dataType: 'json',
      url: window.location.protocol + "//" + window.location.host+'/personal/buscarpersonal',
      delay: 200,
      data: function(params) {
          return {
              term: params.term
          }
      },
      processResults: function (data, page) {
          return {
              results: data
          };
      }
  }
});

});
var grafico_izquierdo;
var grafico_derecho;
var corcheteIzq = new Image(20,20);
corcheteIzq.src = window.location.protocol+"//"+window.location.host+"/img/simbolos/corchete_izq.png";

var corcheteDer = new Image(20,20);
corcheteDer.src = window.location.protocol+"//"+window.location.host+"/img/simbolos/corchete_der.png";

var circulo = new Image(20,20);
circulo.src = window.location.protocol+"//"+window.location.host+"/img/simbolos/circulo.png";

var equis = new Image(20,20);
equis.src = window.location.protocol+"//"+window.location.host+"/img/simbolos/equis.png";
$('#grafica_audiometria').on('click',function(e){

grafica_oido_derecho($('#od_va1').val(),$('#od_va2').val(),$('#od_va3').val(),$('#od_va4').val(),$('#od_va5').val(),
$('#od_va6').val(),$('#od_va7').val(),$('#od_va8').val(),$('#od_va9').val(),
$('#od_vo1').val(),$('#od_vo2').val(),$('#od_vo3').val(),$('#od_vo4').val(),
$('#od_vo5').val(),$('#od_vo6').val(),$('#od_vo7').val(),$('#od_vo8').val(),$('#od_vo9').val());


grafica_oido_izquierdo($('#oi_va1').val(),$('#oi_va2').val(),$('#oi_va3').val(),$('#oi_va4').val(),$('#oi_va5').val(),
$('#oi_va6').val(),$('#oi_va7').val(),$('#oi_va8').val(),$('#oi_va9').val(),
$('#oi_vo1').val(),$('#oi_vo2').val(),$('#oi_vo3').val(),$('#oi_vo4').val(),
$('#oi_vo5').val(),$('#oi_vo6').val(),$('#oi_vo7').val(),$('#oi_vo8').val(),$('#oi_vo9').val());


});

function grafica_oido_izquierdo(oiva1,oiva2,oiva3,oiva4,oiva5,oiva6,oiva7,oiva8,oiva9,oivo1,oivo2,oivo3,oivo4,oivo5,oivo6,oivo7,oivo8,oivo9)
{

  grafico_izquierdo = new Chart(document.getElementById("oido_izquierdo"), {
    type: 'line',
    data: {
        labels: ["125", "250", "500", "1000", "2000", "3000","4000","6000","8000","9000"],
      datasets: [{
          data: [oiva1,oiva2,oiva3,oiva4,oiva5,oiva6,oiva7,oiva8,oiva9],
          label: "VA",
          borderColor: "rgba(177, 54, 36, 1)",
          fill: false,
          pointRadius: 5,
          borderWidth: 2,
          pointStyle: equis
        }, {
          data: [oivo1,oivo2,oivo3,oivo4,oivo5,oivo6,oivo7,oivo8,oivo9],
          label: "VO",
          borderColor: "#8e5ea2",
          fill: false,
          pointRadius: 5,
          pointStyle: corcheteIzq
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'AUDIOMETRIA OIDO IZQUIERDO'
      }
    }
  });


}


function grafica_oido_derecho(oiva1,oiva2,oiva3,oiva4,oiva5,oiva6,oiva7,oiva8,oiva9,oivo1,oivo2,oivo3,oivo4,oivo5,oivo6,oivo7,oivo8,oivo9)
{
    grafico_derecho = new Chart(document.getElementById("oido_derecho"), {
    type: 'line',
    data: {
        labels: ["125", "250", "500", "1000", "2000", "3000","4000","6000","8000","9000"],
      datasets: [{
          data: [oiva1,oiva2,oiva3,oiva4,oiva5,oiva6,oiva7,oiva8,oiva9],
          label: "VA",
          lineTension: 0,
          fill: false,
          borderColor: 'orange',
          backgroundColor: 'transparent',
          borderDash: [1, 10],
          pointBorderColor: 'orange',
          pointBackgroundColor: 'rgba(255,150,0,0.5)',
          pointRadius: 5,
          pointHoverRadius: 10,
          pointHitRadius: 10,
          pointBorderWidth: 2,
          pointStyle: circulo
        }, {
          data: [oivo1,oivo2,oivo3,oivo4,oivo5,oivo6,oivo7,oivo8,oivo9],
          label: "VO",
          borderColor: "#8e5ea2",
          fill: false,
          pointStyle: corcheteDer
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'AUDIOMETRIA OIDO DERECHO'
      }
    }
  });


}





</script>
