
{{-- <h3>PERSONALES UNO</h3> --}}
<form class="" action="index.html" method="post" id="registrar_antecedente_personal_dos">

  @csrf
<div class="col-md-12">
  <div class="row form-group">
    <div class="col-md-2">
    </div>
    <div class="col-md-4">
    </div>
    <div class="col-md-6 text-right">
      @isset($paciente->antecendeDosPersonal)
        <button type="button" name="button" class="btn btn-sm btn-warning conformidadapdos" tipo="actualizardos">   Actualizar </button>
        <input type="hidden" name="antecedentesdos_id" value="{{$paciente->antecendeDosPersonal->id}}">
      @else
      <button type="button" name="button" class="btn btn-sm btn-success conformidadapdos" tipo="registrardos">Guardar</button>
      @endisset
    </div>
  </div>
<input type="hidden" name="paciente_id" value="{{$cita->paciente->id}}">

  <div class="box box-default">
      <div class="box-header with-border">Información de Paciente
          <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse">
                  <i class="fa fa-plus"></i>
              </button>
          </div>
      </div>
      <div class="box-body">
          <div class="row col-md-12">

              <div class="row form-group">
                <div class="col-md-3">
                  <div class="input-group">
                    <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                        <input type="checkbox" aria-label="" name="tuberculosis" id="tuberculosis" value="1" @isset($paciente->antecendeDosPersonal->tuberculosis) checked @endisset onclick="activardos(this);">
                    </span>
                    <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Tuberculosis</span>
                    {{-- <input type="text" class="form-control" aria-label="..."> --}}
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="input-group">
                    <span  class="span-width input-group-addon">Año Dx</span>
                    <input type="text" class="form-control" aria-label="..." name="txttuberculosis" id="txttuberculosis"  @isset($paciente->antecendeDosPersonal->tuberculosis_anio_dx)  value="{{$paciente->antecendeDosPersonal->tuberculosis_anio_dx}}" @else readonly @endisset >
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="input-group ">

                    <span class="input-group-addon span-width">Tiempo Tratamiento en meses</span>
                    <select
                    @isset($paciente->antecendeDosPersonal->tuberculosis)
                        @else
                          disabled
                        @endisset  class="form-control"    name="cbotuberculosis" id="cbotuberculosis">
                          @isset($paciente->antecendeDosPersonal->tuberculosis)
                        <option value="1" @if($paciente->antecendeDosPersonal->tuberculosis_meses_tratamiento == "1") selected @else  @endif >OPTION 1</option>
                        @else
                          <option value="1">OPTION 1</option>
                          @endisset
                      </select>
                  </div>
                </div>
              </div>

              <div class="row form-group ">
                <div class="col-md-3">
                  <div class="input-group">
                    <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                        <input type="checkbox" aria-label=""  onclick="activardos(this);" name="hepatitis" id="hepatitis" value="1" @isset($paciente->antecendeDosPersonal->hepatitis) checked @endisset>
                    </span>
                    <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Hepatitis</span>
                    {{-- <input type="text" class="form-control" aria-label="..."> --}}
                  </div>
                </div>

                <div class="col-md-5">
                      <select   @isset($paciente->antecendeDosPersonal->hepatitis)
                            @else
                              disabled
                            @endisset  class="form-control" name="cbohepatitis"   id="cbohepatitis">
                            @isset($paciente->antecendeDosPersonal->hepatitis)
                          <option value="2" @if($paciente->antecendeDosPersonal->hepatitis_descripcion == "2") selected @else  @endif >NADA</option>
                          @else
                            <option value="2">NADA</option>
                              @endisset
                      </select>

                </div>

                <div class="col-md-4">
                  <div class="input-group">
                    <span class="span-width input-group-addon">Edad del Dx</span>
                    <input type="text" class="form-control" aria-label="..."  id="txthepatitis"  name="txthepatitis"  @isset($paciente->antecendeDosPersonal->hepatitis_edad) value="{{$paciente->antecendeDosPersonal->hepatitis_edad}}"  @else readonly @endisset >
                  </div>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-3">
                  <div class="input-group">
                    <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                        <input type="checkbox" aria-label="" onclick="activardos(this);" id="tifoidea"  name="tifoidea" value="1" @isset($paciente->antecendeDosPersonal->tifoidea) checked @endisset>
                    </span>
                    <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Tifoidea</span>
                    {{-- <input type="text" class="form-control" aria-label="..."> --}}
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="input-group">
                    <span class="span-width input-group-addon">Año Dx</span>
                    <input type="text" class="form-control" aria-label="..." id="txttifoidea"  name="txttifoidea"   @isset($paciente->antecendeDosPersonal->tifoidea_ano_dx) value="{{$paciente->antecendeDosPersonal->tifoidea_ano_dx}}"  @else readonly @endisset >
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="input-group">
                    <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                        <input type="checkbox" aria-label="" onclick="activardos(this);" id="brucelosis" name="brucelosis" value="1" @isset($paciente->antecendeDosPersonal->brucelosis) checked @endisset>
                    </span>
                    <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Brucelosis</span>
                    {{-- <input type="text" class="form-control" aria-label="..."> --}}
                  </div>

                </div>
                <div class="col-md-2">
                  <div class="input-group">
                    <span class="span-width input-group-addon">Año Dx</span>
                    <input type="text" class="form-control" aria-label="..." id="txtbrucelosis" name="txtbrucelosis" @isset($paciente->antecendeDosPersonal->brucelosis_anio_dx) value="{{$paciente->antecendeDosPersonal->brucelosis_anio_dx}}"  @else readonly @endisset  >
                  </div>
                </div>
                <div class="col-md-3">

                  <div class="input-group">
                    <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                        <input type="checkbox" aria-label=""  id="ulcerahepatica" name="ulcerahepatica" value="1" @isset($paciente->antecendeDosPersonal->ulcera_hepatica) checked @endisset>
                    </span>
                    <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Úlcera Hepática</span>
                    {{-- <input type="text" class="form-control" aria-label="..."> --}}
                  </div>
                </div>
              </div>

              <div class="row form-group">
                    <div class="col-md-4">
                      <div class="input-group ">
                        <span class="input-group-addon ">
                            <input type="checkbox" aria-label="" onclick="activardos(this);" id="convulsiones" name="convulsiones" value="1" @isset($paciente->antecendeDosPersonal->convulsiones) checked @endisset>
                        </span>
                        <span class="input-group-addon span-width">Convulsiones</span>
                        <input type="text" class="form-control" aria-label="..."  id="txtconvulsiones" name="txtconvulsiones"  @isset($paciente->antecendeDosPersonal->convulsiones_descripcion) value="{{$paciente->antecendeDosPersonal->convulsiones_descripcion}}"  @else readonly @endisset >
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="input-group">
                        <span class="span-width input-group-addon">Año Dx</span>
                        <input type="text" class="form-control" aria-label="..."  id="txtanio" name="txtanio"  @isset($paciente->antecendeDosPersonal->convulsiones_ano_dx) value="{{$paciente->antecendeDosPersonal->convulsiones_ano_dx}}"  @else readonly @endisset>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-group">
                        <span class="span-width input-group-addon">Tratamiento Actual</span>
                        <input type="text" class="form-control" aria-label="..." id="txtctratamientoactual"  name="txtctratamientoactual" @isset($paciente->antecendeDosPersonal->convulsiones_tratamiento_actual) value="{{$paciente->antecendeDosPersonal->convulsiones_tratamiento_actual}}"  @else readonly @endisset >
                      </div>
                    </div>
              </div>

              <div class="row form-group">
                    <div class="col-md-4">
                      <div class="input-group ">
                        <span class="input-group-addon ">
                            <input type="checkbox" aria-label="" onclick="activardos(this);" id="gastritis" name="gastritis" value="1" @isset($paciente->antecendeDosPersonal->gastritis) checked @endisset>
                        </span>
                        <span class="input-group-addon span-width">Gastritis</span>
                        <input type="text" class="form-control" aria-label="..."  id="txtgastritis" name="txtgastritis" @isset($paciente->antecendeDosPersonal->gastritis_descripcion) value="{{$paciente->antecendeDosPersonal->gastritis_descripcion}}"  @else readonly @endisset>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="input-group">
                        <span class="span-width input-group-addon">Año Dx</span>
                        <input type="text" class="form-control" aria-label="..."  id="txtganio" name="txtganio" @isset($paciente->antecendeDosPersonal->gastritis_ano_dx) value="{{$paciente->antecendeDosPersonal->gastritis_ano_dx}}"  @else readonly @endisset>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-group">
                        <span class="span-width input-group-addon">Tratamiento Actual</span>
                        <input type="text" class="form-control" aria-label="..." id="txtgtratamientoactual" name="txtgtratamientoactual"  @isset($paciente->antecendeDosPersonal->gastritis_tratamiento) value="{{$paciente->antecendeDosPersonal->gastritis_tratamiento}}"  @else readonly @endisset >
                      </div>
                    </div>
              </div>

          </div>
      </div>
  </div>





    <div class="box box-default">
        <div class="box-header with-border">Información de Paciente
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse">
                    <i class="fa fa-plus"></i>
                </button>
            </div>
        </div>
        <div class="box-body">
            <div class="row col-md-12">


                <div class="row form-group">
                      <div class="col-md-4">
                        <div class="input-group ">
                          <span class="input-group-addon ">
                              <input type="checkbox" aria-label="" onclick="activardos(this);" id="erge" name="erge" value="1" @isset($paciente->antecendeDosPersonal->erge) checked @endisset>
                          </span>
                          <span class="input-group-addon span-width">ERGE</span>
                          <input type="text" class="form-control" aria-label="..."  id="txterge" name="txterge" @isset($paciente->antecendeDosPersonal->erge_descripcion) value="{{$paciente->antecendeDosPersonal->erge_descripcion}}"  @else readonly @endisset>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="span-width input-group-addon">Año Dx</span>
                          <input type="text" class="form-control" aria-label="..."  id="txtergeanio" name="txtergeanio" @isset($paciente->antecendeDosPersonal->erge_ano_dx) value="{{$paciente->antecendeDosPersonal->erge_ano_dx}}"  @else readonly @endisset>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-group">
                          <span class="span-width input-group-addon">Tratamiento Actual</span>
                          <input type="text" class="form-control" aria-label="..."  id="txtergetratamientoactual" name="txtergetratamientoactual" @isset($paciente->antecendeDosPersonal->erge_tratamiento_actual) value="{{$paciente->antecendeDosPersonal->erge_tratamiento_actual}}"  @else readonly @endisset>
                        </div>
                      </div>
                </div>

                <div class="row form-group">
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" aria-label="" onclick="activardos(this);" id="urolitiasis" name="urolitiasis" value="1"  @isset($paciente->antecendeDosPersonal->urolitiasis) checked @endisset>
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Urolitiasis</span>
                          {{-- <input type="text" class="form-control" aria-label="..."> --}}
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="span-width input-group-addon">Año Dx</span>
                          <input type="text" class="form-control" aria-label="..."  id="txturolitiasisanio" name="txturolitiasisanio" @isset($paciente->antecendeDosPersonal->urolitiasis_ano_dx) value="{{$paciente->antecendeDosPersonal->urolitiasis_ano_dx}}"  @else readonly @endisset >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-group">
                          <span class="span-width input-group-addon">Tratamiento Actual</span>
                          <input type="text" class="form-control" aria-label="..."  id="txturolitiasisaniotratamientoactual" name="txturolitiasisaniotratamientoactual" @isset($paciente->antecendeDosPersonal->urolitiasis_tratamiento_actual) value="{{$paciente->antecendeDosPersonal->urolitiasis_tratamiento_actual}}"  @else readonly @endisset >
                        </div>
                      </div>
                </div>

                <div class="row form-group">
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" aria-label="" onclick="activardos(this);" name="herniainguinal" id="herniainguinal" value="1" @isset($paciente->antecendeDosPersonal->hernia_inguinal) checked @endisset >
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Hernia Inguinal</span>
                          {{-- <input type="text" class="form-control" aria-label="..."> --}}
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="input-group ">

                          <span class="input-group-addon span-width">Lado</span>
                          <select  @isset($paciente->antecendeDosPersonal->hernia_inguinal)
                                @else
                                  disabled
                                @endisset  class="form-control" name="cboherniainguinal" id="cboherniainguinal" >
                                @isset($paciente->antecendeDosPersonal->hernia_inguinal)
                                  <option value="1" @if($paciente->antecendeDosPersonal->hernia_inguinal_lado == "1") selected @else  @endif >OPTION</option>

                                @else
                                  <option value="1">OPTION</option>

                                @endisset
                            </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="span-width input-group-addon">Año Dx</span>
                          <input type="text" class="form-control" aria-label="..."  id="txtherniainguinal" name="txtherniainguinal"  @isset($paciente->antecendeDosPersonal->hernial_inguinal_ano_dx) value="{{$paciente->antecendeDosPersonal->hernial_inguinal_ano_dx}}"  @else readonly @endisset >
                        </div>
                      </div>
                </div>

                <div class="row form-group">
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" aria-label="" onclick="activardos(this);" id="herniaumbilical" name="herniaumbilical" value="1"  @isset($paciente->antecendeDosPersonal->hernia_umbilical) checked @endisset>
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Hernia Umbilical</span>
                          {{-- <input type="text" class="form-control" aria-label="..."> --}}
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="span-width input-group-addon">Año Dx</span>
                          <input type="text" class="form-control" aria-label="..." id="txtherniaumbilical"  name="txtherniaumbilical" @isset($paciente->antecendeDosPersonal->hernia_umbilical_ano_dx) value="{{$paciente->antecendeDosPersonal->hernia_umbilical_ano_dx}}"  @else readonly @endisset >
                        </div>
                      </div>
                </div>

                <div class="row form-group">
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" aria-label=""  onclick="activardos(this);" id="lumbalgia" name="lumbalgia" value="1" @isset($paciente->antecendeDosPersonal->lumbalgia) checked @endisset >
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Lumbalgia</span>
                          {{-- <input type="text" class="form-control" aria-label="..."> --}}
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="input-group ">

                          <span class="input-group-addon span-width">Lado</span>
                          <select   @isset($paciente->antecendeDosPersonal->lumbalgia)
                                @else
                                  disabled
                                @endisset  class="form-control"    id="cbolumbalgia" name="cbolumbalgia">
                                @isset($paciente->antecendeDosPersonal->lumbalgia)
                                  <option value="2" @if($paciente->antecendeDosPersonal->lumbalgia_lado == "2") selected @else  @endif >OPTION</option>

                                @else
                                  <option value="2"  >OPTION</option>

                                @endisset
                          </select>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="span-width input-group-addon">Año Dx</span>
                          <input type="text" class="form-control" aria-label="..." id="txtlumbalgiaanio" name="txtlumbalgiaanio" @isset($paciente->antecendeDosPersonal->lumbalgia_ano_dx) value="{{$paciente->antecendeDosPersonal->lumbalgia_ano_dx}}"  @else readonly @endisset >
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="input-group">
                          <span class="span-width input-group-addon">Frecuencia Anual</span>
                          <input type="text" class="form-control" aria-label="..." id="txtlumbalgiafrecuenciaanual" name="txtlumbalgiafrecuenciaanual" @isset($paciente->antecendeDosPersonal->lumbalgia_frecuencia_actual) value="{{$paciente->antecendeDosPersonal->lumbalgia_frecuencia_actual}}"  @else readonly @endisset >
                        </div>
                      </div>
                </div>

            </div>
        </div>
    </div>



      <div class="box box-default">
          <div class="box-header with-border">Información de Paciente
              <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse">
                      <i class="fa fa-plus"></i>
                  </button>
              </div>
          </div>
          <div class="box-body">
              <div class="row col-md-12">


                  <div class="row form-group">
                        <div class="col-md-12">
                          <div class="input-group">
                            <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                                <input type="checkbox" aria-label="" onclick="activardos(this);" id="otrostranstornoscolumna" name="otrostranstornoscolumna" value="1" @isset($paciente->antecendeDosPersonal->otros_transtornos_columna) checked @endisset>
                            </span>
                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Otros Transtornos en la Columna</span>
                         <input type="text" class="form-control" aria-label="..."  id="txtotrostranstornoscolumna" name="txtotrostranstornoscolumna" @isset($paciente->antecendeDosPersonal->otros_transtornos_columna_descripcion) value="{{$paciente->antecendeDosPersonal->otros_transtornos_columna_descripcion}}"  @else readonly @endisset >
                          </div>
                        </div>

                  </div>
                  <div class="row form-group">
                        <div class="col-md-12">
                          <div class="input-group">
                            <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                                <input type="checkbox" aria-label="" onclick="activardos(this);" id="desordenespiel" name="desordenespiel" value="1" @isset($paciente->antecendeDosPersonal->desordenes_piel) checked @endisset >
                            </span>
                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Desórdenes en la Piel</span>
                         <input type="text" class="form-control" aria-label="..."  id="txtdesordenespiel" name="txtdesordenespiel" @isset($paciente->antecendeDosPersonal->desordenes_piel_descripcion) value="{{$paciente->antecendeDosPersonal->desordenes_piel_descripcion}}"  @else readonly @endisset >
                          </div>
                        </div>

                  </div>

                  <div class="row form-group">
                        <div class="col-md-12">
                          <div class="input-group">
                            <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                                <input type="checkbox" aria-label="" onclick="activardos(this);" id="varicesmienbrosinferiores" name="varicesmienbrosinferiores" value="1" @isset($paciente->antecendeDosPersonal->varices_miembros_inferior) checked @endisset>
                            </span>
                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Várices en Miembros Inferiores</span>
                         <input type="text" class="form-control" aria-label="..."  id="txtvaricesmienbrosinferiores" name="txtvaricesmienbrosinferiores" @isset($paciente->antecendeDosPersonal->varices_miembros_inferior_descripcion) value="{{$paciente->antecendeDosPersonal->varices_miembros_inferior_descripcion}}"  @else readonly @endisset >
                          </div>
                        </div>

                  </div>

                  <div class="row form-group">
                        <div class="col-md-4">
                          <div class="input-group ">
                            <span class="input-group-addon ">
                                <input type="checkbox" aria-label="" onclick="activardos(this);" id="its" name="its" value="1" @isset($paciente->antecendeDosPersonal->its) checked @endisset>
                            </span>
                            <span class="input-group-addon span-width">ITS</span>
                            <input type="text" class="form-control" aria-label="..."  id="txtits" name="txtits" @isset($paciente->antecendeDosPersonal->its_descripcion) value="{{$paciente->antecendeDosPersonal->its_descripcion}}"  @else readonly @endisset >
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="input-group">
                            <span class="span-width input-group-addon">Año Dx</span>
                            <input type="text" class="form-control" aria-label="..."  id="txtitsanio" name="txtitsanio" @isset($paciente->antecendeDosPersonal->its_ano_dx) value="{{$paciente->antecendeDosPersonal->its_ano_dx}}"  @else readonly @endisset>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-group">
                            <span class="span-width input-group-addon">Tratamiento Actual</span>
                            <input type="text" class="form-control" aria-label="..."  id="txtitstratamientoactual" name="txtitstratamientoactual" @isset($paciente->antecendeDosPersonal->its_tratamiento_actual) value="{{$paciente->antecendeDosPersonal->its_tratamiento_actual}}"  @else readonly @endisset>
                          </div>
                        </div>
                  </div>

                  <div class="row form-group">
                        <div class="col-md-12">
                          <div class="input-group">
                            <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                                <input type="checkbox" aria-label="" onclick="activardos(this);" id="otros" name="otros_sintomas"  value="1" @isset($paciente->antecendeDosPersonal->otros_sintomas) checked @endisset>
                            </span>
                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Otros</span>
                         <input type="text" class="form-control" aria-label="..."  id="txtotros" name="txtotrosdescripcion" @isset($paciente->antecendeDosPersonal->otros_sintomas_descripcion) value="{{$paciente->antecendeDosPersonal->otros_sintomas_descripcion}}"  @else readonly @endisset>
                          </div>
                        </div>

                  </div>

                  <div class="row form-group">
                        <div class="col-md-12">
                          <div class="input-group">

                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Sintomatología de los Últimos Seis Meses</span>
                         <input type="text" class="form-control" aria-label="..." name="sintomatologiaultimosmeses" @isset($paciente->antecendeDosPersonal->sintomatologia_6_meses) value="{{$paciente->antecendeDosPersonal->sintomatologia_6_meses}}"  @else  @endisset >
                          </div>
                        </div>

                  </div>


              </div>
          </div>
      </div>


</div>

</form>
