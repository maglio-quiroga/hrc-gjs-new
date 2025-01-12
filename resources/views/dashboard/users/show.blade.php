
@extends('dashboard.master')
@section('content')
<div class="card content-fluid text-center">
    <div class="card-header">
        <h3 class="card-title text-color">ADMINISTRADOR: Usuario</h3>
    </div>
    <div class="card-body">
        <div class="container" style="text-align: left">
            
            <label for="name"><strong>Nombre</strong></label>
            <input readonly class="form-control mb-2" type="text" name="name" id="name" value="{{ $user->name }}">
    
            <label for="email" class="form-label"><strong>Correo Electrónico</strong></label>
            <input readonly class="form-control mb-2" type="email" name="email" id="email" value="{{ $user->email }}">
            
            @if ($user->image)
                <img src="/image/uploads/users/{{ $user->image }}" style="width:250px" alt="{{ $user->name }}">
            @endif

        </div>
    </div>
</div>
@endsection