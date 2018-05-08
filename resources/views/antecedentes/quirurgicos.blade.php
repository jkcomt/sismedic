<form class="" id="registrar_antecedente_personal_quirurgicos">
@csrf
<div class="col-md-12">
  <div class="row form-group">
    <div class="col-md-2">
    </div>
    <div class="col-md-4">
    </div>
    <div class="col-md-6 text-right">
      @isset($paciente->antecedentesQuirurgicos)
        <button type="button" name="button" class="btn btn-sm btn-warning conformidadquirurgicos" tipo="actualizarquirurgicos">   Actualizar </button>
        <input type="hidden" name="antecedentesquirugicos_id" value="{{$paciente->antecedentesQuirurgicos->id}}">
      @else
      <button type="button" name="button" class="btn btn-sm btn-success conformidadquirurgicos" tipo="registrarquirurgicos">Guardar</button>
      @endisset
    </div>
  </div>

<input type="hidden" name="paciente_id" value="{{$cita->paciente->id}}">


    <div class="row form-group">
          <div class="col-md-4">
            <div class="input-group">
              <span class="input-group-addon ">
                  <input type="checkbox" value="1"  @isset($paciente->antecedentesQuirurgicos->apendicetomia) checked @endisset  aria-label="" id="apendicectomia" name="apendicectomia" >
              </span>
              <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Apendicectomía</span>
                  {{-- <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Indique el Año</span>
                <input type="text" @isset($paciente->antecedentesQuirurgicos->)  value="{{$paciente->antecedentesQuirurgicos->}}" @else readonly @endisset  class="form-control" aria-label="..."> --}}
            </div>
          </div>
          <div class="col-md-4">
            <div class="input-group">
            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Indique el Año</span>
                <input type="text" @isset($paciente->antecedentesQuirurgicos->apendicetomia_anio)  value="{{$paciente->antecedentesQuirurgicos->apendicetomia_anio}}" @else readonly @endisset  class="form-control" aria-label="..." id="txtanioapendicectomia" name="txtanioapendicectomia">
            </div>
          </div>
    </div>

    <div class="row form-group">
          <div class="col-md-4">
            <div class="input-group">
              <span class="input-group-addon ">
                  <input type="checkbox" value="1"  @isset($paciente->antecedentesQuirurgicos->colecistectomia) checked @endisset  aria-label="" id="colecistectomia" name="colecistectomia">
              </span>
              <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Colecistectomía</span>
                  {{-- <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Indique el Año</span>
                <input type="text" @isset($paciente->antecedentesQuirurgicos->)  value="{{$paciente->antecedentesQuirurgicos->}}" @else readonly @endisset  class="form-control" aria-label="..."> --}}
            </div>
          </div>
          <div class="col-md-4">
            <div class="input-group">
            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Indique el Año</span>
                <input type="text" @isset($paciente->antecedentesQuirurgicos->colecistectomia_anio)  value="{{$paciente->antecedentesQuirurgicos->colecistectomia_anio}}" @else readonly @endisset  class="form-control" aria-label="..."  id="txtaniocolecistectomia" name="txtaniocolecistectomia">
            </div>
          </div>
    </div>


    <div class="row form-group">
          <div class="col-md-4">
            <div class="input-group">
              <span class="input-group-addon ">
                  <input type="checkbox" value="1"  @isset($paciente->antecedentesQuirurgicos->herniorrafa_umbilical) checked @endisset  aria-label=""  id="herniorrafiaumbilical" name="herniorrafiaumbilical">
              </span>
              <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Herniorrafia Umbilical</span>
                  {{-- <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Indique el Año</span>
                <input type="text" @isset($paciente->antecedentesQuirurgicos->)  value="{{$paciente->antecedentesQuirurgicos->}}" @else readonly @endisset  class="form-control" aria-label="..."> --}}
            </div>
          </div>
          <div class="col-md-4">
            <div class="input-group">
            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Indique el Año</span>
                <input type="text" @isset($paciente->antecedentesQuirurgicos->herniorrafa_umbilical_anio)  value="{{$paciente->antecedentesQuirurgicos->herniorrafa_umbilical_anio}}" @else readonly @endisset  class="form-control" aria-label="..." id="txtanioherniorrafiaumbilical" name="txtanioherniorrafiaumbilical">
            </div>
          </div>
    </div>


    <div class="row form-group">
          <div class="col-md-4">
            <div class="input-group">
              <span class="input-group-addon ">
                  <input type="checkbox" value="1"  @isset($paciente->antecedentesQuirurgicos->herniorrafa_inguinal) checked @endisset  aria-label="" id="herniorrafiainguinal"  name="herniorrafiainguinal">
              </span>
              <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Herniorrafia Inguinal</span>
                  {{-- <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Indique el Año</span>
                <input type="text" @isset($paciente->antecedentesQuirurgicos->)  value="{{$paciente->antecedentesQuirurgicos->}}" @else readonly @endisset  class="form-control" aria-label="..."> --}}
            </div>
          </div>
          <div class="col-md-4">
            <div class="input-group">
            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Indique el Año</span>
                <input type="text" @isset($paciente->antecedentesQuirurgicos->herniorrafa_inguinal_anio)  value="{{$paciente->antecedentesQuirurgicos->herniorrafa_inguinal_anio}}" @else readonly @endisset  class="form-control" aria-label="..." id="txtanioherniorrafiainguinal"  name="txtanioherniorrafiainguinal">
            </div>
          </div>
    </div>

    <div class="row form-group">
          <div class="col-md-12">
            <div class="input-group">
              <span class="input-group-addon ">
                  <input type="checkbox" value="1"  @isset($paciente->antecedentesQuirurgicos->ocular) checked @endisset  aria-label="" id="ocular" name="ocular">
              </span>
              <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Ocular</span>
              <input type="text" @isset($paciente->antecedentesQuirurgicos->ocular_descripcion)  value="{{$paciente->antecedentesQuirurgicos->ocular_descripcion}}" @else readonly @endisset  class="form-control" aria-label="..."  id="txtocular" name="txtocular" >
                  {{-- <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Indique el Año</span>
                <input type="text" @isset($paciente->antecedentesQuirurgicos->)  value="{{$paciente->antecedentesQuirurgicos->}}" @else readonly @endisset  class="form-control" aria-label="..."> --}}
            </div>
          </div>

    </div>

    <div class="row form-group">
          <div class="col-md-12">
            <div class="input-group">
              <span class="input-group-addon ">
                  <input type="checkbox" value="1"  @isset($paciente->antecedentesQuirurgicos->otorrino) checked @endisset  aria-label="" id="otorrino" name="otorrino">
              </span>
              <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Otorrino</span>
              <input type="text" @isset($paciente->antecedentesQuirurgicos->otorrino_descripcion)  value="{{$paciente->antecedentesQuirurgicos->otorrino_descripcion}}" @else readonly @endisset  class="form-control" aria-label="..." id="txtotorrino" name="txtotorrino">
                  {{-- <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Indique el Año</span>
                <input type="text" @isset($paciente->antecedentesQuirurgicos->)  value="{{$paciente->antecedentesQuirurgicos->}}" @else readonly @endisset  class="form-control" aria-label="..."> --}}
            </div>
          </div>

    </div>

    <div class="row form-group">
          <div class="col-md-4">
            <div class="input-group">
              <span class="input-group-addon ">
                  <input type="checkbox" value="1"  @isset($paciente->antecedentesQuirurgicos->obstetricia) checked @endisset  aria-label="" id="obstetricia" name="obstetricia">
              </span>
              <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Obstetricia (Cesarea)</span>
                  {{-- <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Indique el Año</span>
                <input type="text" @isset($paciente->antecedentesQuirurgicos->)  value="{{$paciente->antecedentesQuirurgicos->}}" @else readonly @endisset  class="form-control" aria-label="..."> --}}
            </div>
          </div>
          <div class="col-md-4">

          </div>
    </div>

    <div class="row form-group">
          <div class="col-md-12">
            <div class="input-group">
              <span class="input-group-addon ">
                  <input type="checkbox" value="1"  @isset($paciente->antecedentesQuirurgicos->cesarea) checked @endisset  aria-label="" id="ginecologia" name="ginecologia">
              </span>
              <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Ginecológica (Cesarea)</span>
              <input type="text" @isset($paciente->antecedentesQuirurgicos->cesarea_descripcion)  value="{{$paciente->antecedentesQuirurgicos->cesarea_descripcion}}" @else readonly @endisset  class="form-control" aria-label="..." id="txtginecologia" name="txtginecologia"  >
                  {{-- <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Indique el Año</span>
                 --}}
            </div>
          </div>

    </div>

    <div class="row form-group">
          <div class="col-md-4">
            <div class="input-group">
              <span class="input-group-addon ">
                  <input type="checkbox" value="1"  @isset($paciente->antecedentesQuirurgicos->otras_cirugias) checked @endisset  aria-label="" id="otrascirugias" name="otrascirugias">
              </span>
              <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Otras Cirugías</span>
                  {{-- <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Indique el Año</span>
                <input type="text" @isset($paciente->antecedentesQuirurgicos->)  value="{{$paciente->antecedentesQuirurgicos->}}" @else readonly @endisset  class="form-control" aria-label="..."> --}}
            </div>
          </div>
          <div class="col-md-4">
            <div class="input-group">
            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Fecha</span>
                <input type="date" class="form-control" aria-label="..." name="otrascirugiasfecha" id="otrascirugiasfecha">
            </div>
          </div>
          <div class="col-md-4">
            <div class="input-group">
            <span class="span-width input-group-addon" style="padding-top:8px;padding-bottom:9px;">Observaciones</span>
                <input type="text" @isset($paciente->antecedentesQuirurgicos->otras_cirugias_fecha)  value="{{$paciente->antecedentesQuirurgicos->otras_cirugias_observaciones}}" @else readonly @endisset  class="form-control" aria-label="..." id="otrascirugiasobser" name="otrascirugiasobser">
            </div>
          </div>
    </div>

    </div>


    </form>
