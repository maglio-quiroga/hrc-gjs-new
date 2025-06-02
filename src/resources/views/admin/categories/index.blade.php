<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('styles/elements/admin.css') }}">
    <title>Categorías</title>
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
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h1">Categorías</h1>
                <a href="{{ route('admin.handle.view', ['model' => 'categories', 'action' => 'create']) }}" class="btn btn-success">
                    <i class="bi bi-plus-circle me-1"></i> Agregar nueva categoría
                </a>
            </div>

            @include('admin.templates.alerts')

            <!-- Buscador -->
            <div class="mb-3">
                <input type="text" id="searchInput" class="form-control" placeholder="Buscar categoría...">
            </div>

            <div class="table-responsive" id="posts-container">
                <table class="table table-hover table-bordered align-middle text-center" id="posts-table">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="category-table-body">
                        @forelse ($records as $record)
                            <tr class="category-row">
                                <td>{{ $record->id }}</td>
                                <td>{{ $record->title }}</td>
                                <td>
                                    <a href="{{ route('admin.handle.view', ['model' => 'categories', 'action' => 'edit', 'target' => $record->id]) }}" class="btn btn-sm btn-warning me-1">
                                        <i class="bi bi-pencil-square"></i> Editar
                                    </a>

                                    <form action="{{ route('admin.handle.delete', ['model' => 'categories', 'target' => $record->id]) }}" method="POST" class="d-inline-block" onsubmit="return confirm('¿Estás seguro de eliminar esta categoría?')">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="bi bi-trash"></i> Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-muted text-center">No hay categorías registradas.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-center" id="posts-pagination">
            {{ $records->links() }}
        </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
        // Inputs de filtro
        const inputNombre   = document.getElementById('searchInput');
        // Contenedores a reemplazar
        const container     = document.getElementById('posts-container');

        // Ruta base (sin parámetros)
        const baseUrl       = "{{ route('admin.handle.view', ['model' => 'categories']) }}";

        // Construye querystring con todos los filtros y (opcional) la página
        function buildUrl(href) {
            if (href) return href; 
            const params = new URLSearchParams();

            if (inputNombre.value.trim())
            params.append('title', inputNombre.value.trim());

            return baseUrl + (params.toString() ? ('?'+params.toString()) : '');
        }

        // Reemplaza la tabla + paginación en el DOM
        function updateTable(html) {
            const tmp = document.createElement('div');
            tmp.innerHTML = html;

            const newTable      = tmp.querySelector('#posts-table');
            const newPagination = tmp.querySelector('#posts-pagination');

            // sustituye
            container.querySelector('#posts-table').replaceWith(newTable);
            container.querySelector('#posts-pagination').replaceWith(newPagination);

            bindPaginationLinks();
        }

        // Hace la petición AJAX y actualiza
        function fetchAndUpdate(href = null) {
            const url = buildUrl(href);
            fetch(url, { headers: { 'X-Requested-With': 'XMLHttpRequest' } })
            .then(r => r.text())
            .then(updateTable)
            .catch(console.error);
        }

        // Engancha los enlaces de paginación para que llamen a fetchAndUpdate()
        function bindPaginationLinks() {
            container.querySelectorAll('#posts-pagination a').forEach(a => {
            a.addEventListener('click', e => {
                e.preventDefault();
                fetchAndUpdate(a.href);
            });
            });
        }

        // Cuando cambie cualquier filtro, recargamos la tabla
        [inputNombre].forEach(el => {
            el.addEventListener('input', () => fetchAndUpdate());
            el.addEventListener('change', () => fetchAndUpdate());
        });

        // Al cargar la página, enganchamos la paginación
        bindPaginationLinks();
        });
        </script>

</body>
</html>
