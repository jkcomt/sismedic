$(document).ready(function(){
});

var urls_="";
var tipo="";
$('body').on('click','.conductoroperador',function(e) {
    e.preventDefault();

    tipo = $(this).attr('tipo');

    $('.confirmar').attr('estado','registrar')
    $('#modal-conductoroperador').modal('hide');
    $('#modal-confirmacion').modal('show')

});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
    if(tipo=="conductor_operador_modificar")
    {
      urls_='/conductor_operador/actualizar';
      // console.log("if probando "+tipo);
        $('body #conductor_operador').trigger('submit');
    }
    else if(tipo=="conductor_operador_guardar")
    {
        urls_='/conductor_operador/crear';
       //console.log(urls_);
    $('body #conductor_operador').trigger('submit');
    }

});

$('.volver-form-examen').on('click',function(e){
    e.preventDefault();
    $('#modal-confirmacion').modal('hide')
    $('#modal-conductoroperador').modal('show');
});

$('body').on('submit','#conductor_operador',function(e){
    e.preventDefault();

    var datos = $(this);
    $.post(urls_,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            $('#modal-confirmacion').modal('hide')
            $('body #conductoroperador').modal('hide')
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
        $('#modal-conductoroperador').modal('show');

        return;
    });
});
