$(document).ready(function() {

    $('#msg-error').hide();

    $('#filtro').trigger('change');
    console.log("paciente");
    //$("select[name=paisOrigen]").val("13");

    //$('select[name=paisOrigen]').trigger('change');
    //console.log($("select[name=paisOrigen]").val())
});
$idCita = '';
$("select[name=paisOrigen]").on('change',function(e){
     //e.preventDefault();
     console.log($(this).val())

    $filtro = $(this).val();
    // e.preventDefault();
    var token = $('input[name=_token]').attr('value')

    //var url = "/departamentos/filtro"
    var url = $('#departamentoUrlFiltro').val();
    console.log(url)
    $.ajax({
        type:"get",
        headers: {'X-CSRF-TOKEN':token},
        url:url,
        dataType:"json",
        data:{
            //buscar : valor,
            filtro : $filtro
        },
        success: function(data){
            console.log(JSON.stringify(data))
            $('#departamentoGroup').html(data.html)

        },
        error: function(data){
            console.log("Error "+JSON.stringify(data))
        }
    });
});

$('body').on('change','.departamentoOrigen',function(e){
    //e.preventDefault();
    //console.log($(this).val())

    $filtro = $(this).val();
    // e.preventDefault();
    var token = $('input[name=_token]').attr('value')

    //var url = "/provincias/filtro"
    var url = $('#provinciaUrlFiltro').val();
    $.ajax({
        type:"get",
        headers: {'X-CSRF-TOKEN':token},
        url:url,
        dataType:"json",
        data:{
            //buscar : valor,
            filtro : $filtro
        },
        success: function(data){
            //console.log(JSON.stringify(data))
            $('#provinciaGroup').html(data.html)

        },
        error: function(data){
            alert("Error "+json.stringify(data))
        }
    });
});

$('body').on('change','.provinciaOrigen',function(e){
    e.preventDefault();
    //console.log($(this).val())

    $filtro = $(this).val();
    // e.preventDefault();
    var token = $('input[name=_token]').attr('value')

    //var url = "/provincias/filtro"
    var url = $('#distritoUrlFiltro').val();
    $.ajax({
        type:"get",
        headers: {'X-CSRF-TOKEN':token},
        url:url,
        dataType:"json",
        data:{
            //buscar : valor,
            filtro : $filtro
        },
        success: function(data){
            //console.log(JSON.stringify(data))
            $('#distritoGroup').html(data.html)
        },
        error: function(data){
            alert("Error "+json.stringify(data))
        }
    });
});

$("select[name=paisOrigenDom]").on('change',function(e){
    //e.preventDefault();
    //console.log($(this).val())

    $filtro = $(this).val();
    // e.preventDefault();
    var token = $('input[name=_token]').attr('value')

    //var url = "/departamentos/filtrodomicilio"
    var url = $('#departamentoDomUrlFiltro').val()
    $.ajax({
        type:"get",
        headers: {'X-CSRF-TOKEN':token},
        url:url,
        dataType:"json",
        data:{
            //buscar : valor,
            filtro : $filtro
        },
        success: function(data){
            //console.log(JSON.stringify(data))
            $('#departamentoDomGroup').html(data.html)

        },
        error: function(data){
            alert("Error "+json.stringify(data))
        }
    });
});

$('body').on('change','.departamentoDomicilio',function(e){
    //e.preventDefault();
    //console.log($(this).val())

    $filtro = $(this).val();
    // e.preventDefault();
    var token = $('input[name=_token]').attr('value')

    //var url = "/provincias/filtrodomicilio"
    var url = $('#provinciaDomUrlFiltro').val()
    $.ajax({
        type:"get",
        headers: {'X-CSRF-TOKEN':token},
        url:url,
        dataType:"json",
        data:{
            //buscar : valor,
            filtro : $filtro
        },
        success: function(data){
            //console.log(JSON.stringify(data))
            $('#provinciaDomGroup').html(data.html)

        },
        error: function(data){
            alert("Error "+json.stringify(data))
        }
    });
});

$('body').on('change','.provinciaDomicilio',function(e){
    e.preventDefault();
    //console.log($(this).val())

    $filtro = $(this).val();
    // e.preventDefault();
    var token = $('input[name=_token]').attr('value')

    //var url = "/provincias/filtro"
    var url = $('#distritoDomUrlFiltro').val();
    $.ajax({
        type:"get",
        headers: {'X-CSRF-TOKEN':token},
        url:url,
        dataType:"json",
        data:{
            //buscar : valor,
            filtro : $filtro
        },
        success: function(data){
            //console.log(JSON.stringify(data))
            $('#distritoDomGroup').html(data.html)
        },
        error: function(data){
            alert("Error "+json.stringify(data))
        }
    });
});

