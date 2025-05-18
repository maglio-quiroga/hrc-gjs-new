@extends('layouts.web')

@section('content')
<!--PAGINA
        INFORMACION DE PACIENTES 
            DONACION DE SANGRE -->
<div class="container infoPacientes">

    <!-- Título Principal -->
    <div class="text-center mb-4">
        <h2 class="titulo_texto">Donar Sangre es Donar Vida</h2>
    </div>

    <!-- Contenido de la Sección -->
    <div class="mb-4 textoRelleno">
        <p>
            La donación de sangre es un acto voluntario, altruista y simple. Se le extraerán <strong>450 ml</strong> de sangre, lo que generalmente no produce molestias. El tiempo aproximado del proceso de donación es de <strong>30 minutos</strong>, si no hay donantes en espera.
        </p>
        <p>
            Puede reservar hora al Fono <strong>52 2 465649</strong> o al WhatsApp <strong>+569 5467 0466</strong>.
        </p>
    </div>

    <!-- Tabla: Podrías Ser Donante -->
    <div class="row mb-5">
        <div class="col">
            <h4 class="text-center titulo_texto">Podrías ser donante si:</h4>
            <table class="table table-bordered table-hover text-center tablaDetalles">
                <thead class="table-success">
                    <tr>
                        <th>Condición</th>
                        <th>Detalles</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tienes documento de identificación</td>
                        <td>Cédula, licencia de conducir o pasaporte</td>
                    </tr>
                    <tr>
                        <td>Edad</td>
                        <td>Entre <strong>18 y 65 años</strong> (con autorización hasta los 70 años)</td>
                    </tr>
                    <tr>
                        <td>Has dormido</td>
                        <td>Al menos <strong>5 horas</strong></td>
                    </tr>
                    <tr>
                        <td>Peso</td>
                        <td>Más de <strong>50 kg</strong></td>
                    </tr>
                    <tr>
                        <td>Alimentación</td>
                        <td>Has comido en las últimas <strong>5 horas</strong></td>
                    </tr>
                    <tr>
                        <td>Tiempo entre donaciones</td>
                        <td>3 meses (hombres) / 4 meses (mujeres)</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Tabla: No Podrías Ser Donante -->
    <div class="row">
        <div class="col">
            <h4 class="text-center" style="color: red; font-weight: bold;">No podrías ser donante si:</h4>
            <table class="table table-bordered table-hover text-center" style="border: 2px solid red;">
                <thead class="table-danger">
                    <tr>
                        <th>Condición</th>
                        <th>Restricción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Relación sexual reciente</td>
                        <td>Con una nueva persona en los últimos <strong>6 meses</strong></td>
                    </tr>
                    <tr>
                        <td>Consumo de alcohol</td>
                        <td>En las últimas <strong>12 horas</strong></td>
                    </tr>
                    <tr>
                        <td>Tatuajes o piercings</td>
                        <td>Realizados en los últimos <strong>6 meses</strong></td>
                    </tr>
                    <tr>
                        <td>Uso de drogas</td>
                        <td>Has consumido drogas inyectables</td>
                    </tr>
                    <tr>
                        <td>Enfermedades recientes</td>
                        <td>Diarrea, fiebre, vómitos en los últimos <strong>14 días</strong></td>
                    </tr>
                    <tr>
                        <td>Embarazo o parto reciente</td>
                        <td>En los últimos <strong>6 meses</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
