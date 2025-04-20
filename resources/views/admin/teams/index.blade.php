<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3">Miembros del equipo</h1>
            <a href="{{ route('admin.handle.view', ['model' => 'teams', 'action' => 'create']) }}" class="btn btn-success">
                <i class="bi bi-plus-circle me-1"></i> Agregar nuevo miembro
            </a>
        </div>
    
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
            </div>
        @endif
    
        <div class="table-responsive">
            <table class="table table-hover table-bordered align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Posición</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($records as $record)
                        <tr>
                            <td>
                                @if ($record->image) <!-- Cambié imagen_perfil a image -->
                                    <img src="{{ asset($record->image) }}" alt="{{ $record->name }}" class="rounded-circle" width="70" height="70" style="object-fit: cover;">
                                @else
                                    <span class="text-muted">Sin imagen</span>
                                @endif
                            </td>
                            <td>{{ $record->name }}</td> <!-- Cambié nombre a name -->
                            <td>{{ $record->position }}</td> <!-- Cambié posicion a position -->
                            <td>{{ $record->description }}</td> <!-- Cambié descripcion a description -->
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
                            <td colspan="5" class="text-muted text-center">No hay miembros registrados.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    
        <div class="d-flex justify-content-center mt-4">
            {{ $records->links() }}
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

