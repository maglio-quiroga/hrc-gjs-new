
    <div class="section_title_container text-center">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->created_at }}</p>
    </div>
    <div class="text-center">
        <img src="{{ asset($post['image']) }}" alt="Imagen de la noticia" class="img-fluid">
    </div>
    <div class="mt-4">
        <p class="text-justify">{{ $post->content }}</p>
    </div>




