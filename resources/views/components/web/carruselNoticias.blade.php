<div id="noticiasCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach($posts->chunk(3) as $key => $chunk)
        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
            <div class="row noticias_row">
                @foreach($chunk as $post)
                <div class="col-lg-4 noticia_col">
                    <div class="noticia noticia_left">
                        <div class="noticia_image">
                        <img src="{{ asset($post['image']) }}" alt="Imagen de la noticia" class="img-fluid">
                        </div>
                        <div class="noticia_body d-flex flex-row align-items-start justify-content-start">
                            <div class="noticia_date">
                                <div class="d-flex flex-column align-items-center justify-content-center trans_200">
                                    <div class="noticia_day trans_200">{{ $post->created_at->format('d') }}</div>
                                    <div class="noticia_month trans_200">{{ $post->created_at->format('M') }}</div>
                                </div>
                            </div>
                            <div class="noticia_content">
                                <div class="noticia_title">
                                    <a href="{{ route('web.post.show', $post->id) }}">{{ $post->title }}</a>
                                </div>
                                <div class="noticia_info_container">
                                    <div class="noticia_text">
                                        <p>{{ $post->excerpt }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
    <div class="text-center mt-4">
        <a href="{{ route('web.post.index') }}" class="btn btn-secondary">Ver más</a>
    </div>

    <!-- Botones mejorados -->
    <button class="carousel-control-prev custom-carousel-control" type="button" data-bs-target="#noticiasCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next custom-carousel-control" type="button" data-bs-target="#noticiasCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
</div>

<style>
    .custom-carousel-control {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 60px;
        height: 60px;
        background-color: rgba(0, 0, 0, 0.5); /* Fondo semitransparente */
        border-radius: 50%;
        z-index: 10;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .carousel-control-prev.custom-carousel-control {
        left: -70px; /* Mover el botón hacia fuera de la noticia */
    }

    .carousel-control-next.custom-carousel-control {
        right: -70px; /* Mover el botón hacia fuera de la noticia */
    }

    .custom-carousel-control .carousel-control-prev-icon,
    .custom-carousel-control .carousel-control-next-icon {
        width: 30px;
        height: 30px;
        filter: invert(1); /* Cambiar color del icono */
    }

    .custom-carousel-control:hover {
        background-color: rgba(0, 0, 0, 0.8); /* Fondo más oscuro al pasar el mouse */
    }
</style>
