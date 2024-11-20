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
                                <a class="dropdown-item" href="{{route('about')}}">Formación Continua</a>
                                <a class="dropdown-item" href="{{route('equipment')}}">Equipo de Trabajo</a>
                                
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Oferta Académica
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="">Diplomados</a>
                                    <a class="dropdown-item" href="">Postítulos</a>
                                    <a class="dropdown-item" href="#">OTEC</a>
                                    <a class="dropdown-item" href="">ATE</a>
                                    <a class="dropdown-item" href="">Cursos</a>
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