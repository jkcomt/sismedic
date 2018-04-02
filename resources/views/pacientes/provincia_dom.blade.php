<div class="form-group" >
    <select name="provinciaDomicilio" id="provinciaDomicilio" class="form-control provinciaDomicilio" >
        {{--<input type="text" class=" form-control" name="personal" value="{{old('personal')}}">--}}
        @if($provincias)
            @foreach($provincias as $key => $provincia)
                <option value="{{$key}}">{{$provincia}}</option>
            @endforeach
        @endif
    </select>
</div>