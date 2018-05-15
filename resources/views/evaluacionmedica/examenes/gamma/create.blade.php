<div class="modal fade" tabindex="-1" role="dialog" id="modal-gamma">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form action="{{route('gamma.store')}}" id="registrarGamma" method="post">
            <div class="modal-body ">
                {{csrf_field()}}

                <div class="row form-horizontal">
                  @isset($cita->gamma->id)
                    <input type="hidden" name="ggt_id" value="{{$cita->gamma->id}}">
                  @endisset
                  <div class="col-md-12">
                    <div class="form-horizontal">
                      <div class="form-group">
                       <label for="inputEmail3" class="col-sm-4 control-label">GGT </label>
                       <div class="col-sm-4">
                         <div class="input-group">
                             <input type="text" class="form-control" name="ggt" @isset($cita->gamma->ggt)  value="{{$cita->gamma->ggt}}"   @endisset>
                             <input type="hidden" name="lista_examen_id" value="{{$listaExamen->id}}">
                             <input type="hidden" name="cita_id" value="{{$cita->id}}">
                          <div class="input-group-addon">U/l</div>
                        </div>
                       </div>
                       <label for="inputEmail3" class="col-sm-2 control-label text-danger"><strong>11-50/7-32 </strong> </label>
                     </div>
                    </div>
                  </div>

                </div>


            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-right">
                      @isset($cita->gamma->id)
                        <button class="btn btn-sm btn-primary registrarGamma" tipo="ggt_modificar" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDITAR</button>
                       @else
                           <button class="btn btn-sm btn-success registrarGamma" tipo="ggt_guardar" type="button">GUARDAR</button>
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
