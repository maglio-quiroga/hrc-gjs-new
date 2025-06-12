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
    <title>TagPerEvent</title>
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
                <h1 class="h1">Tags por Evento</h1>
                <a href="{{ route('admin.handle.view', ['model' => 'tag_per_event', 'action' => 'create']) }}" class="btn btn-success">
                    <i class="bi bi-plus-circle me-1"></i> Agregar nueva relación
                </a>
            </div>

            @include('admin.templates.alerts')

            <!-- Buscador -->
            <div class="mb-3">
                <input type="text" id="searchInput" class="form-control" placeholder="Buscar por ID de evento o tag...">
            </div>

            <div class="table-responsive" id="posts-container">
                <table class="table table-hover table-bordered align-middle text-center" id="posts-table">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>ID Evento</th>
                            <th>ID Tag</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="category-table-body">
                        @forelse ($records as $record)
                            <tr class="category-row">
                                <td>{{ $record->id }}</td>
                                <td>{{ $record->event_id }}</td>
                                <td>{{ $record->tag_id }}</td>
                                <td>
                                    <a href="{{ route('admin.handle.view', ['model' => 'tag_per_event', 'action' => 'edit', 'target' => $record->id]) }}" class="btn btn-sm btn-warning me-1">
                                        <i class="bi bi-pencil-square"></i> Editar
                                    </a>

                                    <form action="{{ route('admin.handle.delete', ['model' => 'tag_per_event', 'target' => $record->id]) }}" method="POST" class="d-inline-block" onsubmit="return confirm('¿Estás seguro de eliminar esta relación?')">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="bi bi-trash"></i> Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-muted text-center">No hay relaciones registradas.</td>
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
            const inputNombre = document.getElementById('searchInput');
            const container = document.getElementById('posts-container');
            const baseUrl = "{{ route('admin.handle.view', ['model' => 'tagperevent']) }}";

            function buildUrl(href) {
                if (href) return href;
                const params = new URLSearchParams();
                if (inputNombre.value.trim())
                    params.append('search', inputNombre.value.trim());
                return baseUrl + (params.toString() ? ('?' + params.toString()) : '');
            }

            function updateTable(html) {
                const tmp = document.createElement('div');
                tmp.innerHTML = html;
                const newTable = tmp.querySelector('#posts-table');
                const newPagination = tmp.querySelector('#posts-pagination');
                container.querySelector('#posts-table').replaceWith(newTable);
                container.querySelector('#posts-pagination').replaceWith(newPagination);
                bindPaginationLinks();
            }

            function fetchAndUpdate(href = null) {
                const url = buildUrl(href);
                fetch(url, { headers: { 'X-Requested-With': 'XMLHttpRequest' } })
                    .then(r => r.text())
                    .then(updateTable)
                    .catch(console.error);
            }

            function bindPaginationLinks() {
                container.querySelectorAll('#posts-pagination a').forEach(a => {
                    a.addEventListener('click', e => {
                        e.preventDefault();
                        fetchAndUpdate(a.href);
                    });
                });
            }

            [inputNombre].forEach(el => {
                el.addEventListener('input', () => fetchAndUpdate());
                el.addEventListener('change', () => fetchAndUpdate());
            });

            bindPaginationLinks();
        });
    </script>
</body>
</html>