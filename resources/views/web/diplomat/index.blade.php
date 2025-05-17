@extends('layouts.web')
@section('content')
	<div class="container h-full dip_1a">
		<x-web.diplomaed.diplomat.index :programs="$programs" >
			<div class="section_title_container text-center">
				</br></br>
				<h1>Diplomados</h1>
				</br></br>
				<div class="section_subtitle"><p></p></div>
			</div>
		</x-web.diplomaed.diplomat.index>
	</div>
	
@endsection