<?php
	// header information
	$title = 'Contabilidad superior | ';
	$tab_active = 3;

	// career information
	$career_image = 'img/img-carreras/contabilidad.jpg';
	$career_modality = 'Presencial';
	$career_duration = '2 años y medio';
	$career_time = 'Vespertina y Nocturna';
	$career_price = 'Gratuito';
	$career_title = 'Tecnólogo Superior en Contabilidad';
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
		'El Tecnólogo en Contabilidad estará en la capacidad de ejecutar el proceso contable mediante la aplicación de normas vigentes que le permitan organizar, registrar, generar e interpretar la información económica, financiera de la empresa para la toma de decisiones, tomando en cuenta la realidad nacional dentro de un contexto de globalización y diálogo intercultural, apuntando a los objetivos de Pan Nacional para el buen Vivir y el cambio de la matriz productiva.',
	);
	// Campo Ocupacional tab information
	$career_occupational_list = [];
	$career_occupational_field = array(
		'El Tecnólogo en Contabilidad podrá laborar en empresas públicas y privadas independientemente del sector económico. En áreas financieras, administrativas, de planeación, tesorería, costos y financieras con el fin de recabar la información contable.',
	);
	// Malla Curricular tab table information
	$career_table_description_initial = '';
	$career_table_description_final = '';
	$curriculum = array(
		array(
			'Matemática Básica',
			'Legislación Laboral',
			'Legislación Mercantil y Societaria',
			'Tributación',
			'Presupuesto',
		),
		array(
			'Adminstración',
			'Introducción a la Economía',
			'Estadística',
			'Contabilidiad de instituciones financieras',
			'Emprendimiento',
		),
		array(
			'Contabilidad Básica',
			'Matemática Financiera',
			'Microeconomía',
			'Gestión de Auditoría',
			'Análisis Financiero',
		),
		array(
			'Metodología de la Investigación',
			'Contabilidad Intermedia',
			'Contabilidad de Costos',
			'Macroeconomía',
			'Marketing',
		),
		array(
			'Comunicación Oral y Escrita',
			'Administración Financiera',
			'Ofimática',
			'Proyectos de Inversión',
			'Contabilidad Superior',
		),
		array(
			'Realidad Nacional y Ambiental',
			'Ética profesional y social',
			'Comportamiento Organizacional',
			'Software de Contabilidad',
			'Auditoria Financiera',
		),
	);

	include 'templates/encabezado.php';
	include 'templates/careerInformation.php';
	include 'templates/pie_pagina.php';