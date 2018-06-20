<div class="modal fade" tabindex="-1" role="dialog" id="modal-psa">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form  id="formpsa">
            <div class="modal-body ">
                {{csrf_field()}}

                <div class="row form-horizontal">
                  <div class="col-md-12">
                    <div class="form-horizontal">
                      <div class="form-group">
                       <label for="inputEmail3" class="col-sm-4 control-label">PSA </label>
                       <div class="col-sm-4">
                         <div class="input-group">
                            @isset($cita->psa->id)
                             <input type="text" class="form-control" name="psa"  value="{{$cita->psa->psa_descripcion}}">
                             <input type="hidden" name="psa_id" value="{{$cita->psa->id}}">

                           @else
                                <input type="text" class="form-control" name="psa">
                           @endisset
                             <input type="hidden" name="lista_examen_id" value="{{$listaExamen->id}}">
                             <input type="hidden" name="cita_id" value="{{$cita->id}}">
                        </div>
                       </div>

                     </div>
                    </div>
                  </div>

                </div>


            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-right">
                        @isset($cita->psa->id)
                          <button class="btn btn-sm btn-primary psa" tipo="psa_modificar" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDITAR</button>
                         @else
                          <button class="btn btn-sm btn-success psa" tipo="psa_guardar" type="button">GUARDAR</button>
                        @endisset
                  </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
