<div class="modal fade" tabindex="-1" role="dialog" id="modal-thevenon">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form  id="formthevenon">
            <div class="modal-body ">
                {{csrf_field()}}

                <div class="row form-horizontal">

                  <div class="col-md-12">
                    <div class="form-horizontal">
                      <div class="form-group">
                       <label for="inputEmail3" class="col-sm-4 control-label">THEVENON </label>
                       <div class="col-sm-4">
                         <div class="input-group">
                            @isset($cita->thevenon->id)
                             <input type="text" class="form-control" name="thevenon"  value="{{$cita->thevenon->thevenon_descripcion}}">
                             <input type="hidden" name="thevenon_id" value="{{$cita->thevenon->id}}">

                           @else
                                <input type="text" class="form-control" name="thevenon">
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
                        @isset($cita->thevenon->id)
                          <button class="btn btn-sm btn-primary thevenon" tipo="thevenon_modificar" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDITAR</button>
                         @else
                          <button class="btn btn-sm btn-success thevenon" tipo="thevenon_guardar" type="button">GUARDAR</button>
                        @endisset

                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
