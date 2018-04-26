<div class="modal fade" tabindex="-1" role="dialog" id="modal-anexo7d">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form action="" id="" method="post">
            <div class="modal-body ">
                {{csrf_field()}}


                <div class="row ">
                  {{-- <div class="">

                  </div> --}}
                  <div class="col-md-8">

                    <table class="table table-responsive table-hover box">
                      <thead>
                        <th colspan="2">          El / La presente o ha presentado en los ultimos 6 meses: </th>
                      </thead>


                      <tbody class="">
                        <tr>
                            <td class=" "> Anemia </td>
                            <td class="" ><input type="checkbox" value=""></td>
                        </tr>
                        <tr>
                          <td class="">Cirugia mayor reciente </td>
                          <td class="" ><input type="checkbox" value=""></td>
                        </tr>
                        <tr>
                          <td class="">Desórdenes de la coagulación, trombosis, etc </td>
                          <td class="" ><input type="checkbox" value=""></td>
                        </tr>
                        <tr>
                          <td class=" "> Diabetes Mellitus </td>
                          <td class="" ><input type="checkbox" value=""></td>
                        </tr>
                        <tr>
                          <td class=" ">Hipertensión Arterial </td>
                          <td class="" ><input type="checkbox" value=""></td>
                        </tr>
                        <tr>
                          <td class=" ">Embarazo </td>
                          <td class="" ><input type="checkbox" value=""></td>
                        </tr>
                        <tr>
                          <td class=" "> Problemas neurológicos: epilepsia, vértigo, etc. </td>
                          <td class="" ><input type="checkbox" value=""></td>
                        </tr>
                        <tr>
                          <td class=" ">Infecciones recientes(especialmente oídos,naruz,graganta) </td>
                          <td class="" ><input type="checkbox" value=""></td>
                        </tr>
                        <tr>
                          <td class=" ">Obesidad Mórbida (IMC mayor a 35m/kg2) </td>
                          <td class="" ><input type="checkbox" value=""></td>
                        </tr>
                        <tr>
                          <td class=" ">Problemas Cardiacos: marcapasos, coronariopatia, etc </td>
                          <td class="" ><input type="checkbox" value=""></td>
                        </tr>
                        <tr>
                          <td class=" ">Problemas respiratorios: asma, EPOC, etc. </td>
                          <td class="" ><input type="checkbox" value=""></td>
                        </tr>
                        <tr>
                          <td class=" ">Problemas Oftalmologicos: retinopatis, glucoma, etc </td>
                          <td class="" ><input type="checkbox" value=""></td>
                        </tr>
                        <tr>
                          <td class=" ">Problemas Digestivos: úlcera péptica, hepatitis, etc. </td>
                          <td class="" ><input type="checkbox" value=""></td>
                        </tr>
                        <tr>
                          <td class=" ">Apnea del Sueño </td>
                          <td class="" ><input type="checkbox" value=""></td>
                        </tr>
                        <tr>
                          <td class=" ">Otra condición medica importante </td>
                          <td class="" ><input type="checkbox" value=""></td>
                        </tr>
                        <tr>
                          <td class=" ">Alergias</td>
                          <td class="" ><input type="checkbox" value=""></td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="form-group">

                        <input type="text" class="form-control"
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
                      <div class="row">
                    <div class="col-md-12">


                    </div>
                  </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                      <textarea class="form-control" rows="3" id="comment"placeholder="Observaciones" style="resize:none"></textarea>
                    </div>
                    <div class="col-md-4">
                      <h5><strong>CERTIFICO QUE EL O LA PACIENTE SE ENCUENTRA: </strong></h5>
                      <div class="checkbox text-center">
                             <label>
                               <input type="checkbox"> <strong style="color:red">APTITUD 7D</strong>
                             </label>
                      </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-right">
                        <a href="" class="btn btn-sm btn-success" data-dismiss="modal">GUARDAR</a>
                        <a href="" class="btn btn-sm btn-info" data-dismiss="modal">DIAGNOSTICO</a>

                        <a href="" class="btn btn-sm btn-warning" data-dismiss="modal">Volver</a>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
