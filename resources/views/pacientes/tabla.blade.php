<div class="col-lg-12 col-md-12 col-sm-12">
    <table class="table table-responsive table-hover table-condensed small box">
        <thead>
        <th>HISTORIA</th>
        <th>APELLIDOS</th>
        <th>NOMBRES</th>
        <th>INFORMACIÓN</th>
        <th>OPCIONES</th>
        </thead>
        <tbody>
        @foreach($pacientes as $paciente)
            <tr>
                <td>{{$paciente->nro_historia}}</td>
                <td>{{$paciente->apellido_paterno.' '.$paciente->apellido_materno}}</td>
                <td>{{$paciente->nombres}}</td>
                <td><a href="#" class="btn btn-xs btn-default detalle" value="{{$paciente->id}}"><span class="glyphicon glyphicon-info-sign"></span> DETALLE</a></td>
                <td>
                    <a href="#" class="btn btn-xs btn-success cita"  id="{{$paciente->id}}"><span class="glyphicon glyphicon-plus"></span> NUEVA CITA</a>
                    <a href="#" class="btn btn-xs btn-warning editar"  id="{{$paciente->id}}"><span class="glyphicon glyphicon-pencil"></span> EDITAR</a>
                    {{--<a href="{{route('lote.reporte',$lote->id)}}" target="_blank" class="btn btn-xs btn-info "><span class="glyphicon glyphicon-print"></span> IMP.</a>--}}
                    {{csrf_field()}}
                    <a href="#" class="btn btn-xs btn-danger delete"  id="{{$paciente->id}}"><span class="glyphicon glyphicon-remove"></span> ELIMINAR</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$pacientes->links()}}
</div>