@extends('web.master')

@section('content')
<div class="container" style="margin-top: 150px; margin-bottom: 50px;">

    <!-- Título Principal -->
    <div class="text-center mb-4">
        <h2 style="color: #28a745; font-weight: bold;">Reglamento Interno</h2>
    </div>

    <!-- Sección: Normas de Higiene y Seguridad -->
    <div class="mb-5">
        <h3 class="text-success">NORMAS DE HIGIENE Y SEGURIDAD</h3>
        <p style="text-align: justify;">
            La empresa, de acuerdo con la <strong>ley 16.744</strong> y el artículo 67, tiene la obligación de implementar normas estrictas de higiene y seguridad en el lugar de trabajo. 
            Todo trabajador deberá:
        </p>
        <ul>
            <li>Respetar las normas de higiene personal y del entorno.</li>
            <li>Utilizar los elementos de protección personal proporcionados por la empresa (cascos, guantes, mascarillas, etc.).</li>
            <li>Reportar incidentes, accidentes o situaciones de riesgo al supervisor directo.</li>
            <li>Participar en las capacitaciones y entrenamientos de seguridad impartidos por la empresa.</li>
        </ul>
        <p style="text-align: justify;">
            Además, cualquier incumplimiento a estas normas será sancionado conforme a lo establecido en el presente reglamento y en la legislación laboral vigente.
        </p>
    </div>

    <!-- Sección: Capítulo I -->
    <div class="mb-5">
        <h3 class="text-success">CAPÍTULO I: DISPOSICIONES GENERALES</h3>
        <p style="text-align: justify;">
            El ingreso de los nuevos trabajadores al establecimiento queda condicionado a la realización de una inducción de seguridad y prevención de riesgos. Durante esta inducción, se les informará:
        </p>
        <ul>
            <li>Sobre las políticas de la empresa en materia de salud y seguridad.</li>
            <li>Las obligaciones y derechos de los trabajadores.</li>
            <li>Los procedimientos de evacuación en caso de emergencias.</li>
            <li>Los riesgos específicos asociados a su puesto de trabajo.</li>
        </ul>
        <p style="text-align: justify;">
            Todo nuevo trabajador deberá firmar un acta de participación en la inducción, que quedará registrada en su expediente personal.
        </p>
    </div>

    <!-- Sección: Capítulo II -->
    <div class="mb-5">
        <h3 class="text-success">CAPÍTULO II: TERMINOLOGÍA Y DEFINICIONES</h3>
        <p style="text-align: justify;">
            Para efectos del presente reglamento, se entenderá por:
        </p>
        <ul>
            <li><strong>Riesgo Laboral:</strong> Posibilidad de que un trabajador sufra un daño derivado de su actividad laboral.</li>
            <li><strong>Accidente de Trabajo:</strong> Todo suceso repentino que ocurre por causa o en ocasión del trabajo y que produce una lesión física o mental al trabajador.</li>
            <li><strong>Elementos de Protección Personal (EPP):</strong> Equipos o implementos destinados a proteger al trabajador contra riesgos específicos (casco, guantes, botas, etc.).</li>
            <li><strong>Capacitación:</strong> Proceso de formación en el que se instruye al trabajador sobre normas y procedimientos de seguridad.</li>
        </ul>
    </div>

    <!-- Sección: Capítulo III -->
    <div class="mb-5">
        <h3 class="text-success">CAPÍTULO III: DE LAS CONDICIONES DE INGRESO</h3>
        <p style="text-align: justify;">
            Los nuevos trabajadores deberán cumplir con las siguientes condiciones al momento de ingresar a la empresa:
        </p>
        <ol>
            <li>Presentar la documentación requerida (contrato, certificados de salud, antecedentes personales, etc.).</li>
            <li>Realizar la inducción de seguridad, como se detalla en el Capítulo I.</li>
            <li>Realizar exámenes médicos pre-ocupacionales para verificar su estado de salud.</li>
            <li>Comprometerse por escrito a respetar las normas de seguridad y conducta establecidas.</li>
        </ol>
        <p style="text-align: justify;">
            El incumplimiento de estas condiciones puede ser causal de rechazo del ingreso del trabajador.
        </p>
    </div>

    <!-- Sección: Capítulo IV -->
    <div class="mb-5">
        <h3 class="text-success">CAPÍTULO IV: DE LA JORNADA DE TRABAJO</h3>
        <p style="text-align: justify;">
            La jornada laboral ordinaria se establece conforme a la legislación vigente y deberá ser respetada por todos los trabajadores:
        </p>
        <ul>
            <li><strong>Jornada Diurna:</strong> 08:00 a 18:00 horas (con una hora de descanso para colación).</li>
            <li><strong>Jornada Nocturna:</strong> 22:00 a 06:00 horas.</li>
            <li><strong>Horas Extraordinarias:</strong> Se pagarán de acuerdo con lo estipulado en el Código del Trabajo y sólo podrán realizarse con autorización expresa del empleador.</li>
        </ul>
        <p style="text-align: justify;">
            Los trabajadores deberán registrar su asistencia diariamente mediante el sistema implementado por la empresa.
        </p>
    </div>

    <!-- Sección: Capítulo V -->
    <div class="mb-5">
        <h3 class="text-success">CAPÍTULO V: DE LAS REMUNERACIONES Y ASIGNACIONES</h3>
        <p style="text-align: justify;">
            Las remuneraciones serán entregadas los días <strong>30 de cada mes</strong>. En caso de ser un día inhábil, el pago se realizará el día hábil anterior.
        </p>
        <p style="text-align: justify;">
            Las asignaciones incluyen:
        </p>
        <ul>
            <li>Asignación de colación.</li>
            <li>Asignación de movilización.</li>
            <li>Asignación familiar, conforme a la normativa legal vigente.</li>
        </ul>
        <p style="text-align: justify;">
            Los descuentos por atrasos, inasistencias injustificadas o sanciones se aplicarán conforme a lo establecido en este reglamento.
        </p>
    </div>

    <!-- Mensaje Final -->
    <div class="text-center mt-5">
        <h4 class="text-danger"><strong>Todo trabajador debe conocer, comprender y respetar el presente reglamento interno.</strong></h4>
    </div>

</div>
@endsection
