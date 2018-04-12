<div class="modal fade" tabindex="-1" role="dialog" id="modal-gruposanguineo-edit">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar Grupo Sanguineo</h4>
            </div>
            <div class="modal-body">
                <form  action="{{route('gruposanguineo.update')}}" method="post" id="editarGrupoSanguineo">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="" class="control-label">Grupo Sanguineo: </label>
                        <input type="text" class=" form-control" name="editnombre" value="">
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