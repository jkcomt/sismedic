<style media="screen">
#mdlnordico{
width: 90% !important;
}
</style>
<div class="modal fade" tabindex="-1" role="dialog" id="modal-vision">
    <div class="modal-dialog "  id="mdlnordico" role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form action="" id="" method="post">
            <div class="modal-body ">
                {{csrf_field()}}

                <div class="row form-horizontal">



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
                                  <input type="text" class="form-control">
                                </div>
                              </div>
                              <div class="col-sm-2">
                                <div class="input-group">
                                  <div class="input-group-addon">Meses: </div>
                                  <input type="text" class="form-control">
                                </div>
                              </div>
                            </div>

                                   <div class="form-group">
                                     <label for="inputEmail3" class="col-sm-6 control-label">En Promedio ¿Cuantas Horas a la semana Trabaja?</label>
                                     <div class="col-sm-2">
                                       <input type="email" class="form-control" >
                                     </div>
                                     <div class="col-sm-4">
                                       <div class="input-group">
                                         <div class="input-group-addon">Usted es: </div>
                                           <select class="form-control" name="">
                                                <option value="">YO SOY </option>
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
                                      <td> <input type="checkbox" name="" value=""> </td>
                                      <td> <input type="checkbox" name="" value=""> </td>
                                      <td> <input type="checkbox" name="" value=""> </td>
                                  </tr>
                                  <tr>
                                      <td>Hombros</td>
                                      <td>
                                        <select class="form-control" name="">
                                          <option value="">DERECHO</option>
                                          <option value="">IZQUIERDO</option>
                                        </select>
                                       </td>
                                      <td> <input type="checkbox" name="" value=""> </td>
                                      <td> <input type="checkbox" name="" value=""> </td>
                                  </tr>
                                  <tr>
                                      <td>Codos</td>
                                      <td>     <select class="form-control" name="">
                                            <option value="">DERECHO</option>
                                            <option value="">IZQUIERDO</option>
                                          </select> </td>
                                      <td> <input type="checkbox" name="" value=""> </td>
                                      <td> <input type="checkbox" name="" value=""> </td>
                                  </tr>
                                  <tr>
                                      <td>Muñeca</td>
                                      <td>   <select class="form-control" name="">
                                            <option value="">DERECHO</option>
                                            <option value="">IZQUIERDO</option>
                                          </select></td>
                                      <td> <input type="checkbox" name="" value=""> </td>
                                      <td> <input type="checkbox" name="" value=""> </td>
                                  </tr>
                                  <tr>
                                      <td>Espalda Alta (Tórax)</td>
                                      <td> <input type="checkbox" name="" value=""> </td>
                                      <td> <input type="checkbox" name="" value=""> </td>
                                      <td> <input type="checkbox" name="" value=""> </td>
                                  </tr>
                                  <tr>
                                      <td>Espalda Baja (Region Lumbar)</td>
                                      <td> <input type="checkbox" name="" value=""> </td>
                                      <td> <input type="checkbox" name="" value=""> </td>
                                      <td> <input type="checkbox" name="" value=""> </td>
                                  </tr>
                                  <tr>
                                      <td>Una o ambas caderas/ muslos</td>
                                      <td> <input type="checkbox" name="" value=""> </td>
                                      <td> <input type="checkbox" name="" value=""> </td>
                                      <td> <input type="checkbox" name="" value=""> </td>
                                  </tr>
                                  <tr>
                                      <td>Una o ambas rodillas</td>
                                      <td> <input type="checkbox" name="" value=""> </td>
                                      <td> <input type="checkbox" name="" value=""> </td>
                                      <td> <input type="checkbox" name="" value=""> </td>
                                  </tr>
                                  <tr>
                                      <td>Uno o ambos tobillos/pies</td>
                                      <td> <input type="checkbox" name="" value=""> </td>
                                      <td> <input type="checkbox" name="" value=""> </td>
                                      <td> <input type="checkbox" name="" value=""> </td>
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
                                      <td>Ud ha tenido problemas en la espalda baja(molestia, dolor, disconfort)</td>
                                      <td class="text-center"> <input type="checkbox" name="" value=""> </td>
                                  </tr>
                                  <tr>
                                      <td>Ud ha estado hospitalizado por problemas de espalda baja</td>
                                      <td class="text-center"> <input type="checkbox" name="" value=""> </td>
                                  </tr>
                                  <tr>
                                      <td>Ud ha tenido cambios de trabajo o actividad por problemas de espalda baja</td>
                                      <td class="text-center"> <input type="checkbox" name="" value=""> </td>
                                  </tr>
                                  <tr>
                                      <td>Ud ha tenido problemas en la espalda baja(molestia, dolor, disconfort)</td>
                                      <td class="text-center"> <input type="checkbox" name="" value=""> </td>
                                  </tr>
                                  <tr>
                                      <td>¿Cúal es la duración total del tiempo en que ha tenido problemas de espalda baja durante los últimos 12 meses?</td>
                                      <td class="text-center">
                                        <select class="form-control" name="">
                                          <option value="">DERECHO</option>
                                          <option value="">IZQUIERDO</option>
                                        </select>
                                       </td>
                                  </tr>
                                  <tr>
                                      <td>los problemas de espalda baja han causado a ud. reduccion de su actividad física durante los ultimos 12 meses actividades de trabajo o casa</td>
                                      <td class="text-center"> <input type="checkbox" name="" value=""> </td>
                                  </tr>
                                  <tr>
                                      <td>los problemas de espalda baja han causado a ud. reduccion de su actividad física durante los ultimos 12 meses actividades recreativas</td>
                                      <td class="text-center"> <input type="checkbox" name="" value=""> </td>
                                  </tr>
                                  <tr>
                                      <td>Cúal es la duración total del tiempo que los problemas de espalda baja le han impedido hacer rutinas de trabajo(en el trabajo o en casa) durante los últimos 12 meses</td>
                                      <td class="text-center">
                                        <select class="form-control" name="">
                                          <option value="">DERECHO</option>
                                          <option value="">IZQUIERDO</option>
                                        </select>
                                       </td>
                                  </tr>
                                  <tr>
                                      <td>Ha sido visto por un médico, fisioterapista, quiropractico u otra persona del area debido a problemas de espalda baja durante los últimos 12 meses</td>
                                      <td class="text-center"> <input type="checkbox" name="" value=""> </td>
                                  </tr>
                                  <tr>
                                      <td>Ha tenido problemas de espalda baja en algún momento durante los últimos 7 días</td>
                                      <td class="text-center"> <input type="checkbox" name="" value=""> </td>
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
                                      <td>Ud ha tenido problemas de hombros(molestia, dolor, disconfort)</td>
                                      <td class="text-center"> <input type="checkbox" name="" value=""> </td>
                                  </tr>
                                  <tr>
                                      <td>Ud ha tenido lesiones en sus hombros en un accidente</td>
                                      <td>  <select class="form-control" name="">
                                          <option value="">DERECHO</option>
                                          <option value="">IZQUIERDO</option>
                                        </select></td>
                                  </tr>
                                  <tr>
                                      <td>Ud ha tenido un cmabio de trabajo o actividad pro problemas de hombros</td>
                                      <td class="text-center"> <input type="checkbox" name="" value=""> </td>
                                  </tr>
                                  <tr>
                                      <td>Ud ha tenido un cambio  de trabajo  o actividad por problemas de hombros</td>
                                      <td class="text-center"> <input type="checkbox" name="" value=""> </td>
                                  </tr>
                                  <tr>
                                      <td>Ud.  ha tenido problemas en los hombros durante los últimos 12 meses</td>
                                      <td class="text-center">
                                        <select class="form-control" name="">
                                          <option value="">DERECHO</option>
                                          <option value="">IZQUIERDO</option>
                                        </select>
                                       </td>
                                  </tr>
                                  <tr>
                                      <td>Cual es la duración total del tiempo en que Ud. ha tenido problemas de hombros en lós últimos 12 meses</td>
                                      <td class="text-center">
                                        <select class="form-control" name="">
                                          <option value="">DERECHO</option>
                                          <option value="">IZQUIERDO</option>
                                        </select>
                                       </td>
                                  </tr>
                                  <tr>
                                      <td>los problemas en sus hombros le han causado una disminucion de su actividad durante los últimos 12 meses en la actividad de trabajo (trabajo o casa)</td>
                                      <td class="text-center"> <input type="checkbox" name="" value=""> </td>
                                  </tr>
                                  <tr>
                                      <td>los problemas en sus hombros le han causado una disminucion de su actividad durante los últimos 12 meses en las actividades recreativas</td>
                                      <td class="text-center"> <input type="checkbox" name="" value=""> </td>
                                  </tr>
                                  <tr>
                                      <td>Cúal es la duración total del tiempo que los problemas en sus hombros le han impedido hacer rutinas de trabajo(en el trabajo o en casa) durante los últimos 12 meses</td>
                                      <td class="text-center">
                                        <select class="form-control" name="">
                                          <option value="">DERECHO</option>
                                          <option value="">IZQUIERDO</option>
                                        </select>
                                       </td>
                                  </tr>
                                  <tr>
                                      <td>Ha sido visto por un médico, fisioterapista, quiropractico u otra persona del area debido a problemas en los hombros durante los últimos 12 meses</td>
                                      <td class="text-center"> <input type="checkbox" name="" value=""> </td>
                                  </tr>
                                  <tr>
                                      <td>Ha tenido problemas de hombros en algún momento durante los últimos 7 días</td>
                                      <td class="text-center"> <input type="checkbox" name="" value=""> </td>
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
                                            <td>Ud ha tenido problemas en el cuello (molestia, dolor, disconfort)</td>
                                            <td class="text-center"> <input type="checkbox" name="" value=""> </td>
                                        </tr>
                                        <tr>
                                            <td>Ud ha sido lesionado en el cuello en un accidente</td>
                                            <td class="text-center"> <input type="checkbox" name="" value=""> </td>
                                        </tr>
                                        <tr>
                                            <td>Ud ha tenido cambios de trabajo o actividad pro problemas en el cuello</td>
                                            <td class="text-center"> <input type="checkbox" name="" value=""> </td>
                                        </tr>
                                        <tr>
                                            <td>Cuál es la duración total de tiempo en que se ha tenido problemas en el cuello durante los últimos 12 meses</td>
                                            <td>  <select class="form-control" name="">
                                                <option value="">DERECHO</option>
                                                <option value="">IZQUIERDO</option>
                                              </select></td>
                                        </tr>

                                        <tr>
                                            <td>los problemas de su cuello han causado  a Ud. reduccion de su actividad fisica durante los últimos 12 meses en su Actividad de trabajo(trabajo - casa)</td>
                                            <td class="text-center"> <input type="checkbox" name="" value=""> </td>
                                        </tr>
                                        <tr>
                                            <td>los problemas de su cuello han causado a Ud. reducción de su actividad física durante los últimos 12 meses en acvidades recreativas</td>
                                            <td class="text-center"> <input type="checkbox" name="" value=""> </td>
                                        </tr>
                                        <tr>
                                            <td>Cúal es la duración total del tiempo que los problemas de su cuello le han impedido hacer rutinas de trabajo(en el trabajo o en casa) durante los últimos 12 meses</td>
                                            <td class="text-center">
                                              <select class="form-control" name="">
                                                <option value="">TIEMPO UNO</option>
                                                <option value="">TIEMPO DOS</option>
                                              </select>
                                             </td>
                                        </tr>
                                        <tr>
                                            <td>Ha sido visto por un médico, fisioterapista, quiropractico u otra persona del area debido a problemas de su cuello durante los últimos 12 meses</td>
                                            <td class="text-center"> <input type="checkbox" name="" value=""> </td>
                                        </tr>
                                        <tr>
                                            <td>Ha tenido problemas de su cuello en algún momento durante los últimos 7 días</td>
                                            <td class="text-center"> <input type="checkbox" name="" value=""> </td>
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
                        <a href="" class="btn btn-sm btn-success" data-dismiss="modal">GUARDAR</a>
                        <a href="" class="btn btn-sm btn-info" data-dismiss="modal">TERMINAR</a>

                        <a href="" class="btn btn-sm btn-warning" data-dismiss="modal">Volver</a>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
