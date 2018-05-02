
{{-- <h3>PERSONALES UNO</h3> --}}
<div class="col-md-12">
  <div class="row form-group">
    <div class="col-md-2">
    </div>
    <div class="col-md-4">
    </div>
    <div class="col-md-6 text-right">
      <button type="button" name="button" class="btn btn-sm btn-success">Guardar</button>
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
                <div class="col-md-3">
                  <div class="input-group">
                    <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                        <input type="checkbox" aria-label="" onclick="activardos(this);" id="tuberculosis">
                    </span>
                    <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Tuberculosis</span>
                    {{-- <input type="text" class="form-control" aria-label="..."> --}}
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="input-group">
                    <span class="span-width input-group-addon">Año Dx</span>
                    <input type="text" class="form-control" aria-label="..." id="txttuberculosis" readonly>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="input-group ">

                    <span class="input-group-addon span-width">Tiempo Tratamiento en meses</span>
                    <select class="form-control" name="" disabled id="cbotuberculosis">
                        <option value=""></option>
                      </select>
                  </div>
                </div>

              </div>

              <div class="row form-group ">
                <div class="col-md-3">
                  <div class="input-group">
                    <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                        <input type="checkbox" aria-label=""  onclick="activardos(this);" id="hepatitis">
                    </span>
                    <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Hepatitis</span>
                    {{-- <input type="text" class="form-control" aria-label="..."> --}}
                  </div>
                </div>

                <div class="col-md-5">
                      <select class="form-control" name="" id="cbohepatitis" disabled>
                          <option value="">NADA</option>
                        </select>

                </div>

                <div class="col-md-4">
                  <div class="input-group">
                    <span class="span-width input-group-addon">Edad del Dx</span>
                    <input type="text" class="form-control" aria-label="..." readonly id="txthepatitis">
                  </div>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-3">
                  <div class="input-group">
                    <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                        <input type="checkbox" aria-label="" onclick="activardos(this);" id="tifoidea">
                    </span>
                    <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Tifoidea</span>
                    {{-- <input type="text" class="form-control" aria-label="..."> --}}
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="input-group">
                    <span class="span-width input-group-addon">Año Dx</span>
                    <input type="text" class="form-control" aria-label="..." id="txttifoidea" readonly>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="input-group">
                    <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                        <input type="checkbox" aria-label="" onclick="activardos(this);" id="brucelosis">
                    </span>
                    <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Brucelosis</span>
                    {{-- <input type="text" class="form-control" aria-label="..."> --}}
                  </div>

                </div>
                <div class="col-md-2">
                  <div class="input-group">
                    <span class="span-width input-group-addon">Año Dx</span>
                    <input type="text" class="form-control" aria-label="..." id="txtbrucelosis" readonly>
                  </div>
                </div>
                <div class="col-md-3">

                  <div class="input-group">
                    <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                        <input type="checkbox" aria-label=""  id="ulcerahepatica">
                    </span>
                    <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Ulcera Hepatica</span>
                    {{-- <input type="text" class="form-control" aria-label="..."> --}}
                  </div>
                </div>
              </div>

              <div class="row form-group">
                    <div class="col-md-4">
                      <div class="input-group ">
                        <span class="input-group-addon ">
                            <input type="checkbox" aria-label="" onclick="activardos(this);" id="convulsiones">
                        </span>
                        <span class="input-group-addon span-width">Convulsiones</span>
                        <input type="text" class="form-control" aria-label="..."  readonly id="txtconvulsiones" >
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="input-group">
                        <span class="span-width input-group-addon">Año Dx</span>
                        <input type="text" class="form-control" aria-label="..."  readonly id="txtanio">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-group">
                        <span class="span-width input-group-addon">Tratamiento Actual</span>
                        <input type="text" class="form-control" aria-label="..." id="txtctratamientoactual" readonly>
                      </div>
                    </div>
              </div>

              <div class="row form-group">
                    <div class="col-md-4">
                      <div class="input-group ">
                        <span class="input-group-addon ">
                            <input type="checkbox" aria-label="" onclick="activardos(this);" id="gastritis">
                        </span>
                        <span class="input-group-addon span-width">Gastritis</span>
                        <input type="text" class="form-control" aria-label="..." readonly id="txtgastritis">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="input-group">
                        <span class="span-width input-group-addon">Año Dx</span>
                        <input type="text" class="form-control" aria-label="..." readonly id="txtganio">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-group">
                        <span class="span-width input-group-addon">Tratamiento Actual</span>
                        <input type="text" class="form-control" aria-label="..." readonly id="txtgtratamientoactual">
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
                              <input type="checkbox" aria-label="" onclick="activardos(this);" id="erge">
                          </span>
                          <span class="input-group-addon span-width">ERGE</span>
                          <input type="text" class="form-control" aria-label="..." readonly id="txterge">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="span-width input-group-addon">Año Dx</span>
                          <input type="text" class="form-control" aria-label="..." readonly id="txtergeanio">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-group">
                          <span class="span-width input-group-addon">Tratamiento Actual</span>
                          <input type="text" class="form-control" aria-label="..." readonly id="txtergetratamientoactual">
                        </div>
                      </div>
                </div>

                <div class="row form-group">
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" aria-label="" onclick="activardos(this);" id="urolitiasis">
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Urolitiasis</span>
                          {{-- <input type="text" class="form-control" aria-label="..."> --}}
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="span-width input-group-addon">Año Dx</span>
                          <input type="text" class="form-control" aria-label="..." readonly id="txturolitiasisanio">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-group">
                          <span class="span-width input-group-addon">Tratamiento Actual</span>
                          <input type="text" class="form-control" aria-label="..." readonly id="txturolitiasisaniotratamientoactual">
                        </div>
                      </div>
                </div>

                <div class="row form-group">
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" aria-label="" onclick="activardos(this);" id="herniainguinal">
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Hernia Inguinal</span>
                          {{-- <input type="text" class="form-control" aria-label="..."> --}}
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="input-group ">

                          <span class="input-group-addon span-width">Lado</span>
                          <select class="form-control" name="" id="cboherniainguinal" disabled>
                              <option value=""></option>
                            </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="span-width input-group-addon">Año Dx</span>
                          <input type="text" class="form-control" aria-label="..." readonly id="txtherniainguinal">
                        </div>
                      </div>
                </div>

                <div class="row form-group">
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" aria-label="" onclick="activardos(this);" id="herniaumbilical">
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Hernia Umbilical</span>
                          {{-- <input type="text" class="form-control" aria-label="..."> --}}
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="span-width input-group-addon">Año Dx</span>
                          <input type="text" class="form-control" aria-label="..." id="txtherniaumbilical" readonly>
                        </div>
                      </div>
                </div>

                <div class="row form-group">
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" aria-label=""  onclick="activardos(this);" id="lumbalgia">
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Lumbalgia</span>
                          {{-- <input type="text" class="form-control" aria-label="..."> --}}
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="input-group ">

                          <span class="input-group-addon span-width">Lado</span>
                          <select class="form-control" name="" disabled id="cbolumbalgia">
                              <option value=""></option>
                            </select>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="span-width input-group-addon">Año Dx</span>
                          <input type="text" class="form-control" aria-label="..." id="txtlumbalgiaanio" readonly>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="input-group">
                          <span class="span-width input-group-addon">Frecuencia Anual</span>
                          <input type="text" class="form-control" aria-label="..." id="txtlumbalgiafrecuenciaanual" readonly>
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
                                <input type="checkbox" aria-label="" onclick="activardos(this);" id="otrostranstornoscolumna">
                            </span>
                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Otros Transtornos en la Columna</span>
                         <input type="text" class="form-control" aria-label="..." readonly id="txtotrostranstornoscolumna">
                          </div>
                        </div>

                  </div>
                  <div class="row form-group">
                        <div class="col-md-12">
                          <div class="input-group">
                            <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                                <input type="checkbox" aria-label="" onclick="activardos(this);" id="desordenespiel">
                            </span>
                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Desórdenes en la Piel</span>
                         <input type="text" class="form-control" aria-label="..." readonly id="txtdesordenespiel" >
                          </div>
                        </div>

                  </div>

                  <div class="row form-group">
                        <div class="col-md-12">
                          <div class="input-group">
                            <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                                <input type="checkbox" aria-label="" onclick="activardos(this);" id="varicesmienbrosinferiores">
                            </span>
                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Varices en Mienbros Inferiores</span>
                         <input type="text" class="form-control" aria-label="..." readonly id="varicesmienbrosinferiores">
                          </div>
                        </div>

                  </div>

                  <div class="row form-group">
                        <div class="col-md-4">
                          <div class="input-group ">
                            <span class="input-group-addon ">
                                <input type="checkbox" aria-label="" onclick="activardos(this);" id="its">
                            </span>
                            <span class="input-group-addon span-width">ITS</span>
                            <input type="text" class="form-control" aria-label="..." readonly id="txtits">
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="input-group">
                            <span class="span-width input-group-addon">Año Dx</span>
                            <input type="text" class="form-control" aria-label="..." readonly id="txtitsanio">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-group">
                            <span class="span-width input-group-addon">Tratamiento Actual</span>
                            <input type="text" class="form-control" aria-label="..." readonly id="txtitstratamientoactual">
                          </div>
                        </div>
                  </div>

                  <div class="row form-group">
                        <div class="col-md-12">
                          <div class="input-group">
                            <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                                <input type="checkbox" aria-label="" onclick="activardos(this);" id="otros" >
                            </span>
                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Otros</span>
                         <input type="text" class="form-control" aria-label="..." readonly id="txtotros">
                          </div>
                        </div>

                  </div>

                  <div class="row form-group">
                        <div class="col-md-12">
                          <div class="input-group">

                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Sintomatologia de los Ultimos seis meses</span>
                         <input type="text" class="form-control" aria-label="...">
                          </div>
                        </div>

                  </div>


              </div>
          </div>
      </div>




</div>
