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
        <input type="hidden" name="antecedentestres_id" value="{{$paciente->antecedentesOculares->id}}">
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
            <input type="checkbox"  @isset($paciente->antecedentesOculares->glaucoma) checked @endisset   value="1"  aria-label="" id="glaucoma" name="glaucoma">
        </span>
        <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Glaucoma</span>
         <input type="text"  @isset($paciente->antecedentesOculares->glaucoma_descripcion)  value="{{$paciente->antecedentesOculares->glaucoma_descripcion}}" @else readonly @endisset  class="form-control" aria-label="..." id="txtglaucoma" name="txtglaucoma" >
      </div>
    </div>
    <div class="col-md-2">
      <div class="input-group">
        <span class="span-width input-group-addon">Año Dx.</span>
        <input type="text"  @isset($paciente->antecedentesOculares->glaucoma_anio_dx)  value="{{$paciente->antecedentesOculares->glaucoma_anio_dx}}" @else readonly @endisset  class="form-control" aria-label="..." id="txtanioglaucoma" name="txtanioglaucoma" >
      </div>
    </div>

    <div class="col-md-6">
      <div class="input-group">
        <span class="span-width input-group-addon">Tratamiento Actual</span>
        <input type="text"  @isset($paciente->antecedentesOculares->glaucoma_tratamiento_actual)  value="{{$paciente->antecedentesOculares->glaucoma_tratamiento_actual}}" @else readonly @endisset  class="form-control" aria-label="..." id="txttratamientoactualglaucoma" name="txttratamientoactualglaucoma" >
      </div>
    </div>
  </div>

  <div class="row form-group ">
    <div class="col-md-4">
      <div class="input-group">
        <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
            <input type="checkbox"  @isset($paciente->antecedentesOculares->cataratas) checked @endisset   value="1"  aria-label="" id="cataratas" name="cataratas">
        </span>
        <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Cataratas</span>
         <input type="text"  @isset($paciente->antecedentesOculares->cataratas_descripcion)  value="{{$paciente->antecedentesOculares->cataratas_descripcion}}" @else readonly @endisset  class="form-control" aria-label="..." id="txtcataratas" name="txtcataratas" >
      </div>
    </div>
    <div class="col-md-2">
      <div class="input-group">
        <span class="span-width input-group-addon">Año Dx.</span>
        <input type="text"  @isset($paciente->antecedentesOculares->cataratas_anio_dx)  value="{{$paciente->antecedentesOculares->cataratas_anio_dx}}" @else readonly @endisset  class="form-control" aria-label="..." id="txtaniocataratas" name="txtaniocataratas" >
      </div>
    </div>

    <div class="col-md-6">
      <div class="input-group">
        <span class="span-width input-group-addon">Tratamiento Actual</span>
        <input type="text"  @isset($paciente->antecedentesOculares->cataratas_tratamiento_actual)  value="{{$paciente->antecedentesOculares->cataratas_tratamiento_actual}}" @else readonly @endisset  class="form-control" aria-label="..." id="txttratamientoactualcataratas" name="txttratamientoactualcataratas" >
      </div>
    </div>
  </div>

  <div class="row form-group ">
    <div class="col-md-4">
      <div class="input-group">
        <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
            <input type="checkbox"  @isset($paciente->antecedentesOculares->ametropia) checked @endisset   value="1"  aria-label=""  id="ametropia" name="ametropia">
        </span>
        <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Ametropía</span>
         <input type="text"  @isset($paciente->antecedentesOculares->ametropia_descripcion)  value="{{$paciente->antecedentesOculares->ametropia_descripcion}}" @else readonly @endisset  class="form-control" aria-label="..." id="txtametropia" name="txtametropia" >
      </div>
    </div>
    <div class="col-md-2">
      <div class="input-group">
        <span class="span-width input-group-addon">Año Dx.</span>
        <input type="text"  @isset($paciente->antecedentesOculares->ametropia_anio_dx)  value="{{$paciente->antecedentesOculares->ametropia_anio_dx}}" @else readonly @endisset  class="form-control" aria-label="..." id="txtanioametropia" name="txtanioametropia" >
      </div>
    </div>

    <div class="col-md-6">
      <div class="input-group">
        <span class="span-width input-group-addon">Tratamiento Actual</span>
        <input type="text"  @isset($paciente->antecedentesOculares->ametropia_tratamiento_actual)  value="{{$paciente->antecedentesOculares->ametropia_tratamiento_actual}}" @else readonly @endisset  class="form-control" aria-label="..." id="txttratamientoactualametropia" name="txttratamientoactualametropia" >
      </div>
    </div>
  </div>

  <div class="row form-group ">
    <div class="col-md-4">
      <div class="input-group">
        <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
            <input type="checkbox"  @isset($paciente->antecedentesOculares->retinopatia) checked @endisset   value="1"  aria-label="" id="retinopatia" name="retinopatia">
        </span>
        <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Retinopatía</span>

      </div>
    </div>



  </div>


  <div class="row form-group ">
    <div class="col-md-12">
      <div class="input-group">
        <span class="input-group-addon" style="padding-top:8px;padding-bottom:9px;">
            <input type="checkbox"  @isset($paciente->antecedentesOculares->otrosoculares) checked @endisset   value="1"  aria-label="" id="otrosoculares" name="otrosoculares">
        </span>
        <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Otros (Especificar)</span>
         <input type="text"  @isset($paciente->antecedentesOculares->otros_oculares_descripcion)  value="{{$paciente->antecedentesOculares->otros_oculares_descripcion}}" @else readonly @endisset  class="form-control" aria-label="..." id="txtotrosoculares" name="txtotrosoculares" >
      </div>
    </div>



  </div>




</div>

</form>
