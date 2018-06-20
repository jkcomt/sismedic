<div class="col-lg-12 col-md-12 col-sm-12">
    <table class="table table-responsive table-hover table-condensed small box" id="tabla">
        <thead>
        <th>NOMBRE DEL PERSONAL DE AUDIOMETRIA</th>
        <th>OPCIONES</th>
        </thead>
        <tbody>
        @foreach($encargados as $encargado)
            <tr>
                <td>{{$encargado->personal}}</td>
                 <td>
                   <button class="btn btn-xs btn-warning edit"  value="{{$encargado->id}}"><span class="glyphicon glyphicon-pencil"></span> EDITAR</button>
                    {{csrf_field()}}
                    <button href="#" class="btn btn-xs btn-danger delete"  id="{{$encargado->id}}"><span class="glyphicon glyphicon-remove"></span> ELIMINAR</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
{{$encargados->links()}}
</div>
