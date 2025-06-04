@extends('layouts.web')

@section('content')
	<div class="container h-full diplomatPost_1">
		<x-web.posted.post.show :post="$post" />
	</div>
@endsection

