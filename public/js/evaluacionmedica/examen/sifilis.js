$(document).ready(function() {
});
var urls_="";
var tipo="";
$('body').on('click','.registrarSifilis',function(e) {
    e.preventDefault();
    $botonPresionado = 'registrar';
tipo = $(this).attr('tipo');
    if(!$('body #registrarSifilis select[name=resultado] option:selected').val())
    {
        $('body #registrarSifilis select[name=resultado]').parent().addClass('has-error')
    }else{
        $('.confirmar').attr('estado','registrar')
        $('#modal-sifilis').modal('hide');
        $('#modal-confirmacion').modal('show')
    }
});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
    if(tipo=="sifilis_modificar")
    {
      urls_='/sifilis/actualizar';
      //    console.log("if probando "+tipo);
        $('body #registrarSifilis').trigger('submit');
    }
    else if(tipo=="sifilis_guardar")
    {
        urls_='/sifilis/crear';
    //    console.log(urls_);
        $('body #registrarSifilis').trigger('submit');
    }

});

$('.volver-form-examen').on('click',function(e){
    e.preventDefault();
    $('#modal-confirmacion').modal('hide')
    $('#modal-sifilis').modal('show');
});

$('body').on('submit','#registrarSifilis',function(e){
    e.preventDefault();

    var datos = $(this);
    var url = datos.attr('action');
    $.post(urls_,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            $('#modal-confirmacion').modal('hide')
            $('body #registrarSifilis').modal('hide')
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
        $('#modal-sifilis').modal('show');
        // $.each(data.responseJSON.errors, function( index, value ) {
        // console.log(value)
        // $('#listaerrores').append('<li>'+value+'</li>')
        // });

        if(data.responseJSON.errors.resultado)
        {
            $('body #registrarSifilis select[name=resultado]').parent().addClass('has-error')
        }

        return;

    });
});
