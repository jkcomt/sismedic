<div class="col-lg-12 col-md-12 col-sm-12">
    <table class="table table-responsive table-hover table-condensed small box" id="tabla">
        <thead>
          <th>Nro. CITA</th>
          <th>PACIENTE</th>
          <th>FECHA - HORA</th>
          <th>OPCIONES</th>
        </thead>
        <tbody>
          @foreach($citas as $cita)
              <tr>
                  <td>{{$cita->nro_serie_cita}}</td>
                  <td>{{$cita->paciente->apellido_paterno.' '.$cita->paciente->apellido_materno.' '.$cita->paciente->nombres}}</td>
                  <td>{{$cita->fecha_examen.' - '.Carbon\Carbon::parse($cita->hora_examen)->format('h:i A')}}</td>
                  <td>
                      {{--<button class="btn btn-xs btn-warning edit"  value=""><span class="glyphicon glyphicon-pencil"></span> EDITAR</button>--}}
                      {{csrf_field()}}
                      <a href="{{route('funcion_vital.create',$cita->id)}}" class="btn btn-xs btn-info"  id=""><span class="glyphicon glyphicon-info-sign"></span> FUNCIONES VITALES</a>
                      {{--<button href="#" class="btn btn-xs btn-danger delete"  id=""><span class="glyphicon glyphicon-remove"></span> ELIMINAR</button>--}}
                  </td>
              </tr>
          @endforeach
        </tbody>
    </table>
{{$citas->links()}}
</div>
