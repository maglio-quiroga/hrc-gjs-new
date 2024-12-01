@extends('web.master2')
@section('content')
	<div class="container h-full" style="margin-top:130px">
		<x-web.posted.post.show :post="$post" />
	</div>
@endsection