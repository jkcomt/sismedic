<div class="col-lg-12 col-md-12 col-sm-12">
    <table class="table table-responsive table-hover table-condensed small box" id="tabla">
        <thead>
        <th>EXAMENES</th>
        <th>TIPO</th>
        <th>VALOR</th>
        <th>DSCTO</th>
        <th>OPCIONES</th>

        </thead>
        <tbody>
        @foreach($perfil->perfilExamen as $examen)
            @if($examen->estado)
                <tr>
                    
                    <td class="text-left">{{$examen->listaExamen->descripcion}}</td>
                    <td>{{$examen->listaExamen->tipo}}</td>
                    <td>{{$examen->listaExamen->valor}}</td>
                    <td>{{$examen->listaExamen->dscto}}</td>
                     <td>                  
                        {{csrf_field()}}

                        <button href="#" class="btn btn-xs btn-danger delete"  id="{{$examen->id}}"><span class="glyphicon glyphicon-remove"></span> ELIMINAR</button>
                    </td> 
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>

</div>
