<div class="header_container">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="header_content d-flex flex-row align-items-center justify-content-start">
                    <div class="logo_container">
                        <img src="{{asset('images/logo.png')}}" width="250" height="75" alt="">

                    </div>
                    <nav class="main_nav_contaner ml-auto">
                    <!--<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">-->
                        <ul class="main_nav">
                            <li class="active"><a href="{{route('inicio')}}">Inicio</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Quienes Somos
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('about')}}">Nosotros</a>
                                <a class="dropdown-item" href="{{route('directivo')}}">Equipo directivo</a>
                                <a class="dropdown-item" href="{{route('direccion')}}">Dirección</a>
                                <a class="dropdown-item" href="{{route('servicios')}}">Servicios y unidades</a>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Información al paciente
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="">Horarios</a>
                                    <a class="dropdown-item" href="">Cuando acudir a urgencias</a>
                                    <a class="dropdown-item" href="#">Donación de sangre</a>
                                    <a class="dropdown-item" href="">Plan estratégico</a>
                                    <a class="dropdown-item" href="">Reglamento interno</a>
                                    <a class="dropdown-item" href="">Aranceles</a>
                                    <a class="dropdown-item" href="">GES</a>
                                    <a class="dropdown-item" href="">OIRS</a>
                                    <a class="dropdown-item" href="">Legal</a>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Comunidad
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="">Hospital transparente</a>
                                    <a class="dropdown-item" href="">Hospital amigo</a>
                                    <a class="dropdown-item" href="">Consejo consultivo</a>
                                    <a class="dropdown-item" href="#">Trabaje con nosotros</a>
                                </ul>
                            </li>
                            <li class="inactive"><a href="">Noticias</a></li>
                            
                        </ul>

                        <div class="hamburger menu_mm">
                            <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                        </div>
                       
                    </nav>

                </div>
            </div>
        </div>
    </div>
</div>