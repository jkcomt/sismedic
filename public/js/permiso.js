$(document).ready(function() {

    $('#msg-error').hide();
});
$items= [];
/***************************CREATE*********************************/
$('#actualizarPermisos').submit(function(e){
    e.preventDefault();

    var datos = $('#actualizarPermisos');
    var url = $(this).attr('action');

    $items.length = 0;
    if($items.length <= 0){
        $('input[type=checkbox]').each(function () {
            if (this.checked) {
                $items.push($(this).val());
            }
        });
    }

    $.post(url,datos.serialize() + "&" + $.param({'items':$items}),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            //console.log(data);
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
        $('#msg-error').fadeIn();
        $('#listaerrores').html('')

        $.each(data.responseJSON.errors, function( index, value ) {
            console.log(value)
            $('#listaerrores').append('<li>'+value+'</li>')
        })

        return;

    });
});


//
$('.actualizarPermisos').on('click',function (e) {
    e.preventDefault();
    //
    // var id = $(this).attr('id')
    // $('.confirmar').attr('id',id)
    $('#modal-confirmacion .modal-body').html('<h3 class="text-warning text-center">¿Desea actualizar permisos?</h3>')
    $('#modal-confirmacion').modal({
        show:true,
        keyboard:false
    })

});

$('.confirmar').on('click',function (e) {
    e.preventDefault();

    var id = $(this).attr('id')
    var token = $('input[name=_token]').attr('value')
    //var url = "usuario/delete"
    $('#actualizarPermisos').trigger('submit');

});
