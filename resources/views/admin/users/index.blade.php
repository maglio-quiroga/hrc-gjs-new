<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Usuarios</title>
    <link rel="stylesheet" href="{{ asset('css/users.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('styles/elements/admin.css') }}">
</head>
<body class="font-sans antialiased">
    <div class="structure">
        <div class="sidebar-container">
            @include('admin.templates.sidebar')
        </div>
        <div class="navbar-container">
            @include('admin.templates.navbar')
        </div>
    <div class="placeholder4 container mt-5">

    <div class="d-flex justify-content-between align-items-center">
        <h2>Usuarios</h2>
        <a href="{{ route('admin.handle.view', ['model' => 'users', 'action' => 'create']) }}" class="btn btn-success">
            <i class="bi bi-plus-circle me-1"></i> Agregar nuevo usuario
        </a>
    </div>

    @include('admin.templates.alerts')

    <div class="d-flex justify-content-end mt-3 my-4">
        <input type="text" id="searchInput" class="form-control" placeholder="Buscar usuario...">
    </div>

    <div class="table-responsive">
        <table class="table table-hover table-bordered align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($records as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->rol ?? 'N/A' }}</td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('admin.handle.view', ['model' => 'users', 'action' => 'edit', 'target' => $user->id]) }}">
                                <i class="bi bi-pencil-square"></i> Editar
                            </a>
                            <form action="{{ route('admin.handle.delete', ['model' => 'users', 'target' => $user->id]) }}" method="POST" style="display:inline;">
                                @csrf
                                <button class="btn btn-danger" type="submit" onclick="return confirm('¿Estás seguro?')">
                                    <i class="bi bi-trash"></i> Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-muted text-center">No hay usuarios registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            <button id="loadMoreBtn" class="btn btn-primary mt-3">Cargar más</button>
        </div>
    </div>

    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
<script src="{{ asset('js/users.js') }}"></script>
</body>
</html>