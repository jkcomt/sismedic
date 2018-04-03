
<div class="form-group" >
    <select name="departamentoOrigen" id="departamentoOrigen" class="form-control departamentoOrigen" >
        {{--<input type="text" class=" form-control" name="personal" value="{{old('personal')}}">--}}
        @if($departamentos)
            @foreach($departamentos as $key => $departamento)
                    <option value="{{$key}}" @isset($paciente)@if($paciente->departamentoOrigen->id == $key) selected="selected" @endif @endisset>{{$departamento}}</option>

            @endforeach
        @endif
    </select>
</div>