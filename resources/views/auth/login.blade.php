<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>Sismedic</title>
</head>
<body>
<div class="container">
    <hr>
    @if(session()->has('flash'))
        <div class="alert alert-info">{{ session('flash') }}</div>
    @endif
    <div class="row">
        <div class=" col md-4 col-lg-offset-4 col-lg-4 col-lg-offset-4 col-sm-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title">Acceso a la aplicación</h1>
                </div>
                <div class="panel-body">
                    <div class="text-center">
                        <img src="{{asset('img/logo.ico/logo.jpg')}}" alt="">
                    </div>
                    <form action="{{route('login')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group {{$errors->has('name')? 'has-error':''}} ">
                            <label for="email">Usuario</label>
                            <input class="form-control"
                                   type="text"
                                   name="name"
                                   placeholder="Ingresa tu usuario"
                                   value="{{old('name')}}">
                            {!! $errors->first('name','<span class="help-block">:message</span>') !!}
                        </div>
                        <div class="form-group {{$errors->has('password')? 'has-error':''}}">
                            <label for="password">Contraseña</label>
                            <input class="form-control"
                                   type="password"
                                   name="password"
                                   placeholder="Ingresa tu password">
                            {!! $errors->first('password','<span class="help-block">:message</span>') !!}
                        </div>
                        <button class="btn btn-primary btn-block">Acceder</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>