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
                <td>
                    <form action="{{route('pacientes.show',[$paciente->id])}}" method="get">
                        <button class="btn btn-xs btn-default"><span class="glyphicon glyphicon-info-sign"></span> DETALLE</button>
                    </form>
                </td>
                <td>
                    {{--<form action="{{route('pacientes.citas',[$paciente->id])}}" method="get">--}}
                        {{--<button class="btn btn-xs btn-success cita"><span class="glyphicon glyphicon-plus"></span> CITAS</button>--}}
                    {{--</form>--}}
                    <a href="{{route('pacientes.citas',[$paciente->id])}}" class="btn btn-xs btn-success cita"  id="{{$paciente->id}}"><span class="glyphicon glyphicon-plus"></span> CITAS</a>
                    {{--<form action="{{route('pacientes.edit',[$paciente->id])}}" class="form-group">--}}
                        {{--<button class="btn btn-xs btn-warning editar"><span class="glyphicon glyphicon-pencil"></span> EDITAR</button>--}}
                    {{--</form>--}}
                    <a href="{{route('pacientes.edit',[$paciente->id])}}" class="btn btn-xs btn-warning editar"  id="{{$paciente->id}}"><span class="glyphicon glyphicon-pencil"></span> EDITAR</a>
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