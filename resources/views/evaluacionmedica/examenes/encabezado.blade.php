<div class="modal-header">
    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> --}}

    <div class="row">
        <div class="col-md-6">
          <h4 class="modal-title">{{$listaExamen->descripcion}}</h4>
        </div>
        <div class="col-md-6 text-right">
          <a href="{{route('antecedentes.principal',$cita->id)}}">antecedentes</a>
        </div>
    </div>
    @isset($cita)
        <h5>{{$cita->paciente->apellido_paterno.' '.$cita->paciente->apellido_materno.' '.$cita->paciente->nombres}}</h5>
        <h5>{{'Edad: '.Carbon\Carbon::parse($cita->paciente->fecha_nacimiento)->age." años  |   Sexo: ".$cita->paciente->sexo." |  Puesto: ".$cita->paciente->ocupacion->nombre}}</h5>
    @endisset
</div>
