<div class="card">
<img src="{{ asset($service['image']) }}" alt="Imagen del servicio" class="img-fluid">
    <div class="card-content">
        <h5 class="card-title">{{ $service['name'] }}</h5>
        <p class="card-text">{{ $service['description'] }}</p>
    </div>
    <button class="card-button" data-bs-toggle="modal" data-bs-target="#modal-{{ $service['id'] }}">
        Más información
    </button>
</div>

<x-service-modal :service="$service" />
