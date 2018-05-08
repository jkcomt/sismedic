<table class="table table-hover table-bordered table-condensed">
    <thead>
    <th>Med</th>
    <th>Examen</th>
    <th>Resultado</th>
    <th>Observaciones</th>
    <th>Fecha</th>
    <th>Opciones</th>
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
                @elseif(isset($cita->creatinina) && $citaExamen->perfilExamen->listaExamen->id == $cita->creatinina->lista_examen_id)
{{--                    <button type="button" idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" class="btn btn-xs btn-block btn-warning filtrarEditarExamen">EDITAR EXAMEN</button>--}}
                    <strong for="" class="text-success">Examen Realizado</strong>
                @elseif(isset($cita->glucosa) && $citaExamen->perfilExamen->listaExamen->id == $cita->glucosa->lista_examen_id)
{{--                    <button type="button" idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" class="btn btn-xs btn-block btn-warning filtrarEditarExamen">EDITAR EXAMEN</button>--}}
                    <strong for="" class="text-success">Examen Realizado</strong>
                @elseif(isset($cita->velocidadSedimentacion) && $citaExamen->perfilExamen->listaExamen->id == $cita->velocidadSedimentacion->lista_examen_id)
{{--                    <button type="button" idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" class="btn btn-xs btn-block btn-warning filtrarEditarExamen">EDITAR EXAMEN</button>--}}
                    <strong for="" class="text-success">Examen Realizado</strong>
                @elseif(isset($cita->acidoUrico) && $citaExamen->perfilExamen->listaExamen->id == $cita->acidoUrico->lista_examen_id)
{{--                    <button type="button" idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" class="btn btn-xs btn-block btn-warning filtrarEditarExamen">EDITAR EXAMEN</button>--}}
                    <strong for="" class="text-success">Examen Realizado</strong>
                @elseif(isset($cita->colesterolTotal) && $citaExamen->perfilExamen->listaExamen->id == $cita->colesterolTotal->lista_examen_id)
{{--                    <button type="button" idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" class="btn btn-xs btn-block btn-warning filtrarEditarExamen">EDITAR EXAMEN</button>--}}
                    <strong for="" class="text-success">Examen Realizado</strong>
                @elseif(isset($cita->colesterolLdl) && $citaExamen->perfilExamen->listaExamen->id == $cita->colesterolLdl->lista_examen_id)
{{--                    <button type="button" idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" class="btn btn-xs btn-block btn-warning filtrarEditarExamen">EDITAR EXAMEN</button>--}}
                    <strong for="" class="text-success">Examen Realizado</strong>
                @elseif(isset($cita->triglicerido) && $citaExamen->perfilExamen->listaExamen->id == $cita->triglicerido->lista_examen_id)
{{--                    <button type="button" idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" class="btn btn-xs btn-block btn-warning filtrarEditarExamen">EDITAR EXAMEN</button>--}}
                    <strong for="" class="text-success">Examen Realizado</strong>
                @elseif(isset($cita->gamma) && $citaExamen->perfilExamen->listaExamen->id == $cita->gamma->lista_examen_id)
{{--                    <button type="button" idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" class="btn btn-xs btn-block btn-warning filtrarEditarExamen">EDITAR EXAMEN</button>--}}
                    <strong for="" class="text-success">Examen Realizado</strong>
                @elseif(isset($cita->gamma) && $citaExamen->perfilExamen->listaExamen->id == $cita->gamma->lista_examen_id)
{{--                    <button type="button" idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" class="btn btn-xs btn-block btn-warning filtrarEditarExamen">EDITAR EXAMEN</button>--}}
                    <strong for="" class="text-success">Examen Realizado</strong>
                @elseif(isset($cita->sifilis) && $citaExamen->perfilExamen->listaExamen->id == $cita->sifilis->lista_examen_id)
                    {{--<button type="button" idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" class="btn btn-xs btn-block btn-warning filtrarEditarExamen">EDITAR EXAMEN</button>--}}
                    <strong for="" class="text-success">Examen Realizado</strong>
                @elseif(isset($cita->anexo7d) && $citaExamen->perfilExamen->listaExamen->id == $cita->anexo7d->lista_examen_id)
                    {{--<button type="button" idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" class="btn btn-xs btn-block btn-warning filtrarEditarExamen">EDITAR EXAMEN</button>--}}
                    <strong for="" class="text-success">Examen Realizado</strong>
                @elseif(isset($cita->electrocardiograma) && $citaExamen->perfilExamen->listaExamen->id == $cita->electrocardiograma->lista_examen_id)
                    {{--<button type="button" idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" class="btn btn-xs btn-block btn-warning filtrarEditarExamen">EDITAR EXAMEN</button>--}}
                    <strong for="" class="text-success">Examen Realizado</strong>
                @else
                    <button type="button" idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" class="btn btn-xs btn-block btn-primary filtrarExamen">REGISTRAR EXAMEN</button>

                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>