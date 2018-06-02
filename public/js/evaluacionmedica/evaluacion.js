$(document).ready(function() {
    $('#tipoBusqueda').trigger('change');
    startdate = fechaActual();
    enddate = startdate;
});

var startdate;
var enddate;
var origen = "evaluacion_medica";
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

$('body').on('click','.filtrarExamen',function(e){
    e.preventDefault();

    $idCita = $(this).attr('idcita');
    $idExamen = $(this).attr('idexamen');
        var token = $('input[name=_token]').attr('value')
        var url = "/citas/filtra_examen";
        $.ajax({
            type:"post",
            headers: {'X-CSRF-TOKEN':token},
            url:url,
            dataType:"json",
            data:{
                idCita : $idCita,
                idExamen : $idExamen
            },
            success: function(data){
                $('#examen').html(data.html)
                $id = $('#examen .modal').attr('id')
                $('#'+$id).modal('show')
            },
            error: function(data){
                //console.log("Error "+JSON.stringify(data))
            }
        });
});


$('body').on('click','.modificarExamen',function(e){
    e.preventDefault();
    console.log("modificar examen");

    $idCita = $(this).attr('idcita');
    $idExamen = $(this).attr('idexamen');
        var token = $('input[name=_token]').attr('value')
        var url = "/citas/filtra_examen";
        $.ajax({
            type:"post",
            headers: {'X-CSRF-TOKEN':token},
            url:url,
            dataType:"json",
            data:{
                idCita : $idCita,
                idExamen : $idExamen
            },
            success: function(data){
                $('#examen').html(data.html)
                $id = $('#examen .modal').attr('id')
                $('#'+$id).modal('show')
            },
            error: function(data){
                //console.log("Error "+JSON.stringify(data))
            }
        });
});


$('.volver-evaluacion-examen').on('click',function(e){
    recargarListaExamenes();
});

function recargarListaExamenes(){
    $citaId = $('#CitaId').val();
    url = '/evaluacion_medica/recargar_lista_examen/'+$citaId;
    $.ajax({
        type:"get",
        url:url,
        dataType:"json",
        data:{
            id : $citaId
        },
        success: function(data){
            $('#tablaexamenes').html(data.html)
            $('#modal-exito').modal('hide')
        },
        error: function(data){
            //console.log("Error "+JSON.stringify(data))
        }
    });
}

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
