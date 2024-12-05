@extends('dashboard.master')
@section('content')
    <div class="card text-center">
        <div class="card-header">
            <h3 class="card-title" style="color: #244c5a">ADMINISTRADOR: Actualización de Categoría</h3>
        </div>
        <div class="card-body">
            <div class="container" style="text-align: left">
                @include('dashboard.partials.validation-error')
                <form action="{{ route('category.update', $category->id) }}" method="POST">
                    @method('PUT')
                    @include('dashboard.category._form')
            </div>
        </div>
    </div>


@endsection
