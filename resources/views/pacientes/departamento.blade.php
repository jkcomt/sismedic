
<div class="form-group" >
    <select name="departamentoOrigen" id="departamentoOrigen" class="form-control departamentoOrigen" >
        <option value="">Seleccione Departamento</option>
        @if($departamentos)
            @foreach($departamentos as $key => $departamento)
                    <option value="{{$key}}" @isset($paciente)@if($paciente->departamentoOrigen->id == $key) selected="selected" @endif @endisset>{{$departamento}}</option>

            @endforeach
        @endif
    </select>
</div>
