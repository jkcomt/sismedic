$(document).ready(function() {

    $('#msg-error').hide();

    //$("select[name=paisOrigen]").val("13");

    //$('select[name=paisOrigen]').trigger('change');
    //console.log($("select[name=paisOrigen]").val())
});

$("select[name=paisOrigen]").on('change',function(e){
     //e.preventDefault();
     //console.log($(this).val())

    $filtro = $(this).val();
    // e.preventDefault();
    var token = $('input[name=_token]').attr('value')

    var url = "/departamentos/filtro"
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
            $('#departamentoGroup').html(data.html)

        },
        error: function(data){
            alert("Error "+json.stringify(data))
        }
    });
});

$('body').on('change','.departamentoOrigen',function(e){
    //e.preventDefault();
    //console.log($(this).val())

    $filtro = $(this).val();
    // e.preventDefault();
    var token = $('input[name=_token]').attr('value')

    var url = "/provincias/filtro"
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

$("select[name=paisOrigenDom]").on('change',function(e){
    //e.preventDefault();
    //console.log($(this).val())

    $filtro = $(this).val();
    // e.preventDefault();
    var token = $('input[name=_token]').attr('value')

    var url = "/departamentos/filtrodomicilio"
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

    var url = "/provincias/filtrodomicilio"
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

$('#registrarPaciente').submit(function(e){
    e.preventDefault();

    var datos = $('#registrarPaciente');
    var url = datos.attr('action');
    console.log(url)
   $.post(url,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            console.log(data)
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
       /* $('#msg-error').fadeIn();
        if(data.responseJSON.errors.campania)
        {
            $('input[name=campania]').parent().addClass('has-error')
            console.log(data.responseJSON.errors.campania)
        }else{
            $('input[name=campania]').parent().removeClass('has-error')
        }

        if(data.responseJSON.errors.fecha)
        {
            $('input[name=fecha]').parent().addClass('has-error')
            console.log(data.responseJSON.errors.fecha)
        }else{
            $('input[name=fecha]').parent().removeClass('has-error')
        }

        if(data.responseJSON.errors.agricultor)
        {
            $('#agricultorGroup').addClass('has-error')
            console.log(data.responseJSON.errors.agricultor)
            //$('#listaerrores').html('<li>'+data.responseJSON.errors.agricultor+'</li>')
        }else{
            $('#agricultorGroup').removeClass('has-error')
        }

        if(data.responseJSON.errors.cliente)
        {
            $('#clienteGroup').addClass('has-error')
            console.log(data.responseJSON.errors.cliente)
            //$('#listaerrores').html('<li>'+data.responseJSON.errors.cliente+'</li>')
        }else{
            $('#clienteGroup').removeClass('has-error')
        }

        if(data.responseJSON.errors.variedad)
        {
            $('#grupoVariedad').addClass('has-error')
            console.log(data.responseJSON.errors.variedad)
            //$('#listaerrores').html('<li>'+data.responseJSON.errors.variedad+'</li>')
        }else{
            $('#grupoVariedad').removeClass('has-error')
        }

        if(data.responseJSON.errors.nro_sacos)
        {
            $('input[name=nro_sacos]').parent().removeClass('has-error')
            console.log(data.responseJSON.errors.nro_sacos)
            //$('#listaerrores').html('<li>'+data.responseJSON.errors.nro_sacos+'</li>')
        }else{
            $('input[name=nro_sacos]').parent().removeClass('has-error')
        }

        if(data.responseJSON.errors.chofer)
        {
            $('#grupoChofer').addClass('has-error')
            console.log(data.responseJSON.errors.chofer)
            //$('#listaerrores').html('<li>'+data.responseJSON.errors.chofer+'</li>')
        }else{
            $('#grupoChofer').removeClass('has-error')
        }

        if(data.responseJSON.errors.procedencia)
        {
            $('#grupoProcedencia').addClass('has-error')
            console.log(data.responseJSON.errors.procedencia)
            //$('#listaerrores').html('<li>'+data.responseJSON.errors.procedencia+'</li>')
        }else{
            $('#grupoProcedencia').removeClass('has-error')
        }

        if(data.responseJSON.errors.procedencia)
        {
            $('#grupoVehiculo').addClass('has-error')
            console.log(data.responseJSON.errors.procedencia)
            //$('#listaerrores').html('<li>'+data.responseJSON.errors.procedencia+'</li>')
        }else{
            $('#grupoVehiculo').removeClass('has-error')
        }*/

        return;

    });
});
