@extends('web.master')
@section('content')
<div class="container" style="margin-top: 200px; margin-bottom: 50px;">
    <h2 class="text-center mb-5">Cuentas Públicas</h2>

    <div class="container text-center my-5">
        <div class="row row-cols-md-2 row-cols-sm-1 g-2">
            @foreach ($cuentas_publicas as $cuenta_publica)
                <x-cuenta-publica :cuenta-publica="$cuenta_publica"/>
            @endforeach
        </div>
    </div>
</div>
@endsection
