<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Agregar Evento</title>
</head>
<body>
<div class="container mt-5">

    <h1 class="text-center bg-success text-white py-3 m-0 rounded-top">
        <i class="bi bi-menu-button-wide-fill"></i><i class="bi bi-plus" style="margin-left: -8px;"></i>
        Agregar nuevo Evento
    </h1>

    <form action="{{ route('admin.handle.create', ['model' => 'events']) }}" method="POST" class="card shadow p-4 needs-validation" novalidate>
        @csrf

        {{-- Título --}}
        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
        </div>

        {{-- Descripcion --}}
         <div class="mb-3">
            <label for="description" class="form-label">Descripcion</label>
            <input type="text" name="description" id="description" class="form-control" value="{{ old('description') }}" required>
        </div>

        {{-- Fecha de Evento --}}
         <div class="mb-3">
            <label for="event_date" class="form-label">Descripcion</label>
            <input type="date" name="event_date" id="event_date" class="form-control" value="{{ old('event_date') }}" required>
        </div>

        {{-- Botones --}}
        <div class="d-flex justify-content-between">
            <a href="{{ route('admin.handle.view', ['model' => 'events']) }}" class="btn btn-outline-secondary btn-icon">
                <i class="bi bi-arrow-left"></i> Cancelar
            </a>
            <button type="submit" class="btn btn-primary btn-icon">
                <i class="bi bi-save"></i> Guardar
            </button>
        </div>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>