<style media="screen">
#mdltorax{
width: 90% !important;
}

.select2-container--default .select2-selection--single{
    border-radius: 0px;
    height: 34px;
    border: 1px solid #d2d6de !important;
}
</style>
<div class="modal fade" role="dialog" id="modal-torax">
    <div class="modal-dialog" id="mdltorax" role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form  id="formtorax">
              @isset($cita->Torax->id)
               <input type="hidden" name="torax_id" value="{{$cita->Torax->id}}">
              @endisset
             <input type="hidden" name="lista_examen_id" value="{{$listaExamen->id}}">
             <input type="hidden" name="cita_id" value="{{$cita->id}}">
            <div class="modal-body ">
                {{csrf_field()}}

                <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">OIT</a></li>
                <li><a data-toggle="tab" href="#menu1">ESTANDAR</a></li>
              </ul>

    <div class="tab-content">
      <div id="home" class="tab-pane fade in active">
        <div class="row" style="margin-top:2px;">
          <div class="col-lg-4">
          </div>
            <div class="col-lg-4">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon" style="border:none">Tomo La Placa</div>
                  <select name="personal_tomo_placa_id" id="tomo_placa" style="width:100% !important;" class="form-control">
                    @foreach ($personales as $key => $value)
                      <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon" style="border:none">Leyo La Placa</div>
                  <select name="personal_leyo_placa_id" id="leyo_placa" style="width:100% !important;" class="form-control">
                    @foreach ($personales as $key => $value)
                      <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>

        </div>
        <div class="row">
          <div class="col-lg-12"style="margin-top:-1.8%;">
            <h6><strong>CALIDAD RADIOGRAFICA</strong></h6>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon" style="border:none">Calidad</div>
                <select name="calidad" style="width:100% !important;" class="form-control">
                  <option value="1">BUENA</option>
                  <option value="2">ACEPTABLE</option>
                  <option value="3">BAJA CALIDAD</option>
                  <option value="4">INACEPTABLE</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon" style="border:none">Causa</div>
                <select name="causa" style="width:100% !important;" class="form-control">
                  <option value="1">SOBREEXPOSICIÓN</option>
                  <option value="2">SUBEXPOSICION</option>
                  <option value="3">POSICIÓN CENTRADO</option>
                  <option value="4">INSPIRACIÓN INSUFICIENTE</option>
                  <option value="5">ESCAPULAS</option>
                  <option value="6">ARTEFACTO</option>
                  <option value="7">OTROS</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon" style="border:none">Nro. Placa</div>
                  <input type="text" name="numero_placa" @isset($cita->Torax->numero_placa) value="{{$cita->Torax->numero_placa}}"  @endisset class="form-control">
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon" style="border:none">Fecha Placa</div>
                  <input type="date" name="fecha_placa" @isset($cita->Torax->fecha_placa) value="{{$cita->Torax->fecha_placa}}"  @endisset class="form-control">
              </div>
            </div>
          </div>

          <div class="col-lg-12" style="margin-top:-0.2%;">
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon" style="border:none">Comentarios Sobre Defectos Tecnicos</div>
                  <input type="text" name="comentarios_radiografia"  @isset($cita->Torax->comentarios_radiografia) value="{{$cita->Torax->comentarios_radiografia}}"  @endisset class="form-control">
              </div>
            </div>
          </div>
          <br>
          <div class="col-lg-12">
            <h6><strong>ANORMALIDADES PARENQUIMATOSAS</strong></h6>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon" style="border:none"><strong>Zonas Afectadas</strong></div>
              </div>
              <table style="font-size:medium;">
                <tr>
                  <td></td>
                  <td align="center">   <div class="input-group">
                      <div class="input-group-addon" style="border:none">Derecha</div>
                    </div></td>
                  <td align="center"> <div class="input-group">
                      <div class="input-group-addon" style="border:none">izquierda</div>
                    </div></td>
                </tr>
                <tr>
                  <td><div class="input-group">
                      <div class="input-group-addon" style="border:none">Superior</div>
                    </div></td>
                  <td align="center"><input  type="checkbox" @isset($cita->Torax->zona_afectada_superior_derecha)  @if($cita->Torax->zona_afectada_superior_derecha=='1') checked @else @endif  @endisset  name="zona_afectada_superior_derecha" value="1"> </td>
                  <td align="center"><input  type="checkbox" @isset($cita->Torax->zona_afectada_superior_izquierda) @if($cita->Torax->zona_afectada_superior_izquierda=='1') checked @else @endif  @endisset  name="zona_afectada_superior_izquierda" value="1"> </td>
                </tr>
                <tr>
                  <td><div class="input-group">
                      <div class="input-group-addon" style="border:none">Medio</div>
                    </div></td>
                  <td align="center"><input  type="checkbox" @isset($cita->Torax->zona_afectada_medio_derecha) @if($cita->Torax->zona_afectada_medio_derecha=='1') checked @else @endif  @endisset  name="zona_afectada_medio_derecha" value="1"> </td>
                  <td align="center"><input  type="checkbox" @isset($cita->Torax->zona_afectada_medio_izquierda) @if($cita->Torax->zona_afectada_medio_izquierda=='1') checked @else @endif  @endisset  name="zona_afectada_medio_izquierda" value="1"> </td>
                </tr>
                <tr>
                  <td><div class="input-group">
                      <div class="input-group-addon" style="border:none">Inferior</div>
                    </div></td>
                  <td align="center"><input  type="checkbox" @isset($cita->Torax->zona_afectada_bajo_derecha) @if($cita->Torax->zona_afectada_bajo_derecha=='1') checked @else @endif  @endisset  name="zona_afectada_bajo_derecha" value="1"> </td>
                  <td align="center"><input  type="checkbox" @isset($cita->Torax->zona_afectada_bajo_izquierda) @if($cita->Torax->zona_afectada_bajo_izquierda=='1') checked @else @endif  @endisset  name="zona_afectada_bajo_izquierda" value="1"> </td>
                </tr>


              </table>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon" style="border:none"><strong>Profusion</strong> </div>
              </div>
              <table width="100%">
                <tr>
                  <td align="center" width="33.3%">
                    <div class="checkbox" style="padding:0;margin:0;color:rgba(0,0,0,0.65)">
                      <label>
                        <input  type="checkbox" @isset($cita->Torax->profusion_col1_row1) @if($cita->Torax->profusion_col1_row1=='1') checked @else @endif  @endisset  name="profusion_col1_row1" value="1">0/-
                      </label>
                    </div>
                  </td>
                  <td align="center" width="33.3%">
                    <div class="checkbox" style="padding:0;margin:0;">
                      <label style="color:rgba(0,0,0,0.65)">
                        <input  type="checkbox" @isset($cita->Torax->profusion_col2_row1) @if($cita->Torax->profusion_col2_row1=='1') checked @else @endif  @endisset  name="profusion_col2_row1" value="1">1/2
                      </label>
                    </div>
                  </td>
                  <td align="center" width="33.3%">
                    <div class="checkbox" style="padding:0;margin:0;color:rgba(0,0,0,0.65)">
                      <label>
                        <input  type="checkbox" @isset($cita->Torax->profusion_col3_row1) @if($cita->Torax->profusion_col3_row1=='1') checked @else @endif  @endisset  name="profusion_col3_row1" value="1">3/3
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td align="center" width="33.3%">
                    <div class="checkbox" style="padding:0;margin:0;color:rgba(0,0,0,0.65)">
                      <label>
                        <input  type="checkbox" @isset($cita->Torax->profusion_col1_row2) @if($cita->Torax->profusion_col1_row2=='1') checked @else @endif  @endisset  name="profusion_col1_row2" value="1">0/0
                      </label>
                    </div>
                  </td>
                  <td align="center" width="33.3%">
                    <div class="checkbox" style="padding:0;margin:0;color:rgba(0,0,0,0.65)">
                      <label>
                        <input  type="checkbox" @isset($cita->Torax->profusion_col2_row2) @if($cita->Torax->profusion_col2_row2=='1') checked @else @endif  @endisset  name="profusion_col2_row2" value="1">2/1
                      </label>
                    </div>
                  </td>
                  <td align="center" width="33.3%">
                    <div class="checkbox" style="padding:0;margin:0;color:rgba(0,0,0,0.65)">
                      <label>
                        <input  type="checkbox" @isset($cita->Torax->profusion_col3_row2) @if($cita->Torax->profusion_col3_row2=='1') checked @else @endif  @endisset  name="profusion_col3_row2" value="1">3/+
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td align="center" width="33.3%">
                    <div class="checkbox" style="padding:0;margin:0;color:rgba(0,0,0,0.65)">
                      <label>
                        <input  type="checkbox" @isset($cita->Torax->profusion_col1_row3) @if($cita->Torax->profusion_col1_row3=='1') checked @else @endif  @endisset  name="profusion_col1_row3" value="1">0/1
                      </label>
                    </div>
                  </td>
                  <td align="center" width="33.3%">
                    <div class="checkbox" style="padding:0;margin:0;color:rgba(0,0,0,0.65)">
                      <label>
                        <input  type="checkbox" @isset($cita->Torax->profusion_col2_row3) @if($cita->Torax->profusion_col2_row3=='1') checked @else @endif  @endisset  name="profusion_col2_row3" value="1">2/2
                      </label>
                    </div>
                  </td>
                  <td align="center" width="33.3%">

                  </td>
                </tr>
                <tr>
                  <td align="center" width="33.3%">
                    <div class="checkbox" style="padding:0;margin:0;color:rgba(0,0,0,0.65)">
                      <label>
                        <input  type="checkbox" @isset($cita->Torax->profusion_col1_row4) @if($cita->Torax->profusion_col1_row4=='1') checked @else @endif  @endisset  name="profusion_col1_row4" value="1">1/0
                      </label>
                    </div>
                  </td>
                  <td align="center" width="33.3%">
                    <div class="checkbox" style="padding:0;margin:0;color:rgba(0,0,0,0.65)">
                      <label>
                        <input  type="checkbox" @isset($cita->Torax->profusion_col2_row4) @if($cita->Torax->profusion_col2_row4=='1') checked @else @endif  @endisset  name="profusion_col2_row4" value="1">2/3
                      </label>
                    </div>
                  </td>
                  <td align="center" width="33.3%">

                  </td>
                </tr>

                <tr>
                  <td align="center" width="33.3%">
                    <div class="checkbox" style="padding:0;margin:0;color:rgba(0,0,0,0.65)">
                      <label>
                        <input  type="checkbox" @isset($cita->Torax->profusion_col1_row5) @if($cita->Torax->profusion_col1_row5=='1') checked @else @endif  @endisset  name="profusion_col1_row5" value="1">1/1
                      </label>
                    </div>
                  </td>
                  <td align="center" width="33.3%">
                    <div class="checkbox" style="padding:0;margin:0;color:rgba(0,0,0,0.65)">
                      <label>
                        <input  type="checkbox" @isset($cita->Torax->profusion_col2_row5) @if($cita->Torax->profusion_col2_row5=='1') checked @else @endif  @endisset  name="profusion_col2_row5" value="1">3/2
                      </label>
                    </div>
                  </td>
                  <td align="center" width="33.3%">

                  </td>
                </tr>




              </table>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon" style="border:none"><strong>Forma y Tamaño</strong></div>

              </div>
              <table width="100%">
                <tr>
                  <td colspan="3" align="center" style="border-right:1px solid gray;border-bottom:1px solid gray;">   <div class="input-group">
                      <div class="input-group-addon" style="border:none">Primario</div>
                    </div></td>
                  <td colspan="3" align="center" style="border-bottom:1px solid gray;"> <div class="input-group" >
                      <div class="input-group-addon" style="border:none">Secundario</div>
                    </div></td>
                </tr>
                <tr>
                  <td align="center" width="16.6%" >
                    <div class="checkbox" >
                      <label>
                        <input  type="checkbox" @isset($cita->Torax->formatamanio_primario_p) @if($cita->Torax->formatamanio_primario_p=='1') checked @else @endif  @endisset  name="formatamanio_primario_p" value="1">p
                      </label>
                    </div>
                  </td>
                  <td align="center" width="16.6%"  >
                    <div class="checkbox" style="padding:0;margin:0;">
                      <label style="color:rgba(0,0,0,0.65)">
                        <input  type="checkbox" @isset($cita->Torax->formatamanio_primario_q) @if($cita->Torax->formatamanio_primario_q=='1') checked @else @endif  @endisset  name="formatamanio_primario_q" value="1">q
                      </label>
                    </div>
                  </td>
                  <td align="center" width="16.6%"  style="border-right:1px solid gray;">
                    <div class="checkbox" style="padding:0;margin:0;color:rgba(0,0,0,0.65)">
                      <label>
                        <input  type="checkbox" @isset($cita->Torax->formatamanio_primario_r) @if($cita->Torax->formatamanio_primario_r=='1') checked @else @endif  @endisset  name="formatamanio_primario_r" value="1">r
                      </label>
                    </div>
                  </td>
                  <td align="center" width="16.6%">
                    <div class="checkbox" style="padding:0;margin:0;color:rgba(0,0,0,0.65)">
                      <label>
                        <input  type="checkbox" @isset($cita->Torax->formatamanio_secundario_p) @if($cita->Torax->formatamanio_secundario_p=='1') checked @else @endif  @endisset  name="formatamanio_secundario_p" value="1">p
                      </label>
                    </div>
                  </td>
                  <td align="center" width="16.6%">
                    <div class="checkbox" style="padding:0;margin:0;">
                      <label style="color:rgba(0,0,0,0.65)">
                        <input  type="checkbox" @isset($cita->Torax->formatamanio_secundario_q) @if($cita->Torax->formatamanio_secundario_q=='1') checked @else @endif  @endisset  name="formatamanio_secundario_q" value="1">q
                      </label>
                    </div>
                  </td>
                  <td align="center" width="16.6%">
                    <div class="checkbox" style="padding:0;margin:0;color:rgba(0,0,0,0.65)">
                      <label>
                        <input  type="checkbox" @isset($cita->Torax->formatamanio_secundario_r) @if($cita->Torax->formatamanio_secundario_r=='1') checked @else @endif  @endisset  name="formatamanio_secundario_r" value="1">r
                      </label>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td align="center" width="16.6%"  >
                    <div class="checkbox" style="padding:0;margin:0;color:rgba(0,0,0,0.65)">
                      <label>
                        <input  type="checkbox" @isset($cita->Torax->formatamanio_primario_s) @if($cita->Torax->formatamanio_primario_s=='1') checked @else @endif  @endisset  name="formatamanio_primario_s" value="1">s
                      </label>
                    </div>
                  </td>
                  <td align="center" width="16.6%"  >
                    <div class="checkbox" style="padding:0;margin:0;">
                      <label style="color:rgba(0,0,0,0.65)">
                        <input  type="checkbox" @isset($cita->Torax->formatamanio_primario_t) @if($cita->Torax->formatamanio_primario_t=='1') checked @else @endif  @endisset  name="formatamanio_primario_t" value="1">t
                      </label>
                    </div>
                  </td>
                  <td align="center" width="16.6%"  style="border-right:1px solid gray;">
                    <div class="checkbox" style="padding:0;margin:0;color:rgba(0,0,0,0.65)">
                      <label>
                        <input  type="checkbox" @isset($cita->Torax->formatamanio_primario_u) @if($cita->Torax->formatamanio_primario_u=='1') checked @else @endif  @endisset  name="formatamanio_primario_u" value="1">u
                      </label>
                    </div>
                  </td>
                  <td align="center" width="16.6%">
                    <div class="checkbox" style="padding:0;margin:0;color:rgba(0,0,0,0.65)">
                      <label>
                        <input  type="checkbox" @isset($cita->Torax->formatamanio_secundario_s) @if($cita->Torax->formatamanio_secundario_s=='1') checked @else @endif  @endisset  name="formatamanio_secundario_s" value="1">s
                      </label>
                    </div>
                  </td>
                  <td align="center" width="16.6%">
                    <div class="checkbox" style="padding:0;margin:0;">
                      <label style="color:rgba(0,0,0,0.65)">
                        <input  type="checkbox" @isset($cita->Torax->formatamanio_secundario_t) @if($cita->Torax->formatamanio_secundario_t=='1') checked @else @endif  @endisset  name="formatamanio_secundario_t" value="1">t
                      </label>
                    </div>
                  </td>
                  <td align="center" width="16.6%">
                    <div class="checkbox" style="padding:0;margin:0;color:rgba(0,0,0,0.65)">
                      <label>
                        <input  type="checkbox" @isset($cita->Torax->formatamanio_secundario_u) @if($cita->Torax->formatamanio_secundario_u=='1') checked @else @endif  @endisset  name="formatamanio_secundario_u" value="1">u
                      </label>
                    </div>
                  </td>
                </tr>



              </table>
            </div>
          </div>
          <div class="col-lg-1">
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon" style="border:none"><strong> Opacidades</strong></div>
              </div>
              <div class="checkbox">
               <label style="color:rgba(0,0,0,0.65)">
                 <input  type="checkbox" @isset($cita->Torax->opacidad_0) @if($cita->Torax->opacidad_0=='1') checked @else @endif  @endisset  name="opacidad_0" value="1">0
               </label>
             </div>
             <div class="checkbox">
              <label style="color:rgba(0,0,0,0.65)">
                <input  type="checkbox" @isset($cita->Torax->opacidad_A) @if($cita->Torax->opacidad_A=='1') checked @else @endif  @endisset  name="opacidad_A" value="1">A
              </label>
            </div>
            <div class="checkbox">
             <label style="color:rgba(0,0,0,0.65)">
               <input  type="checkbox" @isset($cita->Torax->opacidad_B) @if($cita->Torax->opacidad_B=='1') checked @else @endif  @endisset  name="opacidad_B" value="1">B
             </label>
           </div>
           <div class="checkbox">
            <label style="color:rgba(0,0,0,0.65)">
              <input  type="checkbox" @isset($cita->Torax->opacidad_C) @if($cita->Torax->opacidad_C=='1') checked @else @endif  @endisset  name="opacidad_C" value="1">C
            </label>
          </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-2"style="margin-top:-0.8%;">
            <h6>
              <strong>ANORMALIDADES PLEURALES </strong>
             </h6>
          </div>
          <div class="col-lg-1">
            <div class="radio" style="padding:0;margin-top:-2%">
              <label>
                <input type="radio" name="anormalidad_pleural" id="optionsRadios1" value="option1" @isset($cita->Torax->anormalidad_pleural) @if($cita->Torax->anormalidad_pleural=='1') checked @else @endif @endisset>
                SI
              </label>
            </div>
          </div>
          <div class="col-lg-1">
            <div class="radio" style="padding:0;margin-top:-2%">
              <label>
                <input type="radio" name="anormalidad_pleural" id="optionsRadios1" value="option1" @isset($cita->Torax->anormalidad_pleural) @if($cita->Torax->anormalidad_pleural=='0') checked @else @endif @endisset>
                NO
              </label>
            </div>
          </div>
          <div class="col-lg-8">

          </div>

          <div class="col-lg-12">
            <div class="col-lg-4">
                <strong> Placas Pleurales </strong>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="input-group">
              <div class="input-group-addon" style="border:none"><strong>Sitio</strong></div>
            </div>
            <table style="font-size:medium;" width="100%">
              <tr>
                <td width="60%"align="left" ><div class="input-group" style="margin:0;">
                    <div class="input-group-addon" style="border:none">Pared Toraxica de Perfil</div>
                  </div>
                </td>
                <td width="15%" align="center" style="font-size:small;color:rgba(0,0,0,0.65);"><input  type="checkbox" @isset($cita->Torax->sitio_pared_toraxica_0) @if($cita->Torax->sitio_pared_toraxica_0=='1') checked @else @endif  @endisset  name="sitio_pared_toraxica_0" value="1">0</td>
                <td width="15%" align="center" style="font-size:small;color:rgba(0,0,0,0.65);"><input  type="checkbox" @isset($cita->Torax->sitio_pared_toraxica_D) @if($cita->Torax->sitio_pared_toraxica_D=='1') checked @else @endif  @endisset  name="sitio_pared_toraxica_D" value="1">D</td>
                <td width="15%" align="center" style="font-size:small;color:rgba(0,0,0,0.65);"><input  type="checkbox" @isset($cita->Torax->sitio_pared_toraxica_I) @if($cita->Torax->sitio_pared_toraxica_I=='1') checked @else @endif  @endisset  name="sitio_pared_toraxica_I" value="1">I</td>
              </tr>
              <tr>
                <td width="60%"  align="left"><div class="input-group" style="margin:0;">
                    <div class="input-group-addon" style="text-align:left;border:none">De Frente</div>
                  </div>
                </td>
                <td align="center" width="15%" align="center" style="font-size:small;color:rgba(0,0,0,0.65);"><input  type="checkbox" @isset($cita->Torax->sitio_defrente_0) @if($cita->Torax->sitio_defrente_0=='1') checked @else @endif  @endisset  name="sitio_defrente_0" value="1">0</td>
                <td align="center" width="15%" align="center" style="font-size:small;color:rgba(0,0,0,0.65);"><input  type="checkbox" @isset($cita->Torax->sitio_defrente_D) @if($cita->Torax->sitio_defrente_D=='1') checked @else @endif  @endisset  name="sitio_defrente_D" value="1">D</td>
                <td align="center" width="15%" align="center" style="font-size:small;color:rgba(0,0,0,0.65);"><input  type="checkbox" @isset($cita->Torax->sitio_defrente_I) @if($cita->Torax->sitio_defrente_I=='1') checked @else @endif  @endisset  name="sitio_defrente_I" value="1">I</td>
              </tr>
              <tr>
                <td width="60%"  align="left"><div class="input-group" style="margin:0;">
                    <div class="input-group-addon" style="text-align:left;border:none">Diafragma</div>
                  </div>
                </td>
                <td align="center" width="15%" align="center" style="font-size:small;color:rgba(0,0,0,0.65);"><input  type="checkbox" @isset($cita->Torax->sitio_diafragma_0) @if($cita->Torax->sitio_diafragma_0=='1') checked @else @endif  @endisset  name="sitio_diafragma_0" value="1">0</td>
                <td align="center" width="15%" align="center" style="font-size:small;color:rgba(0,0,0,0.65);"><input  type="checkbox" @isset($cita->Torax->sitio_diafragma_D) @if($cita->Torax->sitio_diafragma_D=='1') checked @else @endif  @endisset  name="sitio_diafragma_D" value="1">D</td>
                <td align="center" width="15%" align="center" style="font-size:small;color:rgba(0,0,0,0.65);"><input  type="checkbox" @isset($cita->Torax->sitio_diafragma_I) @if($cita->Torax->sitio_diafragma_I=='1') checked @else @endif  @endisset  name="sitio_diafragma_I" value="1">I</td>
              </tr>
              <tr>
                <td width="60%"  align="left"><div class="input-group" style="margin:0;">
                    <div class="input-group-addon" style="text-align:left;border:none">Otro(s) Sitio(s)</div>
                  </div>
                </td>
                <td align="center" width="15%" align="center" style="font-size:small;color:rgba(0,0,0,0.65);"><input  type="checkbox" @isset($cita->Torax->sitio_otros_0) @if($cita->Torax->sitio_otros_0=='1') checked @else @endif  @endisset  name="sitio_otros_0" value="1">0</td>
                <td align="center" width="15%" align="center" style="font-size:small;color:rgba(0,0,0,0.65);"><input  type="checkbox" @isset($cita->Torax->sitio_otros_D) @if($cita->Torax->sitio_otros_D=='1') checked @else @endif  @endisset  name="sitio_otros_D" value="1">D</td>
                <td align="center" width="15%" align="center" style="font-size:small;color:rgba(0,0,0,0.65);"><input  type="checkbox" @isset($cita->Torax->sitio_otros_I) @if($cita->Torax->sitio_otros_I=='1') checked @else @endif  @endisset  name="sitio_otros_I" value="1">I</td>
              </tr>
            </table>
          </div>
          <div class="col-lg-3">
            <div class="input-group">
              <div class="input-group-addon" style="border:none"><strong>Clasificacion</strong></div>
            </div>
            <table style="font-size:medium;" width="100%">
              <tr>
                <td colspan="4"></td>
              </tr>
              <tr>
                <td width="60%"align="left" ><div class="input-group" style="margin:0;">
                    <div class="input-group-addon" style="border:none">Pared Toraxica de Perfil</div>
                  </div>
                </td>
                <td align="center" width="15%" align="center" style="font-size:small;color:rgba(0,0,0,0.65);"><input  type="checkbox" @isset($cita->Torax->clasificacion_pared_toraxica_0) @if($cita->Torax->clasificacion_pared_toraxica_0=='1') checked @else @endif  @endisset  name="clasificacion_pared_toraxica_0" value="1">0</td>
                <td align="center" width="15%" align="center" style="font-size:small;color:rgba(0,0,0,0.65);"><input  type="checkbox" @isset($cita->Torax->clasificacion_pared_toraxica_D) @if($cita->Torax->clasificacion_pared_toraxica_D=='1') checked @else @endif  @endisset  name="clasificacion_pared_toraxica_D" value="1">D</td>
                <td align="center" width="15%" align="center" style="font-size:small;color:rgba(0,0,0,0.65);"><input  type="checkbox" @isset($cita->Torax->clasificacion_pared_toraxica_I) @if($cita->Torax->clasificacion_pared_toraxica_I=='1') checked @else @endif  @endisset  name="clasificacion_pared_toraxica_I" value="1">I</td>
              </tr>
              <tr>
                <td width="60%"  align="left"><div class="input-group" style="margin:0;">
                    <div class="input-group-addon" style="text-align:left;border:none">De Frente</div>
                  </div>
                </td>
                <td align="center" width="15%" align="center" style="font-size:small;color:rgba(0,0,0,0.65);"><input  type="checkbox" @isset($cita->Torax->clasificacion_defrente_0) @if($cita->Torax->clasificacion_defrente_0=='1') checked @else @endif  @endisset  name="clasificacion_defrente_0" value="1">0</td>
                <td align="center" width="15%" align="center" style="font-size:small;color:rgba(0,0,0,0.65);"><input  type="checkbox" @isset($cita->Torax->clasificacion_defrente_D) @if($cita->Torax->clasificacion_defrente_D=='1') checked @else @endif  @endisset  name="clasificacion_defrente_D" value="1">D</td>
                <td align="center" width="15%" align="center" style="font-size:small;color:rgba(0,0,0,0.65);"><input  type="checkbox" @isset($cita->Torax->clasificacion_defrente_I) @if($cita->Torax->clasificacion_defrente_I=='1') checked @else @endif  @endisset  name="clasificacion_defrente_I" value="1">I</td>
              </tr>
              <tr>
                <td width="60%"  align="left"><div class="input-group" style="margin:0;">
                    <div class="input-group-addon" style="text-align:left;border:none">Diafragma</div>
                  </div>
                </td>
                <td align="center" width="15%" align="center" style="font-size:small;color:rgba(0,0,0,0.65);"><input  type="checkbox" @isset($cita->Torax->clasificacion_diafragma_0) @if($cita->Torax->clasificacion_diafragma_0=='1') checked @else @endif  @endisset  name="clasificacion_diafragma_0" value="1">0</td>
                <td align="center" width="15%" align="center" style="font-size:small;color:rgba(0,0,0,0.65);"><input  type="checkbox" @isset($cita->Torax->clasificacion_diafragma_D) @if($cita->Torax->clasificacion_diafragma_D=='1') checked @else @endif  @endisset  name="clasificacion_diafragma_D" value="1">D</td>
                <td align="center" width="15%" align="center" style="font-size:small;color:rgba(0,0,0,0.65);"><input  type="checkbox" @isset($cita->Torax->clasificacion_diafragma_I) @if($cita->Torax->clasificacion_diafragma_I=='1') checked @else @endif  @endisset  name="clasificacion_diafragma_I" value="1">I</td>
              </tr>
              <tr>
                <td width="60%"  align="left"><div class="input-group" style="margin:0;">
                    <div class="input-group-addon" style="text-align:left;border:none">Otro(s) Sitio(s)</div>
                  </div>
                </td>
                <td align="center" width="15%" align="center" style="font-size:small;color:rgba(0,0,0,0.65);"><input  type="checkbox" @isset($cita->Torax->clasificacion_otros_0) @if($cita->Torax->clasificacion_otros_0=='1') checked @else @endif  @endisset  name="clasificacion_otros_0" value="1">0</td>
                <td align="center" width="15%" align="center" style="font-size:small;color:rgba(0,0,0,0.65);"><input  type="checkbox" @isset($cita->Torax->clasificacion_otros_D) @if($cita->Torax->clasificacion_otros_D=='1') checked @else @endif  @endisset  name="clasificacion_otros_D" value="1">D</td>
                <td align="center" width="15%" align="center" style="font-size:small;color:rgba(0,0,0,0.65);"><input  type="checkbox" @isset($cita->Torax->clasificacion_otros_I) @if($cita->Torax->clasificacion_otros_I=='1') checked @else @endif  @endisset  name="clasificacion_otros_I" value="1">I</td>
              </tr>
            </table>
          </div>
          <div class="col-lg-6">
            <div class="col-lg-6">
              <div class="input-group">
                <div class="input-group-addon" style="border:none"><strong>Extención</strong></div>
              </div>
              <table style="font-size:small;color:rgba(0,0,0,0.65);" width="100%">
                <tr>
                  <td align="center" width="15%" align="center"><input  type="checkbox" @isset($cita->Torax->extencion_col1_row1) @if($cita->Torax->extencion_col1_row1=='1') checked @else @endif  @endisset  name="extencion_col1_row1" value="1">0</td>
                  <td align="center" width="15%" align="center">&nbsp;</td>
                  <td align="center" width="15%" align="center"><input  type="checkbox" @isset($cita->Torax->extencion_col3_row1) @if($cita->Torax->extencion_col3_row1=='1') checked @else @endif  @endisset  name="extencion_col3_row1" value="1">D</td>
                  <td align="center" width="15%" align="center"><input  type="checkbox" @isset($cita->Torax->extencion_col4_row1) @if($cita->Torax->extencion_col4_row1=='1') checked @else @endif  @endisset  name="extencion_col4_row1" value="1">0</td>
                  <td align="center" width="15%" align="center">&nbsp;</td>
                  <td align="center" width="15%" align="center"><input  type="checkbox" @isset($cita->Torax->extencion_col6_row1) @if($cita->Torax->extencion_col6_row1=='1') checked @else @endif  @endisset  name="extencion_col6_row1" value="1">I</td>
                </tr>
                <tr>
                  <td align="center" width="15%" align="center"><input  type="checkbox" @isset($cita->Torax->extencion_col1_row2) @if($cita->Torax->extencion_col1_row2=='1') checked @else @endif  @endisset  name="extencion_col1_row2" value="1">1</td>
                  <td align="center" width="15%" align="center"><input  type="checkbox" @isset($cita->Torax->extencion_col2_row2) @if($cita->Torax->extencion_col2_row2=='1') checked @else @endif  @endisset  name="extencion_col2_row2" value="1">2</td>
                  <td align="center" width="15%" align="center"><input  type="checkbox" @isset($cita->Torax->extencion_col3_row2) @if($cita->Torax->extencion_col3_row2=='1') checked @else @endif  @endisset  name="extencion_col3_row2" value="1">3</td>
                  <td align="center" width="15%" align="center"><input  type="checkbox" @isset($cita->Torax->extencion_col4_row2) @if($cita->Torax->extencion_col4_row2=='1') checked @else @endif  @endisset  name="extencion_col4_row2" value="1">1</td>
                  <td align="center" width="15%" align="center"><input  type="checkbox" @isset($cita->Torax->extencion_col5_row2) @if($cita->Torax->extencion_col5_row2=='1') checked @else @endif  @endisset  name="extencion_col5_row2" value="1">2</td>
                  <td align="center" width="15%" align="center"><input  type="checkbox" @isset($cita->Torax->extencion_col6_row2) @if($cita->Torax->extencion_col6_row2=='1') checked @else @endif  @endisset  name="extencion_col6_row2" value="1">3</td>
                </tr>
            </table>
            </div>
            <div class="col-lg-6">
              <div class="input-group">
                <div class="input-group-addon" style="border:none"><strong>Ancho</strong></div>
              </div>
              <table style="font-size:small;color:rgba(0,0,0,0.65);" width="100%" >
                <tr>
                  <td align="center" width="15%" colspan="3"><input  type="checkbox" @isset($cita->Torax->ancho_col1_row1) @if($cita->Torax->ancho_col1_row1=='1') checked @else @endif  @endisset  name="ancho_col1_row1" value="1">D</td>
                  <td align="center" width="15%" colspan="3"><input  type="checkbox" @isset($cita->Torax->ancho_col2_row1) @if($cita->Torax->ancho_col2_row1=='1') checked @else @endif  @endisset  name="ancho_col2_row1" value="1">1</td>
                </tr>
                <tr>
                  <td align="center" width="15%" align="center"><input  type="checkbox" @isset($cita->Torax->ancho_col1_row2) @if($cita->Torax->ancho_col1_row2=='1') checked @else @endif  @endisset  name="ancho_col1_row2" value="1">a</td>
                  <td align="center" width="15%" align="center"><input  type="checkbox" @isset($cita->Torax->ancho_col2_row2) @if($cita->Torax->ancho_col2_row2=='1') checked @else @endif  @endisset  name="ancho_col2_row2" value="1">b</td>
                  <td align="center" width="15%" align="center"><input  type="checkbox" @isset($cita->Torax->ancho_col3_row2) @if($cita->Torax->ancho_col3_row2=='1') checked @else @endif  @endisset  name="ancho_col3_row2" value="1">c</td>
                  <td align="center" width="15%" align="center"><input  type="checkbox" @isset($cita->Torax->ancho_col4_row2) @if($cita->Torax->ancho_col4_row2=='1') checked @else @endif  @endisset  name="ancho_col4_row2" value="1">a</td>
                  <td align="center" width="15%" align="center"><input  type="checkbox" @isset($cita->Torax->ancho_col5_row2) @if($cita->Torax->ancho_col5_row2=='1') checked @else @endif  @endisset  name="ancho_col5_row2" value="1">b</td>
                  <td align="center" width="15%" align="center"><input  type="checkbox" @isset($cita->Torax->ancho_col6_row2) @if($cita->Torax->ancho_col6_row2=='1') checked @else @endif  @endisset  name="ancho_col6_row2" value="1">c</td>
                </tr>
              </table>
            </div>
            <div class="col-lg-2">

            </div>
            <div class="col-lg-8">
                  <div class="" style="padding:2%;">
                    Obliteracion del Angulo Costofrenico &nbsp; &nbsp; <label class="checkbox-inline">
                                  <input  type="checkbox" @isset($cita->Torax->angulo_costofrenico_0) @if($cita->Torax->angulo_costofrenico_0=='1') checked @else @endif  @endisset  name="angulo_costofrenico_0" value="1"> 0
                                </label>
                                <label class="checkbox-inline">
                                  <input  type="checkbox" @isset($cita->Torax->angulo_costofrenico_D) @if($cita->Torax->angulo_costofrenico_D=='1') checked @else @endif  @endisset  name="angulo_costofrenico_D" value="1"> D
                                </label>
                                <label class="checkbox-inline">
                                  <input  type="checkbox" @isset($cita->Torax->angulo_costofrenico_I) @if($cita->Torax->angulo_costofrenico_I=='1') checked @else @endif  @endisset  name="angulo_costofrenico_I" value="1"> I
                                </label>
                  </div>
            </div>
            <div class="col-lg-2">

            </div>
          </div>
        </div>



