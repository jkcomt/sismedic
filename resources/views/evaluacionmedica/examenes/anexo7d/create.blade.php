<div class="modal fade" tabindex="-1" role="dialog" id="modal-anexo7d">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form action="{{route('anexo7d.store')}}" id="registrarAnexo7d" method="post">
                <input type="hidden" name="lista_examen_id" value="{{$listaExamen->id}}">
                <input type="hidden" name="cita_id" value="{{$cita->id}}">
            <div class="modal-body ">
                {{csrf_field()}}

                <div class="row ">
                  <div class="col-md-8">

                    <table class="table table-responsive table-hover box">
                      <thead>
                        <th colspan="2"> El / La presente o ha presentado en los ultimos 6 meses: </th>
                      </thead>

                      <tbody class="">
                        <tr>
                            <td class=""> Anemia </td>
                            <td class="" ><input type="checkbox" value="1" name="anemia"></td>
                        </tr>
                        <tr>
                          <td class="">Cirugia mayor reciente </td>
                          <td class="" ><input type="checkbox" value="1" name="cirugia_mayor"></td>
                        </tr>
                        <tr>
                          <td class="">Desórdenes de la coagulación, trombosis, etc </td>
                          <td class="" ><input type="checkbox" value="1" name="desordenes_coagulacion"></td>
                        </tr>
                        <tr>
                          <td class=" "> Diabetes Mellitus </td>
                          <td class="" ><input type="checkbox" value="1" name="diabetes_mellitus"></td>
                        </tr>
                        <tr>
                          <td class=" ">Hipertensión Arterial </td>
                          <td class="" ><input type="checkbox" value="1" name="hipertension_arterial"></td>
                        </tr>
                        <tr>
                          <td class=" ">Embarazo </td>
                          <td class="" ><input type="checkbox" value="1" name="embarazo"></td>
                        </tr>
                        <tr>
                          <td class=" "> Problemas neurológicos: epilepsia, vértigo, etc. </td>
                          <td class="" ><input type="checkbox" value="1" name="problemas_neurologicos"></td>
                        </tr>
                        <tr>
                          <td class=" ">Infecciones recientes(especialmente oídos,naruz,graganta) </td>
                          <td class="" ><input type="checkbox" value="1" name="infecciones_recientes"></td>
                        </tr>
                        <tr>
                          <td class=" ">Obesidad Mórbida (IMC mayor a 35m/kg2) </td>
                          <td class="" ><input type="checkbox" value="1" name="obesidad_morbida"></td>
                        </tr>
                        <tr>
                          <td class=" ">Problemas Cardiacos: marcapasos, coronariopatia, etc </td>
                          <td class="" ><input type="checkbox" value="1" name="problemas_cardiacos"></td>
                        </tr>
                        <tr>
                          <td class=" ">Problemas respiratorios: asma, EPOC, etc. </td>
                          <td class="" ><input type="checkbox" value="1" name="problemas_respiratorios"></td>
                        </tr>
                        <tr>
                          <td class=" ">Problemas Oftalmologicos: retinopatis, glucoma, etc </td>
                          <td class="" ><input type="checkbox" value="1" name="problemas_oftalmologicos"></td>
                        </tr>
                        <tr>
                          <td class=" ">Problemas Digestivos: úlcera péptica, hepatitis, etc. </td>
                          <td class="" ><input type="checkbox" value="1" name="problemas_digestivos"></td>
                        </tr>
                        <tr>
                          <td class=" ">Apnea del Sueño </td>
                          <td class="" ><input type="checkbox" value="1" name="apnea_sueno"></td>
                        </tr>
                        <tr>
                          <td class=" ">Otra condición medica importante </td>
                          <td class="" ><input type="checkbox" value="1" name="otra_condicion"></td>
                        </tr>
                        <tr>
                          <td class=" ">Alergias</td>
                          <td class="" ><input type="checkbox" value="1" name="alergias"></td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="form-group">

                        <input type="text" class="form-control" name="uso_medicacion"
                                 placeholder="Uso de Medicacion Actual">
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
                      <textarea class="form-control" rows="3" id="comment"placeholder="Observaciones" style="resize:none" name="observacion"></textarea>
                    </div>
                    <div class="col-md-4">
                      <h5><strong>CERTIFICO QUE EL O LA PACIENTE SE ENCUENTRA: </strong></h5>
                      <div class="checkbox text-center">
                             <label>
                               <input type="checkbox" name="aptitud_7d" value="1"> <strong style="color:red">APTITUD 7D</strong>
                             </label>
                      </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-right">
                        <button class="btn btn-sm btn-success registrarAnexo7d" type="button">GUARDAR</button>
                        <a href="" class="btn btn-sm btn-info" data-dismiss="modal">DIAGNOSTICO</a>

                        <a href="" class="btn btn-sm btn-warning" data-dismiss="modal">Volver</a>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
