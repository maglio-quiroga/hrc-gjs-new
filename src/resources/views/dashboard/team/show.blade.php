@extends('dashboard.master')
@section('content')
<div class="card content-fluid text-center">
    <div class="card-header">
        <h3 class="card-title text-color">ADMINISTRADOR: Miembro</h3>
    </div>
    <div class="card-body">
        <div class="container" style="text-align: left" >
            
                <label for="title"><strong>Nombre</strong></label>
                <input readonly class="form-control mb-2" type="text" name="title" id="title" value="{{$team->name}}">
    
                <label for="title"><strong>Cargo</strong></label>
                <input readonly class="form-control mb-2" type="text" name="title" id="title" value="{{$team->position}}">
                <label for="content" class="form-label"><strong>Descripcion</strong></label>
                <textarea readonly class="form-control mb-2" id="content" rows="3" name="content">{{$team->description}}</textarea>
                <img src="/image/uploads/team/{{$team->image}}" style="width:250px" alt="{{$team->name}}">{{$team->image}}

        </div>
    </div>
</div>
@endsection