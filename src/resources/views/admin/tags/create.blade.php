<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('styles/elements/edit.css') }}">
    <title>Agregar Tag</title>
</head>
<body>
<div class="container mt-5">

    <h1 class="text-center bg-success text-white py-3 m-0 rounded-top">
        <i class="bi bi-tags-fill"></i><i class="bi bi-plus" style="margin-left: -8px;"></i>
        Agregar nuevo Tag
    </h1>

    <form action="{{ route('admin.handle.create', ['model' => 'tags']) }}" method="POST" class="card shadow p-4 needs-validation" novalidate>
        @csrf

        {{-- Nombre del Tag --}}
        <div class="mb-3">
            <label for="name" class="form-label">Nombre del Tag</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        {{-- Botones --}}
        <div class="d-flex justify-content-between">
            <a href="{{ route('admin.handle.view', ['model' => 'tags']) }}" class="btn btn-outline-secondary btn-icon">
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