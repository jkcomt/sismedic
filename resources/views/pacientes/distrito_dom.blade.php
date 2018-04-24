<div class="form-group">
    <select name="distritoDom" id="distritoDom" class="form-control distritoDom">
        <option value="">Seleccione Distrito</option>
        @if($distritos)
            @foreach($distritos as $key => $distrito)
                <option value="{{$key}}"
                        @isset($paciente)@if($paciente->distritoOrigen->id == $key) selected="selected" @endif @endisset>{{$distrito}}</option>
                {{--<option value="{{$key}}">{{$distrito}}</option>--}}
            @endforeach
        @endif
    </select>
</div>
