<div class="col-lg-12 col-md-12 col-sm-12">
    <table class="table table-responsive table-hover table-condensed small box" id="tabla">
        <thead>
          <th>Nro. CITA</th>
          <th>FECHA - HORA</th>
          <th>Nro. Historia</th>
          <th>DNI</th>
          <th>PACIENTE</th>
          <th>OPCIONES</th>
        </thead>
        <tbody>
          @foreach($citas as $cita)
           @if($cita->estado)
             <tr>
                <td>{{$cita->nro_serie_cita}}</td>
                <td>{{\Carbon\Carbon::parse($cita->fecha_examen)->format("d-m-Y").' - '.Carbon\Carbon::parse($cita->hora_examen)->format('h:i A')}}</td>
                <td>{{$cita->paciente->nro_historia}}</td>
                 <td>{{$cita->paciente->num_dni}}</td>
                 <td style="text-align:left">{{$cita->paciente->apellido_paterno.' '.$cita->paciente->apellido_materno.' '.$cita->paciente->nombres}}</td>
                 <td>
                     {{--<button class="btn btn-xs btn-warning edit"  value=""><span class="glyphicon glyphicon-pencil"></span> EDITAR</button>--}}
                     {{csrf_field()}}
                     <a href="{{route('citas.examenescliente',[$cita->id])}}" class="btn btn-xs btn-info editar" target="_blank" id=""><span class="glyphicon glyphicon-print"></span></a>
                     <a href="{{route('pacientes.citas.edit',[$cita->id])}}" class="btn btn-xs btn-warning editar"  id=""><span class="glyphicon glyphicon-pencil"></span> EDITAR</a>
                     <a href="#" class="btn btn-xs btn-danger delete"  id="{{$cita->id}}"><span class="glyphicon glyphicon-remove"></span> ELIMINAR</a>
                     @isset($cita->funcionVital)
                         {{--<button href="#" class="btn btn-xs btn-danger delete"  id=""><span class="glyphicon glyphicon-remove"></span> ELIMINAR</button>--}}
                         <a href="{{route('funcion_vital.show',$cita)}}" class="btn btn-xs btn-success"  id=""><span class="glyphicon glyphicon-info-sign"></span> DETALLE DE FUNCIONES VITALES</a>
                     @else
                         <a href="{{route('funcion_vital.create',$cita->id)}}" class="btn btn-xs btn-info"  id=""><span class="glyphicon glyphicon-info-sign"></span> REGISTRAR FUNCIONES VITALES</a>
                     @endisset

                     {{--<button href="#" class="btn btn-xs btn-danger delete"  id=""><span class="glyphicon glyphicon-remove"></span> ELIMINAR</button>--}}
                 </td>
             </tr>
           @endif
          @endforeach
        </tbody>
    </table>
{{$citas->links()}}
</div>
