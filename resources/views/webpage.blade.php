<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hospital Regional de Copiapó</title>
    <!--iconos (redes sociales, iniciar secion)-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css">
    <!--barra navegador -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- carrusel -->
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <!-- bloques de separaciones (div) -->
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <!-- accesibilidad -->
    <link rel="stylesheet" href="styles/accesibilidad.css">

</head>
<body>
    
    <div id="app">
        <div class="super_container">
            @include('template.header')
            @include('template.homes')
            @include('template.noticiasDestacadas', ['posts' => $posts])
            @include('template.instagram')
            @include('template.mapa')
            @include('template.pag_gobierno')
            @include('template.campañas')
            @include('template.videos_interes')
            @include('template.footer')
        </div>
    </div>

    <!-- Botón de Accesibilidad ♿ -->
    <button id="btnAccesibilidad" aria-label="Menú de Accesibilidad">♿</button>

    <!-- Menú Flotante Accesibilidad -->
    <div id="menuAccesibilidad">
        <button id="contrasteBtn">Cambiar Contraste</button>
        <button id="aumentarBtn">Aumentar Texto</button>
        <button id="reducirBtn">Reducir Texto</button>
        <button id="lecturaBtn">Lectura de Pantalla</button>
    </div>

    
    <!-- JS -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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
    <script src="js/custom.js"></script>
    <script src="js/accesibilidad.js"></script>
</body>
</html>