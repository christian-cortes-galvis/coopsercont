@extends('layouts.app')
@section('title', 'Atención al Ciudadano')
@section('meta_description', 'Canales oficiales de atención, contacto y servicios a la ciudadanía de COOPSERCONT en El Contadero.')
@section('content')
	<div class="container">
		<h2 class="fw-bold text-center mb-3">
			ATENCIÓN AL CIUDADANO
		</h2>
		<p class="text-center text-muted mb-5">
			Canales oficiales de atención, contacto y servicios a la ciudadanía
		</p>
        <div class="my-4 text-center">
            <img src="{{ asset('institucional/sede-oficina-central.jpg') }}" class="img-fluid rounded border img-sede" alt="Sede de la oficina central COOPSERCONT">
            <small class="d-block text-muted mt-2">
                SEDE DE LA OFICINA CENTRAL, CALLE 4 No. 4-12 BARRIO EL CENTRO
            </small>
        </div>
		<div class="row g-4">
			{{-- INFORMACIÓN DE CONTACTO --}}
			<div class="col-md-6">
				<div class="card h-100">
					<div class="card-body">
						<h5 class="fw-bold mb-3">Información de contacto</h5>
						<p class="mb-2">
							<strong>Dirección:</strong><br>
							Calle 4 No. 3-27 Barrio El Centro
						</p>
						<p class="mb-2">
							<strong>Teléfonos:</strong><br>
							316 188 3794 · 315 384 3906
						</p>
						<p class="mb-2">
							<strong>Correo electrónico:</strong><br>
							coopsercontesp@hotmail.com
						</p>
						<p class="mb-0">
							<strong>Horario de atención:</strong><br>
							Lunes a viernes<br>
							8:00 a.m. a 12:00 m<br>
							2:00 p.m. a 6:00 p.m.
						</p>
					</div>
				</div>
			</div>

			{{-- REDES SOCIALES --}}
			<div class="col-md-6">
				<div class="card h-100">
					<div class="card-body">
						<h5 class="fw-bold mb-3">Redes sociales</h5>
						<p>
							A través de nuestras redes sociales compartimos información
							institucional, campañas educativas y avisos de interés
							para la comunidad.
						</p>
						<a href="https://www.facebook.com/share/14QqGqAcuoS/" target="_blank"
							class="btn btn-outline-primary">
							Facebook COOPSERCONT
						</a>
					</div>
				</div>
			</div>

			{{-- PQRDS --}}
			<div class="col-md-6">
				<div class="card h-100">
					<div class="card-body">
						<h5 class="fw-bold mb-3">
							Peticiones, Quejas, Reclamos, Denuncias y Sugerencias (PQRDS)
						</h5>
						<p>
							La ciudadanía puede presentar peticiones, quejas, reclamos,
							denuncias o sugerencias relacionadas con la gestión
							institucional de COOPSERCONT.
						</p>
						<p class="text-muted">
							Este canal es diferente al reporte de novedades técnicas
							de los servicios públicos.
						</p>
						{{-- Si luego hay formulario PQRDS --}}
						<a href="#" class="btn btn-outline-primary disabled">
							PQRDS (próximamente)
						</a>
					</div>
				</div>
			</div>

			{{-- REPORTE DE NOVEDADES --}}
			<div class="col-md-6">
				<div class="card h-100 border-primary">
					<div class="card-body">
						<h5 class="fw-bold mb-3">
							Reporte de novedades de los servicios
						</h5>
						<p>
							Para reportar fallas, daños o inconvenientes relacionados
							con los servicios de acueducto, alcantarillado o aseo,
							utilice el formulario de reporte de novedades.
						</p>
						<a href="{{ url('/reporte') }}" class="btn btn-primary">
							Realizar reporte
						</a>
					</div>
				</div>
			</div>

			<div class="alert alert-info mt-3">
				Los canales de atención están disponibles conforme a los principios de
				transparencia, oportunidad y respeto al ciudadano.
			</div>
		</div>
	</div>
@endsection
