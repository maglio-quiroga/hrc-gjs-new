@extends('web.master')
@section('content')
<div class="container" style="margin-top: 150px">
    <div class="super_container">
        <div class="about">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="container text-center">
                            <br><br>
                            <h2 class="section_title">Equipo Directivo</h2>
                            <br><br>
                            <div class="section_subtitle"><p></p></div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                @foreach($members as $member)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 mb-4">
                        <x-member-card :member="$member" />
                    </div>
                @endforeach
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

