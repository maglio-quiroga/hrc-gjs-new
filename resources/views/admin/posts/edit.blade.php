<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Post</title>
    <link rel="stylesheet" href="{{ asset('css/posts.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-5">
    <div class="container">
        <h1 class="mb-4">Editar Post</h1>

        @php
            use App\Models\Category;
            $categories = Category::all();
        @endphp

        <form 
            action="{{ route('admin.handle.update', ['model' => 'posts', 'target' => $record->id]) }}" 
            method="POST" 
            enctype="multipart/form-data" 
            class="card p-4 shadow-sm bg-white"
        >
            @csrf
            <!-- NO USAMOS @method('PUT') ya que el servidor sólo acepta POST -->

            <div class="mb-3">
                <label class="form-label">Título:</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $record->title) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Contenido:</label>
                <textarea name="content" rows="5" class="form-control" required>{{ old('content', $record->content) }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Imagen actual:</label><br>
                @if ($record->image)
                    <img src="{{ asset($record->image) }}" width="150" class="img-thumbnail mb-2">
                @else
                    <em>No hay imagen subida</em><br>
                @endif
                <input type="file" name="image" class="form-control mt-2">
            </div>

            <div class="mb-3">
                <label class="form-label">Categoría:</label>
                <select name="category_id" class="form-select" required>
                    <option value="">Selecciona una categoría</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id', $record->category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->title }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Estado de publicación:</label>
                <select name="posted" class="form-select" required>
                    <option value="1" {{ old('posted', $record->posted) == '1' ? 'selected' : '' }}>Publicado</option>
                    <option value="0" {{ old('posted', $record->posted) == '0' ? 'selected' : '' }}>Borrador</option>
                </select>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.handle.view', ['model' => 'posts']) }}" class="btn btn-secondary">Volver</a>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </form>
    </div>
</body>
</html>
