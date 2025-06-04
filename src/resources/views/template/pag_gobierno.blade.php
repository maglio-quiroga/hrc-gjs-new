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
        'https://www.portaltransparencia.cl/PortalPdT/',
        'https://hospitalcopiapo.cl/docs/PlanificacionEstrategica2021_2025.pdf',
        '#',
        'http://ssat.redsalud.gob.cl/usuarios/proyectos-de-participacion-ciudadana-aps-2/proyectos-de-participacion-ciudadana-aps-2020/participacion-ciudadana-en-la-formulacion-de-la-estrategia-nacional-de-salud-2021-2030-en-chile/',
        'https://www.empleospublicos.cl/',
        'https://www.minsal.cl/seguridad_de_la_informacion/',
        'https://www.saludatacama.cl/',
        'https://oirs.minsal.cl/',
        'https://seremienlinea.minsal.cl/asdigital/index.php?mfarmacias'
    ];
@endphp

<div class="pagespublic colorEnlaces">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title ajusteEnlacesInteres">Enlaces de Interés</h2>
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
