{{-- Convertido a Bootstrap 5 List Items --}}

{{-- Enlace Noticias --}}
<li><a class="dropdown-item {{ request()->routeIs('post.index') ? 'active' : '' }}" href="{{ route('post.index') }}">
    <i class="fas fa-newspaper fa-fw me-2 text-primary"></i> {{-- Icono FontAwesome + Clases Bootstrap --}}
    {{ __('Noticias') }}
</a></li>

{{-- Enlace Categoría Noticia --}}
<li><a class="dropdown-item {{ request()->routeIs('category.index') ? 'active' : '' }}" href="{{ route('category.index') }}">
    <i class="fas fa-tags fa-fw me-2 text-primary"></i> {{-- Icono FontAwesome --}}
    {{ __('Categoría Noticia') }}
</a></li>

{{-- Divisor --}}
<li><hr class="dropdown-divider"></li>

{{-- Enlace Usuarios --}}
<li><a class="dropdown-item {{ request()->routeIs('user.index') ? 'active' : '' }}" href="{{ route('user.index') }}">
     <i class="fas fa-users fa-fw me-2 text-primary"></i> {{-- Icono FontAwesome --}}
    {{ __('Usuarios') }}
</a></li>

{{-- Enlace Equipo --}}
<li><a class="dropdown-item {{ request()->routeIs('team.index') ? 'active' : '' }}" href="{{ route('team.index') }}">
    <i class="fas fa-id-badge fa-fw me-2 text-primary"></i> {{-- Icono FontAwesome --}}
    {{ __('Equipo') }}
</a></li>

{{-- Enlace Servicios --}}
<li><a class="dropdown-item {{ request()->routeIs('service.index') ? 'active' : '' }}" href="{{ route('service.index') }}">
     <i class="fas fa-concierge-bell fa-fw me-2 text-primary"></i> {{-- Icono FontAwesome --}}
    {{ __('Servicios') }}
</a></li>

{{-- Divisor Final (Opcional, si vienen más secciones después) --}}
<li><hr class="dropdown-divider"></li>