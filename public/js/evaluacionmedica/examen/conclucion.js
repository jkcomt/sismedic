$(document).ready(function() {
});
var urls_="";
var tipo="";
$('body').on('click','.conclusiones',function(e) {
    e.preventDefault();
    $botonPresionado = 'registrar';
    tipo = $(this).attr('tipo');

    $('.confirmar').attr('estado','registrar')
    $('#modal-confirmacion').modal('show')

});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
    if(tipo=="conclusiones_modificar")
    {
      urls_='/conclusion/actualizar';
        $('body #form_conclusiones').trigger('submit');
    }
    else if(tipo=="conclusiones_guardar")
    {
        urls_='/conclusion/crear';
    $('body #form_conclusiones').trigger('submit');
    }
});

$('.volver-form-examen').on('click',function(e){
    e.preventDefault();
    $('#modal-confirmacion').modal('hide')
});

$('body').on('submit','#form_conclusiones',function(e){
    e.preventDefault();

    var datos = $(this);
    $.post(urls_,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            $('#modal-confirmacion').modal('hide')
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
        alert("error")
        console.log(data);
        return;

    });
});
