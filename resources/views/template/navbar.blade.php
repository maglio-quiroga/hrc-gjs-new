<div class="header_container">
    <div class="navbar_container d-flex flex-row align-items-center justify-content-center">
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('inicio') }}">
      <img src="{{ asset('images/logos/logo_white-236x191.png') }}" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('inicio') }}">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Quienes Somos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown1">
            <li><a class="dropdown-item" href="{{ route('about') }}">Nosotros</a></li>
            <li><a class="dropdown-item" href="{{ route('directivo') }}">Equipo directivo</a></li>
            <li><a class="dropdown-item" href="{{ route('servicios') }}">Servicios y unidades</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Información al Paciente
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown2">
            <li><a class="dropdown-item" href="{{ route('horarios') }}">Horarios</a></li>
            <li><a class="dropdown-item" href="{{ route('como_acudir_urgencias') }}">Cuando acudir a urgencias</a></li>
            <li><a class="dropdown-item" href="{{ route('donacion_de_sangre') }}">Donación de sangre</a></li>
            <li><a class="dropdown-item" href="{{ route('plan_estrategico') }}">Plan estratégico</a></li>
            <li><a class="dropdown-item" href="{{ route('reglamento_interno') }}">Reglamento interno</a></li>
            <li><a class="dropdown-item" href="{{ route('aranceles') }}">Aranceles</a></li>
            <li><a class="dropdown-item" href="{{ route('ges') }}">GES</a></li>
            <li><a class="dropdown-item" href="{{ route('oirs') }}">OIRS</a></li>
            <li><a class="dropdown-item" href="{{ route('legal') }}">Legal</a></li>
        </ul>        
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Comunidad
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown3">
            <li><a class="dropdown-item" href="#">Hospital transparente</a></li>
            <li><a class="dropdown-item" href="#">Hospital amigo</a></li>
            <li><a class="dropdown-item" href="#">Consejo consultivo</a></li>
            <li><a class="dropdown-item" href="#">Trabaje con nosotros</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('web.post.index') }}">Noticias</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    </div>
</div>

