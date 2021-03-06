<div class="row altura-md">
    @foreach($perfilesExamenes as $perfilesExamen)
        <div class="row item">
            <div class="col-md-8 borde-inferior ">{{$perfilesExamen->listaExamen->descripcion}} </div>
            <div class="col-md-1 text-center borde-inferior">{{$perfilesExamen->listaExamen->tipo}}</div>
            <div class="col-md-1 text-center borde-inferior">{{$perfilesExamen->listaExamen->valor}}</div>
            <div class="col-md-1 text-center borde-inferior">{{$perfilesExamen->listaExamen->dscto}}</div>
            @isset($cita)
                <div class="col-md-1 text-center borde-inferior">
                  <input type="checkbox" value="{{$perfilesExamen->id}}" style="margin-top:0px;" name="check"
                        @foreach($cita->citaExamen as $examen)
                            @if($examen->item_examen_id == $perfilesExamen->id)
                                 checked
                            @endif
                        @endforeach
                 disabled></div>
            @endisset
        </div>

    @endforeach
</div>
