<div class="modal fade" tabindex="-1" role="dialog" id="modal-vision">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form  id="registrarvision">
            <div class="modal-body ">
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
                                  <option selected >Normal</option>
                              </select>
                            </td>
                          </tr>

                          <tr>
                            <td><strong>Discriminacion de Colores </strong> </td>
                            <td colspan="2">
                              <select class="form-control" name="discriminacion_colores">
                                  <option selected >Normal</option>
                              </select>
                            </td>
                          </tr>
                          <tr>
                            <td><strong>Vision de Profundidad </strong> </td>
                            <td colspan="2">
                              <select class="form-control" name="vision_profundidad">
                                  <option selected >Normal</option>
                              </select>
                            </td>
                          </tr>
                          <tr>
                            <td><strong>Vision Perimetral </strong> </td>
                            <td colspan="2">
                              <select class="form-control" name="vision_perimetral">
                                  <option selected >Normal</option>
                              </select>
                            </td>
                          </tr>
                          <tr>
                            <td><strong>Foria Vertical </strong> </td>
                            <td colspan="2">
                              <select class="form-control" name="foria_vertical">
                                  <option selected >Normal</option>
                              </select>
                            </td>
                          </tr>
                          <tr>
                            <td><strong>Foria Horizontal </strong> </td>
                            <td colspan="2">
                              <select class="form-control" name="foria_horizontal">
                                  <option selected >Normal</option>
                              </select>
                            </td>
                          </tr>
                          <tr>
                            <td><strong>Vision Nocturna </strong> </td>
                            <td colspan="2">
                              <select class="form-control" name="vision_nocturna">
                                  <option selected >Normal</option>
                              </select>
                            </td>
                          </tr>
                          <tr>
                            <td><strong>Vision Encandilada </strong> </td>
                            <td colspan="2">
                              <select class="form-control" name="vision_encandilada">
                                  <option selected >Normal</option>
                              </select>
                            </td>
                          </tr>
                          <tr>
                            <td><strong>Recuperacion de Encadenamiento</strong> </td>
                            <td colspan="2">
                              <select class="form-control" name="recuperacion_encandilamiento">
                                  <option selected >Normal</option>
                              </select>
                            </td>
                          </tr>
                      </tbody>
                    </table>
                  </div>

                </div>


            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-right">

              @isset($cita->vision->id)
               <button class="btn btn-sm btn-primary registrarvision" tipo="vision_modificar" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDITAR</button>
               @else
               <button class="btn btn-sm btn-success registrarvision" tipo="vision_guardar" type="button">GUARDAR</button>
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
