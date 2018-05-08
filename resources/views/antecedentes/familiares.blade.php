<form  id="registrar_antecedente_personal_familiares">
  @csrf

<div class="col-md-12">
  <div class="row form-group">
    <div class="col-md-2">
    </div>
    <div class="col-md-4">
    </div>
    <div class="col-md-6 text-right">
      @isset($paciente->antecedentesFamiliares)
        <button type="button" name="button" class="btn btn-sm btn-warning conformidadfamiliares" tipo="actualizarfamiliares">   Actualizar </button>
        <input type="hidden" name="antecedentesfamiliares_id" value="{{$paciente->antecedentesFamiliares->id}}">
      @else
      <button type="button" name="button" class="btn btn-sm btn-success conformidadfamiliares" tipo="registrarfamiliares" >Guardar</button>
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
                        <div class="col-md-4">
                          <div class="input-group">
                            <span class="input-group-addon ">
                                <input type="checkbox"  value="1" @isset($paciente->antecedentesFamiliares->sobrepeso) checked @endisset   aria-label="" id="famsobrepeso" name="famsobrepeso">
                            </span>
                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Sobrepeso</span>
                                {{-- <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Indique el Año</span>
                              <input type="text" class="form-control" aria-label="..."> --}}
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="input-group">
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Parentesco</span>
                              <select

                              @isset($paciente->antecedentesFamiliares->sobrepeso)
                              @else
                                disabled
                              @endisset
                              class="form-control"  id="cbosobrepeso" name="cbosobrepeso" >
                                @isset($paciente->antecedentesFamiliares->sobrepeso)
                                  <option value="PrimerGrado" @if($paciente->antecedentesFamiliares->sobrepeso_parentesco_uno == "PrimerGrado") selected @else  @endif >Primer Grado</option>
                                  <option value="SegundoGrado" @if($paciente->antecedentesFamiliares->sobrepeso_parentesco_uno == "SegundoGrado") selected @else  @endif>Segundo Grado</option>
                                  {{-- @else
                                    <option value="Primer Grado">Primer Grado</option>
                                    <option value="Segundo Grado">Segundo Grado</option> --}}
                                @endisset
                              </select>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="input-group">
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Parentesco</span>
                              <select
                              @isset($paciente->antecedentesFamiliares->sobrepeso)
                                @else
                                  disabled
                                @endisset  class="form-control"   id="cbodossobrepeso" name="cbodossobrepeso">
                                      @isset($paciente->antecedentesFamiliares->sobrepeso)
                                        <option value="Primer Grado"  @if($paciente->antecedentesFamiliares->sobrepeso_parentesco_dos == "Primer Grado") selected @else  @endif>Primer Grado</option>
                                        <option value="Segundo Grado"  @if($paciente->antecedentesFamiliares->sobrepeso_parentesco_dos == "Segundo Grado") selected @else  @endif>Segundo Grado</option>
                                        @endisset
                              </select>
                          </div>
                        </div>
                  </div>


                  <div class="row form-group">
                        <div class="col-md-4">
                          <div class="input-group">
                            <span class="input-group-addon ">
                                <input type="checkbox"  value="1" @isset($paciente->antecedentesFamiliares->hipertension_arterial) checked @endisset   aria-label="" id="hipertensionarterial" name="hipertensionarterial">
                            </span>
                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Hipertensión Arterial</span>
                                {{-- <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Indique el Año</span>
                              <input type="text" class="form-control" aria-label="..."> --}}
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="input-group">
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Parentesco</span>
                              <select
                              @isset($paciente->antecedentesFamiliares->hipertension_arterial)
                                @else
                                  disabled
                                @endisset
                               class="form-control" id="cbohipertensionarterial" name="cbohipertensionarterial">

                                <option value="Primer Grado"  @if($paciente->antecedentesFamiliares->hipertension_arterial_parentesco_uno == "Primer Grado") selected @else  @endif>Primer Grado</option>
                                <option value="Segundo Grado"  @if($paciente->antecedentesFamiliares->hipertension_arterial_parentesco_uno == "Segundo Grado") selected @else  @endif>Segundo Grado</option>

                              </select>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="input-group">
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Parentesco</span>
                              <select
                              @isset($paciente->antecedentesFamiliares->hipertension_arterial)
                                @else
                                  disabled
                                @endisset
                               class="form-control"  id="cbodoshipertensionarterial" name="cbodoshipertensionarterial">

                                <option value="Primer Grado" @if($paciente->antecedentesFamiliares->hipertension_arterial_parentesco_dos == "Primer Grado") selected @else  @endif>Primer Grado</option>
                                <option value="Segundo Grado" @if($paciente->antecedentesFamiliares->hipertension_arterial_parentesco_dos == "Segundo Grado") selected @else  @endif>Segundo Grado</option>

                              </select>
                          </div>
                        </div>
                  </div>



                  <div class="row form-group">
                        <div class="col-md-4">
                          <div class="input-group">
                            <span class="input-group-addon ">
                                <input type="checkbox"  value="1" @isset($paciente->antecedentesFamiliares->enfermedad_cardiovascular) checked @endisset   aria-label="" id="enfermedadcardiovascular" name="enfermedadcardiovascular">
                            </span>
                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Enfermedad Cardiovascular</span>
                                {{-- <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Indique el Año</span>
                              <input type="text" class="form-control" aria-label="..."> --}}
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="input-group">
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Parentesco</span>
                              <select   @isset($paciente->antecedentesFamiliares->enfermedad_cardiovascular)
                                  @else
                                    disabled
                                  @endisset class="form-control"  id="cboenfermedadcardiovascular" name="cboenfermedadcardiovascular">

                                <option value="Primer Grado" @if($paciente->antecedentesFamiliares->enfermedad_cardiovascular_parentesco_uno == "Primer Grado") selected @else  @endif>Primer Grado</option>
                                <option value="Segundo Grado" @if($paciente->antecedentesFamiliares->enfermedad_cardiovascular_parentesco_uno == "Segundo Grado") selected @else  @endif>Segundo Grado</option>

                              </select>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="input-group">
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Parentesco</span>
                              <select
                              @isset($paciente->antecedentesFamiliares->enfermedad_cardiovascular)
                                  @else
                                    disabled
                                  @endisset class="form-control" id="cbodosenfermedadcardiovascular" name="cbodosenfermedadcardiovascular">
                                <option value="Primer Grado" @if($paciente->antecedentesFamiliares->enfermedad_cardiovascular_parentesco_dos == "Primer Grado") selected @else  @endif >Primer Grado</option>
                                <option value="Segundo Grado" @if($paciente->antecedentesFamiliares->enfermedad_cardiovascular_parentesco_dos == "Segundo Grado") selected @else  @endif >Segundo Grado</option>
                              </select>
                          </div>
                        </div>
                  </div>




                  <div class="row form-group">
                        <div class="col-md-4">
                          <div class="input-group">
                            <span class="input-group-addon ">
                                <input type="checkbox"  value="1" @isset($paciente->antecedentesFamiliares->insuficiencia_venosa) checked @endisset   aria-label="" id="faminsuficienciavenosa" name="faminsuficienciavenosa">
                            </span>
                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Insuficiencia venosa</span>
                                {{-- <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Indique el Año</span>
                              <input type="text" class="form-control" aria-label="..."> --}}
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="input-group">
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Parentesco</span>
                              <select  @isset($paciente->antecedentesFamiliares->insuficiencia_venosa)
                                  @else
                                    disabled
                                  @endisset  class="form-control" id="cboinsuficienciavenosa" name="cboinsuficienciavenosa">
                                <option value="Primer Grado"  @if($paciente->antecedentesFamiliares->insuficiencia_venosa_parentesco_uno == "Primer Grado") selected @else  @endif >Primer Grado</option>
                                <option value="Segundo Grado" @if($paciente->antecedentesFamiliares->insuficiencia_venosa_parentesco_uno == "Segundo Grado") selected @else  @endif >Segundo Grado</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="input-group">
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Parentesco</span>
                              <select
                              @isset($paciente->antecedentesFamiliares->insuficiencia_venosa)
                                  @else
                                    disabled
                                  @endisset  class="form-control" id="cbodosinsuficienciavenosa" name="cbodosinsuficienciavenosa">
                                <option value="Primer Grado" @if($paciente->antecedentesFamiliares->insuficiencia_venosa_parentesco_dos == "Primer Grado") selected @else  @endif  >Primer Grado</option>
                                <option value="Segundo Grado" @if($paciente->antecedentesFamiliares->insuficiencia_venosa_parentesco_dos == "Segundo Grado") selected @else  @endif >Segundo Grado</option>
                              </select>
                          </div>
                        </div>
                  </div>



                  <div class="row form-group">
                        <div class="col-md-4">
                          <div class="input-group">
                            <span class="input-group-addon ">
                                <input type="checkbox"  value="1" @isset($paciente->antecedentesFamiliares->dislipidemia) checked @endisset   aria-label="" id="famdislipidemia" name="famdislipidemia">
                            </span>
                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Dislipidemia</span>
                                {{-- <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Indique el Año</span>
                              <input type="text" class="form-control" aria-label="..."> --}}
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="input-group">
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Parentesco</span>
                              <select   @isset($paciente->antecedentesFamiliares->dislipidemia)
                                    @else
                                      disabled
                                    @endisset  class="form-control" id="cbodislipidemia" name="cbodislipidemia">
                                <option value="Primer Grado"  @if($paciente->antecedentesFamiliares->dislipidemia_parentesco_uno == "Primer Grado") selected @else  @endif  >Primer Grado</option>
                                <option value="Segundo Grado"  @if($paciente->antecedentesFamiliares->dislipidemia_parentesco_uno == "Segundo Grado") selected @else  @endif   >Segundo Grado</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="input-group">
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Parentesco</span>
                              <select
                              @isset($paciente->antecedentesFamiliares->dislipidemia)
                                    @else
                                      disabled
                                    @endisset class="form-control" id="cbodosdislipidemia" name="cbodosdislipidemia">
                                <option value="Primer Grado"  @if($paciente->antecedentesFamiliares->dislipidemia_parentesco_dos == "Primer Grado") selected @else  @endif  >Primer Grado</option>
                                <option value="Segundo Grado"  @if($paciente->antecedentesFamiliares->dislipidemia_parentesco_dos == "Segundo Grado") selected @else  @endif  >Segundo Grado</option>
                              </select>
                          </div>
                        </div>
                  </div>


                  <div class="row form-group">
                        <div class="col-md-4">
                          <div class="input-group">
                            <span class="input-group-addon ">
                                <input type="checkbox"  value="1" @isset($paciente->antecedentesFamiliares->diabetes_melitus) checked @endisset   aria-label="" id="famdiabetesmelitus" name="famdiabetesmelitus">
                            </span>
                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Diabetes Melitus</span>
                                {{-- <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Indique el Año</span>
                              <input type="text" class="form-control" aria-label="..."> --}}
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="input-group">
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Parentesco</span>
                              <select     @isset($paciente->antecedentesFamiliares->diabetes_melitus)
                                        @else
                                          disabled
                                        @endisset class="form-control"  id="cbodiabetesmelitus" name="cbodiabetesmelitus">
                                <option value="Primer Grado" @if($paciente->antecedentesFamiliares->diabetes_melitus_parentesco_uno == "Primer Grado") selected @else  @endif >Primer Grado</option>
                                <option value="Segundo Grado"@if($paciente->antecedentesFamiliares->diabetes_melitus_parentesco_uno == "Segundo Grado") selected @else  @endif >Segundo Grado</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="input-group">
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Parentesco</span>
                              <select  @isset($paciente->antecedentesFamiliares->diabetes_melitus)
                                        @else
                                          disabled
                                        @endisset class="form-control"   id="cbodosdiabetesmelitus" name="cbodosdiabetesmelitus">
                                <option value="Primer Grado"  @if($paciente->antecedentesFamiliares->diabetes_melitus_parentesco_dos == "Primer Grado") selected @else  @endif >Primer Grado</option>
                                <option value="Segundo Grado" @if($paciente->antecedentesFamiliares->diabetes_melitus_parentesco_dos == "Segundo Grado") selected @else  @endif>Segundo Grado</option>
                              </select>
                          </div>
                        </div>
                  </div>


                  <div class="row form-group">
                        <div class="col-md-4">
                          <div class="input-group">
                            <span class="input-group-addon ">
                                <input type="checkbox"  value="1" @isset($paciente->antecedentesFamiliares->glaucoma) checked @endisset   aria-label="" id="famglaucoma" name="famglaucoma">
                            </span>
                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Glaucoma</span>
                                {{-- <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Indique el Año</span>
                              <input type="text" class="form-control" aria-label="..."> --}}
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="input-group">
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Parentesco</span>
                              <select @isset($paciente->antecedentesFamiliares->glaucoma)
                                        @else
                                          disabled
                                        @endisset class="form-control" id="cboglaucoma" name="cboglaucoma">
                                <option value="Primer Grado"  @if($paciente->antecedentesFamiliares->glaucoma_parentesco_uno == "Primer Grado") selected @else  @endif >Primer Grado</option>
                                <option value="Segundo Grado" @if($paciente->antecedentesFamiliares->glaucoma_parentesco_uno == "Segundo Grado") selected @else  @endif >Segundo Grado</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="input-group">
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Parentesco</span>
                              <select  @isset($paciente->antecedentesFamiliares->glaucoma)
                                        @else
                                          disabled
                                        @endisset class="form-control" id="cbodosglaucoma" name="cbodosglaucoma">
                                <option value="Primer Grado" @if($paciente->antecedentesFamiliares->glaucoma_parentesco_dos == "Primer Grado") selected @else  @endif  >Primer Grado</option>
                                <option value="Segundo Grado" @if($paciente->antecedentesFamiliares->glaucoma_parentesco_dos == "Segundo Grado") selected @else  @endif >Segundo Grado</option>
                              </select>
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
                            <div class="input-group">
                              <span class="input-group-addon ">
                                  <input type="checkbox"  value="1" @isset($paciente->antecedentesFamiliares->cataratas) checked @endisset   aria-label="" id="famcataratas" name="famcataratas">
                              </span>
                              <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Cataratas</span>
                                  {{-- <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Indique el Año</span>
                                <input type="text" class="form-control" aria-label="..."> --}}
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="input-group">
                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Parentesco</span>
                                <select @isset($paciente->antecedentesFamiliares->cataratas)
                                          @else
                                            disabled
                                          @endisset  class="form-control"  id="cbocataratas" name="cbocataratas" >
                                  <option value="Primer Grado" @if($paciente->antecedentesFamiliares->cataratas_parentesco_uno == "Primer Grado") selected @else  @endif  >Primer Grado</option>
                                  <option value="Segundo Grado" @if($paciente->antecedentesFamiliares->cataratas_parentesco_uno == "Segundo Grado") selected @else  @endif >Segundo Grado</option>
                                </select>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="input-group">
                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Parentesco</span>
                                <select @isset($paciente->antecedentesFamiliares->cataratas)
                                          @else
                                            disabled
                                          @endisset  class="form-control" id="cbodoscataratas" name="cbodoscataratas">
                                  <option value="Primer Grado"  @if($paciente->antecedentesFamiliares->cataratas_parentesco_dos == "Primer Grado") selected @else  @endif >Primer Grado</option>
                                  <option value="Segundo Grado" @if($paciente->antecedentesFamiliares->cataratas_parentesco_dos == "Segundo Grado") selected @else  @endif >Segundo Grado</option>
                                </select>
                            </div>
                          </div>
                    </div>



                    <div class="row form-group">
                          <div class="col-md-3">
                            <div class="input-group">
                              <span class="input-group-addon ">
                                  <input type="checkbox"  value="1" @isset($paciente->antecedentesFamiliares->cancer_ginecologico) checked @endisset   aria-label="" id="famcancerginecologico" name="famcancerginecologico">
                              </span>
                              <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Cancer Ginecológico</span>
                                  {{-- <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Indique el Año</span>
                                <input type="text" class="form-control" aria-label="..."> --}}
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="input-group">
                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Parentesco</span>
                                <select @isset($paciente->antecedentesFamiliares->cancer_ginecologico)
                                          @else
                                            disabled
                                          @endisset  class="form-control"  id="cbocancerginecologico" name="cbocancerginecologico" >
                                  <option value="Primer Grado" @if($paciente->antecedentesFamiliares->cancer_ginecologico_parentesco_uno == "Primer Grado") selected @else  @endif  >Primer Grado</option>
                                  <option value="Segundo Grado" @if($paciente->antecedentesFamiliares->cancer_ginecologico_parentesco_uno == "Segundo Grado") selected @else  @endif >Segundo Grado</option>
                                </select>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="input-group">
                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Parentesco</span>
                                <select @isset($paciente->antecedentesFamiliares->cancer_ginecologico)
                                          @else
                                            disabled
                                          @endisset  class="form-control" id="cbodoscancerginecologico" name="cbodoscancerginecologico">
                                  <option value="Primer Grado" @if($paciente->antecedentesFamiliares->cancer_ginecologico_parentesco_dos == "Primer Grado") selected @else  @endif >Primer Grado</option>
                                  <option value="Segundo Grado"  @if($paciente->antecedentesFamiliares->cancer_ginecologico_parentesco_dos == "Segundo Grado") selected @else  @endif >Segundo Grado</option>
                                </select>
                            </div>
                          </div>
                          <div class="col-md-3">

                            <input type="text" class="form-control" placeholder="Especificar" aria-label="..." id="txtcancerginecologico" name="txtcancerginecologico"  @isset($paciente->antecedentesFamiliares->cancer_ginecologico_descripcion)  value="{{$paciente->antecedentesFamiliares->cancer_ginecologico_descripcion}}" @else readonly @endisset >

                          </div>
                    </div>




                    <div class="row form-group">
                          <div class="col-md-4">
                            <div class="input-group">
                              <span class="input-group-addon ">
                                <input type="checkbox"  value="1" @isset($paciente->antecedentesFamiliares->cancer_colon) checked @endisset   aria-label="" id="famcanercolon" name="famcancercolon">
                              </span>

                              <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Cancer de colon</span>
                                  {{-- <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Indique el Año</span>
                                <input type="text" class="form-control" aria-label="..."> --}}
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="input-group">
                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Parentesco</span>
                                <select @isset($paciente->antecedentesFamiliares->cancer_colon)
                                          @else
                                            disabled
                                          @endisset class="form-control" id="cbocanercolon" name="cbocancercolon">
                                  <option value="Primer Grado"  @if($paciente->antecedentesFamiliares->cancer_colon_parentesco_uno == "Primer Grado") selected @else  @endif >Primer Grado</option>
                                  <option value="Segundo Grado"  @if($paciente->antecedentesFamiliares->cancer_colon_parentesco_uno == "Segundo Grado") selected @else  @endif >Segundo Grado</option>
                                </select>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="input-group">
                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Parentesco</span>
                                <select @isset($paciente->antecedentesFamiliares->cancer_colon)
                                          @else
                                            disabled
                                          @endisset class="form-control" id="cbodoscanercolon" name="cbodoscancercolon">
                                  <option value="Primer Grado" @if($paciente->antecedentesFamiliares->cancer_colon_parentesco_dos == "Primer Grado") selected @else  @endif >Primer Grado</option>
                                  <option value="Segundo Grado" @if($paciente->antecedentesFamiliares->cancer_colon_parentesco_dos == "Segundo Grado") selected @else  @endif >Segundo Grado</option>
                                </select>
                            </div>
                          </div>
                    </div>

                    <div class="row form-group">
                          <div class="col-md-3">
                            <div class="input-group">
                              <span class="input-group-addon ">
                                  <input type="checkbox"  value="1" @if($paciente->antecedentesFamiliares->otros_formas_cancer) checked @endif   aria-label="" id="famotroscancer" name="famotroscancer">
                              </span>
                              <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Otras Formas de Cancer</span>
                                  {{-- <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Indique el Año</span>
                                <input type="text" class="form-control" aria-label="..."> --}}
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="input-group">
                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Parentesco</span>
                                <select  @isset($paciente->antecedentesFamiliares->otros_formas_cancer)
                                          @else
                                            disabled
                                          @endisset  class="form-control" id="cbootroscancer" name="cbootroscancer">
                                  <option value="Primer Grado" @if($paciente->antecedentesFamiliares->otros_formas_cancer_parentesco_uno == "Primer Grado") selected @else  @endif >Primer Grado</option>
                                  <option value="Segundo Grado" @if($paciente->antecedentesFamiliares->otros_formas_cancer_parentesco_uno == "Segundo Grado") selected @else  @endif >Segundo Grado</option>

                              </select>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="input-group">
                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Parentesco</span>
                                <select  @isset($paciente->antecedentesFamiliares->otros_formas_cancer)
                                          @else
                                            disabled
                                          @endisset  class="form-control" id="cbodosotroscancer" name="cbodosotroscancer">
                                  <option value="Primer Grado" @if($paciente->antecedentesFamiliares->otros_formas_cancer_parentesco_dos == "Primer Grado") selected @else  @endif >Primer Grado</option>
                                  <option value="Segundo Grado" @if($paciente->antecedentesFamiliares->otros_formas_cancer_parentesco_dos == "Segundo Grado") selected @else  @endif >Segundo Grado</option>

                                </select>
                            </div>
                          </div>
                          <div class="col-md-3">

                            <input type="text" class="form-control" placeholder="Especificar" aria-label="..."  id="txtotroscancer" name="txtotroscancer" @isset($paciente->antecedentesFamiliares->otros_formas_cancer_descripcion)  value="{{$paciente->antecedentesFamiliares->otros_formas_cancer_descripcion}}" @else readonly @endisset>

                          </div>
                    </div>

                    <div class="row form-group">
                          <div class="col-md-4">
                            <div class="input-group">
                              <span class="input-group-addon ">
                                  <input type="checkbox"  value="1" @isset($paciente->antecedentesFamiliares->epilepsia) checked @endisset   aria-label="" id="famepilepsia" name="famepilepsia">
                              </span>
                              <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Epilepsia</span>
                                  {{-- <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Indique el Año</span>
                                <input type="text" class="form-control" aria-label="..."> --}}
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="input-group">
                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Parentesco</span>
                                <select  @isset($paciente->antecedentesFamiliares->epilepsia)
                                          @else
                                            disabled
                                          @endisset  class="form-control" id="cboepilepsia" name="cboepilepsia" >
                                  <option value="Primer Grado" @if($paciente->antecedentesFamiliares->epilepsia_parentesco_uno == "Primer Grado") selected @else  @endif >Primer Grado</option>
                                  <option value="Segundo Grado" @if($paciente->antecedentesFamiliares->epilepsia_parentesco_uno == "Segundo Grado") selected @else  @endif >Segundo Grado</option>
                                </select>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="input-group">
                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Parentesco</span>
                                <select @isset($paciente->antecedentesFamiliares->epilepsia)
                                          @else
                                            disabled
                                          @endisset  class="form-control" id="cbodosepilepsia" name="cbodosepilepsia">
                                  <option value="Primer Grado"  @if($paciente->antecedentesFamiliares->epilepsia_parentesco_dos == "Primer Grado") selected @else  @endif >Primer Grado</option>
                                  <option value="Segundo Grado"  @if($paciente->antecedentesFamiliares->epilepsia_parentesco_dos == "Segundo Grado") selected @else  @endif >Segundo Grado</option>
                                </select>
                            </div>
                          </div>
                    </div>


                    <div class="row form-group">
                          <div class="col-md-4">
                            <div class="input-group">
                              <span class="input-group-addon ">
                                  <input type="checkbox"  value="1" @isset($paciente->antecedentesFamiliares->asma) checked @endisset   aria-label="" id="famasma" name="famasma">
                              </span>
                              <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Asma</span>
                                  {{-- <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Indique el Año</span>
                                <input type="text" class="form-control" aria-label="..."> --}}
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="input-group">
                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Parentesco</span>
                                <select @isset($paciente->antecedentesFamiliares->asma)
                                          @else
                                            disabled
                                          @endisset  class="form-control"  id="cboasma" name="cboasma">
                                  <option value="Primer Grado"  @if($paciente->antecedentesFamiliares->asma_parentesco_uno == "Primer Grado") selected @else  @endif >Primer Grado</option>
                                  <option value="Segundo Grado"  @if($paciente->antecedentesFamiliares->asma_parentesco_uno == "Segundo Grado") selected @else  @endif >Segundo Grado</option>
                                </select>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="input-group">
                            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Parentesco</span>
                                <select @isset($paciente->antecedentesFamiliares->asma)
                                          @else
                                            disabled
                                          @endisset  class="form-control"  id="cbodosasma" name="cbodosasma">
                                  <option value="Primer Grado"  @if($paciente->antecedentesFamiliares->asma_parentesco_dos == "Primer Grado") selected @else  @endif >Primer Grado</option>
                                  <option value="Segundo Grado"  @if($paciente->antecedentesFamiliares->asma_parentesco_dos == "Segundo Grado") selected @else  @endif >Segundo Grado</option>
                                </select>
                            </div>
                          </div>
                    </div>


                    <div class="row form-group">
                          <div class="col-md-12">
                            <div class="input-group">
                              <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Especificar Otros &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp </span>
                                <input type="text" class="form-control" aria-label="..." id="famespecificarotros" name="famespecificarotros" @isset($paciente->antecedentesFamiliares->familiares_otros)  value="{{$paciente->antecedentesFamiliares->familiares_otros}}"  @endisset>
                            </div>
                          </div>

                    </div>



              </div>
          </div>
      </div>

    </div>

    </form>
