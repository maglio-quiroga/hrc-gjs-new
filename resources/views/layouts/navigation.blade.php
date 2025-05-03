<<<<<<< HEAD
{{-- resources/views/layouts/navigation.blade.php (VERSIÓN CON BOOTSTRAP 5) --}}
{{-- Asume que 'bg-primary' es un color oscuro. Si es claro, cambia 'navbar-dark' por 'navbar-light' --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container-fluid"> {{-- O usa 'container' si prefieres ancho limitado --}}

        {{-- Logo / Marca --}}
        <a class="navbar-brand" href="{{ route('inicio') }}">
            {{-- Reemplaza esto con tu logo real si <x-application-logo> ya no funciona --}}
            {{-- Ejemplo: <img src="/path/to/your/logo.png" alt="Logo HRC" style="height: 30px;"> --}}
             <x-application-logo class="block h-9 w-auto" /> {{-- Intenta mantener el componente si funciona --}}
        </a>

        {{-- Botón Hamburguesa para móvil --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbarCollapse" aria-controls="mainNavbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Contenido Colapsable (Enlaces y Menús) --}}
        <div class="collapse navbar-collapse" id="mainNavbarCollapse">

            {{-- Enlaces Principales (Alineados a la izquierda por defecto) --}}
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @auth
                    {{-- Menú Administrador para usuarios autenticados --}}
                    {{-- El include necesita estar dentro de un <li> o generar <li> apropiados --}}
                    {{-- Opción 1: Si el include genera <li> --}}
                     {{-- @include('dashboard.partials.nav-header-main') --}}

                    {{-- Opción 2: Si el include genera solo <a> (necesita un dropdown wrapper) --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="adminDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{-- Icono + Texto Administrador (Ajusta según necesites) --}}
                            <i class="fas fa-user-cog"></i> Administrador
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="adminDropdown">
                            {{-- Aquí irían las opciones del @include, adaptadas a <li><a class="dropdown-item">...</a></li> --}}
                            {{-- Necesitarías ver 'nav-header-main.blade.php' y sus hijos para adaptarlo --}}
                            <li><a class="dropdown-item" href="#">Opción Admin Placeholder 1</a></li>
                            <li><a class="dropdown-item" href="#">Opción Admin Placeholder 2</a></li>
                            {{-- @include('dashboard.partials.nav-header-main') --}} {{-- Esto probablemente NO funcione directamente aquí --}}
                        </ul>
                    </li>
                     {{-- Podrías añadir aquí otros links visibles solo para usuarios logueados si los hubiera --}}

                @else
                    {{-- Links Públicos para invitados --}}
                    {{-- ****** EDITA ESTOS ENLACES SEGÚN TUS NECESIDADES ****** --}}
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('inicio') ? 'active' : '' }}" aria-current="page" href="{{ route('inicio') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('servicios') ? 'active' : '' }}" href="{{ route('servicios') }}">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">Nosotros</a>
                    </li>
                    {{-- ****** Agrega aquí otros enlaces públicos como <li class="nav-item"><a class="nav-link">...</a></li> ****** --}}
                @endauth
            </ul>

            {{-- Lado Derecho de la Navbar --}}
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @auth
                    {{-- Menú Usuario (Perfil/Salir) para usuarios autenticados --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{-- Nombre de Usuario --}}
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                             {{-- Enlace a Perfil --}}
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">
                                <i class="fas fa-user me-2"></i>{{ __('Perfil') }}
                            </a></li>
                            <li><hr class="dropdown-divider"></li>
                            {{-- Botón/Enlace Salir --}}
                            <li>
                                <form method="POST" action="{{ route('logout') }}" id="logout-form-nav">
                                    @csrf
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form-nav').submit();">
                                       <i class="fas fa-sign-out-alt me-2"></i>{{ __('Salir') }}
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    {{-- Botones Login/Registro para invitados --}}
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Iniciar Sesión</a>
                        </li>
                    @endif
                    {{--
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">Registrarse</a>
                        </li>
                    @endif
                     --}}
                @endguest
            </ul>

        </div> {{-- Fin navbar-collapse --}}
    </div> {{-- Fin container-fluid --}}
</nav>
