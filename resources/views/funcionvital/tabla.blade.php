<div class="col-lg-12 col-md-12 col-sm-12">
    <table class="table table-responsive table-hover table-condensed small box">
        <thead>
          <th>Nro. CITA</th>
          <th>FECHA - HORA</th>
          <th>Nro. HISTORIA</th>
          <th>DNI</th>
          <th>PACIENTE</th>
          <th>OPCIONES</th>
        </thead>
        <tbody>
        @isset($citas)
            @foreach($citas as $cita)
                <tr>
                  <td>{{$cita->nro_serie_cita}}</td>
                  <td>{{Carbon\Carbon::parse($cita->fecha_examen)->format("d-m-Y").' - '.Carbon\Carbon::parse($cita->hora_examen)->format('h:i A')}}</td>
                  <td>{{$cita->paciente->nro_historia}}</td>
                  <td>{{$cita->paciente->num_dni}}</td>
                  <td>{{$cita->paciente->apellido_paterno.' '.$cita->paciente->apellido_materno.' '.$cita->paciente->nombres}}</td>
                  <td>
                      {{--<button class="btn btn-xs btn-warning edit"  value=""><span class="glyphicon glyphicon-pencil"></span> EDITAR</button>--}}
                      {{csrf_field()}}
                      @isset($cita->funcionVital)
                      {{--<button href="#" class="btn btn-xs btn-danger delete"  id=""><span class="glyphicon glyphicon-remove"></span> ELIMINAR</button>--}}
                      <a href="{{route('funcion_vital.edit',[$cita->id])}}" class="btn btn-xs btn-warning editar"  id=""><span class="glyphicon glyphicon-pencil"></span> EDITAR</a>
                      <a href="#" class="btn btn-xs btn-danger conformidad" tipo="eliminar"  id="{{$cita->funcionVital->id}}" ><span class="glyphicon glyphicon-remove"></span> ELIMINAR</a>
                      <a href="{{route('funcion_vital.show',$cita)}}" class="btn btn-xs btn-success"  id=""><span class="glyphicon glyphicon-info-sign"></span> DETALLE DE FUNCIONES VITALES</a>
                      @else
                      <a href="{{route('funcion_vital.create',$cita->id)}}" class="btn btn-xs btn-info"  id=""><span class="glyphicon glyphicon-info-sign"></span> REGISTRAR FUNCIONES VITALES</a>
                      @endisset
                  </td>
                </tr>
            @endforeach
        @endisset
        </tbody>
    </table>
    {{$citas->links()}}
</div>
