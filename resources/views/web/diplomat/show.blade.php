@extends('web.master')
@section('content')

	<div class="container quienesSomos">
		<div class="course">
			<div class="container">
				<div class="row">
					<x-web.diplomaed.diplomat.show :program="$program" />
		
				</div>
			</div>
		</div>
	</div>
	

@endsection