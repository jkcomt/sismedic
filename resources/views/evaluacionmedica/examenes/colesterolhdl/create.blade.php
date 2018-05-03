<div class="modal fade" tabindex="-1" role="dialog" id="modal-colesterolhdl">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form action="{{route('colesterol_hdl.store')}}" id="registrarColesterolHdl" method="post">
            <div class="modal-body ">
                {{csrf_field()}}

                <div class="row form-horizontal">

                  <div class="col-md-12">
                    <div class="form-horizontal">
                      <div class="form-group">
                       <label for="inputEmail3" class="col-sm-4 control-label">Colesterol HDL </label>
                       <div class="col-sm-4">
                         <div class="input-group">
                          <input type="text" class="form-control" name="colesterol_hdl">
                          <input type="hidden" name="lista_examen_id" value="{{$listaExamen->id}}">
                          <input type="hidden" name="cita_id" value="{{$cita->id}}">
                          <div class="input-group-addon">mm/h</div>
                        </div>
                       </div>
                       <label for="inputEmail3" class="col-sm-4 control-label text-danger"><strong>0-10/0-20</strong> </label>
                     </div>
                    </div>
                  </div>
                </div>

            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-right">
                        <button class="btn btn-sm btn-success registrarColesterolHdl" type="button">GUARDAR</button>
                        <a href="" class="btn btn-sm btn-info" data-dismiss="modal">TERMINAR</a>
                        <a href="" class="btn btn-sm btn-warning" data-dismiss="modal">Volver</a>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
