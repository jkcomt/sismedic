$(document).ready(function() {

    $('#msg-error').hide();
console.log("personal.js ");
});

/***************************CREATE*********************************/
$('#registrarUsuario').submit(function(e){
    e.preventDefault();

    var datos = $('#registrarUsuario');
    var url = datos.attr('action');


   $.post(url,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            console.log(data)
            $('#modal-usuario-create').modal('hide')
            $('#modal-exito').modal({
                backdrop: 'static',
                keyboard:false
            });
            console.log(data);
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

       if(data.responseJSON.errors.name)
       {
           $('input[name=name]').parent().addClass('has-error')
       }else{
           $('input[name=name]').parent().removeClass('has-error')
       }
        if(data.responseJSON.errors.password)
       {
           $('input[name=password]').parent().addClass('has-error')
       }else{
           $('input[name=password]').parent().removeClass('has-error')
       }
        return;

    });
});

/************************MOSTRAR MODAL***********************************/

$('body').on('click','.new',function(e){


//		alert("hola");
      $('#modal-usuario-create').modal('show');
});


/***************************MOSTRAR DATOS A EDITAR EN  VENTANA MODAL*******************************************/
$('body').on('click','.edit',function(e){


    e.preventDefault();
    $botonPresionado = "edit"

    $('input[name=nombres]').parent().removeClass('has-error')
    $('input[name=nombres]').val('')

    $('label[for=dni]').html('DNI: ');

    var id = $(this).attr('value');
   var cargoselect=$('#modal-usuario-edit #cargo');
    var url = "usuario/"+id+"/edit"
    $.ajax({
        type:"get",
        url:url,
        dataType:"json",
        data:{
            id : id
        },
        success: function(data){
            $('#update').attr('value',data.id)
            console.log(data);
             $('#modal-usuario-edit input[name=editid]').val(data.usuario.id)
            $('#modal-usuario-edit input[name=name]').val(data.usuario.name)

             var cargos = data.cargo
             cargoselect.html('')
            $.each(cargos,function(key,cargo){

                cargoselect.append("<option value='"+key+"'>" + cargo.charAt(0).toUpperCase() + cargo.slice(1) + "</option>");
            });

            cargoselect.val(data.usuario.cargo_id);


            $('#modal-usuario-edit').modal('show');
        },
        error: function(data){
            alert("Error "+json.stringify(data))
        }
    });
});

/************************REALIZAR UPDATE******************************/
$('#update').on('click',function (e) {
    e.preventDefault();
    var url = $('#editarUsuario').attr('action');
    var datos = $('#editarUsuario');
       $.post(url,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            console.log(data)
            $('#modal-usuario-edit').modal('hide')
            $('#modal-exito').modal({
                backdrop: 'static',
                keyboard:false
            });
            $('#modal-exito .modal-body').html('')
            $('#modal-exito .modal-body').append('<h3 class="text-success text-center">Actualización Exitosa</h3>')
            $('#modal-exito').modal('show')

            }else{
            console.log(data.error)
            return;
        }
    }).error(function(data){
        $('#msg-error').fadeIn();
        $('#listaerrores').html('')
            console.log(data);
            $.each(data.responseJSON.errors, function( index, value ) {
              console.log(value)
                $('#listaerrores').append('<li>'+value+'</li>')
            })

       if(data.responseJSON.errors.editnombres)
       {
           $('input[name=editnombres]').parent().addClass('has-error')
       }else{
           $('input[name=editnombres]').parent().removeClass('has-error')
       }
        
        return;

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
    var url = "usuario/delete"

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
            console.log(data)

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
