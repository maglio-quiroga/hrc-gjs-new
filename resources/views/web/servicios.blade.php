@extends('web.master')
@section('content')
<div class="container" style="margin-top: 150px">
    <div class="super_container d-flex flex-wrap justify-content-center">
        <div class="about">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="container text-center">
                        </br></br>
                            <h2 class="section_title">Servicios y Unidades</h2>
                            </br></br>
                            <div class="section_subtitle"><p></p></div>
                        </div>
                    </div>
                </div>

                <div class="service-container">
                    @foreach ($services as $service)
                        <div class="m-3"><x-service-card :service="$service" /></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
