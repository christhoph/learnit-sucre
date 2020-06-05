<?php
	// header information
	$title = 'Producción textil | ';
	$tab_active = 3;

	// career information
	$career_image = 'img/img-carreras/produccion-textil.jpg';
	$career_modality = 'Dual - Campus Norte (Matriz)';
	$career_duration = '2 años y medio';
	$career_time = 'Intensiva';
	$career_price = 'Gratuito';
	$career_title = 'Tecnólogo Superior en Producción Textil';
	$career_campus = 'Norte (Campus Norte (Matriz): Av. 10 de Agosto N26-27 y Luis Mosquera)';
	// Requisito de ingreso tab information
	$requirements = array(
		'Copia de título de bachiller o acta de grado notariado',
		'Haber aprobado el examen de ingreso',
		'Asignación de cupo por parte de SENESCYT',
		'Copia de cédula y certificado de votación (color)',
		'Carta de aceptación en entidad receptora'
	);
	// Perfil de egreso tab information
	$career_graduation_profile = array(
		'El Tecnólogo en Producción Textil estará en la capacidad de gestionar, planificar, ejecutar y evaluar procesos relacionados con la producción de textiles, desde la selección de la materia prima, la planificación de las rutinas de producción, la aplicación de técnicas específicas de fabricación de tejidos e hilaturas, la configuración de máquinas y equipos, hasta la ejecución de pruebas de calidad, respetando criterios de calidad, seguridad industrial y cuidado del medio ambiente.',
		'Seleccionar materia prima para la producción que poseen características específicas, Planificar e implementar las fases de trabajo y rutinas laborales para la producción de artículos textiles, Ejecutar de pruebas de calidad y evaluación de los resultados...',
	);
	// Campo Ocupacional tab information
	$career_occupational_list = [];
	$career_occupational_field = array(
		'El Tecnólogo en Producción Textil puede desempeñarse como operador, supervisor y/o jefe de planta, producción, acabados, control de calidad y operaciones en empresas públicas o privadas relacionadas con la producción de telas, hilos y artículos textiles. La modalidad dual garantiza una formación práctica ajustada a las necesidades del entorno laboral real, así como la rápida inserción laboral de los futuros profesionales.',
	);
	// Malla Curricular tab table information
	$career_table_description_initial = 'La carrera tiene una duración de 4500 horas distribuidas en 5 periodos académicos, que combina los campos de formación teórica, adaptación e innovación tecnológica, comunicación, saberes y cultura. <br /><br /> Al ser una carrera de modalidad dual, cada periodo se dividirá en 10 semanas de formación teórica en el Instituto y 12 semanas de formación práctica en la empresa.';
	$career_table_description_final = 'Para obtener el título de Tecnólogo Superior en Producción Textil, los estudiantes deberán cumplir 2600 horas de formación práctica en entidades receptoras y trabajo autónomo, 160 horas vinculación con la sociedad, además de 240 horas destinadas al trabajo de titulación en el quinto periodo de la carrera.';
	$curriculum = array(
		array(
			'Introducción a la Tecnología Textil',
			'Dibujo Mecánico',
			'Teoría del Color',
			'Control de Procesos y Cálculo de Producción',
			'Emprendimiento',
		),
		array(
			'Fibras Textiles',
			'Hilatura de Fibra Corta',
			'Tintorería',
			'Documentación y Control',
			'Ejecución de Pedidos y Medidas de Control',
		),
		array(
			'Dibujo Técnico',
			'Hilatura de Fibra Larga',
			'Aprestos y Acabados',
			'Mecánica y Mantenimiento Textil',
			'Etiquetado y Reajuste de Procesos Textiles',
		),
		array(
			'Comunicación y Lenguaje',
			'Filamentos Sintéticos',
			'Diseño y Estampación Textil',
			'Supervisión de Procesos Productivos',
			'Implementación de los Materiales en los Procesos de Preparación Textil',
		),
		array(
			'Investigación',
			'Producción y Elabolación de Tejidos',
			'Informática',
			'Valoración Visual de Textiles y Control de Calidad',
			'Liderazgo',
		),
		array(
			'Realidad Nacional',
			'Metodología de la Investigación',
			'Gestión Ambiental',
			'Diseño de Proyectos',
			'',
		),
	);

	include 'templates/encabezado.php';
	include 'templates/careerInformation.php';
	include 'templates/pie_pagina.php';
