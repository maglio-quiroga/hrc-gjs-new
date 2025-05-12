<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/posts.css') }}">

</head>
<body class="bg-light py-5">
    <div class="container">

        @php
            use App\Models\Category;
            $categories = Category::all();
        @endphp

        <h1 class="text-center bg-success text-white py-3 m-0 rounded-top">
            <i class="bi bi-newspaper"></i><i class="bi bi-plus" style="margin-left: -8px;"></i>
            Crear nuevo Post
        </h1>

        <form action="{{ route('admin.handle.create', ['model' => 'posts']) }}" method="POST" enctype="multipart/form-data" class="card p-4 shadow-sm bg-white needs-validation" novalidate>
            @csrf

            <div class="mb-3">
                <label class="form-label">Título:</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                <div class="invalid-feedback">
                    Por favor, ingresa un título.
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Contenido:</label>
                <textarea name="content" rows="5" class="form-control" required>{{ old('content') }}</textarea>
                <div class="invalid-feedback">
                    Por favor, ingresa el contenido.
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Imagen:</label>
                <input type="file" name="image" class="form-control" accept="image/*">
                <!-- Imagen es opcional, por eso no tiene invalid-feedback ni required -->
            </div>

            <div class="mb-3">
                <label class="form-label">Categoría:</label>
                <select name="category_id" class="form-select" required>
                    <option value="">Selecciona una categoría</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->title }}
                        </option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                    Por favor, selecciona una categoría.
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Estado de publicación:</label>
                <select name="posted" class="form-select" required>
                    <option value="">Selecciona un estado</option>
                    <option value="1" {{ old('posted') == '1' ? 'selected' : '' }}>Publicado</option>
                    <option value="0" {{ old('posted') == '0' ? 'selected' : '' }}>Borrador</option>
                </select>
                <div class="invalid-feedback">
                    Por favor, selecciona un estado de publicación.
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.handle.view', ['model' => 'posts']) }}" class="btn btn-outline-secondary btn-icon">
                    <i class="bi bi-arrow-left"></i> Cancelar
                </a>
                <button type="submit" class="btn btn-primary btn-icon">
                    <i class="bi bi-save"></i> Guardar
                </button>
            </div>
        </form>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/posts.js') }}"></script>
</body>
</html>
