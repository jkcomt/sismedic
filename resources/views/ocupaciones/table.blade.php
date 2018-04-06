<div class="col-lg-12 col-md-12 col-sm-12">
    <table class="table table-responsive table-hover table-condensed small box" id="tabla">
        <thead>
        <th>INSTRUCCIONES</th>
        <th>OPCIONES</th>
        </thead>
        <tbody>
        @foreach($ocupaciones as $ocupacion)
            <tr>
                <td>{{$ocupacion->nombre}}</td>    
                 <td>
                   <button class="btn btn-xs btn-warning edit"  value="{{$ocupacion->id}}"><span class="glyphicon glyphicon-pencil"></span> EDIT.</button>
                    {{csrf_field()}}
                    {{--<a href="{{route('lote.reporte',$tipoinstruccion->id)}}" target="_blank" class="btn btn-xs btn-info "><span class="glyphicon glyphicon-print"></span> IMP.</a>--}}
                   
                    <button href="#" class="btn btn-xs btn-danger delete"  id="{{$ocupacion->id}}"><span class="glyphicon glyphicon-remove"></span> ELIM.</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>