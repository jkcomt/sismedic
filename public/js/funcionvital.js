$(document).ready(function() {
    $('#msg-error').hide();
    $('#tipoBusqueda').trigger('change');
    startdate = fechaActual();
    enddate = startdate;
    $( "#calcular_imc_edit" ).trigger( "click" );
    $( "#calcular_icc_edit" ).trigger( "click" );

});
var startdate;
var enddate;
var origen = "funcion_vital";
function fechaActual(){
    var today = new Date();
    var dd = today.getDate();

    var mm = today.getMonth()+1;
    var yyyy = today.getFullYear();
    if(dd<10)
    {
        dd='0'+dd;
    }

    if(mm<10)
    {
        mm='0'+mm;
    }
    today = yyyy+'-'+mm+'-'+dd;
    return today;
}


$botonPresionado = '';
$tipo = '';
$('body').on('click','.conformidad',function(e){
    e.preventDefault();

    console.log('click')

    $botonPresionado = 'conforme';

    $tipo = $(this).attr('tipo');
    console.log($tipo)
    if($tipo == "registrar")
    {
        $('.confirmar').attr('estado','conforme')

        $('#modal-confirmacion .modal-body').html('<h3 class="text-warning text-center">¿Registrar Funciones Vitales?</h3>')
        $('.confirmar').attr('estado','conforme')

        $('.confirmar').removeClass('btn-danger')
        $('.confirmar').addClass('btn-success')
        $('#modal-confirmacion').modal('show')

    }else if($tipo == "actualizar"){
        $('.confirmar').attr('estado','conforme')

        $('#modal-confirmacion .modal-body').html('<h3 class="text-warning text-center">¿Actualizar Funciones Vitales?</h3>')
        $('.confirmar').attr('estado','conforme')

        $('.confirmar').removeClass('btn-danger')
        $('.confirmar').addClass('btn-success')
        $('#modal-confirmacion').modal('show')
    }
    else if($tipo=="eliminar")
    {
      $('.confirmar').attr('estado','conforme')
      $('#modal-confirmacion .modal-body').html('<h3 class="text-warning text-center">¿Deseas Eliminar Funciones Vitales?</h3>')
      $('#modal-confirmacion .confirmar').attr('estado','eliminar')
      $('#modal-confirmacion .confirmar').attr('id',$(this).attr('id'));
      $('#modal-confirmacion .confirmar').removeClass('btn-danger')
      $('#modal-confirmacion .confirmar').addClass('btn-success')
      $('#modal-confirmacion').modal('show')
    }
});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
    $estado = $(this).attr('estado')
    //console.log($estado);
    var token = $('input[name=_token]').attr('value')

    if($estado == 'eliminar') {
        $(this).attr('disabled','disabled');
        var url = "/funcion_vital/delete"
        var id = $(this).attr('id')
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
    }else if($estado == 'conforme'){
        if($tipo == "registrar"){
            $('#registrarFuncionVital').submit();
        }else if($tipo == "actualizar"){
            $('#editarFuncionVital').submit();
        }
    }
});

