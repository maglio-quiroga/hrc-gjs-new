@extends('web.master')
@section('content')

@include('template.homes')
@include('template.noticiasDestacadas', ['posts' => $posts])
@include('template.instagram')
@include('template.mapa')
@include('template.pag_gobierno')
@include('template.campañas')
@include('template.videos_interes')

@endsection
