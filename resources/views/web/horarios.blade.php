@extends('layouts.web')

@section('content')
<!--PAGINA
        INFORMACION DE PACIENTES 
            HORARIOS -->
<div class="container infoPacientes">

    <!-- Título Principal -->
    <div class="text-center mb-4">
        <h2 class="titulo_texto">
            ENTREGA DE INFORMACIÓN A FAMILIARES DE USUARIOS(AS) HOSPITALIZADOS(AS)
        </h2>
        <p class="familiarUsuario">(Sólo un familiar por paciente)</p>
    </div>

    <!-- UPC -->
    <div class="mb-5">
        <h4 class="bg-success text-white p-2">UPC (1° PISO)</h4>
        <table class="table table-bordered text-center">
            <tr>
                <th>Informe Médicos</th>
                <th>Horarios</th>
            </tr>
            <tr>
                <td>PRESENCIAL</td>
                <td>Lunes a Domingo <br> 14:30 a 15:00 HRS.</td>
            </tr>
        </table>
    </div>

    <!-- NEONATOLOGÍA -->
    <div class="mb-5">
        <h4 class="bg-success text-white p-2">NEONATOLOGÍA (1° PISO)</h4>
        <table class="table table-bordered text-center">
            <tr>
                <th>Informe Médicos</th>
                <th>Horarios</th>
            </tr>
            <tr>
                <td>PRESENCIAL</td>
                <td>Lunes a Viernes (Padres o Cuidador) <br> Desde 08:30 HRS. <br> Fin de semana: Médico de Turno.</td>
            </tr>
        </table>
    </div>

    <!-- TRAUMATOLOGÍA -->
    <div class="mb-5">
        <h4 class="bg-success text-white p-2">TRAUMATOLOGÍA (3° PISO)</h4>
        <table class="table table-bordered text-center">
            <tr>
                <th>Informe Médicos</th>
                <th>Horarios</th>
            </tr>
            <tr>
                <td>PRESENCIAL</td>
                <td>Martes y Jueves <br> Desde 10:30 HRS.</td>
            </tr>
        </table>
    </div>

    <!-- MEDICINA -->
    <div class="mb-5">
        <h4 class="bg-success text-white p-2">MEDICINA (5° PISO)</h4>
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>Médico</th>
                    <th>Día</th>
                    <th>Horario</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>DRA. ZARATE INGRID</td>
                    <td>Martes y Jueves</td>
                    <td>Desde las 11:30 HRS.</td>
                </tr>
                <tr>
                    <td>DR. PÁEZ CRISTIAN</td>
                    <td>Martes y Miércoles</td>
                    <td>11:30 HRS.</td>
                </tr>
                <tr>
                    <td>DRA. YÁÑEZ VANESSA</td>
                    <td>Lunes y Viernes</td>
                    <td>11:00 HRS.</td>
                </tr>
                <tr>
                    <td>DR. OVIEDO JUAN</td>
                    <td>Martes y Jueves</td>
                    <td>12:30 HRS.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- NEUROCIRUGÍA -->
    <div class="mb-5">
        <h4 class="bg-success text-white p-2">NEUROCIRUGÍA (5° PISO)</h4>
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>Médico</th>
                    <th>Horario</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>DR. RODOLFO MATA</td>
                    <td>Martes y Jueves, 10:30 a 11:00 HRS.</td>
                </tr>
                <tr>
                    <td>DRA. DAVIS</td>
                    <td>Martes y Jueves, 10:00 a 10:30 HRS.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- CIRUGÍA -->
    <div class="mb-5">
        <h4 class="bg-success text-white p-2">CIRUGÍA (6° PISO)</h4>
        <table class="table table-bordered text-center">
            <tr>
                <th>Informe Médicos</th>
                <th>Horarios</th>
            </tr>
            <tr>
                <td>PRESENCIAL</td>
                <td>Martes y Jueves <br> Desde 09:00 HRS.</td>
            </tr>
        </table>
    </div>

    <!-- GINECOLOGÍA -->
    <div class="mb-5">
        <h4 class="bg-success text-white p-2">GINECOLOGÍA (7° PISO)</h4>
        <table class="table table-bordered text-center">
            <tr>
                <th>Informe Médicos</th>
                <th>Horarios</th>
            </tr>
            <tr>
                <td>PRESENCIAL</td>
                <td>Lunes a Viernes <br> 08:30 a 09:00 HRS.</td>
            </tr>
        </table>
    </div>

</div>
@endsection
