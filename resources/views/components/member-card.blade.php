<div class="card text-center d-flex flex-column" style="position: relative; height: 100%;">
    <img src="{{ $member['image'] ?? 'images/default.jpg' }}" 
         class="card-img-top img-fluid" 
         style="object-fit: cover; max-height: 200px;" 
         alt="{{ $member['name'] ?? 'Nombre no disponible' }}">

    <div class="card-body flex-grow-1 d-flex flex-column">
        <h5 class="card-title">{{ $member['name'] ?? 'Nombre no disponible' }}</h5>
        <p class="card-text flex-grow-1">{{ $member['title'] ?? 'Título no disponible' }}</p>
    </div>

    <button class="card-button" 
            data-bs-toggle="modal" 
            data-bs-target="#modal-{{ $loop->index }}">
        Más información
    </button>
</div>