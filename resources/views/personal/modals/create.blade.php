
 <div class="modal fade" tabindex="-1" role="dialog" id="modal-personal-create">
    <div class="modal-dialog " role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Nuevo Personal</h4>
            </div>
            <div class="modal-body ">
                  <form action="{{route('personal.store')}}" id="registrarPersonal" method="post">
                {{csrf_field()}}

    
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="nombres" class="control-label">Nombres :</label>
                                <input type="text"  value="" class="form-control" name="nombres">
                            </div>
                        </div>

                          <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="apellidos" class="control-label">Apellidos :</label>
                                <input type="text"  value="" class="form-control" name="apellidos">
                            </div>
                        </div>
                          <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="dni" class="control-label">DNI :</label>
                                <input type="text"  value="" class="form-control" name="dni">
                            </div>
                        </div>

						<div class="row">
                            <div class="col-md-12 form-group">
                                <label for="celular" class="control-label">Celular :</label>
                                <input type="text"  value="" class="form-control" name="celular">
                            </div>
                        </div>                    

						<div class="row">
                            <div class="col-md-12 form-group">
                                <label for="direccion" class="control-label">Dirección :</label>
                                <input type="text"  value="" class="form-control" name="direccion">
                            </div>
                        </div>


						<div class="row">
                            <div class="col-md-12 form-group">
                                <label for="email" class="control-label">E-mail :</label>
                                <input type="text"  value="" class="form-control" name="email">
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