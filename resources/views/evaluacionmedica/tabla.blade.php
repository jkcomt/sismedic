<div class="col-lg-12 col-md-12 col-sm-12">
    <table class="table table-responsive table-hover table-condensed small box" id="tabla">
        <thead>
        <th>Nro. CITA</th>
        <th>Nro. HISTORIA</th>
        <th>PACIENTE</th>
        <th>FECHA - HORA</th>
        <th>OPCIONES</th>
        </thead>
        <tbody>
        @foreach($citas as $cita)
            <tr>
                <td>{{$cita->nro_serie_cita}}</td>
                <td>{{$cita->paciente->nro_historia}}</td>
                <td class="text-left">{{$cita->paciente->apellido_paterno.' '.$cita->paciente->apellido_materno.' '.$cita->paciente->nombres}}</td>
                <td>{{Carbon\Carbon::parse($cita->fecha_examen)->format("d-m-Y").' - '.Carbon\Carbon::parse($cita->hora_examen)->format('h:i A')}}</td>
                <td>
                    {{--<button class="btn btn-xs btn-warning edit"  value=""><span class="glyphicon glyphicon-pencil"></span> EDITAR</button>--}}
                    {{csrf_field()}}
                    <a href="{{route('evaluacion_medica.create',$cita->id)}}" class="btn btn-xs btn-success"  id=""><span class="fa fa-plus"></span> EVALUACION MÉDICA</a>
                    {{--<button href="#" class="btn btn-xs btn-danger delete"  id=""><span class="glyphicon glyphicon-remove"></span> ELIMINAR</button>--}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$citas->links()}}
</div>
