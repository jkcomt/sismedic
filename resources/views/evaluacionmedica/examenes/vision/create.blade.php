<div class="modal fade" tabindex="-1" role="dialog" id="modal-vision">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form action="" id="" method="post">
            <div class="modal-body ">
                {{csrf_field()}}

                <div class="row form-horizontal">

                  <div class="col-md-12">

                    <table class="table">
                      <thead>
                        <tr>
                          <td colspan="3">
                          <strong>AGUDEZA VISUAL - REFACCION</strong>
                          </td>
                        </tr>
                        <tr>
                          <th colspan="1"> </th>
                          <th colspan="1" class="text-center">S/L</th>
                          <th colspan="1" class="text-center">C/L</th>
                        </tr>
                      </thead>
                      <tbody>
                          <tr>
                            <td>AV Lejos OD </td>
                            <td><input type="text" name="" value="" class="form-control"> </td>
                            <td><input type="text" name="" value="" class="form-control"> </td>
                          </tr>
                          <tr>
                            <td>AV Lejos OI </td>
                            <td><input type="text" name="" value="" class="form-control"> </td>
                            <td><input type="text" name="" value="" class="form-control"> </td>
                          </tr>
                          <tr>
                            <td>AV Cerca OD </td>
                            <td><input type="text" name="" value="" class="form-control"> </td>
                            <td><input type="text" name="" value="" class="form-control"> </td>
                          </tr>
                          <tr>
                            <td>AV Cerca OI </td>
                            <td><input type="text" name="" value="" class="form-control"> </td>
                            <td><input type="text" name="" value="" class="form-control"> </td>
                          </tr>

                          <tr>
                            <td>AV Binocular </td>
                            <td><input type="text" name="" value="" class="form-control"> </td>
                            <td><input type="text" name="" value="" class="form-control"> </td>
                          </tr>

                          <tr>
                            <td><strong>Test Ishihara (colores) </strong> </td>
                            <td colspan="2">
                              <select class="form-control" name="">
                                  <option value="">Normal</option>
                              </select>
                            </td>
                          </tr>

                          <tr>
                            <td><strong>Discriminacion de Colores </strong> </td>
                            <td colspan="2">
                              <select class="form-control" name="">
                                  <option value="">Normal</option>
                              </select>
                            </td>
                          </tr>
                          <tr>
                            <td><strong>Vision de Profundidad </strong> </td>
                            <td colspan="2">
                              <select class="form-control" name="">
                                  <option value="">Normal</option>
                              </select>
                            </td>
                          </tr>
                          <tr>
                            <td><strong>Vision Perimetral </strong> </td>
                            <td colspan="2">
                              <select class="form-control" name="">
                                  <option value="">Normal</option>
                              </select>
                            </td>
                          </tr>
                          <tr>
                            <td><strong>Foria Vertical </strong> </td>
                            <td colspan="2">
                              <select class="form-control" name="">
                                  <option value="">Normal</option>
                              </select>
                            </td>
                          </tr>
                          <tr>
                            <td><strong>Foria Horizontal </strong> </td>
                            <td colspan="2">
                              <select class="form-control" name="">
                                  <option value="">Normal</option>
                              </select>
                            </td>
                          </tr>
                          <tr>
                            <td><strong>Vision Nocturna </strong> </td>
                            <td colspan="2">
                              <select class="form-control" name="">
                                  <option value="">Normal</option>
                              </select>
                            </td>
                          </tr>
                          <tr>
                            <td><strong>Vision Encandilada </strong> </td>
                            <td colspan="2">
                              <select class="form-control" name="">
                                  <option value="">Normal</option>
                              </select>
                            </td>
                          </tr>
                          <tr>
                            <td><strong>Recuperacion de Encadenamiento</strong> </td>
                            <td colspan="2">
                              <select class="form-control" name="">
                                  <option value="">Normal</option>
                              </select>
                            </td>
                          </tr>
                      </tbody>
                    </table>
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
