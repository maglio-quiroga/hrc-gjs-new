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
                    <a class="dropdown-item" href="{{route('about')}}">Nosotros</a>
                    <a class="dropdown-item" href="{{route('directivo')}}">Equipo directivo</a>
                    <a class="dropdown-item" href="{{route('servicios')}}">Servicios y unidades</a>
                </ul>
            </li>
            <li class="dropdown">
                <div class="shopping_cart"><i class="fa fa-book" aria-hidden="true"></i></div><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Información al paciente
                <span class="caret"></span></a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
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
                <div class="shopping_cart"><i class="fa fa-user" aria-hidden="true"></i><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Comunidad
                <span class="caret"></span></a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="">Hospital transparente</a>
                    <a class="dropdown-item" href="">Hospital amigo</a>
                    <a class="dropdown-item" href="">Consejo consultivo</a>
                    <a class="dropdown-item" href="#">Trabaje con nosotros</a>
                </ul>
            </li>
            <li><div class="shopping_cart"><i class="fa fa-newspaper-o" aria-hidden="true"></i><a href=""> Noticias</a></div></li>
        </ul>
        
                            
    </nav>
</div>