@extends('dashboard.master')
@section('content')
    <div class="card text-center">
        <div class="card-header">
            <h3 class="card-title text-color">ADMINISTRADOR: Actualización de Miembro</h3>
        </div>
        <div class="card-body">
            <div>
                <div class="container" style="text-align: left">
                    @include('dashboard.partials.validation-error')
                    <form action="{{ route('team.update', $team->id) }}" method="POST">
                        @method('PUT')
                        @include('dashboard.team._form')
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
