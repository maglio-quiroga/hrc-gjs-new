<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Servicio</title>
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
</head>
<body>
    <h1>Editar Servicio</h1>
    <form action="{{ route('admin.handle.update', ['model' => 'service', 'target' => $record->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Nombre:</label><br>
        <input type="text" name="name" value="{{ old('name', $record->name) }}" required><br><br>

        <label>Descripción:</label><br>
        <textarea name="description" rows="4">{{ old('description', $record->description) }}</textarea><br><br>

        <label>Imagen actual:</label><br>
        @if ($record->image)
            <img src="{{ asset($record->image) }}" width="100"><br>
        @endif
        <label>Cambiar imagen:</label><br>
        <input type="file" name="image"><br><br>

        <button type="submit">Actualizar</button>
    </form>
    <a href="{{ route('admin.handle.view', ['model' => 'service']) }}">Volver</a>
</body>
</html>
