@extends('dashboard.master')
@section('content')
    <div class="card text-center">
        <div class="card-header">
            <h3 class="card-title text-color">ADMINISTRADOR: Actualización de Servicio</h3>
        </div>
        <div class="card-body">
            <div>
                <div class="container" style="text-align: left">
                    @include('dashboard.partials.validation-error')
                    <form action="{{ route('service.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @include('dashboard.service._form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection