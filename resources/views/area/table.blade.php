<div class="col-lg-12 col-md-12 col-sm-12">
    <table class="table table-responsive table-hover table-condensed small box" id="tabla">
        <thead>
        <th>NOMBRE DEL AREA</th>
        <th>OPCIONES</th>
        </thead>
        <tbody>
        @foreach($areas as $area)
            <tr>
                <td>{{$area->nombre}}</td>    
                 <td>
                   <button class="btn btn-xs btn-warning edit"  value="{{$area->id}}"><span class="glyphicon glyphicon-pencil"></span> EDITAR</button>
                    {{csrf_field()}}
                    {{--<a href="{{route('lote.reporte',$tipoinstruccion->id)}}" target="_blank" class="btn btn-xs btn-info "><span class="glyphicon glyphicon-print"></span> IMP.</a>--}}
                   
                    <button href="#" class="btn btn-xs btn-danger delete"  id="{{$area->id}}"><span class="glyphicon glyphicon-remove"></span> ELIMINAR</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
{{$areas->links()}}
</div>