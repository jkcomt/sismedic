<div class="col-lg-12 col-md-12 col-sm-12">
    <table class="table table-responsive table-hover table-condensed small box">
        <thead>
        <th>Nro. Cita</th>
        <th>FECHA - HORA</th>
        <th>ESTADO</th>
        <th>INFORMACIÓN</th>
        <th>OPCIONES</th>
        </thead>
        <tbody>
        @foreach($citas as $cita)
            <tr>
                <td>{{$cita->nro_serie_cita}}</td>
                <td>{{Carbon\Carbon::parse($cita->fecha_examen)->format("d-m-Y").' - '.Carbon\Carbon::parse($cita->hora_examen)->format('h:i A')}}</td>
                <td>{{ucfirst($cita->estado_cita)}}</td>
                <td>
                    <!--form action="">
                        <button class="btn btn-xs btn-default"><span class="glyphicon glyphicon-info-sign"></span> DETALLE</button>
                    </form-->
                    <a href="{{route('pacientes.citas.detailsCita',[$cita->id])}}" class="btn btn-xs btn-default"  id=""><span class="glyphicon glyphicon-info-sign"></span> DETALLE</a>
                </td>
                <td>
                  <a href="{{route('citas.examenescliente',[$cita->id])}}" class="btn btn-xs btn-info editar" target="_blank" id=""><span class="glyphicon glyphicon-print"></span></a>

                    <a href="{{route('pacientes.citas.edit',[$cita->id])}}" class="btn btn-xs btn-warning editar"  id=""><span class="glyphicon glyphicon-pencil"></span> EDITAR</a>
                    {{csrf_field()}}
                    <a href="#" class="btn btn-xs btn-danger delete"  id="{{$cita->id}}"><span class="glyphicon glyphicon-remove"></span> ELIMINAR</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$citas->links()}}
</div>
