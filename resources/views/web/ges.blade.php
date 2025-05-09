@extends('layouts.web')

@section('content')
<!--PAGINA
        INFORMACION DE PACIENTES 
            GES -->
<div class="container" style="margin-top: 150px; margin-bottom: 50px;">

    <!-- Título Principal -->
    <div class="text-center mb-4">
        <h2 style="color: #28a745; font-weight: bold;">Garantías Explícitas en Salud (GES / AUGE)</h2>
        <p class="text-muted">Acceso a atención de salud garantizada, oportuna y de calidad.</p>
    </div>

    <!-- Contenido Principal -->
    <section class="mb-5">
        <h4 class="text-success">¿Qué es el AUGE/GES?</h4>
        <p style="text-align: justify;">
            El <strong>AUGE</strong> surge en el año <strong>2005</strong> como parte de un <strong>Régimen General de Garantías en Salud</strong> establecido por el <strong>Ministerio de Salud</strong> (MINSAL). Este régimen representa un conjunto de beneficios de salud garantizados para los ciudadanos.
        </p>
        <p style="text-align: justify;">
            Con el tiempo, el nombre del programa cambió a <strong>Garantías Explícitas en Salud (GES)</strong>, un término que define de manera más precisa su objetivo principal: 
            <em>"Garantizar de manera legal y exigible aquellas prestaciones de los problemas de salud que están cubiertos por el AUGE."</em>
        </p>
    </section>

    <!-- Beneficios del AUGE/GES -->
    <section class="mb-5">
        <h4 class="text-success">Beneficios del AUGE/GES</h4>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <strong>Acceso sin Discriminación:</strong> Todas las personas tienen derecho a acceder a las prestaciones garantizadas.
            </li>
            <li class="list-group-item">
                <strong>Atención Oportuna:</strong> La atención médica debe brindarse dentro de los plazos establecidos.
            </li>
            <li class="list-group-item">
                <strong>Calidad en la Atención:</strong> Las prestaciones se deben realizar bajo estándares de calidad definidos.
            </li>
            <li class="list-group-item">
                <strong>Protección Financiera:</strong> Se garantiza un acceso asequible, sin afectar la economía de las personas.
            </li>
        </ul>
    </section>

    <!-- Enlace a Información Oficial -->
    <section class="text-center mt-5">
        <h4 class="text-success">Más Información</h4>
        <p style="text-align: justify;">
            Si deseas obtener más información oficial sobre las Garantías Explícitas en Salud (AUGE/GES), puedes visitar el sitio oficial del Ministerio de Salud haciendo clic en el siguiente enlace:
        </p>
        <a href="https://auge.minsal.cl/" target="_blank" class="btn btn-primary">
            Ir al Sitio AUGE MINSAL
        </a>
    </section>

</div>
@endsection
