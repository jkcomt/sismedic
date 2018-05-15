<div class="modal fade" tabindex="-1" role="dialog" id="modal-velocidadsedimentacion">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form  id="registrarSedimentacion" >
            <div class="modal-body ">
                {{csrf_field()}}

                <div class="row form-horizontal">
                    <div class="col-md-12">
                        <label for=""><h5><u> <strong>HB. / HTO.</strong></u></h5></label>
                    </div>

                  <div class="col-md-12">
                    <div class="form-horizontal">
                      <div class="form-group">
                       <label for="inputEmail3" class="col-sm-6 control-label">Velocidad de Sedimentacion Globular: </label>
                       <div class="col-sm-4">
                         <div class="input-group">
                    @isset($cita->velocidadSedimentacion->id)
                      <input type="text" value="{{$cita->velocidadSedimentacion->velocidad_sedimentacion_globular}}" class="form-control"  name="sedimentacion">
                      <input type="hidden" name="sedimentacion_id" value="{{$cita->velocidadSedimentacion->id}}">
                    @else
                      <input type="text"  class="form-control"  name="sedimentacion">

                    @endisset

                             <input type="hidden" name="lista_examen_id" value="{{$listaExamen->id}}">
                             <input type="hidden" name="cita_id" value="{{$cita->id}}">

                          <div class="input-group-addon">mm/h</div>
                        </div>
                       </div>
                       <label for="inputEmail3" class="control-label text-danger"><strong >0-10/0-20</strong> </label>
                     </div>
                    </div>
                  </div>

                </div>


            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-right">

                        @isset($cita->velocidadSedimentacion->id)
                          <button class="btn btn-sm btn-primary registrarSedimentacion" tipo="sedimentacion_modificar" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDITAR</button>
                              @else
                          <button class="btn btn-sm btn-success registrarSedimentacion" tipo="sedimentacion_guardar" type="button">GUARDAR</button>
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
