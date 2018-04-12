<div class="modal fade" tabindex="-1" role="dialog" id="modal-profesion-create">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Registrar Profesión</h4>
            </div>
            <div class="modal-body">
                   <form action="{{route('profesion.store')}}" id="profesion-frm-create" method="post">
                    {{csrf_field()}}
                       <div class="row">
                          
                            <div class="col-md-12 form-group">
                                <label for="nombre" class="control-label">Profesión :</label>
                                <input type="text"  value="" class="form-control" name="nombre">
                            </div>
                        </div>

                  
             
            </div>
            <div class="modal-footer">
                      <div class="row">
                            <div class="col-md-12 text-right">
                                <button class="btn btn-success">Registrar</button>
                                <a href="{{route('profesion.index')}}" class="btn btn-warning">Volver</a>                    
                    </div>
                </div>
            </div>
               </form>
        </div>
    </div>
</div>