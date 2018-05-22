<div class="modal fade" tabindex="-1" role="dialog" id="modal-vision">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form action="" id="" method="post">
            <div class="modal-body ">
                {{csrf_field()}}

                <div class="row">

                  <div class="col-md-12">
                    <div class="col-md-6">
                      <div class="form-horizontal">
                        <div class="form-group">
                           <label for="inputEmail3" class="col-sm-6 control-label">clase</label>
                           <div class="col-sm-6">
                             <input type="email" class="form-control">
                           </div>
                         </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-horizontal">
                        <div class="form-group">
                           <label for="inputEmail3" class="col-sm-4 control-label">categoria</label>
                           <div class="col-sm-8">
                             <input type="email" class="form-control">
                           </div>
                         </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <div class="form-horizontal">
                        <div class="form-group">
                           <label for="inputEmail3" class="col-sm-6 control-label">N° Licencia</label>
                           <div class="col-sm-6">
                             <input type="email" class="form-control">
                           </div>
                         </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-horizontal">
                        <div class="form-group">
                           <label for="inputEmail3" class="col-sm-4 control-label">Maquina</label>
                           <div class="col-sm-8">
                             <input type="email" class="form-control">
                           </div>
                         </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="col-md-8">
                      <div class="form-horizontal">
                        <div class="form-group">
                           <label for="inputEmail3" class="col-sm-6 control-label text-left">Fecha Revalidacion</label>
                           <div class="col-sm-6">
                             <input type="date" class="form-control">
                           </div>
                         </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-10 ">
                      <div class="form-horizontal">
                        <div class="form-group">
                           <label for="inputEmail3" class="col-sm-4 control-label text-left">Aptitud </label>
                           <div class="col-sm-4">
                               <div class="checkbox">
                                <label>
                                  <input type="checkbox"> Apto
                                </label>
                              </div>
                           </div>
                           <div class="col-sm-4">
                               <div class="checkbox">
                                <label>
                                  <input type="checkbox"> No Apto
                                </label>
                              </div>
                           </div>
                         </div>
                      </div>
                    </div>
                    <div class="col-md-2">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-12">
                        <label>Observaciones</label>
                    </div>
                    <div class="col-md-12">
                      <div class="col-md-1">

                      </div>
                      <div class="col-md-8">
                          <textarea name="name" rows="8" cols="60" style="resize:none"></textarea>
                      </div>
                      <div class="col-md-2">

                      </div>
                    </div>
                    <div class="col-md-12">
                          <div class="col-md-6">

                          </div>
                          <div class="col-md-6 text-right">
                              <button type="button" class="btn btn-info btn-sm" name="button">Emitir Formato</button>
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
