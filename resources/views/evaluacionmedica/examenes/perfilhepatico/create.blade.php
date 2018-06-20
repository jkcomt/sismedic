<div class="modal fade" tabindex="-1" role="dialog" id="modal-perfilhepatico">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form id="formperfilhepatico">
            <div class="modal-body ">
                {{csrf_field()}}
                @isset($cita->perfilhepatico->id)
                 <input type="hidden" name="perfilhepatico_id" value="{{$cita->perfilhepatico->id}}">
               @endisset
                 <input type="hidden" name="lista_examen_id" value="{{$listaExamen->id}}">
                 <input type="hidden" name="cita_id" value="{{$cita->id}}">
                <div class="row form-group">
                  <div class="col-md-12">
                    <div class="input-group ">
                      <span class="input-group-addon span-width" style="border:none;">Bilirrubina Total</span>
                      <input type="text" name="bilirrubina_total" @isset($cita->perfilhepatico->bilirrubina_total)    value="{{$cita->perfilhepatico->bilirrubina_total}}"    @endisset  class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row form-group" style="margin-top:-1%;">
                  <div class="col-md-12">
                    <div class="input-group ">
                      <span class="input-group-addon span-width" style="border:none;">Bilirrubina DTA &nbsp;</span>
                      <input type="text" name="bilirrubina_dta" @isset($cita->perfilhepatico->bilirrubina_dta)    value="{{$cita->perfilhepatico->bilirrubina_dta}}"    @endisset class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row form-group" style="margin-top:-1%;">
                  <div class="col-md-12">
                    <div class="input-group ">
                      <span class="input-group-addon span-width" style="border:none;">Bilirrubina IDTA </span>
                      <input type="text" name="bilirrubina_idta" @isset($cita->perfilhepatico->bilirrubina_idta)    value="{{$cita->perfilhepatico->bilirrubina_idta}}"    @endisset class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row form-group" style="margin-top:-1%;">
                  <div class="col-md-12">
                    <div class="input-group ">
                      <span class="input-group-addon span-width" style="border:none;">Fosfatosa ALC. &nbsp;</span>
                      <input type="text" name="fosfatosa_alc" @isset($cita->perfilhepatico->fosfatosa_alc)    value="{{$cita->perfilhepatico->fosfatosa_alc}}"    @endisset  class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row form-group" style="margin-top:-1%;">
                  <div class="col-md-12">
                    <div class="input-group ">
                      <span class="input-group-addon span-width" style="border:none;">TGO. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp;</span>
                      <input type="text" name="tgo" @isset($cita->perfilhepatico->tgo)    value="{{$cita->perfilhepatico->tgo}}"    @endisset   class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row form-group" style="margin-top:-1%;">
                  <div class="col-md-12">
                    <div class="input-group ">
                      <span class="input-group-addon span-width" style="border:none;">TGP. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp;</span>
                      <input type="text" name="tgp" @isset($cita->perfilhepatico->tgp)    value="{{$cita->perfilhepatico->tgp}}"    @endisset  class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row form-group" style="margin-top:-1%;">
                  <div class="col-md-12">
                    <div class="input-group ">
                      <span class="input-group-addon span-width" style="border:none;">Proteinas Totales.</span>
                      <input type="text" name="proteinas_totales" @isset($cita->perfilhepatico->proteinas_totales)    value="{{$cita->perfilhepatico->proteinas_totales}}"    @endisset  class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row form-group" style="margin-top:-1%;">
                  <div class="col-md-12">
                    <div class="input-group ">
                      <span class="input-group-addon span-width" style="border:none;">Albumina. &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;</span>
                      <input type="text" name="albumina" @isset($cita->perfilhepatico->albumina)    value="{{$cita->perfilhepatico->albumina}}"    @endisset  class="form-control">
                    </div>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-right">
                        @isset($cita->perfilhepatico->id)
                          <button class="btn btn-sm btn-primary perfilhepatico" tipo="perfilhepatico_modificar" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDITAR</button>
                         @else
                          <button class="btn btn-sm btn-success perfilhepatico" tipo="perfilhepatico_guardar" type="button">GUARDAR</button>
                        @endisset
                        <a href="" class="btn btn-sm btn-info" data-dismiss="modal">TERMINAR</a>

                        <a href="" class="btn btn-sm btn-warning" data-dismiss="modal">Volver</a>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
