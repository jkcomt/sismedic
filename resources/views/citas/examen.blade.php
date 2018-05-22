<div class="form-group" >
  <select name="tipoExamen" id="tipoExamen" class="form-control">
      @isset($lista_ocupacional)
          @foreach($lista_ocupacional as $key => $listaocupacional)
                  <option value="{{$key}}" @if($listaocupacional == "INDIVIDUAL - LABORATORIO") selected @endif>{{$listaocupacional}}</option>
          @endforeach
     @endisset
  </select>
</div>
