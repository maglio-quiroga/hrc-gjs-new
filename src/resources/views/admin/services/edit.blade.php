<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Servicio</title>
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <script src="{{ asset('tinymce/js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
</head>
<body>
    <div class="container mt-5">
    <h1 class="pt-3">Editar Servicio</h1>
    <form action="{{ route('admin.handle.update', ['model' => 'services', 'target' => $record->id]) }}" method="POST" enctype="multipart/form-data" class="card shadow p-4">
    @csrf

    {{-- Nombre --}}
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input
            type="text"
            name="name"
            id="name"
            class="form-control @error('name') is-invalid @enderror"
            value="{{ old('name', $record->name) }}"
            required
        >
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Descripción --}}
    <div class="mb-3">
        <label for="description" class="form-label">Descripción</label>
        <textarea
            name="description"
            id="description"
            class="form-control @error('description') is-invalid @enderror"
            rows="4"
            required
        >{{ old('description', $record->description) }}</textarea>
        @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Imagen de servicio --}}
    <div class="mb-3">
        <div class="d-flex">
        <label for="image" class="form-label">Imagen actual:</label><br>
        @if ($record->image)
            <img
                loading="lazy"
                src="{{ asset($record->image) }}"
                alt="Imagen de {{ $record->name }}"
                width="100"
                style="object-fit: cover;"
            ><br>
        @else
            <div class="text-muted mb-2">No hay imagen cargada.</div>
        @endif
        </div>
        <label for="image" class="form-label">Cambiar imagen</label>
        <input
            type="file"
            name="image"
            id="image"
            class="form-control @error('image') is-invalid @enderror"
            accept="image/*"
        >
        @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Botones --}}
        <div class="d-flex justify-content-between">
            <a
                href="{{ route('admin.handle.view', ['model' => 'services']) }}"
                class="btn btn-secondary"
            >
                Cancelar
            </a>
            <button type="submit" class="btn btn-primary">
            <i class="bi bi-save me-1"></i> Guardar cambios
            </button>
        </div>
    </form>
    </div>
    <script src="{{ asset('js/services.js') }}"></script>
</body>
</html>
