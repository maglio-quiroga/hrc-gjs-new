{{-- layouts para los espacios públicos --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CSRF Token para formularios y peticiones AJAX --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Título dinámico, con fallback --}}
    <title>{{ $title ?? 'Hospital Regional de Copiapó' }}</title>

    {{-- Estilos principales y JS via Vite (Asume que app.scss importa Bootstrap y otros estilos base) --}}
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

    {{-- Plugins CSS específicos (Incluidos aquí por si no están en app.scss) --}}
    {{-- Font Awesome (Tomado de diplomat/master) --}}
    <link href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css">

    {{-- Owl Carousel CSS (Común en ambos masters, explícito aquí por si acaso) --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}">

    {{-- Permite añadir CSS específico desde las vistas hijas --}}
    @stack('styles')

</head>
<body>
    {{-- Div para recuadro de enfoque de accesibilidad --}}
    <div id="focus-overlay"></div>
   <div id="app">
        <div class="super_container">
            @include('template.header')
            <div>
                <main>
                    <x-accesibilidad/>
                    {{-- Contenido principal de las vistas hijas --}}
                    {{ $slot ?? '' }} {{-- Para componentes anónimos --}}
                    @yield('content') {{-- Para secciones Blade tradicionales --}}
                </main>
            </div>
            @include('template.footer')
        </div>
    </div>
    {{-- Scripts JS --}}
    {{-- jQuery (A menudo necesario para plugins antiguos, verifica si Vite ya lo incluye o si es necesario) --}}
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>

    {{-- Plugins JS específicos (Incluir después de jQuery/Bootstrap si dependen de ellos y si no están en app.js) --}}
    <script src="{{ asset('plugins/greensock/TweenMax.min.js') }}"></script>
    <script src="{{ asset('plugins/greensock/TimelineMax.min.js') }}"></script>
    <script src="{{ asset('plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
    <script src="{{ asset('plugins/greensock/animation.gsap.min.js') }}"></script>
    <script src="{{ asset('plugins/greensock/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="{{ asset('plugins/easing/easing.js') }}"></script>
    <script src="{{ asset('plugins/parallax-js-master/parallax.min.js') }}"></script>

    {{-- Scripts JS específicos de página/sección (Si no están en app.js) --}}
    {{-- <script src="{{ asset('js/courses.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/course.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/custom.js') }}"></script> --}} {{-- Considera incluir custom.js en app.js --}}

     {{-- Permite añadir JS específico desde las vistas hijas --}}
    @stack('scripts')

</body>
</html>
