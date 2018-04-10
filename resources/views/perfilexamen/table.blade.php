<div class="col-lg-12 col-md-12 col-sm-12">
    <table class="table table-responsive table-hover table-condensed small box" id="tabla">
        <thead>
        <th>EXAMENES</th>
        <th>OPCIONES</th>

        </thead>
        <tbody>
        @foreach($perfil->perfilExamen as $examen)
            <tr>

                <td>{{$examen->listaExamen->descripcion}}</td>
                 <td>                  
                    {{csrf_field()}}

                    <button href="#" class="btn btn-xs btn-danger delete"  id="{{$examen->id}}"><span class="glyphicon glyphicon-remove"></span> ELIMINAR</button>
                </td> 
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
