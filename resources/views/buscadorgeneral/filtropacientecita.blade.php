<div class="row form-group">
    <div class="col-md-12">
        <div class="form-inline text-left">
            {{--<div class="form-group">--}}
                {{--<label for="tipoBusqueda">Búsqueda por:</label>--}}
                {{--<select class="form-control input-sm" name="tipoBusqueda" id="tipoBusqueda">--}}
                    {{--<option value="dni">DNI</option>--}}
                    {{--<option value="paciente">PACIENTE</option>--}}
                    {{--<option value="paciente_fecha">PACIENTE|FECHA</option>--}}
                    {{--<option value="fecha">FECHA</option>--}}
                    {{--<option value="dni_fecha">DNI|FECHA</option>--}}
                {{--</select>--}}
            {{--</div>--}}
            {{--<div class="form-group">|--}}
                {{--<label for="buscarcitadni">DNI:</label>--}}
                {{--<input type="text" name="buscarcitadni" id="buscarCitaDni" placeholder="BUSCAR CITAS POR DNI" class="form-control input-sm" >--}}
            {{--</div>--}}
            {{--<div class="form-group">|--}}
                {{--<label for="buscarcitadni">Paciente:</label>--}}
                {{--<input type="text" name="buscarcitapaciente" id="buscarCitaPaciente" placeholder="BUSCAR POR APELLIDOS" class="form-control input-sm">--}}
            {{--</div>--}}
            <div class="form-group">|
                <label for="desde">Desde:</label>
                <input type="date" class="form-control input-sm" name="desde_paciente" value="{{\Carbon\Carbon::now()->toDateString()}}" style="width: 130px;">
            </div>
            <div class="form-group text-right">|
                <label for="hasta">Hasta:</label>
                <input type="date" class="form-control input-sm" name="hasta_paciente" value="{{\Carbon\Carbon::now()->toDateString()}}" style="width: 130px;">
                <button class="btn btn-success btn-sm" name="buscar_cita_paciente"><span class="glyphicon glyphicon-search"></span></button>
                <button class="btn btn-info btn-sm" name="limpiar_paciente"><span class="glyphicon glyphicon-erase"></span></button>
            </div>
        </div>
    </div>
</div>