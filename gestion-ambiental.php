<?php
	// header information
	$title = 'Gestión ambiental | ';
	$tab_active = 3;

	// career information
	$career_image = 'img/img-carreras/gestion-ambiental.jpg';
	$career_modality = 'Presencial - Campus Norte (Matriz)';
	$career_duration = '2 años y medio';
	$career_time = 'Matutina, vespertina y nocturna';
	$career_price = 'Gratuito';
	$career_title = 'Tecnólogo Superior en Gestión Ambiental';
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
		'El Tecnólogo en Gestión Ambiental estará en la capacidad de aplicar técnicas, herramientas y procedimientos de manejo, cuidado y mejora de la calidad del medio ambiente en un territorio determinado, evaluar políticas ambientales, efectuar acciones destinadas a conservar el medio ambiente y la biodiversidad, así como realizar actividades seguimiento, control y evaluación de impactos ambientales, con la finalidad de proponer y ampliar planes y programas para prevenir, controlar, mitigar y corregir problemas de contaminación ambiental, promoviendo el desarrollo sostenible, el uso racional de los recursos naturales no renovables y el respeto a los derechos de la naturaleza.',
		'Manejo ambiental para el desarrollo, Biodiversidad, Monitoreo ambiental, Fomento industrial y productivo, Energía y sus alternativas renovables...',
	);
	// Campo Ocupacional tab information
	$career_occupational_list_title = 'El Tecnólogo en Gestión Ambiental puede desempeñarse como:';
	$career_occupational_list = array(
		'Asistente en empresas públicas y privadas dedicadas al análisis, monitoreo, control, prevención y conservación del ambiente.',
		'Supervisor de planes de manejo, sistemas de gestión y estudios de impacto ambiental.',
		'Auxiliar ambiental en programas y empresas cuyo objetivo es la conservación de la biodiversidad, ecosistemas, protección de especies, reservas ecológicas.',
		'Auxiliar y/o supervisor en la operación de plantas dedicadas al tratamiento y biorremediación de cuencas hídricas, manejo de residuos sólidos.',
		'Emprendedor empresarial de pequeñas y medianas en servicios ambientales y otros.',
	);
	// Malla Curricular tab table information
	$career_table_description_initial = 'La carrera tiene una duración de 6 semestres, que combina los campos de formación básica, profesional y humanística.';
	$career_table_description_final = 'Para obtener el título de Tecnólogo Superior en Gestión Ambiental, los estudiantes deberán cumplir al menos 400 horas de prácticas pre-profesionales y vinculación con la sociedad, además de 240 horas destinadas al trabajo de titulación.';
	$curriculum = array(
		array(
			'Informática',
			'Redacción Técnica',
			'Sistema de Información Geográfica',
			'Evaluación de Impactos Ambientales',
			'Evaluación de Productos y Tecnologías',
		),
		array(
			'Metodología de la Investigación',
			'Bioquímica',
			'Bioestadística',
			'Economía Ambiental',
			'Biorremediación Ambiental',
		),
		array(
			'Química General',
			'Química Ambiental',
			'Diseño Asistido por Computadora',
			'Control y Contaminación Ambiental',
			'Sistema de Calidad y Gestión Ambiental',
		),
		array(
			'Física',
			'Etnobiología',
			'Sistema de Seguridad y Salud Ocupacional',
			'Diseño de Proyectos',
			'Administración y Emprendimiento',
		),
		array(
			'Educación Ambiental',
			'Botánica',
			'Zoología',
			'Procesos Biotecnológicos',
			'Bioética',
		),
		array(
			'Matemáticas',
			'Sistemas Ecológicos',
			'Técnicas de monitoreo ambiental',
			'Legislación Ambiental',
			'Trabajo de Titulación',
		),
	);

	include 'templates/encabezado.php';
	include 'templates/careerInformation.php';
	include 'templates/pie_pagina.php';