$(function(){



});
console.log("personados");


var url_='';
$("#cbotuberculosis").change(function(){
          alert($(this).val());
});

$('body').on('click','.conformidadapdos',function(e){
    e.preventDefault();
    console.log('click')
    $tipo = $(this).attr('tipo');
    console.log($tipo);
  //  alert($tipo);
    if($tipo == "registrardos")
    {
      $('.confirmar').attr('estado','conforme')
      $('#modal-confirmacion .modal-body').html('<h3 class="text-warning text-center">Registrar Antecedentes Seccion <br>Personal Dos</h3>')
      $('.confirmar').attr('estado','conforme')
      $('.confirmar').removeClass('btn-danger')
      $('.confirmar').addClass('btn-success')
      $('#modal-confirmacion').modal('show')
    }
     else if($tipo == "actualizardos")
      {

        $('.confirmar').attr('estado','conforme')
        $('#modal-confirmacion .modal-body').html('<h3 class="text-warning text-center">Actualizar Antecedentes Seccion <br>Personal Dos</h3>')
        $('.confirmar').attr('estado','conforme')
        $('.confirmar').removeClass('btn-danger')
        $('.confirmar').addClass('btn-success')
        $('#modal-confirmacion').modal('show')
      }

});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
  //     alert("actualizar");
    $estado = $(this).attr('estado')
//
    var token = $('input[name=_token]').attr('value')

    if($estado == 'eliminar'){

    }else if($estado == 'conforme'){
        if($tipo == "registrardos"){
          url_='/antecedentes/dos/crear';
            $('#registrar_antecedente_personal_dos').submit();
      //    console.log("REGISTRANDO ANTECEDENTE PACIENTE 1");
    }else if($tipo == "actualizardos"){
          url_='/antecedentes/dos/actualizar';
            $('#registrar_antecedente_personal_dos').submit();

        }
    }
});

$('#registrar_antecedente_personal_dos').submit(function(e)
{
  e.preventDefault();


  $.post(url_,$(this).serialize(),function (result) {

  }).success(function(data)
  {
    console.log(data);
      if($.isEmptyObject(data.error)){
        $('#modal-exito').modal({
             backdrop: 'static',
             keyboard:false
        });
        $('#modal-confirmacion').modal('hide');
        $('#modal-exito .modal-body').html('<h3 class="text-success text-center">Registro Exitoso' +'</h3>');
        $('#modal-exito').modal('show')


      }else{
          console.log(data.error)
          return;
      }
  }).error(function(data) {
      $('#msg-error').fadeIn();
      $('#listaerrores').html('')
      $('#modal-confirmacion').modal('hide');
      $.each(data.responseJSON.errors, function( index, value ) {
          console.log(value);
          $('#listaerrores').append('<li>'+value+'</li>')
      });

      return;
  });

});

//  REVISAR CODIGO PEPE
// $('#tuberculosis').on('change',function(e){
//   if($(this).prop('checked')){
//     //console.log('check')
//     $('#txttuberculosis').attr('readonly',false)
//   }else{
//     //console.log('no check')
//     $('#txttuberculosis').attr('readonly',true)
//   }
//   $('#txttuberculosis').val('');
// });






