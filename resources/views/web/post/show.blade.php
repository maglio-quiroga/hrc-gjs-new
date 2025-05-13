@extends('layouts.web')

@section('content')
	<div class="container h-full dip_1a">
		<x-web.posted.post.show :post="$post" />
	</div>
@endsection

