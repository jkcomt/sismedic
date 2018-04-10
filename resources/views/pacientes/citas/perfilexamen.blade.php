<div class="row altura-md">

    @foreach($perfilesExamenes as $perfilesExamen)
        {{--@foreach($cita->citaExamen as $examen)--}}
            {{--<div class="row item">--}}
                {{--<div class="col-md-8 borde-inferior ">{{$perfilesExamen->listaExamen->descripcion}}</div>--}}
                {{--<div class="col-md-1 text-center borde-inferior">{{$perfilesExamen->listaExamen->tipo}}</div>--}}
                {{--<div class="col-md-1 text-center borde-inferior">{{$perfilesExamen->listaExamen->valor}}</div>--}}
                {{--<div class="col-md-1 text-center borde-inferior">{{$perfilesExamen->listaExamen->dscto}}</div>--}}
                {{--<div class="col-md-1 text-center borde-inferior"><input type="checkbox" value="{{$perfilesExamen->id}}" style="margin-top:0px;" name="check" @if($examen->item_examen_id == $perfilesExamen->id) checked @endif ></div>--}}
            {{--</div>--}}
        {{--@endforeach--}}
        {{--{{$cita->citaExamen}}--}}
        {{--{{$perfilesExamen->citaExamen->where('cita_id','=',$cita->id)->first()}}--}}

        <div class="row item">
            <div class="col-md-8 borde-inferior ">{{$perfilesExamen->listaExamen->descripcion}}</div>
            <div class="col-md-1 text-center borde-inferior">{{$perfilesExamen->listaExamen->tipo}}</div>
            <div class="col-md-1 text-center borde-inferior">{{$perfilesExamen->listaExamen->valor}}</div>
            <div class="col-md-1 text-center borde-inferior">{{$perfilesExamen->listaExamen->dscto}}</div>
            <div class="col-md-1 text-center borde-inferior"><input type="checkbox" value="{{$perfilesExamen->id}}" style="margin-top:0px;" name="check"></div>
        </div>

    @endforeach
</div>