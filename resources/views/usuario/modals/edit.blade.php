
 <div class="modal fade" tabindex="-1" role="dialog" id="modal-usuario-edit">
    <div class="modal-dialog " role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar Usuario</h4>
            </div>
            <div class="modal-body ">
                  <form action="{{route('usuario.update')}}" id="editarUsuario" method="post">
                {{csrf_field()}}

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="nombres" class="control-label">Usuario :</label>
                                <input type="text"  value="" class="form-control" name="name" readonly>
                                <input type="hidden" name="editid" readonly>
                            </div>
                        </div>     

                        <div class="row">
                            <div class="col-md-12 form-group" style="display: none;">
                                 <label for="cargo" class="control-label">Cargo :</label>
                                 <select  name="cargo" id="cargo" class="form-control">
                             <option value=""></option>
                                </select>
                            </div>
                        </div>

                      <div class="col-md-12 form-group">
                          <label for="perfil" class="control-label">Perfiles :</label>
                          <select  name="perfil" id="perfil" class="form-control">
                              @foreach($perfiles  as $key => $perfil)
                                  <option value="{{$key}}">{{strtoupper($perfil)}}</option>

                              @endforeach
                          </select>
                      </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="apellidos" class="control-label">Contraseña :</label>
                                <input type="text"  value="" class="form-control" name="password">
                            </div>
                        </div>
                      
    

            <div class="modal-footer">
                    <div class="row">
                            <div class="col-md-12 text-right">
                                <button class="btn btn-success" id="update">Actualizar</button>
                                <a href="" class="btn btn-warning" data-dismiss="modal">Volver</a>                    
                    </div>
                </div>
             </div>
                     </form>
            </div>
        </div>
    </div>
</div>