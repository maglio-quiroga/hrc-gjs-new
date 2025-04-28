<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Posteos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('styles/elements/admin.css') }}">
    

</head>
<body class="font-sans antialiased">
    <div class="placeholder1">
        <div class="placeholder2">
            @include('admin.templates.sidebar')
        </div>
        <div class="placeholder3">
            @include('admin.templates.navbar')
        </div>
    <div class="placeholder4 container mt-5">
    
    <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3">Noticias</h1>
            <a href="{{ route('admin.handle.view', ['model' => 'posts', 'action' => 'create']) }}" class="btn btn-success">
                <i class="bi bi-plus-circle me-1"></i> Agregar nueva noticia
            </a>
        </div>
    
        @include('admin.templates.alerts')
    
        <div class="row mb-3">
            <div class="col">
                <input type="text" id="inputBuscarNombre" class="form-control" placeholder="Buscar por titulo" onkeyup="buscarTabla()">
            </div>
        </div>

    <div class="table-responsive">
    <table  class="table table-hover table-bordered align-middle text-center">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Contenido</th>
                <th>Imagen</th>
                <th>Publicado</th>
                <th>Categoria</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($records as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ Str::limit($post->content, 100) }}</td>
                    <td>
                        @if ($post->image)
                            <img src="{{ asset($post->image) }}" width="100" class="img-thumbnail">
                        @else
                            <em>No imagen</em>
                        @endif
                    </td>
                    <td>{{ $post->published ? 'Publicado' : 'Borrador' }}</td>
                    <td>{{ $post->category->title ?? 'Sin categoría' }}</td>
                    <td class="d-flex gap-2">
                        <a href="{{ route('admin.handle.view', ['model' => 'posts', 'action' => 'edit', 'target' => $post->id]) }}" class="btn btn-sm btn-primary">Editar</a>
                        <form action="{{ route('admin.handle.delete', ['model' => 'posts', 'target' => $post->id]) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar este posteo?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="7" class="text-center">No hay posteos disponibles.</td></tr>
            @endforelse
        </tbody>
    </table>
    <div class="text-center my-3">
        <button id="loadMore" class="btn btn-primary">Cargar más</button>
    </div>

    </div>

    </div>
    </div>
    <script src="{{ asset('js/posts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>