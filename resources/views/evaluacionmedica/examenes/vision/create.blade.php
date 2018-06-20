<div class="modal fade" tabindex="-1" role="dialog" id="modal-vision">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')


            <div class="modal-body ">


                <ul class="nav nav-pills">
                  <li class="active"><a data-toggle="tab" href="#home">Inicio</a></li>
                  <li><a data-toggle="tab" href="#menu1">Diagnostico</a></li>
                </ul>

                <div class="tab-content">
                  <div id="home" class="tab-pane fade in active">
                    <form  id="registrarvision">
                        {{csrf_field()}}
                    @isset($cita->vision->id)
                        <input type="hidden" name="vision_id" value="{{$cita->vision->id}}">
                    @endisset
                    <input type="hidden" name="lista_examen_id" value="{{$listaExamen->id}}">
                    <input type="hidden" name="cita_id" value="{{$cita->id}}">
                   <div class="row form-horizontal">

                     <div class="col-md-12">

                       <table class="table">
                         <thead>
                           <tr>
                             <td colspan="3">
                             <strong>AGUDEZA VISUAL - REFACCION</strong>
                             </td>
                           </tr>
                           <tr>
                             <th colspan="1"> </th>
                             <th colspan="1" class="text-center">S/L</th>
                             <th colspan="1" class="text-center">C/L</th>
                           </tr>
                         </thead>
                         <tbody>
                             <tr>
                               <td>AV Lejos OD </td>
                               <td><input type="text" name="av_lejos_od_sl"  @isset($cita->vision->av_lejos_od_sl)  value="{{$cita->vision->av_lejos_od_sl}}"  @endisset class="form-control"> </td>
                               <td><input type="text" name="av_lejos_od_cl"  @isset($cita->vision->av_lejos_od_cl)  value="{{$cita->vision->av_lejos_od_cl}}"  @endisset   class="form-control"> </td>
                             </tr>
                             <tr>
                               <td>AV Lejos OI </td>
                               <td><input type="text" name="av_lejos_oi_sl" @isset($cita->vision->av_lejos_oi_sl)  value="{{$cita->vision->av_lejos_oi_sl}}"  @endisset   class="form-control"> </td>
                               <td><input type="text" name="av_lejos_oi_cl" @isset($cita->vision->av_lejos_oi_cl)  value="{{$cita->vision->av_lejos_oi_cl}}"  @endisset   class="form-control"> </td>
                             </tr>
                             <tr>
                               <td>AV Cerca OD </td>
                               <td><input type="text" name="av_cerca_od_sl" @isset($cita->vision->av_cerca_od_sl)  value="{{$cita->vision->av_cerca_od_sl}}"  @endisset    class="form-control"> </td>
                               <td><input type="text" name="av_cerca_od_cl" @isset($cita->vision->av_cerca_od_cl)  value="{{$cita->vision->av_cerca_od_cl}}"  @endisset    class="form-control"> </td>
                             </tr>
                             <tr>
                               <td>AV Cerca OI </td>
                               <td><input type="text" name="av_cerca_oi_sl"  @isset($cita->vision->av_cerca_oi_sl)  value="{{$cita->vision->av_cerca_oi_sl}}"  @endisset  class="form-control"> </td>
                               <td><input type="text" name="av_cerca_oi_cl"   @isset($cita->vision->av_cerca_oi_cl)  value="{{$cita->vision->av_cerca_oi_cl}}"  @endisset class="form-control"> </td>
                             </tr>

                             <tr>
                               <td>AV Binocular </td>
                               <td><input type="text" name="av_binocular" @isset($cita->vision->av_binocular)  value="{{$cita->vision->av_binocular}}"  @endisset  class="form-control"> </td>
                               <td><input type="hidden"    class="form-control"> </td>
                             </tr>

                             <tr>
                               <td><strong>Test Ishihara (colores) </strong> </td>
                               <td colspan="2">
                                 <select class="form-control" name="test_ishihara_colores">
                                     <option selected value="normal">Normal</option>
                                     <option value="alterado">Alterado</option>
                                 </select>
                               </td>
                             </tr>

                             <tr>
                               <td><strong>Discriminacion de Colores </strong> </td>
                               <td colspan="2">
                                 <select class="form-control" name="discriminacion_colores">
                                   <option selected value="normal">Normal</option>
                                   <option value="alterado">Alterado</option>
                                 </select>
                               </td>
                             </tr>
                             <tr>
                               <td><strong>Vision de Profundidad </strong> </td>
                               <td colspan="2">
                                 <select class="form-control" name="vision_profundidad">
                                   <option selected value="normal">Normal</option>
                                   <option value="alterado">Alterado</option>
                                 </select>
                               </td>
                             </tr>
                             <tr>
                               <td><strong>Vision Perimetral </strong> </td>
                               <td colspan="2">
                                 <select class="form-control" name="vision_perimetral">
                                   <option selected value="normal">Normal</option>
                                   <option value="alterado">Alterado</option>
                                 </select>
                               </td>
                             </tr>
                             <tr>
                               <td><strong>Foria Vertical </strong> </td>
                               <td colspan="2">
                                 <select class="form-control" name="foria_vertical">
                                   <option selected value="normal">Normal</option>
                                   <option value="alterado">Alterado</option>
                                 </select>
                               </td>
                             </tr>
                             <tr>
                               <td><strong>Foria Horizontal </strong> </td>
                               <td colspan="2">
                                 <select class="form-control" name="foria_horizontal">
                                   <option selected value="normal">Normal</option>
                                   <option value="alterado">Alterado</option>
                                 </select>
                               </td>
                             </tr>
                             <tr>
                               <td><strong>Vision Nocturna </strong> </td>
                               <td colspan="2">
                                 <select class="form-control" name="vision_nocturna">
                                   <option selected value="normal">Normal</option>
                                   <option value="alterado">Alterado</option>
                                 </select>
                               </td>
                             </tr>
                             <tr>
                               <td><strong>Vision Encandilada </strong> </td>
                               <td colspan="2">
                                 <select class="form-control" name="vision_encandilada">
                                   <option selected value="normal">Normal</option>
                                   <option value="alterado">Alterado</option>
                                 </select>
                               </td>
                             </tr>
                             <tr>
                               <td><strong>Recuperacion de Encadenamiento</strong> </td>
                               <td colspan="2">
                                 <select class="form-control" name="recuperacion_encandilamiento">
                                   <option selected value="normal">Normal</option>
                                   <option value="alterado">Alterado</option>
                                 </select>
                               </td>
                             </tr>
                         </tbody>
                       </table>
                     </div>

                   </div>
                       <div class="row">
                           <div class="col-md-12 text-right">

                     @isset($cita->vision->id)
                      <button class="btn btn-sm btn-primary registrarvision" tipo="vision_modificar" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDITAR</button>
                      @else
                      <button class="btn btn-sm btn-success registrarvision" tipo="vision_guardar" type="button">GUARDAR</button>
                      @endisset
                           </div>
                       </div>
                 </form>
                  </div>
                  <div id="menu1" class="tab-pane fade">
                    <form  id="formdiagnosticovista">
                        {{csrf_field()}}
                    @isset($cita->diagnosticovista->id)
                        <input type="hidden" name="diagnosticovista_id" value="{{$cita->diagnosticovista->id}}">
                    @endisset
                    <input type="hidden" name="lista_examen_id" value="{{$listaExamen->id}}">
                    <input type="hidden" name="cita_id" value="{{$cita->id}}">

                    <div class="row">
                        <div class="col-md-6 text-center">
                            <h5> <strong> CONSULTAS OCUPACIONALES - REGISTRO DE EXAMEN</strong> </h5>

                            <div class="col-md-12 text-left">
                              <h6>Examenes Auxiliares</h6>
                              <textarea name="examenes_auxiliares" rows="3" cols="750" class="form-control" style="resize:none;">@isset($cita->diagnosticovista->examenes_auxiliares){{$cita->diagnosticovista->examenes_auxiliares}}  @endisset</textarea>
                              </div>
                            <div class="col-md-12 text-left">
                              <h6>Observaciones</h6>
                              <textarea name="observaciones" rows="3" cols="750" class="form-control" style="resize:none;">@isset($cita->diagnosticovista->observaciones){{$cita->diagnosticovista->observaciones}}  @endisset</textarea>
                            </div>
                            <div class="col-md-12 text-left">
                              <h6 style="color:red">DIAGNOSTICOS CIE10 Y MEDICO</h6>
                              <textarea name="diagnosticos_cie10_medico" rows="3" cols="750" class="form-control" style="resize:none;">@isset($cita->diagnosticovista->diagnosticos_cie10_medico){{$cita->diagnosticovista->diagnosticos_cie10_medico}}  @endisset</textarea>
                              </div>
                            <div class="col-md-12 text-left">
                              <h6>Conclusiones</h6>
                              <textarea name="concluciones" rows="3" cols="750" class="form-control" style="resize:none;">@isset($cita->diagnosticovista->concluciones){{$cita->diagnosticovista->concluciones}}  @endisset</textarea>
                            </div>
                            <div class="col-md-12 text-left">
                              <h6>Recomendaciones</h6>
                              <textarea name="recomendaciones" rows="3" cols="750" class="form-control" style="resize:none;">@isset($cita->diagnosticovista->recomendaciones){{$cita->diagnosticovista->recomendaciones}}  @endisset</textarea>
                                </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <h5 class="text-center"> <strong> DIAGNOSTICOS EMA</strong> </h5>
                                        <div class="checkbox">
                                           <label>
                                             <input type="checkbox" name="vision_emetrope" value="1" @isset($cita->diagnosticovista->vision_emetrope) @if($cita->diagnosticovista->vision_emetrope) checked @else @endif @endisset>Z01.0 -VISION EMETROPE
                                           </label>
                                         </div>
                                         <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="ametropia_corregida" value="1" @isset($cita->diagnosticovista->ametropia_corregida) @if($cita->diagnosticovista->ametropia_corregida) checked @else @endif @endisset>Z97.3 -AMETROPIA(CORREGIDA O CORRECCION SUFICIENTE)
                                          </label>
                                        </div>
                                        <div class="checkbox">
                                         <label>
                                           <input type="checkbox" name="ametropia_no_corregida" value="1" @isset($cita->diagnosticovista->ametropia_no_corregida) @if($cita->diagnosticovista->ametropia_no_corregida) checked @else @endif @endisset>H54.3 -AMETROPIA (NO CORREGIDA O CORRECCION INSUFICIENTE)
                                         </label>
                                       </div>
                                       <div class="checkbox">
                                        <label>
                                          <input type="checkbox" name="ambliopia_suficiente" value="1" @isset($cita->diagnosticovista->ambliopia_suficiente) @if($cita->diagnosticovista->ambliopia_suficiente) checked @else @endif @endisset>Z97.3 -AMBLIOPIA (CORRECCION SUFICIENTE)
                                        </label>
                                      </div>
                                      <div class="checkbox">
                                       <label>
                                         <input type="checkbox" name="ambliopia_insuficiente" value="1" @isset($cita->diagnosticovista->ambliopia_insuficiente) @if($cita->diagnosticovista->ambliopia_insuficiente) checked @else @endif @endisset>H53.0 -AMBLIOPIA (CORRECCION INSUFICIENTE)
                                       </label>
                                     </div>
                                     <div class="checkbox">
                                      <label>
                                        <input type="checkbox" name="discromatopsia" value="1" @isset($cita->diagnosticovista->discromatopsia) @if($cita->diagnosticovista->discromatopsia) checked @else @endif @endisset>H53.5 -DISCROMATOPSIA
                                      </label>
                                    </div>
                                    <div class="checkbox">
                                     <label>
                                       <input type="checkbox" name="vision_estereooptica" value="1" @isset($cita->diagnosticovista->vision_estereooptica) @if($cita->diagnosticovista->vision_estereooptica) checked @else @endif @endisset>H53.3 -VISIÓN  ESTEREOÓPATICA ALTERADA
                                     </label>
                                   </div>
                                   <div class="checkbox">
                                    <label>
                                      <input type="checkbox" name="vision_nocturna" value="1" @isset($cita->diagnosticovista->vision_nocturna) @if($cita->diagnosticovista->vision_nocturna) checked @else @endif @endisset>H53.6 -VISIÓN NOCTURNA ALTERADA
                                    </label>
                                  </div>
                                  <div class="checkbox">
                                   <label>
                                     <input type="checkbox" name="foria_alterada" value="1" @isset($cita->diagnosticovista->foria_alterada) @if($cita->diagnosticovista->foria_alterada) checked @else @endif @endisset>H53.8 -FORIA ALTERADA
                                   </label>
                                 </div>
                                 <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="campo_visual_alterado" value="1" @isset($cita->diagnosticovista->campo_visual_alterado) @if($cita->diagnosticovista->campo_visual_alterado) checked @else @endif @endisset>H53.4 -CAMPO VISUAL ALTERADO
                                  </label>
                                </div>
                                  <div class="checkbox">
                                   <label>
                                     <input type="checkbox" name="pendiente_examen_oftalmologico" value="1" @isset($cita->diagnosticovista->pendiente_examen_oftalmologico) @if($cita->diagnosticovista->pendiente_examen_oftalmologico) checked @else @endif @endisset>Z53.8 -PENDIENTE EXAMEN OFTALMOLOGICO
                                   </label>
                                 </div>
                                 <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="repetir_examen_oftalmologico" value="1" @isset($cita->diagnosticovista->repetir_examen_oftalmologico) @if($cita->diagnosticovista->repetir_examen_oftalmologico) checked @else @endif @endisset>Z13.9 REPETIR EXAMEN OFTALMOLOGICO
                                  </label>
                                </div>



                            <div class="col-md-12">
                              <h6>Clasificacion</h6>
                              <div class="col-md-6">
                                <label class="btn btn-default">
                                   <input type="radio" name="quality[25]" value="1" /> Presuntivo
                               </label>
                              </div>
                              <div class="col-md-6">
                                <label class="btn btn-default">
                                   <input type="radio"  name="quality[25]" value="1" /> Definitivo
                               </label>
                              </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12 text-right">

                  @isset($cita->diagnosticovista->id)
                   <button class="btn btn-sm btn-primary diagnosticovista" tipo="diagnosticovista_modificar" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDITAR</button>
                   @else
                   <button class="btn btn-sm btn-success diagnosticovista" tipo="diagnosticovista_guardar" type="button">GUARDAR</button>
                   @endisset
                        </div>
                    </div>
              </form>
                  </div>

                </div>



            </div>
            <div class="modal-footer">

            </div>

        </div>
    </div>
</div>
