$(function(){



});
console.log("PERSONALUNO.JS");
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
      if(chk.id=='enfermedadestiroidea')
      {
        document.getElementById("txtettratamientoactual").readOnly= false ;
        document.getElementById("txtettratamientoactual").value="" ;
        document.getElementById("txt"+chk.id).readOnly= false ;
        document.getElementById("txt"+chk.id).value="" ;
      }
      if(chk.id=='neoplasias')
      {
        document.getElementById("txtntratamientoactual").readOnly=false ;
        document.getElementById("txtntratamientoactual").value="" ;
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

        if(chk.id=='enfermedadestiroidea')
        {
          document.getElementById("txtettratamientoactual").readOnly=true ;
          document.getElementById("txtettratamientoactual").value="" ;
          document.getElementById("txt"+chk.id).readOnly= true ;
          document.getElementById("txt"+chk.id).value="" ;
        }
        if(chk.id=='neoplasias')
        {
          document.getElementById("txtntratamientoactual").readOnly=true ;
          document.getElementById("txtntratamientoactual").value="" ;
          document.getElementById("txt"+chk.id).readOnly= true ;
          document.getElementById("txt"+chk.id).value="" ;
        }
        else{
                console.log('else if '+ chk.id);
          document.getElementById("txt"+chk.id).readOnly= true ;
          document.getElementById("txt"+chk.id).value="" ;
        }
    }
}
