<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Servicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
</head>
<body class="bg-light py-5">
    <div class="container">
        <h1 class="mb-4">Crear nuevo Servicio</h1>

        <form id="serviceForm" action="{{ route('admin.handle.create', ['model' => 'services']) }}" method="POST" enctype="multipart/form-data" class="card p-4 shadow-sm bg-white">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nombre:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Descripción:</label>
                <textarea name="description" id="description" rows="4" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Imagen:</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.handle.view', ['model' => 'services']) }}" class="btn btn-secondary">Volver</a>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/services.js') }}"></script>
</body>
</html>
