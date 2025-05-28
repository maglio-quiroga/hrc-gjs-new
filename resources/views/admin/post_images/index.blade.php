<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('styles/elements/admin.css') }}">
    <title>Listado de Imágenes</title>
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
                <h1 class="h1">Imágenes de Posts</h1>
                <a href="{{ route('admin.handle.view', ['model' => 'post_images', 'action' => 'create']) }}" class="btn btn-success">
                    <i class="bi bi-plus-circle me-1"></i> Agregar Nueva Imagen
                </a>
            </div>

            @include('admin.templates.alerts')

            <div class="table-responsive">
                <table class="table table-hover table-bordered align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Imagen</th>
                            <th>Post</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($records as $image)
                            <tr>
                                <td>{{ $image->id }}</td>
                                <td class="text-center">
                                    @if ($image->image)
                                        <img src="{{ asset($image->image) }}" width="100" class="img-thumbnail">
                                    @else
                                        <em>No imagen</em>
                                    @endif
                                </td>
                                <td>{{ $image->post->title ?? 'Sin título' }}</td>
                                <td>
                                    <a href="{{ route('admin.handle.view', ['model' => 'post_images', 'action' => 'edit', 'target' => $image->id]) }}" class="btn btn-sm btn-warning me-1">
                                        <i class="bi bi-pencil-square"> Editar</i>
                                    </a>
                                    <form action="{{ route('admin.handle.delete', ['model' => 'post_images', 'target' => $image->id]) }}" class="d-inline-block" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta imagen?')">
                                            <i class="bi bi-trash"></i> Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">No hay imágenes disponibles.</td>
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
    <script src="{{ asset('js/post_images.js') }}"></script>
</body>
</html>