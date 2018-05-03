$(document).ready(function() {
});

$('body').on('click','.registrarCreatinina',function(e) {
    e.preventDefault();
    $botonPresionado = 'registrar'

    if(!$('body #registrarCreatinina input[name=creatinina]').val())
    {
        $('body #registrarCreatinina input[name=creatinina]').parent().addClass('has-error')
    }else{
        $('.confirmar').attr('estado','registrar')
        $('#modal-creatinina').modal('hide');
        $('#modal-confirmacion').modal('show')
    }
});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
    $('body #registrarCreatinina').trigger('submit');
});

$('.volver-form-examen').on('click',function(e){
    e.preventDefault();
    $('#modal-confirmacion').modal('hide')
    $('#modal-creatinina').modal('show');
});

$('body').on('submit','#registrarCreatinina',function(e){
    e.preventDefault();

    var datos = $(this);
    var url = datos.attr('action');
    $.post(url,datos.serialize(),function (result) {

     }).success(function(data)
     {
         if($.isEmptyObject(data.error)){
             $('#modal-confirmacion').modal('hide')
             $('body #registrarCreatinina').modal('hide')
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
        $('#modal-creatinina').modal('show');
     // $.each(data.responseJSON.errors, function( index, value ) {
     // console.log(value)
     // $('#listaerrores').append('<li>'+value+'</li>')
     // });

        if(data.responseJSON.errors.colesterol_hdl)
        {
            $('body #registrarColesterolHdl input[name=creatinina]').parent().addClass('has-error')
        }

        return;

     });
});