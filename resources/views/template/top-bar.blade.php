<!-- Top Bar -->
<div class="top_bar" style="background-color: #244c5a","font-family: Museo Sans 500">
    <div class="top_bar_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                        <ul class="top_bar_contact_list">
                            <li>
                                <div class="fa fa-question-circle"> Consultas?</div>
                            </li>
                            <li>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <div>formacioncontinua@uda.cl</div>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                            <li class="dropdown order-1">
                                <button type="button" id="dropdownMenu1" data-toggle="dropdown"
                                     class="btn btn-outline-secondary dropdown-toggle text-light">Acceso <span
                                        class="caret"></span></button>
                                <ul class="dropdown-menu dropdown-menu-right mt-2">
                                    <li class="px-3 py-2">

                                        <div class="form-group row mb-0">
                                            <div class="col-md-12">
                                                <a class="btn btn-primary btn-block btn-sm mt-3 mb-3"
                                                    href="https://www.moodle.uda.cl/login/index.php">Aula Virtual</a>
                                                <a class="btn btn-warning btn-block btn-sm mt-3 mb-3"
                                                    href="https://www.portal.uda.cl/">Matricula</a>
                                            </div>

                                        </div>
                                    </li>
                                </ul>
                                
                            </li>
                            <li class="dropdown order-1">
                                <button type="button" id="dropdownMenu1" data-toggle="dropdown"
                                    class="btn btn-outline-secondary dropdown-toggle text-light">Intranet <span
                                        class="caret"></span></button>
                                <ul class="dropdown-menu dropdown-menu-right mt-2">
                                    <li class="px-3 py-2">
                                        <form method="POST" action="">
                                            @csrf

                                            <input style="font-size:12px" placeholder="Email" id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror




                                            <input style="font-size:12px" placeholder="Contraseña" id="password"
                                                type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            <div class="form-group row mb-0">
                                                <div class="col-md-12">
                                                    <button type="submit"
                                                        class="btn btn-secondary btn-block btn-sm mt-3 mb-3">
                                                        {{ __('Inicio') }}
                                                    </button>

                                                    @if (Route::has('password.request'))
                                                        <a style="font-size:12px" class="btn btn-link"
                                                            href="">
                                                            {{ __('Recuperar Contraseña?') }}
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <div class="col-md-12">
                                                    <a class="btn btn-success btn-block btn-sm mt-3 mb-3"
                                                        href="{{}}">Registrarse</a>

                                                </div>
                                            </div>

                                        </form>

                                    </li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
