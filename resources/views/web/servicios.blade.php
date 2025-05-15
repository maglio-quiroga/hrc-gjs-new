@extends('layouts.web')
@section('content')
<div class="container" style="margin-top: 150px">
    <div class="super_container d-flex flex-wrap justify-content-center">
        <div class="about">
                <div class="container text-center">
                    <h2 class="section_title">Servicios y Unidades</h2>
                </div>
                <div class="service-container">
                    @foreach ($services as $service)
                        <div class="m-3"><x-service-card :service="$service" /></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
