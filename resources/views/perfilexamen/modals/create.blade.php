<div class="modal fade" tabindex="-1" role="dialog" id="modal-perfilexamen-create">
    <div class="modal-dialog " role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Añadir nuevo examen al perfil</h4>
            </div>
            <div class="modal-body ">
                  <form action="{{route('perfil_examen.store')}}" id="registrarPerfilExamen" method="post">
                {{csrf_field()}}


                        <div class="row">

                            <div class="col-md-12 form-group">
                                <label for="nombre" class="control-label">PERFIL :</label>
                                <br>
                              <input type="text" name="" value="{{$perfil->descripcion}}" class="form-control" readonly>
                              <input type="hidden" name="perfil_id" value="{{$perfil->id}}">
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-12 form-group">
                                <label for="nombre" class="control-label">EXAMEN :</label>
                                <br>
                             <select name="listaexamen" class="form-control">
                              @foreach($listaexamenes as $listaexamen)
                         
                             
                               <option value="{{$listaexamen->id}}">{{$listaexamen->descripcion}}</option>
                           
                               
                              @endforeach
                            </select> 
                            </div>
                        </div>

                      


           
            </div>
            <div class="modal-footer">
                  <div class="row">
                            <div class="col-md-12 text-right">
                                <button class="btn btn-success">Asociar Examen</button>
                                <a href="" class="btn btn-warning" data-dismiss="modal">Volver</a>
                            </div>
                       </div>
             </div>
              </form>
        </div>
    </div>
</div>
