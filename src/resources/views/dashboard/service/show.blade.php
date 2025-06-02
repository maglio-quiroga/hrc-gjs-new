@extends('dashboard.master')
@section('content')
<div class="card content-fluid text-center">
    <div class="card-header">
        <h3 class="card-title text-color">ADMINISTRADOR: Servicio</h3>
    </div>
    <div class="card-body">
        <div class="container" style="text-align: left" >
            
                <label for="title"><strong>Nombre</strong></label>
                <input readonly class="form-control mb-2" type="text" name="title" id="title" value="{{$service->name}}">
    
                <label for="title"><strong>Cargo</strong></label>
                <label for="content" class="form-label"><strong>Descripcion</strong></label>
                <textarea readonly class="form-control mb-2" id="content" rows="3" name="content">{{$service->description}}</textarea>
                <img src="/image/uploads/service/{{$service->image}}" style="width:250px" alt="{{$service->name}}">{{$service->image}}
        </div>
    </div>
</div>
@endsection