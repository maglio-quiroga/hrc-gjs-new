<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="{{ asset('css/users.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
    <h1 class="pt-3">Editar Usuario</h1>
        <form action="{{ route('admin.handle.update', ['model' => 'users', 'target' => $record->id]) }}" method="POST" class="card shadow p-4">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $record->name) }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email', $record->email) }}" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Nueva contraseña (opcional)</label>
                <input type="password" name="password" class="form-control">
            </div>
            <!--Input Hidden para que envie el valor en caso de que se desmarque, la checkbox-->
            <input type="hidden" name="rol" value="regular">
            <div class="form-check mb-3">
                <input
                    class="form-check-input"
                    type="checkbox"
                    name="rol"
                    value="admin"
                    id="rol"
                    {{ old('rol', $record->rol) === 'admin' ? 'checked' : '' }}>
                    <label class="form-check-label" for="rol">Es administrador</label>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.handle.view', ['model' => 'users']) }}" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save me-1"></i> Guardar cambios
                </button>
            </div>
        </form>

    </div>
    <script src="{{ asset('js/users.js') }}"></script>
</body>
</html>