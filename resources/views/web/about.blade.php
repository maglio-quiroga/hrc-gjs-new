@extends('web.master')
@section('content')
<!--PAGINA
        QUIENES SOMOS 
            NOSOTROS -->
<div class="container" style="margin-top: 150px">
    <link rel="stylesheet" type="text/css" href="styles/about.css">
    <div class="super_container">
        <div class="about">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="container text-center">
                            <br><br>
                            <h2 class="section_title">Sobre Nosotros</h2>
                            <br><br>
                            <div class="section_subtitle">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="width: 100%;">
                    <iframe width="100%" height="610" class="embed-responsive-item"
                            src="https://www.youtube.com/embed/oqsil9V2c7Q?autoplay=1&controls=0"
                            allowfullscreen></iframe>
                </div>
                <br><br>

                @foreach ([
                    ['title' => 'Reseña histórica',
                      'img' => 'images/about/01-frontis-hrc-anos-40-1.jpg',
                      'text' => "
                      El Hospital Regional San José del Carmen de Copiapó es un establecimiento de salud pública, ubicado en la capital de la Región de Atacama.  Es el hospital más antiguo de la zona y el más grande de la tercera región.
                      Los orígenes del Hospital Regional de Copiapó San José del Carmen se remontan al año 1848 cuando se construye el denominado “Establecimiento de Beneficia” en los terrenos que donó Candelaria Goyenechea.
                      En 1869 se construyó un Hospicio en el mismo lugar, donde se recibió a numerosos heridos de guerra provenientes del conflicto en el norte. El Hospicio resultó completamente destruido luego del terremoto de Vallenar del año 1922. Un año después, Carlos Van Buren, realiza una donación para construir un nuevo hospital, cuyo patrón pasó a ser San José del Carmen.
                      El hospital sufrió un incendio en el año 1965 que destruyó parte de sus instalaciones. En julio del año 1968 el presidente Eduardo Frei Montalva Anunció la construcción de un nuevo hospital en el mismo sitio, siendo Entregada la primera etapa en el año 1971 y la segunda en el año 1974.La tercera etapa fue entregada en el año 1995, bajo la presidencia de Eduardo Frei Ruiz-Tagle.
                      En el año 2007 un convenio firmado entre el Ministerio de Salud y el Gobierno Regional de Atacama permitió iniciar el Proceso de Normalización del Hospital Regional de Copiapó, el cual contempla la construcción de una nueva torre de hospitalización, edificio de Salud Mental y un nuevo edificio de Urgencia, entre otras obras.
                      El Hospital Regional de Copiapó, es hoy un Establecimiento de Salud de Alta Complejidad; Por el propio Ministerio de Salud con Registro N° 229 de la Superintendencia de Salud desde el año 2016 (24 de agosto). Re-acreditado con observaciones el 24 de abril, 2020. (Resolución final pendiente)."
                    ],
                    ['title' => 'Nuestra Misión',
                      'img' => 'images/about/mision.jpg',
                      'text' => 'Somos un hospital de alta complejidad asistencial docente, que entregamos servicios integrales de salud a la comunidad, con trabajos en red centrado en las personas.'
                    ],
                    [
                        'title' => 'Nuestra Visión',
                        'img' => 'images/about/vision.jpg',
                        'text' => 'Ser un Hospital referente en la red asistencial que esté orientado a la excelencia en sus resultados sanitarios.'
                    ],
                    [
                        'title' => 'Nuestra Valores',
                        'img' => 'images/about/valores.webp',
                        'texts' => [
                            'Respeto' => 'Es el reconocimiento o valoración de las cualidades de los demás y sus derechos como pacientes o personas integrantes de esta organización.',

                            'Probidad' => 'Es la moralidad, integridad y honradez en las acciones realizadas día a día dentro y fuera de la institución.',

                            'Responsabilidad' => 'Es el compromiso de cada uno de los miembros de la institución de hacerse cargo de la calidad y seguridad de los servicios de salud entregados.',

                            'Compromiso' => 'Es el trabajo en equipo, para entregar ayuda a los usuarios o compañeros de trabajo, que significa estar disponibles en el momento indicado.',

                            'Empatía' => 'Es la capacidad de ponerse en el lugar de otra persona, de intentar evaluar las acciones en función de la situación de esa persona en particular, sus emociones y síntomas.'
                        ]
                    ]
                ] as $section)
                    <div class="card mb-3" style="max-width: 100%;">
                        <div class="row g-0"style="margin: auto; padding-bottom: 20px">
                            <div class="col-md-4 px-3" >
                                <br>
                                <img src="{{ $section['img'] }}" class="img-fluid rounded-start" style="border-radius: 3%;" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="card-title">{{ $section['title'] }}</h3>
                                    @if (isset($section['text']))
                                        <p class="card-text" style="text-align: justify">{{ $section['text'] }}</p>
                                    @else
                                        @foreach ($section['texts'] as $key => $text)
                                        <p class="card-text" style="text-align: justify"><b>{{ $key }}</b>: {{ $text }}</p>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
