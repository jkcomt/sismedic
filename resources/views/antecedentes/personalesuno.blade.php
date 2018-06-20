
{{-- <h3>PERSONALES UNO</h3> --}}
<form class="" action="" method="" id="registrar_antecedente_personal_uno">
  @csrf
<div class="col-md-12">
<div class="row form-group">
  <div class="col-md-2">
  </div>
  <div class="col-md-4">
  </div>
  <div class="col-md-6 text-right">
    @isset($paciente->antecedentePersonal)
      <button type="button" name="button" class="btn btn-sm btn-warning conformidad" tipo="actualizar">   Actualizar </button>
      <input type="hidden" name="antecedentesuno_id" value="{{$paciente->antecedentePersonal->id}}">
    @else
      <button type="button" name="button" class="btn btn-sm btn-success conformidad" tipo="registrar">   Guardar </button>
    @endisset
  </div>
</div>

<input type="hidden" name="id_paciente" value="{{$cita->paciente->id}}">

    <div class="box box-default">
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
                <input type="checkbox" name="sobrepeso" id="sobrepeso" value="1" @isset($paciente->antecedentePersonal->sobrepeso) checked @endisset> Sobrepeso
              </label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
              <label>
                <input type="checkbox" value="1" name="enfermedadcronica" id="enfermedadcronica" @isset($paciente->antecedentePersonal->enfermedad_cronica) checked @endisset><strong style="color:red;"> Enfermedad Crónica </strong>
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
                    <input type="checkbox" aria-label="" value="1"  onclick="activar(this);" id="farmacoscomun" name="farmacoscomun" @isset($paciente->antecedentePersonal->farmacos_uso_comun) checked @endisset >
                </span>
                <span class="input-group-addon span-width">Fármacos de Uso Común</span>
                <input type="text" class="form-control" aria-label="..." name="txtfarmacoscomun"  id="txtfarmacoscomun" @isset($paciente->antecedentePersonal->farmacos_uso_comun_descripcion) value="{{$paciente->antecedentePersonal->farmacos_uso_comun_descripcion}}" @else readonly    @endisset>
              </div>
            </div>
          </div>

          <div class="row  form-group">
            <div class="col-md-12">
              <div class="input-group">
                <span class="input-group-addon">
                    <input type="checkbox" aria-label="" value="1" onclick="activar(this);"name="alergiasmedicamentosas" id="alergiasmedicamentosas" @isset($paciente->antecedentePersonal->alergias_no_medicantosa) checked @endisset>
                </span>
                <span class="span-width input-group-addon">Alergias no Medicamentosa</span>
                <input type="text" class="form-control" aria-label="..." name="txtalergiasmedicamentosas"   id="txtalergiasmedicamentosas"  @isset($paciente->antecedentePersonal->alergias_no_medicantosa_descripcion) value="{{$paciente->antecedentePersonal->alergias_no_medicantosa_descripcion}}" @else readonly    @endisset >
              </div>
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12">
              <div class="input-group">
                <span class="input-group-addon">
                    <input type="checkbox" aria-label="" value="1" name="ram" id="ram" onclick="activar(this);"  @isset($paciente->antecedentePersonal->ram) checked @endisset>
                </span>
                <span class="span-width input-group-addon">RAM</span>
                <input type="text" class="form-control" aria-label="..." name="txtram"   id="txtram"  @isset($paciente->antecedentePersonal->ram_descripcion) value="{{$paciente->antecedentePersonal->ram_descripcion}}" @else readonly  @endisset>
              </div>
            </div>
          </div>

           <div class="row form-group">
            <div class="col-md-8">
              <div class="input-group">
                <span class="input-group-addon">
                    <input type="checkbox" aria-label="" value="1" name="practicadeportiva" id="practicadeportiva" onclick="activar(this);" @isset($paciente->antecedentePersonal->practica_deportiva) checked @endisset>
                </span>
                <span class="span-width input-group-addon">Práctica Deportiva</span>
                <input type="text" class="form-control" aria-label="..." name="txtpracticadeportiva" id="txtpracticadeportiva"   @isset($paciente->antecedentePersonal->practica_deportiva_descripcion) value="{{$paciente->antecedentePersonal->practica_deportiva_descripcion}}" @else readonly  @endisset>
              </div>
            </div>
            <div class="col-md-4">
              <div class="input-group">
                <span class="span-width input-group-addon">Frecuencia</span>
                <input type="text" class="form-control" aria-label="..." name="txtpdfrecuencia" id="txtpdfrecuencia"    @isset($paciente->antecedentePersonal->practica_deportiva_frecuencia) value="{{$paciente->antecedentePersonal->practica_deportiva_frecuencia}}" @else readonly  @endisset>
              </div>
            </div>
          </div>

          <div class="row form-group ">
            <div class="col-md-3">
              <div class="input-group">
                <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                    <input type="checkbox" aria-label="" name="fuma" id="fuma" onclick="activar(this);" value="1"   @isset($paciente->antecedentePersonal->fuma) checked @endisset>
                </span>
                <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Fuma</span>

              </div>
            </div>
            <div class="col-md-2">
              <div class="input-group">
                <span class="span-width input-group-addon">Frecuencia</span>
                <input type="text" class="form-control" aria-label="..." name="txtfumafrecuencia" id="txtfuma"    @isset($paciente->antecedentePersonal->fuma) value="{{$paciente->antecedentePersonal->fuma_descripcion}}" @else readonly  @endisset>
              </div>
            </div>
            <div class="col-md-2">
                  <select class="form-control" name="cbofuma"  id="cbofuma"  @isset($paciente->antecedentePersonal->fuma_opciones) @else diabled @endisset>
                    <option value="ninguna">Ninguna</option>
                    <option value="bajo">Bajo</option>
                    <option value="medio">Medio</option>
                    <option value="alto">Alto</option>
                    </select>

            </div>
            <div class="col-md-2">
              <div class="input-group">
                <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                    <input type="checkbox" aria-label="" name="fumaba" id="fumaba" onclick="activar(this);" value="1" @isset($paciente->antecedentePersonal->fumaba) checked @endisset>
                </span>
                <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Fumaba</span>

              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                <span class="span-width input-group-addon">Prom. Semanal</span>
                <input type="text" class="form-control" aria-label="..." name="txtfumabapromsemana" id="txtfumaba"   @isset($paciente->antecedentePersonal->fuma_prom_semanal) value="{{$paciente->antecedentePersonal->fuma_prom_semanal}}" @else readonly  @endisset>
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
                        <input type="checkbox" aria-label="" name="alcohol" id="alcohol" onclick="activar(this);" value="1" @isset($paciente->antecedentePersonal->alcohol) checked @endisset>
                    </span>
                    <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Alcohol</span>

                  </div>
                </div>
                <div class="col-md-3">
                  <div class="input-group">
                    <span class="span-width input-group-addon">Frecuencia</span>
                    <input type="text" class="form-control" aria-label="..." name="txtalcoholfrecuencia" id="txtalcohol"   @isset($paciente->antecedentePersonal->alcohol_frecuencia) value="{{$paciente->antecedentePersonal->alcohol_frecuencia}}" @else readonly  @endisset>
                  </div>
                </div>
                <div class="col-md-2">
                      <select class="form-control" name="cboalcohol" id="cboalcohol"  @isset($paciente->antecedentePersonal->alcohol_descripcion) @else diabled @endisset>
                            <option value="ninguna">Ninguna</option>
                            <option value="bajo">Bajo</option>
                            <option value="medio">Medio</option>
                            <option value="alto">Alto</option>
                        </select>
                </div>

                <div class="col-md-4">
                  <div class="input-group">
                    <span class="span-width input-group-addon">Tiempo</span>
                    <input type="text" class="form-control" name="txtalcoholtiempo"  aria-label="..."  id="txtalcoholtiempo"   @isset($paciente->antecedentePersonal->alcohol_tiempo) value="{{$paciente->antecedentePersonal->alcohol_tiempo}}" @else readonly  @endisset >
                  </div>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-3">


                  <div class="input-group">
                    <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                        <input type="checkbox" aria-label="" name="coca" id="coca" onclick="activar(this);" value="1" @isset($paciente->antecedentePersonal->coca) checked @endisset>
                    </span>
                    <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Coca</span>

                  </div>
                </div>
                <div class="col-md-5">
                  <div class="input-group">
                    <span class="span-width input-group-addon">Frecuencia</span>
                    <input type="text" class="form-control" aria-label="..." name="txtfrecuenciacoca" id="txtcoca"   @isset($paciente->antecedentePersonal->coca_frecuencia) value="{{$paciente->antecedentePersonal->coca_frecuencia}}" @else readonly  @endisset>
                  </div>
                </div>
                <div class="col-md-4">
                      <select class="form-control" name="cbococa" id="cbococa"  @isset($paciente->antecedentePersonal->coca_descripcion) @else diabled @endisset>
                        <option value="ninguna">Ninguna</option>
                        <option value="bajo">Bajo</option>
                        <option value="medio">Medio</option>
                        <option value="alto">Alto</option>
                        </select>

                </div>
              </div>


                <div class="row form-group">
                  <div class="col-md-2">
                    <div class="input-group">
                      <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                          <input type="checkbox" aria-label="" id="drogas" name="drogas" onclick="activar(this);" value="1" @isset($paciente->antecedentePersonal->droga) checked @endisset >
                      </span>
                      <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Drogas</span>

                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="input-group">
                      <span class="span-width input-group-addon">Frecuencia</span>
                      <input type="text" class="form-control" aria-label="..." name="txtfrecuenciadrogas" id="txtdrogas"    @isset($paciente->antecedentePersonal->droga_frecuencia) value="{{$paciente->antecedentePersonal->droga_frecuencia}}" @else readonly  @endisset >
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="input-group ">
                      <span class="input-group-addon ">
                          <input type="checkbox" aria-label="" id="cafe" name="cafe" onclick="activar(this);" value="1" @isset($paciente->antecedentePersonal->cafe) checked @endisset>
                      </span>

                      <span class="input-group-addon span-width">Cafe</span>
                      <input type="text" class="form-control" aria-label="..."   name="txtfrecuenciacafe" id="txtcafe"  @isset($paciente->antecedentePersonal->cafe_frecuencia) value="{{$paciente->antecedentePersonal->cafe_frecuencia}}" @else readonly  @endisset >
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="input-group">
                      <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                          <input type="checkbox" aria-label="" value="1" id="marcapasos" name="marcapasos"  @isset($paciente->antecedentePersonal->marcapasos) checked @endisset >
                      </span>
                      <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Marcapasos</span>

                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="input-group">
                      <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                          <input type="checkbox" value="1" aria-label="" name="coronaipatia" @isset($paciente->antecedentePersonal->coronariopatia) checked @endisset >
                      </span>
                      <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Coronaipatia</span>

                    </div>
                  </div>
                </div>



                <div class="row form-group">

                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" value="1" aria-label="" name="epilipsia" @isset($paciente->antecedentePersonal->epilepsia) checked @endisset >
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Epilipsia</span>
                      </div>
                      </div>

                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" value="1" aria-label="" name="gota" @isset($paciente->antecedentePersonal->gota) checked @endisset >
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Gota</span>
                      </div>
                      </div>


                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" value="1" aria-label="" name="migrania" @isset($paciente->antecedentePersonal->migrana) checked @endisset >
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Migraña</span>
                      </div>
                      </div>

                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" value="1" aria-label="" name="vactetano" @isset($paciente->antecedentePersonal->vacuna_tetanos) checked @endisset >
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Vac. Tetanos</span>
                      </div>
                      </div>

                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" value="1" aria-label="" name="ronquidos"  @isset($paciente->antecedentePersonal->ronquidos) checked @endisset  >
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Ronquidos</span>
                      </div>
                      </div>

                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" value="1" aria-label="" name="humodeleña"  @isset($paciente->antecedentePersonal->humo_de_lena) checked @endisset  >
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Humo de Leña</span>
                      </div>

                      </div>


                </div>



                <div class="row form-group">

                      <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox"  aria-label=""name="diabetesmelitus" id ="diabetesmelitus" onclick="activar(this);" value="1" @isset($paciente->antecedentePersonal->diabetes_melitus) checked @endisset >
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Diabetes Melitus</span>
                      </div>
                      </div>

                      <div class="col-md-3">
                        <div class="input-group">
                          <span class="span-width input-group-addon">Año Dx</span>
                          <input type="text" class="form-control" aria-label="..."   name="txtaniodiabetesmelitus" id="txtdiabetesmelitus"  @isset($paciente->antecedentePersonal->diabetes_melitus_ano_dx) value="{{$paciente->antecedentePersonal->diabetes_melitus_ano_dx}}" @else readonly  @endisset>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="input-group">
                          <span class="span-width input-group-addon">Tratamiento Actual</span>
                          <input type="text" class="form-control" aria-label="..." name="txtdiabetesmelitustratamientoactual" id="txtdmtratamientoactual"    @isset($paciente->antecedentePersonal->diabetes_melitus_tratamiento_actual) value="{{$paciente->antecedentePersonal->diabetes_melitus_tratamiento_actual}}" @else readonly  @endisset>
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
                                <input type="checkbox" aria-label="" name="hipertencionarterial" id="hipertencionarterial" onclick="activar(this);" value="1" @isset($paciente->antecedentePersonal->hipertension_arterial) checked @endisset >
                            </span>
                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Hipertencion Arterial</span>
                        </div>
                        </div>

                        <div class="col-md-3">
                          <div class="input-group">
                            <span class="span-width input-group-addon">Año Dx</span>
                            <input type="text" class="form-control" aria-label="..." name="txtaniohipertencionarterial"   id="txthipertencionarterial" @isset($paciente->antecedentePersonal->hipertension_arterial_ano_dx) value="{{$paciente->antecedentePersonal->hipertension_arterial_ano_dx}}" @else readonly  @endisset >
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="input-group">
                            <span class="span-width input-group-addon">Tratamiento Actual</span>
                            <input type="text" class="form-control" aria-label="..."   name="txttratamientoactualhipertencionarterial" id="txthatratamientoactual"  @isset($paciente->antecedentePersonal->hipertension_arterial_tratamiento_actual) value="{{$paciente->antecedentePersonal->hipertension_arterial_tratamiento_actual}}" @else readonly  @endisset >
                          </div>
                        </div>
                  </div>

                    <div class="row form-group">

                          <div class="col-md-3">
                            <div class="input-group">
                              <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                                  <input type="checkbox" value="1" aria-label="" name="trombosis" @isset($paciente->antecedentePersonal->trombosis) checked @endisset >
                              </span>
                              <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Trombosis</span>
                          </div>
                          </div>

                          <div class="col-md-9">
                            <div class="input-group ">
                              <span class="input-group-addon ">
                                  <input type="checkbox" aria-label="" name="envardiovascular" id="envardiovascular" onclick="activar(this);" value="1" @isset($paciente->antecedentePersonal->enfermedad_cardio_vascular) checked @endisset >
                              </span>
                              <span class="input-group-addon span-width">Enf. Cardio Vascular</span>
                              <input type="text" class="form-control" aria-label="..."   name="txtenvardiovascular" id="txtenvardiovascular" @isset($paciente->antecedentePersonal->enfermedad_cardio_vascular_descripcion) value="{{$paciente->antecedentePersonal->enfermedad_cardio_vascular_descripcion}}" @else readonly  @endisset >
                            </div>
                          </div>

                    </div>


                      <div class="row form-group">

                            <div class="col-md-3">
                              <div class="input-group">
                                <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                                    <input type="checkbox"  aria-label="" onclick="activar(this);" id="insuficienciavenosa" name="insuficienciavenosa" value="1" @isset($paciente->antecedentePersonal->insuficiencia_venosa) checked @endisset >
                                </span>
                                <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Insuficiencia Venosa</span>
                            </div>
                            </div>

                            <div class="col-md-3">
                              <div class="input-group">
                                <span class="span-width input-group-addon">Año Dx</span>
                                <input type="text" class="form-control" aria-label="..."   name="txtanioinsuficienciavenosa" id="txtinsuficienciavenosa" @isset($paciente->antecedentePersonal->insuficiencia_venosa_ano_dx) value="{{$paciente->antecedentePersonal->insuficiencia_venosa_ano_dx}}" @else readonly  @endisset >
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="input-group">
                                <span class="span-width input-group-addon">Tratamiento Actual</span>
                                <input type="text" class="form-control" aria-label="..."   name="txtinsuficienciavenosatratamientoactual" id="txtinsuficienciavenosatratamientoactual" @isset($paciente->antecedentePersonal->insuficiencia_venosa_tratamiento_actual) value="{{$paciente->antecedentePersonal->insuficiencia_venosa_tratamiento_actual}}" @else readonly  @endisset >
                              </div>
                            </div>
                      </div>

                        <div class="row form-group">

                              <div class="col-md-3">
                                <div class="input-group">
                                  <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                                      <input type="checkbox" aria-label="" name="dislipidemia" id="dislipidemia" onclick="activar(this);" value="1" @isset($paciente->antecedentePersonal->dislipidemia) checked @endisset >
                                  </span>
                                  <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Dislipidemia</span>
                              </div>
                              </div>

                              <div class="col-md-3">
                                <div class="input-group">
                                  <span class="span-width input-group-addon">Año Dx</span>
                                  <input type="text" class="form-control" aria-label="..." name="txtdislipidemiaanio" id="txtdislipidemia"   @isset($paciente->antecedentePersonal->dislipidemia_ano_dx) value="{{$paciente->antecedentePersonal->dislipidemia_ano_dx}}" @else readonly  @endisset >
                                </div>
                                </div>

                                <div class="col-md-6">
                                  <div class="input-group">
                                    <span class="span-width input-group-addon">Tratamiento Actual</span>
                                    <input type="text" class="form-control" aria-label="..." name="txtdislipidemiatratamientoactual" id="txtdislipidemiatratamientoactual"   @isset($paciente->antecedentePersonal->dislipidemia_tratamiento_actual) value="{{$paciente->antecedentePersonal->dislipidemia_tratamiento_actual}}" @else readonly  @endisset >
                                  </div>
                                </div>
                      </div>

                        </div>




                        <div class="row form-group">

                              <div class="col-md-6">
                                <div class="input-group">
                                  <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                                      <input type="checkbox" aria-label="" onclick="activar(this);" id="enfermedadestiroidea" name="enfermedadestiroidea" value="1" @isset($paciente->antecedentePersonal->enfermedades_tiroidea) checked @endisset >
                                  </span>

                                  <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Enfermedades Tiroidea</span>
                                  <input type="text"  class="form-control"   name="txtenfermedadestiroidea" id="txtenfermedadestiroidea" @isset($paciente->antecedentePersonal->enfermedades_tiroidea_descripcion) value="{{$paciente->antecedentePersonal->enfermedades_tiroidea_descripcion}}" @else readonly  @endisset >
                              </div>
                              </div>

                              <div class="col-md-2">
                                <div class="input-group">
                                  <span class="span-width input-group-addon">Año Dx</span>
                                  <input type="text" class="form-control" aria-label="..."   name="txtanioenfermedadestiroidea" id="txtenfermedadestiroideaanio" @isset($paciente->antecedentePersonal->enfermedades_tiroidea_ano_dx) value="{{$paciente->antecedentePersonal->enfermedades_tiroidea_ano_dx}}" @else readonly  @endisset  >
                                </div>
                              </div>

                              <div class="col-md-4">
                                <div class="input-group">
                                  <span class="span-width input-group-addon">Tratamiento Actual</span>
                                  <input type="text" class="form-control" aria-label="..."   name="txtenfermedadestiroideatratamientoactual" id="txtenfermedadestiroideatratamientoactual" @isset($paciente->antecedentePersonal->enfermedades_tiroidea_tratamiendo_actual) value="{{$paciente->antecedentePersonal->enfermedades_tiroidea_tratamiendo_actual}}" @else readonly  @endisset  >
                                </div>
                              </div>
                        </div>

                          <div class="row form-group">

                                <div class="col-md-6">
                                  <div class="input-group">
                                    <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                                        <input type="checkbox" aria-label="" name="neoplasias" id="neoplasias" onclick="activar(this);" value="1"  @isset($paciente->antecedentePersonal->neoplasias) checked @endisset>
                                    </span>
                                    <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Neoplasias</span>
                                    <input type="text"   class="form-control"    name="txtneoplasia"  id="txtneoplasias" @isset($paciente->antecedentePersonal->neoplasias) value="{{$paciente->antecedentePersonal->neoplasias_descripcion}}" @else readonly  @endisset >
                                </div>
                                </div>

                                <div class="col-md-2">
                                  <div class="input-group">
                                    <span class="span-width input-group-addon">Año Dx</span>
                                    <input type="text" class="form-control" aria-label="..." name="txtneoplasiaanio" id="txtneoplasiasanio"   @isset($paciente->antecedentePersonal->neoplasias_ano_dx) value="{{$paciente->antecedentePersonal->neoplasias_ano_dx}}" @else readonly  @endisset >
                                  </div>
                                </div>

                                <div class="col-md-4">
                                  <div class="input-group">
                                    <span class="span-width input-group-addon">Tratamiento Actual</span>
                                    <input type="text" class="form-control" aria-label="..." name="txtneoplasiastratamientoactual" id="txtneoplasiastratamientoactual"   @isset($paciente->antecedentePersonal->neoplasias_tratamiento_actual) value="{{$paciente->antecedentePersonal->neoplasias_tratamiento_actual}}" @else readonly  @endisset  >
                                  </div>
                                </div>
                          </div>

                        <div class="row form-group">
                          <div class="col-md-12">
                            <div class="input-group">
                              <span class="input-group-addon">
                                  <input type="checkbox" aria-label="" id="hobbies"  name="hobbies" onclick="activar(this);" value="1" @isset($paciente->antecedentePersonal->hobbies) checked @endisset >
                              </span>
                              <span class="span-width input-group-addon">Hobbies</span>
                              <input type="text" class="form-control" aria-label="..." name="txthobbies" id="txthobbies"   @isset($paciente->antecedentePersonal->hobbies_descripcion) value="{{$paciente->antecedentePersonal->hobbies_descripcion}}" @else readonly  @endisset >
                            </div>
                          </div>
                        </div>
              </div>
          </div>
</div>
</form>
