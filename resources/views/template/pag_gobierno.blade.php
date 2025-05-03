@php
    $titles = [
        'Transparencia Activa',
        'Plan Estratégico',
        'Cuenta Pública',
        'Participación Ciudadana',
        'Empleos Públicos',
        'Seguridad de la Información',
        'Servicio de Salud Atacama',
        'Sistema OIRS',
        'Farmacia de Turno'
    ];

    $links = [
        '/plan-estrategico',
        '/proyectos',
        '/documentos',
        '/reportes',
        '/estadisticas',
        '/calendario',
        '/contactos',
        '/configuracion',
        '/ayuda'
    ];
@endphp

<div class="pagespublic" style="background-color: #FAFAFA">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title" style="padding-bottom: 50px">Enlaces de Interés</h2>
                </div>
            </div>
        </div>
        <div class="row pagespublic_row">
            <!-- Features Item -->
            @foreach(array_combine($titles, $links) as $title => $link)
                <div class="col-md-4 mb-4">
                    <x-card-gobierno href="{{ $link }}">
                        {{ $title }}
                    </x-card-gobierno>
                </div>
            @endforeach
        </div>
    </div>
</div>
