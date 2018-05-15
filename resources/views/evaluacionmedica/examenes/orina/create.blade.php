<div class="modal fade" tabindex="-1" role="dialog" id="modal-orina">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form id="registrarorina">
            <div class="modal-body ">
                {{csrf_field()}}

                 @isset($cita->orinas->id)
                    <input type="hidden" name="orina_id" value="{{$cita->orinas->id}}">
                @endisset
                <input type="hidden" name="lista_examen_id" value="{{$listaExamen->id}}">
                <input type="hidden" name="cita_id" value="{{$cita->id}}">

                <div class="row form-horizontal">
                    <div class="col-md-12">
                        <label for=""><h5><u> <strong>E. MACROSCOPIO</strong></u></h5></label>
                    </div>

                  <div class="col-md-12">
                    <div class="form-horizontal">
                      <div class="form-group">
                       <label for="inputEmail3" class="col-sm-4 control-label">Color:</label>
                       <div class="col-sm-6">
                         <select class="form-control" name="color">
                           <option value="amarillenta" selected>amarillenta</option>
                         </select>
                       </div>
                     </div>
                     <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">Aspecto:</label>
                      <div class="col-sm-6">
                        <select class="form-control" name="aspecto">
                          <option value="liquida" selected>liquida</option>
                        </select>
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                      <label for=""><h5><u> <strong>E. BIOQUIMICO</strong> </u> </h5></label>
                  </div>
                  <div class="col-md-12">
                    <div class="form-horizontal">
                      <div class="form-group">
                       <label for="inputEmail3" class="col-sm-4 control-label">Densidad:</label>
                       <div class="col-sm-6">

                          <input type="text"  @isset($cita->orinas->densidad) value="{{$cita->orinas->densidad}}"  @endisset   class="form-control" name="densidad" @isset($cita->orinas->densidad) value="{{$cita->orinas->densidad}}"  @endisset>

                       </div>
                       <label for="inputEmail3" class=" control-label text-left text-danger"><strong>1001-1035</strong> </label>
                     </div>
                     <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">PH:</label>
                      <div class="col-sm-6">

                         <input type="text"  @isset($cita->orinas->ph) value="{{$cita->orinas->ph}}"  @endisset   class="form-control" name="ph">

                      </div>
                      <label for="inputEmail3" class=" control-label text-danger"><strong>4.6 - 8.0</strong> </label>
                    </div>

                    <div class="form-group">
                     <label for="inputEmail3" class="col-sm-4 control-label">Glucosa:</label>
                     <div class="col-sm-6">
                       <div class="input-group">
                        <input type="text"  @isset($cita->orinas->glucosa) value="{{$cita->orinas->glucosa}}"  @endisset   class="form-control" name="glucosa">
                          <div class="input-group-addon">mg/dL</div>
                      </div>
                     </div>
                  </div>
                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Bilirrubinas:</label>
                    <div class="col-sm-6">
                      <div class="input-group">
                       <input type="text"  @isset($cita->orinas->bilirrubinas) value="{{$cita->orinas->bilirrubinas}}"  @endisset   class="form-control" name="bilirrubinas">
                       <div class="input-group-addon">mg/dL</div>
                     </div>
                    </div>
                  </div>
                  <div class="form-group">
                   <label for="inputEmail3" class="col-sm-4 control-label">Cuerpos Cetónicos:</label>
                   <div class="col-sm-6">
                     <div class="input-group">
                      <input type="text"  @isset($cita->orinas->cuerpos_cetonicos) value="{{$cita->orinas->cuerpos_cetonicos}}"  @endisset   class="form-control" name="cuerpos_cetonicos">
                          <div class="input-group-addon">mg/dL</div>
                    </div>
                   </div>
                 </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Protéinas:</label>
                  <div class="col-sm-6">
                    <div class="input-group">
                     <input type="text"  @isset($cita->orinas->proteinas) value="{{$cita->orinas->proteinas}}"  @endisset   class="form-control" name="proteinas">
  <div class="input-group-addon">mg/dL</div>
                   </div>
                  </div>
                </div>
                <div class="form-group">
                 <label for="inputEmail3" class="col-sm-4 control-label">Urobanógeno:</label>
                 <div class="col-sm-6">
                   <div class="input-group">
                    <input type="text"  @isset($cita->orinas->urobilinogeno) value="{{$cita->orinas->urobilinogeno}}"  @endisset   class="form-control" name="urobilinogeno">
  <div class="input-group-addon">mg/dL</div>
                  </div>
                 </div>
               </div>
               <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Nitritos:</label>
                <div class="col-sm-6">
                  <div class="input-group">
                   <input type="text"  @isset($cita->orinas->nitritos) value="{{$cita->orinas->nitritos}}"  @endisset   class="form-control" name="nitritos">
  <div class="input-group-addon">mg/dL</div>
                 </div>
                </div>
              </div>
              <div class="form-group">
               <label for="inputEmail3" class="col-sm-4 control-label">Hemoglobina:</label>
               <div class="col-sm-6">
                 <div class="input-group">
                  <input type="text"  @isset($cita->orinas->hemoglobina) value="{{$cita->orinas->hemoglobina}}"  @endisset   class="form-control" name="hemoglobina">
  <div class="input-group-addon">Eri/uL</div>
                </div>
               </div>
       </div>
             <div class="form-group">
              <label for="inputEmail3" class="col-sm-4 control-label">Sangre:</label>
              <div class="col-sm-6">
                <div class="input-group">
                 <input type="text"  @isset($cita->orinas->sangre) value="{{$cita->orinas->sangre}}"  @endisset   class="form-control" name='sangre'>
                    <div class="input-group-addon">mg/dL</div>
               </div>
              </div>
            </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                      <label for=""><h5><u> <strong>E. MICROSCOPICO</strong> </u> </h5></label>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                     <label for="inputEmail3" class="col-sm-4 control-label">Leucocitos:</label>
                     <div class="col-sm-6">
                       <div class="input-group">
                        <input type="text"  @isset($cita->orinas->leucocitos) value="{{$cita->orinas->leucocitos}}"  @endisset   class="form-control" name="leucocitos">
         <div class="input-group-addon">Cel/Cam</div>
                      </div>
                     </div>
                   </div>
                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Hematies:</label>
                    <div class="col-sm-6">
                      <div class="input-group">
                       <input type="text"  @isset($cita->orinas->hematies) value="{{$cita->orinas->hematies}}"  @endisset   class="form-control" name="hematies">
        <div class="input-group-addon">Cel/Cam</div>
                     </div>
                    </div>
                  </div>
                  <div class="form-group">
                   <label for="inputEmail3" class="col-sm-4 control-label">Celulas Eptellales:</label>
                   <div class="col-sm-6">
                     <div class="input-group">
                      <input type="text"  @isset($cita->orinas->celulas_epiteliales) value="{{$cita->orinas->celulas_epiteliales}}"  @endisset   class="form-control" name="celulas_epiteliales">
       <div class="input-group-addon">Cel/Cam</div>
                    </div>
                   </div>
                 </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Cilindros:</label>
                  <div class="col-sm-6">

                     <input type="text"  @isset($cita->orinas->cilindros) value="{{$cita->orinas->cilindros}}"  @endisset   class="form-control" name="cilindros">

                  </div>
                </div>
                <div class="form-group">
                 <label for="inputEmail3" class="col-sm-4 control-label">Cristales:</label>
                 <div class="col-sm-6">

                    <input type="text"  @isset($cita->orinas->cristales) value="{{$cita->orinas->cristales}}"  @endisset   class="form-control" name="cristales">

                 </div>
               </div>
               <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Germenes:</label>
                <div class="col-sm-6">

                   <input type="text"  @isset($cita->orinas->germenes) value="{{$cita->orinas->germenes}}"  @endisset   class="form-control" name="germenes">

                </div>
              </div>
              <div class="form-group">
               <label for="inputEmail3" class="col-sm-4 control-label">Filamentos Mucoides:</label>
               <div class="col-sm-6">

                  <input type="text"  @isset($cita->orinas->filamentos_mucoides) value="{{$cita->orinas->filamentos_mucoides}}"  @endisset   class="form-control" name="filamentos_mucoides">

               </div>
             </div>
             <div class="form-group">
              <label for="inputEmail3" class="col-sm-4 control-label">Otros:</label>
              <div class="col-sm-6">
                <div class="input-group">
                 <input type="text"  @isset($cita->orinas->otros) value="{{$cita->orinas->otros}}"  @endisset   class="form-control" name="otros">
                        <div class="input-group-addon">PATOLOGICO</div>
               </div>
              </div>
            </div>
            <div class="form-group">
             <label for="inputEmail3" class="col-sm-4 control-label">CONCLUSION ORINA:</label>
             <div class="col-sm-6">
                <select class="form-control" name="conclusion_orina">
                  <option value="nr" selected>NR</option>
                </select>
             </div>
          </div>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-right">

                      @isset($cita->orinas->id)
                       <button class="btn btn-sm btn-primary registrarorina" tipo="orina_modificar" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDITAR</button>
                       @else
                       <button class="btn btn-sm btn-success registrarorina" tipo="orina_guardar" type="button">GUARDAR</button>
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
