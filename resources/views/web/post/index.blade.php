@extends('layouts.web')
@section('content')
	<div class="container h-full diplomatPost_1">
		<x-web.posted.post.index :posts="$posts" >
			
			<div class="section_title_container text-center">
			</br></br>
			<h1>Noticias</h1>
			</br></br>
			<div class="section_subtitle"><p></p></div>
		</div>
		</x-web.posted.post.index>
	</div>
	
@endsection