$('#registrarFuncionVital').submit(function(e){
    e.preventDefault();

    var datos = $('#registrarFuncionVital');
    var url = datos.attr('action');

    $.post(url,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            console.log(data)
            $('#modal-confirmacion').modal('hide');
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
        });

        // if(data.responseJSON.errors.matricula)
        // {
        //     $('input[name=matricula]').parent().addClass('has-error')
        // }else{
        //     $('input[name=matricula]').parent().removeClass('has-error')
        // }
        //
        // if(data.responseJSON.errors.apellido_materno)
        // {
        //     $('input[name=apellido_materno]').parent().addClass('has-error')
        //
        // }else{
        //     $('input[name=apellido_materno]').parent().removeClass('has-error')
        // }
        //
        // if(data.responseJSON.errors.apellido_paterno)
        // {
        //     $('input[name=apellido_paterno]').parent().addClass('has-error')
        //
        // }else{
        //     $('input[name=apellido_paterno]').parent().removeClass('has-error')
        // }
        //
        // if(data.responseJSON.errors.nombres)
        // {
        //     $('input[name=nombres]').parent().addClass('has-error')
        //
        // }else{
        //     $('input[name=nombres]').parent().removeClass('has-error')
        // }
        //
        // if(data.responseJSON.errors.jefe_inmediato)
        // {
        //     $('input[name=jefe_inmediato]').parent().addClass('has-error')
        //
        // }else{
        //     $('input[name=jefe_inmediato]').parent().removeClass('has-error')
        // }
        //
        // if(data.responseJSON.errors.departamentoOrigen)
        // {
        //     $('#departamentoOrigen').parent().addClass('has-error')
        //
        // }else{
        //     $('#departamentoOrigen').parent().removeClass('has-error')
        // }
        //
        // if(data.responseJSON.errors.provinciaOrigen)
        // {
        //     $('select[name=provinciaOrigen]').parent().addClass('has-error')
        //
        // }else{
        //     $('select[name=provinciaOrigen]').parent().removeClass('has-error')
        // }
        //
        // if(data.responseJSON.errors.departamentoDomicilio)
        // {
        //     $('#departamentoDomGroup').parent().addClass('has-error')
        //
        // }else{
        //     $('#departamentoDomGroup').parent().removeClass('has-error')
        // }
        //
        // if(data.responseJSON.errors.provinciaDomicilio)
        // {
        //     $('#provinciaDomGroup').parent().addClass('has-error')
        //
        // }else{
        //     $('#provinciaDomGroup').parent().removeClass('has-error')
        // }
        //
        // if(data.responseJSON.errors.direccion)
        // {
        //     $('#direccionGroup').parent().addClass('has-error')
        //
        // }else{
        //     $('#direccionGroup').parent().removeClass('has-error')
        // }
        //
        // if(data.responseJSON.errors.telf_fijo)
        // {
        //     $('input[name=telf_fijo]').parent().addClass('has-error')
        //
        // }else{
        //     $('input[name=telf_fijo]').parent().removeClass('has-error')
        // }
        //
        // if(data.responseJSON.errors.celular)
        // {
        //     $('input[name=celular]').parent().addClass('has-error')
        //
        // }else{
        //     $('input[name=celular]').parent().removeClass('has-error')
        // }
        //
        // if(data.responseJSON.errors.trabajo)
        // {
        //     $('input[name=trabajo]').parent().addClass('has-error')
        //
        // }else{
        //     $('input[name=trabajo]').parent().removeClass('has-error')
        // }
        //
        // if(data.responseJSON.errors.tipo_dni)
        // {
        //     $('select[name=tipo_dni]').parent().addClass('has-error')
        //
        // }else{
        //     $('select[name=tipo_dni]').parent().removeClass('has-error')
        // }
        //
        // if(data.responseJSON.errors.num_dni)
        // {
        //     $('input[name=num_dni]').parent().addClass('has-error')
        //
        // }else{
        //     $('input[name=num_dni]').parent().removeClass('has-error')
        // }
        //
        // if(data.responseJSON.errors.nr_hijo_vivos)
        // {
        //     $('input[name=nr_hijo_vivos]').parent().addClass('has-error')
        //
        // }else{
        //     $('input[name=nr_hijo_vivos]').parent().removeClass('has-error')
        // }
        //
        // if(data.responseJSON.errors.nr_hijo_muertos)
        // {
        //     $('input[name=nr_hijo_muertos]').parent().addClass('has-error')
        //
        // }else{
        //     $('input[name=nr_hijo_muertos]').parent().removeClass('has-error')
        // }
        //
        // if(data.responseJSON.errors.seccion)
        // {
        //     $('input[name=seccion]').parent().addClass('has-error')
        //
        // }else{
        //     $('input[name=seccion]').parent().removeClass('has-error')
        // }

        return;

    });

});

