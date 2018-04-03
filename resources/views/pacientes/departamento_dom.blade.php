<div class="form-group">
    <select name="departamentoDomicilio" id="departamentoDomicilio" class="form-control departamentoDomicilio">
        {{--<input type="text" class=" form-control" name="personal" value="{{old('personal')}}">--}}
        @if($departamentos)

            @foreach($departamentos as $key => $departamento)
                <option value="{{$key}}"
                        @isset($paciente)@if($paciente->departamentoDomicilio->id == $key) selected="selected" @endif @endisset>{{$departamento}}</option>

            @endforeach
        @endif
    </select>
</div>