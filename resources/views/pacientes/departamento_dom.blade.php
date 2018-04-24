<div class="form-group">
    <select name="departamentoDomicilio" id="departamentoDomicilio" class="form-control departamentoDomicilio">
        <option value="">Seleccione Departamento</option>
        @if($departamentos)
            @foreach($departamentos as $key => $departamento)
                <option value="{{$key}}"
                        @isset($paciente)@if($paciente->departamentoDomicilio->id == $key) selected="selected" @endif @endisset>{{$departamento}}</option>

            @endforeach
        @endif
    </select>
</div>