$('#registrarPaciente').submit(function(e){
    e.preventDefault();

    var datos = $('#registrarPaciente');
    var url = datos.attr('action');

   $.post(url,datos.serialize(),function (result) {

    }).success(function(data)
    {

        if($.isEmptyObject(data.error)){
            console.log(data)
            $idCita =data.mensaje.id;
            $('#modal-exito').modal({
                backdrop: 'static',
                keyboard:false
            });
            $('.modal-body').html('<h3 class="text-success text-center"> Paciente Registro Exitosamente </h3> '+'<div class="text-center"><button type="button" name="imprimirPaciente" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-print"></span> Imprimir  Paciente</button></div>')
            $('#modal-exito').modal('show')
        }else{
            console.log(data.error)
            return;
        }
    }).error(function(data){
        // $('#msg-error').fadeIn();
        // $('#listaerrores').html('')
        // COMENTARIO TEMPORAL
        // $.each(data.responseJSON.errors, function( index, value ) {
        //   console.log(value)
        //     $('#listaerrores').append('<li>'+value+'</li>')
        // })
       // if(data.responseJSON.errors.matricula)
       // {
       //     $('input[name=matricula]').parent().addClass('has-error');
       //     $('input[name=matricula]').focus();
       //    }
       //  else

      console.log(data.responseJSON.errors);
         if(data.responseJSON.errors.apellido_paterno)
        {
           $('input[name=apellido_paterno]').parent().addClass('has-error')
            $('input[name=apellido_paterno]').focus()
  /*          if(data.responseJSON.errors.apellido_materno) $('input[name=apellido_materno]').parent().addClass('has-error')
            if(data.responseJSON.errors.nombres)  $('input[name=nombres]').parent().addClass('has-error')
            if(data.responseJSON.errors.paisOrigen)  $('#paisOrigen').parent().addClass('has-error')
            if(data.responseJSON.errors.departamentoOrigen)$('#departamentoOrigen').parent().addClass('has-error')
*/
          }
        if(data.responseJSON.errors.apellido_materno)
         {
             $('input[name=apellido_materno]').parent().addClass('has-error')
             $('input[name=apellido_materno]').focus()

         }
       if(data.responseJSON.errors.nombres)
         {
             $('input[name=nombres]').parent().addClass('has-error')
             $('input[name=nombres]').focus()
         }
         if(data.responseJSON.errors.jefe_inmediato)
         {
             $('input[name=jefe_inmediato]').parent().addClass('has-error')
              $('input[name=jefe_inmediato]').focus()
         }
           if(data.responseJSON.errors.departamentoOrigen)
         {
             $('#departamentoOrigen').parent().addClass('has-error')
             $('#departamentoOrigen').focus()

         }
           if(data.responseJSON.errors.distritoOrigen)
         {
             $('#distritoOrigen').parent().addClass('has-error')
              $('#distritoOrigen').focus()
         }
         if(data.responseJSON.errors.provinciaOrigen)
        {
            $('#provinciaOrigen').parent().addClass('has-error')
            $('#provinciaOrigen').focus()
        }

         if(data.responseJSON.errors.departamentoDomicilio)
       {
           $('#departamentoDomGroup').parent().addClass('has-error')
            $('#departamentoDomGroup').focus()
       }
        if(data.responseJSON.errors.provinciaDomicilio)
       {
           $('#provinciaDomGroup').parent().addClass('has-error')
           $('#provinciaDomGroup').focus()
       }
       if(data.responseJSON.errors.distritoDom)
      {
          $('#distritoDom').parent().addClass('has-error')
          $('#distritoDom').focus()
      }
        if(data.responseJSON.errors.direccion)
      {
          $('#direcciontxt').parent().addClass('has-error')
            $('#direcciontxt').focus()
      }
       if(data.responseJSON.errors.telf_fijo)
      {
          $('input[name=telf_fijo]').parent().addClass('has-error')
          $('input[name=telf_fijo]').focus();
      }
        if(data.responseJSON.errors.celular)
       {
           $('input[name=celular]').parent().addClass('has-error')
           $('input[name=celular]').focus();
       }
        if(data.responseJSON.errors.trabajo)
       {
          $('input[name=trabajo]').parent().addClass('has-error')
          $('input[name=celular]').focus();
       }
        if(data.responseJSON.errors.tipo_dni)
       {
          $('select[name=tipo_dni]').parent().addClass('has-error')
            $('select[name=tipo_dni]').focus();
       }
        if(data.responseJSON.errors.num_dni)
       {
           $('input[name=num_dni]').parent().addClass('has-error')
           $('input[name=num_dni]').focus();
       }
        if(data.responseJSON.errors.num_dni)
       {
           $('input[name=num_dni]').parent().addClass('has-error')
           $('input[name=num_dni]').focus();
       }
        if(data.responseJSON.errors.email)
       {
           $('#emails').parent().addClass('has-error')
           $('#emails').focus();
       }
       if(data.responseJSON.errors.comentarios)
      {
          $('#comentarios').parent().addClass('has-error')
          $('#comentarios').focus();
      }
      if(data.responseJSON.errors.alergias)
     {
         $('#alergias').parent().addClass('has-error')
          $('#alergias').focus();
     }
     if(data.responseJSON.errors.regimen)
    {
        $('#regimen').parent().addClass('has-error')
        $('#regimen').focus();
    }
    if(data.responseJSON.errors.tiempo_desempeno)
   {
       $('#tiempo_desempeno').parent().addClass('has-error')
       $('#tiempo_desempeno').focus();
   }
   if(data.responseJSON.errors.regimen_descripcion)
  {
      $('#regimen_descripcion').parent().addClass('has-error')
      $('#regimen_descripcion').focus();
  }
        return;
    });
});

