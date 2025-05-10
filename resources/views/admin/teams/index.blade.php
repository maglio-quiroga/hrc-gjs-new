<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('styles/elements/admin.css') }}">
    <title>Equipo</title>
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
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h1">Miembros del equipo</h1>
            <a href="{{ route('admin.handle.view', ['model' => 'teams', 'action' => 'create']) }}" class="btn btn-success">
                <i class="bi bi-plus-circle me-1"></i> Agregar nuevo miembro
            </a>
        </div>
    
        @include('admin.templates.alerts')
    
        <div class="row mb-3">
            <div class="col">
                <input type="text" id="inputBuscarNombre" class="form-control" placeholder="Buscar por nombre" onkeyup="buscarTabla()">
            </div>
            <div class="col">
                <input type="text" id="inputBuscarPosicion" class="form-control" placeholder="Buscar por posición" onkeyup="buscarTabla()">
            </div>
        </div>        
    
        <div class="table-responsive">
            <table class="table table-hover table-bordered align-middle text-center" id="team-table">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Posición</th>
                        <th>Descripción</th>
                        <th>Imagen</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody id="team-tbody">
                    @forelse ($records as $record)
                        <tr class="team-row">
                            <td>{{ $record->id }}</td>
                            <td>{{ $record->name }}</td>
                            <td>{{ $record->position }}</td>
                            <td>{{ $record->description }}</td>
                            <td>
                                @if ($record->image)
                                    <img src="{{ asset($record->image) }}" alt="{{ $record->name }}" width="100" loading="lazy">
                                @else
                                    <span class="text-muted">Sin imagen</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.handle.view', ['model' => 'teams', 'action' => 'edit', 'target' => $record->id]) }}" class="btn btn-sm btn-warning me-1">
                                    <i class="bi bi-pencil-square"></i> Editar
                                </a>
                                <form action="{{ route('admin.handle.delete', ['model' => 'teams', 'target' => $record->id]) }}" method="POST" class="d-inline-block" onsubmit="return confirm('¿Estás seguro de eliminar este miembro?')">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="bi bi-trash"></i> Eliminar
                                    </button>
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
            <div class="text-center my-3">
                <button id="loadMore" class="btn btn-primary">Cargar más</button>
            </div>
        </div>
    </div>
    </div>
    <script src="{{ asset('js/teams.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

