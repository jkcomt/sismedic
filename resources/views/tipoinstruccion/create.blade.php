@extends('layout')


@section('modal-title')
    <h4 class="modal-title">Aviso</h4>
@endsection
@section('modal-body')
    <h3 class="text-success text-center">Registro Exitoso</h3>
@endsection
@section('modal-footer')
    <button class="btn btn-sm btn-primary" id="create-paciente">Insertar otro registro</button>
    <a class="btn btn-sm btn-warning" href="{{route('tipoinstruccion.index')}}">Volver</a>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div id="msg-error" class="alert alert-danger" style="display:none;">
                <strong>Corriga los campos indicados por favor.</strong>
                <ul>
                    <div id="listaerrores">
                    </div>
                </ul>
                {{--<ul>--}}
                {{--@foreach($errors->all() as $error)--}}
                {{--<li>{{$error}}</li>--}}
                {{--@endforeach--}}
                {{--</ul>--}}
            </div>

            <form action="{{route('tipoinstruccion.store')}}" id="registrarTipoInstruccion" method="post">
                {{csrf_field()}}

                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                          
                            <div class="col-md-4 form-group">
                                <label for="nombre" class="control-label">Tipo Instruccion :</label>
                                <input type="text"  value="" class="form-control" name="nombre">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 text-right">
                                <button class="btn btn-success">Registrar</button>
                                <a href="{{route('tipoinstruccion.index')}}" class="btn btn-warning">Volver</a>
                            </div>
                        </div>
                    </div>
                </div>
                 

            </form>

        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset('js/tipoinstruccion.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
@endsection