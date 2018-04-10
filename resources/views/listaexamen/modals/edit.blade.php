<div class="modal fade" tabindex="-1" role="dialog" id="modal-listaexamen-edit">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar  Examen</h4>
            </div>
            <div class="modal-body">
                <form  action="{{route('lista_examen.update')}}" method="post" id="editarListaExamen">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="" class="control-label">Descripcion de Examen :</label>
                        <input type="text" class=" form-control" name="editnombre" value="">
                    </div>
                    <div class="row">

                        <div class="col-md-12 form-group">
                            <label for="tipo" class="control-label">Tipo Examen :</label>
                            <input type="text"  value="" class="form-control" name="edittipo">
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-12 form-group">
                            <label for="valor" class="control-label">Valor Examen :</label>
                            <input type="text"  value="" class="form-control" name="editvalor">
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-12 form-group">
                            <label for="descuento" class="control-label">Descuento Examen :</label>
                            <input type="text"  value="" class="form-control" name="editdescuento">
                        </div>
                    </div>
               
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" value="" id="update">Actualizar</button>
                <a href="" class="btn btn-warning " data-dismiss="modal" id="index">Volver</a>
            </div>
             </form>
        </div>
    </div>
</div>
