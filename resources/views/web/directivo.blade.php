@extends('web.master')

@section('content')
<!--PAGINA
        QUIENES SOMOS
            EQUIPO DIRECTIVO -->
<div class="container" style="margin-top: 150px">
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
                    <div class="card text-center d-flex flex-column h-100" style="position: relative;">
                        <img src="/image/uploads/team/{{ $member['image'] ?? 'default.jpg' }}"class="card-img-top img-fluid" style="object-fit: cover; height: 200px;" alt="{{ $member['name'] ?? 'Nombre no disponible' }}">
                        <div class="card-body d-flex flex-column" style="flex-grow: 1;">
                            <h5 class="card-title" style="font-size: 1rem; line-height: 1.2; margin-bottom: 0.5rem;">
                                {{ $member['name'] ?? 'Nombre no disponible' }}
                            </h5>
                            <p class="card-text" 
                               style="white-space: normal; word-wrap: break-word; overflow: visible; font-size: 0.9rem; line-height: 1.3; margin-bottom: 0;">
                                {{ $member['position'] ?? 'Título no disponible' }}
                            </p>
                        </div>
                        <div class="mt-auto">
                            <button class="card-button" data-bs-toggle="modal" data-bs-target="#modal-{{ $loop->index }}"style="background-color: #4bb584; color: #fff; border: none; padding: 10px; font-size: 1rem; text-align: center; cursor: pointer; width: 100%; transition: background-color 0.2s ease;">
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
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #4bb584; color: #fff; border: none; padding: 10px; font-size: 1rem; text-align: center; cursor: pointer; width: 100%; transition: background-color 0.2s ease;">Cerrar</button>
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

