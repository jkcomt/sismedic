
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
                <td>
                    <img src="{{asset('img/logo.ico/logo.jpg')}}" alt="" width="120px" height="100px">
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
        <h3 class="text-center">LISTA GENERAL DE FUNCIONES VITALES</h3>

        <table class="table table-condensed">
              <tr>
                <th>Nro. HISTORIA</th>
                <th>Nro. CITA</th>
                <th>PACIENTE</th>
                <th>FECHA - HORA</th>

              </tr>
              @foreach($citas as $cita)
                  <tr>
                      <td>{{$cita->paciente->nro_historia}}</td>
                      <td>{{$cita->nro_serie_cita}}</td>
                      <td>{{$cita->paciente->apellido_paterno.' '.$cita->paciente->apellido_materno.' '.$cita->paciente->nombres}}</td>
                      <td>{{$cita->fecha_examen.' - '.Carbon\Carbon::parse($cita->hora_examen)->format('h:i A')}}</td>


                  </tr>
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
