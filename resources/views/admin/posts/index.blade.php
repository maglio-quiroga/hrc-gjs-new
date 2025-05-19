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
            <h1 class="h1">Noticias</h1>
            <a href="{{ route('admin.handle.view', ['model' => 'posts', 'action' => 'create']) }}" class="btn btn-success">
                <i class="bi bi-plus-circle me-1"></i> Agregar nueva noticia
            </a>
        </div>
    
        @include('admin.templates.alerts')
    
        <div class="row mb-3">
        @php
            use App\Models\Category;
            $categories = Category::all();
        @endphp
            <div class="col">
                <input type="text" id="inputBuscarNombre" class="form-control" placeholder="Buscar por titulo" onkeyup="buscarTabla()">
            </div>

            <div class="col">
                <select id="selectEstado" class="form-select" onchange="buscarTabla()">
                    <option value="">Todos los estados</option>
                    <option value="Publicado">Publicado</option>
                    <option value="Borrador">Borrador</option>
                </select>
            </div>

            <div class="col">   
            <select id="selectCategoria" class="form-select" onchange="buscarTabla()">
                <option value="">Todas las categorías</option>
                @foreach ($categories as $category)
                        <!-- <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}> -->
                        <option value="{{ $category->title }}">{{ $category->title }}</option>
                            {{ $category->title }}
                        <!-- </option> -->
                @endforeach
            </select>
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
                    <td>
                        <div style="max-width: 300px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                            {!! strip_tags($post->content) !!}
                        </div>
                    </td>
                     
                    <td>
                        @if ($post->image)
                            <img src="{{ asset($post->image) }}" width="100" class="img-thumbnail">
                        @else
                            <em>No imagen</em>
                        @endif
                    </td>
                    @if($post->posted !== "yes")
                    <td>Borrador</td>
                    @else
                    <td>Publicado</td>
                    @endif
                    <td>{{ $post->category->title ?? 'Sin categoría' }}</td>
                    <td class="d-flex gap-2">
                        <a href="{{ route('admin.handle.view', ['model' => 'posts', 'action' => 'edit', 'target' => $post->id]) }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Editar</a>
                        <form action="{{ route('admin.handle.delete', ['model' => 'posts', 'target' => $post->id]) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar este posteo?')"><i class="bi bi-trash"></i> Eliminar</button>
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