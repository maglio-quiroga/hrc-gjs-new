<div>
    {{$slot}}
    
    @foreach($posts->chunk(3) as $chunkIndex => $chunk)
    <div class="carousel-item @if($chunkIndex === 0) active @endif">
        <div class="row">
            @foreach($chunk as $post)
            <div class="col-lg-4 noticia_col">
                <div class="noticia">
                    <div class="noticia_image">
                        <img src="{{ '/image/uploads/posts/' . $post->image }}" alt="Imagen de la noticia" class="img-fluid rounded">
                    </div>
                    <div class="noticia_body d-flex flex-row align-items-start justify-content-start">
                        <div class="noticia_date">
                            <div class="d-flex flex-column align-items-center justify-content-center">
                                <div class="noticia_day">{{ $post->created_at->format('d') }}</div>
                                <div class="noticia_month">{{ $post->created_at->format('M') }}</div>
                            </div>
                        </div>
                        <div class="noticia_content">
                            <div class="noticia_title">
                                <a href="{{ route('noticia.show', $post->id) }}">{{ $post->title }}</a>
                            </div>
                            <div class="noticia_text">
                                <p>{{ \Illuminate\Support\Str::limit($post->content, 100, '...') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endforeach