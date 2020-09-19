<?php
	// header information
	$title = 'Desarrollo infantil integral | ';
	$tab_active = 3;

	// career information
	$career_image = 'img/img-carreras/desarrollo-infantil-integral.jpg';
	$career_modality = 'Dual - Campus Norte (Matriz)';
	$career_duration = '2 años y medio';
	$career_time = 'Intensiva - Fase teórica en Instituto: Viernes y sábados';
	$career_price = 'Gratuito';
	$career_title = 'Tecnólogo Superior en Desarrollo Infantil Integral';
	$career_campus = 'Norte (Campus Norte (Matriz): Av. 10 de Agosto N26-27 y Luis Mosquera)';
	// Requisito de ingreso tab information
	$requirements = array(
		'Título de Bachiller',
		'Haber aprobado el examen de ingreso',
		'Asignación de cupo por parte de SENESCYT',
		'Copia de cédula y certificado de votación',
		'Carta de aceptación en un CIBV/CDI'
	);
	// Perfil de egreso tab information
	$career_graduation_profile = array(
		'El Tecnólogo en Desarrollo Infantil Integral estará en la capacidad de diseñar, ejecutar y evaluar procesos relacionados con la atención y educación a la primera infancia, a partir del dominio de conocimientos, metodologías, procedimientos y técnicas para generar estrategias de aprendizaje, cuidado, nutrición e higiene, protección de los derechos infantiles y vinculación corresponsable de la familia y la comunidad, a fin de aportar al desarrollo integral de los niños y niñas menores de 5 años.',
		'Diseño, ejecución y evaluación de procesos de atención y educación a la primera infancia que integren conocimientos, metodologías, procedimientos y técnicas para generar estrategias de aprendizaje, cuidado, nutrición e higiene, protección de los derechos infantiles y vinculación corresponsable de la familia y la comunidad...',
	);
	// Campo Ocupacional tab information
	$career_occupational_list = [];
	$career_occupational_field = array(
		'El Tecnólogo en Desarrollo Infantil Integral puede desempeñarse en centros infantiles privados o públicos, ONG, fundaciones y diferentes espacios cuya labor se encuentre enfocada a la atención y educación a niños/as de 0 a 5 años de edad. Para ingresar a la carrera se requiere vinculación con un CIBV/CDI/ CNH autorizado por el Ministerio de Inclusión Económica y Social- MIES para el desarrollo de la fase práctica de formación.',
	);
	// Malla Curricular tab table information
	$career_table_description_initial = 'La carrera tiene una duración de 4500 horas distribuidas en 5 periodos académicos, que combina los campos de formación teórica, adaptación e innovación tecnológica, comunicación, saberes y cultura. <br /><br /> Al ser una carrera de modalidad dual, la fase teórica (1500 horas) se desarrollará los viernes y sábados en el Instituto y la fase práctica (3000 horas) en un CIBV/CDI/CNH autorizado por el MIES.';
	$career_table_description_final = 'Para obtener el título de Tecnólogo/a Superior en Desarrollo Infantil Integral, los/las estudiantes deberán cumplir 3000 horas de formación práctica en un CIBV/CDI/CNH, 160 horas vinculación con la sociedad, además de 240 horas destinadas al trabajo de titulación en el quinto periodo de la carrera.';
	$curriculum = array(
		array(
			'Corrientes Pedagógicas',
			'Prácticas de Crianza',
			'Experiencias y Entornos Favorables para el Desarrollo Biopsicosocial del Niño',
			'Planificación',
			'Gestión de Servicios de Calidad',
		),
		array(
			'Desarrollo Infantil I',
			'Desarrollo Infantil II',
			'Legislación',
			'Seguimiento y Herramientas de Evaluación del Aprendizaje del Niño',
			'Narrativa Académica',
		),
		array(
			'Estimulación Temprana I',
			'Legislación',
			'Políticas y Modelos para la Atención de Salud Materno - Infantil',
			'Diseño y Elaboración de Recursos y Ambientes de Aprendizaje',
			'Riesgo y Emergencia',
		),
		array(
			'Comunicación y Lenguaje',
			'Políticas y Modelos para la Atención Infantil',
			'Estimulación Temprana III',
			'Literatura Infantil y su Didáctica',
			'Proyecto de Titulación',
		),
		array(
			'Tics I',
			'Estimulación Temprana II',
			'Salud, Nutrición e Higiene Infantil',
			'Expresión Artística',
			'Lengua de la Nacionalidad IV',
		),
		array(
			'Expresión Corporal',
			'Atención y Protección a Niños en Contextos Familiares e Institucionales',
			'Tics II',
			'Lengua de la Nacionalidad III',
			'',
		),
		array(
			'',
			'Comunicación Asertiva con Familia y Comunidad',
			'Cuidando al Cuidador',
			'',
			'',
		),
		array(
			'',
			'Lengua de la Nacionalidad I',
			'Lengua de la Nacionalidad II',
			'',
			'',
		),
	);

	include 'templates/encabezado.php';
	include 'templates/careerInformation.php';
	include 'templates/pie_pagina.php';
