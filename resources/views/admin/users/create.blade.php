<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/users.css') }}">
</head>
<body class="bg-light py-5">
    <div class="container">
        <h1 class="mb-4">Crear nuevo Usuario</h1>

        <form id="userForm" action="{{ route('admin.handle.create', ['model' => 'users']) }}" method="POST" class="card p-4 shadow-sm bg-white">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nombre:</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Contraseña:</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            
            <label>
                <input type="checkbox" name="rol" value="admin" {{ old('rol', $record->rol ?? '') === 'admin' ? 'checked' : '' }}>
                Administrador
            </label>

            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.handle.view', ['model' => 'users']) }}" class="btn btn-secondary">Volver</a>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>


    </div>

    <script src="{{ asset('js/users.js') }}"></script>
</body>
</html>
