<style media="screen">
#mdlapnea{
width: 90% !important;
}
</style>

<div class="modal fade" tabindex="-1" role="dialog" id="modal-ApneaSuenio">
    <div class="modal-dialog" id="mdlapnea" role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form id="apnea_suenio">

              @isset($cita->ApneaSuenio->id)
                 <input type="hidden" name="apnea_suenio_id" value="{{$cita->ApneaSuenio->id}}">
             @endisset

                <input type="hidden" name="lista_examen_id" value="{{$listaExamen->id}}">
                <input type="hidden" name="cita_id" value="{{$cita->id}}">
                <div class="modal-body ">
                    {{csrf_field()}}
                    <div class="row form-horizontal">
                      <div class="col-md-12">
                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#filacion">Filiacion / Antecedentes Personales</a></li>
                          <li><a data-toggle="tab" href="#examen_fisico">Examen Fisico</a></li>
                          <li><a data-toggle="tab" href="#conclusiones">Conclusiones</a></li>
                        </ul>
                        <div class="tab-content">
                          <div id="filacion" class="tab-pane fade in active">
                          <div class="row">
                                <div class="col-md-12">
                                  <div class="row">

                                    <div class="col-md-2">
                                      <strong> 1.-Filiacion</strong>
                                    </div>
                                  </div>
                                </div>
                                  <div class="col-md-12">
                                          <div class="col-md-4 form-horizontal">
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-4 control-label">Tipo de Licencia</label>
                                                <div class="col-sm-8">
                                                  <select class="form-control" name="licencia">
                                                      <option value="a2b">A2B</option>
                                                      <option value="a3b">A3B</option>
                                                  </select>
                                                </div>
                                              </div>
                                          </div>
                                          <div class="col-md-2">
                                            <div class="checkbox">
                                            <label>
                                              <input type="checkbox" name="trabajo_noche" value="1" @isset($cita->ApneaSuenio->trabajo_noche) @if($cita->ApneaSuenio->trabajo_noche=='1') checked @endif  @endisset>
                                               <strong> Trabajo de Noche </strong>
                                            </label>
                                          </div>
                                          </div>
                                          <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-6 control-label">N° Dias Trabajados</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" name="num_dias_trabajados" @isset($cita->ApneaSuenio->num_dias_trabajados) value="{{$cita->ApneaSuenio->num_dias_trabajados}}" @endisset>
                                                </div>
                                              </div>
                                          </div>
                                          <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-6 control-label">N° Dias Descanso</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" name="num_dias_descanso"  @isset($cita->ApneaSuenio->num_dias_descanso) value="{{$cita->ApneaSuenio->num_dias_descanso}}" @endisset>
                                                </div>
                                              </div>
                                          </div>
                                  </div>
                                  <div class=" col-md-12">
                                        <div class=" col-md-12">

                                                <div class="col-md-6 form-inline">
                                                    <div class="form-group">
                                                    <label for="exampleInputName2">Años que trabaja en dicho horario de trabajo</label>
                                                    <input type="text" class="form-control" name="anios_trabaja_horario" @isset($cita->ApneaSuenio->anios_trabaja_horario) value="{{$cita->ApneaSuenio->anios_trabaja_horario}}" @endisset>
                                                    </div>
                                                </div>
                                        </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <strong>2.- Antecedentes Personales</strong>
                                      </div>
                                      <div class="col-md-12" style="margin-bottom:5px;">
                                        <div class="col-md-2">
                                          <div class="input-group" >
                                            <label for="apneasuenio_m" style="border:none;"  class="form-control">Apnea del sueño</label>
                                            <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                               <input id="apneasuenio_m" type="checkbox"  value="1" name="apnea_suenio" @isset($cita->ApneaSuenio->apnea_suenio) @if($cita->ApneaSuenio->apnea_suenio=='1') checked @endif @endisset></span>
                                          </div>
                                        </div>
                                        <div class="col-md-10">
                                          <div class="input-group">
                                            <span class="span-width input-group-addon" style="border:none;">Ultimo control de Apnea</span>
                                            <input type="text" class="form-control" name="ctrl_apnea"  @isset($cita->ApneaSuenio->ctrl_apnea) value="{{$cita->ApneaSuenio->ctrl_apnea}}" @endisset>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-12" style="margin-bottom:5px;">
                                        <div class="col-md-2">
                                          <div class="input-group" >
                                            <label for="hta" style="border:none;" class="form-control">HTA</label>
                                            <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                              <input id="hta" type="checkbox"  value="1" name="hta" @isset($cita->ApneaSuenio->hta) @if($cita->ApneaSuenio->hta=='1') checked @endif  @endisset></span>
                                          </div>
                                        </div>
                                        <div class="col-md-10">
                                          <div class="input-group">
                                            <span class="span-width input-group-addon" style="border:none;">Medicacion &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </span>
                                            <input type="text" class="form-control" name="medicacion" @isset($cita->ApneaSuenio->medicacion) value="{{$cita->ApneaSuenio->medicacion}}" @endisset>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-12" style="margin-bottom:5px;">
                                        <div class="col-md-2">
                                          <div class="input-group" >
                                            <label for="psg" style="border:none;"  class="form-control">PSG</label>
                                            <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                               <input id="psg" type="checkbox" name="psg" value="1" @isset($cita->ApneaSuenio->psg) @if($cita->ApneaSuenio->psg=='1') checked @endif  @endisset></span>
                                          </div>
                                        </div>
                                        <div class="col-md-10">
                                          <div class="input-group">
                                            <span class="span-width input-group-addon" style="border:none;">Ultimo control PSG  &nbsp &nbsp &nbsp &nbsp &nbsp</span>
                                            <input type="text" class="form-control" name="ctrl_psg" @isset($cita->ApneaSuenio->ctrl_psg) value="{{$cita->ApneaSuenio->ctrl_psg}}" @endisset>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="col-md-12" style="margin-bottom:5px;">

                                        <div class="col-md-8">
                                          <div class="input-group" >
                                            <label for="apneasuenio_m" style="border:none;"  class="form-control">Antecedente de Choque de Vehiculo</label>
                                            <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                               </span>
                                          </div>
                                        </div>

                                        <div class="col-md-2">
                                          <div class="input-group" >
                                            <label for="en_mina" style="border:none;"  class="form-control">En Mina</label>
                                            <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                               <input id="en_mina" type="radio" name="en_mina" value="1"  @isset($cita->ApneaSuenio->en_mina) @if($cita->ApneaSuenio->en_mina=='1') checked @endif  @endisset></span>
                                          </div>
                                        </div>
                                        <div class="col-md-2">
                                          <div class="input-group" >
                                            <label for="fuera_mina" style="border:none;"  class="form-control">Fuera de Mina</label>
                                            <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                               <input id="fuera_mina" type="radio" name="fuera_mina" value="1" @isset($cita->ApneaSuenio->fuera_mina) @if($cita->ApneaSuenio->fuera_mina=='1') checked @endif @endisset></span>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-12" style="margin-bottom:5px;">
                                        <div class="col-md-12">
                                          <div class="input-group">
                                            <span class="span-width" style="border:none;">
                                              <strong> Si la Respuesta es NO pase a 3. Antecedentes Familiares de Ápnea del Sueño</strong>
                                             </span>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="col-md-12">
                                          <div class="col-md-12">

                                              <ul class="nav nav-tabs">
                                                <li class="active"><a data-toggle="tab" href="#home">Detalle</a></li>
                                                <li><a data-toggle="tab" href="#menu1">Clasificación</a></li>
                                                <li><a data-toggle="tab" href="#menu2">Entrevista</a></li>
                                                <li><a data-toggle="tab" href="#menu3">Escala de EpWorth</a></li>
                                              </ul>

                                              <div class="tab-content">
                                                <div id="home" class="tab-pane fade in active">
                                                  <div class="col-md-12">
                                                    <div class="col-md-12">
                                                      <div class="input-group" >
                                                        <label for="criterio_uno_valor" style="border:none;"  class="form-control">Criterio 1: Se “cabeceo” y por ello le ocurrió un accidente (incidente) con un vehículo (alguna vez)</label>
                                                        <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                                            <input id="criterio_uno_valor" type="checkbox" name="criterio_uno_valor"  value="1" @isset($cita->ApneaSuenio->criterio_uno_valor)  @if($cita->ApneaSuenio->criterio_uno_valor=='1') checked @endif @endisset ></span>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                      <div class="input-group" >
                                                        <label for="criterio_dos_valor1" style="border:none;"  class="form-control">Criterio 2: (2 o más es positivo)</label>
                                                        <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                                           <input id="criterio_dos_valor1" type="checkbox" name="criterio_dos_valor1" value="1" @isset($cita->ApneaSuenio->criterio_dos_valor1) @if($cita->ApneaSuenio->criterio_dos_valor1=='1') checked @endif @endisset ></span>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                      <div class="input-group" >
                                                        <label for="criterio_dos_valor2" style="border:none;"  class="form-control">
                                                          Accidente ocurrido entre las 0 horas y las 7 de la mañana o entre las 13 y 15 horas (tarde)</label>
                                                        <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                                           <input id="criterio_dos_valor2" type="checkbox" name="criterio_dos_valor2"  value="1" @isset($cita->ApneaSuenio->criterio_dos_valor2) @if($cita->ApneaSuenio->criterio_dos_valor2=='1') checked @endif  @endisset></span>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                      <div class="input-group" >
                                                        <label for="criterio_dos_valor3" style="border:none;"  class="form-control">No hubo evidencia de maniobra evasiva del chofer para evitar la colisión.</label>
                                                        <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                                           <input id="criterio_dos_valor3" type="checkbox" name="criterio_dos_valor3" value="1" @isset($cita->ApneaSuenio->criterio_dos_valor3) @if($cita->ApneaSuenio->criterio_dos_valor3=='1') checked @endif  @endisset></span>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                      <div class="input-group" >
                                                        <label for="criterio_dos_valor4" style="border:none;"  class="form-control">Colisión frontal del vehículo</label>
                                                        <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                                           <input id="criterio_dos_valor4" type="checkbox" name="criterio_dos_valor4"  value="1" @isset($cita->ApneaSuenio->criterio_dos_valor4)  @if($cita->ApneaSuenio->criterio_dos_valor4=='1') checked @endif  @endisset></span>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                      <div class="input-group" >
                                                        <label for="criterio_dos_valor5" style="border:none;"  class="form-control">Vehículo que invadió el otro carril o se desvió sin causa aparente </label>
                                                        <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                                          <input id="criterio_dos_valor5" type="checkbox" name="criterio_dos_valor5"  value="1" @isset($cita->ApneaSuenio->criterio_dos_valor5)  @if($cita->ApneaSuenio->criterio_dos_valor5=='1') checked @endif   @endisset></span>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                      <div class="input-group" >
                                                        <label for="criterio_dos_valor6" style="border:none;"  class="form-control">La unidad cayó a un barranco, río o choco contra un poste, puente, edificio u otra estructura estática sin causa aparente</label>
                                                        <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                                           <input id="criterio_dos_valor6" type="checkbox" name="criterio_dos_valor6" value="1" @isset($cita->ApneaSuenio->criterio_dos_valor6) @if($cita->ApneaSuenio->criterio_dos_valor6=='1') checked @endif  @endisset></span>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                      <div class="input-group" >
                                                        <label for="criterio_dos_valor7" style="border:none;"  class="form-control">Chofer viajaba solo en el vehículo </label>
                                                        <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                                           <input id="criterio_dos_valor7" type="checkbox" name="criterio_dos_valor7" value="1" @isset($cita->ApneaSuenio->criterio_dos_valor7) @if($cita->ApneaSuenio->criterio_dos_valor7=='1') checked @endif  @endisset></span>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                      <div class="input-group" >
                                                        <label for="criterio_dos_valor8" style="border:none;"  class="form-control">Chofer no tenia copiloto y cumplía o acababa de terminar una jornada larga de trabajo (más de 8 horas)</label>
                                                        <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                                           <input id="criterio_dos_valor8" type="checkbox" name="criterio_dos_valor8"  value="1" @isset($cita->ApneaSuenio->criterio_dos_valor8)  @if($cita->ApneaSuenio->criterio_dos_valor8=='1') checked @endif  @endisset></span>
                                                      </div>
                                                    </div>
                                                  </div>

                                                </div>
                                                <div id="menu1" class="tab-pane fade">
                                                  <div class="col-md-12">
                                                    <div class="input-group" >
                                                      <label for="" style="border:none;"  class="form-control">Clasificación del (los) “Choques” o accidentes vehiculares del postulante (marque solo una categoría) </label>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-12">
                                                    <div class="input-group" >
                                                      <label for="clasificacion_valor1" style="border:none;"  class="form-control">Accidente confirmado por Somnolencia (Criterio 1 positivo)</label>
                                                      <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                                         <input id="clasificacion_valor1" type="checkbox" name="clasificacion_valor1"  value="1" @isset($cita->ApneaSuenio->clasificacion_valor1) @if($cita->ApneaSuenio->clasificacion_valor1=='1') checked @endif  @endisset></span>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-12">
                                                    <div class="input-group" >
                                                      <label for="clasificacion_valor2" style="border:none;"  class="form-control">Accidente con alta sospecha de somnolencia (Criterio 2 positivo)</label>
                                                      <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                                        <input id="clasificacion_valor2" type="checkbox" name="clasificacion_valor2"  value="1" @isset($cita->ApneaSuenio->clasificacion_valor2) @if($cita->ApneaSuenio->clasificacion_valor2=='1') checked @endif  @endisset></span>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-12">
                                                    <div class="input-group" >
                                                      <label for="clasificacion_valor3" style="border:none;"  class="form-control">Accidente con escasa evidencia/ sospecha por somnolencia (solo 1 ítem de criterio 2)</label>
                                                      <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                                        <input id="clasificacion_valor3" type="checkbox" name="clasificacion_valor3"  value="1" @isset($cita->ApneaSuenio->clasificacion_valor3) @if($cita->ApneaSuenio->clasificacion_valor3=='1') checked @endif @endisset></span>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-12">
                                                    <div class="input-group" >
                                                      <label for="clasificacion_valor4" style="border:none;"  class="form-control">No se dispones de datos suficiente para clasificar el (los) incidentes.</label>
                                                      <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                                         <input id="clasificacion_valor4" type="checkbox" name="clasificacion_valor4"  value="1" @isset($cita->ApneaSuenio->clasificacion_valor4) @if($cita->ApneaSuenio->clasificacion_valor4=='1') checked @endif  @endisset></span>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-12">
                                                    <div class="input-group" >
                                                      <label for="clasificacion_valor5" style="border:none;"  class="form-control">Accidente no debido a somnolencia (información suficiente que descarta la somnolencia)</label>
                                                      <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                                          <input id="clasificacion_valor5" type="checkbox" name="clasificacion_valor5" value="1" @isset($cita->ApneaSuenio->clasificacion_valor5) @if($cita->ApneaSuenio->clasificacion_valor5=='1') checked @endif  @endisset></span>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div id="menu2" class="tab-pane fade">

                                                  <div class="row">
                                                    <div class="col-md-12" style="margin-top:4px;">
                                                      <div class="col-md-4">
                                                        <div class="input-group" >
                                                          <label for="hta" style="border:none;" class="form-control">3.	ANTEC. FAMILIAR DE APNEA DEL SUEÑO</label>
                                                          <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                                             <input id="hta" type="checkbox" name="antecedente_faminiliar_apnea"  value="1" @isset($cita->ApneaSuenio->antecedente_faminiliar_apnea) @if($cita->ApneaSuenio->antecedente_faminiliar_apnea=='1') checked @endif  @endisset></span>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-8">
                                                        <div class="input-group">
                                                          <span class="span-width input-group-addon" style="border:none;">Indique </span>
                                                          <input type="text" name="antecedente_faminiliar_apnea_descripcion" class="form-control" @isset($cita->ApneaSuenio->antecedente_faminiliar_apnea_descripcion) value="{{antecedente_faminiliar_apnea_descripcion}}" @endisset>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>



                                                  <div class="row">
                                                    <div class="col-md-12" style="margin-top:4px;">
                                                      <div class="col-md-12">
                                                        <div class="input-group" >
                                                          <label for="hta" style="border:none;" class="form-control">4.	ENTREVISTA AL PACIENTE</label>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>

                                                  <div class="row">
                                                    <div class="col-md-12">
                                                      <div class="col-md-12">
                                                        <div class="input-group" >
                                                          <label for="entrevista_valor1" style="border:none;"  class="form-control">En los ultimo 5 años, su pareja o esposa le ha comentado que ronca al dormir</label>
                                                          <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                                            <input id="entrevista_valor1" type="checkbox" name="entrevista_valor1"  value="1" @isset($cita->ApneaSuenio->entrevista_valor1) @if($cita->ApneaSuenio->entrevista_valor1=='1') checked @endif  @endisset></span>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-12">
                                                        <div class="input-group" >
                                                          <label for="entrevista_valor2" style="border:none;"  class="form-control">En los últimos 5 años, su pareja o esposa le ha comentado que  hace ruidos al respirar mientras duerme</label>
                                                          <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                                             <input id="entrevista_valor2" type="checkbox" name="entrevista_valor2" value="1" @isset($cita->ApneaSuenio->entrevista_valor2) @if($cita->ApneaSuenio->entrevista_valor2=='1') checked @endif @endisset></span>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-12">
                                                        <div class="input-group" >
                                                          <label for="entrevista_valor3" style="border:none;"  class="form-control">En los últimos 5 años, su pareja o esposa le ha comentado que deja de respirar cuando duerme (pausa respiratoria)</label>
                                                          <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                                              <input id="entrevista_valor3" type="checkbox" name="entrevista_valor3" value="1" @isset($cita->ApneaSuenio->entrevista_valor3)  @if($cita->ApneaSuenio->entrevista_valor3=='1') checked @endif  @endisset></span>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-12">
                                                        <div class="input-group" >
                                                          <label for="entrevista_valor4" style="border:none;"  class="form-control">Comparado con sus compañeros, usted siente que tiene más sueño o cansancio que ellos mientras trabaja</label>
                                                          <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                                             <input id="entrevista_valor4" type="checkbox" name="entrevista_valor4" value="1" @isset($cita->ApneaSuenio->entrevista_valor4) @if($cita->ApneaSuenio->entrevista_valor4=='1') checked @endif @endisset></span>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>

                                                </div>
                                                <div id="menu3" class="tab-pane fade">

                                                <div class="row">
                                                    <div class="col-md-12" style="margin-top:4px;">
                                                      <div class="col-md-12">
                                                        <div class="input-group" >
                                                          <label for="hta" style="border:none;" class="form-control">Situación</label> ¿Con qué frecuencia esta somnoliento o se queda dormido en cada una de las siguientes situaciones?
                                                            <br>Aplique la siguiente escala: 0: nunca, 1: baja frecuencia, 2: moderada frecuencia, 3: alta frecuencia.
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>

                                                  <div class="row">
                                                    <div class="col-md-12">
                                                      <div class="col-md-12">
                                                        <div class="input-group" >
                                                          <label style="border:none;"  class="form-control">1. Sentado y leyendo.</label>
                                                          <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                                            <label class="radio-inline">
                                                                <input type="radio" class="uno_epwort" value="0" name="uno_epwort">0
                                                              </label>
                                                            <label class="radio-inline">
                                                                <input type="radio"  class="uno_epwort" value="1" name="uno_epwort">1
                                                              </label>
                                                              <label class="radio-inline">
                                                                <input type="radio" class="uno_epwort" value="2" name="uno_epwort">2
                                                              </label>
                                                              <label class="radio-inline">
                                                                <input type="radio"  class="uno_epwort" value="3"name="uno_epwort">3
                                                              </label>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-12">
                                                        <div class="input-group" >
                                                          <label  style="border:none;"  class="form-control">2. Viendo televisión.	</label>
                                                          <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                                            <label class="radio-inline">
                                                                <input type="radio" class="dos_epwort" value="0"  name="dos_epwort">0
                                                              </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" class="dos_epwort" value="1"  name="dos_epwort">1
                                                              </label>
                                                              <label class="radio-inline">
                                                                <input type="radio" class="dos_epwort" value="2"  name="dos_epwort">2
                                                              </label>
                                                              <label class="radio-inline">
                                                                <input type="radio" class="dos_epwort" value="3"  name="dos_epwort">3
                                                              </label>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-12">
                                                        <div class="input-group" >
                                                          <label for="entrevista_valor3" style="border:none;"  class="form-control">3. Sentado en un lugar público (ej. cine, reunión).</label>
                                                          <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                                            <label class="radio-inline">
                                                                <input type="radio"  class="tres_epwort" value="0"  name="tres_epwort">0
                                                              </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" class="tres_epwort" value="1" name="tres_epwort">1
                                                              </label>
                                                              <label class="radio-inline">
                                                                <input type="radio" class="tres_epwort" value="2" name="tres_epwort">2
                                                              </label>
                                                              <label class="radio-inline">
                                                                <input type="radio" class="tres_epwort" value="3" name="tres_epwort">3
                                                              </label>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-12">
                                                        <div class="input-group" >
                                                          <label for="entrevista_valor4" style="border:none;"  class="form-control">4. Viajando como pasajero en un auto durante 1 hora.</label>
                                                          <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                                            <label class="radio-inline">
                                                                <input type="radio" class="cuatro_epwort" value="0" name="cuatro_epwort">0
                                                              </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" class="cuatro_epwort" value="1" name="cuatro_epwort">1
                                                              </label>
                                                              <label class="radio-inline">
                                                                <input type="radio" class="cuatro_epwort" value="2" name="cuatro_epwort">2
                                                              </label>
                                                              <label class="radio-inline">
                                                                <input type="radio" class="cuatro_epwort" value="3" name="cuatro_epwort">3
                                                              </label>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-12">
                                                        <div class="input-group" >
                                                          <label for="entrevista_valor4" style="border:none;"  class="form-control">5. Descansando en la tarde cuando las circunstancias lo permiten.</label>
                                                          <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                                            <label class="radio-inline">
                                                                <input type="radio" class="cinco_epwort" value="0" name="cinco_epwort">0
                                                              </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" class="cinco_epwort" value="1" name="cinco_epwort">1
                                                              </label>
                                                              <label class="radio-inline">
                                                                <input type="radio" class="cinco_epwort" value="2" name="cinco_epwort">2
                                                              </label>
                                                              <label class="radio-inline">
                                                                <input type="radio" class="cinco_epwort" value="3" name="cinco_epwort">3
                                                              </label>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-12">
                                                        <div class="input-group" >
                                                          <label for="entrevista_valor4" style="border:none;"  class="form-control">6. Sentado y conversando con alguien.</label>
                                                          <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                                            <label class="radio-inline">
                                                                <input type="radio" class="seis_epwort" value="0" name="seis_epwort">0
                                                              </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" class="seis_epwort" value="1" name="seis_epwort">1
                                                              </label>
                                                              <label class="radio-inline">
                                                                <input type="radio" class="seis_epwort" value="2" name="seis_epwort">2
                                                              </label>
                                                              <label class="radio-inline">
                                                                <input type="radio" class="seis_epwort" value="3" name="seis_epwort">3
                                                              </label>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-12">
                                                        <div class="input-group" >
                                                          <label for="entrevista_valor4" style="border:none;"  class="form-control">7. Sentado en un ambiente tranquilo después del almuerzo (sin alcohol).</label>
                                                          <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                                            <label class="radio-inline">
                                                                <input type="radio" class="siete_epwort" value="0" name="siete_epwort">0
                                                              </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" class="siete_epwort" value="1" name="siete_epwort">1
                                                              </label>
                                                              <label class="radio-inline">
                                                                <input type="radio" class="siete_epwort" value="2" name="siete_epwort">2
                                                              </label>
                                                              <label class="radio-inline">
                                                                <input type="radio" class="siete_epwort" value="3" name="siete_epwort">3
                                                              </label>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-12">
                                                        <div class="input-group" >
                                                          <label for="entrevista_valor4" style="border:none;"  class="form-control">8. En un auto, mientras se encuentra detenido por algunos minutos en el tráfico.</label>
                                                          <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                                            <label class="radio-inline">
                                                                <input type="radio"  class="ocho_epwort" value="0" name="ocho_epwort">0
                                                              </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" class="ocho_epwort" value="1" name="ocho_epwort">1
                                                              </label>
                                                              <label class="radio-inline">
                                                                <input type="radio" class="ocho_epwort" value="2" name="ocho_epwort">2
                                                              </label>
                                                              <label class="radio-inline">
                                                                <input type="radio" class="ocho_epwort" value="3" name="ocho_epwort">3
                                                              </label>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-12">
                                                          <div class="col-md-4 text-right">
                                                              <strong></strong>
                                                          </div>
                                                          <div class="col-md-4">
                                                            <div class="input-group">
                                                                 <div class="input-group-addon" style="border:none;">Puntuación de la Escala Epworth</div>
                                                                 <input type="text" id="punto_escala_epworth" class="form-control">
                                                               </div>
                                                          </div>
                                                          <div class="col-md-4">

                                                          </div>
                                                      </div>
                                                    </div>
                                                  </div>

                                                </div>

                                              </div>

                                          </div>
                                      </div>

                                    </div>
                                  </div>
                          </div>




                          </div>
                          <div id="examen_fisico" class="tab-pane fade">
                              <div class="col-md-12">
                                 <h5><strong>5.	EXAMEN FISICO</strong></h5>
                              </div>


                              <div class="col-md-12">
                                  <div class="col-md-4 form-horizontal">
                                      <div class="form-group">
                                        <label class="col-sm-6 control-label">Peso (Kg):</label>
                                        <div class="col-sm-6">
                                           <input type="text" name="peso" class="form-control"  @isset($cita->funcionVital->peso) value="{{$cita->funcionVital->peso}}" @endisset>
                                        </div>
                                      </div>
                                  </div>

                                  <div class="col-md-4 form-horizontal">
                                      <div class="form-group">
                                        <label class="col-sm-4 control-label">Talla (mts):</label>
                                        <div class="col-sm-6">
                                           <input type="text" name="talla" class="form-control"  @isset($cita->funcionVital->talla) value="{{$cita->funcionVital->talla}}" @endisset>
                                        </div>
                                      </div>
                                  </div>

                                  <div class="col-md-4 form-horizontal">
                                      <div class="form-group">
                                        <label class="col-sm-4 control-label">IMC (Kg/m2)</label>
                                        <div class="col-sm-6">
                                           <input type="text" name="imc" class="form-control" @isset($cita->funcionVital->talla) value="{{round($cita->funcionVital->peso/($cita->funcionVital->talla*$cita->funcionVital->talla),0,PHP_ROUND_HALF_UP)}}" @endisset >

                                        </div>
                                        <div class="col-sm-2">
                                           <button type="button" class="btn btn-success" name="button">F</button>
                                        </div>
                                      </div>
                                  </div>
                            </div>

                            <div class="col-md-12">
                                <div class="col-md-4 form-horizontal">
                                    <div class="form-group">
                                      <label class="col-sm-6 control-label">Circunferencia de cuello:</label>
                                      <div class="col-sm-6">
                                         <input type="text" name="circunferencia" class="form-control" @isset($cita->ApneaSuenio->circunferencia) value="{{$cita->ApneaSuenio->circunferencia}}" @endisset  >
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-2 form-horizontal">
                                </div>
                                <div class="col-md-2 form-horizontal">
                                    <div class="form-group">
                                      <div class="checkbox">
                                        <label>
                                          <input type="radio" name="genero_paciente" value="1" @isset($cita->ApneaSuenio->genero_paciente) @if($cita->ApneaSuenio->genero_paciente=='1') checked @endif  @endisset> <strong> Varon </strong>
                                        </label>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-2 form-horizontal">
                                    <div class="form-group">
                                      <div class="checkbox">
                                        <label>
                                          <input type="radio" name="genero_paciente" value="1"  @isset($cita->ApneaSuenio->genero_paciente) @if($cita->ApneaSuenio->genero_paciente=='0') checked @endif @endisset> <strong> Mujer </strong>
                                        </label>
                                      </div>
                                    </div>
                                </div>
                          </div>
                          <div class="col-md-12">
                              <div class="col-md-4 form-horizontal">
                                  <div class="form-group">
                                    <label class="col-sm-6 control-label">P. Sistólica</label>
                                    <div class="col-sm-6">

                                      <div class="input-group">

                                       <input type="text" name="psistolica" class="form-control" @isset($cita->ApneaSuenio->psistolica) value="{{$cita->ApneaSuenio->psistolica}}" @endisset>
                                       <div class="input-group-addon">mmHg</div>
                                     </div>

                                    </div>
                                  </div>
                              </div>

                              <div class="col-md-4 form-horizontal">
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">P. Diastólica</label>
                                    <div class="col-sm-6">

                                      <div class="input-group">

                                       <input type="text" name="pdiastolica" class="form-control" @isset($cita->ApneaSuenio->pdiastolica) value="{{$cita->ApneaSuenio->pdiastolica}}" @endisset>
                                       <div class="input-group-addon">mmHg</div>
                                     </div>

                                    </div>
                                  </div>
                              </div>

                              <div class="col-md-2 form-horizontal">
                                  <div class="form-group">
                                    <div class="checkbox">
                                      <label>
                                        <input type="checkbox" name="hta_nueva" @isset($cita->ApneaSuenio->hta_nueva) @if($cita->ApneaSuenio->genero_paciente=='1') checked @endif @endisset> <strong> HTA nueva</strong>
                                      </label>
                                    </div>
                                  </div>
                              </div>
                        </div>

                        <div class="col-md-12">


                            <div class="col-md-2">

                            </div>
                            <div class="col-md-2 text-center">
                                  <label class="radio-inline" >
                                <img src="{{asset('img/apnea_1.png')}}" alt=""  style="cursor:pointer;">
                                <br>
                                  <input type="radio" name="optradio" id="grado_uno" value="1"> GRADO I
                                </label>
                            </div>
                            <div class="col-md-2 text-center">
                              <label class="radio-inline ">
                                <img src="{{asset('img/apnea_2.png')}}" alt="" style="cursor:pointer;">
                                <br>
                                  <input type="radio" name="optradio" id="grado_dos" value="2"> GRADO II
                                </label>
                            </div>
                            <div class="col-md-2 text-center">
                                <label class="radio-inline">
                                <img src="{{asset('img/apnea_3.png')}}" alt="" style="cursor:pointer;">
                                <br>
                                  <input type="radio" name="optradio" id="grado_tres" value="3"> GRADO III
                                </label>
                            </div>
                            <div class="col-md-2 text-center">
                                  <label class="radio-inline">
                                  <img src="{{asset('img/apnea_4.png')}}" alt="" style="cursor:pointer;">
                                  <br>
                                    <input type="radio" name="optradio" id="grado_cuatro" value="4">GRADO IV
                                  </label>
                            </div>
                            <div class="col-md-2">

                            </div>

                            <div class="col-md-12">
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-8">
                                  <table class="table text-center" width="100%">
                                    <thead>
                                      <tr>
                                        <th>Clase</th>
                                        <th> Visualización directa, paciente sentado</th>
                                        <th>Imagen Laringoscópica</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td><label for="" id="clase_id"></label> </td>
                                        <td><label for="" id="visualizacion_id"></label> </td>
                                        <td><label for="" id="Laringoscopica_id"></label> </td>
                                      </tr>
                                      <tr>
                                        <td colspan="3">Referencia: Mallampati RS, Gatt SP, Gugino LD et al: Al Clinical sign topredict diffuclt traqueal intubation: A prospective study. Can Anaesth Soc J32:429, 1985</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                                <div class="col-md-2">
                                </div>
                            </div>

                        </div>

                    </div>
                          <div id="conclusiones" class="tab-pane fade">

                              <div class="col-md-12">
                                <div class="col-md-12">
                                      <h5><strong>6.	CONCLUSION DE LA EVALUACION</strong></h5>
                                        <div class="col-md-12">

                                            *Ampliación: oximetría, Polisomnografia, seguimiento de tratamiento y/o interconsulta

                                        </div>
                                        <div class="col-md-12">

                                          <strong>RIESGO ALTO: (criterio A o B positivo)</strong>

                                        </div>

                                  </div>

                                  <div class="col-md-12" >
                                    <div class="col-md-12">
                                      <div class="input-group"style="padding-bottom:10px;">
                                        <label for="criterio_a" style="border:none;"  class="form-control">
                                          Criterio A: Excesiva somnolencia  determinada por ESS mayor
                                             de 15 o cabeceo presenciado durante la evaluación (espera), antecedente de
                                              accidente por somnolencia o con alta sospecha por somnolencia. (ÚLTIMO AÑO)
                                        </label>
                                        <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                            <input id="criterio_a" type="checkbox" name="criterio_a" @isset($cita->ApneaSuenio->criterio_a) @if($cita->ApneaSuenio->criterio_a=='1') checked @endif @endisset  value="1"></span>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-md-12">
                                    <div class="col-md-12">
                                      <div class="input-group" style="margin-bottom:10px;" >
                                        <label for="criterio_b" style="border:none;"  class="form-control">
                                          Criterio B: Antecedentes de SAS sin control  reciente o
                                          sin cumplimiento de tratamiento (con CPAP o cirugía).</label>
                                        <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                           <input id="criterio_b" type="checkbox" name="criterio_b" @isset($cita->ApneaSuenio->criterio_b) @if($cita->ApneaSuenio->criterio_b=='1') checked @endif @endisset value="1"></span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                          <div class="col-md-12">
                                              <strong> ACCIÓN REQUERIDA: en RIESGO ALTO, el paciente requiere pruebas ampliatorios(oximetrisa,PSG o certificacion de cumplimiento de tratamiento de apnea del sueño)</strong>
                                          </div>
                                    </div>


                                    <div class="col-md-12">
                                      <div class="col-md-12">
                                        <div class="input-group" style="margin-bottom:10px;" >
                                          <label for="criterio_c" style="border:none;"  class="form-control">
                                            Criterio C: Historia de higiene de sueño sugiere SAS
                                            (presencia de ronquido, somnolencia excesiva durante la actividad, pausas respiratorias)</label>
                                          <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                             <input id="criterio_c" type="checkbox" name="criterio_c" @isset($cita->ApneaSuenio->criterio_c) @if($cita->ApneaSuenio->criterio_c=='1') checked @endif  @endisset value="1"></span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="col-md-12">
                                        <div class="input-group" style="margin-bottom:10px;" >
                                          <label for="criterio_d" style="border:none;"  class="form-control">Criterio D: Cumple con 2 o más de las siguiente:
                                                IMC mayor o igual a 30.
                                                Hipertensión Arterial
                                                Circunferencia del cuello anormal.
                                                Puntuación  de Epworth mayor de 10 y menor de 16.
                                                Indice de ápnea-hipopnea(AHI) mayor de 5 y menor de 30
                                                </label>
                                          <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                              <input id="criterio_d" type="checkbox" name="criterio_d" @isset($cita->ApneaSuenio->criterio_d) @if($cita->ApneaSuenio->criterio_d=='1') checked @endif @endisset  value="1"></span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="col-md-12">
                                        <div class="input-group" style="margin-bottom:10px;" >
                                          <label for="criterio_e" style="border:none;"  class="form-control">Criterio E:
                                              Evaluación de vía aérea superior patológico (Mallampati III o IV)
                                                </label>
                                          <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                            <input id="criterio_e" type="checkbox" name="criterio_e" @isset($cita->ApneaSuenio->criterio_e) @if($cita->ApneaSuenio->criterio_e=='1') checked @endif  @endisset  value="1"></span>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <strong> ACCIÓN REQUERIDA: en RIESGO MEDIO, el paciente TIENE 3 MESES de aptitud TEMPORAL. Requiere pruebas ampliatorias(oximetria,PSG o certificacion de cumplimiento de tratamiento de apnea del sueño) antes de emitir aptitud por 12 meses.</strong>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="col-md-12">
                                          <div class="input-group" style="margin-bottom:10px;" >
                                            <label for="riesgo_bajo" style="border:none;"  class="form-control">
                                                    RIESGO BAJO:Apto para conducir vehículos(ningun criterio positivo).
                                                  </label>
                                            <span class="input-group-addon" id="basic-addon2" style="border:none;" >
                                               <input id="riesgo_bajo" type="checkbox" name="riesgo_bajo" @isset($cita->ApneaSuenio->riesgo_bajo) @if($cita->ApneaSuenio->riesgo_bajo=='1') checked @endif  @endisset value="1"></span>
                                          </div>
                                        </div>
                                      </div>
                              </div>


                                <div class="col-md-12">
                                      <h5> <strong> Observaciones y Recomendaciones:  </strong> </h5>

                                      <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="observaciones_recomendaciones" @isset($cita->ApneaSuenio->observaciones_recomendaciones) value="{{$cita->ApneaSuenio->observaciones_recomendaciones}}" @endisset>
                                        </div>
                                      </div>
                                </div>

                          </div>

                        </div>

                      </div>

                    </div>


                </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-right">
                      @isset($cita->ApneaSuenio->id)
                        <button class="btn btn-sm btn-primary  ApneaSuenio" tipo="ApneaSuenio_modificar" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDITAR</button>
                       @else
                        <button class="btn btn-sm btn-success ApneaSuenio"  tipo="ApneaSuenio_guardar" type="button">GUARDAR</button>
                      @endisset
                        {{-- <a href="" class="btn btn-sm btn-info" data-dismiss="modal">DIAGNOSTICO</a>

                        <a href="" class="btn btn-sm btn-warning" data-dismiss="modal">Volver</a> --}}
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
