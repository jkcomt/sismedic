$(document).ready(function() {
console.log("personal audiometria.js ");
});

$('body').on('click','.delete',function (e) {
    e.preventDefault();
    var id = $(this).attr('id')
    $('.confirmar').attr('id',id)
    $('#modal-confirmacion h3').text('Eliminar  Personal de Audiometria');
    $('#btn_modal_confirmacion').removeClass("btn-success").addClass('btn-danger');
    $('#modal-confirmacion').modal({
        show:true,
        keyboard:false
    })

});

$('body').on('click','.registrarpersonalaudiometria',function(e) {
    e.preventDefault();
       $('.confirmar').attr('estado','registrar')
      $('#modal_personal_Audiometria_create').modal('hide');
      $('#modal-confirmacion h3').text('Registrar Personal de Audiometria');
      $('#btn_modal_confirmacion').removeClass( "btn-danger").addClass('btn-success');
      $('#modal-confirmacion').modal('show')
});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
    if($(this).attr('estado')=='registrar')
    {
      $('body #PersonalAudiometria').trigger('submit');
    }
    else{
        eliminar( $(this).attr('id'));
    }
});
/***************************CREATE*********************************/
$('#PersonalAudiometria').submit(function(e){
    e.preventDefault();
    var url = '/personal_audiometria/crear';
   $.post(url,$(this).serialize(),function (result) {
    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            console.log(data)
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

/************************MOSTRAR MODAL***********************************/

$('body').on('click','.new',function(e){
	//	alert("hola");
      $('#modal_personal_Audiometria_create').modal('show');
});


/***************************MOSTRAR DATOS A EDITAR EN  VENTANA MODAL*******************************************/
$('body').on('click','.edit',function(e){
    e.preventDefault();
    var id = $(this).attr('value');
    var url = "/personal_audiometria/"+id+"/edit"
    $.ajax({
        type:"get",
        url:url,
        dataType:"json",
        data:{
            id : id
        },
        success: function(data){
            $('#update').attr('value',data.id)
            $('#modal_personal_Audiometria_edit input[name=editpersonal]').val(data.personal)
            $('#modal_personal_Audiometria_edit input[name=editdni]').val(data.dni)
            $('#modal_personal_Audiometria_edit').modal('show');
        },
        error: function(data){
            alert("Error "+json.stringify(data))
        }
    });
});

/************************REALIZAR UPDATE******************************/

$('#update').on('click',function (e) {
    e.preventDefault();

    var url = $('#update_personal_Audiometria').attr('action');

    var id = $('#update').attr('value')
    var personal = $('input[name=editpersonal]').val()
    var dni = $('input[name=editdni]').val()
    var token = $('input[name=_token]').val()

  $.ajax({
        type:"post",
        url:url,
        headers: {'X-CSRF-TOKEN':token},
        dataType:"json",
        data:{
            id : id,
            personal: personal,
            dni:dni
        },
        success: function(data){
            $('#modal-personalAudiometria-edit').modal('hide');
            location.reload();
        },
        error: function(data){
          alert("error: "+data)
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


function eliminar(id)
{
  var id =id
  var token = $('input[name=_token]').attr('value')
  var url = "personal_audiometria/delete"
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
}
