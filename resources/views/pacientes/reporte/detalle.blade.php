
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Sismedic</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" crossorigin="anonymous">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{asset('css/ie10-viewport-bug-workaround.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
{{--<link href="{{asset('css/dashboard.css')}}" rel="stylesheet">--}}

{{--<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">--}}

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="{{asset('js/ie8-responsive-file-warning.js')}}"></script><![endif]-->
    <script src="{{asset('js/ie-emulation-modes-warning.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body{
            font-size: 12px;
        }
        .center-text{
            text-align: center;
        }
        .padding-top{
            padding-top: 30px;
            border: hidden;
        }

    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <table>
            <tr>
                <td>
                    {{--<td style="margin-left:50px;padding-left: 150px">--}}
                    <img src="{{asset('img/logo.ico/logo.jpg')}}" alt="" width="120px" height="100px">
                </td>
                <td >
                    {{--<h5>SISMEDIC </h5>--}}
                    <h5>Dirección: Calle Los Girasoles 274 Urb. California, Trujillo</h5>
                    <h5>Teléfono: (044) 322600</h5>
                    <h5>Email: contacto@ciabumedical.com</h5>
                    {{--<h5>Carretera Panamericana Norte Km. 690 Centro Poblado Menor San Martín de Porres – San José – Provincia de Pacasmayo – La Libertad.</h5>--}}
                    {{--<h5>RUC: 20482126112  |  Cel: 972620212  |  Teléfono:044-498067</h5>--}}
                </td >
            </tr>
        </table>
    </div>
    <hr>
    <div class="row">
        <h4>Historial de Paciente</h4>
        <table class="table table-condensed ">
            <tr>
                <td><strong>Nro. Historia : </strong> {{$paciente->nro_historia}}</td>
                <td><strong>Matrícula : </strong> {{$paciente->matricula}}</td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td><strong>Ape. Paterno: </strong> {{$paciente->apellido_paterno}}</td>
                <td><strong>Ape. Materno: </strong> {{$paciente->apellido_materno}}</td>
                <td><strong>Nombres: </strong> {{$paciente->nombres}}</td>
                <td><strong>Sexo: </strong> {{ucfirst($paciente->sexo)}}</td>
            </tr>
            <tr>
                <td><strong>Fecha Nacimiento : </strong> {{$paciente->fecha_nacimiento}}</td>
                <td><strong>Edad : </strong> {{\Carbon\Carbon::parse($paciente->fecha_nacimiento)->age.' años'}}</td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td><strong>Fecha Ingreso : </strong> {{$paciente->fecha_ingreso}}</td>
                <td><strong>Edad al ingresar : </strong> {{\Carbon\Carbon::parse($paciente->fecha_ingreso)->age.' años'}}</td>
                <td colspan="2"><strong>Fecha Ingreso a minera : </strong> {{$paciente->fecha_ingreso_minera}}</td>
            </tr>
            <tr>
                <td colspan="4"><strong>Jefe Inmediato : </strong> {{$paciente->jefe_inmediato}}</td>
            </tr>
        </table>
            {{--</div>--}}
        {{--</div>--}}
    </div>
    <div class="row">
        {{--<div class="panel panel-default">--}}
            {{--<div class="panel-body">--}}
                <table class="table table-condensed">
                    <tr><td  colspan="4"><strong>Lugar de Nacimiento</strong></td></tr>
                    <tr>
                        <td><strong>País : </strong> {{$paciente->paisOrigen->nombre}}</td>
                        <td><strong>Departamento : </strong> {{$paciente->departamentoOrigen->nombre}}</td>
                        <td><strong>Provincia : </strong> {{$paciente->provinciaOrigen->nombre}}</td>
                        <td><strong>Distrito : </strong> {{$paciente->distritoOrigen->nombre}}</td>
                    </tr>
                    <tr><td  colspan="4"><strong>Domicilio</strong></td></tr>
                    <tr>
                        <td><strong>País : </strong> {{$paciente->paisDomicilio->nombre}}</td>
                        <td><strong>Departamento : </strong> {{$paciente->departamentoDomicilio->nombre}}</td>
                        <td><strong>Provincia : </strong> {{$paciente->provinciaDomicilio->nombre}}</td>
                        <td><strong>Distrito : </strong> {{$paciente->distritoDomicilio->nombre}}</td>
                    </tr>
                    <tr><td colspan="4"><strong>Dirección : </strong> {{$paciente->direccion}}</td></tr>
                </table>
            {{--</div>--}}
        {{--</div>--}}
    </div>
    <div class="row">
        <table class="table table-condensed">
            <tr>
                <td><strong>Telf. Fijo : </strong> {{$paciente->telf_fijo}}</td>
                <td><strong>Móvil : </strong> {{$paciente->celular}}</td>
                <td><strong>Trabajo : </strong> {{$paciente->celular}}</td>
            </tr>
            <tr>
                <td><strong>Tipo Doc. Identidad : </strong> {{$paciente->tipo_dni}}</td>
                <td><strong>Número Doc. Identidad : </strong> {{$paciente->num_dni}}</td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td><strong>Estado Civil : </strong> {{$paciente->estado_civil}}</td>
                <td><strong>Cant. Hijos Vivos : </strong> {{$paciente->nro_hijo_vivos}}</td>
                <td><strong>Cant. Hijos Muertos : </strong> {{$paciente->nro_hijo_muertos}}</td>
            </tr>
        </table>
    </div>
    <div class="row">
        <table class="table table-condensed">
            <tr>
                <td><strong>Instrucción : </strong> {{ucfirst($paciente->instruccion->nombre)}}</td>
                <td><strong>Profesión : </strong> {{ucfirst($paciente->profesion->nombre)}}</td>
                <td><strong>Contrata : </strong> {{ucfirst($paciente->contrata->nombre)}}</td>
            </tr>
            <tr>
                <td><strong>Área : </strong> {{ucfirst($paciente->area->nombre)}}</td>
                <td><strong>Ocupación : </strong> {{ucfirst($paciente->ocupacion->nombre)}}</td>
                <td><strong>Sección : </strong> {{$paciente->seccion}}</td>
            </tr>
            <tr>
                <td><strong>Labora en : </strong> {{ucfirst($paciente->lugarLabores->nombre)}}</td>
                <td colspan="2"><strong>Tiempo Desempeño : </strong> </td>
            </tr>
            <tr>
                <td><strong>Email : </strong> {{$paciente->email}}</td>
                <td colspan="2"><strong>Altura : </strong> {{$paciente->altura->descripcion}}</td>
            </tr>
            <tr>
                <td><strong>Comentarios : </strong> {{$paciente->comentarios}}</td>
                <td colspan="2"><strong>Gs/Rh : </strong> {{$paciente->grupoSanguineo->descripcion}}</td>
            </tr>
            <tr>
                <td><strong>Alergias : </strong> {{$paciente->alergias}}</td>
                <td colspan="2"><strong>Regimen : </strong> {{$paciente->regimen->descripcion}}</td>

            </tr>
            <tr>
                <td colspan="3"><strong>En caso de emergencia : </strong> {{$paciente->en_caso_emergencia}}</td>

            </tr>

        </table>
    </div>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<!-- Latest compiled and minified JavaScript -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="{{asset('js/holder.min.js')}}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{asset('js/ie10-viewport-bug-workaround.js')}}"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
</body>
</html>
