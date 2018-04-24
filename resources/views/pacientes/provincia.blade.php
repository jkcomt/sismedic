<div class="form-group">
    <select name="provinciaOrigen" id="provinciaOrigen" class="form-control provinciaOrigen">
        <option value="">Seleccione Provincia</option>
        @if($provincias)
            @foreach($provincias as $key => $provincia)
                <option value="{{$key}}"
                 @isset($paciente)@if($paciente->provinciaOrigen->id == $key) selected="selected" @endif @endisset>{{$provincia}}</option>
            @endforeach
        @endif
    </select>
</div>
