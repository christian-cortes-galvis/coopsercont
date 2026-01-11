@extends('layouts.app')
@section('title', 'Estructura Orgánica y Talento Humano | COOPSERCONT')
@section('meta_description', 'Estructura orgánica y talento humano de COOPSERCONT.')
@section('content')
	<div class="estructura-organizacional container my-5">
		<h2 class="titulo-seccion text-center mb-4">
			Estructura Organizacional y Talento Humano
		</h2>
		{{-- Organigrama --}}
		<section class="bloque-organigrama mb-5 text-center">
			<h3>Organigrama Institucional</h3>
			<p class="text-muted">
				Conoce la estructura jerárquica y funcional de COOPSERCONT.
			</p>
			{{-- Puede ser imagen o enlace a PDF --}}
			<div class="my-4 text-center">
				<img src="{{ asset('institucional/estructura.png') }}" class="img-fluid rounded border img-infraestructura" alt="Estructura Organizacional">
			</div>
		</section>
		{{-- Consejo y Gerencia --}}
		<section class="row g-4 mb-5">

			<div class="col-12 col-md-6">
				<div class="card-estructura">
					<h4>Consejo de Administración</h4>
					<ul>
						<li>Órgano de dirección permanente.</li>
						<li>Ejecuta las decisiones de la Asamblea General.</li>
						<li>Supervisa la gestión administrativa y operativa.</li>
						<li>Aprueba planes, proyectos y presupuestos.</li>
					</ul>
				</div>
			</div>
			<div class="col-12 col-md-6">
				<div class="card-estructura">
					<h4>Gerencia General</h4>
					<ul>
						<li>Representante legal de COOPSERCONT.</li>
						<li>Dirige y controla la gestión institucional.</li>
						<li>Garantiza la prestación eficiente de los servicios.</li>
						<li>Lidera la planeación estratégica.</li>
						<li>Gestiona el talento humano.</li>
					</ul>
				</div>
			</div>
		</section>
		{{-- Talento Humano --}}
		<section class="bloque-talento mb-5">
			<h3>Talento Humano</h3>
			<p>
				COOPSERCONT cuenta con personal idóneo, capacitado y comprometido con el servicio público.
			</p>
			<div class="row g-4 mt-3">
				<div class="col-12 col-md-6">
					<h5>Perfil del Talento Humano</h5>
					<ul>
						<li>Personal directivo</li>
						<li>Personal administrativo</li>
						<li>Personal técnico y operativo</li>
						<li>Personal de apoyo y servicios generales</li>
					</ul>
				</div>
				<div class="col-12 col-md-6">
					<h5>Principios Institucionales</h5>
					<ul>
						<li>Responsabilidad</li>
						<li>Transparencia</li>
						<li>Servicio a la comunidad</li>
						<li>Compromiso ambiental</li>
						<li>Trabajo en equipo</li>
					</ul>
				</div>
			</div>
		</section>
		{{-- Capacitación --}}
		<section class="bloque-capacitacion">
			<h3>Capacitación y Desarrollo</h3>
			<ul>
				<li>Capacitación permanente en servicios públicos.</li>
				<li>Formación en seguridad y salud en el trabajo.</li>
				<li>Actualización normativa.</li>
				<li>Educación ambiental y atención al usuario.</li>
			</ul>
		</section>
		<section class="bloque-capacitacion">
			<h3>Reglamento interno, manual de contratación y manual de funciones</h3>
			<ul>
				<li>Reglamento interno <a href="{{ asset('docs/reglamento_interno.pdf') }}" target="_blank" rel="noopener noreferrer">Ver</a></li>
				<li>Manual de Contratación <a href="{{ asset('docs/manual_de_contratacion.pdf') }}" target="_blank" rel="noopener noreferrer">Ver</a></li>
				<li>Manual de Funciones <a href="{{ asset('docs/manual_de_funciones.pdf') }}" target="_blank" rel="noopener noreferrer">Ver</a></li>
			</ul>
		</section>
	</div>
@endsection
