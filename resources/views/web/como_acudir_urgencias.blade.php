@extends('layouts.web')

@section('content')
<!--PAGINA
        INFORMACION DE PACIENTES 
            CCUANDO ACUDIR A URGENCIAS -->
<div class="container infoPacientes">

    <!-- Título Principal -->
    <div class="text-center mb-4">
        <h2 class="tituloTexto">¿Cuándo acudir al Servicio de Urgencia?</h2>
    </div>

    <!-- Descripción -->
    <div class="mb-4 textoRelleno">
        <p>
            Con el objetivo de hacer un buen uso de la Red Asistencial, el Hospital Regional de Copiapó hace llamado a la comunidad a acudir a la Unidad de Urgencia Hospitalaria de acuerdo con la gravedad de cada caso. De esta manera se optimizan los tiempos y se brinda una atención dependiendo del nivel de complejidad resolviendo la situación ya sea en un Servicio de Urgencia de Hospital o bien en un Centro de Atención Primaria.
        </p>
        <p>
            En cuanto a la atención de urgencia esta <strong>NO</strong> es por orden de llegada, sino que en base al sistema de categorización se atiende priorizando <strong>GRAVEDAD</strong> del estado de salud del paciente cuya complejidad presente riesgo vital o secuelas graves de no recibir una atención rápida y oportuna.
        </p>
    </div>

    <!-- Subtítulo -->
    <div class="mb-3">
        <h4 class="categUrgencia">CATEGORIZACIÓN – PRIORIZACIÓN PEDIÁTRICA</h4>
    </div>

    <!-- Lista de Categorización -->
    <div class="textoRelleno">
        <ul>
            <li><strong>C1 Paciente Grave:</strong> <span class="tituloTexto">Con riesgo vital INMINENTE</span>, pasará inmediatamente a box de reanimación.</li>
            <li><strong>C2 Paciente Grave:</strong> <span class="tituloTexto">Sin riesgo vital inminente</span>, se requiere evaluación médica urgente. De ser necesario pasará a un box de atención en espera de evaluación médica.</li>
            <li><strong>C3 Complejidad Media:</strong> <span class="tituloTexto">Puede progresar a estado grave</span>, esperará llamado de box a categorización y regresará a sala de espera general hasta que lo llame el médico.</li>
            <li><strong>C4 Condición no urgente:</strong> <span class="tituloTexto">De complejidad baja</span>, permanecerá en sala de espera general. Puede consultar en su CESFAM, SAPU, SUR o llamar a Salud Responde. Si decide esperar será atendido después de los C1, C2 y C3.</li>
            <li><strong>C5 Consulta General:</strong> <span class="tituloTexto">Sin complejidad</span>, puede consultar en su CESFAM, SAPU, SUR o llamar a Salud Responde. Si decide esperar será atendido después de los C1, C2, C3 y C4.</li>
        </ul>
    </div>
</div>
@endsection
