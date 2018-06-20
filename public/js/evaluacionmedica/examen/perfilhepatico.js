$(document).ready(function() {

});
var urls_="";
var tipo="";
$('body').on('click','.perfilhepatico',function(e) {
    e.preventDefault();
    $botonPresionado = 'registrar';
    tipo = $(this).attr('tipo');

    $('.confirmar').attr('estado','registrar')
    $('#modal-perfilhepatico').modal('hide');
    $('#modal-confirmacion').modal('show')

});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
    if(tipo=="perfilhepatico_modificar")
    {
      urls_='/PerfilHepatico/actualizar';
        $('body #formperfilhepatico').trigger('submit');
    }
    else if(tipo=="perfilhepatico_guardar")
    {
        urls_='/PerfilHepatico/crear';
    $('body #formperfilhepatico').trigger('submit');
    }



});

$('.volver-form-examen').on('click',function(e){
    e.preventDefault();
    $('#modal-confirmacion').modal('hide')
    $('#modal-perfilhepatico').modal('show');
});

$('body').on('submit','#formperfilhepatico',function(e){
    e.preventDefault();

    var datos = $(this);
    $.post(urls_,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            $('#modal-confirmacion').modal('hide')
            $('body #formperfilhepatico').modal('hide')
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
        $('#modal-perfilhepatico').modal('show');
        return;

    });
});
