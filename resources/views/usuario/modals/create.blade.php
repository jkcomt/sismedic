
<div class="modal fade" tabindex="-1" role="dialog" id="modal-usuario-create">
    <div class="modal-dialog " role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Nuevo Usuario</h4>
            </div>
            <form action="{{route('usuario.store')}}" id="registrarUsuario" method="post">
                <div class="modal-body ">

                    {{csrf_field()}}

                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="personal" class="control-label">Personal :</label>
                            <select  name="personal" id="personal" class="form-control">
                                @foreach($personales  as $key => $personal)
                                    <option value="{{$key}}">{{$personal}}</option>

                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 form-group" style="display:none;">
                            <label for="cargo" class="control-label">Cargo :</label>
                            <select  name="cargo" id="cargo" class="form-control">
                                @foreach($cargos  as $key => $cargo)
                                    <option value="{{$key}}">{{$cargo}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="perfil" class="control-label">Perfiles :</label>
                            <select  name="perfil" id="perfil" class="form-control">
                                @foreach($perfiles  as $key => $perfil)
                                    <option value="{{$key}}">{{strtoupper($perfil)}}</option>

                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="rol" class="control-label">Rol :</label>
                            <select  name="rol_id" id="rol_id" class="form-control">
                                @foreach($roles  as $key => $role)
                                    <option value="{{$key}}">{{strtoupper($role)}}</option>

                                @endforeach
                            </select>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="nombres" class="control-label">Usuario :</label>
                            <input type="text"  value="" class="form-control" name="name" >
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="apellidos" class="control-label">Contraseña :</label>
                            <input type="text"  value="" class="form-control" name="password">
                        </div>
                    </div>



                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <button class="btn btn-success">Registrar</button>
                            <a href="" class="btn btn-warning" data-dismiss="modal">Volver</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>