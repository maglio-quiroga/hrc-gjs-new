@extends('layouts.web')

@section('content')
<!--PAGINA
        QUIENES SOMOS
            EQUIPO DIRECTIVO -->
<div class="container quienesSomos">
    <div class="super_container">
        <div class="about">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="container text-center">
                            <br><br>
                            <h2 class="section_title">Equipo Directivo</h2>
                            <br><br>
                            <div class="section_subtitle"><p></p></div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                @foreach($members as $member)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 mb-4">
                    <div class="card text-center d-flex flex-column h-100 tarjetaDirectivo">
                        <img src="/image/uploads/team/{{ $member['image'] ?? 'default.jpg' }}"class="card-img-top img-fluid presentarDirectivo" alt="{{ $member['name'] ?? 'Nombre no disponible' }}">
                        <div class="card-body d-flex flex-column presentarDirectivo_b">
                            <h5 class="card-title nombreDirectivo">
                                {{ $member['name'] ?? 'Nombre no disponible' }}
                            </h5>
                            <p class="card-text tituloDirectivo">
                                {{ $member['position'] ?? 'Título no disponible' }}
                            </p>
                        </div>
                        <div class="mt-auto">
                            <button class="card-button mostrarInfoDirectivo" data-bs-toggle="modal" data-bs-target="#modal-{{ $loop->index }}">
                                Más información
                            </button>
                        </div>
                    </div>
                </div>
                    <div class="modal fade" id="modal-{{ $loop->index }}" tabindex="-1" 
                         aria-labelledby="modalLabel-{{ $loop->index }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalLabel-{{ $loop->index }}">
                                        {{ $member['name'] ?? 'Nombre no disponible' }}
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="/image/uploads/team/{{ $member['image'] ?? 'default.jpg' }}" 
                                         class="img-fluid mb-3" 
                                         alt="{{ $member['name'] ?? 'Nombre no disponible' }}">
                                    <p>{{ $member['description'] ?? 'Descripción no disponible' }}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary mostrarInfoDirectivo" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

