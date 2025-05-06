<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dirección de Formación Continua</title>
    <!--BUSTRAP-->
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="styles/courses.css">
    <link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <link rel="stylesheet" type="text/css" href="styles/main.css">
    <!-- carrusel -->
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <!-- accesibilidad y bloques de separaciones (div) con sus estilos-->
    <link rel="stylesheet" href="styles/accesibilidad.css">
    


    
    
    
    

</head>
<body>
    <div id="app">
        <div class="super_container">
            @include('template.header')
            @include('template.menu')
            <div>
            
                <div class="container">
                    
                    <main class="mt-4">
                        @yield('content')
                    </main>
                    
                </div>
                
            </div>
            @include('template.footer')
        </div>
    </div>
    
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/greensock/TweenMax.min.js"></script>
    <script src="plugins/greensock/TimelineMax.min.js"></script>
    <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="plugins/greensock/animation.gsap.min.js"></script>
    <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="js/courses.js"></script>
    <script ser="js/custom.js"></script>
    
    
</body>
</html>