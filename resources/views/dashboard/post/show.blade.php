@extends('dashboard.master')
@section('content')
<div class="card content-fluid">
    <div class="card-header">
        <h3 class="card-title" style="color: #244c5a">ADMINISTRADOR: Noticia</h3>
    </div>
    <div class="card-body">
        <div class="container" style="text-align: left" >
            
                <label for="title"><strong>Titulo</strong></label>
                <input readonly class="form-control mb-2" type="text" name="title" id="title" value="{{$post->title}}">
    
                <label for="content" class="form-label"><strong>Contenido</strong></label>
                <textarea readonly class="form-control mb-2" id="content" rows="3" name="content">{{$post->content}}</textarea>
                <img src="/image/uploads/posts/{{$post->image}}" style="width:250px" alt="{{$post->title}}">{{$post->image}}

            
        </div>
    </div>
</div>
@endsection