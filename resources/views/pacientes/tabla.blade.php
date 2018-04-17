<div class="col-lg-12 col-md-12 col-sm-12">
    <table class="table table-responsive table-hover table-condensed small box">
        <thead>
        <th>HISTORIA</th>
        <th>PACIENTES</th>
        <th>DNI</th>
        <th>EDAD</th>
        <th>INFORMACIÓN</th>
        <th>OPCIONES</th>
        </thead>
        <tbody>
        @foreach($pacientes as $paciente)
            @if($paciente->estado)

            <tr>
                <td>{{$paciente->nro_historia}}</td>
                <td class="text-left">{{$paciente->apellido_paterno.' '.$paciente->apellido_materno.' '.$paciente->nombres}}</td>
                <td>{{$paciente->num_dni}}</td>
                <td>
                  {{Carbon\Carbon::parse($paciente->fecha_nacimiento)->age.' años'}}
                </td>
                <td>
                    <form action="{{route('pacientes.show',[$paciente->id])}}" method="get">
                        <button class="btn btn-xs btn-default"><span class="glyphicon glyphicon-info-sign"></span> DETALLE</button>
                    </form>
                </td>
                <td>
                    <a href="{{route('pacientes.citas',[$paciente->id])}}" class="btn btn-xs btn-success cita"  id="{{$paciente->id}}"><span class="glyphicon glyphicon-plus"></span> CITAS</a>
                    <a href="{{route('pacientes.edit',[$paciente->id])}}" class="btn btn-xs btn-warning editar"  id="{{$paciente->id}}"><span class="glyphicon glyphicon-pencil"></span> EDITAR</a>
                    {{csrf_field()}}
                    <a href="#" class="btn btn-xs btn-danger delete"  id="{{$paciente->id}}"><span class="glyphicon glyphicon-remove"></span> ELIMINAR</a>
                </td>
            </tr>
            @endif

        @endforeach
        </tbody>
    </table>
    {{$pacientes->links()}}
</div>
