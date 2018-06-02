$(document).ready(function() {

    $('#msg-error').hide();
    console.log("personal.js");
});
$items= [];
/***************************CREATE*********************************/
$('#actualizarPermisos').submit(function(e){
    e.preventDefault();

    var datos = $('#actualizarPermisos');
    var url = datos.attr('action');

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

        // if(data.responseJSON.errors.name)
        // {
        //     $('input[name=name]').parent().addClass('has-error')
        // }else{
        //     $('input[name=name]').parent().removeClass('has-error')
        // }
        // if(data.responseJSON.errors.password)
        // {
        //     $('input[name=password]').parent().addClass('has-error')
        // }else{
        //     $('input[name=password]').parent().removeClass('has-error')
        // }
        return;

    });
});


//
$('.actualizarPermisos').on('click',function (e) {
    e.preventDefault();
    //
    // var id = $(this).attr('id')
    // $('.confirmar').attr('id',id)
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
    // console.log(id)
    // $.ajax({
    //     type:"post",
    //     url:url,
    //     headers: {'X-CSRF-TOKEN':token},
    //     dataType:"json",
    //     data:{
    //         id : id
    //     },
    //     success: function(data){
    //         console.log(data)
    //
    //         $('#modal-confirmacion').modal('hide')
    //         //$('#modal-exito .modal-body').html('')
    //         //$('#modal-exito .modal-body').append('<h3 class="text-success text-center">Eliminación Exitosa</h3>')
    //         $('#modal-exito').modal('show')
    //
    //     },
    //     error: function(data){
    //         console.log(data.responseJSON)
    //     }
    // });
});
