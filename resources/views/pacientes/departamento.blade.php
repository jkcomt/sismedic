<div class="form-group" >
    <select name="departamentoOrigen" id="departamentoOrigen" class="form-control departamentoOrigen" >
        {{--<input type="text" class=" form-control" name="personal" value="{{old('personal')}}">--}}
        @if($departamentos)
            @foreach($departamentos as $key => $departamento)
            <option value="{{$key}}">{{$departamento}}</option>
            @endforeach
        @endif
    </select>
</div>