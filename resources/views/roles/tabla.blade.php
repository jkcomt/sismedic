<div class="col-lg-12 col-md-12 col-sm-12">
    <table class="table table-responsive table-hover table-condensed small box" id="tabla">
        <thead>
        <th>ROL</th>
        {{--<th>CARGO</th>--}}
        {{--<th>PERSONAL</th>--}}
        <th>OPCIONES</th>
        </thead>
        <tbody>
        @foreach($roles as $rol)
            <tr>
                <td>{{$rol->name}}</td>
                {{--<td>{{$usuario->cargo->descripcion}}</td>  --}}
                {{--<td>{{$usuario->personal->apellidos.", ".$usuario->personal->nombres}}</td>--}}
                <td>
                    @if($rol->name != "Admin")
                        <a href="{{route('roles.permisos',[$rol->id])}}" class="btn btn-xs btn-info cita"  id="{{$rol->id}}"><span class="glyphicon glyphicon-lock"></span> PERMISOS</a>
                        <button class="btn btn-xs btn-warning edit"  value="{{$rol->id}}"><span class="glyphicon glyphicon-pencil"></span> EDITAR</button>
                        {{csrf_field()}}
                        {{--<a href="{{route('lote.reporte',$tipoinstruccion->id)}}" target="_blank" class="btn btn-xs btn-info "><span class="glyphicon glyphicon-print"></span> IMP.</a>--}}
                        <button href="#" class="btn btn-xs btn-danger delete"  id="{{$rol->id}}"><span class="glyphicon glyphicon-remove"></span> ELIMINAR</button>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$roles->links()}}
</div>
