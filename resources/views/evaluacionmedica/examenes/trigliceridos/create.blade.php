<div class="modal fade" tabindex="-1" role="dialog" id="modal-triglicerido">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form action="{{route('trigliceridos.store')}}" id="registrarTriglicerido" method="post">
            <div class="modal-body ">
                {{csrf_field()}}
                <div class="row form-horizontal">
                  <div class="col-md-12">
                    <div class="form-horizontal">
                      <div class="form-group">
                       <label for="inputEmail3" class="col-sm-4 control-label">Trigliceridos </label>
                       <div class="col-sm-4">
                         <div class="input-group">
                           @isset($cita->triglicerido->id)
                              <input type="text" class="form-control" name="triglicerido"  value="{{$cita->triglicerido->triglicerido}}">
                              <input type="hidden" name="triglicerido_id" value="{{$cita->triglicerido->id}}">
                           @else
                             <input type="text" class="form-control" name="triglicerido">
                           @endisset
                             <input type="hidden" name="lista_examen_id" value="{{$listaExamen->id}}">
                             <input type="hidden" name="cita_id" value="{{$cita->id}}">
                          <div class="input-group-addon">mg/dL</div>
                        </div>
                       </div>
                       <label for="inputEmail3" class="col-sm-2 control-label text-danger"><strong> <= 150 </strong> </label>
                     </div>
                    </div>
                  </div>

                </div>


            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-right">
                      @isset($cita->triglicerido->id)
                        <button class="btn btn-sm btn-primary  registrarTriglicerido" tipo="triglicerido_modificar" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDITAR</button>
                       @else
                        <button class="btn btn-sm btn-success registrarTriglicerido" tipo="triglicerido_guardar"  type="button">GUARDAR</button>
                      @endisset
                        <a href="" class="btn btn-sm btn-info" data-dismiss="modal">TERMINAR</a>

                        <a href="" class="btn btn-sm btn-warning" data-dismiss="modal">Volver</a>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
