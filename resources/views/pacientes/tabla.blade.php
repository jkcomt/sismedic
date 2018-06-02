<div class="col-lg-12 col-md-12 col-sm-12">
    <table class="table table-responsive table-hover table-condensed small box">
        <thead>
        <th>HISTORIA</th>
        <th>PACIENTES</th>
        <th>DNI</th>
        <th>EDAD</th>
        @can('pacientes.show')
        <th>INFORMACIÓN</th>
        @endcan
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
                @can('pacientes.show')
                <td>

                        <form action="{{route('pacientes.show',[$paciente->id])}}" method="get">
                            <button class="btn btn-xs btn-default"><span class="glyphicon glyphicon-info-sign"></span> DETALLE</button>
                        </form>
                </td>
                @endcan
                <td>
                    @can('pacientes.reporte')
                    <a href="{{route('pacientes.reporte',$paciente->id)}}" target="_blank" class="btn btn-xs btn-info "><span class="glyphicon glyphicon-print"></span> IMP.</a>
                    @endcan
                    @can('pacientes.citas')
                    <a href="{{route('pacientes.citas',[$paciente->id])}}" class="btn btn-xs btn-success cita"  id="{{$paciente->id}}"><span class="glyphicon glyphicon-plus"></span> CITAS</a>
                    @endcan

                    @can('pacientes.edit')
                    <a href="{{route('pacientes.edit',[$paciente->id])}}" class="btn btn-xs btn-warning editar"  id="{{$paciente->id}}"><span class="glyphicon glyphicon-pencil"></span> EDITAR</a>
                    @endcan
                    {{csrf_field()}}

                    @can('pacientes.destroy')
                        <a href="#" class="btn btn-xs btn-danger delete"  id="{{$paciente->id}}"><span class="glyphicon glyphicon-remove"></span> ELIMINAR</a>
                        @else
                    @endcan

                </td>
            </tr>
            @endif

        @endforeach
        </tbody>
    </table>
    {{$pacientes->links()}}
</div>
