<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Servicio</title>
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">

</head>
<body>
    <h1>Crear nuevo Servicio</h1>
    <form action="{{ route('admin.handle.create', ['model' => 'service']) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Nombre:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Descripción:</label><br>
        <textarea name="description" rows="4"></textarea><br><br>

        <label>Imagen:</label><br>
        <input type="file" name="image"><br><br>

        <button type="submit">Guardar</button>
    </form>
    <a href="{{ route('admin.handle.view', ['model' => 'service']) }}">Volver</a>
</body>
</html>
