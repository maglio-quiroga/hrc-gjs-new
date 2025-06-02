<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Post</title>
    <link rel="stylesheet" href="{{ asset('css/posts.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- TinyMCE -->
    <script src="{{ asset('tinymce/js/tinymce/tinymce.min.js') }}"></script>
</head>
<body class="bg-light py-5">
    <div class="container">
        <h1 class="mb-4">Editar Post</h1>

        @php
            use App\Models\Category;
            $categories = Category::all();
        @endphp

        <form action="{{ route('admin.handle.update', ['model' => 'posts', 'target' => $record->id]) }}" method="POST" enctype="multipart/form-data" class="card p-4 shadow-sm bg-white">
            @csrf

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
                    <option value="1" {{ old('posted', $record->published) == '1' ? 'selected' : '' }}>Publicado</option>
                    <option value="0" {{ old('posted', $record->published) == '0' ? 'selected' : '' }}>Borrador</option>
                </select>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.handle.view', ['model' => 'posts']) }}" class="btn btn-secondary">Volver</a>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </form>
    </div>
<script>
    
    document.addEventListener('DOMContentLoaded', function () {
        tinymce.init({
            selector: 'textarea[name="content"]',
            plugins: 'lists link image table code',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image table | code',
            menubar: 'file edit view insert format',
            height: 400,
            setup: function (editor) {
                document.querySelector('form').addEventListener('submit', function () {
                    // Obtener el contenido como texto sin etiquetas HTML
                    const plainText = editor.getContent({ format: 'text' });

                    // Colocar ese texto limpio directamente en el textarea del formulario
                    document.querySelector('textarea[name="content"]').value = plainText;
                });
            }
        });
    });
</script>
</body>
</html>
