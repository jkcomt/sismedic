<div class="form-group">
    <select name="provinciaOrigen" id="provinciaOrigen" class="form-control provinciaOrigen">
        {{--<input type="text" class=" form-control" name="personal" value="{{old('personal')}}">--}}
        @if($provincias)
            @foreach($provincias as $key => $provincia)
                <option value="{{$key}}"
                 @isset($paciente)@if($paciente->provinciaOrigen->id == $key) selected="selected" @endif @endisset>{{$provincia}}</option>
            @endforeach
        @endif
    </select>
</div>