<link rel="stylesheet" href="{{ asset('styles/elements/navbar.css') }}">

<header>
	<div class="navbar">
		@auth
		<p style="color: #fafafa;margin-top:10px;"><i class="bi bi-person"></i>{{ auth()->user()->name }}</p>
		@endauth
		<div class="dropdown">
			<button class="dropdown-toggle navbtn">
				<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width: 30px; height: 30px; color:rgb(255, 255, 255);" >
					<path d="M2 3h12a1 1 0 0 1 0 2H2a1 1 0 0 1 0-2zM2 8h12a1 1 0 0 1 0 2H2a1 1 0 0 1 0-2zM2 13h12a1 1 0 0 1 0 2H2a1 1 0 0 1 0-2z"/>
				</svg>
				<span>Sesión</span>
			</button>
			<div class="dropdown-content">
				<div class="navbtn" role="button">
					<a style="display: flex; align-items: center;justify-content: flex-start ;width: 100%; height: 100%;" href="{{ route('profile.edit') }}">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width: 30px; height: 30px; margin-right: 8px; color: #509414;">
							<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"></path>
						</svg>
						<span>Perfil</span>
					</a>
				</div>

				<form method="POST" action="{{ route('logout') }}">
					@csrf
					<button type="submit" class="navbtn" style="cursor: pointer;">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width: 30px; height: 30px; margin-right: 8px; color:rgb(63, 94, 36);">
							<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3H6.75A2.25 2.25 0 0 0 4.5 5.25v13.5A2.25 2.25 0 0 0 6.75 21h6.75a2.25 2.25 0 0 0 2.25-2.25V15m0-6l3 3m0 0l-3 3m3-3H9"></path>
						</svg>
						<span>Cerrar sesión</span>
					</button>
				</form>
			</div>
		</div>
	</div>
</header>



