$(document).ready(function() {

});

$('.sidebar a').on('click',function(e){
    e.preventDefault();

    var datos = $(this).attr('href');

    $.get(datos,function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            //console.log(data)
            window.location.href = datos;
        }else{
            console.log(data.error)
            return;
        }
    }).error(function(data){
        console.log(data.status);
        $('#modal-aviso .modal-body').html('<h3 class="text-warning text-center">ACCESO NO AUTORIZADO</h3>')
        $('#modal-aviso .modal-footer').html('<button class="btn btn-warning" data-dismiss="modal">CERRAR</button>')
        $('#modal-aviso').modal('show');
        return;

    });
});
