<div class="modal fade" tabindex="-1" role="dialog" id="modal-acidourico">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form action="{{route('acido_urico.store')}}" id="registrarAcidoUrico" method="post">
            <div class="modal-body ">
                {{csrf_field()}}

                <div class="row form-horizontal">

                  <div class="col-md-12">
                    <div class="form-horizontal">
                      <div class="form-group">
                       <label for="inputEmail3" class="col-sm-4 control-label">Ácido Úrico</label>
                       <div class="col-sm-4">
                         <div class="input-group">
                             <input type="text" class="form-control" name="acido_urico">
                             <input type="hidden" name="lista_examen_id" value="{{$listaExamen->id}}">
                             <input type="hidden" name="cita_id" value="{{$cita->id}}">
                          <div class="input-group-addon">mg/dL</div>
                        </div>
                       </div>
                       <label for="inputEmail3" class=" control-label text-danger"><strong> 3.5-7.2/2.6-6.0 </strong> </label>
                     </div>
                    </div>
                  </div>

                </div>


            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-right">
                        <button class="btn btn-sm btn-success registrarAcidoUrico" type="button">GUARDAR</button>
                        <a href="" class="btn btn-sm btn-info" data-dismiss="modal">TERMINAR</a>
                        <a href="" class="btn btn-sm btn-warning" data-dismiss="modal">Volver</a>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
