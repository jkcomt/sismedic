$(document).ready(function(){
});

var urls_="";
var tipo="";
$('body').on('click','.cuestionarionordico',function(e) {
    e.preventDefault();
    tipo = $(this).attr('tipo');
    $('.confirmar').attr('estado','registrar')
    $('#modal-cuestionario_nordico').modal('hide');
    $('#modal-confirmacion').modal('show')

});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
    if(tipo=="cuestionario_nordico_modificar")
    {
      urls_='/cuestionario_nordico/actualizar';
      // console.log("if probando "+tipo);
        $('body #cuestionario_nordico').trigger('submit');
    }
    else if(tipo=="cuestionario_nordico_guardar")
    {
        urls_='/cuestionario_nordico/crear';
       //console.log(urls_);
    $('body #cuestionario_nordico').trigger('submit');
    }

});

$('.volver-form-examen').on('click',function(e){
    e.preventDefault();
    $('#modal-confirmacion').modal('hide')
    $('#modal-cuestionario_nordico').modal('show');
});

$('body').on('submit','#cuestionario_nordico',function(e){
    e.preventDefault();

    var datos = $(this);
    $.post(urls_,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            $('#modal-confirmacion').modal('hide')
            $('body #cuestionarionordico').modal('hide')
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
        $('#modal-cuestionario_nordico').modal('show');

        return;
    });
});
