<div class="modal fade" tabindex="-1" role="dialog" id="modal-anexo7d">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form id="registrarAnexo7d">
                <input type="hidden" name="lista_examen_id" value="{{$listaExamen->id}}">
                <input type="hidden" name="cita_id" value="{{$cita->id}}">
            <div class="modal-body ">
                {{csrf_field()}}

                <div class="row ">
                  <div class="col-md-8">

                    @isset($cita->anexo7d->id)
                      <input type="hidden" name="anexo7d_id" value="{{$cita->anexo7d->id}}">
                    @endisset

                    <table class="table table-responsive table-hover box">
                      <thead>
                        <th colspan="2"> El / La presente o ha presentado en los ultimos 6 meses: </th>
                      </thead>

                      <tbody class="">
                        <tr>
                            <td class=""> Anemia </td>
                            <td class="" ><input type="checkbox" value="1" name="anemia" @isset($cita->anexo7d->anemia)    @if($cita->anexo7d->anemia=='1') checked @endif  @endisset ></td>
                        </tr>
                        <tr>
                          <td class="">Cirugia mayor reciente </td>
                          <td class="" ><input type="checkbox" value="1" name="cirugia_mayor" @isset($cita->anexo7d->cirugia_mayor_reciente)   @if($cita->anexo7d->cirugia_mayor_reciente=='1') checked @endif   @endisset  ></td>
                        </tr>
                        <tr>
                          <td class="">Desórdenes de la coagulación, trombosis, etc </td>
                          <td class="" ><input type="checkbox" value="1" name="desordenes_coagulacion" @isset($cita->anexo7d->desordenes_coagulacion)   @if($cita->anexo7d->desordenes_coagulacion=='1') checked @endif   @endisset ></td>
                        </tr>
                        <tr>
                          <td class=" "> Diabetes Mellitus </td>
                          <td class="" ><input type="checkbox" value="1" name="diabetes_mellitus" @isset($cita->anexo7d->diabetes_mellitus)   @if($cita->anexo7d->diabetes_mellitus=='1') checked @endif   @endisset ></td>
                        </tr>
                        <tr>
                          <td class=" ">Hipertensión Arterial </td>
                          <td class="" ><input type="checkbox" value="1" name="hipertension_arterial" @isset($cita->anexo7d->hipertension_arterial)   @if($cita->anexo7d->hipertension_arterial=='1') checked @endif   @endisset ></td>
                        </tr>
                        <tr>
                          <td class=" ">Embarazo </td>
                          <td class="" ><input type="checkbox" value="1" name="embarazo" @isset($cita->anexo7d->embarazo)   @if($cita->anexo7d->embarazo=='1') checked @endif   @endisset></td>
                        </tr>
                        <tr>
                          <td class=" "> Problemas neurológicos: epilepsia, vértigo, etc. </td>
                          <td class="" ><input type="checkbox" value="1" name="problemas_neurologicos" @isset($cita->anexo7d->problemas_neurologicos)   @if($cita->anexo7d->problemas_neurologicos=='1') checked @endif   @endisset></td>
                        </tr>
                        <tr>
                          <td class=" ">Infecciones recientes(especialmente oídos,naruz,graganta) </td>
                          <td class="" ><input type="checkbox" value="1" name="infecciones_recientes" @isset($cita->anexo7d->infecciones_recientes)   @if($cita->anexo7d->infecciones_recientes=='1') checked @endif   @endisset ></td>
                        </tr>
                        <tr>
                          <td class=" ">Obesidad Mórbida (IMC mayor a 35m/kg2) </td>
                          <td class="" ><input type="checkbox" value="1" name="obesidad_morbida" @isset($cita->anexo7d->obesidad_morbida)   @if($cita->anexo7d->obesidad_morbida=='1') checked @endif   @endisset ></td>
                        </tr>
                        <tr>
                          <td class=" ">Problemas Cardiacos: marcapasos, coronariopatia, etc </td>
                          <td class="" ><input type="checkbox" value="1" name="problemas_cardiacos" @isset($cita->anexo7d->problemas_cardiacos)   @if($cita->anexo7d->problemas_cardiacos=='1') checked @endif   @endisset ></td>
                        </tr>
                        <tr>
                          <td class=" ">Problemas respiratorios: asma, EPOC, etc. </td>
                          <td class="" ><input type="checkbox" value="1" name="problemas_respiratorios" @isset($cita->anexo7d->problemas_respiratorios)   @if($cita->anexo7d->problemas_respiratorios=='1') checked @endif   @endisset></td>
                        </tr>
                        <tr>
                          <td class=" ">Problemas Oftalmologicos: retinopatis, glucoma, etc </td>
                          <td class="" ><input type="checkbox" value="1" name="problemas_oftalmologicos" @isset($cita->anexo7d->problemas_oftalmologicos)   @if($cita->anexo7d->problemas_oftalmologicos=='1') checked @endif   @endisset ></td>
                        </tr>
                        <tr>
                          <td class=" ">Problemas Digestivos: úlcera péptica, hepatitis, etc. </td>
                          <td class="" ><input type="checkbox" value="1" name="problemas_digestivos" @isset($cita->anexo7d->problemas_digestivos)   @if($cita->anexo7d->problemas_digestivos=='1') checked @endif   @endisset ></td>
                        </tr>
                        <tr>
                          <td class=" ">Apnea del Sueño </td>
                          <td class="" ><input type="checkbox" value="1" name="apnea_sueno" @isset($cita->anexo7d->apnea_del_sueno)   @if($cita->anexo7d->apnea_del_sueno=='1') checked @endif   @endisset  ></td>
                        </tr>
                        <tr>
                          <td class=" ">Otra condición medica importante </td>
                          <td class="" ><input type="checkbox" value="1" name="otra_condicion" @isset($cita->anexo7d->otra_condicion)   @if($cita->anexo7d->otra_condicion=='1') checked @endif   @endisset ></td>
                        </tr>
                        <tr>
                          <td class=" ">Alergias</td>
                          <td class="" ><input type="checkbox" value="1" name="alergias" @isset($cita->anexo7d->alergias)   @if($cita->anexo7d->alergias=='1') checked @endif   @endisset  ></td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="form-group">

                        <input type="text" class="form-control" name="uso_medicacion"
                                 placeholder="Uso de Medicacion Actual" @isset($cita->anexo7d->uso_de_medicacion_actual) value="{{$cita->anexo7d->uso_de_medicacion_actual}}" @endisset>
                    </div>
                        {{-- <input type="text" class="form-control" placeholder="Observaciones"> --}}
                  </div>
                  <div class="col-md-4">
                      <div class="row">
                        <div class="col-md-12">
                          <a href="" class="btn btn-block btn-sm btn-primary " data-dismiss="modal">OBTENER DATOS</a>
                        </div>

                      </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                      <textarea class="form-control" rows="3" id="comment"placeholder="Observaciones" style="resize:none" name="observacion">


                      </textarea>
                    </div>
                    <div class="col-md-4">
                      <h5><strong>CERTIFICO QUE EL O LA PACIENTE SE ENCUENTRA: </strong></h5>
                      <div class="checkbox text-center">
                             <label>
                               <input type="checkbox" name="aptitud_7d" value="1"  @isset($cita->anexo7d->aptitud_7d)   @if($cita->anexo7d->anemia=='1') checked @endif   @endisset > <strong style="color:red">APTITUD 7D</strong>
                             </label>
                      </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-right">
                      @isset($cita->anexo7d->id)
                        <button class="btn btn-sm btn-primary  registrarAnexo7d" tipo="anexo7d_modificar" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDITAR</button>
                       @else
                        <button class="btn btn-sm btn-success registrarAnexo7d"  tipo="anexo7d_guardar" type="button">GUARDAR</button>
                      @endisset
                        <a href="" class="btn btn-sm btn-info" data-dismiss="modal">DIAGNOSTICO</a>

                        <a href="" class="btn btn-sm btn-warning" data-dismiss="modal">Volver</a>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
