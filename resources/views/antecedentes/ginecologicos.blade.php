<form class="" id="registrar_antecedente_personal_ginecologicos">
  @csrf
<div class="col-md-12">
  <div class="row form-group">
    <div class="col-md-2">
    </div>
    <div class="col-md-4">
    </div>
    <div class="col-md-6 text-right">
      @isset($paciente->antecedentesGinecologicos)
        <button type="button" name="button" class="btn btn-sm btn-warning conformidadginecologicos" tipo="actualizarginecologicos">   Actualizar </button>
        <input type="hidden" name="antecedentesginecologicos_id" value="{{$paciente->antecedentesGinecologicos->id}}">
      @else
      <button type="button" name="button" class="btn btn-sm btn-success conformidadginecologicos" tipo="registrarginecologicos" >Guardar</button>
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
                    <div class="col-md-12">
                      <div class="input-group">
                        <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Fecha de la Última Regla       &nbsp      &nbsp      &nbsp      &nbsp      &nbsp      &nbsp      &nbsp</span>
                     <input type="text"  @isset($paciente->antecedentesGinecologicos->fecha_ultima_regla)  value="{{$paciente->antecedentesGinecologicos->fecha_ultima_regla}}" @else readonly @endisset  class="form-control" aria-label="..." id="fechaultimaregla" name="fechaultimaregla">
                      </div>
                    </div>
              </div>

              <div class="row form-group">
                <div class="col-md-2">
                    <span class="form-control" style="border:none;"> Gesta y PARA
                    </span>
                </div>
                <div class="col-md-2">
                  <div class="input-group">

                    <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Gestaciones</span>
                    <input type="text" class="form-control"    @isset($paciente->antecedentesGinecologicos->gestaciones)  value="{{$paciente->antecedentesGinecologicos->gestaciones}}" @endisset    aria-label="" name="gestaciones">

                  </div>
                </div>
                <div class="col-md-2">
                  <div class="input-group">

                    <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">A termino</span>
                    <input type="text" class="form-control"    @isset($paciente->antecedentesGinecologicos->atermino)  value="{{$paciente->antecedentesGinecologicos->atermino}}"  @endisset    aria-label="" name="atermino">

                  </div>
                </div>
                <div class="col-md-2">
                  <div class="input-group">

                    <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Abortos</span>
                    <input type="text" class="form-control"    @isset($paciente->antecedentesGinecologicos->abortos) value="{{$paciente->antecedentesGinecologicos->abortos}}" @endisset    aria-label="" name="abortos">

                  </div>
                </div>
                <div class="col-md-2">
                  <div class="input-group">

                    <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Prematuro</span>
                    <input type="text" class="form-control"    @isset($paciente->antecedentesGinecologicos->prematuro)  value="{{$paciente->antecedentesGinecologicos->prematuro}}" @endisset    aria-label="" name="prematuro">
            
                  </div>
                </div>

                <div class="col-md-2">
                  <div class="input-group">

                    <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Vivos</span>
                    <input type="text" class="form-control"   @isset($paciente->antecedentesGinecologicos->vivos) value="{{$paciente->antecedentesGinecologicos->vivos}}"  @endisset    aria-label="" name="vivos">

                  </div>
                </div>

              </div>


              <div class="row form-group">
                <div class="col-md-2">
                    <span class="form-control" style="border:none;">Menarquía
                    </span>
                </div>
                <div class="col-md-6">
                  <div class="input-group">

                    <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Edad del inicio del primer sangrado menstrual</span>
                      <input type="text"  @isset($paciente->antecedentesGinecologicos->menarquia)  value="{{$paciente->antecedentesGinecologicos->menarquia}}"  @endisset  class="form-control"    name="menarquia">
                  </div>
                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <div class="input-group">

                    <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Regimen Catamenial &nbsp      &nbsp      &nbsp      &nbsp      &nbsp      &nbsp     &nbsp     &nbsp      &nbsp</span>
                      <input type="text"  @isset($paciente->antecedentesGinecologicos->regimen_catamenial)  value="{{$paciente->antecedentesGinecologicos->regimen_catamenial}}"  @endisset  class="form-control"     name="regimencatamenial">
                  </div>
                </div>
              </div>

              <div class="row form-group ">
                <div class="col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                        <input type="checkbox"  value="1"  @isset($paciente->antecedentesGinecologicos->ultimo_parto)  checked @endisset    aria-label="" name="ultimoparto" id="ultimoparto">
                    </span>
                    <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Último Parto</span>
                    {{-- <input type="text"  @isset($paciente->antecedentesGinecologicos->)  value="{{$paciente->antecedentesGinecologicos->}}" @else readonly @endisset  class="form-control" aria-label="..."> --}}
                  </div>
                </div>

                <div class="col-md-2">
                  <div class="input-group">
                    <span class="span-width input-group-addon">Año</span>
                    <input type="text"  @isset($paciente->antecedentesGinecologicos->ultimo_parto_anio)  value="{{$paciente->antecedentesGinecologicos->ultimo_parto_anio}}" @else readonly @endisset  class="form-control" aria-label="..." name="txtanioultimoparto" id="txtanioultimoparto" readonly>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="input-group">
                    <span class="span-width input-group-addon">Descripción</span>
                    <input type="text"  @isset($paciente->antecedentesGinecologicos->ultimo_parto_descripcion)  value="{{$paciente->antecedentesGinecologicos->ultimo_parto_descripcion}}" @else readonly @endisset  class="form-control" aria-label="..." name="txtdescripcionultimoparto" id="txtdescripcionultimoparto" readonly>
                  </div>
                </div>
              </div>

              <div class="row form-group ">
                <div class="col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                        <input type="checkbox"  value="1"  @isset($paciente->antecedentesGinecologicos->ultimo_papanocolau)  checked @endisset    aria-label="" name="papanocolau" id="papanocolau">
                    </span>
                    <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Último Papanocolau</span>
                    {{-- <input type="text"  @isset($paciente->antecedentesGinecologicos->)  value="{{$paciente->antecedentesGinecologicos->}}" @else readonly @endisset  class="form-control" aria-label="..."> --}}
                  </div>
                </div>

                <div class="col-md-2">
                  <div class="input-group">
                    <span class="span-width input-group-addon">Año</span>
                    <input type="text"  @isset($paciente->antecedentesGinecologicos->ultimo_papanocolau_anio)  value="{{$paciente->antecedentesGinecologicos->ultimo_papanocolau_anio}}" @else readonly @endisset  class="form-control" aria-label="..." name="txtaniopapanocolau" id="txtaniopapanocolau" readonly>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="input-group">
                    <span class="span-width input-group-addon">Descripción</span>
                    <input type="text"  @isset($paciente->antecedentesGinecologicos->ultimo_papanocolau_descripcion)  value="{{$paciente->antecedentesGinecologicos->ultimo_papanocolau_descripcion}}" @else readonly @endisset  class="form-control" aria-label="..." name="txtdescripcionpapanocolau" id="txtdescripcionpapanocolau" readonly>
                  </div>
                </div>
              </div>


              <div class="row form-group ">
                 <div class="col-md-4">
                   <div class="input-group">
                     <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                         <input type="checkbox"  value="1"  @isset($paciente->antecedentesGinecologicos->ultima_Mamografia)  checked @endisset    aria-label="" id="ultimamamografia" name="ultimamamografia">
                     </span>
                     <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Última Mamografía</span>
                     {{-- <input type="text"  @isset($paciente->antecedentesGinecologicos->)  value="{{$paciente->antecedentesGinecologicos->}}" @else readonly @endisset  class="form-control" aria-label="..."> --}}
                   </div>
                 </div>

                 <div class="col-md-2">
                   <div class="input-group">
                     <span class="span-width input-group-addon">Año</span>
                     <input type="text"  @isset($paciente->antecedentesGinecologicos->ultima_Mamografia_anio)  value="{{$paciente->antecedentesGinecologicos->ultima_Mamografia_anio}}" @else readonly @endisset  class="form-control" aria-label="..." name="txtanioultimamamografia" id="txtanioultimamamografia" readonly>
                   </div>
                 </div>

                 <div class="col-md-6">
                   <div class="input-group">
                     <span class="span-width input-group-addon">Descripción</span>
                     <input type="text"  @isset($paciente->antecedentesGinecologicos->ultima_Mamografia_descripcion)  value="{{$paciente->antecedentesGinecologicos->ultima_Mamografia_descripcion}}" @else readonly @endisset  class="form-control" aria-label="..." name="txtdescripcionultimamamografia" id="txtdescripcionultimamamografia" readonly>
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


                                 <div class="row form-group ">
                                    <div class="col-md-4">
                                      <div class="input-group">
                                        <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                                            <input type="checkbox"  value="1"  @isset($paciente->antecedentesGinecologicos->incontinencia_urinaria)  checked @endisset    aria-label="" id="incotinenciaurinaria" name="incotinenciaurinaria">
                                        </span>
                                        <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Incotinencia Úrinaria</span>
                                        {{-- <input type="text"  @isset($paciente->antecedentesGinecologicos->)  value="{{$paciente->antecedentesGinecologicos->}}" @else readonly @endisset  class="form-control" aria-label="..."> --}}
                                      </div>
                                    </div>

                                    <div class="col-md-2">
                                      <div class="input-group">
                                        <span class="span-width input-group-addon">Año</span>
                                        <input type="text"  @isset($paciente->antecedentesGinecologicos->incontinencia_urinaria_anio)  value="{{$paciente->antecedentesGinecologicos->incontinencia_urinaria_anio}}" @else readonly @endisset  class="form-control" aria-label="..."  id="txtanioincotinenciaurinaria" name="txtanioincotinenciaurinaria" readonly>
                                      </div>
                                    </div>

                                    <div class="col-md-6">
                                      <div class="input-group">
                                        <span class="span-width input-group-addon">Descripción</span>
                                        <input type="text"  @isset($paciente->antecedentesGinecologicos->incontinencia_urinaria_descripcion)  value="{{$paciente->antecedentesGinecologicos->incontinencia_urinaria_descripcion}}" @else readonly @endisset  class="form-control" aria-label="..." id="txtdescripcionincotinenciaurinaria" name="txtdescripcionincotinenciaurinaria" readonly>
                                      </div>
                                    </div>
                                  </div>


                                  <div class="row form-group ">
                                    <div class="col-md-4">
                                      <div class="input-group">
                                        <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                                            <input type="checkbox"  value="1"  @isset($paciente->antecedentesGinecologicos->ultimo_chequeo_ginecologico)  checked @endisset    aria-label="" id="ultimoginecologico" name="ultimoginecologico">
                                        </span>
                                        <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Último chequeo Ginecológico</span>
                                        {{-- <input type="text"  @isset($paciente->antecedentesGinecologicos->)  value="{{$paciente->antecedentesGinecologicos->}}" @else readonly @endisset  class="form-control" aria-label="..."> --}}
                                      </div>
                                    </div>

                                    <div class="col-md-2">
                                      <div class="input-group">
                                        <span class="span-width input-group-addon">Año</span>
                                        <input type="text"  @isset($paciente->antecedentesGinecologicos->ultimo_chequeo_ginecologico_anio)  value="{{$paciente->antecedentesGinecologicos->ultimo_chequeo_ginecologico_anio}}" @else readonly @endisset  class="form-control" aria-label="..." id="txtanioultimoginecologico" name="txtanioultimoginecologico" readonly>
                                      </div>
                                    </div>

                                    <div class="col-md-6">
                                      <div class="input-group">
                                        <span class="span-width input-group-addon">Descripción</span>
                                        <input type="text"  @isset($paciente->antecedentesGinecologicos->ultimo_chequeo_ginecologico_descripcion)  value="{{$paciente->antecedentesGinecologicos->ultimo_chequeo_ginecologico_descripcion}}" @else readonly @endisset  class="form-control" aria-label="..." id="txtdescripcionultimoginecologico" name="txtdescripcionultimoginecologico" readonly>
                                      </div>
                                    </div>
                                  </div>




                <div class="row form-group ">
                  <div class="col-md-12">
                    <div class="input-group">
                      <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                          <input type="checkbox"  value="1"  @isset($paciente->antecedentesGinecologicos->uso_anticonceptivo)  checked @endisset    aria-label="" id="UsoAnticonceptivo" name="UsoAnticonceptivo">
                      </span>
                      <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Uso de Anticonceptivo</span>
                        <input type="text"  @isset($paciente->antecedentesGinecologicos->uso_anticonceptivo_descripcion)  value="{{$paciente->antecedentesGinecologicos->uso_anticonceptivo_descripcion}}" @else readonly @endisset  class="form-control" aria-label="..." id="txtUsoAnticonceptivo" name="txtUsoAnticonceptivo" readonly>
                      </div>
                  </div>
                </div>

                <div class="row form-group ">
                  <div class="col-md-12">
                    <div class="input-group">
                      <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                          <input type="checkbox"  value="1"  @isset($paciente->antecedentesGinecologicos->otros_antecedentes)  checked @endisset    aria-label="" id="otrosantecedentes" name="otrosantecedentes">
                      </span>
                      <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Otros Antecedentes</span>
                        <input type="text"  @isset($paciente->antecedentesGinecologicos->otros_antecedentes_descripcion)  value="{{$paciente->antecedentesGinecologicos->otros_antecedentes_descripcion}}" @else readonly @endisset  class="form-control" aria-label="..." id="txtotrosantecedentes" name="txtotrosantecedentes" readonly>
                      </div>
                  </div>
                </div>

                <div class="row form-group ">
                  <div class="col-md-4">
                    <div class="input-group">
                      <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                          <input type="checkbox"  value="1"  @isset($paciente->antecedentesGinecologicos->cancer_cervix)  checked @endisset    aria-label="" id="cancercervix" name="cancercervix">
                      </span>
                      <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Cancer de Cervix</span>
                      {{-- <input type="text"  @isset($paciente->antecedentesGinecologicos->)  value="{{$paciente->antecedentesGinecologicos->}}" @else readonly @endisset  class="form-control" aria-label="..."> --}}
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="input-group">
                      <span class="span-width input-group-addon">Año</span>
                      <input type="text"  @isset($paciente->antecedentesGinecologicos->cancer_cervix_anio)  value="{{$paciente->antecedentesGinecologicos->cancer_cervix_anio}}" @else readonly @endisset  class="form-control" aria-label="..." id="txtaniocancercervix" name="txtaniocancercervix" readonly>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="span-width input-group-addon">Descripción</span>
                      <input type="text"  @isset($paciente->antecedentesGinecologicos->cancer_cervix_descripcion)  value="{{$paciente->antecedentesGinecologicos->cancer_cervix_descripcion}}" @else readonly @endisset  class="form-control" aria-label="..." id="txtdescripcioncancercervix" name="txtdescripcioncancercervix" readonly>
                    </div>
                  </div>
                </div>

                <div class="row form-group ">
                  <div class="col-md-4">
                    <div class="input-group">
                      <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                          <input type="checkbox"  value="1"  @isset($paciente->antecedentesGinecologicos->cancer_mama)  checked @endisset    aria-label="" id="cancermama" name="cancermama">
                      </span>
                      <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Cancer de Mama</span>
                      {{-- <input type="text"  @isset($paciente->antecedentesGinecologicos->)  value="{{$paciente->antecedentesGinecologicos->}}" @else readonly @endisset  class="form-control" aria-label="..."> --}}
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="input-group">
                      <span class="span-width input-group-addon">Año</span>
                      <input type="text"  @isset($paciente->antecedentesGinecologicos->cancer_mama_anio)  value="{{$paciente->antecedentesGinecologicos->cancer_mama_anio}}" @else readonly @endisset  class="form-control" aria-label="..." id="txtaniocancermama" name="txtaniocancermama" readonly>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="span-width input-group-addon">Descripción</span>
                      <input type="text"  @isset($paciente->antecedentesGinecologicos->cancer_mama_descripcion)  value="{{$paciente->antecedentesGinecologicos->cancer_mama_descripcion}}" @else readonly @endisset  class="form-control" aria-label="..." id="txtdescripcioncancermama" name="txtdescripcioncancermama" readonly>
                    </div>
                  </div>
                </div>

              </div>
          </div>
      </div>


    </div>


</form>
