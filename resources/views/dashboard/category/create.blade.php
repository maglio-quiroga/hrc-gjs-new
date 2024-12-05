@extends('dashboard.master')
@section('content')
    <div class="card text-center">
        <div class="card-header">
            <h3 class="card-title" style="color: #244c5a">ADMINISTRADOR: Ingreso de Nueva Categoría</h3>
        </div>
        <div class="card-body">
            <div>
                @include('dashboard.partials.validation-error')

                <form action="{{ route('category.store') }}" method="POST">

                    @include('dashboard.category._form')

                </form>
            </div>
        </div>
    </div>


@endsection
