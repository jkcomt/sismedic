
 <div class="modal fade" tabindex="-1" role="dialog" id="modal-personal-edit">
    <div class="modal-dialog " role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar Personal</h4>
            </div>
            <div class="modal-body ">
                  <form action="{{route('personal.update')}}" id="editarPersonal" method="post">
                {{csrf_field()}}

                            
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="hidden"  value="" id="editid" name="editid">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="nombres" class="control-label">Nombres :</label>
                                <input type="text"  value="" class="form-control" name="editnombres">
                            </div>
                        </div>

                          <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="apellidos" class="control-label">Apellidos :</label>
                                <input type="text"  value="" class="form-control" name="editapellidos">
                            </div>
                        </div>
                          <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="dni" class="control-label">DNI :</label>
                                <input type="text"  value="" class="form-control" name="editdni" readonly>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="celular" class="control-label">Celular :</label>
                                <input type="text"  value="" class="form-control" name="editcelular">
                            </div>
                        </div>                    

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="direccion" class="control-label">Direccion :</label>
                                <input type="text"  value="" class="form-control" name="editdireccion">
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="email" class="control-label">E-mail :</label>
                                <input type="text"  value="" class="form-control" name="editemail">
                            </div>
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