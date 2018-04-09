<div class="col-lg-12 col-md-12 col-sm-12">
    <table class="table table-responsive table-hover table-condensed small box" id="tabla">
        <thead>
        <th>EXAMEN</th>
        <th>PERFIL</th>
        <th>OPCIONES</th>

        </thead>
        <tbody>
        @foreach($perfilExamens as $perfilExamen)
            <tr>

                @foreach($listaexamenes as $listaexamen)
                @if( $listaexamen->id== $perfilExamen->lista_examen_id)

                    <td>{{$listaexamen->descripcion}}</td>

                @endif
                @endforeach

                @foreach($perfiles as $perfil)
                @if( $perfil->id  == $perfilExamen->perfil_id)

                <td>{{$perfil->descripcion}}</td>

                @endif
                @endforeach
                 <td>
                   <!--button class="btn btn-xs btn-warning edit"  value="{{--$perfilExamen->id--}}"><span class="glyphicon glyphicon-pencil"></span> EDIT.</button-->
                    {{csrf_field()}}

                    <button href="#" class="btn btn-xs btn-danger delete"  id="{{$perfilExamen->id}}"><span class="glyphicon glyphicon-remove"></span> ELIM.</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
