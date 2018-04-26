<div class="modal fade" tabindex="-1" role="dialog" id="modal-espirometria">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form action="" id="" method="post">
                <div class="modal-body ">
                    {{csrf_field()}}
                    <div class="">

                        <div class="col-md-12" >
                            {{-- style="max-height:60vh; overflow-y:scroll;" --}}
                            <div class="row ">
                              <div class="col-md-8 panel panel-default">
                                      <div class=" panel-body">
                                        <div class="form-group">
                                          <label for="grupoetnico">Grupo Étnico</label>
                                          <select  class="form-control" name="">
                                            <option value="">No Definido</option>
                                          </select>
                                        </div>
                                        <div class="form-horizontal">
                                          <div class="row">
                                            <div class="col-md-6">
                                              <label for="grupoetnico">Fumador: </label>
                                              <select  class="form-control" name="">
                                                <option value="">NO FUMADOR</option>
                                              </select>
                                            </div>
                                            <div class="col-md-6">
                                              <label for="grupoetnico">Calidad: </label>
                                              <select  class="form-control" name="">
                                                <option value=""></option>
                                              </select>
                                            </div>
                                          </div>
                                          <hr>
                                          <div class="row">

                                            <div class="col-md-4">
                                              <label for="grupoetnico">Talla: </label>
                                              <input type="text" name="" value="" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                              <label for="grupoetnico">Peso: </label>
                                              <input type="text" name="" value="" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                              <label for="">&nbsp</label>
                                              <button type="button" name="button" class="btn btn-info btn-block btn-sm " disabled="disabled">Leer Espirómetro</button>
                                            </div>
                                          </div>

                                        </div>
                                        <br>



                                      </div>
                              </div>
                              <div class="col-md-4">
                                  <label for="">Historico FVC: </label>
                                  <textarea class="form-control" rows="9" id="comment"placeholder="" style="resize:none"></textarea>

                              </div>
                            </div>
                            <div class="row">

<div class="col-md-8">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Lectura Espirometrica</a></li>
    <li><a data-toggle="tab" href="#menu1"> Espirometrica Manual</a></li>
    <li><a data-toggle="tab" href="#menu2">Post Broncodilatador</a></li>
  </ul>
</div>

<div class="col-md-4">
  <div class="checkbox">
  <label>
    <input type="checkbox" value="">
  Ingreso Manual
  </label>
</div>
</div>
                            </div>
                            <div class="row">
                              <table class="table  table-bordered">
                                <thead>
                                  <tr>
                                    <th colspan="1"></th>
                                    <th colspan="1"></th>
                                    <th colspan="3" class="text-center">Result1nBest</th>
                                    <th colspan="3" class="text-center">Result2nBest</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Datos</td>
                                    <td>UM</td>
                                    <td>Result</td>
                                    <td>Predicted</td>
                                    <td>%Predicted</td>

                                    <td>Result</td>
                                    <td>Predicted</td>
                                    <td>%Predicted</td>

                                  </tr>
                                  <tr>
                                    <td>FVC</td>
                                    <td>L</td>
                                  </tr>
                                  <tr>
                                    <td>FEV1</td>
                                    <td>L</td>
                                  </tr>
                                  <tr>
                                    <td>FEV1/FVC</td>
                                    <td>L</td>
                                  </tr>
                                  <tr>
                                    <td>PEF</td>
                                    <td>L/s</td>
                                  </tr>
                                  <tr>
                                        <td>FEF2575</td>
                                        <td>L/s</td>
                                  </tr>

                                </tbody>

                              </table>
                            </div>

                        </div>
                        {{-- <div class="col-md-4 panel panel-default" >
                            <div class="panel-body" style="height:55vh;">

                            </div>
                        </div> --}}

                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-md-12 text-right">
                          <a href="" class="btn btn-sm btn-success" data-dismiss="modal">GUARDAR</a>
                          <a href="" class="btn btn-sm btn-info" data-dismiss="modal">DIAGNOSTICO</a>


                            <a href="" class="btn btn-sm btn-warning" data-dismiss="modal">Volver</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
