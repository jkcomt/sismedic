<div class="modal fade" tabindex="-1" role="dialog" id="modal-profesion-edit">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar profesión</h4>
            </div>
            <div class="modal-body">
                <form action="{{route('profesion.update')}}" method="post" id="editarprofesion">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="" class="control-label">profesión:</label>
                        <input type="text" class=" form-control" name="editnombre" value="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" value="" id="update">Actualizar</button>
                <a href="" class="btn btn-warning " data-dismiss="modal" id="index">Volver</a>
            </div>
        </div>
    </div>
</div>