{{-- Convertido a Bootstrap 5 List Items --}}

{{-- Encabezado Opcional para la sección --}}
<li><h6 class="dropdown-header">Estadísticas</h6></li>

{{-- Enlace Postulación Programa --}}
<li><a class="dropdown-item {{ request()->routeIs('post.index') ? 'active' : '' }}" href="{{ route('post.index') }}"> {{-- ¡REVISAR RUTA! route('post.index') parece incorrecto aquí --}}
    <i class="fas fa-chart-bar fa-fw me-2 text-warning"></i> {{-- Icono FontAwesome --}}
    {{ __('Postulación Programa') }}
</a></li>

{{-- Divisor (Si se añaden más items después) --}}
{{-- <li><hr class="dropdown-divider"></li> --}}