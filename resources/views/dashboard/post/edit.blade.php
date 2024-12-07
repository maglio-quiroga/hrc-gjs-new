@extends('dashboard.master')
@section('content')
    <div class="card text-center">
        <div class="card-header">
            <h3 class="card-title text-color">ADMINISTRADOR: Actualización de Noticia</h3>
        </div>
        <div class="card-body">
            <div class="container" style="text-align: left">
                @include('dashboard.partials.validation-error')
                <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PATCH')
                    @include('dashboard.post._form',["task" => "edit"])
                </form>
            </div>
        </div>
    </div>


@endsection
