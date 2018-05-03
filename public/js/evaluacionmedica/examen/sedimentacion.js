$(document).ready(function() {
});

$('body').on('click','.registrarSedimentacion',function(e) {
    e.preventDefault();
    $botonPresionado = 'registrar';

    if(!$('body #registrarSedimentacion input[name=sedimentacion]').val())
    {
        $('body #registrarSedimentacion input[name=sedimentacion]').parent().addClass('has-error')
    }else{
        $('.confirmar').attr('estado','registrar')
        $('#modal-velocidadsedimentacion').modal('hide');
        $('#modal-confirmacion').modal('show')
    }
});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
    $('body #registrarSedimentacion').trigger('submit');
});

$('.volver-form-examen').on('click',function(e){
    e.preventDefault();
    $('#modal-confirmacion').modal('hide')
    $('#modal-velocidadsedimentacion').modal('show');
});

$('body').on('submit','#registrarSedimentacion',function(e){
    e.preventDefault();

    var datos = $(this);
    var url = datos.attr('action');
    $.post(url,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            $('#modal-confirmacion').modal('hide')
            $('body #registrarSedimentacion').modal('hide')
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
        $('#modal-velocidadsedimentacion').modal('show');
        // $.each(data.responseJSON.errors, function( index, value ) {
        // console.log(value)
        // $('#listaerrores').append('<li>'+value+'</li>')
        // });

        if(data.responseJSON.errors.sedimentacion)
        {
            $('body #registrarSedimentacion input[name=sedimentacion]').parent().addClass('has-error')
        }

        return;

    });
});