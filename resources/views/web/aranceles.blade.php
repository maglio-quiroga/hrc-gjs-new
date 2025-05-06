@extends('web.master')

@section('content')
<!--PAGINA
        INFORMACION DE PACIENTES 
            ARANCELES -->
<div class="container" style="margin-top: 150px; margin-bottom: 50px;">

    <!-- Título Principal -->
    <div class="text-center mb-4">
        <h2 style="color: #28a745; font-weight: bold;">Aranceles 2024</h2>
        <p class="text-muted">Información de costos, procedimientos y servicios hospitalarios</p>
    </div>

    <!-- Tabla 1: Medicamentos, Insumos y Prótesis -->
    <section class="mb-5">
        <h4 class="text-success">Medicamentos, Insumos y Prótesis</h4>
        <table class="table table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th>Producto</th>
                    <th>Arancel</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Valor Unitario Bruto <= $5.000</td>
                    <td>Valor Unidad Bruto x 3</td>
                </tr>
                <tr>
                    <td>Valor Unitario Bruto entre $5.001 y $11.000</td>
                    <td>Valor Unidad Bruto x 2,5</td>
                </tr>
                <tr>
                    <td>Valor Unitario Bruto entre $11.001 y $24.000</td>
                    <td>Valor Unidad Bruto x 2</td>
                </tr>
                <tr>
                    <td>Valor Unitario Bruto > $24.000</td>
                    <td>Valor Unidad Bruto x 1,5</td>
                </tr>
            </tbody>
        </table>
    </section>

    <!-- Tabla 2: Insumos y Procedimientos -->
    <section class="mb-5">
        <h4 class="text-success">Insumos y Medicamentos utilizados en Procedimientos</h4>
        <table class="table table-striped table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th>Procedimiento</th>
                    <th>Isapre, Particular y MLE</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Insumos en la Adm. de Medicamentos por Vía Intravenosa</td><td>$2.700</td></tr>
                <tr><td>Insumos en la Adm. de Medicamentos por Vía Intramuscular</td><td>$400</td></tr>
                <tr><td>Insumos Instalación Fleboclisis</td><td>$16.100</td></tr>
                <tr><td>Insumos Curaciones Simples</td><td>$3.200</td></tr>
                <tr><td>Insumos Curaciones Complejas</td><td>$9.600</td></tr>
                <tr><td>Insumos Procedimiento Suturas</td><td>$4.000</td></tr>
                <tr><td>Medio de Contraste Pacientes Ambulatorios</td><td>$48.000</td></tr>
                <tr><td>Medio de Contraste Pacientes Hospitalizados y Urgencia</td><td>$46.100</td></tr>
            </tbody>
        </table>
    </section>

    <!-- Tabla 3: Atención Abierta -->
    <section class="mb-5">
        <h4 class="text-success">Grupo 01: Atención Abierta</h4>
        <table class="table table-striped table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th>Código</th>
                    <th>Prestación</th>
                    <th>Arancel</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>01-01-001</td><td>Consulta Médica u Odontológica de Urgencia</td><td>$44.600</td></tr>
                <tr><td>01-01-002</td><td>Consulta Médica Medicina General</td><td>$36.800</td></tr>
                <tr><td>01-01-003</td><td>Consulta Médica Especialidades u Odontología</td><td>$46.700</td></tr>
                <tr><td>01-01-007</td><td>Atención Médica del Recién Nacido</td><td>$366.000</td></tr>
                <tr><td>01-01-008</td><td>Visita por Médico Tratante Hospitalizado</td><td>$57.300</td></tr>
                <tr><td>01-01-011</td><td>Atención Médica Diaria Paciente Hospitalizado</td><td>$73.100</td></tr>
                <tr><td>90-01-013</td><td>Curación Simple</td><td>$8.100</td></tr>
                <tr><td>90-01-016</td><td>Tratamiento Inyectable</td><td>$8.100</td></tr>
            </tbody>
        </table>
    </section>

    <!-- Tabla 4: Atención Cerrada -->
    <section class="mb-5">
        <h4 class="text-success">Grupo 02: Atención Cerrada</h4>
        <table class="table table-striped table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th>Código</th>
                    <th>Prestación</th>
                    <th>Arancel</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>02-01-102</td><td>Día Cama Sala Común</td><td>$167.300</td></tr>
                <tr><td>02-01-201</td><td>Día Cama Hospitalizado UCI Adulto</td><td>$804.900</td></tr>
                <tr><td>02-01-203</td><td>Día Cama Hospitalizado UCI Neonatal</td><td>$655.100</td></tr>
                <tr><td>02-01-404</td><td>Día Cama Neonatal Básica</td><td>$329.300</td></tr>
                <tr><td>02-01-407</td><td>Día Cama Observación Sala Común</td><td>$56.000</td></tr>
            </tbody>
        </table>
    </section>

    <!-- Tabla 5: Traslados -->
    <section class="mb-5">
        <h4 class="text-success">Grupo 24: Traslados</h4>
        <table class="table table-striped table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th>Tipo de Traslado</th>
                    <th>Arancel</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Ambulancia del Hospital con Paramédico</td><td>0,06 UF por Km recorrido + UF 4</td></tr>
                <tr><td>Ambulancia del Hospital con Enfermera</td><td>0,06 UF por Km recorrido + UF 6</td></tr>
                <tr><td>Locales dentro de Copiapó</td><td>1 UF</td></tr>
            </tbody>
        </table>
    </section>

    <!-- Tabla 6: Odontología -->
    <section class="mb-5">
        <h4 class="text-success">Grupo 27: Atención Odontológica</h4>
        <table class="table table-striped table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th>Grupo</th>
                    <th>Prestación</th>
                    <th>Arancel</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>2701</td><td>Consulta y Atención Odontológica</td><td>Según Código</td></tr>
                <tr><td>2703</td><td>Odontología General</td><td>Arancel Fonasa MAI x 6</td></tr>
            </tbody>
        </table>
    </section>

</div>
@endsection
