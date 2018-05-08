<form class="" action="" method="" id="registrar_antecedente_personal_orl">
  @csrf
<div class="col-md-12">
  <div class="row form-group">
    <div class="col-md-2">
    </div>
    <div class="col-md-4">
    </div>
    <div class="col-md-6 text-right">
      @isset($paciente->antecedentesOrl)
        <button type="button" name="button" class="btn btn-sm btn-warning conformidadorl" tipo="actualizarorl">   Actualizar </button>
        <input type="hidden" name="antecedentesorl_id" value="{{$paciente->antecedentesOrl->id}}">
      @else
      <button type="button" name="button" class="btn btn-sm btn-success conformidadorl" tipo="registrarorl" >Guardar</button>
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


                <div class="row form-group ">
                  <div class="col-md-4">
                    <div class="input-group">
                      <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                          <input type="checkbox" value="1"  @isset($paciente->antecedentesOrl->hipoacusia) checked @endisset   aria-label="" id="hipoacusia" name="hipoacusia">
                      </span>
                      <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Hipoacusia</span>
                       <input type="text" class="form-control" aria-label="..." id="txthipoacusia" name="txthipoacusia"  @isset($paciente->antecedentesOrl->hipoacusia_descripcion)  value="{{$paciente->antecedentesOrl->hipoacusia_descripcion}}" @else readonly @endisset  >
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="input-group">
                      <span class="span-width input-group-addon">Año Dx.</span>
                      <input type="text" class="form-control" aria-label="..." id="txtaniohipoacusia" name="txtaniohipoacusia"  @isset($paciente->antecedentesOrl->hipoacusia_anio_dx)  value="{{$paciente->antecedentesOrl->hipoacusia_anio_dx}}" @else readonly @endisset  >
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="span-width input-group-addon">Tratamiento Actual</span>
                      <input type="text" class="form-control" aria-label="..." id="txttratamientoactualhipoacusia" name="txttratamientoactualhipoacusia"  @isset($paciente->antecedentesOrl->hipoacusia_tratamiento_actual)  value="{{$paciente->antecedentesOrl->hipoacusia_tratamiento_actual}}" @else readonly @endisset  >
                    </div>
                  </div>
                </div>

                <div class="row form-group ">
                  <div class="col-md-4">
                    <div class="input-group">
                      <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                          <input type="checkbox" value="1"  @isset($paciente->antecedentesOrl->traumas) checked @endisset   aria-label="" id="traumas" name="traumas">
                      </span>
                      <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Traumas</span>
                       <input type="text" class="form-control" aria-label="..." id="txttraumas" name="txttraumas"  @isset($paciente->antecedentesOrl->traumas_descripcion)  value="{{$paciente->antecedentesOrl->traumas_descripcion}}" @else readonly @endisset  >
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="input-group">
                      <span class="span-width input-group-addon">Año Dx.</span>
                      <input type="text" class="form-control" aria-label="..."  id="txtaniotraumas" name="txtaniotraumas"  @isset($paciente->antecedentesOrl->traumas_anio_dx)  value="{{$paciente->antecedentesOrl->traumas_anio_dx}}" @else readonly @endisset   >
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="span-width input-group-addon">Tratamiento Actual</span>
                      <input type="text" class="form-control" aria-label="..."  id="txttratamientoactualtraumas" name="txttratamientoactualtraumas"  @isset($paciente->antecedentesOrl->traumas_tratamiento_actual)  value="{{$paciente->antecedentesOrl->traumas_tratamiento_actual}}" @else readonly @endisset  >
                    </div>
                  </div>
                </div>

                <div class="row form-group ">
                  <div class="col-md-4">
                    <div class="input-group">
                      <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                          <input type="checkbox" value="1"  @isset($paciente->antecedentesOrl->otitiscronica) checked @endisset   aria-label="" id="otitiscronica" name="otitiscronica">
                      </span>
                      <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Otitis Crónica</span>
                       <input type="text" class="form-control" aria-label="..."   id="txtotitiscronica" name="txtotitiscronica"  @isset($paciente->antecedentesOrl->otitiscronica_descripcion)  value="{{$paciente->antecedentesOrl->otitiscronica_descripcion}}" @else readonly @endisset  >
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="input-group">
                      <span class="span-width input-group-addon">Año Dx.</span>
                      <input type="text" class="form-control" aria-label="..." id="txtaniootitiscronica" name="txtaniootitiscronica"  @isset($paciente->antecedentesOrl->otitiscronica_anio_dx)  value="{{$paciente->antecedentesOrl->otitiscronica_anio_dx}}" @else readonly @endisset  >
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="span-width input-group-addon">Tratamiento Actual</span>
                      <input type="text" class="form-control" aria-label="..." id="txttratamientoactualotitiscronica" name="txttratamientoactualotitiscronica"  @isset($paciente->antecedentesOrl->otitiscronica_tratamiento_actual)  value="{{$paciente->antecedentesOrl->otitiscronica_tratamiento_actual}}" @else readonly @endisset  >
                    </div>
                  </div>
                </div>


                <div class="row form-group">

                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" value="1"  @isset($paciente->antecedentesOrl->sordera) checked @endisset   id="sordera" name="sordera" aria-label="">
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Sordera</span>
                      </div>
                      </div>

                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" value="1"  @isset($paciente->antecedentesOrl->meningitis) checked @endisset    aria-label="" id="meningitis" name="meningitis">
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Meningitis</span>
                      </div>
                      </div>


                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" value="1"  @isset($paciente->antecedentesOrl->sarampion) checked @endisset   aria-label="" id="sarampion"  name="sarampion">
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Sarampión</span>
                      </div>
                      </div>

                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" value="1"  @isset($paciente->antecedentesOrl->exp_lab_al_ruido) checked @endisset   aria-label="" id="ExpLaboralRuido" name="ExpLaboralRuido">
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Exp. Laboral a ruido</span>
                      </div>
                      </div>

                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" value="1"  @isset($paciente->antecedentesOrl->tiro) checked @endisset   aria-label="" id="tiro_orl" name="tiro_orl">
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Tiro</span>
                      </div>
                      </div>

                </div>


                <div class="row form-group">

                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" value="1"  @isset($paciente->antecedentesOrl->tec) checked @endisset   aria-label="" id="tec_orl" name="tec_orl">
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">T.E.C</span>
                      </div>
                      </div>

                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" value="1"  @isset($paciente->antecedentesOrl->parotiditis) checked @endisset   aria-label="" id="parotiditis" name="parotiditis">
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Parotiditis</span>
                      </div>
                      </div>


                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" value="1"  @isset($paciente->antecedentesOrl->uso_audifonos) checked @endisset   aria-label="" id="uso_audifonos" name="uso_audifonos">
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Uso de Audífonos</span>
                      </div>
                      </div>

                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" value="1"  @isset($paciente->antecedentesOrl->uso_ototoxicos) checked @endisset   aria-label="" id="uso_ototoxicos" name="uso_ototoxicos">
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Uso de Ototóxicos</span>
                      </div>
                      </div>

                      <div class="col-md-2">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" value="1"  @isset($paciente->antecedentesOrl->discoteca) checked @endisset   aria-label="" id="discotecas" name="discotecas">
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Discotecas</span>
                      </div>
                      </div>


                </div>

            </div>
        </div>
    </div>





      <div class="box box-default">
          <div class="box-header with-border"><h5><strong>Proteccion Auditiva en Área de Ruido</strong> </h5>
              <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse">
                      <i class="fa fa-plus"></i>
                  </button>
              </div>
          </div>
          <div class="box-body">
              <div class="row col-md-12">

                <div class="row form-group">

                  <div class="col-md-6">
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <div class="input-group ">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" value="1"  @isset($paciente->antecedentesOrl->tapones_auditivos) checked @endisset   aria-label="" id="taponesauditivos" name="taponesauditivos">
                          </span>
                          <span class="input-group-addon span-width">Tapones Auditivos</span>
                          <select
                            @isset($paciente->antecedentesOrl->tapones_auditivos)
                               @else
                                 disabled
                               @endisset
                           class="form-control"   id="cbotaponesauditivos" name="cbotaponesauditivos">

                              @isset($paciente->antecedentesOrl->tapones_auditivos)

                                <option value="si"  @if($paciente->antecedentesOrl->tapones_auditivos_descripcion == "si") selected @else  @endif >si</option>
                                <option value="no"  @if($paciente->antecedentesOrl->tapones_auditivos_descripcion == "no") selected @else  @endif >no</option>
                                 @else
                                   <option value="si">si</option>
                                   <option value="no">no</option>
                                 @endisset
                            </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <div class="input-group ">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" value="1"  @isset($paciente->antecedentesOrl->orejeras) checked @endisset   aria-label="" id="orejeras" name="orejeras">
                          </span>
                          <span class="input-group-addon span-width">Orejeras</span>
                          <select   @isset($paciente->antecedentesOrl->orejeras)
                               @else
                                 disabled
                               @endisset class="form-control"   id="cboorejeras" name="cboorejeras">
                               @isset($paciente->antecedentesOrl->orejeras)
                                 <option value="si"  @if($paciente->antecedentesOrl->orejeras_descripcion == "si") selected @else  @endif>si</option>
                                 <option value="no" @if($paciente->antecedentesOrl->orejeras_descripcion == "no") selected @else  @endif>no</option>

                                 @else
                                   <option value="si"  >si</option>
                                   <option value="no" >no</option>

                                 @endisset
                            </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <div class="input-group ">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" value="1"  @isset($paciente->antecedentesOrl->algodones) checked @endisset   aria-label="" id="algodones" name="algodones">
                          </span>
                          <span class="input-group-addon span-width">Algodones</span>
                          <select  @isset($paciente->antecedentesOrl->algodones)
                               @else
                                 disabled
                               @endisset class="form-control"  id="cboalgodones" name="cboalgodones">
                               @isset($paciente->antecedentesOrl->algodones)
                                 <option value="si" @if($paciente->antecedentesOrl->algodones_descripcion == "si") selected @else  @endif >si</option>
                                 <option value="no" @if($paciente->antecedentesOrl->algodones_descripcion == "si") selected @else  @endif >no</option>

                                    @else
                                <option value="si" >si</option>
                                <option value="no" >no</option>

                               @endisset
                            </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <div class="input-group ">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" value="1"  @isset($paciente->antecedentesOrl->otros_especificar) checked @endisset   aria-label="" id="otrosespecificar" name="otrosespecificar">
                          </span>
                          <span class="input-group-addon span-width">Otros Especificar</span>
                          <select  @isset($paciente->antecedentesOrl->otros_especificar)
                               @else
                                 disabled
                               @endisset class="form-control"  id="cbootrosespecificar" name="cbootrosespecificar">
                               @isset($paciente->antecedentesOrl->otros_especificar)
                                 <option value="si" @if($paciente->antecedentesOrl->otros_especificar_descripcion == "si") selected @else  @endif>si</option>
                                 <option value="no" @if($paciente->antecedentesOrl->otros_especificar_descripcion == "si") selected @else  @endif>no</option>

                                  @else
                                    <option value="si">si</option>
                                    <option value="no">no</option>
                              @endisset
                            </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <div class="input-group ">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input type="checkbox" value="1"  @isset($paciente->antecedentesOrl->apreciacion_ruido) checked @endisset   aria-label="" id="apreciacionruido" name="apreciacionruido">
                          </span>
                          <span class="input-group-addon span-width">Apreciación del Ruido</span>
                          <select  @isset($paciente->antecedentesOrl->apreciacion_ruido)
                               @else
                                 disabled
                               @endisset  class="form-control"  id="cboapreciacionruido" name="cboapreciacionruido">
                               @isset($paciente->antecedentesOrl->apreciacion_ruido)
                                 <option value="si" @if($paciente->antecedentesOrl->apreciacion_ruido_descripcion == "si") selected @else  @endif >si</option>
                                 <option value="no" @if($paciente->antecedentesOrl->apreciacion_ruido_descripcion == "si") selected @else  @endif >no</option>
                                    @else
                              <option value="si">si</option>
                              <option value="no">no</option>
                              @endisset
                            </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-12 form-group">
                            <h5>Observaciones: </h5>
                            <textarea  style="resize:none;" rows="8" cols="80" id="observacionesorl" name="obsorl">
                               @isset($paciente->antecedentesOrl->observaciones)  {{$paciente->antecedentesOrl->observaciones}}  @endisset
                            </textarea>
                        </div>
                      </div>
                  </div>
                </div>

              </div>
          </div>
      </div>




    </div>

    </form>
