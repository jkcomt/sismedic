$(document).ready(function() {
});

$('body').on('click','.registrarAnexo7d',function(e) {
    e.preventDefault();
    $botonPresionado = 'registrar';

    $('.confirmar').attr('estado','registrar')
    $('#modal-anexo7d').modal('hide');
    $('#modal-confirmacion').modal('show')
    //validar formulario fron end
/*
    if(!$('body #registrarAnexo7d input[name=acido_urico]').val())
    {
        $('body #registrarAnexo7d input[name=acido_urico]').parent().addClass('has-error')
    }else{
        $('.confirmar').attr('estado','registrar')
        $('#modal-anexo7d').modal('hide');
        $('#modal-confirmacion').modal('show')
    }*/
});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
    $('body #registrarAnexo7d').trigger('submit');
});

$('.volver-form-examen').on('click',function(e){
    e.preventDefault();
    $('#modal-confirmacion').modal('hide')
    $('#modal-anexo7d').modal('show');
});

$('body').on('submit','#registrarAnexo7d',function(e){
    e.preventDefault();

    var datos = $(this);
    var url = datos.attr('action');
    $.post(url,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            $('#modal-confirmacion').modal('hide')
            $('body #registrarAnexo7d').modal('hide')
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
        //$('#msg-error').fadeIn();
        //$('#listaerrores').html('')
        $('#modal-confirmacion').modal('hide');
        $('#modal-anexo7d').modal('show');
        // $.each(data.responseJSON.errors, function( index, value ) {
        // console.log(value)
        // $('#listaerrores').append('<li>'+value+'</li>')
        // });

        // if(data.responseJSON.errors.acido_urico)
        // {
        //     $('body #registrarAnexo7d input[name=acido_urico]').parent().addClass('has-error')
        // }

        return;

    });
});