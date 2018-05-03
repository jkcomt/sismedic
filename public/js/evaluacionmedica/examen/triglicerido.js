$(document).ready(function() {
});

$('body').on('click','.registrarTriglicerido',function(e) {
    e.preventDefault();
    $botonPresionado = 'registrar';

    if(!$('body #registrarTriglicerido input[name=triglicerido]').val())
    {
        $('body #registrarTriglicerido input[name=triglicerido]').parent().addClass('has-error')
    }else{
        $('.confirmar').attr('estado','registrar')
        $('#modal-triglicerido').modal('hide');
        $('#modal-confirmacion').modal('show')
    }
});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
    $('body #registrarTriglicerido').trigger('submit');
});

$('.volver-form-examen').on('click',function(e){
    e.preventDefault();
    $('#modal-confirmacion').modal('hide')
    $('#modal-triglicerido').modal('show');
});

$('body').on('submit','#registrarTriglicerido',function(e){
    e.preventDefault();

    var datos = $(this);
    var url = datos.attr('action');
    $.post(url,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            $('#modal-confirmacion').modal('hide')
            $('body #registrarTriglicerido').modal('hide')
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
        $('#modal-triglicerido').modal('show');
        // $.each(data.responseJSON.errors, function( index, value ) {
        // console.log(value)
        // $('#listaerrores').append('<li>'+value+'</li>')
        // });

        if(data.responseJSON.errors.sedimentacion)
        {
            $('body #registrarTriglicerido input[name=triglicerido]').parent().addClass('has-error')
        }

        return;

    });
});