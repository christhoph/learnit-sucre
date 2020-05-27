<?php
	// header information
	$title = 'Electromecánica | ';
	$tab_active = 3;

	// career information
	$career_image = 'img/img-carreras/electromecanica.jpg';
	$career_modality = 'Presencial - Campus Sur';
	$career_duration = '2 años y medio';
	$career_time = 'Matutina y Vespertina';
	$career_price = 'Gratuito';
	$career_title = 'Tecnólogo Superior en Electromecánica';
	$career_campus = 'Sur (Av. Teodoro Gómez de la Torre S14 - 72 y Joaquin Gutierrez)';
	// Requisito de ingreso tab information
	$requirements = array(
		'Copia de título de bachiller o acta de grado notariado',
		'Haber aprobado el examen de ingreso',
		'Asignación de cupo por parte de SENESCYT',
		'Copia de cédula y certificado de votación (color)'
	);
	// Perfil de egreso tab information
	$career_graduation_profile = array(
		'El Tecnólogo en Electromecánica tiene la capacidad de instalar, operar y dar mantenimiento a sistemas electromecánicos, brindando soluciones en las áreas de mantenimiento mecánico, construcción, reconstrucción, montaje y adaptación tecnológica dentro del área industrial en la producción de bienes y servicios, siguiendo procedimientos técnicos, de seguridad industrial y responsabilidad social y ambiental, a fin de aportar al desarrollo y transformación de la matriz productiva del país.',
		'Mantenimiento mecánico, Construcción, Reconstrucción, Montaje y adaptación tecnológica dentro del área industrial...',
	);
	// Campo Ocupacional tab information
	$career_occupational_list = [];
	$career_occupational_field = array(
		'El Tecnólogo Electromecánico podrá desempeñarse como operador, jefe o supervisor en las áreas de producción, mantenimiento preventivo y correctivo, sistemas de control y gestión de la calidad industrial, así como en construcción, instalación y montaje de máquinas, equipos y sistemas electromecánicos en talleres, fábricas y plantas industriales.',
	);
	// Malla Curricular tab table information
	$career_table_description_initial = 'La carrera tiene una duración de 4500 horas distribuidas en 5 periodos académicos, combinando los campos de formación teórica, adaptación e innovación tecnológica, comunicación, saberes y cultura.';
	$career_table_description_final = 'Para obtener el título de Tecnólogo Superior en Electromecánica, los estudiantes deberán cumplir 160 horas de vinculación con la sociedad y 240 horas de prácticas pre-profesionales durante los periodos II, III y IV, así como 240 horas destinadas al trabajo de titulación en el V periodo de la carrera.';
	$curriculum = array(
		array(
			'Matemática',
			'Resistencia de materiales',
			'Emprendimiento y administración',
			'Hidráulica y neumática',
			'Redes eléctricas',
		),
		array(
			'Física',
			'Seguridad industrial y medio ambiente',
			'Electrónica básica',
			'Centrales de generación',
			'Sistemas de control',
		),
		array(
			'Tecnología de materiales',
			'Taller mecánico: ajustes y sueldas',
			'Instrumentación',
			'Control industrial',
			'Climatización y refrigeración',
		),
		array(
			'Comunicación oral y escrita',
			'Metrología',
			'Instalaciones eléctricas',
			'Electrónica de potencia',
			'Automatización industrial PLCs',
		),
		array(
			'Tics',
			'Circuitos eléctricos',
			'Dibujo asistido por computador',
			'Máquinas herramientas',
			'Mantenimiento electromecánico',
		),
		array(
			'Realidad Nacional',
			'Metodología de la investigación',
			'Diseño de proyectos',
			'Máquinas eléctricas C.C.',
			'Máquinas eléctricas C.A.',
		),
	);

	include 'templates/encabezado.php';
	include 'templates/careerInformation.php';
	include 'templates/pie_pagina.php';