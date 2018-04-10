<div class="col-lg-12 col-md-12 col-sm-12">
    <table class="table table-responsive table-hover table-condensed small box" id="tabla">
        <thead>
        <th>INSTRUCCIONES</th>
        <th>OPCIONES</th>
        </thead>
        <tbody>
        @foreach($tipoinstrucciones as $tipoinstruccion)
            <tr>
                <td>{{ucfirst($tipoinstruccion->nombre)}}</td>
                 <td>
                   <button class="btn btn-xs btn-warning edit"  value="{{$tipoinstruccion->id}}"><span class="glyphicon glyphicon-pencil"></span> EDITAR</button>
                    {{csrf_field()}}
                    <button href="#" class="btn btn-xs btn-danger delete"  id="{{$tipoinstruccion->id}}"><span class="glyphicon glyphicon-remove"></span> ELIMINAR</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>