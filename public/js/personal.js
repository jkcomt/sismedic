$(document).ready(function() {

    $('#msg-error').hide();
console.log("personal.js ");
});

/***************************CREATE*********************************/
$('#registrarPersonal').submit(function(e){
    e.preventDefault();

    var datos = $('#registrarPersonal');
    var url = datos.attr('action');

   $.post(url,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            console.log(data)
            $('#modal-personal-create').modal('hide')
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

       if(data.responseJSON.errors.nombres)
       {
           $('input[name=nombres]').parent().addClass('has-error')
       }else{
           $('input[name=nombres]').parent().removeClass('has-error')
       }
         if(data.responseJSON.errors.apellidos)
       {
           $('input[name=apellidos]').parent().addClass('has-error')
       }else{
           $('input[name=apellidos]').parent().removeClass('has-error')
       }
         if(data.responseJSON.errors.dni)
       {
           $('input[name=dni]').parent().addClass('has-error')
       }else{
           $('input[name=dni]').parent().removeClass('has-error')
       }
         if(data.responseJSON.errors.celular)
       {
           $('input[name=celular]').parent().addClass('has-error')
       }else{
           $('input[name=celular]').parent().removeClass('has-error')
       }
         if(data.responseJSON.errors.direccion)
       {
           $('input[name=direccion]').parent().addClass('has-error')
       }else{
           $('input[name=direccion]').parent().removeClass('has-error')
       }
         if(data.responseJSON.errors.email)
       {
           $('input[name=email]').parent().addClass('has-error')
       }else{
           $('input[name=email]').parent().removeClass('has-error')
       }
         if(data.responseJSON.errors.celular)
       {
           $('input[name=celular]').parent().addClass('has-error')
       }else{
           $('input[name=celular]').parent().removeClass('has-error')
       }

        return;

    });
});

/************************MOSTRAR MODAL***********************************/

$('body').on('click','.new',function(e){


//		alert("hola");
      $('#modal-personal-create').modal('show');
});


/***************************MOSTRAR DATOS A EDITAR EN  VENTANA MODAL*******************************************/
$('body').on('click','.edit',function(e){


    e.preventDefault();
    $botonPresionado = "edit"

    $('input[name=nombres]').parent().removeClass('has-error')
    $('input[name=nombres]').val('')

    $('label[for=dni]').html('DNI: ');

    var id = $(this).attr('value');

    var url = "personal/"+id+"/edit"
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
            $('#modal-personal-edit input[name=editid]').val(data.id)
            $('#modal-personal-edit input[name=editnombres]').val(data.nombres)
            $('#modal-personal-edit input[name=editapellidos]').val(data.apellidos)
            $('#modal-personal-edit input[name=editdni]').val(data.dni)
            $('#modal-personal-edit input[name=editemail]').val(data.email)
            $('#modal-personal-edit input[name=editdireccion]').val(data.direccion)
            $('#modal-personal-edit input[name=editcelular]').val(data.celular)
            $('#modal-personal-edit').modal('show');
        },
        error: function(data){
            alert("Error "+json.stringify(data))
        }
    });
});

/************************REALIZAR UPDATE******************************/

$('#update').on('click',function (e) {
    e.preventDefault();

    var url = $('#editarPersonal').attr('action');
    var datos = $('#editarPersonal');

       $.post(url,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            console.log(data)
            $('#modal-personal-edit').modal('hide')
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
         if(data.responseJSON.errors.editapellidos)
       {
           $('input[name=editapellidos]').parent().addClass('has-error')
       }else{
           $('input[name=editapellidos]').parent().removeClass('has-error')
       }
         if(data.responseJSON.errors.editdni)
       {
           $('input[name=editdni]').parent().addClass('has-error')
       }else{
           $('input[name=editdni]').parent().removeClass('has-error')
       }
         if(data.responseJSON.errors.editcelular)
       {
           $('input[name=editcelular]').parent().addClass('has-error')
       }else{
           $('input[name=editcelular]').parent().removeClass('has-error')
       }
         if(data.responseJSON.errors.editdireccion)
       {
           $('input[name=editdireccion]').parent().addClass('has-error')
       }else{
           $('input[name=editdireccion]').parent().removeClass('has-error')
       }
         if(data.responseJSON.errors.editemail)
       {
           $('input[name=editemail]').parent().addClass('has-error')
       }else{
           $('input[name=editemail]').parent().removeClass('has-error')
       }
         if(data.responseJSON.errors.editcelular)
       {
           $('input[name=editcelular]').parent().addClass('has-error')
       }else{
           $('input[name=editcelular]').parent().removeClass('has-error')
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
    var url = "personal/delete"

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
