<table class="table table-hover table-bordered table-condensed">
    <thead>
    <th>Med</th>
    <th>Examen</th>
    <th>Resultado</th>
    <th>Observaciones</th>
    <th>Fecha</th>
    <th class="text-center">Opciones</th>
    </thead>
    <tbody>
    @foreach($cita->citaExamen as $citaExamen)
        <tr class="text-danger">
            <td></td>
            <td>{{$citaExamen->perfilExamen->listaExamen->descripcion}}</td>
            <td></td>
            <td></td>
            <td>{{Carbon\Carbon::parse($cita->fecha_examen)->format('m - y')}}</td>
            <td class="text-center">
                @if(isset($cita->colesterolHdl) && $citaExamen->perfilExamen->listaExamen->id == $cita->colesterolHdl->lista_examen_id)
{{--                    <button type="button" idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" class="btn btn-xs btn-block btn-warning filtrarEditarExamen">EDITAR EXAMEN</button>--}}
                    <strong for="" class="text-success">Examen Realizado</strong>
                    {{-- <a href="{{route('velocidad_sedimentacion.reporte',[$cita->id])}}"  target="_blank" class="btn-sm btn-info"> <i class="fa fa-print" aria-hidden="true"></i></a> --}}
                    <a href="#" class="btn-sm btn-warning modificarExamen"  idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" valor=" {{$citaExamen->perfilExamen->listaExamen->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                @elseif(isset($cita->creatinina) && $citaExamen->perfilExamen->listaExamen->id == $cita->creatinina->lista_examen_id)
{{--                    <button type="button" idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" class="btn btn-xs btn-block btn-warning filtrarEditarExamen">EDITAR EXAMEN</button>--}}
                    <strong for="" class="text-success">Examen Realizado</strong>
                    {{-- <a href="{{route('velocidad_sedimentacion.reporte',[$cita->id])}}"  target="_blank" class="btn-sm btn-info"> <i class="fa fa-print" aria-hidden="true"></i></a> --}}
                    <a href="#" class="btn-sm btn-warning modificarExamen"  idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" valor=" {{$citaExamen->perfilExamen->listaExamen->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    {{-- <a href="#" class="btn-sm btn-danger"><i class="fa fa-ban" aria-hidden="true"></i></a> --}}
                @elseif(isset($cita->glucosa) && $citaExamen->perfilExamen->listaExamen->id == $cita->glucosa->lista_examen_id)
{{--                    <button type="button" idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" class="btn btn-xs btn-block btn-warning filtrarEditarExamen">EDITAR EXAMEN</button>--}}
                    <strong for="" class="text-success">Examen Realizado</strong>
                    {{-- <a href="{{route('velocidad_sedimentacion.reporte',[$cita->id])}}"  target="_blank" class="btn-sm btn-info"> <i class="fa fa-print" aria-hidden="true"></i></a> --}}
                    <a href="#" class="btn-sm btn-warning modificarExamen"  idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" valor=" {{$citaExamen->perfilExamen->listaExamen->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    {{-- <a href="#" class="btn-sm btn-danger"><i class="fa fa-ban" aria-hidden="true"></i></a> --}}
                @elseif(isset($cita->velocidadSedimentacion) && $citaExamen->perfilExamen->listaExamen->id == $cita->velocidadSedimentacion->lista_examen_id)
                   {{-- <button type="button" idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" class="btn btn-xs btn-block btn-warning filtrarEditarExamen">EDITAR EXAMEN</button> --}}
                    <strong for="" class="text-success">Examen Realizado &nbsp</strong>
                    {{-- <a href="{{route('velocidad_sedimentacion.reporte',[$cita->id])}}"  target="_blank" class="btn-sm btn-info"> <i class="fa fa-print" aria-hidden="true"></i></a> --}}
                    <a href="#" class="btn-sm btn-warning modificarExamen"  idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" valor=" {{$citaExamen->perfilExamen->listaExamen->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    {{-- <a href="#" class="btn-sm btn-danger"><i class="fa fa-ban" aria-hidden="true"></i></a> --}}
                @elseif(isset($cita->acidoUrico) && $citaExamen->perfilExamen->listaExamen->id == $cita->acidoUrico->lista_examen_id)
{{--                    <button type="button" idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" class="btn btn-xs btn-block btn-warning filtrarEditarExamen">EDITAR EXAMEN</button>--}}
                    <strong for="" class="text-success">Examen Realizado</strong>
                    {{-- <a href="{{route('velocidad_sedimentacion.reporte',[$cita->id])}}"  target="_blank" class="btn-sm btn-info"> <i class="fa fa-print" aria-hidden="true"></i></a> --}}
                    <a href="#" class="btn-sm btn-warning modificarExamen"  idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" valor=" {{$citaExamen->perfilExamen->listaExamen->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    {{-- <a href="#" class="btn-sm btn-danger"><i class="fa fa-ban" aria-hidden="true"></i></a> --}}
                @elseif(isset($cita->colesterolTotal) && $citaExamen->perfilExamen->listaExamen->id == $cita->colesterolTotal->lista_examen_id)
{{--                    <button type="button" idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" class="btn btn-xs btn-block btn-warning filtrarEditarExamen">EDITAR EXAMEN</button>--}}
                    <strong for="" class="text-success">Examen Realizado</strong>
                    {{-- <a href="{{route('velocidad_sedimentacion.reporte',[$cita->id])}}"  target="_blank" class="btn-sm btn-info"> <i class="fa fa-print" aria-hidden="true"></i></a> --}}
                    <a href="#" class="btn-sm btn-warning modificarExamen"  idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" valor=" {{$citaExamen->perfilExamen->listaExamen->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    {{-- <a href="#" class="btn-sm btn-danger"><i class="fa fa-ban" aria-hidden="true"></i></a> --}}
                @elseif(isset($cita->colesterolLdl) && $citaExamen->perfilExamen->listaExamen->id == $cita->colesterolLdl->lista_examen_id)
{{--                    <button type="button" idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" class="btn btn-xs btn-block btn-warning filtrarEditarExamen">EDITAR EXAMEN</button>--}}
                    <strong for="" class="text-success">Examen Realizado</strong>
                    {{-- <a href="{{route('velocidad_sedimentacion.reporte',[$cita->id])}}"  target="_blank" class="btn-sm btn-info"> <i class="fa fa-print" aria-hidden="true"></i></a> --}}
                    <a href="#" class="btn-sm btn-warning modificarExamen"  idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" valor=" {{$citaExamen->perfilExamen->listaExamen->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                @elseif(isset($cita->triglicerido) && $citaExamen->perfilExamen->listaExamen->id == $cita->triglicerido->lista_examen_id)
{{--                    <button type="button" idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" class="btn btn-xs btn-block btn-warning filtrarEditarExamen">EDITAR EXAMEN</button>--}}
                    <strong for="" class="text-success">Examen Realizado</strong>
                    {{-- <a href="{{route('velocidad_sedimentacion.reporte',[$cita->id])}}"  target="_blank" class="btn-sm btn-info"> <i class="fa fa-print" aria-hidden="true"></i></a> --}}
                    <a href="#" class="btn-sm btn-warning modificarExamen"  idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" valor=" {{$citaExamen->perfilExamen->listaExamen->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    {{-- <a href="#" class="btn-sm btn-danger"><i class="fa fa-ban" aria-hidden="true"></i></a> --}}
                @elseif(isset($cita->gamma) && $citaExamen->perfilExamen->listaExamen->id == $cita->gamma->lista_examen_id)
{{--                    <button type="button" idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" class="btn btn-xs btn-block btn-warning filtrarEditarExamen">EDITAR EXAMEN</button>--}}
                    <strong for="" class="text-success">Examen Realizado</strong>
                    {{-- <a href="{{route('velocidad_sedimentacion.reporte',[$cita->id])}}"  target="_blank" class="btn-sm btn-info"> <i class="fa fa-print" aria-hidden="true"></i></a> --}}
                    <a href="#" class="btn-sm btn-warning modificarExamen"  idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" valor=" {{$citaExamen->perfilExamen->listaExamen->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                {{-- @elseif(isset($cita->gamma) && $citaExamen->perfilExamen->listaExamen->id == $cita->gamma->lista_examen_id) --}}
{{--                    <button type="button" idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" class="btn btn-xs btn-block btn-warning filtrarEditarExamen">EDITAR EXAMEN</button>--}}
                    {{-- <strong for="" class="text-success">Examen Realizado</strong> --}}
                @elseif(isset($cita->sifilis) && $citaExamen->perfilExamen->listaExamen->id == $cita->sifilis->lista_examen_id)
                    {{--<button type="button" idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" class="btn btn-xs btn-block btn-warning filtrarEditarExamen">EDITAR EXAMEN</button>--}}
                    <strong for="" class="text-success">Examen Realizado</strong>
                    {{-- <a href="{{route('velocidad_sedimentacion.reporte',[$cita->id])}}"  target="_blank" class="btn-sm btn-info"> <i class="fa fa-print" aria-hidden="true"></i></a> --}}
                    <a href="#" class="btn-sm btn-warning modificarExamen"  idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" valor=" {{$citaExamen->perfilExamen->listaExamen->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                @elseif(isset($cita->anexo7d) && $citaExamen->perfilExamen->listaExamen->id == $cita->anexo7d->lista_examen_id)
                    {{--<button type="button" idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" class="btn btn-xs btn-block btn-warning filtrarEditarExamen">EDITAR EXAMEN</button>--}}
                    <strong for="" class="text-success">Examen Realizado</strong>
                    {{-- <a href="{{route('velocidad_sedimentacion.reporte',[$cita->id])}}"  target="_blank" class="btn-sm btn-info"> <i class="fa fa-print" aria-hidden="true"></i></a> --}}
                    <a href="#" class="btn-sm btn-warning modificarExamen"  idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" valor=" {{$citaExamen->perfilExamen->listaExamen->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    {{-- <a href="#" class="btn-sm btn-danger"><i class="fa fa-ban" aria-hidden="true"></i></a> --}}

                @elseif(isset($cita->electrocardiograma) && $citaExamen->perfilExamen->listaExamen->id == $cita->electrocardiograma->lista_examen_id)
                    {{--<button type="button" idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" class="btn btn-xs btn-block btn-warning filtrarEditarExamen">EDITAR EXAMEN</button>--}}
                    <strong for="" class="text-success">Examen Realizado</strong>
                    {{-- <a href="{{route('velocidad_sedimentacion.reporte',[$cita->id])}}"  target="_blank" class="btn-sm btn-info"> <i class="fa fa-print" aria-hidden="true"></i></a> --}}
                    <a href="#" class="btn-sm btn-warning modificarExamen"  idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" valor=" {{$citaExamen->perfilExamen->listaExamen->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    {{-- <a href="#" class="btn-sm btn-danger"><i class="fa fa-ban" aria-hidden="true"></i></a> --}}

                @elseif(isset($cita->hemograma) && $citaExamen->perfilExamen->listaExamen->id == $cita->hemograma->lista_examen_id)
                    {{--<button type="button" idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" class="btn btn-xs btn-block btn-warning filtrarEditarExamen">EDITAR EXAMEN</button>--}}
                    <strong for="" class="text-success">Examen Realizado</strong>
                    {{-- <a href="{{route('velocidad_sedimentacion.reporte',[$cita->id])}}"  target="_blank" class="btn-sm btn-info"> <i class="fa fa-print" aria-hidden="true"></i></a> --}}
                    <a href="#" class="btn-sm btn-warning modificarExamen"  idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" valor=" {{$citaExamen->perfilExamen->listaExamen->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    {{-- <a href="#" class="btn-sm btn-danger"><i class="fa fa-ban" aria-hidden="true"></i></a> --}}
                  @elseif(isset($cita->vision) && $citaExamen->perfilExamen->listaExamen->id == $cita->vision->lista_examen_id)
                      {{--<button type="button" idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" class="btn btn-xs btn-block btn-warning filtrarEditarExamen">EDITAR EXAMEN</button>--}}
                      <strong for="" class="text-success">Examen Realizado</strong>
                      {{-- <a href="{{route('velocidad_sedimentacion.reporte',[$cita->id])}}"  target="_blank" class="btn-sm btn-info"> <i class="fa fa-print" aria-hidden="true"></i></a> --}}
                      <a href="#" class="btn-sm btn-warning modificarExamen"  idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" valor=" {{$citaExamen->perfilExamen->listaExamen->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                @elseif(isset($cita->orinas) && $citaExamen->perfilExamen->listaExamen->id == $cita->orinas->lista_examen_id)
                    {{--<button type="button" idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" class="btn btn-xs btn-block btn-warning filtrarEditarExamen">EDITAR EXAMEN</button>--}}
                    <strong for="" class="text-success">Examen Realizado</strong>
                    {{-- <a href="{{route('velocidad_sedimentacion.reporte',[$cita->id])}}"  target="_blank" class="btn-sm btn-info"> <i class="fa fa-print" aria-hidden="true"></i></a> --}}
                    <a href="#" class="btn-sm btn-warning modificarExamen"  idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" valor=" {{$citaExamen->perfilExamen->listaExamen->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

              @elseif(isset($cita->sudicienciatrabajoaltura) && $citaExamen->perfilExamen->listaExamen->id == $cita->sudicienciatrabajoaltura->lista_examen_id)
                  {{--<button type="button" idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" class="btn btn-xs btn-block btn-warning filtrarEditarExamen">EDITAR EXAMEN</button>--}}
                  <strong for="" class="text-success">Examen Realizado</strong>
                  {{-- <a href="{{route('velocidad_sedimentacion.reporte',[$cita->id])}}"  target="_blank" class="btn-sm btn-info"> <i class="fa fa-print" aria-hidden="true"></i></a> --}}
                  <a href="#" class="btn-sm btn-warning modificarExamen"  idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" valor=" {{$citaExamen->perfilExamen->listaExamen->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                @elseif(isset($cita->conductoroperador) && $citaExamen->perfilExamen->listaExamen->id == $cita->conductoroperador->lista_examen_id)
                    {{--<button type="button" idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" class="btn btn-xs btn-block btn-warning filtrarEditarExamen">EDITAR EXAMEN</button>--}}
                    <strong for="" class="text-success">Examen Realizado</strong>
                    {{-- <a href="{{route('velocidad_sedimentacion.reporte',[$cita->id])}}"  target="_blank" class="btn-sm btn-info"> <i class="fa fa-print" aria-hidden="true"></i></a> --}}
                    <a href="#" class="btn-sm btn-warning modificarExamen"  idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" valor=" {{$citaExamen->perfilExamen->listaExamen->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                  @elseif(isset($cita->conduccionvehiculo) && $citaExamen->perfilExamen->listaExamen->id == $cita->conduccionvehiculo->lista_examen_id)
                      {{--<button type="button" idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" class="btn btn-xs btn-block btn-warning filtrarEditarExamen">EDITAR EXAMEN</button>--}}
                      <strong for="" class="text-success">Examen Realizado</strong>
                      {{-- <a href="{{route('velocidad_sedimentacion.reporte',[$cita->id])}}"  target="_blank" class="btn-sm btn-info"> <i class="fa fa-print" aria-hidden="true"></i></a> --}}
                      <a href="#" class="btn-sm btn-warning modificarExamen"  idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" valor=" {{$citaExamen->perfilExamen->listaExamen->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                @elseif(isset($cita->custionarionordico) && $citaExamen->perfilExamen->listaExamen->id == $cita->custionarionordico->lista_examen_id)
                  {{--<button type="button" idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" class="btn btn-xs btn-block btn-warning filtrarEditarExamen">EDITAR EXAMEN</button>--}}
                  <strong for="" class="text-success">Examen Realizado</strong>
                  {{-- <a href="{{route('velocidad_sedimentacion.reporte',[$cita->id])}}"  target="_blank" class="btn-sm btn-info"> <i class="fa fa-print" aria-hidden="true"></i></a> --}}
                  <a href="#" class="btn-sm btn-warning modificarExamen"  idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" valor=" {{$citaExamen->perfilExamen->listaExamen->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>



                @else
                    <button type="button" idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" class="btn btn-xs btn-block btn-primary filtrarExamen">REGISTRAR EXAMEN {{--$citaExamen->perfilExamen->listaExamen->id--}}</button>

                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
