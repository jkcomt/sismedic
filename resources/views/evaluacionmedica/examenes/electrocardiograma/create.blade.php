<div class="modal fade" tabindex="-1" role="dialog" id="modal-electrocardiograma">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form action="" id="" method="post" class="form-horizontal">
                <div class="modal-body ">
                    {{csrf_field()}}
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                                <label for="cboritmo" class="col-md-6 control-label">RITMO</label>
                                <div class="col-md-6">
                                  <select   name="cboritmo" class="form-control">
                                      <option value="">SINUSAL</option>
                                  </select>
                                </div>
                        </div>

                        <div class="form-group">
                          <label for="" class="col-md-6 control-label">FRECUENCIA CARDIACA</label>
                          <div class="col-md-6">
                            <input type="text" class="form-control" name="" value="">
                          </div>
                        </div>


                        <div class="form-group">
                          <label for="" class="col-md-6 control-label">EJE QRS:</label>
                          <div class="col-md-3">
                            <div class="input-group">
                             <input type="text" class="form-control" id="exampleInputAmount">
                             <div class="input-group-addon">°</div>
                           </div>
                          </div>
                          <div class="col-md-3">
                            <input type="text" class="form-control" name="" value="">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="" class="col-md-6 control-label">ONDA P</label>
                          <div class="col-md-6">
                            <div class="input-group">
                             <input type="text" class="form-control" id="exampleInputAmount">
                             <div class="input-group-addon">seg</div>
                           </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="" class="col-md-6 control-label">INTERVALO PR</label>
                          <div class="col-md-6">
                            <div class="input-group">
                             <input type="text" class="form-control" id="exampleInputAmount">
                             <div class="input-group-addon">seg</div>
                           </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="" class="col-md-6 control-label">SEGMENTO QRS</label>
                          <div class="col-md-6">
                            <div class="input-group">
                             <input type="text" class="form-control" id="exampleInputAmount">
                             <div class="input-group-addon">seg</div>
                           </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="" class="col-md-6 control-label">QT CORREGIDO</label>
                          <div class="col-md-6">
                            <div class="input-group">
                             <input type="text" class="form-control" id="exampleInputAmount">
                             <div class="input-group-addon">seg</div>
                           </div>
                          </div>
                        </div>


                        <div class="form-group">
                          <label for="" class="col-md-6 control-label">ISQUEMA</label>
                          <div class="col-md-3">
                            <select   name="cboritmo" class="form-control">
                                <option value="">NO</option>
                            </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="" class="col-md-6 control-label">HIPERTROFIAS</label>
                          <div class="col-md-3">
                            <select   name="cboritmo" class="form-control">
                                <option value="">NO</option>
                            </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="" class="col-md-6 control-label">Otros Hallazgos</label>
                          <div class="col-md-5">
                            <input type="text" class="form-control" name="" value="">
                          </div>
                        </div>


                      </div>
                      <div class="col-md-6">
                        <div class="row">

                          <div class="" style="height:25vh;overflow:hidden;border:1px solid rgba(0,0,0,0.1);margin:10px;">

                          </div>

                        </div>
                        <div class="row">
                          <div class="col-md-3">
                            <a href="" class="btn btn-sm btn-block btn-primary" data-dismiss="modal">ADJUNTAR</a>
                          </div>
                          <div class="col-md-3">
                            <a href="" class="btn btn-sm btn-block btn-primary" data-dismiss="modal">PEGAR</a>
                          </div>
                          <div class="col-md-3">
                            <a href="" class="btn btn-sm btn-block btn-primary" data-dismiss="modal">LIMPIAR</a>
                          </div>
                          <div class="col-md-3">
                              <a href="" class="btn btn-sm btn-block btn-primary" data-dismiss="modal">V.REAL</a>
                          </div>
                        </div>




                      </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-md-12 text-right">
                          <a href="" class="btn btn-sm  btn-success" data-dismiss="modal">GUARDAR</a>
                          <a href="" class="btn btn-sm  btn-info" data-dismiss="modal">DIAGNOSTICO</a>
                            <a href="" class="btn btn-sm  btn-warning" data-dismiss="modal">Volver</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
