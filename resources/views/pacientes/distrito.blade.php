<div class="form-group">
    <select name="distritoOrigen" id="distritoOrigen" class="form-control distritoOrigen">
        {{--<input type="text" class=" form-control" name="personal" value="{{old('personal')}}">--}}

        @if($distritos)
            @foreach($distritos as $key => $distrito)
                <option value="{{$key}}"
                        @isset($paciente)@if($paciente->distritoOrigen->id == $key) selected="selected" @endif @endisset>{{$distrito}}</option>
                {{--<option value="{{$key}}">{{$distrito}}</option>--}}
            @endforeach
        @endif
    </select>
</div>