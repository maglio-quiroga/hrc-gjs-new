@extends('layouts.web')
@section('content')
	<div class="container h-full diplomatPost_1">
		<x-web.posted.post.index :posts="$posts" >
		<div class="container section_title text-center"><h2>Noticias</h2></div>
		</x-web.posted.post.index>
	</div>
	
@endsection
