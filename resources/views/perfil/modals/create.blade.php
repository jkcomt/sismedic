<div class="modal fade" tabindex="-1" role="dialog" id="modal-perfil-create">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Nuevo Perfil</h4>
            </div>
            <div class="modal-body ">
                  <form action="{{route('perfil.store')}}" id="registrarPerfil" method="post">
                {{csrf_field()}}
                        <div class="row">

                            <div class="col-md-12 form-group">
                                <label for="nombre" class="control-label">Nuevo Perfil :</label>
                                <input type="text"  value="" class="form-control" name="nombre">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="nombre" class="control-label">Perfil:</label> <br>
                              <select class="form-control" name="perfil_copiar_examenes" id="perfil_copiar_examenes" style="width: 100%;">
                                <option value="999999"> </option>
                                @foreach($perfiles as $perfil)
                                    @if($perfil->descripcion != "sistema")
                                      <option value="{{$perfil->id}}">{{$perfil->descripcion}}</option>
                                    @endif
                                @endforeach
                              </select>
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
               {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
               <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
               <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.js"></script>
               <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script> --}}
               <script type="text/javascript">
               $(document).ready(function() {
                     // $('#perfil_copiar_examenes').select2(
                     //     {
                     //       placeholder: 'Select an option'
                     //     }
                     // );
                  });
               </script>
        </div>
    </div>
</div>
