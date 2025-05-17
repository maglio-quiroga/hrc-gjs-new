@extends('layouts.web')
@section('content')
<div class="container we_1a">
    <div class="super_container d-flex flex-wrap justify-content-center">
        <div class="about">
                <div class="container text-center"><h2 class="section_title">Servicios y Unidades</h2></div>
                <div class="service-container">
                    @foreach ($services as $service)
                        <div class="service-item"><x-service-card :service="$service" /></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
