<div class="col-md-12">
<style media="screen">
  #tablahistoriaocupacional{
   width:100%;
   overflow-x: scroll;
  }
  #mdialTamanio{
  width: 98% !important;
  }
</style>
  <div class="row form-group">
    <div class="col-md-4">
     <h4><strong>Ocupaciones Anteriores</strong></h4>
    </div>
    <div class="col-md-2">

    </div>
    <div class="col-md-6 text-right">
      <button type="button" name="button" class="btn btn-sm btn-success   conformidadhistoriaocupacional" tipo="registrarhistoriaocupacional"  >Guardar</button>
    </div>
  </div>

<form  id="antper_historiaocupacionales">
  @csrf

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
                      <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Fecha Inicio</span>
                       <input type="date" class="form-control" aria-label="..." name="fechainicio">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="input-group">
                      <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Fecha Fin</span>
                       <input type="date" class="form-control" aria-label="..." name="fechafin">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="input-group">
                      <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Empresa-lugar</span>
                       <input type="text" class="form-control" aria-label="..." name="empresa_lugar">
                    </div>
                  </div>

                </div>
                <div class="row form-group ">

                  <div class="col-md-10">
                    <div class="input-group">
                      <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Rubro  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</span>
                       <input type="text" class="form-control" aria-label="..." name="rubro">
                    </div>
                  </div>


                  <div class="col-md-2">
                    <div class="input-group">
                      <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Altitud</span>
                       <input type="text" class="form-control" aria-label="..." name="altitud">
                    </div>
                  </div>
                </div>

                <div class="row form-group ">

                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Área de la Empresa</span>
                       <input type="text" class="form-control" aria-label="..." name="area_empresa">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Ocupación &nbsp &nbsp &nbsp &nbsp</span>
                       <input type="text" class="form-control" aria-label="..." name="ocupacion">
                    </div>
                  </div>

                </div>

                <div class="row form-group ">

                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Tiempo de Labor en Superficie</span>
                      <select class="form-control" name="labor_superficie">
                          <option value="dia" selected>dia</option>
                          <option value="noche" selected>noche</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Tiempo de Labor en Socavón</span>
                      <select class="form-control" name="labor_socavon">
                        <option value="dia" selected>dia</option>
                        <option value="noche" selected>noche</option>
                      </select>
                    </div>
                  </div>

                </div>

                <div class="row form-group ">

                  <div class="col-md-4">
                      <div class="row form-group">
                        <div class="col-md-12">
                          <h5>Riesgos Ocupacionales</h5>
                              <div class="" style="overflow:scroll;">
                                  <div class="checkbox">
                                    <label>
                                      {{-- <input   type="checkbox"    value="1" name="check" > Ninguno --}}
                                      <input type="checkbox" class="item" value="ninguno" name="check1">Ninguno
                                    </label>
                                  </div>
                                  <div class="checkbox">
                                    <label>
                                      <input   type="checkbox"  class="item"  value="Ruido" name="check2" > Ruido
                                    </label>
                                  </div>
                                  <div class="checkbox">
                                    <label>
                                      <input   type="checkbox"  class="item"  value="Vibracion" name="check3" > Vibracion
                                    </label>
                                  </div>
                                  <div class="checkbox">
                                    <label>
                                      <input   type="checkbox"  class="item"  value="Iluminacion" name="check4" > Iluminacion
                                    </label>
                                  </div>
                                  <div class="checkbox">
                                    <label>
                                      <input   type="checkbox"  class="item"  value="Temperatura" name="check5" > Temperatura
                                    </label>
                                  </div>
                              </div>
                          </div>
                      </div>

                  </div>
                  <div class="col-md-4">
                    <div class="row form-group">
                        <h5>Medios de Protección</h5>
                        <input type="text" class="form-control" name="medios_proteccion">
                    </div>
                    <div class="row form-group">
                      <h5>Accidentes Ocupacionales</h5>
                        <input type="text" class="form-control" name="accidentes_ocupacionales">
                    </div>
                    <div class="row form-group">
                      <h5>Enfermedad Ocupacional</h5>
                        <input type="text" class="form-control" name="Enfermedad_ocupacional">
                    </div>
                  </div>

                  <div class="col-md-4 form-group">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon2">  <input   type="checkbox"  class="item"  value="uso  de epp" name="uso_epp"  aria-label=""></span>
                    <input type="text" class="form-control" style="background:#FFF;" value="Uso de EPP" readonly aria-describedby="basic-addon2">
                    </div>


              <br>
                    <textarea name="tipos_proteccion" style="resize:none;" rows="8" cols="50"></textarea>


                  </div>

                </div>


            </div>
        </div>
    </div>
</form>

<div class="container">
  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal"> <i class="fa fa-table" aria-hidden="true"></i> <span>Historias Ocupacional</span> </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog " id="mdialTamanio">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Lista de Trabajos anteriores</h4>
        </div>
        <div class="modal-body">
          <div class="row form-group" id="tablahistoriaocupacional">
            <table class="table" style="font-size:x-small;">

              <thead>
                  <tr>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Empresa</th>
                    <th>Rubro</th>
                    <th>Altitud</th>
                    <th>Area</th>
                    <th>Ocupacion</th>
                    <th>superficie</th>
                    <th>Socavón</th>
                    <th>Riesgos</th>
                     <th>Medios Protección</th>
                   <th>Accidentes Ocupacionales</th>
                    <th>Enfermedad Ocupacional</th>
                    <th>Uso EPP</th>
                    <th>Tipos de Produccion</th>
                  </tr>
              </thead>

              <tbody>
                @foreach ($historiaocupacionals as $historiaocupacional)
                  <tr>
                    <td>{{$historiaocupacional['fechainicio']}}</td>
                    <td>{{$historiaocupacional['fechafin']}}</td>
                    <td>{{$historiaocupacional['empresa_lugar']}}</td>
                    <td>{{$historiaocupacional['rubro']}}</td>
                    <td>{{$historiaocupacional['altitud']}}</td>
                    <td>{{$historiaocupacional['area_empresa']}}</td>
                    <td>{{$historiaocupacional['ocupacion']}}</td>
                    <td>{{$historiaocupacional['labor_superficie']}}</td>
                    <td>{{$historiaocupacional['labor_socavon']}}</td>
                    <td>{{$historiaocupacional['riesgo_ocupacional']}}</td>
                    <td>{{$historiaocupacional['medios_proteccion']}}</td>
                    <td>{{$historiaocupacional['accidentes_ocupacionales']}}</td>
                    <td>{{$historiaocupacional['Enfermedad_ocupacional']}}</td>
                    <td>{{$historiaocupacional['uso_epp']}}</td>
                    <td>{{$historiaocupacional['tipos_proteccion']}}</td>
                  </tr>
                @endforeach
              </tbody>

            </table>
        </div>
        <div class="modal-footer">
          {{-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> --}}
        </div>
      </div>

    </div>
  </div>

</div>


  </div>


</div>
