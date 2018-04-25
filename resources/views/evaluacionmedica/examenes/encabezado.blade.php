<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title">{{$listaExamen->descripcion}}</h4>
    <hr>
    @isset($cita)
        <h4>{{$cita->paciente->apellido_paterno.' '.$cita->paciente->apellido_materno.' '.$cita->paciente->nombres}}</h4>
    @endisset
</div>