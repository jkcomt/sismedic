<div class="form-group" >
    <select name="provinciaDomicilio" id="provinciaDomicilio" class="form-control provinciaDomicilio" >
        <option value="">Seleccione Provincia</option>
        @if($provincias)
            @foreach($provincias as $key => $provincia)
                <option value="{{$key}}"
                        @isset($paciente)@if($paciente->provinciaDomicilio->id == $key) selected="selected" @endif @endisset>{{$provincia}}</option>
            @endforeach
        @endif
    </select>
</div>
