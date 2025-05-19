<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Servicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <script src="{{ asset('tinymce/js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
</head>
<body class="bg-light py-5">
    <div class="container">

        <h1 class="text-center bg-success text-white py-3 m-0 rounded-top">
            <i class="bi bi-menu-up"></i><i class="bi bi-plus" style="margin-left: -8px;"></i>
            Crear nuevo Servicio
        </h1>

        <form id="serviceForm" action="{{ route('admin.handle.create', ['model' => 'services']) }}" method="POST" enctype="multipart/form-data" class="card p-4 shadow-sm bg-white needs-validation" novalidate>
            @csrf

            <div class="mb-3">
                <label class="form-label">Nombre:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Descripción:</label>
                <textarea name="description" id="description" class="form-control" required></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Imagen:</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.handle.view', ['model' => 'services']) }}" class="btn btn-outline-secondary btn-icon">
                    <i class="bi bi-arrow-left"></i> Cancelar
                </a>
                <button type="submit" class="btn btn-primary btn-icon">
                    <i class="bi bi-save"></i> Guardar
                </button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/services.js') }}"></script>
</body>
</html>
