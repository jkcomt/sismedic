<div class="modal fade" tabindex="-1" role="dialog" id="modal-tipoinstruccion-create">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Nuevo Tipo de Instrucción</h4>
            </div>
            <div class="modal-body ">
                  <form action="{{route('tipoinstruccion.store')}}" id="registrarTipoInstruccion" method="post">
                {{csrf_field()}}

    
                        <div class="row">
                          
                            <div class="col-md-12 form-group">
                                <label for="nombre" class="control-label">Tipo Instrucción :</label>
                                <input type="text"  value="" class="form-control" name="nombre">
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