$('#editarFuncionVital').submit(function(e){
  e.preventDefault();

  var datos = $('#editarFuncionVital');
  var url = datos.attr('action');

  $.post(url,datos.serialize(),function (result) {

  }).success(function(data)
  {

      if($.isEmptyObject(data.error)){
          console.log(data)
          $('#modal-confirmacion').modal('hide');
          $('#modal-exito').modal({
              backdrop: 'static',
              keyboard:false
          });
          $('#modal-exito .modal-body').html('<h3 class="text-success text-center">Actualización exitosa</h3>')
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
      });
      return;
  });
});


$('#buscarFuncionVital').on('keyup',function(){
  //   valor = $(this).val();
  //   $filtro = $('#filtro').val();
  //   var token = $('input[name=_token]').attr('value')
  //   var url = "/funcion_vital/buscar";
  //
  //   $.ajax({
  //       type:"post",
  //       headers: {'X-CSRF-TOKEN':token},
  //       url:url,
  //       dataType:"json",
  //       data:{
  //           buscar : valor,
  //           filtro: $filtro
  //       },
  //       success: function(data){
  // $('#tabla').html(data.html)
  //       },
  //       error: function(data){
  //           //console.log("Error "+JSON.stringify(data))
  //       }
  //   });
});




////
$tipoBusqueda = ''
$('#tipoBusqueda').on('change',function(e){
    e.preventDefault();
    $tipoBusqueda = $(this).val();

    $dni = false;
    $paciente = false;
    $fechaDesde = false;
    $fechaHasta = false;

    console.log($tipoBusqueda)

    if($tipoBusqueda == "dni"){
        $dni = false;
        $paciente = true;
        $fechaDesde = true;
        $fechaHasta = true;
    }else if($tipoBusqueda == "paciente"){
        $dni = true;
        $paciente = false;
        $fechaDesde = true;
        $fechaHasta = true;
    }else if($tipoBusqueda == "paciente_fecha"){
        $dni = true;
        $paciente = false;
        $fechaDesde = false;
        $fechaHasta = false;
    }else if($tipoBusqueda == "fecha"){
        $dni = true;
        $paciente = true;
        $fechaDesde = false;
        $fechaHasta = false;
    }else if($tipoBusqueda == "dni_fecha"){
        $dni = false;
        $paciente = true;
        $fechaDesde = false;
        $fechaHasta = false;
    }
    else if($tipoBusqueda == "dni_paciente"){
        $dni = false;
        $paciente = false;
        $fechaDesde = true;
        $fechaHasta = true;
    }else if($tipoBusqueda == "dni_paciente_fecha"){
        $dni = false;
        $paciente = false;
        $fechaDesde = false;
        $fechaHasta = false;
    }

    $('input[name=buscarcitadni]').attr('readonly',$dni);
    $('input[name=buscarcitapaciente]').attr('readonly',$paciente);
    $('input[name=desde]').attr('readonly',$fechaDesde);
    $('input[name=hasta]').attr('readonly',$fechaHasta);
});

$('input[name=desde]').on('change',function(e){
    console.log("desde "+$(this).val());
    buscarfecha();
});

$('input[name=hasta]').on('change',function(e){
    console.log("hasta "+$(this).val());
    buscarfecha();
});

$('button[name=buscar]').on('click',function(e){

    if($tipoBusqueda == "dni"){
        buscardni();
    }else if($tipoBusqueda == "paciente"){
        buscar_paciente();
    }else if($tipoBusqueda == "paciente_fecha"){
        buscar_paciente_fecha()
    }else if($tipoBusqueda == "fecha"){
        buscarfecha();
    }else if($tipoBusqueda == "dni_fecha"){
        buscar_dni_fecha();
    }

});

$('button[name=limpiar]').on('click',function(e){

    valor = "";
    var token = $('input[name=_token]').attr('value')
    $.ajax({
        type:"post",
        headers: {'X-CSRF-TOKEN':token},
        url:'/citas/buscar_dni',
        dataType:"json",
        data:{
            buscar : valor,
            origen: origen
        },
        success: function(data){
            $('#tabla').html(data.html)
        },
        error: function(data){
            //console.log("Error "+JSON.stringify(data))
        }
    });

    $('input[name=buscarcitadni]').val('');

});

