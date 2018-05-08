<form class="" id="registrar_antecedente_personal_neumologicos">

@csrf
<div class="col-md-12">
  <div class="row form-group">
    <div class="col-md-2">
    </div>
    <div class="col-md-4">
    </div>
    <div class="col-md-6 text-right">
      @isset($paciente->antecedentesNeumologicos)
        <button type="button" name="button" class="btn btn-sm btn-warning conformidadneumologicos" tipo="actualizarneumologicos">   Actualizar </button>
        <input type="hidden" name="antecedentesneumologicos_id" value="{{$paciente->antecedentesNeumologicos->id}}">
      @else
      <button type="button" name="button" class="btn btn-sm btn-success conformidadneumologicos" tipo="registrarneumologicos" >Guardar</button>
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
                          <input  type="checkbox"  value="1"   @isset($paciente->antecedentesNeumologicos->asma) checked @endisset   @isset($paciente->antecedentesNeumologicos->asma) checked @endisset   aria-label="" id="asma" name="asma">
                      </span>
                      <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Asma</span>
                       <input type="text" class="form-control" aria-label="..." id="txtasma" name="txtasma"   @isset($paciente->antecedentesNeumologicos->asma_descripcion)  value="{{$paciente->antecedentesNeumologicos->asma_descripcion}}" @else readonly @endisset>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="input-group">
                      <span class="span-width input-group-addon">Edad Dx.</span>
                      <input type="text" class="form-control" aria-label="..." id="txtedadasma" name="txtedadasma"   @isset($paciente->antecedentesNeumologicos->asma_edad_dx)  value="{{$paciente->antecedentesNeumologicos->asma_edad_dx}}" @else readonly @endisset>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="span-width input-group-addon">Última Crisis</span>
                      <input type="text" class="form-control" aria-label="..." id="txtultimacrisisasma" name="txtultimacrisisasma"   @isset($paciente->antecedentesNeumologicos->asma_ultima_crisis)  value="{{$paciente->antecedentesNeumologicos->asma_ultima_crisis}}" @else readonly @endisset>
                    </div>
                  </div>
                </div>

                <div class="row form-group ">
                  <div class="col-md-4">
                    <div class="input-group">
                      <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                          <input  type="checkbox"  value="1"    @isset($paciente->antecedentesNeumologicos->rinitis) checked @endisset   aria-label="" id="rinitis" name="rinitis">
                      </span>
                      <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Rinitis</span>

                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="input-group">
                      <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                          <input  type="checkbox"  value="1"      @isset($paciente->antecedentesNeumologicos->epoc) checked @endisset   aria-label="" id="epoc" name="epoc">
                      </span>
                      <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">EPOC</span>

                    </div>
                  </div>
                </div>

                <div class="row form-group ">
                  <div class="col-md-4">
                    <div class="input-group">
                      <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                          <input  type="checkbox"  value="1"   @isset($paciente->antecedentesNeumologicos->tos_nocturna) checked @endisset   @isset($paciente->antecedentesNeumologicos->tos_nocturna) checked @endisset   aria-label="" id="tosnocturna" name="tosnocturna">
                      </span>
                      <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Tos Nocturna</span>
                    </div>
                  </div>
                </div>


                <div class="row form-group">

                      <div class="col-md-12">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input  type="checkbox"  value="1"    @isset($paciente->antecedentesNeumologicos->otros_transtornos_nocturnos) checked @endisset   aria-label="" id="otros_transtornos_nocturnos" name="otros_transtornos_nocturnos">
                          </span>
                          <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Otros Transtornos Nocturnos</span>
                               <input type="text" class="form-control" aria-label="..." id="txtotros_transtornos_nocturnos" name="txtotros_transtornos_nocturnos"   @isset($paciente->antecedentesNeumologicos->otros_transtornos_nocturnos_descripcion)  value="{{$paciente->antecedentesNeumologicos->otros_transtornos_nocturnos_descripcion}}" @else readonly @endisset>
                        </div>
                      </div>

                </div>

            </div>
        </div>
    </div>



      <div class="box box-default">
          <div class="box-header with-border"><h5><strong>Antecedetes Cardiovasculares</strong> </h5>
              <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse">
                      <i class="fa fa-plus"></i>
                  </button>
              </div>
          </div>
          <div class="box-body">
              <div class="row col-md-12">

                <div class="row form-group ">

                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <div class="input-group ">

                          <input type="text" class="form-control" style="background:#FFF;" value="Su padre o hermano ha tenido un cuadro de infarto de miocardio(ataque al corazon) antes de los 55 años" readonly aria-describedby="basic-addon2">
                          <span class="input-group-addon" id="basic-addon2">  <input  type="checkbox"  value="1"    @isset($paciente->antecedentesNeumologicos->antecedentes_cardiovascular_uno) checked @endisset   aria-label="" id="antecedentes_cardiovascular_uno" name="antecedentes_cardiovascular_uno"></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <div class="input-group ">


                          <input type="text" class="form-control" style="background:#FFF;" value="Su madre o hermana ha tenido un cuadro de infarto de miocardio(ataque al corazon) antes de los 65 año" readonly aria-describedby="basic-addon2">
                          <span class="input-group-addon" id="basic-addon2">  <input  type="checkbox"  value="1"    @isset($paciente->antecedentesNeumologicos->antecedentes_cardiovascular_dos) checked @endisset   aria-label="" id="antecedentes_cardiovascular_dos" name="antecedentes_cardiovascular_dos"></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <div class="input-group ">
                          <input type="text" class="form-control" style="background:#FFF;" value="¿Actualmente fuma 01 cigarrillo o más al día?" readonly aria-describedby="basic-addon2">
                          <span class="input-group-addon" id="basic-addon2">  <input  type="checkbox"  value="1"    @isset($paciente->antecedentesNeumologicos->antecedentes_cardiovascular_tres) checked @endisset   aria-label="" id="antecedentes_cardiovascular_tres" name="antecedentes_cardiovascular_tres"></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <div class="input-group ">
                          <input type="text" class="form-control" style="background:#FFF;" value="Tiene usted diagnóstico de Hipertensión Arterial o toma medicamente antihipertensivo" readonly aria-describedby="basic-addon2">
                          <span class="input-group-addon" id="basic-addon2">  <input  type="checkbox"  value="1"     @isset($paciente->antecedentesNeumologicos->antecedentes_cardiovascular_cuatro) checked @endisset   aria-label="" id="antecedentes_cardiovascular_cuatro" name="antecedentes_cardiovascular_cuatro"></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <div class="input-group">
                        <input type="text" class="form-control" style="background:#FFF;" value="Tiene usted Diabetes Melitus o toma medicamentos hipogliceminante" readonly aria-describedby="basic-addon2">
                        <span class="input-group-addon" id="basic-addon2">  <input  type="checkbox"  value="1"     @isset($paciente->antecedentesNeumologicos->antecedentes_cardiovascular_cinco) checked @endisset   aria-label="" id="antecedentes_cardiovascular_cinco" name="antecedentes_cardiovascular_cinco"></span>
                      </div>
                        {{-- <div class="input-group ">

                          <span class="input-group-addon span-width">Tiene usted Diabetes Melitus o toma medicamentos hipogliceminante</span>
                          <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
                              <input  type="checkbox"  value="1"   @isset($paciente->antecedentesNeumologicos->) checked @endisset   @isset($paciente->antecedentesNeumologicos->) checked @endisset   aria-label="">
                          </span>
                        </div> --}}
                      </div>
                    </div>
                    <div class="text-right">
                      <h5>El no seleccionar una pregunta significa un <strong>NO</strong> por Respuesta </h5>
                    </div>
                  </div>

                </div>


              </div>
          </div>
      </div>




    </div>
</form>
