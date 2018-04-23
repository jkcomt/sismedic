
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Sismedic</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" crossorigin="anonymous">
    <link href="{{asset('css/ie10-viewport-bug-workaround.css')}}" rel="stylesheet">
    <script src="{{asset('js/ie-emulation-modes-warning.js')}}"></script>

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
                <td style="padding-right: 10px;">
                    <img src="{{asset('img/logo.ico/logo.jpg')}}" alt="" width="80px" height="100px" >
                </td>
                <td >
                    <h5>Dirección: Calle Los Girasoles 274 Urb. California, Trujillo</h5>
                    <h5>Teléfono: (044) 322600</h5>
                    <h5>Email: contacto@ciabumedical.com</h5>
                </td >
            </tr>
        </table>
    </div>

    <hr>



    <div class="row">
        <h3 class="text-center">LISTA GENERAL DE PACIENTES</h3>

        <table class="table table-condensed">
              <tr>
                <th>HISTORIA</th>
                <th>PACIENTES</th>
                <th>DNI</th>
                <th>SEXO</th>
                <th>F. NACIMIENTO</th>

                <th>AREA</th>
                <th>CELULAR</th>
              </tr>
              @foreach($pacientes as $paciente)
                  @if($paciente->estado)
                  <tr>
                      <td>{{$paciente->nro_historia}}</td>
                      <td class="text-left">{{$paciente->apellido_paterno.' '.$paciente->apellido_materno.' '.$paciente->nombres}}</td>
                      <td>{{$paciente->num_dni}}</td>
                      <td>{{strtoupper(substr("$paciente->sexo", 0, 1))}}</td>
                      <td>{{$paciente->fecha_nacimiento}}</td>

                      <td>{{$paciente->seccion}}</td>
                      <td>{{$paciente->celular}}</td>
                  </tr>
                  @endif
              @endforeach
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
