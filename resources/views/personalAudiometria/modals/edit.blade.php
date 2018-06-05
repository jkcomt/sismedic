<div class="modal fade" tabindex="-1" role="dialog" id="modal_personal_Audiometria_edit">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar Personal de Audiometria</h4>
            </div>
            <div class="modal-body">
                <form  action="{{route('personal_audiometria.update')}}" method="post" id="update_personal_Audiometria">
                    {{csrf_field()}}
                    <div class="row">
                      <div class="col-md-12 form-group">
                          <label for="nombre" class="control-label">Personal :</label>
                          <input type="text"  value="" class="form-control" name="editpersonal">
                      </div>

                      <div class="col-md-12 form-group">
                          <label for="nombre" class="control-label">DNI :</label>
                          <input type="text"  value="" class="form-control" name="editdni">
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
