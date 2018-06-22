<div class="col-lg-12 col-md-12 col-sm-12">
    <table class="table table-responsive table-hover table-condensed small box" id="tabla">
        <thead>
        <th>USUARIO</th>
        {{--<th>CARGO</th>--}}
        <th>PERSONAL</th>
        <th>OPCIONES</th>
        </thead>
        <tbody>
        @foreach($usuarios as $usuario)
            <tr>
                <td>{{$usuario->name}}</td>
                {{--<td>{{$usuario->cargo->descripcion}}</td>  --}}
                <td>{{$usuario->personal->apellidos.", ".$usuario->personal->nombres}}</td>
                 <td>
                     @if($usuario->name != "Admin")
                         {{-- <a href="{{route('usuario.permisos',[$usuario->id])}}" class="btn btn-xs btn-info cita"  id="{{$usuario->id}}"><span class="glyphicon glyphicon-lock"></span> PERMISOS</a> --}}
                         <button class="btn btn-xs btn-warning edit"  value="{{$usuario->id}}"><span class="glyphicon glyphicon-pencil"></span> EDITAR</button>
                         {{csrf_field()}}
                         {{--<a href="{{route('lote.reporte',$tipoinstruccion->id)}}" target="_blank" class="btn btn-xs btn-info "><span class="glyphicon glyphicon-print"></span> IMP.</a>--}}
                         <button href="#" class="btn btn-xs btn-danger delete"  id="{{$usuario->id}}"><span class="glyphicon glyphicon-remove"></span> ELIMINAR</button>
                     @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
{{$usuarios->links()}}
</div>
