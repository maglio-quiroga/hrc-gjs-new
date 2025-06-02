{{-- Convertido a Bootstrap 5 List Items --}}

{{-- Encabezado Opcional para la sección --}}
<li><h6 class="dropdown-header">Cursos</h6></li>

{{-- Enlace Postulación Programa --}}
<li><a class="dropdown-item {{ request()->routeIs('post.index') ? 'active' : '' }}" href="{{ route('post.index') }}"> {{-- ¡REVISAR RUTA! route('post.index') parece incorrecto aquí --}}
    <i class="fas fa-file-alt fa-fw me-2 text-success"></i> {{-- Icono FontAwesome --}}
    {{ __('Postulación Programa') }}
</a></li>

{{-- Divisor --}}
<li><hr class="dropdown-divider"></li>

{{-- Enlace Planificar Cursos --}}
<li><a class="dropdown-item {{ request()->routeIs('post.index') ? 'active' : '' }}" href="{{ route('post.index') }}"> {{-- ¡REVISAR RUTA! route('post.index') parece incorrecto aquí --}}
    <i class="fas fa-calendar-alt fa-fw me-2 text-success"></i> {{-- Icono FontAwesome --}}
    {{ __('Planificar Cursos') }}
</a></li>

{{-- Enlace Asignar Cursos --}}
<li><a class="dropdown-item {{ request()->routeIs('category.index') ? 'active' : '' }}" href="{{ route('category.index') }}"> {{-- ¡REVISAR RUTA! route('category.index') parece incorrecto aquí --}}
    <i class="fas fa-chalkboard-teacher fa-fw me-2 text-success"></i> {{-- Icono FontAwesome --}}
    {{ __('Asignar Cursos') }}
</a></li>

{{-- Divisor --}}
<li><hr class="dropdown-divider"></li>

{{-- Enlace Módulos --}}
<li><a class="dropdown-item {{ request()->routeIs('category.index') ? 'active' : '' }}" href="{{ route('category.index') }}"> {{-- ¡REVISAR RUTA! route('category.index') parece incorrecto aquí --}}
    <i class="fas fa-cubes fa-fw me-2 text-success"></i> {{-- Icono FontAwesome --}}
    {{ __('Módulos') }}
</a></li>