$('#actualizarPaciente').submit(function(e){
    e.preventDefault();

    var datos = $('#actualizarPaciente');
    var url = datos.attr('action');

    $.post(url,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            console.log(data)
              $idCita =data.mensaje.id;
            $('#modal-exito').modal({
                backdrop: 'static',
                keyboard:false
            });
            $('.modal-body').html('<h3 class="text-success text-center"> Paciente Actualizo Exitosamente </h3> '+'<div class="text-center"><button type="button" name="imprimirPaciente" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-print"></span> Imprimir  Paciente</button></div>')
            $('#modal-exito').modal('show')
        }else{
            console.log(data.error)
            return;
        }
    }).error(function(data){
    //    $('#msg-error').fadeIn();
    //    $('#listaerrores').html('')

        $.each(data.responseJSON.errors, function( index, value ) {
            console.log(value)
          //  $('#listaerrores').append('<li>'+value+'</li>')
          if(data.responseJSON.errors.apellido_paterno)
         {
            $('input[name=apellido_paterno]').parent().addClass('has-error')
             $('input[name=apellido_paterno]').focus()
   /*          if(data.responseJSON.errors.apellido_materno) $('input[name=apellido_materno]').parent().addClass('has-error')
             if(data.responseJSON.errors.nombres)  $('input[name=nombres]').parent().addClass('has-error')
             if(data.responseJSON.errors.paisOrigen)  $('#paisOrigen').parent().addClass('has-error')
             if(data.responseJSON.errors.departamentoOrigen)$('#departamentoOrigen').parent().addClass('has-error')
  */
           }
         if(data.responseJSON.errors.apellido_materno)
          {
              $('input[name=apellido_materno]').parent().addClass('has-error')
              $('input[name=apellido_materno]').focus()

          }
        if(data.responseJSON.errors.nombres)
          {
              $('input[name=nombres]').parent().addClass('has-error')
              $('input[name=nombres]').focus()
          }
          if(data.responseJSON.errors.jefe_inmediato)
          {
              $('input[name=jefe_inmediato]').parent().addClass('has-error')
               $('input[name=jefe_inmediato]').focus()
          }
            if(data.responseJSON.errors.departamentoOrigen)
          {
              $('#departamentoOrigen').parent().addClass('has-error')
              $('#departamentoOrigen').focus()

          }
            if(data.responseJSON.errors.distritoOrigen)
          {
              $('#distritoOrigen').parent().addClass('has-error')
               $('#distritoOrigen').focus()
          }
          if(data.responseJSON.errors.provinciaOrigen)
         {
             $('#provinciaOrigen').parent().addClass('has-error')
             $('#provinciaOrigen').focus()
         }

          if(data.responseJSON.errors.departamentoDomicilio)
        {
            $('#departamentoDomGroup').parent().addClass('has-error')
             $('#departamentoDomGroup').focus()
        }
         if(data.responseJSON.errors.provinciaDomicilio)
        {
            $('#provinciaDomGroup').parent().addClass('has-error')
            $('#provinciaDomGroup').focus()
        }
        if(data.responseJSON.errors.distritoDom)
       {
           $('#distritoDom').parent().addClass('has-error')
           $('#distritoDom').focus()
       }
         if(data.responseJSON.errors.direccion)
       {
           $('#direcciontxt').parent().addClass('has-error')
             $('#direcciontxt').focus()
       }
        if(data.responseJSON.errors.telf_fijo)
       {
           $('input[name=telf_fijo]').parent().addClass('has-error')
           $('input[name=telf_fijo]').focus();
       }
         if(data.responseJSON.errors.celular)
        {
            $('input[name=celular]').parent().addClass('has-error')
            $('input[name=celular]').focus();
        }
         if(data.responseJSON.errors.trabajo)
        {
           $('input[name=trabajo]').parent().addClass('has-error')
           $('input[name=celular]').focus();
        }
         if(data.responseJSON.errors.tipo_dni)
        {
           $('select[name=tipo_dni]').parent().addClass('has-error')
             $('select[name=tipo_dni]').focus();
        }
         if(data.responseJSON.errors.num_dni)
        {
            $('input[name=num_dni]').parent().addClass('has-error')
            $('input[name=num_dni]').focus();
        }
         if(data.responseJSON.errors.num_dni)
        {
            $('input[name=num_dni]').parent().addClass('has-error')
            $('input[name=num_dni]').focus();
        }
         if(data.responseJSON.errors.email)
        {
            $('#emails').parent().addClass('has-error')
            $('#emails').focus();
        }
        if(data.responseJSON.errors.comentarios)
       {
           $('#comentarios').parent().addClass('has-error')
           $('#comentarios').focus();
       }
       if(data.responseJSON.errors.alergias)
      {
          $('#alergias').parent().addClass('has-error')
           $('#alergias').focus();
      }
      if(data.responseJSON.errors.regimen)
     {
         $('#regimen').parent().addClass('has-error')
         $('#regimen').focus();
     }
     if(data.responseJSON.errors.tiempo_desempeno)
    {
        $('#tiempo_desempeno').parent().addClass('has-error')
        $('#tiempo_desempeno').focus();
    }
    if(data.responseJSON.errors.regimen_descripcion)
     {
         $('#regimen_descripcion').parent().addClass('has-error')
         $('#regimen_descripcion').focus();
     }
       return;
        })


    });
});


