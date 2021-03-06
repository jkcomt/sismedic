<div class="modal fade" tabindex="-1" role="dialog" id="modal-citas-lista">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Listado de Citas</h4>
            </div>
            {{--<form action="" id="listadoCitas" method="post">--}}
            <div class="modal-body ">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-12" style="max-height:60vh; overflow-y:scroll;">
                            <table class="table table-responsive table-hover table-condensed small box">
                                <thead>
                                <th>Nro. CITA</th>
                                <th>PACIENTE</th>
                                <th>FECHA - HORA</th>
                                <th>OPCIONES</th>
                                </thead>
                                <tbody>
                                @isset($citas)
                                @foreach($citas as $cita)
                                    <tr>
                                        <td>{{$cita->nro_serie_cita}}</td>
                                        <td>{{$cita->paciente->apellido_paterno.' '.$cita->paciente->apellido_materno.' '.$cita->paciente->nombres}}</td>
                                        <td>{{Carbon\Carbon::parse($cita->fecha_examen)->format("d-m-Y").' - '.Carbon\Carbon::parse($cita->hora_examen)->format('h:i A')}}</td>
                                        <td>
                                            {{csrf_field()}}
                                            {{--<a href="{{route('funcion_vital.create',$cita->id)}}" class="btn btn-xs btn-info"  id=""><span class="glyphicon glyphicon-info-sign"></span> FUNCIONES VITALES</a>--}}
                                            @isset($cita->funcionVital)
                                                {{--<button href="#" class="btn btn-xs btn-danger delete"  id=""><span class="glyphicon glyphicon-remove"></span> ELIMINAR</button>--}}
                                                <a href="{{route('funcion_vital.show',$cita)}}" class="btn btn-xs btn-success"  id=""><span class="glyphicon glyphicon-info-sign"></span> DETALLE DE FUNCIONES VITALES</a>
                                                @else
                                                <a href="{{route('funcion_vital.create',$cita->id)}}" class="btn btn-xs btn-info"  id=""><span class="glyphicon glyphicon-info-sign"></span> REGISTRAR FUNCIONES VITALES</a>
                                            @endisset
                                        </td>
                                    </tr>
                                @endforeach
                                @endisset
                                </tbody>
                            </table>

                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-right">
                        <a href="" class="btn btn-warning" data-dismiss="modal">Volver</a>
                    </div>
                </div>
            </div>
            {{--</form>--}}
        </div>
    </div>
</div>
