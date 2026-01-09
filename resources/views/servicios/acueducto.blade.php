@extends('layouts.app')
@section('title', 'Servicio de Acueducto')
@section('meta_description', 'Servicio público de acueducto en El Contadero. Agua potable segura, continua y de calidad.')
@section('content')
	<div class="container seccion-detalle">
		<h2 class="fw-bold mb-3 text-center text-azul">
			SERVICIO DE ACUEDUCTO
		</h2>
		<p class="text-center text-muted mb-4">
			Prestación del servicio público de acueducto en el municipio de El Contadero
		</p>
		<div class="my-4 text-center">
			<img src="{{ asset('institucional/planta-tratamiento-acueducto.jpg') }}" class="img-fluid rounded border img-infraestructura" alt="Planta de Tratamiento Acueducto - Barrio Primero de Mayo">
			<small class="d-block text-muted mt-2">
				PLANTA DE TRATAMIENTO ACUEDUCTO - BARRIO PRIMERO DE MAYO
			</small>
		</div>
		{{-- DESCRIPCIÓN --}}
		<section class="mb-4">
			<h5 class="titulo-seccion">Descripción del servicio</h5>
			<p>
				Garantizamos el suministro permanente de agua potable, cumpliendo con los
				estándares de calidad establecidos en la normatividad vigente, desde la
				captación, tratamiento y distribución del recurso hídrico. Nuestro objetivo
				es asegurar que cada hogar reciba agua segura, promoviendo el uso responsable
				y la protección de las fuentes hídricas del municipio.
			</p>
		</section>

		{{-- COBERTURA --}}
		<section class="mb-4">
			<h5 class="titulo-seccion">Cobertura del servicio</h5>
			<p>
				COOPSERCONT presta el servicio público de acueducto en la zona urbana del
				municipio de El Contadero, incluyendo:
			</p>
			<ul>
				<li>Viviendas urbanas</li>
				<li>Instituciones públicas (escuelas, centros de salud, entidades administrativas)</li>
				<li>Establecimientos comerciales</li>
				<li>Usuarios industriales de pequeña escala</li>
			</ul>
		</section>

		{{-- CALIDAD DEL AGUA --}}
		<section class="mb-4">
			<h5 class="titulo-seccion">Calidad del agua</h5>
			<p>
				Se garantiza agua apta para el consumo humano mediante:
			</p>
			<ul>
				<li>Captación de fuentes hídricas autorizadas</li>
				<li>Tratamiento físico y químico del agua</li>
				<li>Procesos de filtración y desinfección</li>
				<li>Almacenamiento y distribución segura</li>
			</ul>
		</section>

		{{-- HORARIOS --}}
		<section class="mb-4">
			<h5 class="titulo-seccion">Horarios de prestación y atención</h5>
			<ul>
				<li>Prestación del servicio: <strong>24 horas al día</strong></li>
				<li>Facturación y recaudo:
					<strong>Lunes a viernes</strong>
					de 8:00 a.m. a 12:00 m y de 2:00 p.m. a 6:00 p.m.
				</li>
			</ul>
		</section>

		{{-- MONITOREO --}}
		<section class="mb-4">
			<h5 class="titulo-seccion">Monitoreo y análisis de calidad</h5>
			<ul>
				<li>Muestreos periódicos en la red de distribución</li>
				<li>Análisis físico-químicos y microbiológicos</li>
				<li>Control del Índice de Riesgo de la Calidad del Agua (IRCA)</li>
				<li>Reportes a las autoridades competentes</li>
			</ul>
		</section>

		{{-- REPORTE --}}
		<section class="mb-5">
			<h5 class="titulo-seccion">Reporte de novedades</h5>
			<p>
				Si presenta inconvenientes relacionados con el servicio de acueducto,
				puede realizar el reporte a través del siguiente formulario:
			</p>

			<a href="{{ url('/reporte') }}" class="btn btn-primary">
				Reportar novedad del servicio de acueducto
			</a>
		</section>
	</div>
@endsection
