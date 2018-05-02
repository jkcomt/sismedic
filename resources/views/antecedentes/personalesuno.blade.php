
{{-- <h3>PERSONALES UNO</h3> --}}
<form class="" action="" method="">

<div class="row form-group">
  <div class="col-md-2">
  </div>
  <div class="col-md-4">
  </div>
  <div class="col-md-6 text-right">
    <button type="button" name="button" class="btn btn-sm btn-success">Guardar</button>
  </div>
</div>


<div class="col-md-12">
  <div class="box box-default">
      <div class="box-header with-border">Antecedentes - Personales 1
          <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse">
                  <i class="fa fa-plus"></i>
              </button>
          </div>
      </div>

      <div class="box-body">

        <div class="row col-md-12">
          <div class="row form-group">
            <div class="col-md-2">
              <div class="checkbox">
              <label>
                <input type="checkbox"> Sobre Peso
              </label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
              <label>
                <input type="checkbox"><strong style="color:red;"> Enfermedad Cronica </strong>
              </label>
              </div>
            </div>
            <div class="col-md-6 text-right">
            </div>
          </div>




          <div class="row form-group">
            <div class="col-md-12">
              <div class="input-group ">
                <span class="input-group-addon ">
                    <input type="checkbox" aria-label="" onclick="activar(this);" id="farmacoscomun">
                </span>
                <span class="input-group-addon span-width">Farmacos de Uso comun</span>
                <input type="text" class="form-control" aria-label="..." name="txtfarmacoscomun" readonly id="txtfarmacoscomun">
              </div>
            </div>
          </div>

          <div class="row  form-group">
            <div class="col-md-12">
              <div class="input-group">
                <span class="input-group-addon">
                    <input type="checkbox" aria-label="" onclick="activar(this);" id="alergiasmedicamentosas">
                </span>
                <span class="span-width input-group-addon">Alergias no Medicamentosa</span>
                <input type="text" class="form-control" aria-label="..." name="txtalergiasmedicamentosas" readonly id="txtalergiasmedicamentosas">
              </div>
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12">
              <div class="input-group">
                <span class="input-group-addon">
                    <input type="checkbox" aria-label="" id="ram" onclick="activar(this);">
                </span>
                <span class="span-width input-group-addon">RAM</span>
                <input type="text" class="form-control" aria-label="..." name="txtram" readonly id="txtram">
              </div>
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-8">
              <div class="input-group">
                <span class="input-group-addon">
                    <input type="checkbox" aria-label="" id="practicadeportiva" onclick="activar(this);">
                </span>
                <span class="span-width input-group-addon">Práctica Deportiva</span>
                <input type="text" class="form-control" aria-label="..." name="txtpracticadeportiva" id="txtpracticadeportiva" readonly>
              </div>
            </div>
            <div class="col-md-4">
              <div class="input-group">
                <span class="span-width input-group-addon">Frecuencia</span>
                <input type="text" class="form-control" aria-label="..." name="txtpdfrecuencia" id="txtpdfrecuencia" readonly>
              </div>
            </div>
          </div>

          <div class="row form-group ">
            <div class="col-md-3">
              <div class="input-group">
                <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                    <input type="checkbox" aria-label="" id="fuma" onclick="activar(this);">
                </span>
                <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Fuma</span>
                {{-- <input type="text" class="form-control" aria-label="..."> --}}
              </div>
            </div>
            <div class="col-md-2">
              <div class="input-group">
                <span class="span-width input-group-addon">Frecuencia</span>
                <input type="text" class="form-control" aria-label="..." name="txtfuma" id="txtfuma"  readonly>
              </div>
            </div>
            <div class="col-md-2">
                  <select class="form-control" name="" disabled id="cbofuma">
                      <option value="">NADA</option>
                    </select>

            </div>
            <div class="col-md-2">
              <div class="input-group">
                <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                    <input type="checkbox" aria-label="" id="fumaba" onclick="activar(this);">
                </span>
                <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Fumaba</span>
                {{-- <input type="text" class="form-control" aria-label="..."> --}}
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                <span class="span-width input-group-addon">Prom. Semanal</span>
                <input type="text" class="form-control" aria-label="..." id="txtfumaba" readonly >
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
                <div class="col-md-3">
                  <div class="input-group">
                    <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                        <input type="checkbox" aria-label="" id="alcohol" onclick="activar(this);">
                    </span>
                    <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Alcohol</span>
                    {{-- <input type="text" class="form-control" aria-label="..."> --}}
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="input-group">
                    <span class="span-width input-group-addon">Frecuencia</span>
                    <input type="text" class="form-control" aria-label="..." id="txtalcohol" readonly>
                  </div>
                </div>
                <div class="col-md-2">
                      <select class="form-control" name="" id="cboalcohol" disabled>
                          <option value="">NADA</option>
                        </select>

                </div>

                <div class="col-md-4">
                  <div class="input-group">
                    <span class="span-width input-group-addon">Tiempo</span>
                    <input type="text" class="form-control" aria-label="..." readonly>
                  </div>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-3">
                  <div class="input-group">
                    <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                        <input type="checkbox" aria-label="" id="coca" onclick="activar(this);">
                    </span>
                    <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Coca</span>
                    {{-- <input type="text" class="form-control" aria-label="..."> --}}
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="input-group">
                    <span class="span-width input-group-addon">Frecuencia</span>
                    <input type="text" class="form-control" aria-label="..." id="txtcoca" readonly>
                  </div>
                </div>
                <div class="col-md-4">
                      <select class="form-control" name="" id="cbococa" disabled>
                          <option value="">NADA</option>
                        </select>

                </div>
              </div>


                <div class="row form-group">
                  <div class="col-md-2">
                    <div class="input-group">
                      <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                          <input type="checkbox" aria-label="" id="drogas" onclick="activar(this);" >
                      </span>
                      <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Drogas</span>
                      {{-- <input type="text" class="form-control" aria-label="..."> --}}
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="input-group">
                      <span class="span-width input-group-addon">Frecuencia</span>
                      <input type="text" class="form-control" aria-label="..." id="txtdrogas" readonly>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="input-group ">
                      <span class="input-group-addon ">
                          <input type="checkbox" aria-label="" id="cafe" onclick="activar(this);">
                      </span>
                      <span class="input-group-addon span-width">Cafe</span>
                      <input type="text" class="form-control" aria-label="..." readonly id="txtcafe">
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="input-group">
                      <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                          <input type="checkbox" aria-label="" id="marcapasos" >
                      </span>
                      <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Marcapasos</span>
                      {{-- <input type="text" class="form-control" aria-label="..."> --}}
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="input-group">
                      <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                          <input type="checkbox" aria-label="" name="coronaipatia">
                      </span>
                      <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Coronaipatia</span>
                      {{-- <input type="text" class="form-control" aria-label="..."> --}}
                    </div>
                  </div>
                </div>



                <div class="row form-group">

                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" aria-label="" name="epilipsia">
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Epilipsia</span>
                      </div>
                      </div>

                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" aria-label="" name="gota">
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Gota</span>
                      </div>
                      </div>


                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" aria-label="" name="migraña">
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Migraña</span>
                      </div>
                      </div>

                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" aria-label="" name="vactetano">
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Vac. Tetanos</span>
                      </div>
                      </div>

                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" aria-label="" name="ronquidos">
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Ronquidos</span>
                      </div>
                      </div>

                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" aria-label="" name="humodeleña">
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Humo de Leña</span>
                      </div>

                      </div>


                </div>



                <div class="row form-group">

                      <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" aria-label=""name="diabetesmelitus" id ="diabetesmelitus" onclick="activar(this);">
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Diabetes Melitus</span>
                      </div>
                      </div>

                      <div class="col-md-3">
                        <div class="input-group">
                          <span class="span-width input-group-addon">Año Dx</span>
                          <input type="text" class="form-control" aria-label="..." readonly id="txtdiabetesmelitus">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="input-group">
                          <span class="span-width input-group-addon">Tratamiento Actual</span>
                          <input type="text" class="form-control" aria-label="..." id="txtdmtratamientoactual" readonly>
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

                        <div class="col-md-3">
                          <div class="input-group">
                            <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                                <input type="checkbox" aria-label="" id="hipertencionarterial" onclick="activar(this);">
                            </span>
                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Hipertencion Arterial</span>
                        </div>
                        </div>

                        <div class="col-md-3">
                          <div class="input-group">
                            <span class="span-width input-group-addon">Año Dx</span>
                            <input type="text" class="form-control" aria-label="..." readonly id="txthipertencionarterial">
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="input-group">
                            <span class="span-width input-group-addon">Tratamiento Actual</span>
                            <input type="text" class="form-control" aria-label="..." readonly id="txthatratamientoactual">
                          </div>
                        </div>
                  </div>

                    <div class="row form-group">

                          <div class="col-md-3">
                            <div class="input-group">
                              <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                                  <input type="checkbox" aria-label="">
                              </span>
                              <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Trombosis</span>
                          </div>
                          </div>

                          <div class="col-md-9">
                            <div class="input-group ">
                              <span class="input-group-addon ">
                                  <input type="checkbox" aria-label="" id="envardiovascular" onclick="activar(this);">
                              </span>
                              <span class="input-group-addon span-width">Enf. Cardio Vascular</span>
                              <input type="text" class="form-control" aria-label="..." readonly id="txtenvardiovascular">
                            </div>
                          </div>

                    </div>


                      <div class="row form-group">

                            <div class="col-md-3">
                              <div class="input-group">
                                <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                                    <input type="checkbox" aria-label="" onclick="activar(this);" id="enfermedadestiroidea">
                                </span>
                                <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Enfermedades Tiroidea</span>
                            </div>
                            </div>

                            <div class="col-md-3">
                              <div class="input-group">
                                <span class="span-width input-group-addon">Año Dx</span>
                                <input type="text" class="form-control" aria-label="..." readonly id="txtenfermedadestiroidea">
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="input-group">
                                <span class="span-width input-group-addon">Tratamiento Actual</span>
                                <input type="text" class="form-control" aria-label="..." readonly id="txtettratamientoactual">
                              </div>
                            </div>
                      </div>

                        <div class="row form-group">

                              <div class="col-md-3">
                                <div class="input-group">
                                  <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                                      <input type="checkbox" aria-label="" id="neoplasias" onclick="activar(this);">
                                  </span>
                                  <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Neoplasias</span>
                              </div>
                              </div>

                              <div class="col-md-3">
                                <div class="input-group">
                                  <span class="span-width input-group-addon">Año Dx</span>
                                  <input type="text" class="form-control" aria-label="..." id="txtneoplasias" readonly>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="input-group">
                                  <span class="span-width input-group-addon">Tratamiento Actual</span>
                                  <input type="text" class="form-control" aria-label="..." id="txtntratamientoactual" readonly>
                                </div>
                              </div>
                        </div>

                        <div class="row form-group">
                          <div class="col-md-12">
                            <div class="input-group">
                              <span class="input-group-addon">
                                  <input type="checkbox" aria-label="" id="hobbies" onclick="activar(this);">
                              </span>
                              <span class="span-width input-group-addon">Hobbies</span>
                              <input type="text" class="form-control" aria-label="..." id="txthobbies" readonly>
                            </div>
                          </div>
                        </div>

              </div>
          </div>
      </div>

</div>

</form>
