<section class="sidebar">

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">OPCIONES</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="{{ Request::is('dashboard') ? 'active' : '' }}"><a href="/"><i class="fa fa-home"></i> <span>Principal</span></a></li>

        <li class="treeview {{ Request::is('pacientes/*') ? 'active' : '' }} {{ Request::is('pacientes') ? 'active' : '' }}">
            <a href="#"><i class="fa fa-user"></i> <span>Pacientes</span>
                <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
              <li class="{{ Request::is('pacientes/create') ? 'active' : '' }}">
                  <a href="{{route('pacientes.create')}}"><i class="fa  fa-plus-circle"></i> <span>Registrar Paciente</span></a>
              </li>
              <li class="{{ Request::is('pacientes') ? 'active' : '' }} {{ Request::is('pacientes/citas/*') ? 'active' : '' }} {{ Request::is('pacientes/*/edit') ? 'active' : '' }}">
                  <a href="{{route('pacientes.index')}}"><i class="fa fa-list-alt"></i> <span>Catálogo</span></a>
              </li>
                {{--<li  class="">--}}
                    {{--<a href="#"><i class="fa fa-list-alt"></i> <span>Catalogo</span></a>--}}
                {{--</li>--}}
            </ul>
        </li>
        <li class="treeview {{ Request::is('citas/*') ? 'active' : '' }} {{ Request::is('citas') ? 'active' : '' }}">
            <a href="#"><i class="fa fa-address-book"></i> <span>Citas</span>
                <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ Request::is('citas/nueva_cita') ? 'active' : '' }}"><a href="{{route('citas.nuevacita')}}"><i class="fa fa-plus-circle"></i> <span>Nueva Cita</span></a></li>
                <li class="{{ Request::is('citas/catalogo') ? 'active' : '' }}"><a href="{{route('citas.catalogo')}}"><i class="fa fa-list-alt"></i> <span>Catalogo</span></a></li>
                <li  class="{{ Request::is('citas') ? 'active' : '' }}">
                    <a href="{{route('calendario.index')}}"><i class="fa fa-calendar"></i> <span>Calendario</span></a>
                </li>
            </ul>
        </li>
        <li class="{{ Request::is('funcion_vital/*') ? 'active' : '' }} {{ Request::is('funcion_vital') ? 'active' : '' }}">
            <a href="{{route('funcion_vital.index')}}">
                <i class="fa fa-stethoscope"></i><span>Funciones Vitales</span>
            </a>
        </li>
        <li class="{{Request::is('evaluacion_medica/*') ? 'active' : '' }} {{Request::is('evaluacion_medica') ? 'active' : '' }}">
            <a href="{{route('evaluacion_medica.index')}}">
                <i class="fa fa-heartbeat"></i><span>Evaluación Médica</span>
            </a>
        </li>
        <li class="@if(Request::is('configuracion')) active @elseif(Request::is('area')) active @elseif(Request::is('altura')) active @elseif(Request::is('contrata')) active @elseif(Request::is('lugarlabor')) active @elseif(Request::is('ocupaciones')) active @elseif(Request::is('gruposanguineo')) active @elseif(Request::is('profesion')) active  @elseif(Request::is('tipoinstruccion')) active @elseif(Request::is('perfil')) active   @elseif(Request::is('cliente_cuenta')) active   @elseif(Request::is('tipo_examen')) active   @elseif(Request::is('lista_examen')) active @elseif(Request::is('perfil_examen')) active @elseif(Request::is('perfil_examen/*')) active @elseif(Request::is('cargo')) active  @elseif(Request::is('usuario')) active @elseif(Request::is('personal')) active  @endif ">
            <a href="{{route('configuracion.index')}}">
                <i class="fa fa-gear"></i><span>Configuración</span>
            </a>
        </li>

    </ul>
    <!-- /.sidebar-menu -->
</section>
