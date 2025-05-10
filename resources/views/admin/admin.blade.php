<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="{{ asset('styles/elements/admin.css') }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="structure">

        <div class="navbar-container">
            @include('admin.templates.navbar')
        </div>

        <div class="sidebar-container">
            @include('admin.templates.sidebar')
        </div>

        <div class="content-display">

            <div class=".container d-flex justify-content-center p-3">
                <h1 class="h1">Resumen de Sitio Administrativo</h1>
            </div>

            @include('admin.templates.alerts')
            
            <div class=".container d-flex justify-content-center p-3">
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <a type="button" href="#" class="btn btn-outline-success">Crear Usuario</a>
                        <a type="button" href="{{ route('admin.handle.view', ['model' => 'posts', 'action' => 'create']) }}" class="btn btn-outline-success">Crear Noticia</a>
                        <a type="button" href="{{ route('admin.handle.view', ['model' => 'categories', 'action' => 'create']) }}" class="btn btn-outline-success">Crear Categoria</a>
                        <a type="button" href="{{ route('admin.handle.view', ['model' => 'services', 'action' => 'create']) }}" class="btn btn-outline-success">Crear Servicio</a>
                        <a type="button" href="{{ route('admin.handle.view', ['model' => 'teams', 'action' => 'create']) }}" class="btn btn-outline-success">Crear Equipo</a>
                    </div>
            </div>

    <div class="container-fluid p-4">
    {{-- Primera fila: Categories + Posts --}}
    <div class="row mb-4">
        {{-- Categories --}}
        <div class="col-md-6 mb-3">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h5 class="mb-0">Últimas 5 Categorías</h5>
                </div>
                <div class="card-body p-0">
                    <table class="table table-sm mb-0 table-hover table-success">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Título</th>
                                <th>Actualizado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $cat)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $cat->title }}</td>
                                    <td>{{ $cat->updated_at->format('Y-m-d H:i') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Posts --}}
        <div class="col-md-6 mb-3">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h5 class="mb-0">Últimos 5 Posts</h5>
                </div>
                <div class="card-body p-0">
                    <table class="table table-sm mb-0 table-hover table-success">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Título</th>
                                <th>Categoría</th>
                                <th>Estado</th>
                                <th>Actualizado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->category->title ?? '—' }}</td>
                                    <td>
                                        @if($post->posted)
                                            <span class="badge text-bg-success">Publicado</span>
                                        @else
                                            <span class="badge text-bg-danger">Borrador</span>
                                        @endif
                                    </td>
                                    <td>{{ $post->updated_at->format('Y-m-d H:i') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Segunda fila: Services + Team --}}
    <div class="row">
        {{-- Services --}}
        <div class="col-md-6 mb-3">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h5 class="mb-0">Últimos 5 Servicios</h5>
                </div>
                <div class="card-body p-0">
                    <table class="table table-sm mb-0 table-hover table-success">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Actualizado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($services as $srv)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $srv->name }}</td>
                                    <td>{{ $srv->updated_at->format('Y-m-d H:i') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Team --}}
        <div class="col-md-6 mb-3">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h5 class="mb-0">Últimos 5 Equipos</h5>
                </div>
                <div class="card-body p-0">
                    <table class="table table-sm mb-0 table-hover table-success">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Rol</th>
                                <th>Actualizado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($teams as $member)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $member->name }}</td>
                                    <td>{{ $member->position }}</td>
                                    <td>{{ $member->updated_at->format('Y-m-d H:i') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


        </div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>