function buscardni(){
    valor = "";
    valor = $('#buscarCitaDni').val();
    var token = $('input[name=_token]').attr('value')
    $.ajax({
        type:"post",
        headers: {'X-CSRF-TOKEN':token},
        url:'/citas/buscar_dni',
        dataType:"json",
        data:{
            buscar : valor,
            origen: origen

        },
        success: function(data){
            $('#tabla').html(data.html)
        },
        error: function(data){
            //console.log("Error "+JSON.stringify(data))
        }
    });
}
function buscarfecha(){
    startdate= $('input[name=desde]').val();
    enddate= $('input[name=hasta]').val();
    var token = $('input[name=_token]').attr('value')
    $.ajax({
        type:"post",
        headers: {'X-CSRF-TOKEN':token},
        url:'/citas/busqueda_fecha',
        dataType:"json",
        data:{
            startdate:startdate,
            enddate:enddate,
            origen: origen
        },
        success: function(data){
            $('#tabla').html(data.html)
        },
        error: function(data){
            console.log("Error "+JSON.stringify(data))
        }
    });
}

function buscar_dni_fecha(){
    valor = "";
    valor = $('#buscarCitaDni').val();
    var token = $('input[name=_token]').attr('value')
    $.ajax({
        type:"post",
        headers: {'X-CSRF-TOKEN':token},
        url:'/citas/buscar_dni_fecha',
        dataType:"json",
        data:{
            startdate:startdate,
            enddate:enddate,
            dni: valor,
            origen: origen
        },
        success: function(data){
            $('#tabla').html(data.html)
        },
        error: function(data){
            //console.log("Error "+JSON.stringify(data))
        }
    });
}

function buscar_paciente(){
    valor = "";
    valor = $('#buscarCitaPaciente').val();
    var token = $('input[name=_token]').attr('value')
    $.ajax({
        type:"post",
        headers: {'X-CSRF-TOKEN':token},
        url:'/citas/buscar_paciente',
        dataType:"json",
        data:{
            buscar : valor,
            origen: origen
        },
        success: function(data){
            $('#tabla').html(data.html)
        },
        error: function(data){
            //console.log("Error "+JSON.stringify(data))
        }
    });
}

function buscar_paciente_fecha(){
    startdate= $('input[name=desde]').val();
    enddate= $('input[name=hasta]').val();
    console.log(startdate+''+enddate);
    valor = "";
    valor = $('#buscarCitaPaciente').val();
    var token = $('input[name=_token]').attr('value')
    $.ajax({
        type:"post",
        headers: {'X-CSRF-TOKEN':token},
        url:'/citas/buscar_paciente_fecha',
        dataType:"json",
        data:{
            buscar : valor,
            startdate:startdate,
            enddate:enddate,
            origen: origen
        },
        success: function(data){
            $('#tabla').html(data.html)
        },
        error: function(data){
            //console.log("Error "+JSON.stringify(data))
        }
    });
}

$('#buscarCitaPaciente').on('keyup',function(e){
    e.preventDefault();
    $('button[name=buscar]').trigger('click');
});
/*******************REALIZAR CALCULOS**************************/

$('#calcular_imc').on('click',function(e)
{
    e.preventDefault();
imc= parseFloat($('#peso').val())/(parseFloat(  $('#talla').val()) * parseFloat(  $('#talla').val()));
  $('#imc').val(parseInt(imc));
});


$('#calcular_icc').on('click',function(e)
{
    e.preventDefault();
    icc= parseFloat($('#cintura').val())/ parseFloat(  $('#cadera').val());
  $('#icc').val(parseFloat(icc));
});


$('#calcular_imc_edit').on('click',function(e)
{
    e.preventDefault();
imc= parseFloat($('#peso').val())/(parseFloat(  $('#talla').val()) * parseFloat(  $('#talla').val()));
  $('#imc').val(parseInt(imc));
});

$( "#calcular_icc_edit" ).click(function() {
  icc= parseFloat($('#cintura').val())/ parseFloat(  $('#cadera').val());
$('#icc').val(parseFloat(icc));
});
