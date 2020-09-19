<?php
	// header information
	$title = 'Electrónica | ';
	$tab_active = 3;

	// career information
	$career_image = 'img/img-carreras/electronica.jpg';
	$career_modality = 'Presencial - Campus Sur';
	$career_duration = '2 años y medio';
	$career_time = 'Matutina y Vespertina';
	$career_price = 'Gratuito';
	$career_title = 'Tecnólogo Superior en Electrónica';
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
		'El Tecnólogo en Electrónica estará en la capacidad de instalar, operar y dar mantenimiento a sistemas electrónicos, de automatización, redes y telecomunicaciones, aplicando diferentes normas y procedimientos técnicos, de seguridad industrial y sostenibilidad ambiental.',
		'Instalación, Operación y mantenimiento de sistemas electrónicos de automatización, Redes y telecomunicaciones, aplicando las diferentes normas y procedimientos técnicos...',
	);
	// Campo Ocupacional tab information
	$career_occupational_list = [];
	$career_occupational_field = array(
		'El Tecnólogo en Electrónica podrá trabajar en empresas del sector minero, energético, papelero, del petróleo, manufacturero, la industria alimentaria y agrícola, o telecomunicaciones, empresas financieras, comerciales y de servicios médicos, que requieran automatizar sus procesos para incrementar su eficiencia y control.',
	);
	// Malla Curricular tab table information
	$career_table_description_initial = 'La carrera tiene una duración de 4500 horas distribuidas en 5 periodos académicos, combinando los campos de formación teórica, adaptación e innovación tecnológica, comunicación, saberes y cultura.';
	$career_table_description_final = 'Para obtener el título de Tecnólogo Superior en Electrónica, los estudiantes deberán cumplir 400 horas de prácticas pre-profesionales y vinculación con la sociedad, además de 240 horas destinadas al trabajo de titulación en el quinto periodo de la carrera.';
	$curriculum = array(
		array(
			'Matemática y trigonometría',
			'Cálculo',
			'Comunicación A/D',
			'Telefonía',
			'Antenas y líneas de transmisión',
		),
		array(
			'Física',
			'Electrónica digital aplicada',
			'Microcontroladores',
			'Redes de cableado estructurado',
			'Redes aplicadas',
		),
		array(
			'Electrónica digital',
			'Instrumentación',
			'Máquinas y control industrial',
			'PLC',
			'Fundamentos de robótica',
		),
		array(
			'Fundamentos de electrónica y circuitos',
			'Electrónica analógica',
			'Electrónica de potencia',
			'Sistemas eléctricos',
			'Comunicaciones inalámbricas',
		),
		array(
			'Comunicación oral y escrita',
			'Programación',
			'Instalaciones y mantenimiento',
			'Neumáticos e hidráulicos',
			'Integración de sistemas electrónicos',
		),
		array(
			'Informática',
			'Contexto socioeconómico e intercultural',
			'Administración y productividad',
			'Seguridad y medio ambiente',
			'Gestión de proyectos',
		),
	);

	include 'templates/encabezado.php';
	include 'templates/careerInformation.php';
	include 'templates/pie_pagina.php';