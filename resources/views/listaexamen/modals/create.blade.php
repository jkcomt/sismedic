<div class="modal fade" tabindex="-1" role="dialog" id="modal-listaexamen-create">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Nuevo Tipo de Instruccion</h4>
            </div>
            <div class="modal-body ">
                  <form action="{{route('lista_examen.store')}}" id="registrarListaExamen" method="post">
                {{csrf_field()}}


                        <div class="row">

                            <div class="col-md-8 form-group">
                                <label for="nombre" class="control-label">Descripcion de Examen :</label>
                                <input type="text"  value="" class="form-control" name="nombre">
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-8 form-group">
                                <label for="tipo" class="control-label">Tipo Examen :</label>
                                <input type="text"  value="" class="form-control" name="tipo">
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-8 form-group">
                                <label for="valor" class="control-label">Valor Examen :</label>
                                <input type="text"  value="" class="form-control" name="valor">
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-8 form-group">
                                <label for="descuento" class="control-label">Descuento Examen :</label>
                                <input type="text"  value="" class="form-control" name="descuento">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 text-right">
                                <button class="btn btn-success">Registrar</button>
                                <a href="" class="btn btn-warning" data-dismiss="modal">Volver</a>
                              </div>
                      </div>


            </form>
            </div>
            <div class="modal-footer">
             </div>
        </div>
    </div>
</div>
