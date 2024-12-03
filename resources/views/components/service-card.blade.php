<div class="card">
    <img src="{{ $service['image'] }}" class="card-img" alt="{{ $service['name'] }}">
    <div class="card-content">
        <h5 class="card-title">{{ $service['name'] }}</h5>
        <p class="card-text">{{ $service['description'] }}</p>
    </div>
    <button class="card-button" data-bs-toggle="modal" data-bs-target="#modal-{{ $service['id'] }}">
        Más información
    </button>
</div>

<x-service-modal :service="$service" />