$('.modal-footer #create-paciente').on('click',function (event) {
    event.preventDefault();
    //$('#limpiar').trigger('click');
    $('#msg-error').hide();
    location.reload()
    //$('#modal-exito').modal('hide')
});

$('body').on('click','.delete',function (e) {
    e.preventDefault();

    $botonPresionado = 'eliminar'

    var id = $(this).attr('id')
    $('.confirmar').attr('id',id)
    $('.confirmar').attr('estado','eliminar')
    $('#modal-confirmacion').modal('show')
});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
    $estado = $(this).attr('estado')
    var id = $(this).attr('id')
    var token = $('input[name=_token]').attr('value')
    if($estado == 'eliminar') {
        //var url = "/pacientes/delete"
        var url = $('#deletePaciente').val()
        console.log(id)
        $.ajax({
            type: "post",
            url: url,
            headers: {'X-CSRF-TOKEN': token},
            dataType: "json",
            data: {
                id: id
            },
            success: function (data) {
                console.log(data.responseJSON)
                $('#modal-confirmacion').modal('hide')
                $('#modal-exito').modal('show')

            },
            error: function (data) {
                console.log(data.responseJSON)
            }
        });
    }
});

$('#fecha_nacimiento').on('change',function(e){
   e.preventDefault();
   $fechaNacimiento = new Date($(this).val());
   $hoy = new Date();
   $edad = Math.floor(($hoy-$fechaNacimiento) / (365.25 * 24 * 60 * 60 * 1000));
   $('#edad').val($edad)
   //console.log("edad "+$edad);
});

$('#fecha_ingreso').on('change',function(e){
    e.preventDefault();
    $fechaIngreso = new Date($(this).val());
    $fechaNacimiento =  new Date($('#fecha_nacimiento').val());
    $edad = Math.floor(($fechaIngreso-$fechaNacimiento) / (365.25 * 24 * 60 * 60 * 1000));
    $('#edad_ingreso').val($edad)
    console.log("edad "+$edad);
});

$filtro = "";
$('#filtro').on('change',function(e){
    e.preventDefault();
    $filtro = $(this).val();
});

$('#buscarPaciente').on('keyup',function(){
    valor = $(this).val();

    $filtro = $('#filtro').val();

    // e.preventDefault();
    var token = $('input[name=_token]').attr('value')

    var url = "/pacientes/buscar";
    //var url = $('#buscarUrlPaciente').val();
    $.ajax({
        type:"post",
        headers: {'X-CSRF-TOKEN':token},
        url:url,
        dataType:"json",
        data:{
            buscar : valor,
            filtro: $filtro
        },
        success: function(data){
            $('#tabla').html(data.html)
        },
        error: function(data){
            //console.log("Error "+JSON.stringify(data))
        }
    });
});

$('body').on('click','button[name=imprimirPaciente]',function(e){
  var url = window.location.protocol + "//" + window.location.host+"/pacientes/reporte/"+$idCita+"/detalle/"
  window.open(url, '_blank');
});
