<div class="modal fade" tabindex="-1" role="dialog" id="modal-electrocardiograma">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form action="" id="" method="post" class="form-horizontal">
                <div class="modal-body ">
                    {{csrf_field()}}
                    <div class="row text-center">
                      <h1>En Desarrollo...</h1>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-md-12 text-right">
                          <a href="" class="btn btn-sm  btn-success" data-dismiss="modal">GUARDAR</a>
                          <a href="" class="btn btn-sm  btn-info" data-dismiss="modal">DIAGNOSTICO</a>
                            <a href="" class="btn btn-sm  btn-warning" data-dismiss="modal">Volver</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