function activardos(chk)
{

  if( $("#"+chk.id+"").prop('checked') )
    {
console.log(chk.id+" entro")
      if(chk.id == 'tuberculosis')
      {

        document.getElementById("txt"+chk.id).readOnly= false ;
        document.getElementById("txt"+chk.id).value="" ;
        document.getElementById("cbo"+chk.id).disabled = false;
      }

      if(chk.id == 'hepatitis')
      {

        document.getElementById("txt"+chk.id).readOnly= false ;
        document.getElementById("txt"+chk.id).value="" ;
        document.getElementById("cbo"+chk.id).disabled = false;
      }

      if(chk.id=='convulsiones')
      {
        document.getElementById("txtctratamientoactual").readOnly= false ;
        document.getElementById("txtctratamientoactual").value="" ;
        document.getElementById("txtanio").readOnly= false ;
        document.getElementById("txtanio").value="" ;
        document.getElementById("txt"+chk.id).readOnly= false ;
        document.getElementById("txt"+chk.id).value="" ;
      }
      if(chk.id=='gastritis')
      {
        document.getElementById("txtgtratamientoactual").readOnly= false ;
        document.getElementById("txtgtratamientoactual").value="" ;
        document.getElementById("txtganio").readOnly= false ;
        document.getElementById("txtganio").value="" ;
        document.getElementById("txt"+chk.id).readOnly= false ;
        document.getElementById("txt"+chk.id).value="" ;
      }
      if(chk.id=='erge')
      {
        document.getElementById("txtergetratamientoactual").readOnly= false ;
        document.getElementById("txtergetratamientoactual").value="" ;
        document.getElementById("txtergeanio").readOnly= false ;
        document.getElementById("txtergeanio").value="" ;
        document.getElementById("txt"+chk.id).readOnly= false ;
        document.getElementById("txt"+chk.id).value="" ;
      }
      if(chk.id =='urolitiasis')
      {
        document.getElementById("txturolitiasisaniotratamientoactual").readOnly= false ;
        document.getElementById("txturolitiasisaniotratamientoactual").value="" ;
        document.getElementById("txturolitiasisanio").readOnly= false ;
        document.getElementById("txturolitiasisanio").value="" ;
      }


      if(chk.id == 'herniainguinal')
      {
        document.getElementById("txt"+chk.id).readOnly= false ;
        document.getElementById("txt"+chk.id).value="" ;
        document.getElementById("cbo"+chk.id).disabled = false;
      }
      if(chk.id == 'lumbalgia')
      {
        document.getElementById("txtlumbalgiaanio").readOnly= false ;
        document.getElementById("txtlumbalgiaanio").value="" ;
        document.getElementById("txtlumbalgiafrecuenciaanual").readOnly= false ;
        document.getElementById("txtlumbalgiafrecuenciaanual").value="" ;
        document.getElementById("cbo"+chk.id).disabled = false;
      }
      if(chk.id=='its')
      {
        document.getElementById("txt"+chk.id).readOnly= false;
        document.getElementById("txt"+chk.id).value="" ;
        document.getElementById("txtitsanio").readOnly= false ;
        document.getElementById("txtitsanio").value="" ;
        document.getElementById("txtitstratamientoactual").readOnly= false ;
        document.getElementById("txtitstratamientoactual").value="" ;
      }
      else
      {
        document.getElementById("txt"+chk.id).value="" ;
        document.getElementById("txt"+chk.id).readOnly= false;
      }
    }
    else
    {

      if(chk.id=='tuberculosis')
      {
        document.getElementById("txt"+chk.id).readOnly= true;
        document.getElementById("txt"+chk.id).value="" ;
        document.getElementById("cbo"+chk.id).disabled = true;
      }
      if(chk.id == 'hepatitis')
      {

        document.getElementById("txt"+chk.id).readOnly= true ;
        document.getElementById("txt"+chk.id).value="" ;
        document.getElementById("cbo"+chk.id).disabled = true;
      }
      if(chk.id=='convulsiones')
      {
        document.getElementById("txtctratamientoactual").readOnly= true ;
        document.getElementById("txtctratamientoactual").value="" ;
        document.getElementById("txtanio").readOnly= true ;
        document.getElementById("txtanio").value="" ;
        document.getElementById("txt"+chk.id).readOnly= true ;
        document.getElementById("txt"+chk.id).value="" ;
      }
      if(chk.id=='gastritis')
      {
        document.getElementById("txtgtratamientoactual").readOnly= true ;
        document.getElementById("txtgtratamientoactual").value="" ;
        document.getElementById("txtganio").readOnly= true ;
        document.getElementById("txtganio").value="" ;
        document.getElementById("txt"+chk.id).readOnly= true ;
        document.getElementById("txt"+chk.id).value="" ;
      }
      if(chk.id=='erge')
      {
        document.getElementById("txtergetratamientoactual").readOnly= true ;
        document.getElementById("txtergetratamientoactual").value="" ;
        document.getElementById("txtergeanio").readOnly= true ;
        document.getElementById("txtergeanio").value="" ;
        document.getElementById("txt"+chk.id).readOnly= true ;
        document.getElementById("txt"+chk.id).value="" ;
      }
      if(chk.id == 'urolitiasis')
      {

        document.getElementById("txturolitiasisaniotratamientoactual").readOnly= true ;
        document.getElementById("txturolitiasisaniotratamientoactual").value="" ;
        document.getElementById("txturolitiasisanio").readOnly= true ;
        document.getElementById("txturolitiasisanio").value="" ;
        }
        if(chk.id == 'herniainguinal')
        {
          document.getElementById("txt"+chk.id).readOnly= true;
          document.getElementById("txt"+chk.id).value="" ;
          document.getElementById("cbo"+chk.id).disabled = true;
        }
        if(chk.id == 'lumbalgia')
        {
          document.getElementById("txtlumbalgiaanio").readOnly= true ;
          document.getElementById("txtlumbalgiaanio").value="" ;
          document.getElementById("txtlumbalgiafrecuenciaanual").readOnly= true ;
          document.getElementById("txtlumbalgiafrecuenciaanual").value="" ;
          document.getElementById("cbo"+chk.id).disabled = true;
        }
        if(chk.id=='its')
        {
          document.getElementById("txt"+chk.id).readOnly= true;
          document.getElementById("txt"+chk.id).value="" ;
          document.getElementById("txtitsanio").readOnly= true ;
          document.getElementById("txtitsanio").value="" ;
          document.getElementById("txtitstratamientoactual").readOnly= true ;
          document.getElementById("txtitstratamientoactual").value="" ;
        }
      else{
        document.getElementById("txt"+chk.id).readOnly= true ;
        document.getElementById("txt"+chk.id).value="" ;
      }
    }
}
