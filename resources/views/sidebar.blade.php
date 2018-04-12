<section class="sidebar">

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">OPCIONES</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="{{ Request::is('dashboard') ? 'active' : '' }}"><a href="/"><i class="fa fa-home"></i> <span>Principal</span></a></li>
        <li class="{{ Request::is('pacientes') ? 'active' : '' }} {{ Request::is('pacientes/*') ? 'active' : '' }}">
            <a href="{{route('pacientes.index')}}"><i class="fa fa-user"></i> <span>Pacientes</span></a>
        </li>

        <li  class="{{ Request::is('citas') ? 'active' : '' }} {{ Request::is('citas/*') ? 'active' : '' }}">
            <a href="{{route('calendario.index')}}"><i class="fa fa-calendar"></i> <span>Citas</span></a>
        </li>

        <li class="@if(Request::is('configuracion')) active @elseif(Request::is('area')) active @elseif(Request::is('altura')) active @elseif(Request::is('contrata')) active @elseif(Request::is('lugarlabor')) active @elseif(Request::is('ocupaciones')) active @elseif(Request::is('gruposanguineo')) active @elseif(Request::is('profesion')) active  @elseif(Request::is('tipoinstruccion')) active @elseif(Request::is('perfil')) active   @elseif(Request::is('cliente_cuenta')) active   @elseif(Request::is('tipo_examen')) active   @elseif(Request::is('lista_examen')) active @elseif(Request::is('perfil_examen')) active @elseif(Request::is('perfil_examen/*')) active @elseif(Request::is('cargo')) active  @elseif(Request::is('usuario')) active @elseif(Request::is('personal')) active  @endif ">
            <a href="{{route('configuracion.index')}}"> 
                <i class="fa fa-gear"></i><span>Configuración</span>
            </a>
        </li>


        @if(auth()->user()->cargo->descripcion != 'secado')
            {{--<li class="@if(Request::is('agricultor')) active @elseif(Request::is('agricultor/*')) active @endif "><a href="{{route('agricultor.index')}}"><i class="fa fa-user-circle"></i> <span>Agricultores</span></a></li>--}}
        @endif

        @if(auth()->user()->cargo->descripcion != 'recepcion')

            {{--<li class="@if(Request::is('configuracion')) active @elseif(Request::is('configuracion/*')) active @elseif(Request::is('usuario')) active @elseif(Request::is('usuario/*')) active @elseif(Request::is('personal/*')) active @elseif(Request::is('personal')) active @elseif(Request::is('area')) active @elseif(Request::is('area/*')) active  @endif "><a href="{{route('configuracion')}}"><i class="fa fa-cog"></i> <span>Configuración</span></a></li>--}}
        @endif
        {{--<li class="treeview">--}}
        {{--<a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>--}}
        {{--<span class="pull-right-container">--}}
        {{--<i class="fa fa-angle-left pull-right"></i>--}}
        {{--</span>--}}
        {{--</a>--}}
        {{--<ul class="treeview-menu">--}}
        {{--<li><a href="#">Link in level 2</a></li>--}}
        {{--<li><a href="#">Link in level 2</a></li>--}}
        {{--</ul>--}}
        {{--</li>--}}

<!-- luis teran -->
      

   

<!-- luis teran -->


    </ul>
    <!-- /.sidebar-menu -->
</section>