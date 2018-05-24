$(document).ready(function(){

});

var urls_="";
var tipo="";
$('body').on('click','.trabajoaltura',function(e) {
    e.preventDefault();

    tipo = $(this).attr('tipo');

    $('.confirmar').attr('estado','registrar')
    $('#modal-trabajoaltura').modal('hide');
    $('#modal-confirmacion').modal('show')

});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
    if(tipo=="trabajoaltura_modificar")
    {
      urls_='/trabajo_altura/actualizar';
      // console.log("if probando "+tipo);
        $('body #suficiencia_trabajo_alturas').trigger('submit');
    }
    else if(tipo=="trabajoaltura_guardar")
    {
        urls_='/trabajo_altura/crear';
       //console.log(urls_);
    $('body #suficiencia_trabajo_alturas').trigger('submit');
    }

});

$('.volver-form-examen').on('click',function(e){
    e.preventDefault();
    $('#modal-confirmacion').modal('hide')
    $('#modal-trabajoaltura').modal('show');
});

$('body').on('submit','#suficiencia_trabajo_alturas',function(e){
    e.preventDefault();

    var datos = $(this);
    $.post(urls_,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            $('#modal-confirmacion').modal('hide')
            $('body #registrartrabajoaltura').modal('hide')
            $('#modal-exito').modal({
                backdrop: 'static',
                keyboard:false
            });
            $('#modal-exito').modal('show')
        }else{
            console.log(data.error)
            return;
        }
    }).error(function(data){
        $('#modal-confirmacion').modal('hide');
        $('#modal-trabajoaltura').modal('show');

        return;
    });
});
