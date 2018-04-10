<div class="col-lg-12 col-md-12 col-sm-12">
    <table class="table table-responsive table-hover table-condensed small box" id="tabla">
        <thead>
        <th>PERFILES</th>
        <th>EXAMENES ASOCIADOS AL PERFIL</th>
        <th>OPCIONES</th>
        </thead>
        <tbody>
        @foreach($perfiles as $perfil)
            <tr>
                <td>{{$perfil->descripcion}}</td>

                <td>
                     <a href="{{route('perfil_examen.index',$perfil->id)}}" class="btn btn-xs btn-info "> LISTA DE EXAMENES</a>

                </td>

                 <td>
                   <button class="btn btn-xs btn-warning edit"  value="{{$perfil->id}}"><span class="glyphicon glyphicon-pencil"></span> EDITAR</button>
                    {{csrf_field()}}
                    {{--<a href="{{route('lote.reporte',$tipoinstruccion->id)}}" target="_blank" class="btn btn-xs btn-info "><span class="glyphicon glyphicon-print"></span> IMP.</a>--}}

                    <button href="#" class="btn btn-xs btn-danger delete"  id="{{$perfil->id}}"><span class="glyphicon glyphicon-remove"></span> ELIMINAR</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
