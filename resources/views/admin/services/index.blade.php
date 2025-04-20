<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Servicios</title>
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <h1>Servicios</h1>
    <a href="{{ route('admin.handle.view', ['model' => 'services', 'action' => 'create']) }}" class="btn btn-success mb-3">Crear nuevo</a>
    <table  class="table table-striped table-hover" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($records as $service)
                <tr>
                    <td>{{ $service->id }}</td>
                    <td>{{ $service->name }}</td>
                    <td>{{ $service->description }}</td>
                    <td>
                        @if ($service->image)
                            <img src="{{ asset($service->image) }}" width="100">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.handle.view', ['model' => 'services', 'action' => 'edit', 'target' => $service->id]) }}">Editar</a>
                        <form action="{{ route('admin.handle.delete', ['model' => 'services', 'target' => $service->id]) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>