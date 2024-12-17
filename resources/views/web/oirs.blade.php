@extends('web.master')

@section('content')
<div class="container" style="margin-top: 150px; margin-bottom: 50px;">

    <!-- Título Principal -->
    <div class="text-center mb-4">
        <h2 style="color: #28a745; font-weight: bold;">Plan de Contingencia OIRS</h2>
        <p class="text-muted">Atención a solicitudes ciudadanas</p>
    </div>

    <!-- Sección: Información General -->
    <section class="mb-5">
        <h4 class="text-success">¿Cómo puedes realizar tus solicitudes?</h4>
        <p style="text-align: justify;">
            Las solicitudes ciudadanas, que incluyen <strong>reclamos</strong>, <strong>sugerencias</strong>, <strong>solicitudes</strong>, 
            <strong>consultas</strong> y <strong>felicitaciones</strong>, serán recepcionadas a través de los siguientes canales:
        </p>
    </section>

    <!-- Sección: Canales de Atención -->
    <section class="mb-5">
        <div class="row">
            <!-- Atención Presencial -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-success text-white">
                        <h5>Presencial</h5>
                    </div>
                    <div class="card-body">
                        <p>
                            Puedes completar el <strong>Formulario de Registro de Requerimiento</strong> directamente en la OIRS.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Página Web -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-success text-white">
                        <h5>Página Web</h5>
                    </div>
                    <div class="card-body">
                        <p>
                            Realiza tu solicitud en línea visitando: <br>
                            <a href="https://www.oirs.minsal.cl" target="_blank" class="btn btn-primary">
                                Ir a OIRS MINSAL
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Carta -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-success text-white">
                        <h5>Carta</h5>
                    </div>
                    <div class="card-body">
                        <p>
                            Redacta una <strong>carta simple</strong> y entrégala en la oficina de OIRS para su registro y atención.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Atención Telefónica -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-success text-white">
                        <h5>Vía Telefónica</h5>
                    </div>
                    <div class="card-body">
                        <p>
                            Horarios de atención:
                            <ul class="list-unstyled">
                                <li><strong>Lunes a Jueves:</strong> 8:00 a 16:00 hrs.</li>
                                <li><strong>Viernes:</strong> 8:00 a 15:00 hrs.</li>
                                <li>
                                    <strong>Teléfonos:</strong> 
                                    <ul>
                                        <li>522 465 620</li>
                                        <li>522 465 462</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>Salud Responde:</strong> 
                                    600 360 7777 (opción 3) - <em>Atención 24 horas, de lunes a domingo.</em>
                                </li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mensaje Final -->
    <section class="text-center">
        <p class="alert alert-info" style="font-size: 1.1rem;">
            <em>"Se aceptan indicaciones rechazando completar el formulario de manera presencial."</em>
        </p>
    </section>

</div>
@endsection
