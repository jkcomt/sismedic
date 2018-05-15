

{{-- <h3>PERSONALES UNO</h3> --}}
<div class="col-md-12">
  <div class="row form-group">
    <div class="col-md-2">
    </div>
    <div class="col-md-4">
    </div>
    <div class="col-md-6 text-right">
      <button type="button" name="button" class="btn btn-sm btn-success">Guardar</button>
    </div>
  </div>


    <div class="box box-default">
        <div class="box-header with-border">  <h5> <strong> Hospitalización </strong> </h5>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse">
                    <i class="fa fa-plus"></i>
                </button>
            </div>
        </div>
        <div class="box-body">
            <div class="row col-md-12">

              <div class="row form-group">
              <form class="" id="antperhospitalizacion">
                @csrf
                  <div class="col-md-8">
                    <div class="input-group">
                      <input type="hidden" name="paciente_id" value="{{$cita->paciente->id}}">
                      <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;"> Motivo &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</span>
                      <input type="text" class="form-control" aria-label="..." name="hospitalizacion_descripcion">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="input-group ">
                      <span class="input-group-addon span-width" >Año Dx.</span>
                      <input type="text" class="form-control" aria-label="..." name="hospitalizacion_anio">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <button type="button" class="btn btn-success conformidadhospitalizacion" tipo="registrarhospitalizacion" ><span><i class="fa fa-plus" aria-hidden="true"></i></span></button>
                  </div>
                </form>
              </div>

              <div class="row form-group">
                <table class="table">
                   <thead>
                     <tr>
                       <th>Año</th>
                       <th>Motivo</th>
                       <th>Opciones</th>
                     </tr>
                   </thead>
                   <tbody>

                     @foreach($hospitalizaciones as $hospitalizacion)
                       @if($hospitalizacion['estado'])
                         <tr>
                              <td>{{$hospitalizacion['anio']}}</td>
                              <td>{{ $hospitalizacion['motivo']}}</td>
                            <td> <a href="#" class="btn-sm btn-danger conformidadhospitalizacion" id="antperdelete_hospitalizacion" tipo="eliminarhospitalizacion" valor="{{$hospitalizacion['id']}}"><i class="fa fa-ban" aria-hidden="true"></i> Eliminar</a> </td>
                         </tr>
                       @endif

                     @endforeach

                   </tbody>
                </table>
              </div>

            </div>
        </div>
    </div>


<form id="antperaccidtlaborales">

  @csrf
  <input type="hidden" name="paciente_id" value="{{$cita->paciente->id}}">
      <div class="box box-default">
          <div class="box-header with-border">    <h5> <strong> Accidentes Laborales </strong>  </h5>
              <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse">
                      <i class="fa fa-plus"></i>
                  </button>
              </div>
          </div>
          <div class="box-body">
              <div class="row col-md-12">

                <div class="row form-group">


                  <div class="col-md-8">
                    <div class="input-group">
                      <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Descripción &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</span>
                      <input type="text" class="form-control" aria-label="..." name="descripcion">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="input-group ">
                      <span class="input-group-addon span-width">Año Dx.</span>
                      <input type="text" class="form-control" aria-label="..." name="anio">
                    </div>
                  </div>
                  <div class="col-md-1">
                    <button type="button" class="btn btn-success conformidadlaboral" tipo="registrarlaboral" ><span><i class="fa fa-plus" aria-hidden="true"></i></span></button>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-md-8">
                    <div class="input-group ">
                      <span class="input-group-addon span-width" >Tratamiento Actual.</span>
                      <input type="text" class="form-control" aria-label="..." name="tratamiento_actual">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="input-group ">
                      <span class="input-group-addon">
                          <input type="checkbox" aria-label="" value="importancia patologica" name="importancia_patologica">
                      </span>
                      <span class="input-group-addon span-width">Importancia Patologica.</span>
                    </div>
                  </div>
                </div>
                </form>
                <div class="row form-group">
                  <table class="table">
                     <thead>
                       <tr>
                          <th>Año</th>
                         <th>Descripccion</th>
                         <th>Tratamiento Actual</th>
                         <th>Opciones</th>
                       </tr>
                     </thead>
                     <tbody>
                       @foreach ($laborales as $objeto)
                         @if($objeto['estado'])
                         <tr>
                           <td>{{$objeto['anio']}}</td>
                           <td>{{$objeto['descripcion']}}</td>
                           <td>{{$objeto['tratamiento_actual']}}</td>
                           <td> <a href="#" class="btn-sm btn-danger conformidadlaboral" id="antperdelete_laboral" tipo="eliminarlaboral" valor="{{$objeto['id']}}"><i class="fa fa-ban" aria-hidden="true"></i> Eliminar</a> </td>
                         </tr>
                          @endif
                       @endforeach

                     </tbody>
                  </table>
                </div>


              </div>
          </div>
      </div>




        <div class="box box-default">
            <div class="box-header with-border">Información de Paciente
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse">
                        <i class="fa fa-plus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <div class="row col-md-12">

      <form id="antperaccidtparticulares">
        @csrf
            <input type="hidden" name="paciente_id" value="{{$cita->paciente->id}}">
                  <div class="row form-group">
                    <hr>
                    <h5> <strong> Accidentes Particulares </strong>  </h5>
                    <div class="col-md-8">
                      <div class="input-group">
                        <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Descripción &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</span>
                        <input type="text" class="form-control" aria-label="..." name="descripcion" >
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="input-group ">
                        <span class="input-group-addon span-width">Año Dx.</span>
                        <input type="text" class="form-control" aria-label="..." name="anio" >
                      </div>
                    </div>
                    <div class="col-md-1">
                      <button type="button" class="btn btn-success  conformidadparticular" tipo="registrarparticular" ><span><i class="fa fa-plus" aria-hidden="true"></i></span></button>
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-md-8">
                      <div class="input-group ">
                        <span class="input-group-addon span-width">Tratamiento Actual.</span>
                        <input type="text" class="form-control" aria-label="..." name="tratamiento_actual" >
                      </div>
                    </div>
                  </div>
          </form>
                  <div class="row form-group">
                    <table class="table">
                       <thead>
                         <tr>
                           <th>Año</th>
                           <th>Descripccion</th>
                           <th>Tratamiento Actual</th>
                           <th>Opciones</th>
                         </tr>
                       </thead>
                       <tbody>
                         @foreach ($particulares as $particular)
                           @if($particular['estado'])
                           <tr>
                             <td>{{$particular['anio']}}</td>
                             <td>{{$particular['descripcion']}}</td>
                             <td>{{$particular['tratamiento_actual']}}</td>
                             <td> <a href="#" class="btn-sm btn-danger conformidadparticular" id="antperdelete_laboral" tipo="eliminarparticular" valor="{{$objeto['id']}}"><i class="fa fa-ban" aria-hidden="true"></i> Eliminar</a> </td>
                           </tr>
                           @endif
                         @endforeach
                       </tbody>
                    </table>
                  </div>


                </div>
            </div>
        </div>





</div>
