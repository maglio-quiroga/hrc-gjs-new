<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="{{ asset('styles/elements/admin.css') }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/cdbootstrap/js/cdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/cdbootstrap/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/9d1d9a82d2.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .chart-container {
            width: 25%;
            height: 25%;
            margin: auto;
        }
    </style>
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
                        <a type="button" href="#" class="btn btn-outline-success btn-lg"><i class="bi bi-person"style="margin-right: 2px;"></i>Crear Usuario</a>
                        <a type="button" href="{{ route('admin.handle.view', ['model' => 'posts', 'action' => 'create']) }}" class="btn btn-outline-success btn-lg"><i class="bi bi-newspaper" style="margin-right: 2px;"></i>Crear Noticia</a>
                        <a type="button" href="{{ route('admin.handle.view', ['model' => 'categories', 'action' => 'create']) }}" class="btn btn-outline-success btn-lg"><i class="bi bi-menu-button-wide-fill"style="margin-right: 2px;"></i>Crear Categoria</a>
                        <a type="button" href="{{ route('admin.handle.view', ['model' => 'services', 'action' => 'create']) }}" class="btn btn-outline-success btn-lg"><i class="bi bi-menu-up"style="margin-right: 2px;"></i>Crear Servicio</a>
                        <a type="button" href="{{ route('admin.handle.view', ['model' => 'teams', 'action' => 'create']) }}" class="btn btn-outline-success btn-lg"><i class="bi bi-person-vcard-fill"style="margin-right: 2px;"></i>Crear Equipo</a>
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
    <div class="d-flex flex-row gap-4">
        <div class="card w-50 mt-4 mb-0 text-center">
            <h5 class="card-header">Porcentaje de Post Publicados y Post Borradores</h5>
            <div class="chart-wrapper w-100 w-md-50 w-lg-75 mx-auto" style="height: auto;">
                <canvas id="chart"></canvas>
            </div>
        </div>
        <div class="card w-50 mt-4 mb-0 text-center">
            <h5 class="card-header">Porcentaje de Categorias por cada Post</h5>
            <div class="chart-wrapper w-100 w-md-50 w-lg-75 mx-auto" style="height: auto;">
                <canvas id="chart2"></canvas>
            </div>
        </div>
    </div>
</div>

</div>    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
    <script>
        fetch('/Posts-chart')
        .then(res => res.json())
        .then(data => {
            const ctx = document.getElementById("chart").getContext('2d');
            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ["Publicados", "Borradores"],
                    datasets: [{
                        label: 'Posts',
                        data: [data.published, data.draft],
                        backgroundColor: ["#0074D9", "#FF4136"]
                    }]
                },
                options: {
                    responsive: true, 
                    maintainAspectRatio: false,
                    plugins: {
                        datalabels: {
                            color: '#fff',  
                            formatter: function(value, context) {
                                let percentage = (value).toFixed(1) + '%'; 
                                return percentage;
                            },
                            font: {
                                weight: 'bold',
                                size: 16
                            },
                            align: 'center', 
                            anchor: 'center', 
                        },
                        legend: {
                            display: true,
                            onClick: function(e) {
                                e.preventDefault();
                            },
                            labels: {
                                boxWidth: 20, 
                                padding: 15
                            }
                        }
                    },
                    interaction: {
                        mode: null, 
                        intersect: false,
                        axis: 'none'
                    },
                    hover: {
                        mode: null, 
                    }
                },
                plugins: [ChartDataLabels]
            });
        });
    </script>
    <script>

    fetch('/Categories-chart')
        .then(res => res.json())
        .then(data => {
            const ctx = document.getElementById("chart2").getContext('2d');

            // Generar colores aleatorios
            const colors = data.labels.map(() => {
                const r = Math.floor(Math.random() * 256);
                const g = Math.floor(Math.random() * 256);
                const b = Math.floor(Math.random() * 256);
                return `rgb(${r}, ${g}, ${b})`;
            });

            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: data.labels,
                    datasets: [{
                        label: 'Categorías',
                        data: data.data,
                        backgroundColor: colors
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        datalabels: {
                            color: '#fff',
                            formatter: function(value) {
                                return value.toFixed(1) + '%';
                            },
                            font: {
                                weight: 'bold',
                                size: 16
                            },
                            align: 'center',
                            anchor: 'center',
                        },
                        legend: {
                            display: true,
                            onClick: function(e) {
                                e.preventDefault();
                            },
                            labels: {
                                boxWidth: 20,
                                padding: 15
                            }
                        }
                    },
                    interaction: {
                        mode: null,
                        intersect: false,
                        axis: 'none'
                    },
                    hover: {
                        mode: null,
                    }
                },
                plugins: [ChartDataLabels]
            });
        });
    </script>
</body>
</html>