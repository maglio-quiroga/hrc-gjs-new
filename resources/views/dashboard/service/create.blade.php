@extends('dashboard.master')
@section('content')
    <div class="card text-center">
        <div class="card-header">
            <h3 class="card-title text-color">ADMINISTRADOR: Ingreso de Nuevo Servicio</h3>
        </div>
        <div class="card-body">
            <div>
                @include('dashboard.partials.validation-error')
                <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
                    @include('dashboard.service._form')
                </form>
            </div>
        </div>
    </div>
@endsection