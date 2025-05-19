@extends('layouts.web')

@section('content')
	<div class="container h-full indexDiplomatPost_1">
		<x-web.posted.post.show :post="$post" />
	</div>
@endsection

