$(document).ready(function() {
});
var urls_="";
var tipo="";
$('body').on('click','.registrarColesterolHdl',function(e) {
    e.preventDefault();
    $botonPresionado = 'registrar'
    tipo = $(this).attr('tipo');
    if(!$('body #registrarColesterolHdl input[name=colesterol_hdl]').val())
    {
        $('body #registrarColesterolHdl input[name=colesterol_hdl]').parent().addClass('has-error')
    }else{
        $('.confirmar').attr('estado','registrar')
        $('#modal-colesterolhdl').modal('hide');
        $('#modal-confirmacion').modal('show')
    }

});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
    if(tipo=="colesterol_hdl_modificar")
    {
      urls_='/colesterol_hdl/actualizar';
      //    console.log("if probando "+tipo);
      $('body #registrarColesterolHdl').trigger('submit');
    }
    else if(tipo=="colesterol_hdl_guardar")
    {
        urls_='/colesterol_hdl/crear';
    //    console.log(urls_);
    $('body #registrarColesterolHdl').trigger('submit');
    }

});

$('.volver-form-examen').on('click',function(e){
    e.preventDefault();
    $('#modal-confirmacion').modal('hide')
    $('#modal-colesterolhdl').modal('show');
});

$('body').on('submit','#registrarColesterolHdl',function(e){
    e.preventDefault();

    var datos = $(this);
    var url = datos.attr('action');
   $.post(urls_,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            $('#modal-confirmacion').modal('hide')
            $('body #registrarColesterolHdl').modal('hide')
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
       $('#modal-colesterolhdl').modal('show');
        // $.each(data.responseJSON.errors, function( index, value ) {
        //     console.log(value)
        //     $('#listaerrores').append('<li>'+value+'</li>')
        // });
        if(data.responseJSON.errors.colesterol_hdl)
        {
            $('body #registrarColesterolHdl input[name=colesterol_hdl]').parent().addClass('has-error')
        }

        return;

    });
});
