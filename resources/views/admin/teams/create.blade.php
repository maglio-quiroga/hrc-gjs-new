<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Crear miembro</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card-custom {
            border-radius: 1rem;
            box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.1);
        }
        .form-label {
            font-weight: 500;
        }
        .btn-icon {
            display: inline-flex;
            align-items: center;
        }
        .btn-icon i {
            margin-right: 0.5rem;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="card card-custom bg-white rounded">

            <h1 class="text-center bg-success text-white py-3 m-0 rounded-top">
                <i class="bi bi-person-vcard-fill" style="font-size: 50px;"></i><i class="bi bi-plus" style="margin-left: -8px;"></i>
                Agregar nuevo miembro al equipo
            </h1>

            <form action="{{ route('admin.handle.create', ['model' => 'teams']) }}" method="POST" enctype="multipart/form-data" class="p-4">
                @csrf

                {{-- Nombre --}}
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Posición --}}
                <div class="mb-3">
                    <label for="position" class="form-label">Posición</label>
                    <input type="text" name="position" id="position" class="form-control @error('position') is-invalid @enderror" value="{{ old('position') }}" required>
                    @error('position')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Descripción --}}
                <div class="mb-3">
                    <label for="description" class="form-label">Descripción</label>
                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="4" required>{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Imagen de perfil --}}
                <div class="mb-3">
                    <label for="image" class="form-label">Imagen de perfil</label>
                    <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" accept="image/*">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Botones --}}
                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{ route('admin.handle.view', ['model' => 'teams']) }}" class="btn btn-outline-secondary btn-icon">
                        <i class="bi bi-arrow-left"></i> Cancelar
                    </a>
                    <button type="submit" class="btn btn-primary btn-icon">
                        <i class="bi bi-save"></i> Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
