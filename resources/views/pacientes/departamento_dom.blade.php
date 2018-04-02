<div class="form-group" >
    <select name="departamentoDomicilio" id="departamentoDomicilio" class="form-control departamentoDomicilio" >
        {{--<input type="text" class=" form-control" name="personal" value="{{old('personal')}}">--}}
        @if($departamentos)
            @foreach($departamentos as $key => $departamento)
                <option value="{{$key}}">{{$departamento}}</option>
            @endforeach
        @endif
    </select>
</div>