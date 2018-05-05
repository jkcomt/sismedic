<form class="" action="" method="" id="registrar_antecedente_personal_tres">
  @csrf
<div class="col-md-12">
  <div class="row form-group">
    <div class="col-md-2">
    </div>
    <div class="col-md-4">

    </div>
    <div class="col-md-6 text-right">
      @isset($paciente->antecedentesOculares)
        <button type="button" name="button" class="btn btn-sm btn-warning conformidadtres" tipo="actualizartres">   Actualizar </button>
        <input type="hidden" name="antecedentestres_id" value="{{$paciente->antecedentesOculares}}">
      @else
      <button type="button" name="button" class="btn btn-sm btn-success conformidadtres" tipo="registrartres">Guardar</button>
      @endisset
    </div>
  </div>
<input type="hidden" name="paciente_id" value="{{$cita->paciente->id}}">
  <div class="row form-group ">
    <div class="col-md-4">
      <div class="input-group">
        <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
            <input type="checkbox" value="1"  aria-label="" id="glaucoma" name="glaucoma">
        </span>
        <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Glaucoma</span>
         <input type="text" class="form-control" aria-label="..." id="txtglaucoma" name="txtglaucoma" readonly>
      </div>
    </div>
    <div class="col-md-2">
      <div class="input-group">
        <span class="span-width input-group-addon">Año Dx.</span>
        <input type="text" class="form-control" aria-label="..." id="txtanioglaucoma" name="txtanioglaucoma" readonly>
      </div>
    </div>

    <div class="col-md-6">
      <div class="input-group">
        <span class="span-width input-group-addon">Tratamiento Actual</span>
        <input type="text" class="form-control" aria-label="..." id="txttratamientoactualglaucoma" name="txttratamientoactualglaucoma" readonly>
      </div>
    </div>
  </div>

  <div class="row form-group ">
    <div class="col-md-4">
      <div class="input-group">
        <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
            <input type="checkbox" value="1"  aria-label="" id="cataratas" name="cataratas">
        </span>
        <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Cataratas</span>
         <input type="text" class="form-control" aria-label="..." id="txtcataratas" name="txtcataratas" readonly>
      </div>
    </div>
    <div class="col-md-2">
      <div class="input-group">
        <span class="span-width input-group-addon">Año Dx.</span>
        <input type="text" class="form-control" aria-label="..." id="txtaniocataratas" name="txtaniocataratas" readonly>
      </div>
    </div>

    <div class="col-md-6">
      <div class="input-group">
        <span class="span-width input-group-addon">Tratamiento Actual</span>
        <input type="text" class="form-control" aria-label="..." id="txttratamientoactualcataratas" name="txttratamientoactualcataratas" readonly>
      </div>
    </div>
  </div>

  <div class="row form-group ">
    <div class="col-md-4">
      <div class="input-group">
        <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
            <input type="checkbox" value="1"  aria-label=""  id="ametropia" name="ametropia">
        </span>
        <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Ametropía</span>
         <input type="text" class="form-control" aria-label="..." id="txtametropia" name="txtametropia" readonly>
      </div>
    </div>
    <div class="col-md-2">
      <div class="input-group">
        <span class="span-width input-group-addon">Año Dx.</span>
        <input type="text" class="form-control" aria-label="..." id="txtanioametropia" name="txtanioametropia" readonly>
      </div>
    </div>

    <div class="col-md-6">
      <div class="input-group">
        <span class="span-width input-group-addon">Tratamiento Actual</span>
        <input type="text" class="form-control" aria-label="..." id="txttratamientoactualametropia" name="txttratamientoactualametropia" readonly>
      </div>
    </div>
  </div>

  <div class="row form-group ">
    <div class="col-md-4">
      <div class="input-group">
        <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
            <input type="checkbox" value="1"  aria-label="" id="retinopatia" name="retinopatia">
        </span>
        <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Retinopatía</span>

      </div>
    </div>



  </div>


  <div class="row form-group ">
    <div class="col-md-12">
      <div class="input-group">
        <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
            <input type="checkbox" value="1"  aria-label="" id="otrosoculares" name="otrosoculares">
        </span>
        <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Otros (Especificar)</span>
         <input type="text" class="form-control" aria-label="..." id="txtotrosoculares" name="txtotrosoculares" readonly>
      </div>
    </div>



  </div>




</div>

</form>
