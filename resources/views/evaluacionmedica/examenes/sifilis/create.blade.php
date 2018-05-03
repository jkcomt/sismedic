<div class="modal fade" tabindex="-1" role="dialog" id="modal-sifilis">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form action="{{route('sifilis.store')}}" id="registrarSifilis" method="post">
            <div class="modal-body ">
                {{csrf_field()}}

                <div class="row form-horizontal">

                  <div class="col-md-12">
                    <div class="form-horizontal">
                      <div class="form-group">
                       <label for="inputEmail3" class="col-sm-4 control-label">SIFILIS PRUEBA RAPIDA</label>
                       <div class="col-sm-4">
                         <select class="form-control" name="resultado">
                           <option value="negativo">NEGATIVO</option>
                           <option value="positivo">POSITIVO</option>
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
                        <button class="btn btn-sm btn-success registrarSifilis" type="button">GUARDAR</button>
                        <a href="" class="btn btn-sm btn-info" data-dismiss="modal">TERMINAR</a>
                        <a href="" class="btn btn-sm btn-warning" data-dismiss="modal">Volver</a>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
