<div class="col-lg-12 col-md-12 col-sm-12">
    <table class="table table-responsive table-hover table-condensed small box" id="tabla">
        <thead>
        <th>PERSONAL</th>
        <th>DNI</th>
        <th>CELULAR</th>
        <th>DIRECCION</th>
        <th>EMAIL</th>
        <th>OPCIONES</th>
        </thead>
        <tbody>
        @foreach($personales as $personal)
            <tr>
                       
                <td>{{$personal->nombres." ".$personal->apellidos}}</td>   
                <td>{{$personal->dni}}</td>
                <td>{{$personal->celular}}</td>
                <td>{{$personal->direccion}}</td>
                <td>{{$personal->email}}</td>     
                 <td>
                   <button class="btn btn-xs btn-warning edit"  value="{{$personal->id}}"><span class="glyphicon glyphicon-pencil"></span> EDITAR</button>
                    {{csrf_field()}}
                    {{--<a href="{{route('lote.reporte',$tipoinstruccion->id)}}" target="_blank" class="btn btn-xs btn-info "><span class="glyphicon glyphicon-print"></span> IMP.</a>--}}
                   
                    <button href="#" class="btn btn-xs btn-danger delete"  id="{{$personal->id}}"><span class="glyphicon glyphicon-remove"></span> ELIMINAR</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
{{$personales->links()}}
</div>