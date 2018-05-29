<style media="screen">
#mdlnordico{
width: 90% !important;
}
</style>
<div class="modal fade" tabindex="-1" role="dialog" id="modal-cuestionario_nordico">
    <div class="modal-dialog "  id="mdlnordico" role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form  id="cuestionario_nordico">
            <div class="modal-body ">
                {{csrf_field()}}
                <div class="row form-horizontal">

            @isset($cita->custionarionordico->id)
               <input type="hidden" name="cuestionario_nordico_id" value="{{$cita->custionarionordico->id}}">
           @endisset
           <input type="hidden" name="lista_examen_id" value="{{$listaExamen->id}}">
           <input type="hidden" name="cita_id" value="{{$cita->id}}">

                  <div class="col-md-12">
                    <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#home">Datos Personales Organos de Locomocion</a></li>
                      <li><a data-toggle="tab" href="#menu1">Problemas Espalda Baja </a></li>
                      <li><a data-toggle="tab" href="#menu2">Problemas Hombros</a></li>
                      <li><a data-toggle="tab" href="#menu3">Problemas con el cuello</a></li>
                    </ul>

                    <div class="tab-content">
                      <div id="home" class="tab-pane fade in active">

                      <div class="col-md-12">
                        <div class="row">
                          <h5> Datos Personales </h5>
                        </div>
                        <div class="row">

                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-6 control-label">Cuantos Años y meses ha estado Ud. haciendo el presente tipo de trabajo</label>
                              <div class="col-sm-2">
                                <div class="input-group">
                                  <div class="input-group-addon">Años: </div>
                                  <input type="text" class="form-control" name="datos_personales_anio" @isset($cita->custionarionordico->datos_personales_anio)  value="{{$cita->custionarionordico->datos_personales_anio}}"  @endisset >
                                </div>
                              </div>
                              <div class="col-sm-2">
                                <div class="input-group">
                                  <div class="input-group-addon">Meses: </div>
                                  <input type="text" class="form-control" name="datos_personales_mes" @isset($cita->custionarionordico->datos_personales_mes)  value="{{$cita->custionarionordico->datos_personales_mes}}"  @endisset >
                                </div>
                              </div>
                            </div>

                                   <div class="form-group">
                                     <label for="inputEmail3" class="col-sm-6 control-label">En Promedio ¿Cuantas Horas a la semana Trabaja?</label>
                                     <div class="col-sm-2">
                                       <input type="text" class="form-control" name="datos_personales_horas" @isset($cita->custionarionordico->datos_personales_horas) value="{{$cita->custionarionordico->datos_personales_horas}}"  @endisset >
                                     </div>
                                     <div class="col-sm-4">
                                       <div class="input-group">
                                         <div class="input-group-addon">Usted es: </div>
                                           <select class="form-control" name="datos_personales_usted_es" >
                                               <option value="diestro"
                                                   @isset($cita->custionarionordico)
                                                       @if($cita->custionarionordico->datos_personales_usted_es == "diestro")
                                                           selected
                                                       @endif
                                                   @endisset
                                                >DIESTRO</option>
                                                <option value="zurdo"
                                                    @isset($cita->custionarionordico)
                                                    @if($cita->custionarionordico->datos_personales_usted_es == "zurdo")
                                                    selected
                                                    @endif
                                                    @endisset
                                                >ZURDO</option>
                                           </select>
                                       </div>
                                     </div>
                                   </div>
                          </div>

                          <div class="row">
                            <h5>Problemas con los Organos de Locomocion</h5>
                          </div>
                          <div class="row">

                            <table class="table">

                                <thead>
                                  <tr>
                                    <th  class="text-center">Para ser respondido por todos</th>
                                    <th colspan="2" class="text-center">Para ser respondido unicamente por quienes han tenido problemas</th>
                                  </tr>
                                </thead>
                                <tbody class="text-center">
                                  <tr>
                                    <td colspan="2">Ha tenido ústed cualquier tiempo en los últimos 12 meses, problemas (molestias,dolor o disconformidad) en:</td>
                                    <td>Ha estado impidiendo en cualquier tiempo durante los pasados 12 meses para hacer sus  rutinas habituales en el trabajo o su casa por este problema</td>
                                    <td>Ud. ha tenido problemas durante los últimos 7 días</td>
                                  </tr>
                                  <tr>
                                      <td>Cuello</td>
                                      <td> <input  type="checkbox" value="1" name="problemas_organos_cuello"  @isset($cita->custionarionordico->problemas_organos_cuello)  checked  @endisset> </td>
                                      <td> <input  type="checkbox" value="1" name="cuello_rendimiento_laboral_casa"  @isset($cita->custionarionordico->cuello_rendimiento_laboral_casa) checked @endisset> </td>
                                      <td> <input  type="checkbox" value="1" name="cuello_ultimos7dias"  @isset($cita->custionarionordico->cuello_ultimos7dias)  checked  @endisset> </td>
                                  </tr>
                                  <tr>

                                      <td>Hombros</td>
                                      <td>
                                        <select class="form-control" name="problemas_organos_hombros">
                                            <option value="no"
                                                @isset($cita->custionarionordico)
                                                @if($cita->custionarionordico->problemas_organos_hombros == "no")
                                                selected
                                                @endif
                                                @endisset
                                            >No</option>
                                            <option value="derecho"
                                                @isset($cita->custionarionordico)
                                                @if($cita->custionarionordico->problemas_organos_hombros == "derecho")
                                                selected
                                                @endif
                                                @endisset
                                            >Si, en mi hombro derecho</option>
                                            <option value="izquierdo"
                                                @isset($cita->custionarionordico)
                                                @if($cita->custionarionordico->problemas_organos_hombros == "izquierdo")
                                                selected
                                                @endif
                                                @endisset
                                            >Si, en mi hombro izquierdo</option>
                                            <option value="ambos"
                                                @isset($cita->custionarionordico)
                                                @if($cita->custionarionordico->problemas_organos_hombros == "ambos")
                                                selected
                                                @endif
                                                @endisset
                                            >Si, en ambos hombros</option>
                                        </select>
                                       </td>
                                      <td> <input  type="checkbox" value="1" name="hombros_rendimiento_laboral_casa"  @isset($cita->custionarionordico->hombros_rendimiento_laboral_casa)  checked  @endisset    > </td>
                                      <td> <input  type="checkbox" value="1" name="hombros_ultimos7dias"  @isset($cita->custionarionordico->hombros_ultimos7dias)  checked  @endisset    > </td>
                                  </tr>
                                  <tr>
                                      <td>Codos</td>
                                      <td>     <select class="form-control" name="problemas_organos_codos" >
                                              <option value="no"
                                                  @isset($cita->custionarionordico)
                                                  @if($cita->custionarionordico->problemas_organos_codos == "no")
                                                  selected
                                                  @endif
                                                  @endisset
                                              >No</option>
                                              <option value="derecho"
                                                  @isset($cita->custionarionordico)
                                                  @if($cita->custionarionordico->problemas_organos_codos == "derecho")
                                                  selected
                                                  @endif
                                                  @endisset
                                              >Si, en mi codo derecho</option>
                                              <option value="izquierdo"
                                                  @isset($cita->custionarionordico)
                                                  @if($cita->custionarionordico->problemas_organos_codos == "izquierdo")
                                                  selected
                                                  @endif
                                                  @endisset
                                              >Si, en mi codo izquierdo</option>
                                              <option value="ambos"
                                                  @isset($cita->custionarionordico)
                                                  @if($cita->custionarionordico->problemas_organos_codos == "ambos")
                                                  selected
                                                  @endif
                                                  @endisset
                                              >Si, en ambos codos</option>
                                          </select> </td>
                                      <td> <input  type="checkbox" value="1" name="codos_rendimiento_laboral_casa"  @isset($cita->custionarionordico->codos_rendimiento_laboral_casa)  checked  @endisset    > </td>
                                      <td> <input  type="checkbox" value="1" name="codos_ultimos7dias"  @isset($cita->custionarionordico->codos_rendimiento_laboral_casa)  checked  @endisset    > </td>
                                  </tr>
                                  <tr>
                                      <td>Muñeca</td>
                                      <td>   <select class="form-control" name="problemas_organos_muniecas" >
                                              <option value="no"
                                                  @isset($cita->custionarionordico)
                                                  @if($cita->custionarionordico->problemas_organos_muniecas == "no")
                                                  selected
                                                  @endif
                                                  @endisset
                                              >No</option>
                                              <option value="derecho"
                                                  @isset($cita->custionarionordico)
                                                  @if($cita->custionarionordico->problemas_organos_muniecas == "derecho")
                                                  selected
                                                  @endif
                                                  @endisset
                                              >Si, en mi muñeca/mano derecho</option>
                                              <option value="izquierdo"
                                                  @isset($cita->custionarionordico)
                                                  @if($cita->custionarionordico->problemas_organos_muniecas == "izquierdo")
                                                  selected
                                                  @endif
                                                  @endisset
                                              >Si, en mi muñeca/mano izquierdo</option>
                                              <option value="ambos"
                                                  @isset($cita->custionarionordico)
                                                  @if($cita->custionarionordico->problemas_organos_muniecas == "ambos")
                                                  selected
                                                  @endif
                                                  @endisset
                                              >Si, en ambas muñecas/manos</option>
                                          </select></td>
                                      <td> <input  type="checkbox" value="1" name="muniecas_rendimiento_laboral_casa"  @isset($cita->custionarionordico->muniecas_rendimiento_laboral_casa)  checked  @endisset    > </td>
                                      <td> <input  type="checkbox" value="1" name="muniecas_ultimos7dias"  @isset($cita->custionarionordico->muniecas_ultimos7dias)  checked  @endisset    > </td>
                                  </tr>
                                  <tr>
                                      <td>Espalda Alta (Tórax)</td>
                                      <td> <input  type="checkbox" value="1" name="problemas_organos_espalda_alta"  @isset($cita->custionarionordico->problemas_organos_espalda_alta)  checked  @endisset> </td>
                                      <td> <input  type="checkbox" value="1" name="espalda_alta_rendimiento_laboral_casa"  @isset($cita->custionarionordico->espalda_alta_rendimiento_laboral_casa)  checked  @endisset> </td>
                                      <td> <input  type="checkbox" value="1" name="espalda_alta_ultimos7dias"  @isset($cita->custionarionordico->espalda_alta_ultimos7dias)  checked  @endisset> </td>
                                  </tr>
                                  <tr>
                                      <td>Espalda Baja (Region Lumbar)</td>
                                      <td> <input  type="checkbox" value="1" name="problemas_organos_espalda_baja"  @isset($cita->custionarionordico->problemas_organos_espalda_baja) checked  @endisset> </td>
                                      <td> <input  type="checkbox" value="1" name="espalda_baja_rendimiento_laboral_casa"  @isset($cita->custionarionordico->espalda_baja_rendimiento_laboral_casa)  checked  @endisset    > </td>
                                      <td> <input  type="checkbox" value="1" name="espalda_baja_ultimos7dias"  @isset($cita->custionarionordico->espalda_baja_ultimos7dias)  checked  @endisset> </td>
                                  </tr>
                                  <tr>
                                      <td>Una o ambas caderas/ muslos</td>
                                      <td> <input  type="checkbox" value="1" name="problemas_organos_caderas_muslos"  @isset($cita->custionarionordico->problemas_organos_caderas_muslos)  checked  @endisset> </td>
                                      <td> <input  type="checkbox" value="1" name="caderas_muslos_rendimiento_laboral_casa"  @isset($cita->custionarionordico->caderas_muslos_rendimiento_laboral_casa)  checked  @endisset    > </td>
                                      <td> <input  type="checkbox" value="1" name="caderas_muslos_ultimos7dias"  @isset($cita->custionarionordico->caderas_muslos_ultimos7dias)  checked  @endisset> </td>
                                  </tr>
                                  <tr>
                                      <td>Una o ambas rodillas</td>
                                      <td> <input  type="checkbox" value="1" name="problemas_organos_rodillas"  @isset($cita->custionarionordico->problemas_organos_rodillas)  checked  @endisset> </td>
                                      <td> <input  type="checkbox" value="1" name="rodillas_rendimiento_laboral_casa"  @isset($cita->custionarionordico->rodillas_rendimiento_laboral_casa)  checked  @endisset> </td>
                                      <td> <input  type="checkbox" value="1" name="rodillas_ultimos7dias"  @isset($cita->custionarionordico->rodillas_ultimos7dias)  checked  @endisset> </td>
                                  </tr>
                                  <tr>
                                      <td>Uno o ambos tobillos/pies</td>
                                      <td> <input  type="checkbox" value="1" name="problemas_organos_tobillos_pies"  @isset($cita->custionarionordico->problemas_organos_tobillos_pies)  checked  @endisset    > </td>
                                      <td> <input  type="checkbox" value="1" name="tobillos_pies_laboral_casa"  @isset($cita->custionarionordico->tobillos_pies_laboral_casa)  checked  @endisset    > </td>
                                      <td> <input  type="checkbox" value="1" name="tobillos_pies_ultimos7dias"  @isset($cita->custionarionordico->tobillos_pies_ultimos7dias)  checked  @endisset    > </td>
                                  </tr>
                                </tbody>
                            </table>

                          </div>

                      </div>


                      </div>
                      <div id="menu1" class="tab-pane fade">

                        <div class="col-md-12">
                          <div class="row">
                            <table class="table">

                                <thead>
                                  <tr>
                                    <th  colspan="2">Problemas con la espalda baja</th>
                                  </tr>
                                </thead>
                                <tbody >

                                  <tr>
                                      <td>1. ¿Ud ha tenido problemas en la espalda baja(molestia, dolor, disconfort)?</td>
                                      <td class="text-center"> <input  type="checkbox" value="1" name="problemas_espalda_baja_uno"  @isset($cita->custionarionordico->problemas_espalda_baja_uno) checked  @endisset    > </td>
                                  </tr>
                                  <tr>
                                      <td>2. ¿Ud ha estado hospitalizado por problemas de espalda baja?</td>
                                      <td class="text-center"> <input  type="checkbox" value="1" name="problemas_espalda_baja_dos"  @isset($cita->custionarionordico->problemas_espalda_baja_dos) checked  @endisset    > </td>
                                  </tr>
                                  <tr>
                                      <td>3. ¿Ud ha tenido cambios de trabajo o actividad por problemas de espalda baja?</td>
                                      <td class="text-center"> <input  type="checkbox" value="1" name="problemas_espalda_baja_tres"  @isset($cita->custionarionordico->problemas_espalda_baja_tres) checked  @endisset    > </td>
                                  </tr>

                                  <tr>
                                      <td>4. ¿Cúal es la duración total del tiempo en que ha tenido problemas de espalda le han impedido hacer rutinas de trabajo?</td>
                                      <td class="text-center">
                                        <select class="form-control"  name="problemas_espalda_baja_cuatro" >
                                            <option value="1"
                                                @isset($cita->custionarionordico)
                                                @if($cita->custionarionordico->problemas_espalda_baja_cuatro == "1")
                                                selected
                                                @endif
                                                @endisset
                                            >0 días</option>
                                            <option value="2"
                                                @isset($cita->custionarionordico)
                                                @if($cita->custionarionordico->problemas_espalda_baja_cuatro == "2")
                                                selected
                                                @endif
                                                @endisset
                                            >1 - 7 días</option>
                                            <option value="3"
                                                @isset($cita->custionarionordico)
                                                @if($cita->custionarionordico->problemas_espalda_baja_cuatro == "3")
                                                selected
                                                @endif
                                                @endisset
                                            >8 - 30 días</option>
                                            <option value="4"
                                                @isset($cita->custionarionordico)
                                                @if($cita->custionarionordico->problemas_espalda_baja_cuatro == "4")
                                                selected
                                                @endif
                                                @endisset
                                            >Más de 30 días</option>
                                            <option value="5"
                                                @isset($cita->custionarionordico)
                                                @if($cita->custionarionordico->problemas_espalda_baja_cuatro == "5")
                                                selected
                                                @endif
                                                @endisset
                                            >Todos los días</option>
                                        </select>
                                       </td>
                                  </tr>
                                  <tr>
                                      <td colspan="2">5. ¿Los problemas de espalda baja han causado a ud. reduccion de su actividad física durante los ultimos 12 meses?</td>
                                  </tr>
                                  <tr>
                                      <td><div style="padding-left:20px;">a. Actividad de trabajo (en el trabajo o la casa)</div></td>
                                      <td class="text-center"> <input  type="checkbox" value="1" name="problemas_espalda_baja_cinco"  @isset($cita->custionarionordico->problemas_espalda_baja_cinco) checked  @endisset    > </td>
                                  </tr>
                                  <tr>
                                      <td><div style="padding-left:20px;">b. Actividades recreativas</div></td>
                                      <td class="text-center"> <input  type="checkbox" value="1" name="problemas_espalda_baja_seis"  @isset($cita->custionarionordico->problemas_espalda_baja_seis) checked  @endisset    > </td>
                                  </tr>
                                  <tr>
                                      <td>6. ¿Cuál es la duración total del tiempo en que ha tenido problemas de espalda baja durante los últimos 12 meses?</td>
                                      <td class="text-center">
                                        <select class="form-control" name="problemas_espalda_baja_siete">
                                            <option value="1"
                                                @isset($cita->custionarionordico)
                                                @if($cita->custionarionordico->problemas_espalda_baja_siete == "1")
                                                selected
                                                @endif
                                                @endisset
                                            >0 días</option>
                                            <option value="2"
                                                @isset($cita->custionarionordico)
                                                @if($cita->custionarionordico->problemas_espalda_baja_siete == "2")
                                                selected
                                                @endif
                                                @endisset
                                            >1 - 7 días</option>
                                            <option value="3"
                                                @isset($cita->custionarionordico)
                                                @if($cita->custionarionordico->problemas_espalda_baja_siete == "3")
                                                selected
                                                @endif
                                                @endisset
                                            >8 - 30 días</option>
                                            <option value="4"
                                                @isset($cita->custionarionordico)
                                                @if($cita->custionarionordico->problemas_espalda_baja_siete == "4")
                                                selected
                                                @endif
                                                @endisset
                                            >Más de 30 días</option>
                                        </select>
                                       </td>
                                  </tr>
                                  <tr>
                                      <td>7. ¿Ha sido visto por un médico, fisioterapista, quiropractico u otra persona del area debido a problemas de espalda baja durante los últimos 12 meses?</td>
                                      <td class="text-center"> <input  type="checkbox" value="1" name="problemas_espalda_baja_ocho"  @isset($cita->custionarionordico->problemas_espalda_baja_ocho) checked  @endisset    > </td>
                                  </tr>
                                  <tr>
                                      <td>8. ¿Ha tenido problemas de espalda baja en algún momento durante los últimos 7 días?</td>
                                      <td class="text-center"> <input  type="checkbox" value="1" name="problemas_espalda_baja_nueve"  @isset($cita->custionarionordico->problemas_espalda_baja_nueve) checked  @endisset    > </td>
                                  </tr>
                                </tbody>
                            </table>
                          </div>
                        </div>

                    </div>
                      <div id="menu2" class="tab-pane fade">

                        <div class="col-md-12">
                          <div class="row">
                            <table class="table">

                                <thead>
                                  <tr>
                                    <th  colspan="2">Problemas con los Hombros</th>
                                  </tr>
                                </thead>
                                <tbody >

                                  <tr>
                                      <td>9. ¿Ud ha tenido problemas de hombros(molestia, dolor, disconfort)?</td>
                                      <td class="text-center"> <input  type="checkbox" value="1" name="problemas_hombros_uno"  @isset($cita->custionarionordico->problemas_hombros_uno) checked  @endisset    > </td>
                                  </tr>
                                  <tr>
                                      <td>10 ¿Ud ha tenido lesiones en sus hombros en un accidente?</td>
                                      <td>  <select class="form-control" name="problemas_hombros_dos" >
                                              <option value="no"
                                                      @isset($cita->custionarionordico)
                                                      @if($cita->custionarionordico->problemas_hombros_dos == "no")
                                                      selected
                                                      @endif
                                                      @endisset
                                              >No</option>
                                              <option value="derecho"
                                                      @isset($cita->custionarionordico)
                                                      @if($cita->custionarionordico->problemas_hombros_dos == "derecho")
                                                      selected
                                                      @endif
                                                      @endisset
                                              >Si, en mi hombro derecho</option>
                                              <option value="izquierdo"
                                                      @isset($cita->custionarionordico)
                                                      @if($cita->custionarionordico->problemas_hombros_dos == "izquierdo")
                                                      selected
                                                      @endif
                                                      @endisset
                                              >Si, en mi hombro izquierdo</option>
                                              <option value="ambos"
                                                      @isset($cita->custionarionordico)
                                                      @if($cita->custionarionordico->problemas_hombros_dos == "ambos")
                                                      selected
                                                      @endif
                                                      @endisset
                                              >Si, en ambos hombros</option>
                                        </select></td>
                                  </tr>

                                  <tr>
                                      <td>11. ¿Ud ha tenido un cambio  de trabajo  o actividad por problemas de hombros?</td>
                                      <td class="text-center"> <input  type="checkbox" value="1" name="problemas_hombros_tres"  @isset($cita->custionarionordico->problemas_hombros_tres) checked  @endisset    > </td>
                                  </tr>
                                  <tr>
                                      <td>12 ¿Ud. ha tenido problemas en los hombros durante los últimos 12 meses?</td>
                                      <td class="text-center">
                                        <select class="form-control" name="problemas_hombros_cuatro" >
                                            <option value="no"
                                                    @isset($cita->custionarionordico)
                                                    @if($cita->custionarionordico->problemas_hombros_cuatro == "no")
                                                    selected
                                                    @endif
                                                    @endisset
                                            >No</option>
                                            <option value="derecho"
                                                    @isset($cita->custionarionordico)
                                                    @if($cita->custionarionordico->problemas_hombros_cuatro == "derecho")
                                                    selected
                                                    @endif
                                                    @endisset
                                            >Si, en mi hombro derecho</option>
                                            <option value="izquierdo"
                                                    @isset($cita->custionarionordico)
                                                    @if($cita->custionarionordico->problemas_hombros_cuatro == "izquierdo")
                                                    selected
                                                    @endif
                                                    @endisset
                                            >Si, en mi hombro izquierdo</option>
                                            <option value="ambos"
                                                    @isset($cita->custionarionordico)
                                                    @if($cita->custionarionordico->problemas_hombros_cuatro == "ambos")
                                                    selected
                                                    @endif
                                                    @endisset
                                            >Si, en ambos hombros</option>
                                        </select>
                                       </td>
                                  </tr>
                                  <tr>
                                      <td>13 ¿Cual es la duración total del tiempo en que Ud. ha tenido problemas de hombros en lós últimos 12 meses?</td>
                                      <td class="text-center">
                                        <select class="form-control" name="problemas_hombros_cinco"  >
                                            <option value="1"
                                                    @isset($cita->custionarionordico)
                                                    @if($cita->custionarionordico->problemas_hombros_cinco == "1")
                                                    selected
                                                    @endif
                                                    @endisset
                                            >0 días</option>
                                            <option value="2"
                                                    @isset($cita->custionarionordico)
                                                    @if($cita->custionarionordico->problemas_hombros_cinco == "2")
                                                    selected
                                                    @endif
                                                    @endisset
                                            >1 - 7 días</option>
                                            <option value="3"
                                                    @isset($cita->custionarionordico)
                                                    @if($cita->custionarionordico->problemas_hombros_cinco == "3")
                                                    selected
                                                    @endif
                                                    @endisset
                                            >8 - 30 días</option>
                                            <option value="4"
                                                    @isset($cita->custionarionordico)
                                                    @if($cita->custionarionordico->problemas_hombros_cinco == "4")
                                                    selected
                                                    @endif
                                                    @endisset
                                            >Más de 30 días</option>
                                        </select>
                                       </td>
                                  </tr>
                                  <tr>
                                      <td>14. ¿El problemas en sus hombros le han causado una disminución de su actividad durante los últimos 12 meses?</td>
                                  </tr>
                                  <tr>
                                      <td><div style="padding-left:20px;">a. Actividad de trabajo (en trabajo o la casa)</div></td>
                                      <td class="text-center"> <input  type="checkbox" value="1" name="problemas_hombros_seis"  @isset($cita->custionarionordico->problemas_hombros_seis) checked  @endisset    > </td>
                                  </tr>
                                  <tr>
                                      <td><div style="padding-left:20px;">b. Actividad recreativas</div></td>
                                      <td class="text-center"> <input  type="checkbox" value="1" name="problemas_hombros_siete"  @isset($cita->custionarionordico->problemas_hombros_siete) checked  @endisset    > </td>
                                  </tr>
                                  <tr>
                                      <td>15. ¿Cuál es la duración total del tiempo que los problemas en sus hombros le han impedido hacer rutinas de trabajo(en el trabajo o en casa) durante los últimos 12 meses?</td>
                                      <td class="text-center">
                                        <select class="form-control" name="problemas_hombros_ocho" >
                                            <option value="1"
                                                    @isset($cita->custionarionordico)
                                                    @if($cita->custionarionordico->problemas_hombros_ocho == "1")
                                                    selected
                                                    @endif
                                                    @endisset
                                            >0 días</option>
                                            <option value="2"
                                                    @isset($cita->custionarionordico)
                                                    @if($cita->custionarionordico->problemas_hombros_ocho == "2")
                                                    selected
                                                    @endif
                                                    @endisset
                                            >1 - 7 días</option>
                                            <option value="3"
                                                    @isset($cita->custionarionordico)
                                                    @if($cita->custionarionordico->problemas_hombros_ocho == "3")
                                                    selected
                                                    @endif
                                                    @endisset
                                            >8 - 30 días</option>
                                            <option value="4"
                                                    @isset($cita->custionarionordico)
                                                    @if($cita->custionarionordico->problemas_hombros_ocho == "4")
                                                    selected
                                                    @endif
                                                    @endisset
                                            >Más de 30 días</option>
                                        </select>
                                       </td>
                                  </tr>
                                  <tr>
                                      <td>16 ¿Ha sido visto por un médico, fisioterapista, quiropractico u otra persona del area debido a problemas en los hombros durante los últimos 12 meses?</td>
                                      <td class="text-center"> <input  type="checkbox" value="1" name="problemas_hombros_nueve"  @isset($cita->custionarionordico->problemas_hombros_nueve) checked  @endisset    > </td>
                                  </tr>
                                  <tr>
                                      <td>17. ¿Ha tenido problemas de hombros en algún momento durante los últimos 7 días?</td>
                                      <td class="text-center">
                                          <select class="form-control" name="problemas_hombros_dies" >
                                              <option value="no"
                                                      @isset($cita->custionarionordico)
                                                      @if($cita->custionarionordico->problemas_hombros_dies == "no")
                                                      selected
                                                      @endif
                                                      @endisset
                                              >No</option>
                                              <option value="derecho"
                                                      @isset($cita->custionarionordico)
                                                      @if($cita->custionarionordico->problemas_hombros_dies == "derecho")
                                                      selected
                                                      @endif
                                                      @endisset
                                              >Si, en mi hombro derecho</option>
                                              <option value="izquierdo"
                                                      @isset($cita->custionarionordico)
                                                      @if($cita->custionarionordico->problemas_hombros_dies == "izquierdo")
                                                      selected
                                                      @endif
                                                      @endisset
                                              >Si, en mi hombro izquierdo</option>
                                              <option value="ambos"
                                                      @isset($cita->custionarionordico)
                                                      @if($cita->custionarionordico->problemas_hombros_dies == "ambos")
                                                      selected
                                                      @endif
                                                      @endisset
                                              >Si, en ambos hombros</option>
                                          </select>
                                      </td>
                                  </tr>
                                </tbody>
                            </table>
                          </div>
                        </div>
                      </div>

                          <div id="menu3" class="tab-pane fade">
                              <div class="col-md-12">
                                <div class="row">

                                  <table class="table">

                                      <thead>
                                        <tr>
                                          <th  colspan="2">Problemas con el cuello</th>
                                        </tr>
                                      </thead>
                                      <tbody >

                                        <tr>
                                            <td>1. ¿Ud ha tenido problemas en el cuello (molestia, dolor, disconfort)?</td>
                                            <td class="text-center"> <input  type="checkbox" value="1" name="problemas_cuello_uno"  @isset($cita->custionarionordico->problemas_cuello_uno) checked  @endisset    > </td>
                                        </tr>
                                        <tr>
                                            <td>2. ¿Ud ha sido lesionado en el cuello en un accidente?</td>
                                            <td class="text-center"> <input  type="checkbox" value="1" name="problemas_cuello_dos"  @isset($cita->custionarionordico->problemas_cuello_dos) checked  @endisset    > </td>
                                        </tr>
                                        <tr>
                                            <td>3. ¿Ud ha tenido cambios de trabajo o actividad pro problemas en el cuello?</td>
                                            <td class="text-center"> <input  type="checkbox" value="1" name="problemas_cuello_tres"  @isset($cita->custionarionordico->problemas_cuello_tres) checked  @endisset    > </td>
                                        </tr>
                                        <tr>
                                            <td>4. ¿Cuál es la duración total de tiempo en que se ha tenido problemas en el cuello durante los últimos 12 meses?</td>
                                            <td>  <select class="form-control" name="problemas_cuello_cuatro" >
                                                    <option value="1"
                                                            @isset($cita->custionarionordico)
                                                            @if($cita->custionarionordico->problemas_cuello_cuatro == "1")
                                                            selected
                                                            @endif
                                                            @endisset
                                                    >0 días</option>
                                                    <option value="2"
                                                            @isset($cita->custionarionordico)
                                                            @if($cita->custionarionordico->problemas_cuello_cuatro == "2")
                                                            selected
                                                            @endif
                                                            @endisset
                                                    >1 - 7 días</option>
                                                    <option value="3"
                                                            @isset($cita->custionarionordico)
                                                            @if($cita->custionarionordico->problemas_cuello_cuatro == "3")
                                                            selected
                                                            @endif
                                                            @endisset
                                                    >8 - 30 días</option>
                                                    <option value="4"
                                                            @isset($cita->custionarionordico)
                                                            @if($cita->custionarionordico->problemas_cuello_cuatro == "4")
                                                            selected
                                                            @endif
                                                            @endisset
                                                    >Más de 30 días</option>
                                                    <option value="5"
                                                            @isset($cita->custionarionordico)
                                                            @if($cita->custionarionordico->problemas_cuello_cuatro == "5")
                                                            selected
                                                            @endif
                                                            @endisset
                                                    >Todos los días</option>
                                              </select></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                5. ¿Los problemas de su cuello han causado  a Ud. reduccion de su actividad fisica durante los últimos 12 meses?
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> <div style="padding-left:20px;">a. Actividad de trabajo (en el trabajo o la casa)</div></td>
                                            <td class="text-center"> <input  type="checkbox" value="1" name="problemas_cuello_cinco"  @isset($cita->custionarionordico->problemas_cuello_cinco) checked  @endisset    > </td>
                                        </tr>
                                        <tr>
                                            <td><div style="padding-left:20px;">b. Actividades recreativas</div></td>
                                            <td class="text-center"> <input  type="checkbox" value="1" name="problemas_cuello_seis"  @isset($cita->custionarionordico->problemas_cuello_seis) checked  @endisset    > </td>
                                        </tr>
                                        <tr>
                                            <td>6. ¿Cuál es la duración total del tiempo que los problemas de su cuello le han impedido hacer rutinas de trabajo(en el trabajo o en casa) durante los últimos 12 meses?</td>
                                            <td class="text-center">
                                              <select class="form-control" name="problemas_cuello_siete">
                                                  <option value="1"
                                                          @isset($cita->custionarionordico)
                                                          @if($cita->custionarionordico->problemas_cuello_siete == "1")
                                                          selected
                                                          @endif
                                                          @endisset
                                                  >0 días</option>
                                                  <option value="2"
                                                          @isset($cita->custionarionordico)
                                                          @if($cita->custionarionordico->problemas_cuello_siete == "2")
                                                          selected
                                                          @endif
                                                          @endisset
                                                  >1 - 7 días</option>
                                                  <option value="3"
                                                          @isset($cita->custionarionordico)
                                                          @if($cita->custionarionordico->problemas_cuello_siete == "3")
                                                          selected
                                                          @endif
                                                          @endisset
                                                  >8 - 30 días</option>
                                                  <option value="4"
                                                          @isset($cita->custionarionordico)
                                                          @if($cita->custionarionordico->problemas_cuello_siete == "4")
                                                          selected
                                                          @endif
                                                          @endisset
                                                  >Más de 30 días</option>
                                              </select>
                                             </td>
                                        </tr>
                                        <tr>
                                            <td>7. ¿Ha sido visto por un médico, fisioterapista, quiropractico u otra persona del area debido a problemas de su cuello durante los últimos 12 meses?</td>
                                            <td class="text-center"> <input  type="checkbox" value="1" name="problemas_cuello_ocho"  @isset($cita->custionarionordico->problemas_cuello_ocho) checked  @endisset    > </td>
                                        </tr>
                                        <tr>
                                            <td>8. ¿Ha tenido problemas de su cuello en algún momento durante los últimos 7 días?</td>
                                            <td class="text-center"> <input  type="checkbox" value="1" name="problemas_cuello_nueve"  @isset($cita->custionarionordico->problemas_cuello_nueve) checked  @endisset    > </td>
                                        </tr>
                                      </tbody>
                                  </table>

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
                      @isset($cita->custionarionordico->id)
                       <button class="btn btn-sm btn-primary cuestionarionordico" tipo="cuestionario_nordico_modificar" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDITAR</button>
                       @else
                       <button class="btn btn-sm btn-success cuestionarionordico" tipo="cuestionario_nordico_guardar" type="button">GUARDAR</button>
                       @endisset
                        {{-- <a href="" class="btn btn-sm btn-success" data-dismiss="modal">GUARDAR</a>
                        <a href="" class="btn btn-sm btn-info" data-dismiss="modal">TERMINAR</a>
                        <a href="" class="btn btn-sm btn-warning" data-dismiss="modal">Volver</a> --}}
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
