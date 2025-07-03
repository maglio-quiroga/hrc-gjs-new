<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Editar Tag</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Editar Tag</h1>

        <form action="{{ route('admin.handle.update', ['model' => 'tags', 'target' => $record->id]) }}" method="POST" class="card shadow p-4">
            @csrf

            {{-- Nombre del Tag --}}
            <div class="mb-3">
                <label for="name" class="form-label">Nombre del Tag</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $record->name) }}" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Botones --}}
            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.handle.view', ['model' => 'tags']) }}" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save me-1"></i> Guardar cambios
                </button>
            </div>
        </form>
    </div>
</body>
</html>