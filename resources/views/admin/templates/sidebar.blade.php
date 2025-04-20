<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px; height: 100vh;">
    <h4 class="text-center mb-4">Panel de administración</h4>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link text-white">
                <i class="bi bi-house-door"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.handle.view', ['model' => 'teams']) }}" class="nav-link text-white">
                <i class="bi bi-person-circle"></i> Miembros del equipo
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.handle.view', ['model' => 'news']) }}" class="nav-link text-white">
                <i class="bi bi-newspaper"></i> Noticias
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.settings') }}" class="nav-link text-white">
                <i class="bi bi-gear"></i> Configuración
            </a>
        </li>
    </ul>
    <hr class="text-white">
    <div class="d-flex justify-content-center">
        <a href="{{ route('logout') }}" class="btn btn-outline-light">
            <i class="bi bi-box-arrow-right"></i> Cerrar sesión
        </a>
    </div>
</div>
