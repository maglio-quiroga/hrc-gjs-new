@extends('dashboard.master')
@section('content')
<div class="card text-center">
    <div class="card-header">
        <h3 class="card-title" style="color: #244c5a">ADMINISTRADOR: Categoriía</h3>
    </div>
    <div class="card-body">
        <div class="container" style="text-align: left" >
            
                <label for="title"><strong>Titulo</strong></label>
                <input readonly class="form-control mb-2" type="text" name="category" id="category" value="{{$category->title}}">
    
                
            
        </div>
    </div>
</div>
@endsection
