$(document).ready(function() {

});

$('a').on('click',function(e){
    //e.preventDefault();

    var datos = $(this).attr('href');
    //console.log(datos)
   /* var url = datos.attr('action');

    $.post(url,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            console.log(data)

        }else{
            console.log(data.error)
            return;
        }
    }).error(function(data){
        console.log(data);
        return;

    });*/
});