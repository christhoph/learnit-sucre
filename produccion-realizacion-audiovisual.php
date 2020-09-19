<?php
	// header information
	$title = 'Producción audiovisual | ';
	$tab_active = 3;

	// career information
	$career_image = 'img/img-carreras/produccion-audiovisual.jpg';
	$career_modality = 'Presencial - Campus Norte (Matriz)';
	$career_duration = '2 años y medio';
	$career_time = 'Vespertina y nocturna';
	$career_price = 'Gratuito';
	$career_title = 'Productor y Realizador Audiovisual con nivel equivalente a Tecnólogo Superior';
	$career_campus = 'Norte (Campus Norte (Matriz): Av. 10 de Agosto N26-27 y Luis Mosquera)';
	// Requisito de ingreso tab information
	$requirements = array(
		'Título de Bachiller',
		'Haber aprobado el examen de ingreso',
		'Asignación de cupo por parte de SENESCYT',
		'Copia de cédula y certificado de votación'
	);
	// Perfil de egreso tab information
	$career_graduation_profile = array(
		'El Tecnólogo en Producción y Realización Audiovisual estará en la capacidad de planificar y ejecutar procesos de pre-producción, producción y post-producción que le permiten crear productos audiovisuales de ficción, argumentales, documentales y educativos, desde la concepción de la idea, plan de rodaje, puesta en escena, hasta la edición, sonido y montaje, con un enfoque de derechos que promueve el diálogo intercultural, el respeto a la diversidad y la calidad en la producción de contenidos.',
		'PRE-PRODUCCIÓN: concepción de la idea, planificación, organización, administración, PRODUCCIÓN: ejecución del proyecto, rodaje, puesta en escena, POST-PRODUCCIÓN: edición, sonido y montaje...',
	);
	// Campo Ocupacional tab information
	$career_occupational_list = [];
	$career_occupational_field = array(
		'El Tecnólogo en Producción y Realización Audiovisual podrá desempeñarse en canales de televisión, departamentos de comunicación y audiovisuales de organismos públicos y privados, realización de cine, agencias de publicidad, productoras de eventos, centros de post-producción audiovisual, sellos discográficos, emprendimientos personales, capacitación y educación continua, entre otros.',
	);
	// Malla Curricular tab table information
	$career_table_description_initial = 'La carrera tiene una duración de 4500 horas distribuidas en 5 periodos académicos, que combina los campos de formación teórica, adaptación e innovación tecnológica, comunicación, saberes y cultura.';
	$career_table_description_final = 'Para obtener el título equivalente a Tecnólogo Superior en Producción y Realización Audiovisual, los estudiantes deberán cumplir 160 horas de vinculación con la sociedad y 240 horas de prácticas pre-profesionales durante los periodos II, III y IV, así como 240 horas destinadas al trabajo de titulación en el V periodo de la carrera.';
	$curriculum = array(
		array(
			'Fotografía Básica',
			'Fotografía Argumental',
			'Fotografía Documental',
			'Fotografía Digital',
			'Fotografía Publicitaria',
		),
		array(
			'Lenguaje Audiovisual',
			'Manejo Conceptual',
			'Edición de Video',
			'Gerencia de Producción Audiovisual',
			'Gestión Empresarial para Medios Audiovisuales',
		),
		array(
			'Escenografía',
			'Sonido',
			'Edición de Audio',
			'Post-Producción Inicial',
			'Post-Producción Avanzada',
		),
		array(
			'Comunicación',
			'Efectos Especiales',
			'Multimedia',
			'Nuevos Medios Digitales',
			'Realidad Virtual',
		),
		array(
			'Metodología de la Investigación',
			'Guiones',
			'Sociología del Arte',
			'Semiótica Audiovisual',
			'Psicología de la Comunicación y el Consumidor',
		),
		array(
			'Historia del Arte',
			'Proyecto Audiovisual Argumental',
			'Proyecto Audiovisual Documental',
			'Proyecto Audiovisual Digital',
			'Proyecto Audiovisual de Producción',
		),
	);

	include 'templates/encabezado.php';
	include 'templates/careerInformation.php';
	include 'templates/pie_pagina.php';
