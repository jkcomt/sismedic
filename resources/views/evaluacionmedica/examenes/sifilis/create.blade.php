<div class="modal fade" tabindex="-1" role="dialog" id="modal-sifilis">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form action="{{route('sifilis.store')}}" id="registrarSifilis" method="post">
            <div class="modal-body ">
                {{csrf_field()}}

                <div class="row form-horizontal">
                  @isset($cita->sifilis->id)
                    <input type="hidden" name="sifilis_id" value="{{$cita->sifilis->id}}">
                  @endisset
                  <div class="col-md-12">
                    <div class="form-horizontal">
                      <div class="form-group">
                       <label for="inputEmail3" class="col-sm-4 control-label">SIFILIS PRUEBA RAPIDA</label>
                       <div class="col-sm-4">
                         <select class="form-control" name="resultado">
                               @isset($cita->sifilis->resultado)
                                 <option value="negativo"  @if($cita->sifilis->resultado == "negativo") selected @else  @endif  >NEGATIVO</option>
                                 <option value="positivo"  @if($cita->sifilis->resultado == "positivo") selected @else  @endif  >POSITIVO</option>
                               @else
                                 <option value="negativo" selected>NEGATIVO</option>
                                 <option value="positivo">POSITIVO</option>
                               @endisset


                         </select>

                           <input type="hidden" name="lista_examen_id" value="{{$listaExamen->id}}">
                           <input type="hidden" name="cita_id" value="{{$cita->id}}">
                       </div>
                       <label for="inputEmail3" class="col-sm-2 control-label text-danger"><strong> NEGATIVO </strong> </label>
                     </div>
                    </div>
                  </div>

                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-right">
                      @isset($cita->sifilis->id)
                        <button class="btn btn-sm btn-primary registrarSifilis" tipo="sifilis_modificar" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDITAR</button>
                       @else
                        <button class="btn btn-sm btn-success registrarSifilis" tipo="sifilis_guardar" type="button">GUARDAR</button>
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
