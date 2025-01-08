<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicaciones de Instagram</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body>
    <div class="team">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-center">
                        <h2 class="section_title">Instagram</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <!-- Swiper Carousel -->
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            @if ($error)
                                <div style="color: red;">{{ $error }}</div>
                            @endif

                            @if (count($posts) > 0)
                                @foreach ($posts as $post)
                                    <div class="swiper-slide">
                                        <div class="team_item">
                                            <div class="team_image">
                                                @if ($post['media_type'] === 'IMAGE' || $post['media_type'] === 'CAROUSEL_ALBUM')
                                                    <img src="{{ $post['media_url'] }}" alt="Publicación">
                                                @elseif ($post['media_type'] === 'VIDEO')
                                                    <video controls>
                                                        <source src="{{ $post['media_url'] }}" type="video/mp4">
                                                        Tu navegador no soporta reproducción de video.
                                                    </video>
                                                @endif
                                            </div>
                                            <div class="team_body">
                                                <div class="team_title">
                                                    <a href="{{ $post['permalink'] }}" target="_blank">{{ $post['caption'] ?? 'Sin descripción' }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p>No hay publicaciones disponibles.</p>
                            @endif
                        </div>

                        <!-- Navigation Buttons -->
                        <div class="swiper-button-next" style="color:#75c891"></div>
                        <div class="swiper-button-prev" style="color:#75c891"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        // Initialize Swiper
        const swiper = new Swiper('.mySwiper', {
            slidesPerView: 3, // Maximum 3 slides visible at a time
            spaceBetween: 30, // Space between slides
            loop: true, // Enable infinite looping
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                // Responsive breakpoints
                640: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
        });
    </script>
</body>
</html>
