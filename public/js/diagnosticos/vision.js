$(document).ready(function() {
  console.log("diagnosticovista.js");
});
var urls_="";
var tipo="";
$('body').on('click','.diagnosticovista',function(e) {
    e.preventDefault();
    $botonPresionado = 'registrar';
    tipo = $(this).attr('tipo');

    $('.confirmar').attr('estado','registrar')
    $('#modal-vision').modal('hide');
    $('#modal-confirmacion').modal('show')

});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
    if(tipo=="diagnosticovista_modificar")
    {
      urls_='/DiagnosticoVista/actualizar';
        $('body #formdiagnosticovista').trigger('submit');
    }
    else if(tipo=="diagnosticovista_guardar")
    {
        urls_='/DiagnosticoVista/crear';
    $('body #formdiagnosticovista').trigger('submit');
    }



});

$('.volver-form-examen').on('click',function(e){
    e.preventDefault();
    $('#modal-confirmacion').modal('hide')
    $('#modal-vision').modal('show');
});

$('body').on('submit','#formdiagnosticovista',function(e){
    e.preventDefault();

    var datos = $(this);
    $.post(urls_,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            $('#modal-confirmacion').modal('hide')
            $('body #formdiagnosticovista').modal('hide')
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
        $('#modal-vision').modal('show');
        return;

    });
});
