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
                @foreach([
                    [
                        'name' => 'Sergio Ripoll Sandoval',
                        'title' => 'Director',
                        'image' => 'images/personal/director.webp',
                        'description' => "
                            El 6 de noviembre de 2024, Sergio Ripoll Sandoval fue nombrado Director (S) del principal recinto asistencial de Atacama. La designación se realizó en una sesión del Consejo Técnico Ampliado del establecimiento de salud, con la presencia de autoridades, funcionarios y representantes de la comunidad.
                            Sergio Ripoll es Contador Auditor de la Universidad Tecnológica Metropolitana y Magíster en Gestión Estratégica en Salud. Posee cerca de 30 años de experiencia en el sector salud, tanto público como privado. Ha sido Subgerente de Operaciones de la Clínica Santa María de Santiago, Subdirector Administrativo por Alta Dirección Pública del Hospital Base de Valdivia, y Jefe de Administración y Finanzas de la Clínica Alemana de Temuco.
                            En mayo de 2023 se incorporó al equipo directivo del Hospital Regional de Copiapó, liderando la Subdirección Administrativa. Posee diplomados en Gestión Estratégica, Gestión de Instituciones de Salud, Alta Dirección y Gestión Clínica para hospitales de mayor complejidad, entre otros.
                            Sergio Ripoll Sandoval es un profesional con un marcado perfil logístico y amplia experiencia en el sector clínico-administrativo, orientado al desarrollo de proyectos y trabajo en equipo. Se destaca por ser una jefatura cercana, saludando cordialmente a cada funcionario por los diversos pasillos del hospital. Es abierto al diálogo y de trato amable, generando espacios de trabajo y crecimiento en los equipos que lidera.
                            Por su experiencia, en octubre de este año, ganó el concurso público por el Sistema de Alta Dirección Pública para el cargo de Subdirector Administrativo del HRC. Actualmente, y por disposiciones administrativas, asume la Dirección en calidad de subrogante del principal recinto asistencial de Atacama.
                            "    
                    ],
                    [
                        'name' => 'Danary Vera Moreta',
                        'title' => 'Subdirección Administrativa', 
                        'image' => 'images/personal/subdirector_administrativo.webp',
                        'description' => "
                        La Subdirección Administrativa entre las funciones que desempeña destaca la gestión administrativa del establecimiento en materias relativas a asuntos contables, financieros de recursos físicos, abastecimiento y de servicios generales; Coordinar estudio del proyecto de presupuesto del hospital para el subtítulo 22; elaborar programas anuales de compra; presentar proyecto presupuestario para el período siguiente; preparar bases técnicas y administrativas para procesos licitatorios de compras de bienes o servicios de consumo necesarios; elaborar participativamente la Planificación estratégica y monitorear el desarrollo del plan de implementación; dar cumplimiento a los indicadores de autogestión que les sean aplicables, las características obligatorias y no obligatorias para la acreditación, además de aquellas relativas a compromisos de gestión y metas sanitarias entre otras (Art. 264 Manual Organizacional HRC).
                        "
                    ],
                    [
                        'name' => 'Ricardo Moss Cardona',
                        'title' => 'Subdirección Gestión Asistencial Abierta',
                        'image' => 'images/personal/subdirector_gestion_asistencial_abierta.webp',
                        'description' => "
                        La subdirección de CDT entre sus funciones que desepeña destaca el Asesorar y colaborar con el (la) Director(a) en la formulación y cumplimiento de los programas y acciones de salud, y en la supervisión de todas las actividades de orden técnico que deba realizar el establecimiento, definir criterios técnicos y administrativos de gestión de la demanda, en conjunto con Subdirección Médica Atención Ambulatoria, Subdirección Apoyo Clínico y los centros de responsabilidad de atención cerrada y ambulatoria. Satisfacción de la demanda de atención, definir criterios de asignación del recurso médico, considerando los requerimientos de la programación en Red, en conjunto con Subdirector Médico Atención Ambulatoria y jefaturas de Centros de Responsabilidad, definir en base a indicadores de calidad, los criterios de planificación y de gestión de mejora continua para cada CR, en conjunto con la Subdirección Gestión del Cuidado, realizar la coordinación asistencial con establecimientos de la red de atención cerrada, en conjunto con los centros de responsabilidad, de costos y asesorías que tengan competencia, supervisar y controlar actividades relacionadascon Gestión de camas y ley de urgencia, controlar y evaluar el cumplimiento de los compromisos de gestión de los centros de responsabilidad y costos bajo su dependencia, velar por el cumplimiento de guías y protocolos de calidad y seguridad del paciente y de vigilancia de IAAS. Controlar y evaluar las metas de calidad de los Centros de Responsabilidad y Costos baja su dependencia, coordinar la asignación de camas para la Unidad de Emergencia con los CR Medicina Cirugía y Gestión del Cuidado, actualizar cartera de oferta de servicios, definidos por cada centro de responsabilidad, en conjunto con otros servicios clínicos y facilitar su difusión, coordinar el proceso de programación clínica en red, en conjunto con los CR y el Gestor de Red, velar por mantener un equilibrio entre oferta y demanda, adoptando los mecanismos de asignación de recursos para superar las brechas de atención, hacer la coordinación con la Subdirección Gestión del Cuidado para la atención cerrada, definir criterios de planificación sobre el uso de los recursos asistenciales (camas, pabellones, equipos de alto costo), efectuar la coordinación asistencial con establecimientos de la macro red supraregional, en conjunto con los servicios clínicos, equipos clínicos y unidades asesorías que tengan competencia, supervisar cumplimiento de actividades vinculadas con GES entre otras funciones que le encomienden la Dirección.
                        "
                    ],
                    [
                        'name' => 'Dixia Videla Ayala',
                        'title' => 'Subdirección de Matronería',
                        'image' => 'images/personal/subdirector_matroneria.webp',
                        'description' => "
                        La subdirección de Matronería, dentro de sus funciones, se encuentra Implementar el Modelo de administración del cuidado de Matronería, dirigir los procesos de selección, contratación, capacitación continua, desarrollo de competencias, evaluación del desempeño del personal de las áreas de obstetricia y ginecología, neonatología, infectología, unacess-ITS e incongruencia de género, establecer estándares e indicadores comparables en todas las unidades de Matronería del hospital, liderar la implementación del modelo de calidad y seguridad de la atención, formular el plan estratégico para la Matronería, diseñar y mantener actualizada la cartera de servicios de la “Administración del cuidado de Matronería”, analizar los costos asociados a las actividades asistenciales en el ámbito de la Matronería y velar por la integración docente asistencial e incentivar la investigación en el ámbito de la Matronería.
                        "
                    ],
                    [
                        'name' => 'Carmen Paz Rosas Guajardo',
                        'title' => 'Subdirección de Gestión de Calidad y Análisis Clínico',
                        'image' => 'images/personal/subdirector_calidad.webp',
                        'description' => "
                        Entre las funciones que desempeña esta subdirección está monitorear el desarrollo de los Compromisos de Gestión y Metas Sanitarias; colaborar con servicios, unidades y secciones que le soliciten su apoyo referente a gestión clínica o administrativa, estándares mínimos de calidad para la acreditación; mantener actualizada la cartera de servicios o prestaciones en conjunto con Subdirección Médica; colaborar en la planificación estratégica y monitorear su cumplimiento, referente de Autogestión ante el MINSAL, entre otros (Art. 367 Manual Organizacional HRC).
                        "
                    ],
                    [
                        'name' => 'Eva Wilson Lagos',
                        'title' => 'Subdirección de Gestión del Cuidado',
                        'image' => 'images/personal/subdirector_gestion_cuidado.webp',
                        'description' => "
                        El Modelo de Gestión de Enfermería debe ser transversal a todos aquellos servicios clínicos  en que se realice gestión del cuidado de enfermería, permitiendo a ese nivel la movilización de los recursos, en función de los requerimientos de los usuarios. Contará con atribuciones para organizar, supervisar, evaluar y promover el mejoramiento de la calidad de los cuidados de enfermería, a fin de otorgar una atención segura, oportuna, continua con pertenencia cultural y en concordancia con las políticas y normas establecidas por el Ministerio de Salud. (Art. 252 y253 Manual Organizacional HRC).
                        "
                    ],
                    [
                        'name' => 'Carolina Sepulveda Ávila',
                        'title' => 'Subdirección de Gestión y Desarrollo de Personas',
                        'image' => 'images/personal/subdirector_gestion_desarrollo_personas.webp',
                        'description' => "
                        La subdirección de Gestión y Desarrollo de Personas, entre las funciones que desempeña, se encuentra el desarrollar e implementar sistemas de desarrollo del recurso humano, que incluya los procesos de reclutamiento, selección, inducción, orientación, evaluación de desempeño, formación y desarrollo de los recursos humanos, de acuerdo a la normativa vigente, velar por el cumplimiento de la normativa vigente en relación a la administración del recurso humano, velar por el cumplimiento de guías y protocolos de calidad y seguridad del paciente relacionados con RRHH, mantener sistemas de información para la gestión de recursos humanos compatibles con los de la red asistencial, fomentar y realizar la gestión en base a criterios de calidad en las áreas bajo su dependencia, coordinar y asesorar a los responsables de los CR y centros de costos, en los procedimientos que deben seguir para cumplir las normas y disposiciones establecidas en lo referente a la administración del recurso humano, mejorar y potenciar el desarrollo del recurso humano del establecimiento, a fin de incrementar sus competencias y la calidad de los servicios prestados.
                        "
                    ],
                    [
                        'name' => 'Blas Gómez Bordones',
                        'title' => 'Subdirección de Operaciones',
                        'image' => 'images/personal/subdirector_operaciones.webp',
                        'description' => "
                        La Subdirección de Operaciones tiene la responsabilidad de proporcionar soporte y apoyo en los procesos no clínicos para asegurar la continuidad operativa y el correcto funcionamiento del Hospital. Lo anterior en áreas específicas como Infraestructura, Equipos Médicos, Climatización, Eléctrica, Mecánica, Automatización, Gestión Ambiental y Soporte Operativo como Aseo, Lavandería y Movilización, articulando estas áreas con procesos de Control Logístico e Inversión para una mejora continua entregando un servicio oportuno, seguro y de calidad.
                        "
                    ],
                    [
                        'name' => 'Consuelo Hinojosa Zárraga',
                        'title' => 'Subdirección Gestión Asistencial Cerrada',
                        'image' => 'images/personal/subdirector_gestion_asistencial_cerrada.webp',
                        'description' => "
                        A la Subdirección Médica le corresponderá participar directamente en el diseño de modelo de gestión asistencial del Establecimiento, así como en la administración, operación coordinación y control en todo su ámbito clínico y asistencial. ( Art. 67 Manual Organizacional HRC).
                        "
                    ]
                ] as $member)

                    <div class="col-lg-3 col-md-6 col-sm-12" style="margin-bottom: 20px">
                        <div class="team_item">
                            <div class="team_image"><img src={{$member['image']}} alt=""></div>
                            <div class="team_body">
                                <div class="team_title"><a style="color:#244c5a" onmouseover="this.style.color='#14bdee'" onmouseout="this.style.color='#244c5a'" href="">{{$member['name']}}</a></div>
                                <div class="team_subtitle">{{$member['title']}}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

