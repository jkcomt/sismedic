
  <select name="perfil_lista_examenes" id="perfil_lista_examenes" class="form-control">
      @isset($listaexamenes)
          @foreach($listaexamenes as $key => $listaexamen)
               <option value="{{$key}}">{{$listaexamen}}</option>
          @endforeach
     @endisset

  </select>
