<div class="modal fade" tabindex="-1" role="dialog" id="modal-conductoroperador">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form id="conductor_operador" >
            <div class="modal-body ">
                {{csrf_field()}}

                @isset($cita->conductoroperador->id)
                   <input type="hidden" name="conducto_operador_id" value="{{$cita->conductoroperador->id}}">
               @endisset
               <input type="hidden" name="lista_examen_id" value="{{$listaExamen->id}}">
               <input type="hidden" name="cita_id" value="{{$cita->id}}">

                <div class="row">

                  <div class="col-md-12">
                    <div class="col-md-6">
                      <div class="form-horizontal">
                        <div class="form-group">
                           <label for="inputEmail3" class="col-sm-6 control-label">clase</label>
                           <div class="col-sm-6">
                             <input type="text" class="form-control" name="clase" @isset($cita->conductoroperador->clase) value="{{$cita->conductoroperador->clase}}" @endisset>
                           </div>
                         </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-horizontal">
                        <div class="form-group">
                           <label for="inputEmail3" class="col-sm-4 control-label">categoria</label>
                           <div class="col-sm-8">
                             <input type="text" class="form-control" name="categoria" @isset($cita->conductoroperador->categoria) value="{{$cita->conductoroperador->categoria}}" @endisset>
                           </div>
                         </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <div class="form-horizontal">
                        <div class="form-group">
                           <label for="inputEmail3" class="col-sm-6 control-label">N° Licencia</label>
                           <div class="col-sm-6">
                             <input type="text" class="form-control" name="nro_licencia" @isset($cita->conductoroperador->nro_licencia) value="{{$cita->conductoroperador->nro_licencia}}" @endisset>
                           </div>
                         </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-horizontal">
                        <div class="form-group">
                           <label for="inputEmail3" class="col-sm-4 control-label">Maquina</label>
                           <div class="col-sm-8">
                             <input type="text" class="form-control" name="maquina" @isset($cita->conductoroperador->maquina) value="{{$cita->conductoroperador->maquina}}" @endisset>
                           </div>
                         </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="col-md-8">
                      <div class="form-horizontal">
                        <div class="form-group">
                           <label for="inputEmail3" class="col-sm-6 control-label text-left">Fecha Revalidacion</label>
                           <div class="col-sm-6">
                             <input type="date" class="form-control" name="fecha_revalidacion" @isset($cita->conductoroperador->fecha_revalidacion) value="{{$cita->conductoroperador->fecha_revalidacion}}" @endisset>
                           </div>
                         </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-10 ">
                      <div class="form-horizontal">
                        <div class="form-group">
                           <label for="inputEmail3" class="col-sm-4 control-label text-left">Aptitud </label>
                           <div class="col-sm-4">

                               <div class="checkbox">
                                <label>
                                  <input type="radio" value="apto"  name="aptitud" @isset($cita->conductoroperador->aptitud) @if($cita->conductoroperador->aptitud=='apto') checked @endif @endisset > Apto
                                </label>
                              </div>
                           </div>
                           <div class="col-sm-4">
                               <div class="checkbox">
                                <label>
                                  <input type="radio" value="no apto" name="aptitud" @isset($cita->conductoroperador->aptitud) @if($cita->conductoroperador->aptitud=='no apto') checked @endif @endisset > No Apto
                                </label>
                              </div>
                           </div>
                         </div>
                      </div>
                    </div>
                    <div class="col-md-2">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-12">
                        <label>Observaciones</label>
                    </div>
                    <div class="col-md-12">
                      <div class="col-md-1">

                      </div>
                      <div class="col-md-8">
                          <textarea name="observaciones" rows="8" cols="60" style="resize:none">

                            @isset($cita->conductoroperador->fecha_revalidacion) {{$cita->conductoroperador->observaciones}} @endisset

                          </textarea>
                      </div>
                      <div class="col-md-2">

                      </div>
                    </div>
                    <div class="col-md-12">
                          <div class="col-md-6">

                          </div>
                          <div class="col-md-6 text-right">
                              <button type="button" class="btn btn-info btn-sm" name="button">Emitir Formato</button>
                          </div>
                    </div>
                  </div>
                </div>

            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-right">
                        {{-- <a href="" class="btn btn-sm btn-success" data-dismiss="modal">GUARDAR</a>
                        <a href="" class="btn btn-sm btn-info" data-dismiss="modal">TERMINAR</a>
                        <a href="" class="btn btn-sm btn-warning" data-dismiss="modal">Volver</a> --}}
                        @isset($cita->conductoroperador->id)
                         <button class="btn btn-sm btn-primary conductoroperador" tipo="conductor_operador_modificar" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDITAR</button>
                         @else
                         <button class="btn btn-sm btn-success conductoroperador" tipo="conductor_operador_guardar" type="button">GUARDAR</button>
                         @endisset

                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
