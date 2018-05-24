$(document).ready(function() {

});
$contador = 0;
var urls_="";
var tipo="";
$('body').on('click',':checkbox',function(e){
    if($('#modal-evaluacion-cognitiva input[name=puntaje]').val() > 0)
    {
        $contador = parseInt($('#modal-evaluacion-cognitiva input[name=puntaje]').val());
    }
    if($(this).is(':checked')){
        $contador = $contador + 1;
    }else {
        $contador = $contador - 1;
        if($contador < 0){
            $contador = 0;
        }
    }

    $('input[name=puntaje]').val($contador)

});

$('body').on('click','.registrarEvaluacionCognitiva',function(e) {
    e.preventDefault()
    tipo = $(this).attr('tipo');
    $('.confirmar').attr('estado','registrar')
    $('#modal-evaluacion-cognitiva').modal('hide');
    $('#modal-confirmacion').modal('show')

});

$('body').on('submit','#registrarEvaluacionCognitiva',function(e){
    e.preventDefault();
    var datos = $(this);
    $.post(urls_,datos.serialize(),function (result) {
    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            $('#modal-confirmacion').modal('hide')
            $('body #modal-evaluacion-cognitiva').modal('hide')
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
        $('#modal-evaluacion-cognitiva').modal('show');

        return;

    });
});

$('.confirmar').on('click',function (e) {
    e.preventDefault();

    if(tipo=="evaluacionCognitiva_modificar")
    {
        urls_='/evaluacion_cognitiva/actualizar';
        //    console.log("if probando "+tipo);
        $('body #registrarEvaluacionCognitiva').trigger('submit');
    }
    else if(tipo=="evaluacionCognitiva_guardar")
    {
        urls_='/evaluacion_cognitiva/crear';
        //    console.log(urls_);
        $('body #registrarEvaluacionCognitiva').trigger('submit');
    }


});