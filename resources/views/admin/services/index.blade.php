<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Servicios</title>
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('styles/elements/admin.css') }}">
</head>
<body>
    <div class="structure">

        <div class="navbar-container">
            @include('admin.templates.navbar')
        </div>

        <div class="sidebar-container">
            @include('admin.templates.sidebar')
        </div>

        <div class="content-display">
    <div class="d-flex justify-content-between  align-items-center">
    <h1 class="h1">Servicios</h1>
    <a href="{{ route('admin.handle.view', ['model' => 'services', 'action' => 'create']) }}" class="btn btn-success "><i class="bi bi-plus-circle me-1"></i> Agregar nuevo servicio</a>
    </div>
    
    @include('admin.templates.alerts')

    <div class="d-flex justify-content-end mt-3 my-4">
        <input type="text" id="searchInput" class="form-control" placeholder="Buscar servicio...">
    </div>

    <div class="table-responsive">
    <table  class="table table-hover table-bordered align-middle text-center">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($records as $service)
                <tr>
                    <td>{{ $service->id }}</td>
                    <td>{{ $service->name }}</td>
                    <td>{{ $service->description }}</td>
                    <td>
                        @if ($service->image)
                            <img src="{{ asset($service->image) }}" width="100" loading="lazy">
                        @else
                            <span class="text-muted">Sin imagen</span>
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('admin.handle.view', ['model' => 'services', 'action' => 'edit', 'target' => $service->id]) }}"><i class="bi bi-pencil-square"></i> Editar</a>
                        <form action="{{ route('admin.handle.delete', ['model' => 'services', 'target' => $service->id]) }}" method="POST" style="display:inline;">
                            @csrf
                            <button class="btn btn-danger" type="submit" onclick="return confirm('¿Estás seguro?')"><i class="bi bi-trash"></i> Eliminar</button>
                        </form>
                    </td>
                </tr>
                @empty
                        <tr>
                            <td colspan="6" class="text-muted text-center">No hay miembros registrados.</td>
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
    <script src="{{ asset('js/services.js') }}"></script>
</body>
</html>
