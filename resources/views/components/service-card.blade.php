<div class="card" data-bs-toggle="modal" data-bs-target="#modal-{{ $service['id'] }}">
    <img src="/image/uploads/service/{{ $service['image'] }}" class="card-img" alt="{{ $service['name'] }}">
    <div class="card-content">
        <h5 class="card-title">{{ $service['name'] }}</h5>
        <p class="card-text">{{ $service['description'] }}</p>
    </div>
    <div class="card-button"> Más información</div>
</div>

<x-service-modal :service="$service" />
