<?php
	// header information
	$title = 'Gestión ambiental | ';
	$tab_active = 3;

	// career information
	$career_image = 'img/img-carreras/gestion-ambiental.jpg';
	$career_modality = 'Presencial - Campus Norte (Matriz)';
	$career_duration = '3 años';
	$career_time = 'Matutina, vespertina y nocturna';
	$career_price = 'Gratuito';
	$career_title = 'Tecnólogo Superior en Gestión Ambiental';
	$career_campus = 'Norte (Campus Norte (Matriz): Av. 10 de Agosto N26-27 y Luis Mosquera)';
	// Requisito de ingreso tab information
	$requirements = array(
		'Copia de título de bachiller o acta de grado notariado',
		'Haber aprobado el examen de ingreso',
		'Asignación de cupo por parte de SENESCYT',
		'Copia de cédula y certificado de votación (color)'
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
			'Comunicación y lenguaje',
			'Derechos humanos y valores',
			'Gestión empresarial',
			'Proyectos',
			'Mercadotecnia',
			'Asesoramiento de trabajo de titulación',
		),
		array(
			'Realidad nacional',
			'Matemáticas II',
			'Matemáticas III',
			'Administración de empresas',
			'Evaluación de impactos II',
			'Economía y ambiente II',
		),
		array(
			'Matemáticas I',
			'Física II',
			'Física III',
			'Evaluación de impactos I',
			'Economía y ambiente I',
			'Legislación ambiental',
		),
		array(
			'Física I',
			'Inglés II',
			'Inglés III',
			'Salud y medio ambiente',
			'Manejo de efluentes',
			'Climatología',
		),
		array(
			'Inglés I',
			'Investigación II',
			'Administración de talleres',
			'Técnicas de monitoreo ambiental',
			'Química III',
			'Gestión y mantenimiento de especies',
		),
		array(
			'Investigación I',
			'Computación II',
			'Contaminación y control ambiental',
			'Química II',
			'Laboratorio de Química II',
			'Límites permisibles',
		),
		array(
			'Computación I',
			'Gestión ambiental',
			'Microbiología general II',
			'Laboratorio de Química I',
			'Bio-indicadores de vegetales',
			'',
		),
		array(
			'Educación ambiental',
			'Microbiología general I',
			'Interpretación ambiental',
			'Flora y fauna ecuatoriana',
			'Bio-indicadores de animales',
			'',
		),
		array(
			'Recursos naturales',
			'Ecología',
			'Química I',
			'',
			'',
			'',
		),
	);

	include 'templates/encabezado.php';
	include 'templates/careerInformation.php';
	include 'templates/pie_pagina.php';