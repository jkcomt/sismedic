$(document).ready(function() {

    $('#msg-error').hide();
console.log("area.js ");
});

/***************************CREATE*********************************/
$('#registrarArea').submit(function(e){
    e.preventDefault();

    var datos = $('#registrarArea');
    var url = datos.attr('action');

   $.post(url,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            console.log(data)
            $('#modal-area-create').modal('hide')
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

       if(data.responseJSON.errors.nombre)
       {
           $('input[name=nombre]').parent().addClass('has-error')
       }else{
           $('input[name=nombre]').parent().removeClass('has-error')
       }

        return;

    });
});

/************************MOSTRAR MODAL***********************************/

$('body').on('click','.new',function(e){


//		alert("hola");
      $('#modal-area-create').modal('show');
});


/***************************MOSTRAR DATOS A EDITAR EN  VENTANA MODAL*******************************************/
$('body').on('click','.edit',function(e){


    e.preventDefault();
    $botonPresionado = "edit"

    $('input[name=nombre]').parent().removeClass('has-error')

    $('input[name=nombre]').val('')

    $('label[for=dni]').html('DNI: ');

    var id = $(this).attr('value');

    var url = "/area/"+id+"/edit"
    $.ajax({
        type:"get",
        url:url,
        dataType:"json",
        data:{
            id : id
        },
        success: function(data){
            $('#update').attr('value',data.id)
            $('#modal-area-edit input[name=editnombre]').val(data.nombre)
         
            $('#modal-area-edit').modal('show');
        },
        error: function(data){
            alert("Error "+json.stringify(data))
        }
    });
});

/************************REALIZAR UPDATE******************************/

$('#update').on('click',function (e) {
    e.preventDefault();

    var url = $('#editarArea').attr('action');

    var id = $('#update').attr('value')
    var nombre = $('input[name=editnombre]').val()
    var token = $('input[name=_token]').val()

    $.ajax({
        type:"post",
        url:url,
        headers: {'X-CSRF-TOKEN':token},
        dataType:"json",
        data:{
            id : id,
            nombre: nombre
        },
        success: function(data){
            $('#modal-area-edit').modal('hide');
            location.reload();

        },
        error: function(data){
            if(data.responseJSON.errors.nombre)
            {
                $('input[name=editnombre]').parent().addClass('has-error')
                console.log(data.responseJSON.errors.nombre)
            }else{
                $('input[name=editnombre]').parent().removeClass('has-error')
            }
        }
    });
});
/*************************REALIZAR DELETE************************************************/



$('body').on('click','.delete',function (e) {
    e.preventDefault();

    // $botonPresionado = "eliminar"

    var id = $(this).attr('id')
    $('.confirmar').attr('id',id)
    $('#modal-confirmacion').modal({
        show:true,
        keyboard:false
    })

});

$('.confirmar').on('click',function (e) {
    e.preventDefault();

    var id = $(this).attr('id')
    var token = $('input[name=_token]').attr('value')
    var url = "/area/delete"

    console.log(id)
    $.ajax({
        type:"post",
        url:url,
        headers: {'X-CSRF-TOKEN':token},
        dataType:"json",
        data:{
            id : id
        },
        success: function(data){

            console.log(data.responseJSON)

            $('#modal-confirmacion').modal('hide')
            $('#modal-exito .modal-body').html('')
            $('#modal-exito .modal-body').append('<h3 class="text-success text-center">Eliminación Exitosa</h3>')
            $('#modal-exito').modal('show')

        },
        error: function(data){
            console.log(data.responseJSON)
        }
    });
});













