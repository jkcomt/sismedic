$(document).ready(function() {
  console.log("diagnosticoelectrocardiograma.js");
});
var urls_="";
var tipo="";
$('body').on('click','.diagnosticoelectrocardiograma',function(e) {
    e.preventDefault();
    $botonPresionado = 'registrar';
    tipo = $(this).attr('tipo');

    $('.confirmar').attr('estado','registrar')
    $('#modal-electrocardiograma').modal('hide');
    $('#modal-confirmacion').modal('show')

});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
    if(tipo=="diagnosticoelectrocardiograma_modificar")
    {
      urls_='/DiagnosticoElectrocardiograma/actualizar';
        $('body #formdiagnosticoelectrocardiograma').trigger('submit');
    }
    else if(tipo=="diagnosticoelectrocardiograma_guardar")
    {
        urls_='/DiagnosticoElectrocardiograma/crear';
    $('body #formdiagnosticoelectrocardiograma').trigger('submit');
    }



});

$('.volver-form-examen').on('click',function(e){
    e.preventDefault();
    $('#modal-confirmacion').modal('hide')
    $('#modal-electrocardiograma').modal('show');
});

$('body').on('submit','#formdiagnosticoelectrocardiograma',function(e){
    e.preventDefault();

    var datos = $(this);
    $.post(urls_,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            $('#modal-confirmacion').modal('hide')
            $('body #formdiagnosticoelectrocardiograma').modal('hide')
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
        $('#modal-electrocardiograma').modal('show');
        return;

    });
});
