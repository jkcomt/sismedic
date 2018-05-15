$(document).ready(function() {
});
var urls_="";
var tipo="";
$('body').on('click','.registrarAcidoUrico',function(e) {
    e.preventDefault();
    $botonPresionado = 'registrar';
    tipo = $(this).attr('tipo');
    if(!$('body #registrarAcidoUrico input[name=acido_urico]').val())
    {
        $('body #registrarAcidoUrico input[name=acido_urico]').parent().addClass('has-error')
    }else{
        $('.confirmar').attr('estado','registrar')
        $('#modal-acidourico').modal('hide');
        $('#modal-confirmacion').modal('show')
    }
});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
    if(tipo=="acidourico_modificar")
    {
      urls_='/acido_urico/actualizar';
      //    console.log("if probando "+tipo);
        $('body #registrarAcidoUrico').trigger('submit');
    }
    else if(tipo=="acidourico_guardar")
    {
        urls_='/acido_urico/crear';
    //    console.log(urls_);
    $('body #registrarAcidoUrico').trigger('submit');
    }

});

$('.volver-form-examen').on('click',function(e){
    e.preventDefault();
    $('#modal-confirmacion').modal('hide')
    $('#modal-acidourico').modal('show');
});

$('body').on('submit','#registrarAcidoUrico',function(e){
    e.preventDefault();

    var datos = $(this);
  //  var url = datos.attr('action');
    $.post(urls_,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            $('#modal-confirmacion').modal('hide')
            $('body #registrarAcidoUrico').modal('hide')
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
        $('#modal-acidourico').modal('show');
        // $.each(data.responseJSON.errors, function( index, value ) {
        // console.log(value)
        // $('#listaerrores').append('<li>'+value+'</li>')
        // });

        if(data.responseJSON.errors.acido_urico)
        {
            $('body #registrarAcidoUrico input[name=acido_urico]').parent().addClass('has-error')
        }

        return;

    });
});
