<div class="modal fade" tabindex="-1" role="dialog" id="modal-colesteroltotal">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form action="{{route('colesterol_total.store')}}" id="registrarColesterolTotal" method="post">
            <div class="modal-body ">
                {{csrf_field()}}

                <div class="row form-horizontal">

                  <div class="col-md-12">
                    <div class="form-horizontal">
                      <div class="form-group">
                       <label for="inputEmail3" class="col-sm-4 control-label">Colesterol Total </label>
                       <div class="col-sm-4">
                         <div class="input-group">
                           @isset($cita->colesterolTotal->id)
                              <input type="text" class="form-control" name="colesterol_total"  value="{{$cita->colesterolTotal->colesterol_total}}">
                              <input type="hidden" name="colesteroltotal_id" value="{{$cita->colesterolTotal->id}}">
                           @else
                             <input type="text" class="form-control" name="colesterol_total">
                          @endisset
                             <input type="hidden" name="lista_examen_id" value="{{$listaExamen->id}}">
                             <input type="hidden" name="cita_id" value="{{$cita->id}}">
                          <div class="input-group-addon">mm/h</div>
                        </div>
                       </div>
                       <label for="inputEmail3" class="col-sm-2 control-label text-danger"><strong> < 130 </strong> </label>
                     </div>
                    </div>
                  </div>

                </div>


            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-right">
                      @isset($cita->colesterolTotal->id)
                        <button class="btn btn-sm btn-primary  registrarColesterolTotal" tipo="colesterol_total_modificar" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDITAR</button>
                       @else
                        <button class="btn btn-sm btn-success registrarColesterolTotal" tipo="colesterol_total_guardar"  type="button">GUARDAR</button>
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
