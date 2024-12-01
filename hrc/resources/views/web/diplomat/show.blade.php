@extends('web.master2')
@section('content')

	<div class="container" style="margin-top: 150px">
		<div class="course">
			<div class="container">
				<div class="row">
					<x-web.diplomaed.diplomat.show :program="$program" />
		
				</div>
			</div>
		</div>
	</div>
	

@endsection

