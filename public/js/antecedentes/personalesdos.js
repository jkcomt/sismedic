$(function(){



});
console.log("personados");
function activardos(chk)
{
  if( $("#"+chk.id+"").prop('checked') )
    {

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
      if(chk.id=='urolitiasis')
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
      if(chk.id=='urolitiasis')
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