<br>
        <div class="row">
          <div class="col-lg-12">
            <h6>
              <strong>ENGROSAMIENTO DIFUSO DE LA PLEURA</strong>
             </h6>
          </div>
              <div class="col-lg-3">
            <div class="input-group">
              <div class="input-group-addon" style="border:none"><strong>Pared Toraxica</strong></div>
            </div>
            <table style="font-size:medium;" width="100%">
              <tr>
                <td width="60%"align="left" ><div class="input-group" style="margin:0;">
                    <div class="input-group-addon" style="text-align:left;border:none">De Perfil</div>
                  </div>
                </td>
                <td align="center" width="15%" align="center" style="font-size:small;color:rgba(0,0,0,0.65);"><input  type="checkbox" @isset($cita->Torax->pared_toraxica_perfil_0) @if($cita->Torax->pared_toraxica_perfil_0=='1') checked @else @endif  @endisset  name="pared_toraxica_perfil_0" value="1">0</td>
                <td align="center" width="15%" align="center" style="font-size:small;color:rgba(0,0,0,0.65);"><input  type="checkbox" @isset($cita->Torax->pared_toraxica_perfil_D) @if($cita->Torax->pared_toraxica_perfil_D=='1') checked @else @endif  @endisset  name="pared_toraxica_perfil_D" value="1">D</td>
                <td align="center" width="15%" align="center" style="font-size:small;color:rgba(0,0,0,0.65);"><input  type="checkbox" @isset($cita->Torax->pared_toraxica_perfil_I) @if($cita->Torax->pared_toraxica_perfil_I=='1') checked @else @endif  @endisset  name="pared_toraxica_perfil_I" value="1">I</td>
              </tr>
              <tr>
                <td width="60%"  align="left"><div class="input-group" style="margin:0;">
                    <div class="input-group-addon" style="text-align:left;border:none">De Frente</div>
                  </div>
                </td>
                <td align="center" width="15%" align="center" style="font-size:small;color:rgba(0,0,0,0.65);"><input  type="checkbox" @isset($cita->Torax->pared_toraxica_frente_0) @if($cita->Torax->pared_toraxica_frente_0=='1') checked @else @endif  @endisset  name="pared_toraxica_frente_0" value="1">0</td>
                <td align="center" width="15%" align="center" style="font-size:small;color:rgba(0,0,0,0.65);"><input  type="checkbox" @isset($cita->Torax->pared_toraxica_frente_D) @if($cita->Torax->pared_toraxica_frente_D=='1') checked @else @endif  @endisset  name="pared_toraxica_frente_D" value="1">D</td>
                <td align="center" width="15%" align="center" style="font-size:small;color:rgba(0,0,0,0.65);"><input  type="checkbox" @isset($cita->Torax->pared_toraxica_frente_I) @if($cita->Torax->pared_toraxica_frente_I=='1') checked @else @endif  @endisset  name="pared_toraxica_frente_I" value="1">I</td>
              </tr>

            </table>
          </div>
          <div class="col-lg-3">
            <div class="input-group">
              <div class="input-group-addon" style="border:none"><strong>Clasificacion</strong></div>
            </div>
            <table style="font-size:medium;" width="100%">
              <tr>
                <td colspan="4"></td>
              </tr>
              <tr>
                <td width="60%"align="left" ><div class="input-group" style="margin:0;">
                    <div class="input-group-addon" style="text-align:left;border:none">De Perfil</div>
                  </div>
                </td>
                <td align="center" width="15%" align="center" style="font-size:small;color:rgba(0,0,0,0.65);"><input  type="checkbox" @isset($cita->Torax->clasificacion_perfil_0) @if($cita->Torax->clasificacion_perfil_0=='1') checked @else @endif  @endisset  name="clasificacion_perfil_0" value="1">0</td>
                <td align="center" width="15%" align="center" style="font-size:small;color:rgba(0,0,0,0.65);"><input  type="checkbox" @isset($cita->Torax->clasificacion_perfil_D) @if($cita->Torax->clasificacion_perfil_D=='1') checked @else @endif  @endisset  name="clasificacion_perfil_D" value="1">D</td>
                <td align="center" width="15%" align="center" style="font-size:small;color:rgba(0,0,0,0.65);"><input  type="checkbox" @isset($cita->Torax->clasificacion_perfil_I) @if($cita->Torax->clasificacion_perfil_I=='1') checked @else @endif  @endisset  name="clasificacion_perfil_I" value="1">I</td>
              </tr>
              <tr>
                <td width="60%"  align="left"><div class="input-group" style="margin:0;">
                    <div class="input-group-addon" style="text-align:left;border:none">De Frente</div>
                  </div>
                </td>
                <td align="center" width="15%" align="center" style="font-size:small;color:rgba(0,0,0,0.65);"><input  type="checkbox" @isset($cita->Torax->clasificacion_frente_0) @if($cita->Torax->clasificacion_frente_0=='1') checked @else @endif  @endisset  name="clasificacion_frente_0" value="1">0</td>
                <td align="center" width="15%" align="center" style="font-size:small;color:rgba(0,0,0,0.65);"><input  type="checkbox" @isset($cita->Torax->clasificacion_frente_D) @if($cita->Torax->clasificacion_frente_D=='1') checked @else @endif  @endisset  name="clasificacion_frente_D" value="1">D</td>
                <td align="center" width="15%" align="center" style="font-size:small;color:rgba(0,0,0,0.65);"><input  type="checkbox" @isset($cita->Torax->clasificacion_frente_I) @if($cita->Torax->clasificacion_frente_I=='1') checked @else @endif  @endisset  name="clasificacion_frente_I" value="1">I</td>
              </tr>
                </table>
          </div>
          <div class="col-lg-6">
            <div class="col-lg-6">
              <div class="input-group">
                <div class="input-group-addon" style="border:none"><strong>Extención</strong></div>
              </div>
              <table style="font-size:small;color:rgba(0,0,0,0.65);" width="100%">
                <tr>
                  <td align="center" width="15%" align="center"><input  type="checkbox" @isset($cita->Torax->extencion2_col1_row1) @if($cita->Torax->extencion2_col1_row1=='1') checked @else @endif  @endisset  name="extencion2_col1_row1" value="1">0</td>
                  <td align="center" width="15%" align="center">&nbsp;</td>
                  <td align="center" width="15%" align="center"><input  type="checkbox" @isset($cita->Torax->extencion2_col3_row1) @if($cita->Torax->extencion2_col3_row1=='1') checked @else @endif  @endisset  name="extencion2_col3_row1" value="1">D</td>
                  <td align="center" width="15%" align="center"><input  type="checkbox" @isset($cita->Torax->extencion2_col4_row1) @if($cita->Torax->extencion2_col4_row1=='1') checked @else @endif  @endisset  name="extencion2_col4_row1" value="1">0</td>
                  <td align="center" width="15%" align="center">&nbsp;</td>
                  <td align="center" width="15%" align="center"><input  type="checkbox" @isset($cita->Torax->extencion2_col6_row1) @if($cita->Torax->extencion2_col6_row1=='1') checked @else @endif  @endisset  name="extencion2_col6_row1" value="1">I</td>
                </tr>
                <tr>
                  <td align="center" width="15%" align="center"><input  type="checkbox" @isset($cita->Torax->extencion2_col1_row2) @if($cita->Torax->extencion2_col1_row2=='1') checked @else @endif  @endisset  name="extencion2_col1_row2" value="1">1</td>
                  <td align="center" width="15%" align="center"><input  type="checkbox" @isset($cita->Torax->extencion2_col2_row2) @if($cita->Torax->extencion2_col2_row2=='1') checked @else @endif  @endisset  name="extencion2_col2_row2" value="1">2</td>
                  <td align="center" width="15%" align="center"><input  type="checkbox" @isset($cita->Torax->extencion2_col3_row2) @if($cita->Torax->extencion2_col3_row2=='1') checked @else @endif  @endisset  name="extencion2_col3_row2" value="1">3</td>
                  <td align="center" width="15%" align="center"><input  type="checkbox" @isset($cita->Torax->extencion2_col4_row2) @if($cita->Torax->extencion2_col4_row2=='1') checked @else @endif  @endisset  name="extencion2_col4_row2" value="1">1</td>
                  <td align="center" width="15%" align="center"><input  type="checkbox" @isset($cita->Torax->extencion2_col5_row2) @if($cita->Torax->extencion2_col5_row2=='1') checked @else @endif  @endisset  name="extencion2_col5_row2" value="1">2</td>
                  <td align="center" width="15%" align="center"><input  type="checkbox" @isset($cita->Torax->extencion2_col6_row2) @if($cita->Torax->extencion2_col6_row2=='1') checked @else @endif  @endisset  name="extencion2_col6_row2" value="1">3</td>
                </tr>
            </table>
            </div>
            <div class="col-lg-6">
              <div class="input-group">
                <div class="input-group-addon" style="border:none"><strong>Ancho</strong></div>
              </div>
              <table style="font-size:small;color:rgba(0,0,0,0.65);" width="100%" >
                <tr>
                  <td align="center" width="15%" colspan="3"><input  type="checkbox" @isset($cita->Torax->ancho2_col1_row1) @if($cita->Torax->ancho2_col1_row1=='1') checked @else @endif  @endisset  name="ancho2_col1_row1" value="1">D</td>
                  <td align="center" width="15%" colspan="3"><input  type="checkbox" @isset($cita->Torax->ancho2_col2_row1) @if($cita->Torax->ancho2_col2_row1=='1') checked @else @endif  @endisset  name="ancho2_col2_row1" value="1">1</td>
                </tr>
                <tr>
                  <td align="center" width="15%" align="center"><input  type="checkbox" @isset($cita->Torax->ancho2_col1_row2) @if($cita->Torax->ancho2_col1_row2=='1') checked @else @endif  @endisset  name="ancho2_col1_row2" value="1">a</td>
                  <td align="center" width="15%" align="center"><input  type="checkbox" @isset($cita->Torax->ancho2_col2_row2) @if($cita->Torax->ancho2_col2_row2=='1') checked @else @endif  @endisset  name="ancho2_col2_row2" value="1">b</td>
                  <td align="center" width="15%" align="center"><input  type="checkbox" @isset($cita->Torax->ancho2_col3_row2) @if($cita->Torax->ancho2_col3_row2=='1') checked @else @endif  @endisset  name="ancho2_col3_row2" value="1">c</td>
                  <td align="center" width="15%" align="center"><input  type="checkbox" @isset($cita->Torax->ancho2_col4_row2) @if($cita->Torax->ancho2_col4_row2=='1') checked @else @endif  @endisset  name="ancho2_col4_row2" value="1">a</td>
                  <td align="center" width="15%" align="center"><input  type="checkbox" @isset($cita->Torax->ancho2_col5_row2) @if($cita->Torax->ancho2_col5_row2=='1') checked @else @endif  @endisset  name="ancho2_col5_row2" value="1">b</td>
                  <td align="center" width="15%" align="center"><input  type="checkbox" @isset($cita->Torax->ancho2_col6_row2) @if($cita->Torax->ancho2_col6_row2=='1') checked @else @endif  @endisset  name="ancho2_col6_row2" value="1">c</td>
                </tr>
              </table>
            </div>

          </div>

          <div class="col-lg-12 text-left" >
              <div class="col-lg-2">
                        <h6> <strong> SIMBOLOS</strong> </h6>
              </div>
              <div class="col-lg-2" style="margin-top:0.5%;">
                        <label class="checkbox-inline">
                             <input type="radio" name="simbolo_estado" @isset($cita->Torax->simbolo_estado) @if($cita->Torax->simbolo_estado=='1') checked @else @endif  @endisset value="1"> SI
                           </label>
              </div>
              <div class="col-lg-2" style="margin-top:0.5%;">
                <label class="checkbox-inline">
                  <input type="radio" name="simbolo_estado" @isset($cita->Torax->simbolo_estado) @if($cita->Torax->simbolo_estado=='0') checked @else @endif  @endisset value="0"> NO
                </label>
              </div>
          </div>

          <div class="col-lg-12">
            <table width="90%" style="margin-left:2%;color:rgba(0,0,0,0.65);font-size:small;">
               <tr style="border-top:0.5px solid rgba(0,0,0,0.3); border-left:0.5px solid rgba(0,0,0,0.3); border-right:0.5px solid rgba(0,0,0,0.3);">
                  <td style="padding:4px;">
                      <label class="checkbox-inline" width="6.5%">
                          <input  type="checkbox" @isset($cita->Torax->simbolo_col1_row1) @if($cita->Torax->simbolo_col1_row1=='1') checked @else @endif  @endisset  name="simbolo_col1_row1" value="1">aa
                      </label>
                  </td>
                  <td>
                      <label class="checkbox-inline" width="6.5%">
                          <input  type="checkbox" @isset($cita->Torax->simbolo_col1_row2) @if($cita->Torax->simbolo_col1_row2=='1') checked @else @endif  @endisset  name="simbolo_col1_row2"  value="1">at
                      </label>
                  </td>
                  <td>
                      <label class="checkbox-inline" width="6.5%">
                          <input  type="checkbox" @isset($cita->Torax->simbolo_col1_row3) @if($cita->Torax->simbolo_col1_row3=='1') checked @else @endif  @endisset  name="simbolo_col1_row3"  value="1">ax
                      </label>
                  </td>
                  <td>
                      <label class="checkbox-inline" width="6.5%">
                          <input  type="checkbox" @isset($cita->Torax->simbolo_col1_row4) @if($cita->Torax->simbolo_col1_row4=='1') checked @else @endif  @endisset  name="simbolo_col1_row4"  value="1">bu
                      </label>
                  </td>
                  <td>
                      <label class="checkbox-inline" width="6.5%">
                          <input  type="checkbox" @isset($cita->Torax->simbolo_col1_row5) @if($cita->Torax->simbolo_col1_row5=='1') checked @else @endif  @endisset   name="simbolo_col1_row5" value="1">ca
                      </label>
                  </td>
                  <td>
                      <label class="checkbox-inline" width="6.5%">
                          <input  type="checkbox" @isset($cita->Torax->simbolo_col1_row6) @if($cita->Torax->simbolo_col1_row6=='1') checked @else @endif  @endisset  name="simbolo_col1_row6" value="1">cg
                      </label>
                  </td>
                  <td>
                      <label class="checkbox-inline" width="6.5%">
                          <input  type="checkbox" @isset($cita->Torax->simbolo_col1_row7) @if($cita->Torax->simbolo_col1_row7=='1') checked @else @endif  @endisset  name="simbolo_col1_row7" value="1">cn
                      </label>
                  </td>
                  <td>
                      <label class="checkbox-inline" width="6.5%">
                          <input  type="checkbox" @isset($cita->Torax->simbolo_col1_row8) @if($cita->Torax->simbolo_col1_row8=='1') checked @else @endif  @endisset name="simbolo_col1_row8"  value="1">co
                      </label>
                  </td>
                  <td>
                      <label class="checkbox-inline" width="6.5%">
                          <input  type="checkbox" @isset($cita->Torax->simbolo_col1_row9) @if($cita->Torax->simbolo_col1_row9=='1') checked @else @endif  @endisset  name="simbolo_col1_row9"  value="1">cp
                      </label>
                  </td>
                  <td>
                      <label class="checkbox-inline" width="6.5%">
                          <input  type="checkbox" @isset($cita->Torax->simbolo_col1_row10) @if($cita->Torax->simbolo_col1_row10=='1') checked @else @endif  @endisset  name="simbolo_col1_row10" value="1">cv
                      </label>
                  </td>
                  <td>
                      <label class="checkbox-inline" width="6.5%">
                          <input  type="checkbox" @isset($cita->Torax->simbolo_col1_row11) @if($cita->Torax->simbolo_col1_row11=='1') checked @else @endif  @endisset  name="simbolo_col1_row11"  value="1">di
                      </label>
                  </td>
                  <td>
                      <label class="checkbox-inline" width="6.5%">
                          <input  type="checkbox" @isset($cita->Torax->simbolo_col1_row12) @if($cita->Torax->simbolo_col1_row12=='1') checked @else @endif  @endisset  name="simbolo_col1_row12"  value="1">ef
                      </label>
                  </td>
                  <td>
                      <label class="checkbox-inline" width="6.5%">
                          <input  type="checkbox" @isset($cita->Torax->simbolo_col1_row13) @if($cita->Torax->simbolo_col1_row13=='1') checked @else @endif  @endisset   name="simbolo_col1_row13" value="1">em
                      </label>
                  </td>
                  <td>
                      <label class="checkbox-inline" width="6.5%">
                          <input  type="checkbox" @isset($cita->Torax->simbolo_col1_row14) @if($cita->Torax->simbolo_col1_row14=='1') checked @else @endif  @endisset  name="simbolo_col1_row14"  value="1">es
                      </label>
                  </td>
                  <td>
                      <label class="checkbox-inline" width="6.5%">
                          <input  type="checkbox" @isset($cita->Torax->simbolo_col1_row15) @if($cita->Torax->simbolo_col1_row15=='1') checked @else @endif  @endisset  name="simbolo_col1_row15"  value="1">od
                      </label>
                  </td>
              </tr>
             <tr style="border-bottom:0.5px solid rgba(0,0,0,0.3); border-left:0.5px solid rgba(0,0,0,0.3); border-right:0.5px solid rgba(0,0,0,0.3);">
                  <td style="padding:4px;">
                      <label class="checkbox-inline" width="6.5%">
                          <input  type="checkbox" @isset($cita->Torax->simbolo_col2_row1) @if($cita->Torax->simbolo_col2_row1=='1') checked @else @endif  @endisset  name="simbolo_col2_row1"  value="1">fr
                      </label>
                  </td>
                  <td>
                      <label class="checkbox-inline" width="6.5%">
                          <input  type="checkbox" @isset($cita->Torax->simbolo_col2_row2) @if($cita->Torax->simbolo_col2_row2=='1') checked @else @endif  @endisset  name="simbolo_col2_row2"  value="1">hi
                      </label>
                  </td>
                  <td>
                      <label class="checkbox-inline" width="6.5%">
                          <input  type="checkbox" @isset($cita->Torax->simbolo_col2_row3) @if($cita->Torax->simbolo_col2_row3=='1') checked @else @endif  @endisset   name="simbolo_col2_row3" value="1">ho
                      </label>
                  </td>
                  <td>
                      <label class="checkbox-inline" width="6.5%">
                          <input  type="checkbox" @isset($cita->Torax->simbolo_col2_row4) @if($cita->Torax->simbolo_col2_row4=='1') checked @else @endif  @endisset  name="simbolo_col2_row4"  value="1">id
                      </label>
                  </td>
                  <td>
                      <label class="checkbox-inline" name="simbolo_col2_row5" width="6.5%">
                          <input  type="checkbox" @isset($cita->Torax->simbolo_col2_row5) @if($cita->Torax->simbolo_col2_row5=='1') checked @else @endif  @endisset  name="simbolo_col2_row5" value="1">ih
                      </label>
                  </td>
                  <td>
                      <label class="checkbox-inline" width="6.5%">
                          <input  type="checkbox" @isset($cita->Torax->simbolo_col2_row6) @if($cita->Torax->simbolo_col2_row6=='1') checked @else @endif  @endisset  name="simbolo_col2_row6"  value="1">kl
                      </label>
                  </td>
                  <td>
                      <label class="checkbox-inline" width="6.5%">
                          <input  type="checkbox" @isset($cita->Torax->simbolo_col2_row7) @if($cita->Torax->simbolo_col2_row7=='1') checked @else @endif  @endisset  name="simbolo_col2_row7"  value="1">me
                      </label>
                  </td>
                  <td>
                      <label class="checkbox-inline" width="6.5%">
                          <input  type="checkbox" @isset($cita->Torax->simbolo_col2_row8) @if($cita->Torax->simbolo_col2_row8=='1') checked @else @endif  @endisset  name="simbolo_col2_row8"  value="1">pa
                      </label>
                  </td>
                  <td>
                      <label class="checkbox-inline" width="6.5%">
                          <input  type="checkbox" @isset($cita->Torax->simbolo_col2_row9) @if($cita->Torax->simbolo_col2_row9=='1') checked @else @endif  @endisset  name="simbolo_col2_row9"  value="1">pb
                      </label>
                  </td>
                  <td>
                      <label class="checkbox-inline" width="6.5%">
                          <input  type="checkbox" @isset($cita->Torax->simbolo_col2_row10) @if($cita->Torax->simbolo_col2_row10=='1') checked @else @endif  @endisset  name="simbolo_col2_row10"  value="1">pi
                      </label>
                  </td>
                  <td>
                      <label class="checkbox-inline" width="6.5%">
                          <input  type="checkbox" @isset($cita->Torax->simbolo_col2_row11) @if($cita->Torax->simbolo_col2_row11=='1') checked @else @endif  @endisset  name="simbolo_col2_row11"  value="1">px
                      </label>
                  </td>
                  <td>
                      <label class="checkbox-inline" width="6.5%">
                          <input  type="checkbox" @isset($cita->Torax->simbolo_col2_row12) @if($cita->Torax->simbolo_col2_row12=='1') checked @else @endif  @endisset  name="simbolo_col2_row12"  value="1">ra
                      </label>
                  </td>
                  <td>
                      <label class="checkbox-inline" width="6.5%">
                          <input  type="checkbox" @isset($cita->Torax->simbolo_col2_row13) @if($cita->Torax->simbolo_col2_row13=='1') checked @else @endif  @endisset   name="simbolo_col2_row13" value="1">rp
                      </label>
                  </td>
                  <td colspan="2">
                      <label class="checkbox-inline" width="6.5%">
                          <input  type="checkbox" @isset($cita->Torax->simbolo_col2_row14) @if($cita->Torax->simbolo_col2_row14)=='1') checked @else @endif  @endisset  name="simbolo_col2_row14"  value="1">tb
                      </label>
                  </td>

              </tr>
            </table>
          </div>


          <div class="col-lg-12">
              <h6> <strong>CONCLUSION</strong> </h6>
          </div>
          <div class="col-lg-12">
              <input type="text" class="form-control" @isset($cita->Torax->torax_conclusion) value="{{$cita->Torax->torax_conclusion}}" @endisset name="torax_conclusion">
          </div>
        </div>
      </div>
      <div id="menu1" class="tab-pane fade">
        <div class="col-lg-12">
            <h6> <strong>FORMATO ESTANDAR</strong> </h6>
        </div>
        <div class="row form-group">
          <div class="col-md-12">
            <div class="input-group ">
              <span class="input-group-addon span-width" style="border:none;">Vertices &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;</span>
              <input type="text" name="vertices" @isset($cita->Torax->vertices) value="{{$cita->Torax->vertices}}" @endisset class="form-control">
            </div>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-md-12">
            <div class="input-group ">
              <span class="input-group-addon span-width" style="border:none;">Campos Pulmonares</span>
              <input type="text" name="campos_pulmonares"  @isset($cita->Torax->campos_pulmonares) value="{{$cita->Torax->campos_pulmonares}}" @endisset class="form-control">
            </div>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-md-12">
            <div class="input-group ">
              <span class="input-group-addon span-width" style="border:none;">Hilos &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;&nbsp; &nbsp;  &nbsp;  &nbsp;</span>
              <input type="text" name="hilos" @isset($cita->Torax->hilos) value="{{$cita->Torax->hilos}}" @endisset  class="form-control">
            </div>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-md-12">
            <div class="input-group ">
              <span class="input-group-addon span-width" style="border:none;">Senos  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;&nbsp; &nbsp; &nbsp;</span>
              <input type="text" name="senos"  @isset($cita->Torax->senos) value="{{$cita->Torax->senos}}" @endisset class="form-control">
            </div>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-md-12">
            <div class="input-group ">
              <span class="input-group-addon span-width" style="border:none;">Mediastinos  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
              <input type="text" name="mediastinos" @isset($cita->Torax->mediastinos) value="{{$cita->Torax->mediastinos}}" @endisset class="form-control">
            </div>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-md-12">
            <div class="input-group ">
              <span class="input-group-addon span-width" style="border:none;">Silute Cardica  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;</span>
              <input type="text" name="siluete_cardiaca"  @isset($cita->Torax->siluete_cardiaca) value="{{$cita->Torax->siluete_cardiaca}}" @endisset  class="form-control">
            </div>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-md-12">
            <div class="input-group ">
              <span class="input-group-addon span-width" style="border:none;">Diafragma  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
              <input type="text" name="diafragma"  @isset($cita->Torax->diafragma) value="{{$cita->Torax->diafragma}}" @endisset  class="form-control">
            </div>
          </div>
        </div>
        <div class="col-lg-12">
            <h6> <strong>DATOS OPCIONALES</strong> </h6>
        </div>
        <div class="row form-group">
          <div class="col-md-12">
            <div class="input-group ">
              <span class="input-group-addon span-width" style="border:none;">Kb &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span>
              <input type="text" name="kb" @isset($cita->Torax->kb) value="{{$cita->Torax->kb}}" @endisset class="form-control">
            </div>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-md-12">
            <div class="input-group ">
              <span class="input-group-addon span-width" style="border:none;">Tiempo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span>
              <input type="text" name="tiempo" @isset($cita->Torax->tiempo) value="{{$cita->Torax->tiempo}}" @endisset class="form-control">
            </div>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-md-12">
            <div class="input-group ">
              <span class="input-group-addon span-width" style="border:none;">Amperaje &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp;</span>
              <input type="text" name="amperaje" @isset($cita->Torax->amperaje) value="{{$cita->Torax->amperaje}}" @endisset  class="form-control">
            </div>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-md-12">
            <div class="input-group ">
              <span class="input-group-addon span-width" style="border:none;">Diametro Ap Torax</span>
              <input type="text" name="diametro_torax" @isset($cita->Torax->diametro_torax) value="{{$cita->Torax->diametro_torax}}" @endisset  class="form-control">
            </div>
          </div>
        </div>
      </div>
    </div>

            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-right">
                      @isset($cita->Torax->id)
                        <button class="btn btn-sm btn-primary torax" tipo="torax_modificar" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDITAR</button>
                       @else
                        <button class="btn btn-sm btn-success torax" tipo="torax_guardar"  type="button">GUARDAR</button>
                      @endisset
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
<script>
var od1=1500;
$(document).ready(function() {
  $('#tomo_placa').select2({
    minimumResultsForSearch: 5,
  ajax: {
      dataType: 'json',
      url: window.location.protocol + "//" + window.location.host+'/personal/buscarpersonal',
      delay: 200,
      data: function(params) {
          return {
              term: params.term
          }
      },
      processResults: function (data, page) {
          return {
              results: data
          };
      }
  }
});

$('#leyo_placa').select2({
  minimumResultsForSearch: 5,
ajax: {
    dataType: 'json',
    url: window.location.protocol + "//" + window.location.host+'/personal/buscarpersonal',
    delay: 200,
    data: function(params) {
        return {
            term: params.term
        }
    },
    processResults: function (data, page) {
        return {
            results: data
        };
    }
}
});

});






</script>
