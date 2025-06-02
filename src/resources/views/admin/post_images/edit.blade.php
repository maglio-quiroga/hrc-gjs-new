<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Imagen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/posts.css') }}">
</head>
<body class="bg-light py-5">
    <div class="container">

        @php
            use App\Models\Post;
            $posts = Post::all();
        @endphp

        <h1 class="text-center bg-warning text-white py-3 m-0 rounded-top">
            <i class="bi bi-image"></i><i class="bi bi-pencil-square" style="margin-left: -8px;"></i>
            Editar Imagen
        </h1>
        

        <form action="{{ route('admin.handle.update', ['model' => 'post_images', 'target' => $record->id]) }}" method="POST" class="card shadow p-4" enctype="multipart/form-data">
            @csrf

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
                <label for="post_id" class="form-label">Post relacionado</label>
                <select name="post_id" id="post_id" class="form-select @error('post_id') is-invalid @enderror" required>
                    <option value="">-- Selecciona un post --</option>
                    @foreach ($posts as $post)
                        <option value="{{ $post->id }}" {{ old('post_id', $record->post_id) == $post->id ? 'selected' : '' }}>
                            {{ $post->title }}
                        </option>
                    @endforeach
                </select>
                @error('post_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.handle.view', ['model' => 'post_images']) }}" class="btn btn-outline-secondary">
                    <i class="bi bi-arrow-left"></i> Cancelar
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save"></i> Guardar cambios
                </button>
            </div>
        </form>
    </div>
</body>
</html>