$(document).ready(function(){

});

var urls_="";
var tipo="";
$('body').on('click','.ApneaSuenio',function(e) {
    e.preventDefault();

    tipo = $(this).attr('tipo');

    $('.confirmar').attr('estado','registrar')
    $('#modal-ApneaSuenio').modal('hide');
    $('#modal-confirmacion').modal('show')

});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
    if(tipo=="ApneaSuenio_modificar")
    {
      urls_='/apnea_suenio/actualizar';
      // console.log("if probando "+tipo);
        $('body #apnea_suenio').trigger('submit');
    }
    else if(tipo=="ApneaSuenio_guardar")
    {
        urls_='/apnea_suenio/crear';
       //console.log(urls_);
    $('body #apnea_suenio').trigger('submit');
    }

});

$('.volver-form-examen').on('click',function(e){
    e.preventDefault();
    $('#modal-confirmacion').modal('hide')
    $('#modal-ApneaSuenio').modal('show');
});

$('body').on('submit','#apnea_suenio',function(e){
    e.preventDefault();

    var datos = $(this);
    $.post(urls_,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            $('#modal-confirmacion').modal('hide')
            $('body #ApneaSuenio').modal('hide')
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
        $('#modal-ApneaSuenio').modal('show');

        return;
    });
});
