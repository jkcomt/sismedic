
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
      <button type="button" name="button" class="btn btn-sm btn-success conformidadapdos" tipo="registrar">Guardar</button>
    </div>
  </div>
<input type="hidden" name="cita_id" value="{{$cita->id}}">

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
                        <input type="checkbox" aria-label="" name="tuberculosis" id="tuberculosis" value="1">
                    </span>
                    <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Tuberculosis</span>
                    {{-- <input type="text" class="form-control" aria-label="..."> --}}
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="input-group">
                    <span class="span-width input-group-addon">Año Dx</span>
                    <input type="text" class="form-control" aria-label="..." name="txttuberculosis" id="txttuberculosis" readonly>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="input-group ">

                    <span class="input-group-addon span-width">Tiempo Tratamiento en meses</span>
                    <select class="form-control" name="" disabled name="cbotuberculosis" id="cbotuberculosis">
                        <option value="1">OPTION</option>
                      </select>
                  </div>
                </div>

              </div>

              <div class="row form-group ">
                <div class="col-md-3">
                  <div class="input-group">
                    <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                        <input type="checkbox" aria-label=""  onclick="activardos(this);" name="hepatitis" id="hepatitis" value="1">
                    </span>
                    <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Hepatitis</span>
                    {{-- <input type="text" class="form-control" aria-label="..."> --}}
                  </div>
                </div>

                <div class="col-md-5">
                      <select class="form-control" name="" id="cbohepatitis" disabled>
                          <option value="2">NADA</option>
                        </select>

                </div>

                <div class="col-md-4">
                  <div class="input-group">
                    <span class="span-width input-group-addon">Edad del Dx</span>
                    <input type="text" class="form-control" aria-label="..." readonly id="txthepatitis"  name="txthepatitis">
                  </div>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-3">
                  <div class="input-group">
                    <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                        <input type="checkbox" aria-label="" onclick="activardos(this);" id="tifoidea"  name="tifoidea" value="1">
                    </span>
                    <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Tifoidea</span>
                    {{-- <input type="text" class="form-control" aria-label="..."> --}}
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="input-group">
                    <span class="span-width input-group-addon">Año Dx</span>
                    <input type="text" class="form-control" aria-label="..." id="txttifoidea" readonly name="txttifoidea">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="input-group">
                    <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                        <input type="checkbox" aria-label="" onclick="activardos(this);" id="brucelosis" name="brucelosis" value="1">
                    </span>
                    <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Brucelosis</span>
                    {{-- <input type="text" class="form-control" aria-label="..."> --}}
                  </div>

                </div>
                <div class="col-md-2">
                  <div class="input-group">
                    <span class="span-width input-group-addon">Año Dx</span>
                    <input type="text" class="form-control" aria-label="..." id="txtbrucelosis" name="txtbrucelosis" readonly >
                  </div>
                </div>
                <div class="col-md-3">

                  <div class="input-group">
                    <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                        <input type="checkbox" aria-label=""  id="ulcerahepatica" name="ulcerahepatica" value="1">
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
                            <input type="checkbox" aria-label="" onclick="activardos(this);" id="convulsiones" name="convulsiones" value="1">
                        </span>
                        <span class="input-group-addon span-width">Convulsiones</span>
                        <input type="text" class="form-control" aria-label="..."  readonly id="txtconvulsiones" name="txtconvulsiones" >
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="input-group">
                        <span class="span-width input-group-addon">Año Dx</span>
                        <input type="text" class="form-control" aria-label="..."  readonly id="txtanio" name="txtanio">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-group">
                        <span class="span-width input-group-addon">Tratamiento Actual</span>
                        <input type="text" class="form-control" aria-label="..." id="txtctratamientoactual" readonly name="txtctratamientoactual">
                      </div>
                    </div>
              </div>

              <div class="row form-group">
                    <div class="col-md-4">
                      <div class="input-group ">
                        <span class="input-group-addon ">
                            <input type="checkbox" aria-label="" onclick="activardos(this);" id="gastritis" name="gastritis" value="1">
                        </span>
                        <span class="input-group-addon span-width">Gastritis</span>
                        <input type="text" class="form-control" aria-label="..." readonly id="txtgastritis" name="txtgastritis">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="input-group">
                        <span class="span-width input-group-addon">Año Dx</span>
                        <input type="text" class="form-control" aria-label="..." readonly id="txtganio" name="txtganio">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-group">
                        <span class="span-width input-group-addon">Tratamiento Actual</span>
                        <input type="text" class="form-control" aria-label="..." readonly id="txtgtratamientoactual" name="txtgtratamientoactual">
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
                              <input type="checkbox" aria-label="" onclick="activardos(this);" id="erge" name="erge" value="1">
                          </span>
                          <span class="input-group-addon span-width">ERGE</span>
                          <input type="text" class="form-control" aria-label="..." readonly id="txterge" name="txterge">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="span-width input-group-addon">Año Dx</span>
                          <input type="text" class="form-control" aria-label="..." readonly id="txtergeanio" name="txtergeanio">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-group">
                          <span class="span-width input-group-addon">Tratamiento Actual</span>
                          <input type="text" class="form-control" aria-label="..." readonly id="txtergetratamientoactual" name="txtergetratamientoactual">
                        </div>
                      </div>
                </div>

                <div class="row form-group">
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" aria-label="" onclick="activardos(this);" id="urolitiasis" name="urolitiasis" value="1">
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Urolitiasis</span>
                          {{-- <input type="text" class="form-control" aria-label="..."> --}}
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="span-width input-group-addon">Año Dx</span>
                          <input type="text" class="form-control" aria-label="..." readonly id="txturolitiasisanio" name="txturolitiasisanio">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-group">
                          <span class="span-width input-group-addon">Tratamiento Actual</span>
                          <input type="text" class="form-control" aria-label="..." readonly id="txturolitiasisaniotratamientoactual" name="txturolitiasisaniotratamientoactual">
                        </div>
                      </div>
                </div>

                <div class="row form-group">
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" aria-label="" onclick="activardos(this);" id="herniainguinal" value="1">
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Hernia Inguinal</span>
                          {{-- <input type="text" class="form-control" aria-label="..."> --}}
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="input-group ">

                          <span class="input-group-addon span-width">Lado</span>
                          <select class="form-control" name="cboherniainguinal" id="cboherniainguinal" disabled>
                              <option value="1">OPTION</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="span-width input-group-addon">Año Dx</span>
                          <input type="text" class="form-control" aria-label="..." readonly id="txtherniainguinal" name="txtherniainguinal">
                        </div>
                      </div>
                </div>

                <div class="row form-group">
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" aria-label="" onclick="activardos(this);" id="herniaumbilical" name="herniaumbilical" value="1">
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Hernia Umbilical</span>
                          {{-- <input type="text" class="form-control" aria-label="..."> --}}
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="span-width input-group-addon">Año Dx</span>
                          <input type="text" class="form-control" aria-label="..." id="txtherniaumbilical" readonly name="txtherniaumbilical">
                        </div>
                      </div>
                </div>

                <div class="row form-group">
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" aria-label=""  onclick="activardos(this);" id="lumbalgia" name="lumbalgia" value="1">
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Lumbalgia</span>
                          {{-- <input type="text" class="form-control" aria-label="..."> --}}
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="input-group ">

                          <span class="input-group-addon span-width">Lado</span>
                          <select class="form-control" name="" disabled id="cbolumbalgia" name="cbolumbalgia">
                              <option value="2">OPTION</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="span-width input-group-addon">Año Dx</span>
                          <input type="text" class="form-control" aria-label="..." id="txtlumbalgiaanio" name="txtlumbalgiaanio" readonly>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="input-group">
                          <span class="span-width input-group-addon">Frecuencia Anual</span>
                          <input type="text" class="form-control" aria-label="..." id="txtlumbalgiafrecuenciaanual" name="txtlumbalgiafrecuenciaanual" readonly>
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
                                <input type="checkbox" aria-label="" onclick="activardos(this);" id="otrostranstornoscolumna" name="otrostranstornoscolumna" value="1">
                            </span>
                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Otros Transtornos en la Columna</span>
                         <input type="text" class="form-control" aria-label="..." readonly id="txtotrostranstornoscolumna" name="txtotrostranstornoscolumna">
                          </div>
                        </div>

                  </div>
                  <div class="row form-group">
                        <div class="col-md-12">
                          <div class="input-group">
                            <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                                <input type="checkbox" aria-label="" onclick="activardos(this);" id="desordenespiel" name="desordenespiel" value="1">
                            </span>
                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Desórdenes en la Piel</span>
                         <input type="text" class="form-control" aria-label="..." readonly id="txtdesordenespiel" name="txtdesordenespiel">
                          </div>
                        </div>

                  </div>

                  <div class="row form-group">
                        <div class="col-md-12">
                          <div class="input-group">
                            <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                                <input type="checkbox" aria-label="" onclick="activardos(this);" id="varicesmienbrosinferiores" name="varicesmienbrosinferiores" value="1">
                            </span>
                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Várices en Miembros Inferiores</span>
                         <input type="text" class="form-control" aria-label="..." readonly id="txtvaricesmienbrosinferiores" name="varicesmienbrosinferiores">
                          </div>
                        </div>

                  </div>

                  <div class="row form-group">
                        <div class="col-md-4">
                          <div class="input-group ">
                            <span class="input-group-addon ">
                                <input type="checkbox" aria-label="" onclick="activardos(this);" id="its" name="its" value="1">
                            </span>
                            <span class="input-group-addon span-width">ITS</span>
                            <input type="text" class="form-control" aria-label="..." readonly id="txtits" name="txtits">
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="input-group">
                            <span class="span-width input-group-addon">Año Dx</span>
                            <input type="text" class="form-control" aria-label="..." readonly id="txtitsanio" name="txtitsanio">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-group">
                            <span class="span-width input-group-addon">Tratamiento Actual</span>
                            <input type="text" class="form-control" aria-label="..." readonly id="txtitstratamientoactual" name="txtitstratamientoactual">
                          </div>
                        </div>
                  </div>

                  <div class="row form-group">
                        <div class="col-md-12">
                          <div class="input-group">
                            <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                                <input type="checkbox" aria-label="" onclick="activardos(this);" id="otros" name="otros"  value="1">
                            </span>
                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Otros</span>
                         <input type="text" class="form-control" aria-label="..." readonly id="txtotros" name="txtotros">
                          </div>
                        </div>

                  </div>

                  <div class="row form-group">
                        <div class="col-md-12">
                          <div class="input-group">

                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Sintomatología de los Últimos Seis Meses</span>
                         <input type="text" class="form-control" aria-label="..." name="sintomatologiaultimosmeses">
                          </div>
                        </div>

                  </div>


              </div>
          </div>
      </div>


</div>

</form>
