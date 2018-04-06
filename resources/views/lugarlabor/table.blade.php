<div class="col-lg-12 col-md-12 col-sm-12">
    <table class="table table-responsive table-hover table-condensed small box" id="tabla">
        <thead>
        <th>Lugar Labor</th>
        <th>OPCIONES</th>
        </thead>
        <tbody>
        @foreach($lugares as $lugar)
            <tr>
                <td>{{$lugar->nombre}}</td>
                <!--td>
                    <form action="{{--route('pacientes.show',[$tipoinstruccion->id])--}}">
                        <button class="btn btn-xs btn-default"><span class="glyphicon glyphicon-info-sign"></span> DETALLE</button>
                    </form>
                </td-->
                <!--td>
                
                    <a href="#" class="btn btn-xs btn-success cita"  id="{{--$tipoinstruccion->id--}}"><span class="glyphicon glyphicon-plus"></span> NUEVA CITA</a>
                    {{--<form action="{{route('pacientes.edit',[$tipoinstruccion->id])}}" class="form-group">--}}
                        {{--<button class="btn btn-xs btn-warning editar"><span class="glyphicon glyphicon-pencil"></span> EDITAR</button>--}}
                    {{--</form>--}}
                    <a href="{{--route('tipoinstruccion.edit',[$tipoinstruccion->id])}}" class="btn btn-xs btn-warning editar"  id="{{$tipoinstruccion->id}}"><span class="glyphicon glyphicon-pencil"></span> EDITAR</a>
                    {{<a href="{{route('lote.reporte',$tipoinstruccion->id)}}" target="_blank" class="btn btn-xs btn-info "><span class="glyphicon glyphicon-print"></span> IMP.</a>--}}
                    {{--csrf_field()--}}
                    <a href="#" class="btn btn-xs btn-danger delete"  id="{{--$tipoinstruccion->id--}}"><span class="glyphicon glyphicon-remove"></span> ELIMINAR</a>

                </td-->
                 <td>
                   <button class="btn btn-xs btn-warning edit"  value="{{$lugar->id}}"><span class="glyphicon glyphicon-pencil"></span> EDIT.</button>
                    {{csrf_field()}}
                    {{--<a href="{{route('lote.reporte',$tipoinstruccion->id)}}" target="_blank" class="btn btn-xs btn-info "><span class="glyphicon glyphicon-print"></span> IMP.</a>--}}
                   
                    <button href="#" class="btn btn-xs btn-danger delete"  id="{{$lugar->id}}"><span class="glyphicon glyphicon-remove"></span> ELIM.</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>