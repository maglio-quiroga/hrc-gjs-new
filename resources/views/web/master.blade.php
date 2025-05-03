<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dirección de Formación Continua</title>

    {{-- 1. Añadir directiva @vite --}}
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

    <link rel="stylesheet" type="text/css" href="{{ asset('styles/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/custom_styles.css') }}">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css">
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="styles/course.css">
    <link rel="stylesheet" type="text/css" href="styles/course_responsive.css">
    <link rel="stylesheet" type="text/css" href="styles/courses.css">
    <link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <link rel="stylesheet" type="text/css" href="styles/main.css">
    <!-- carrusel -->
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
</head>
<body>
    <div id="app">
        <div class="super_container">
            @include('template.header')
            <div>
                <div>
                    <main>
                        {{-- El componente de accesibilidad --}}
                        <x-accesibilidad/>
                        {{ $slot ?? '' }}
                        @yield('content')
                    </main>
                </div>
            </div>
            @include('template.footer')
        </div>
    </div>
    <!--SCRIPT-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

    <script src="plugins/greensock/TweenMax.min.js"></script>
    <script src="plugins/greensock/TimelineMax.min.js"></script>
    <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="plugins/greensock/animation.gsap.min.js"></script>
    <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="js/courses.js"></script>
    <script src="js/course.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
