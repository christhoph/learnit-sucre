<?php
	// header information
	$title = 'Electricidad | ';
	$tab_active = 3;

	// career information
	$career_image = 'img/img-carreras/electricidad.jpg';
	$career_modality = 'Presencial - Campus Sur';
	$career_duration = '2 años y medio';
	$career_time = 'Matutina y Vespertina';
	$career_price = 'Gratuito';
	$career_title = 'Tecnólogo Superior en Electricidad';
	$career_campus = 'Sur (Av. Teodoro Gómez de la Torre S14 - 72 y Joaquin Gutierrez)';
	// Requisito de ingreso tab information
	$requirements = array(
		'Título de Bachiller',
		'Haber aprobado el examen de ingreso',
		'Asignación de cupo por parte de SENESCYT',
		'Copia de cédula y certificado de votación'
	);
	// Perfil de egreso tab information
	$career_graduation_profile = array(
		'El Tecnólogo en Electricidad está preparado para ejecutar y supervisar los procesos de instalaciones eléctricas industriales, sistemas de distribución, generación y sistemas de transmisión eléctrica, operación, mantenimiento, control y automatización industrial.',
		'Instalaciones eléctricas comerciales, Redes eléctricas de medio y bajo voltaje, Instalaciones de maquinaria y equipos industriales, Instalaciones eléctricas industriales...',
	);
	// Campo Ocupacional tab information
	$career_occupational_list = [];
	$career_occupational_field = array(
		'El Tecnólogo en Electricidad podrá desempeñarse como auxiliar, operador o supervisor en empresas de generación, transmisión y distribución de energía; control eléctrico y automatización; industrias petroleras; venta y posventa de equipo eléctrico; y, en forma independiente en obras de instalaciones eléctricas y automatización industrial.',
	);
	// Malla Curricular tab table information
	$career_table_description_initial = 'La carrera tiene una duración de 4500 horas distribuidas en 5 periodos académicos, combinando los campos de formación teórica, adaptación e innovación tecnológica, comunicación, saberes y cultura.';
	$career_table_description_final = 'Para obtener el título de Tecnólogo Superior en Electricidad, los estudiantes deberán cumplir 400 horas de prácticas pre-profesionales y vinculación con la sociedad, además de 240 horas destinadas al trabajo de titulación en el quinto periodo de la carrera.';
	$curriculum = array(
		array(
			'Matemática técnica',
			'Cálculo',
			'Administración',
			'Desarrollo de proyectos',
			'Sistemas de generación y transmición de electricidad',
		),
		array(
			'Física',
			'Seguridad industrial',
			'Instalaciones eléctricas residenciales',
			'Instalaciones eléctricas industriales',
			'Sistemas de distribución de electricidad',
		),
		array(
			'Electrotecnia',
			'Electrónica',
			'Máquinas DC',
			'Máquinas AC',
			'Energías alternativas',
		),
		array(
			'Informática básica',
			'Circuitos eléctricos',
			'Electrónica de potencia',
			'Control eléctrico industrial',
			'Control electro-neumático',
		),
		array(
			'Comunicación oral y escrita',
			'Programación',
			'Instrumentación',
			'Mantenimiento de equipo eléctronico',
			'Control de procesos y automatización',
		),
		array(
			'Realidad nacional',
			'Ética y liderazgo',
			'Redes de baja tensión',
			'Impacto ambiental',
			'Proyecto de titulación',
		),
	);

	include 'templates/encabezado.php';
	include 'templates/careerInformation.php';
	include 'templates/pie_pagina.php';