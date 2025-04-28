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
<body class="font-sans antialiased">
    <div class="placeholder1">
        <div class="placeholder2">
            @include('admin.templates.sidebar')
        </div>
        <div class="placeholder3">
            @include('admin.templates.navbar')
        </div>
        <div class="placeholder4 container mt-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h3">Categorías</h1>
                <a href="{{ route('admin.handle.view', ['model' => 'categories', 'action' => 'create']) }}" class="btn btn-success">
                    <i class="bi bi-plus-circle me-1"></i> Agregar nueva categoría
                </a>
            </div>

            @include('admin.templates.alerts')

            <!-- Buscador -->
            <div class="mb-3">
                <input type="text" id="searchInput" class="form-control" placeholder="Buscar categoría...">
            </div>

            <div class="table-responsive">
                <table class="table table-hover table-bordered align-middle text-center">
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

            @if ($records->count() > 0)
                <div class="d-flex justify-content-center mt-4">
                    <button id="toggle-btn" class="btn btn-outline-primary btn-sm rounded-pill px-4 py-2 d-flex align-items-center gap-2">
                        <i id="toggle-icon" class="bi bi-arrow-down-circle"></i> 
                        <span id="toggle-text">Ver más</span>
                    </button>
                </div>
            @endif
        </div>
    </div>

    <script>
        const toggleBtn = document.getElementById('toggle-btn');
        const toggleIcon = document.getElementById('toggle-icon');
        const toggleText = document.getElementById('toggle-text');
        const tableRows = document.querySelectorAll('.category-row');
        const searchInput = document.getElementById('searchInput');
        let showingAll = false;

        function updateTable() {
            tableRows.forEach((row, index) => {
                if (!showingAll && index >= 5) {
                    row.style.display = 'none';
                } else {
                    row.style.display = '';
                }
            });
        }

        toggleBtn.addEventListener('click', () => {
            showingAll = !showingAll;
            updateTable();

            if (showingAll) {
                toggleBtn.classList.remove('btn-outline-primary');
                toggleBtn.classList.add('btn-outline-secondary');
                toggleIcon.className = 'bi bi-arrow-up-circle';
                toggleText.textContent = 'Ver menos';
            } else {
                toggleBtn.classList.remove('btn-outline-secondary');
                toggleBtn.classList.add('btn-outline-primary');
                toggleIcon.className = 'bi bi-arrow-down-circle';
                toggleText.textContent = 'Ver más';
            }
        });

        // Buscador dinámico
        searchInput.addEventListener('keyup', function() {
            const filter = this.value.toLowerCase();

            let found = false;

            tableRows.forEach(row => {
                const id = row.querySelector('td:nth-child(1)').innerText.toLowerCase();
                const title = row.querySelector('td:nth-child(2)').innerText.toLowerCase();

                if (id.includes(filter) || title.includes(filter)) {
                    row.style.display = '';
                    found = true;
                } else {
                    row.style.display = 'none';
                }
            });

            // Si estás buscando, oculta el botón "Ver más"
            if (filter.length > 0) {
                toggleBtn.style.display = 'none';
            } else {
                toggleBtn.style.display = 'flex';
                showingAll = false;
                updateTable();
            }
        });

        // Inicializar
        updateTable();
    </script>
</body>
</html>
