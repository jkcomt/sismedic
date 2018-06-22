<div class="modal fade" tabindex="-1" role="dialog" id="modal-hemograma">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form action="{{route('hemograma.store')}}" id="registrarHemograma" method="post">
            <div class="modal-body ">
                {{csrf_field()}}

                <div class="row form-horizontal">
                    <div class="col-md-12">
                        <label for=""><h5><u> <strong>HB. / HTO.</strong></u></h5></label>
                    </div>
                    @isset($cita->hemograma->id)
                      <input type="hidden" name="hemograma_id" value="{{$cita->hemograma->id}}">
                    @endisset
                    <input type="hidden" name="lista_examen_id" value="{{$listaExamen->id}}">
                    <input type="hidden" name="cita_id" value="{{$cita->id}}">
                  <div class="col-md-12">
                    <div class="form-horizontal">

                      <div class="form-group">
                       <label for="inputEmail3" class="col-sm-4 control-label">Hemoglobina:</label>
                       <div class="col-sm-4">
                         <div class="input-group">
                          <input type="text" class="form-control" name="hemoglobina"   @isset($cita->hemograma->hemoglobina) value="{{$cita->hemograma->hemoglobina}}"  @endisset>
                          <div class="input-group-addon">g/Ls</div>
                        </div>
                       </div>
                         <label class=" control-label text-danger"><strong>14-18/12-16</strong> </label>

                    </div>

                     <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">Hematocrito:</label>
                      <div class="col-sm-4">
                        <div class="input-group">
                         <input type="text" class="form-control" name="hematocrito" @isset($cita->hemograma->hematocrito) value="{{$cita->hemograma->hematocrito}}"  @endisset>
                         <div class="input-group-addon">%</div>
                       </div>
                      </div>
                      <label for="inputEmail3" class="control-label text-danger "><strong>44-56/38-50</strong> </label>
                    </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                      <label for=""><h5><u> <strong>REC. CELULAR</strong> </u> </h5></label>
                  </div>
                  <div class="col-md-12">
                    <div class="form-horizontal">
                      <div class="form-group">
                       <label for="inputEmail3" class="col-sm-4 control-label">Leucocitos:</label>
                       <div class="col-sm-4">
                         <div class="input-group">
                          <input type="text" class="form-control" name="leucocitos" @isset($cita->hemograma->leucocitos) value="{{$cita->hemograma->leucocitos}}"  @endisset>
                          <div class="input-group-addon">mm3</div>
                        </div>
                       </div>
                       <label for="inputEmail3" class=" control-label text-danger"><strong>3800-10500</strong> </label>
                     </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                      <label for=""><h5><u> <strong>FORM. DIF. %</strong> </u> </h5></label>
                  </div>
                  <div class="col-md-12">
                    <div class="form-horizontal">
                      <div class="form-group">
                       <label for="inputEmail3" class="col-sm-4 control-label">Abastonados:</label>
                       <div class="col-sm-4">
                         <div class="input-group">
                          <input type="text" class="form-control" name="abastonados" @isset($cita->hemograma->abastonados) value="{{$cita->hemograma->abastonados}}"  @endisset>
                          <div class="input-group-addon">%</div>
                        </div>
                       </div>
                       <label for="inputEmail3" class=" control-label text-danger"><strong>0.0-5.0</strong> </label>
                     </div>
                     <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">Segmentados:</label>
                      <div class="col-sm-4">
                        <div class="input-group">
                         <input type="text" class="form-control" name="segmentados" @isset($cita->hemograma->segmentados) value="{{$cita->hemograma->segmentados}}"  @endisset>
                         <div class="input-group-addon">%</div>
                       </div>
                      </div>
                      <label for="inputEmail3" class=" control-label text-danger"><strong>36-70</strong> </label>
                    </div>
                    <div class="form-group">
                     <label for="inputEmail3" class="col-sm-4 control-label">Monocitos:</label>
                     <div class="col-sm-4">
                       <div class="input-group">
                        <input type="text" class="form-control" name="monocitos" @isset($cita->hemograma->monocitos) value="{{$cita->hemograma->monocitos}}"  @endisset>
                        <div class="input-group-addon">%</div>
                      </div>
                     </div>
                     <label for="inputEmail3" class=" control-label text-danger"><strong>0-7</strong> </label>
                   </div>
                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Linfocitos:</label>
                    <div class="col-sm-4">
                      <div class="input-group">
                       <input type="text" class="form-control" name="linfocitos" @isset($cita->hemograma->linfocitos) value="{{$cita->hemograma->linfocitos}}"  @endisset>
                       <div class="input-group-addon">%</div>
                     </div>
                    </div>
                    <label for="inputEmail3" class="control-label text-danger"><strong>23-49</strong> </label>
                  </div>
                  <div class="form-group">
                   <label for="inputEmail3" class="col-sm-4 control-label">Eosinofilos:</label>
                   <div class="col-sm-4">
                     <div class="input-group">
                      <input type="text" class="form-control" name="eosinofilos" @isset($cita->hemograma->eosinofilos) value="{{$cita->hemograma->eosinofilos}}"  @endisset>
                      <div class="input-group-addon">%</div>
                    </div>
                   </div>
                   <label for="inputEmail3" class=" control-label text-danger"><strong>0.0-5.0</strong> </label>
                 </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Basofilos:</label>
                  <div class="col-sm-4">
                    <div class="input-group">
                     <input type="text" class="form-control" name="basofilos" @isset($cita->hemograma->basofilos) value="{{$cita->hemograma->basofilos}}"  @endisset>
                     <div class="input-group-addon">%</div>
                   </div>
                  </div>
                  <label for="inputEmail3" class=" control-label text-danger"><strong>0.1-1.0</strong> </label>
                </div>
                <div class="form-group">
                 <label for="inputEmail3" class="col-sm-4 control-label">V.S.G:</label>
                 <div class="col-sm-4">
                   <div class="input-group">
                    <input type="text" class="form-control" name="vsg" @isset($cita->hemograma->vsg) value="{{$cita->hemograma->vsg}}"  @endisset>
                    <div class="input-group-addon">%</div>
                  </div>
                 </div>
                 <label for="inputEmail3" class=" control-label text-danger"><strong>mm/hora H: 0–10 M: 0–20 </strong> </label>
               </div>
               <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">GPO. SANGUINEO:</label>
                <div class="col-sm-4">
                  <div class="input-group">
                   {{-- <input type="text" class="form-control" name="basofilos" @isset($cita->hemograma->gpo_sanguineo) value="{{$cita->hemograma->gpo_sanguineo}}"  @endisset> --}}
                   <select class="form-control" name="gpo_sanguineo">
                     @isset($cita->hemograma->gpo_sanguineo)
                       <option value="O"  @if($cita->hemograma->gpo_sanguineo == "O") selected @else  @endif >O</option>
                       <option value="A"  @if($cita->hemograma->gpo_sanguineo == "A") selected @else  @endif >A</option>
                       <option value="AB"  @if($cita->hemograma->gpo_sanguineo == "AB") selected @else  @endif >AB</option>
                       <option value="rhn"  @if($cita->hemograma->gpo_sanguineo == "rhn") selected @else  @endif >Rh(-)</option>
                       <option value="rhp"  @if($cita->hemograma->gpo_sanguineo == "rhp") selected @else  @endif >Rh(+)</option>
                   @else
                     <option value="O">O</option>
                     <option value="A">A</option>
                     <option value="AB">AB</option>
                     <option value="rhn">Rh(-)</option>
                     <option value="rhp">Rh(+)</option>
                   @endisset
                   </select>
                   {{-- <div class="input-group-addon"></div> --}}
                 </div>
                </div>
                <label for="inputEmail3" class=" control-label text-danger"><strong></strong> </label>
              </div>
              <div class="form-group">
               <label for="inputEmail3" class="col-sm-4 control-label">FACTOR RH:</label>
               <div class="col-sm-4">
                 <div class="input-group">
                  <input type="text" class="form-control" name="factor_rh" @isset($cita->hemograma->factor_rh) value="{{$cita->hemograma->factor_rh}}"  @endisset>
                  <div class="input-group-addon">%</div>
                </div>
               </div>
               <label for="inputEmail3" class=" control-label text-danger"><strong></strong> </label>
             </div>

                    </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                       <label for="inputEmail3" class="col-sm-4 control-label">CONCLUSION HEMOGRAMA:</label>
                       <div class="col-sm-6">
                          <input type="text" name="conclusion" class="form-control" @isset($cita->hemograma->conclusion_hemograma) value="{{$cita->hemograma->conclusion_hemograma}}" @endisset>
                       </div>
                    </div>

                  </div>

                </div>


            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-right">
                      @isset($cita->hemograma->id)
                        <button class="btn btn-sm btn-primary registrarHemograma" tipo="hemograma_modificar" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDITAR</button>
                       @else
                             <button class="btn btn-sm btn-success registrarHemograma" tipo="hemograma_guardar" type="button">GUARDAR</button>
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
