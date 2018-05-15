<div class="modal fade" tabindex="-1" role="dialog" id="modal-creatinina">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form action="{{route('creatinina.store')}}" id="registrarCreatinina" method="post">
            <div class="modal-body ">
                {{csrf_field()}}

                <div class="row form-horizontal">

                  <div class="col-md-12">
                    <div class="form-horizontal">
                      <div class="form-group">
                       <label for="inputEmail3" class="col-sm-4 control-label" >Creatina </label>
                       <div class="col-sm-4">
                         <div class="input-group">
                           @isset($cita->creatinina->id)
                          <input type="text" class="form-control" name="creatinina"  value="{{$cita->creatinina->creatinina}}">
                          <input type="hidden" name="creatina_id" value="{{$cita->creatinina->id}}">
                            @else
                          <input type="text" class="form-control" name="creatinina">
                            @endisset

                          <input type="hidden" name="lista_examen_id" value="{{$listaExamen->id}}">
                          <input type="hidden" name="cita_id" value="{{$cita->id}}">
                          <div class="input-group-addon">mg/dL</div>
                        </div>
                       </div>
                       <label for="inputEmail3" class="col-sm-2 control-label text-danger"><strong> 0.8 a 1.4 </strong> </label>
                     </div>
                    </div>
                  </div>

                </div>


            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-right">
                      @isset($cita->creatinina->id)
                        <button class="btn btn-sm btn-primary  registrarCreatinina" tipo="creatina_modificar" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDITAR</button>
                       @else
                        <button class="btn btn-sm btn-success registrarCreatinina" tipo="creatina_guardar" type="button">GUARDAR</button>
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
