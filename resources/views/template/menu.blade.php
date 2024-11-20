<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
    <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
    <div class="search">
        <form action="#" class="header_search_form menu_mm">
            <input type="search" class="search_input menu_mm" placeholder="Buscar" required="required">
            <button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
                <i class="fa fa-search menu_mm" aria-hidden="true"></i>
                
            </button>
        </form>
    </div>
    <nav class="menu_nav">
        <ul class="menu_mm">
            <li class="menu_mm"><div class="shopping_cart"><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('inicio')}}"> Inicio</a></div></li>
            
            <li class="dropdown">
                <div class="shopping_cart"><i class="fa fa-building" aria-hidden="true"></i></div><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Quienes Somos
                <span class="caret"></span></a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('about')}}">Formación continua</a>
                <a class="dropdown-item" href="{{route('equipment')}}">Equipo de Trabajo</a>
                
                </ul>
            </li>
            <li class="dropdown">
                <div class="shopping_cart"><i class="fa fa-book" aria-hidden="true"></i></div><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Oferta Académica
                <span class="caret"></span></a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="">Diplomados</a>
                    <a class="dropdown-item" href="">Postítulos</a>
                    <a class="dropdown-item" href="#">OTEC</a>
                    <a class="dropdown-item" href="">ATE</a>
                    <a class="dropdown-item" href="">Cursos</a>
                
                </ul>
            </li>
           
            
            <li class="menu_mm"><div class="shopping_cart"><i class="fa fa-user" aria-hidden="true"></i><a href=""> Contacto</a></div></li>
            <li><div class="shopping_cart"><i class="fa fa-dollar" aria-hidden="true"></i><a href="https://www.portal.uda.cl/"> Matrícula</a></div></li>
            <li><div class="shopping_cart"><i class="fa fa-graduation-cap" aria-hidden="true"></i><a href="https://www.moodle.uda.cl"> Aula Virtual</a></div></li>
        </ul>
        
                            
    </nav>
</div>