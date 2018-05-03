
{{-- <h3>PERSONALES UNO</h3> --}}
<form class="" action="" method="" id="registrar_antecedente_personal_uno">
  @csrf
<div class="row form-group">
  <div class="col-md-2">
  </div>
  <div class="col-md-4">
  </div>
  <div class="col-md-6 text-right">
    <button type="button" name="button" class="btn btn-sm btn-success conformidad" tipo="registrar">Guardar</button>
  </div>
</div>

<input type="hidden" name="id_cita" value="{{$cita->id}}">

<div class="col-md-12">
  <div class="box box-default ">
      <div class="box-header with-border">Antecedentes
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
                <input type="checkbox" name="sobrepeso" id="sobrepeso" value="1"> Sobrepeso
              </label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
              <label>
                <input type="checkbox" value="1" name="enfermedadcronica" id="enfermedadcronica"><strong style="color:red;"> Enfermedad Crónica </strong>
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
                    <input type="checkbox" aria-label="" value="1"  onclick="activar(this);" id="farmacoscomun" name="farmacoscomun">
                </span>
                <span class="input-group-addon span-width">Fármacos de Uso Común</span>
                <input type="text" class="form-control" aria-label="..." name="txtfarmacoscomun" readonly id="txtfarmacoscomun">
              </div>
            </div>
          </div>

          <div class="row  form-group">
            <div class="col-md-12">
              <div class="input-group">
                <span class="input-group-addon">
                    <input type="checkbox" aria-label="" value="1" onclick="activar(this);"name="alergiasmedicamentosas" id="alergiasmedicamentosas">
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
                    <input type="checkbox" aria-label="" value="1" name="ram" id="ram" onclick="activar(this);">
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
                    <input type="checkbox" aria-label="" value="1" name="practicadeportiva" id="practicadeportiva" onclick="activar(this);">
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
                    <input type="checkbox" aria-label="" name="fuma" id="fuma" onclick="activar(this);" value="1">
                </span>
                <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Fuma</span>
                {{-- <input type="text" class="form-control" aria-label="..."> --}}
              </div>
            </div>
            <div class="col-md-2">
              <div class="input-group">
                <span class="span-width input-group-addon">Frecuencia</span>
                <input type="text" class="form-control" aria-label="..." name="txtfumafrecuencia" id="txtfuma"  readonly>
              </div>
            </div>
            <div class="col-md-2">
                  <select class="form-control" name="cbofuma" disabled id="cbofuma">
                      <option value="nada">NADA</option>
                    </select>

            </div>
            <div class="col-md-2">
              <div class="input-group">
                <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                    <input type="checkbox" aria-label="" name="fumaba" id="fumaba" onclick="activar(this);" value="1">
                </span>
                <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Fumaba</span>
                {{-- <input type="text" class="form-control" aria-label="..."> --}}
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                <span class="span-width input-group-addon">Prom. Semanal</span>
                <input type="text" class="form-control" aria-label="..." name="txtfumabapromsemana" id="txtfumaba" readonly >
              </div>
            </div>
          </div>



        </div>
      </div>
  </div>





    <div class="box box-default ">
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
                        <input type="checkbox" aria-label="" name="alcohol" id="alcohol" onclick="activar(this);" value="1">
                    </span>
                    <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Alcohol</span>
                    {{-- <input type="text" class="form-control" aria-label="..."> --}}
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="input-group">
                    <span class="span-width input-group-addon">Frecuencia</span>
                    <input type="text" class="form-control" aria-label="..." name="txtalcoholfrecuencia" id="txtalcohol" readonly>
                  </div>
                </div>
                <div class="col-md-2">
                      <select class="form-control" name="cboalcohol" id="cboalcohol" disabled>
                          <option value="nada">NADA</option>
                        </select>
                </div>

                <div class="col-md-4">
                  <div class="input-group">
                    <span class="span-width input-group-addon">Tiempo</span>
                    <input type="text" class="form-control" name="tiempoalcohol"  aria-label="..."  id="txtalcoholtiempo" readonly>
                  </div>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-3">
                  <div class="input-group">
                    <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                        <input type="checkbox" aria-label="" name="coca" id="coca" onclick="activar(this);" value="1">
                    </span>
                    <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Coca</span>
                    {{-- <input type="text" class="form-control" aria-label="..."> --}}
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="input-group">
                    <span class="span-width input-group-addon">Frecuencia</span>
                    <input type="text" class="form-control" aria-label="..." name="txtfrecuenciacoca" id="txtcoca" readonly>
                  </div>
                </div>
                <div class="col-md-4">
                      <select class="form-control" name="cbococa" id="cbococa" disabled>
                          <option value="nada">NADA</option>
                        </select>

                </div>
              </div>


                <div class="row form-group">
                  <div class="col-md-2">
                    <div class="input-group">
                      <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                          <input type="checkbox" aria-label="" id="drogas" name="drogas" onclick="activar(this);" value="1">
                      </span>
                      <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Drogas</span>
                      {{-- <input type="text" class="form-control" aria-label="..."> --}}
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="input-group">
                      <span class="span-width input-group-addon">Frecuencia</span>
                      <input type="text" class="form-control" aria-label="..." name="txtfrecuenciadrogas" id="txtdrogas" readonly>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="input-group ">
                      <span class="input-group-addon ">
                          <input type="checkbox" aria-label="" id="cafe" name="cafe" onclick="activar(this);" value="1">
                      </span>
                      <span class="input-group-addon span-width">Cafe</span>
                      <input type="text" class="form-control" aria-label="..." readonly name="txtfrecuenciacafe" id="txtcafe">
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="input-group">
                      <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                          <input type="checkbox" aria-label="" value="1" id="marcapasos" name="marcapasos">
                      </span>
                      <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Marcapasos</span>
                      {{-- <input type="text" class="form-control" aria-label="..."> --}}
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="input-group">
                      <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                          <input type="checkbox" value="1" aria-label="" name="coronaipatia">
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
                              <input type="checkbox" value="1" aria-label="" name="epilipsia">
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Epilipsia</span>
                      </div>
                      </div>

                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" value="1" aria-label="" name="gota">
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Gota</span>
                      </div>
                      </div>


                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" value="1" aria-label="" name="migrania">
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Migraña</span>
                      </div>
                      </div>

                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" value="1" aria-label="" name="vactetano">
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Vac. Tetanos</span>
                      </div>
                      </div>

                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" value="1" aria-label="" name="ronquidos">
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Ronquidos</span>
                      </div>
                      </div>

                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" value="1" aria-label="" name="humodeleña">
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Humo de Leña</span>
                      </div>

                      </div>


                </div>



                <div class="row form-group">

                      <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox"  aria-label=""name="diabetesmelitus" id ="diabetesmelitus" onclick="activar(this);" value="1">
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Diabetes Melitus</span>
                      </div>
                      </div>

                      <div class="col-md-3">
                        <div class="input-group">
                          <span class="span-width input-group-addon">Año Dx</span>
                          <input type="text" class="form-control" aria-label="..." readonly name="txtaniodiabetesmelitus" id="txtdiabetesmelitus">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="input-group">
                          <span class="span-width input-group-addon">Tratamiento Actual</span>
                          <input type="text" class="form-control" aria-label="..." name="txtdiabetesmelitustratamientoactual" id="txtdmtratamientoactual" readonly>
                        </div>
                      </div>


                </div>

            </div>
        </div>
    </div>




      <div class="box box-default ">
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
                                <input type="checkbox" aria-label="" name="hipertencionarterial" id="hipertencionarterial" onclick="activar(this);" value="1">
                            </span>
                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Hipertencion Arterial</span>
                        </div>
                        </div>

                        <div class="col-md-3">
                          <div class="input-group">
                            <span class="span-width input-group-addon">Año Dx</span>
                            <input type="text" class="form-control" aria-label="..." name="txtaniohipertencionarterial" readonly id="txthipertencionarterial">
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="input-group">
                            <span class="span-width input-group-addon">Tratamiento Actual</span>
                            <input type="text" class="form-control" aria-label="..." readonly name="txttratamientoactualhipertencionarterial" id="txthatratamientoactual">
                          </div>
                        </div>
                  </div>

                    <div class="row form-group">

                          <div class="col-md-3">
                            <div class="input-group">
                              <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                                  <input type="checkbox" value="1" aria-label="" name="trombosis">
                              </span>
                              <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Trombosis</span>
                          </div>
                          </div>

                          <div class="col-md-9">
                            <div class="input-group ">
                              <span class="input-group-addon ">
                                  <input type="checkbox" aria-label="" name="envardiovascular" id="envardiovascular" onclick="activar(this);" value="1">
                              </span>
                              <span class="input-group-addon span-width">Enf. Cardio Vascular</span>
                              <input type="text" class="form-control" aria-label="..." readonly name="txtenvardiovascular" id="txtenvardiovascular">
                            </div>
                          </div>

                    </div>


                      <div class="row form-group">

                            <div class="col-md-3">
                              <div class="input-group">
                                <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                                    <input type="checkbox"  aria-label="" onclick="activar(this);" id="insuficienciavenosa" name="insuficienciavenosa" value="1">
                                </span>
                                <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Insuficiencia Venosa</span>
                            </div>
                            </div>

                            <div class="col-md-3">
                              <div class="input-group">
                                <span class="span-width input-group-addon">Año Dx</span>
                                <input type="text" class="form-control" aria-label="..." readonly name="txtanioinsuficienciavenosa" id="txtinsuficienciavenosa">
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="input-group">
                                <span class="span-width input-group-addon">Tratamiento Actual</span>
                                <input type="text" class="form-control" aria-label="..." readonly name="txtinsuficienciavenosatratamientoactual" id="txtinsuficienciavenosatratamientoactual">
                              </div>
                            </div>
                      </div>

                        <div class="row form-group">

                              <div class="col-md-3">
                                <div class="input-group">
                                  <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                                      <input type="checkbox" aria-label="" name="dislipidemia" id="dislipidemia" onclick="activar(this);" value="1">
                                  </span>
                                  <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Dislipidemia</span>
                              </div>
                              </div>

                              <div class="col-md-3">
                                <div class="input-group">
                                  <span class="span-width input-group-addon">Año Dx</span>
                                  <input type="text" class="form-control" aria-label="..." name="txtdislipidemiaanio" id="txtdislipidemia" readonly>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="input-group">
                                  <span class="span-width input-group-addon">Tratamiento Actual</span>
                                  <input type="text" class="form-control" aria-label="..." name="txtdislipidemiatratamientoactual" id="txtdislipidemiatratamientoactual" readonly>
                                </div>
                              </div>
                        </div>




                        <div class="row form-group">

                              <div class="col-md-6">
                                <div class="input-group">
                                  <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                                      <input type="checkbox" aria-label="" onclick="activar(this);" id="enfermedadestiroidea" name="enfermedadestiroidea" value="1">
                                  </span>

                                  <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Enfermedades Tiroidea</span>
                                  <input type="text" name="" value="" class="form-control" readonly name="txtenfermedadestiroidea" id="txtenfermedadestiroidea">
                              </div>
                              </div>

                              <div class="col-md-2">
                                <div class="input-group">
                                  <span class="span-width input-group-addon">Año Dx</span>
                                  <input type="text" class="form-control" aria-label="..." readonly name="txtanioenfermedadestiroidea" id="txtenfermedadestiroideaanio">
                                </div>
                              </div>

                              <div class="col-md-4">
                                <div class="input-group">
                                  <span class="span-width input-group-addon">Tratamiento Actual</span>
                                  <input type="text" class="form-control" aria-label="..." readonly name="txtenfermedadestiroideatratamientoactual" id="txtenfermedadestiroideatratamientoactual">
                                </div>
                              </div>
                        </div>

                          <div class="row form-group">

                                <div class="col-md-6">
                                  <div class="input-group">
                                    <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                                        <input type="checkbox" aria-label="" name="neoplasias" id="neoplasias" onclick="activar(this);" value="1">
                                    </span>
                                    <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Neoplasias</span>
                                    <input type="text" name="" value="" class="form-control"  readonly name="txtneoplasia" id="txtneoplasias">
                                </div>
                                </div>

                                <div class="col-md-2">
                                  <div class="input-group">
                                    <span class="span-width input-group-addon">Año Dx</span>
                                    <input type="text" class="form-control" aria-label="..." name="txtneoplasiaanio" id="txtneoplasiasanio" readonly>
                                  </div>
                                </div>

                                <div class="col-md-4">
                                  <div class="input-group">
                                    <span class="span-width input-group-addon">Tratamiento Actual</span>
                                    <input type="text" class="form-control" aria-label="..." name="txtneoplasiastratamientoactual" id="txtneoplasiastratamientoactual" readonly>
                                  </div>
                                </div>
                          </div>





                        <div class="row form-group">
                          <div class="col-md-12">
                            <div class="input-group">
                              <span class="input-group-addon">
                                  <input type="checkbox" aria-label="" id="hobbies"  name="hobbies" onclick="activar(this);" value="1">
                              </span>
                              <span class="span-width input-group-addon">Hobbies</span>
                              <input type="text" class="form-control" aria-label="..." name="txthobbies" id="txthobbies" readonly>
                            </div>
                          </div>
                        </div>
              </div>
          </div>
      </div>
</div>
</form>
