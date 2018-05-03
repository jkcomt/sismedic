$(function(){



});
console.log("PERSONALUNO.JS");

$('body').on('click','.conformidad',function(e){
    e.preventDefault();
    console.log('click')
    $tipo = $(this).attr('tipo');
  //  alert($tipo);
    if($tipo == "registrar")
    {
      $('.confirmar').attr('estado','conforme')
      $('#modal-confirmacion .modal-body').html('<h3 class="text-warning text-center">Registrar Antecedentes Seccion <br>Personal Uno</h3>')
      $('.confirmar').attr('estado','conforme')
      $('.confirmar').removeClass('btn-danger')
      $('.confirmar').addClass('btn-success')
      $('#modal-confirmacion').modal('show')
    }

});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
    $estado = $(this).attr('estado')
    //console.log($estado);
    var token = $('input[name=_token]').attr('value')

    if($estado == 'eliminar'){

    }else if($estado == 'conforme'){
        if($tipo == "registrar"){
            $('#registrar_antecedente_personal_uno').submit();
      //    console.log("REGISTRANDO ANTECEDENTE PACIENTE 1");

        }else if($tipo == "actualizar"){
            $('#registrar_antecedente_personal_uno').submit();
        }
    }
});

$('#registrar_antecedente_personal_uno').submit(function(e)
{
  e.preventDefault();
    var url='/antecedentes/crear';

  $.post(url,$(this).serialize(),function (result) {

  }).success(function(data)
  {
      if($.isEmptyObject(data.error)){
        console.log(data);

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








function activar(chk)
{
  if( $("#"+chk.id+"").prop('checked') )
    {
      if('practicadeportiva'== chk.id)
      {
        document.getElementById("txt"+chk.id).readOnly= false ;
        document.getElementById("txt"+chk.id).value="" ;
        document.getElementById("txtpdfrecuencia").value="" ;
        document.getElementById("txtpdfrecuencia").readOnly= false;
      }
      if(chk.id=='fuma')
      {
        document.getElementById("txt"+chk.id).readOnly= false ;
        document.getElementById("txt"+chk.id).value="" ;
        document.getElementById("cbo"+chk.id).disabled = false;
      }
      if(chk.id=='alcohol')
      {
        document.getElementById("txt"+chk.id).readOnly= false ;
        document.getElementById("txt"+chk.id).value="" ;

        document.getElementById("txtalcoholtiempo").readOnly= false ;
        document.getElementById("txtalcoholtiempo").value="" ;
        document.getElementById("cbo"+chk.id).disabled = false;
      }
      if(chk.id=='coca')
      {
        document.getElementById("txt"+chk.id).readOnly= false ;
        document.getElementById("txt"+chk.id).value="" ;
        document.getElementById("cbo"+chk.id).disabled = false;
      }
      if(chk.id=='diabetesmelitus')
      {
        document.getElementById("txtdmtratamientoactual").readOnly= false ;
        document.getElementById("txtdmtratamientoactual").value="" ;
        document.getElementById("txt"+chk.id).readOnly= false ;
        document.getElementById("txt"+chk.id).value="" ;
      }
      if(chk.id=='hipertencionarterial')
      {
        document.getElementById("txthatratamientoactual").readOnly= false ;
        document.getElementById("txthatratamientoactual").value="" ;
        document.getElementById("txt"+chk.id).readOnly= false ;
        document.getElementById("txt"+chk.id).value="" ;
      }
      if(chk.id=='insuficienciavenosa')
      {
        document.getElementById("txtinsuficienciavenosatratamientoactual").readOnly=false ;
        document.getElementById("txtinsuficienciavenosatratamientoactual").value="" ;
        document.getElementById("txtinsuficienciavenosa").readOnly= false ;
        document.getElementById("txtinsuficienciavenosa").value="" ;
      }
      if(chk.id=='dislipidemia')
      {
        document.getElementById("txtdislipidemiatratamientoactual").readOnly=false ;
        document.getElementById("txtdislipidemiatratamientoactual").value="" ;
        document.getElementById("txt"+chk.id).readOnly= false ;
        document.getElementById("txt"+chk.id).value="" ;
      }
      if(chk.id=='enfermedadestiroidea')
      {
        document.getElementById("txtenfermedadestiroidea").readOnly= false ;
        document.getElementById("txtenfermedadestiroidea").value="" ;
        document.getElementById("txtenfermedadestiroideaanio").readOnly= false ;
        document.getElementById("txtenfermedadestiroideaanio").value="" ;
        document.getElementById("txtenfermedadestiroideatratamientoactual").readOnly= false ;
        document.getElementById("txtenfermedadestiroideatratamientoactual").value="" ;
      }
      if(chk.id=='neoplasias')
      {
        document.getElementById("txtneoplasiasanio").readOnly=false ;
        document.getElementById("txtneoplasiasanio").value="" ;
        document.getElementById("txtneoplasiastratamientoactual").readOnly=false ;
        document.getElementById("txtneoplasiastratamientoactual").value="" ;
        document.getElementById("txt"+chk.id).readOnly= false;
        document.getElementById("txt"+chk.id).value="" ;
      }
      else
      {
              console.log(' if else '+ chk.id);
        document.getElementById("txt"+chk.id).value="" ;
        document.getElementById("txt"+chk.id).readOnly= false ;
      }

    }
    else
    {
        if(chk.id=='practicadeportiva')
        {
          document.getElementById("txt"+chk.id).readOnly= true ;
          document.getElementById("txt"+chk.id).value="" ;
          document.getElementById("txtpdfrecuencia").value="" ;
          document.getElementById("txtpdfrecuencia").readOnly= true;
        }
        if(chk.id=='fuma')
        {
          document.getElementById("txt"+chk.id).readOnly= true ;
          document.getElementById("txt"+chk.id).value="" ;
          document.getElementById("cbo"+chk.id).disabled = true;
        }
        if(chk.id=='alcohol')
        {
          document.getElementById("txt"+chk.id).readOnly= true ;
          document.getElementById("txt"+chk.id).value="" ;
          document.getElementById("txtalcoholtiempo").readOnly= true ;
          document.getElementById("txtalcoholtiempo").value="" ;
          document.getElementById("cbo"+chk.id).disabled = true;
        }
        if(chk.id=='coca')
        {
          document.getElementById("txt"+chk.id).readOnly= true ;
          document.getElementById("txt"+chk.id).value="" ;
          document.getElementById("cbo"+chk.id).disabled = true;
        }
        if(chk.id=='diabetesmelitus')
        {
          document.getElementById("txtdmtratamientoactual").readOnly= true ;
          document.getElementById("txtdmtratamientoactual").value="" ;
          document.getElementById("txt"+chk.id).readOnly= true ;
          document.getElementById("txt"+chk.id).value="" ;
        }
        if(chk.id=='hipertencionarterial')
        {
          document.getElementById("txthatratamientoactual").readOnly= true ;
          document.getElementById("txthatratamientoactual").value="" ;
          document.getElementById("txt"+chk.id).readOnly= true ;
          document.getElementById("txt"+chk.id).value="" ;
        }

        if(chk.id=='insuficienciavenosa')
        {
          document.getElementById("txtinsuficienciavenosatratamientoactual").readOnly=true ;
          document.getElementById("txtinsuficienciavenosatratamientoactual").value="" ;
          document.getElementById("txtinsuficienciavenosa").readOnly= true ;
          document.getElementById("txtinsuficienciavenosa").value="" ;
        }
        if(chk.id=='dislipidemia')
        {
          document.getElementById("txtdislipidemiatratamientoactual").readOnly=true ;
          document.getElementById("txtdislipidemiatratamientoactual").value="" ;
          document.getElementById("txt"+chk.id).readOnly= true ;
          document.getElementById("txt"+chk.id).value="" ;
        }
        if(chk.id=='enfermedadestiroidea')
        {
          document.getElementById("txtenfermedadestiroidea").readOnly= true ;
          document.getElementById("txtenfermedadestiroidea").value="" ;
          document.getElementById("txtenfermedadestiroideaanio").readOnly= true ;
          document.getElementById("txtenfermedadestiroideaanio").value="" ;
          document.getElementById("txtenfermedadestiroideatratamientoactual").readOnly= true ;
          document.getElementById("txtenfermedadestiroideatratamientoactual").value="" ;
        }
        if(chk.id=='neoplasias')
        {
          document.getElementById("txtneoplasiasanio").readOnly=true ;
          document.getElementById("txtneoplasiasanio").value="" ;
          document.getElementById("txtneoplasiastratamientoactual").readOnly=true ;
          document.getElementById("txtneoplasiastratamientoactual").value="" ;
          document.getElementById("txt"+chk.id).readOnly= true;
          document.getElementById("txt"+chk.id).value="" ;
        }
        else{
                console.log('else if '+ chk.id);
          document.getElementById("txt"+chk.id).readOnly= true ;
          document.getElementById("txt"+chk.id).value="" ;
        }
    }
}
