<div class="form-group" >
    <select name="provinciaDomicilio" id="provinciaDomicilio" class="form-control provinciaDomicilio" >
        {{--<input type="text" class=" form-control" name="personal" value="{{old('personal')}}">--}}
        @if($provincias)
            @foreach($provincias as $key => $provincia)
                <option value="{{$key}}"
                        @isset($paciente)@if($paciente->provinciaDomicilio->id == $key) selected="selected" @endif @endisset>{{$provincia}}</option>
            @endforeach
        @endif
    </select>
</div>