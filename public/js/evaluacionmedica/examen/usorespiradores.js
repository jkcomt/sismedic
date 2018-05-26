$(document).ready(function() {
});
var urls_="";
var tipo="";
$('body').on('click','.registrarUsoRespiradores',function(e) {
    e.preventDefault()
    tipo = $(this).attr('tipo');
    $('.confirmar').attr('estado','registrar')
    $('#modal-uso-respiradores').modal('hide');
    $('#modal-confirmacion').modal('show')

});
//registrarUsoRespiradores

$('body').on('submit','#registrarUsoRespiradores',function(e){
    e.preventDefault();
    var datos = $(this);
    $.post(urls_,datos.serialize(),function (result) {
    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            $('#modal-confirmacion').modal('hide')
            $('body #modal-uso-respiradores').modal('hide')
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
        $('#modal-uso-respiradores').modal('show');

        return;

    });
});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
    console.log(tipo);
    if(tipo=="usoRespiradores_modificar")
    {
        urls_='/uso_respiradores/actualizar';
        //    console.log("if probando "+tipo);
        $('body #registrarUsoRespiradores').trigger('submit');
    }
    else if(tipo=="usoRespiradores_guardar")
    {
        urls_='/uso_respiradores/crear';
        //    console.log(urls_);
        $('body #registrarUsoRespiradores').trigger('submit');
    }
});