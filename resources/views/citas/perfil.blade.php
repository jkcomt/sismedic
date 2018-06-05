
  <select name="perfil" id="perfil" class="form-control">
      @isset($lista_perfil)
          @foreach($lista_perfil as $key => $listaperfil)
              {{--@if($listaperfil != 'sistema')--}}
                  <option value="{{$key}}" @if($listaperfil == 'INDIVIDUAL') selected @endif>{{$listaperfil}}</option>
              {{--@endif--}}
          @endforeach
     @endisset
  </select>
