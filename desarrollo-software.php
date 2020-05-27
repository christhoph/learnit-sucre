<?php
	// header information
	$title = 'Desarrollo de Software | ';
	$tab_active = 3;

	// career information
	$career_image = 'img/img-carreras/desarrollo-software.jpg';
	$career_modality = 'Presencial';
	$career_duration = '2 años y medio';
	$career_time = 'Vespertina y Nocturna';
	$career_price = 'Gratuito';
	$career_title = 'Tecnólogo Superior en Desarrollo de Software';
	$career_campus = 'Centro de Idiomas (Av. Ajavi 403 y Benancio Estandoque Oe4)';
	// Requisito de ingreso tab information
	$requirements = array(
		'Copia de título de bachiller o acta de grado notariado',
		'Haber aprobado el examen de ingreso',
		'Asignación de cupo por parte de SENESCYT',
		'Copia de cédula y certificado de votación (color)'
	);
	// Perfil de egreso tab information
	$career_graduation_profile = array(
		'El tecnólogo en Desarrollo de Software estará en la capacidad de analizar los requerimientos, programar , desarrollar, instalar, validar competencias de lógica de programación, destrezas matemáticas, comunicación y lenguaje.',
		'Instalar el software desarrollado mediante configuraciones según el método de implementación establecido, en ambiente de producción. Así como crear elementos de interacción entre la base de datos y el entorno de desarrollo usando lenguaje de consultas, crear base de datos y codificar el lenguaje de programación.',
	);
	// Campo Ocupacional tab information
	$career_occupational_list_title = 'El Tecnólogo en Desarrollo de software podrá trabajar en labores como:';
	$career_occupational_list = array(
		'Analista de requerimientos de software',
		'Programador en lenguajes determinados de acuerdo a los diseños efectuados',
		'Desarrollador de software',
		'Documentador de software',
		'Probador de software',
	);
	// Malla Curricular tab table information
	$career_table_description_initial = '';
	$career_table_description_final = '';
	$curriculum = array(
		array(
			'Matemática Discreta',
			'Álgebra y Trigonometría',
			'Cálculo Diferencia e Integral',
			'Estadística Descriptiva',
			'Emprendimientos',
		),
		array(
			'Desarrollo del Pensamiento',
			'Base de Datos',
			'Fundamentos de Administración',
			'Legislación Informática',
			'Proyecto de Titulación',
		),
		array(
			'Introducción al Desarrollo de Software',
			'Programación Orientada a Objetos',
			'Programación Visual',
			'Programación de Aplicaciones Web',
			'Tendencias actuales de programación',
		),
		array(
			'Fundamentos de Programación',
			'Metodologías de desarrollo de Software',
			'Base de Datos Avanzada',
			'Desarrollo de aplicaciones móviles',
			'Calidad del Software',
		),
		array(
			'Análisis y Diseño de Sistemas',
			'Lenguaje y Comunicación',
			'Diseño de Interfaz',
			'Inglés B1.2 (Specific purpose)',
			'Fundamentos de redes y conectividad',
		),
		array(
			'Inglés A1 (Básico)',
			'Inglés A2 (Intermedio)',
			'Inglés B1.1 (Technical)',
			'Diversidad y Cultura',
			'Ética Profesional',
		),
	);

	include 'templates/encabezado.php';
	include 'templates/careerInformation.php';
	include 'templates/pie_pagina.php';