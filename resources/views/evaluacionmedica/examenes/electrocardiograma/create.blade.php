<div class="modal fade" tabindex="-1" role="dialog" id="modal-electrocardiograma">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')

                <div class="modal-body">



                  <ul class="nav nav-pills">
  <li class="active"><a data-toggle="tab" href="#home">Inicio</a></li>
  <li><a data-toggle="tab" href="#menu1">Diagnostico</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
      <form  id="registrarElectrocardiograma"  class="form-horizontal">
    {{csrf_field()}}
    @isset($cita->electrocardiograma->id)
      <input type="hidden" name="electrocardiograma_id" value="{{$cita->electrocardiograma->id}}">
     @endisset
    <div class="row">
      <div class="col-md-12">
        <div class="form-group form-group-sm">
                <label for="cboritmo" class="col-md-3 control-label">RITMO</label>
                <div class="col-md-6">
                  <select  name="cboritmo" class="form-control">
                      @isset($cita->electrocardiograma->ritmo)
                        <option value="sinusal"  @if($cita->electrocardiograma->ritmo == "sinusal") selected @else  @endif >SINUSAL</option>
                        <option value="sinusaldos"  @if($cita->electrocardiograma->ritmo == "sinusaldos") selected @else  @endif >SINUSALDOS</option>
                         @else
                           <option value="sinusal" selected>SINUSAL</option>
                           <option value="sinusaldos">SINUSALDOS</option>
                         @endisset
                  </select>
                </div>
        </div>

        <div class="form-group form-group-sm">
          <label for="" class="col-md-3 control-label">FRECUENCIA CARDIACA</label>
          <div class="col-md-6">
            <input type="text" class="form-control" name="frecuencia_cardiaca"   @isset($cita->electrocardiograma->frecuencia_cardiaca) value="{{$cita->electrocardiograma->frecuencia_cardiaca}}" @endisset>
          </div>
        </div>


        <div class="form-group form-group-sm">
          <label for="" class="col-md-3 control-label">EJE QRS:</label>
          <div class="col-md-3">
            <div class="input-group">
             <input type="text" class="form-control" name="eje_qrs"  @isset($cita->electrocardiograma->eje_qrs) value="{{$cita->electrocardiograma->eje_qrs}}" @endisset>
             <div class="input-group-addon">°</div>
           </div>
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control"  name="eje_qrs_dos"  @isset($cita->electrocardiograma->eje_qrs_dos) value="{{$cita->electrocardiograma->eje_qrs_dos}}" @endisset>
          </div>
        </div>

        <div class="form-group form-group-sm">
          <label for="" class="col-md-3 control-label">ONDA P</label>
          <div class="col-md-6">
            <div class="input-group">
             <input type="text" class="form-control" name="onda_p" @isset($cita->electrocardiograma->onda_p) value="{{$cita->electrocardiograma->onda_p}}" @endisset>
             <div class="input-group-addon">seg</div>
           </div>
          </div>
        </div>

        <div class="form-group form-group-sm">
          <label for="" class="col-md-3 control-label">INTERVALO PR</label>
          <div class="col-md-6">
            <div class="input-group">
             <input type="text" class="form-control" name="intervalo" @isset($cita->electrocardiograma->intervalo) value="{{$cita->electrocardiograma->intervalo}}" @endisset>
             <div class="input-group-addon">seg</div>
           </div>
          </div>
        </div>

        <div class="form-group form-group-sm">
          <label for="" class="col-md-3 control-label">SEGMENTO QRS</label>
          <div class="col-md-6">
            <div class="input-group">
             <input type="text" class="form-control" name="segmento_qrs" @isset($cita->electrocardiograma->segmento_qrs) value="{{$cita->electrocardiograma->segmento_qrs}}" @endisset>
             <div class="input-group-addon">seg</div>
           </div>
          </div>
        </div>

        <div class="form-group form-group-sm">
          <label for="" class="col-md-3 control-label">QT CORREGIDO</label>
          <div class="col-md-6">
            <div class="input-group">
             <input type="text" class="form-control" name="qt_corregido"  @isset($cita->electrocardiograma->qt_corregido) value="{{$cita->electrocardiograma->qt_corregido}}" @endisset>
             <div class="input-group-addon">seg</div>
           </div>
          </div>
        </div>


        <div class="form-group form-group-sm">
          <label for="" class="col-md-3 control-label">ISQUEMA</label>
          <div class="col-md-3">
            <select   class="form-control" name="isquemia">
              @isset($cita->electrocardiograma->isquemia)
                <option value="si"  @if($cita->electrocardiograma->isquemia == "si") selected @else  @endif >SI</option>
                <option value="no"  @if($cita->electrocardiograma->isquemia == "no") selected @else  @endif >NO</option>
                 @else
                   <option value="si"selected>SI</option>
                   <option value="no">NO</option>
                 @endisset

            </select>
          </div>
        </div>

        <div class="form-group form-group-sm">
          <label for="" class="col-md-3 control-label">HIPERTROFIAS</label>
          <div class="col-md-3">
            <select  class="form-control" name="hipertrofias">
              @isset($cita->electrocardiograma->hipertrofias)
                <option value="si"  @if($cita->electrocardiograma->hipertrofias == "si") selected @else  @endif >SI</option>
                <option value="no"  @if($cita->electrocardiograma->hipertrofias == "no") selected @else  @endif >NO</option>
                 @else
                   <option value="si"selected>SI</option>
                   <option value="no">NO</option>
                 @endisset
            </select>
          </div>
        </div>

        <div class="form-group form-group-sm">
          <label for="" class="col-md-3 control-label">Otros Hallazgos</label>
          <div class="col-md-5">
            <input type="text" class="form-control" name="otros_hallazgos"  @isset($cita->electrocardiograma->otros_hallazgos) value="{{$cita->electrocardiograma->otros_hallazgos}}" @endisset>
              <input type="hidden" name="lista_examen_id" value="{{$listaExamen->id}}">
              <input type="hidden" name="cita_id" value="{{$cita->id}}">
          </div>
        </div>

      </div>

    </div>
    <div class="row">
        <div class="col-md-12 text-right">
          @isset($cita->electrocardiograma->id)
            <button class="btn btn-sm btn-primary  registrarElectrocardiograma" tipo="Electrocardiograma_modificar" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDITAR</button>
           @else
            <button class="btn btn-sm btn-success registrarElectrocardiograma" tipo="Electrocardiograma_guardar" type="button">GUARDAR</button>
          @endisset

        </div>
    </div>
        </form>
  </div>
  <div id="menu1" class="tab-pane fade">
    <form id="formdiagnosticoelectrocardiograma">
      @csrf
      @isset($cita->diagnosticoelectrocardiograma->id)
       <input type="hidden" name="diagnosticoelectrocardiograma_id" value="{{$cita->diagnosticoelectrocardiograma->id}}">
      @endisset
     <input type="hidden" name="lista_examen_id" value="{{$listaExamen->id}}">
     <input type="hidden" name="cita_id" value="{{$cita->id}}">
    <div class="row">
        <div class="col-md-6 text-center">
            <h5> <strong> CONSULTAS OCUPACIONALES - REGISTRO DE EXAMEN</strong> </h5>

            <div class="col-md-12 text-left">
              <h6>Examenes Auxiliares</h6>
              <textarea name="examenes_auxiliares" rows="3" cols="750" class="form-control" style="resize:none;">@isset($cita->diagnosticoelectrocardiograma->examenes_auxiliares){{$cita->diagnosticoelectrocardiograma->examenes_auxiliares}}  @endisset</textarea>
              </div>
            <div class="col-md-12 text-left">
              <h6>Observaciones</h6>
              <textarea name="observaciones" rows="3" cols="750" class="form-control" style="resize:none;">@isset($cita->diagnosticoelectrocardiograma->observaciones){{$cita->diagnosticoelectrocardiograma->observaciones}}  @endisset</textarea>
              </div>
            <div class="col-md-12 text-left">
              <h6 style="color:red">DIAGNOSTICOS CIE10 Y MEDICO</h6>
              <textarea name="diagnosticos_cie10_medico" rows="3" cols="750" class="form-control" style="resize:none;">@isset($cita->diagnosticoelectrocardiograma->diagnosticos_cie10_medico){{$cita->diagnosticoelectrocardiograma->diagnosticos_cie10_medico}}  @endisset</textarea>
              </div>
            <div class="col-md-12 text-left">
              <h6>Conclusiones</h6>
              <textarea name="concluciones" rows="3" cols="750" class="form-control" style="resize:none;">@isset($cita->diagnosticoelectrocardiograma->concluciones){{$cita->diagnosticoelectrocardiograma->concluciones}}  @endisset</textarea>
            </div>
            <div class="col-md-12 text-left">
              <h6>Recomendaciones</h6>
              <textarea name="recomendaciones" rows="3" cols="750" class="form-control" style="resize:none;">@isset($cita->diagnosticoelectrocardiograma->recomendaciones){{$cita->diagnosticoelectrocardiograma->recomendaciones}}  @endisset</textarea>
              </div>
        </div>
        <div class="col-md-6 text-left">
            <h5 class="text-center"> <strong> DIAGNOSTICOS EMA</strong> </h5>
            <div class="checkbox">
               <label>
                 <input  type="checkbox" @isset($cita->diagnosticoelectrocardiograma->electrocardiograma_normal) @if($cita->diagnosticoelectrocardiograma->electrocardiograma_normal) checked @else @endif @endisset name="electrocardiograma_normal" >Z13.6 -ELECTROCARDIOGRAMA NORMAL
               </label>
             </div>

                         <div class="checkbox">
                          <label>
                            <input  type="checkbox" @isset($cita->diagnosticoelectrocardiograma->electrocardiograma_sin_patologico) @if($cita->diagnosticoelectrocardiograma->electrocardiograma_sin_patologico) checked @else @endif @endisset name="electrocardiograma_sin_patologico" >R94.3 -ELECTROCARDIOGRAMA CON HALLAZGOS SIN SIGNIFICADO PATOLOGICO
                          </label>
                        </div>
                        <div class="checkbox">
                         <label>
                           <input  type="checkbox" @isset($cita->diagnosticoelectrocardiograma->electrocardiograma_probable_patologico) @if($cita->diagnosticoelectrocardiograma->electrocardiograma_probable_patologico) checked @else @endif @endisset name="electrocardiograma_probable_patologico" >R94.3 -ELECTROCARDIOGRAMA CON HALLAZGOS Y PROBABLE PATOLOGICA
                         </label>
                       </div>
                       <div class="checkbox">
                        <label>
                          <input  type="checkbox" @isset($cita->diagnosticoelectrocardiograma->bradicardia) @if($cita->diagnosticoelectrocardiograma->bradicardia) checked @else @endif @endisset name="bradicardia" >R00.1 -BRADICARDIA
                        </label>
                      </div>
                      <div class="checkbox">
                       <label>
                         <input  type="checkbox" @isset($cita->diagnosticoelectrocardiograma->bloqueo_incompleto_rama_derecha) @if($cita->diagnosticoelectrocardiograma->bloqueo_incompleto_rama_derecha) checked @else @endif @endisset name="bloqueo_incompleto_rama_derecha" >I45.1 -BLOQUEO INCOMPLETO DE RAMA DERECHA
                       </label>
                     </div>
                     <div class="checkbox">
                      <label>
                        <input  type="checkbox" @isset($cita->diagnosticoelectrocardiograma->bloqueo_completo_rama_derecha) @if($cita->diagnosticoelectrocardiograma->bloqueo_completo_rama_derecha) checked @else @endif @endisset name="bloqueo_completo_rama_derecha" >I45.0 -BLOQUEO COMPLETA DE RAMA DERECHA
                      </label>
                    </div>
                    <div class="checkbox">
                     <label>
                       <input  type="checkbox" @isset($cita->diagnosticoelectrocardiograma->hemibloqueo_anterior_izquierdo) @if($cita->diagnosticoelectrocardiograma->hemibloqueo_anterior_izquierdo) checked @else @endif @endisset name="hemibloqueo_anterior_izquierdo" >I44.4 -HEMIBLOQUEO ANTERIOR IZQUIERDO
                     </label>
                   </div>
                   <div class="checkbox">
                    <label>
                      <input  type="checkbox" @isset($cita->diagnosticoelectrocardiograma->hemibloqueo_posterior_izquierdo) @if($cita->diagnosticoelectrocardiograma->hemibloqueo_posterior_izquierdo) checked @else @endif @endisset name="hemibloqueo_posterior_izquierdo" >I44.5 -HEMIBLOQUEO POSTERIOR IZQUIERDO
                    </label>
                  </div>
                  <div class="checkbox">
                   <label>
                     <input  type="checkbox" @isset($cita->diagnosticoelectrocardiograma->bloqueo_primer_grado) @if($cita->diagnosticoelectrocardiograma->bloqueo_primer_grado) checked @else @endif @endisset name="bloqueo_primer_grado" >I44.0 -BLOQUEO AURICULO VENTRICULAR PRIMER GRADO
                   </label>
                 </div>
                 <div class="checkbox">
                  <label>
                    <input  type="checkbox" @isset($cita->diagnosticoelectrocardiograma->bloqueo_segundo_grado) @if($cita->diagnosticoelectrocardiograma->bloqueo_segundo_grado) checked @else @endif @endisset name="bloqueo_segundo_grado" >I44.1 -BLOQUEO AURICULO VENTRICULAR SEGUNDO GRADO
                  </label>
                </div>
                <div class="checkbox">
                 <label>
                   <input  type="checkbox" @isset($cita->diagnosticoelectrocardiograma->bloqueo_completo) @if($cita->diagnosticoelectrocardiograma->bloqueo_completo) checked @else @endif @endisset name="bloqueo_completo" >I44.2 -BLOQUEO AURICULO VENTRICULAR COMPLETO
                 </label>
               </div>
               <div class="checkbox">
                <label>
                  <input  type="checkbox" @isset($cita->diagnosticoelectrocardiograma->hipertrofia_ventricular_izquierda) @if($cita->diagnosticoelectrocardiograma->hipertrofia_ventricular_izquierda) checked @else @endif @endisset name="hipertrofia_ventricular_izquierda" >I42.2 -HIPERTROFIA VENTRICULAR IZQUIERDA
                </label>
              </div>
              <div class="checkbox">
               <label>
                 <input  type="checkbox" @isset($cita->diagnosticoelectrocardiograma->electrocardiograma_pendiente) @if($cita->diagnosticoelectrocardiograma->electrocardiograma_pendiente) checked @else @endif @endisset name="electrocardiograma_pendiente" >Z53.8 -ELECTROCARDIOGRAMA PENDIENTE
               </label>
             </div>
             <div class="checkbox">
              <label>
                <input  type="checkbox" @isset($cita->diagnosticoelectrocardiograma->repetir_electrocardiograma) @if($cita->diagnosticoelectrocardiograma->repetir_electrocardiograma) checked @else @endif @endisset name="repetir_electrocardiograma" >Z13.9 -REPETIR ELECTROCARDIOGRAMA
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
            <div class="row" >
                <div class="col-md-12 text-right">
                  @isset($cita->diagnosticoelectrocardiograma->id)
                    <button class="btn btn-sm btn-primary   diagnosticoelectrocardiograma" style="margin-top:5%;margin-right:25%;" tipo="diagnosticoelectrocardiograma_modificar" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDITAR</button>
                   @else
                    <button class="btn btn-sm btn-success diagnosticoelectrocardiograma" style="margin-top:5%;margin-right:25%;" tipo="diagnosticoelectrocardiograma_guardar" type="button">GUARDAR</button>
                  @endisset

                </div>
            </div>
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
