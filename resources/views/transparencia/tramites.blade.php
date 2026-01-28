@extends('layouts.app')
@section('title', 'Trámites | Transparencia')
@section('content')
	<div class="lista-servicios mt-4">
		<h2 class="fw-bold mb-3 text-center text-azul">
			TRÁMITES Y SERVICIOS
		</h2>
		<img src="{{ asset('institucional/sede1.png') }}" class="img-fluid rounded border img-sede"
			alt="Sede de la oficina central COOPSERCONT">
		<img src="{{ asset('institucional/sede2.png') }}" class="img-fluid rounded border img-sede"
			alt="Sede de la oficina central COOPSERCONT">
		<div class="item-servicio">
			<img src="{{ asset('institucional/solicitud_acueducto.jpg') }}" alt="Acueducto">
			<div class="contenido">
				<h4>Acueducto</h4>
				<ul>
					<li>Solicitud</li>
					<li>Copia de cédula del propietario</li>
					<li>Copia de la escritura</li>
					<li>Certificado del extracto</li>
				</ul>
			</div>
			<div class="tarifa">Tarifa: <span>$150.000</span></div>
		</div>
		<div class="item-servicio">
			<img src="{{ asset('institucional/solicitud_alcantarillado.jpg') }}" alt="Alcantarillado">
			<div class="contenido">
				<h4>Alcantarillado</h4>
				<ul>
					<li>Solicitud</li>
					<li>Copia de cédula del propietario</li>
					<li>Copia de la escritura</li>
					<li>Certificado del extracto</li>
				</ul>
			</div>
			<div class="tarifa">Tarifa: <span>$100.000</span></div>
		</div>

		<div class="item-servicio">
			<img src="{{ asset('institucional/cambio_usuario.jpeg') }}" alt="Cambio de usuario">
			<div class="contenido">
				<h4>Cambio de usuario</h4>
				<ul>
					<li>Copia de cédula del propietario</li>
					<li>Copia de la escritura</li>
					<li>Certificado del extracto</li>
				</ul>
			</div>
		</div>
		<div class="item-servicio">
			<img src="{{ asset('institucional/factura.png') }}" alt="Reposición de facturas">
			<div class="contenido">
				<h4>Reposición de facturas</h4>
				<p class="nota">
					Acercarse a la oficina de COOPSERCONT y solicitar una nueva factura.
				</p>
			</div>
		</div>
	</div>
	<section class="info-general">
		<h3>Cobertura</h3>
		<p>
			COOPSERCONT presta el servicio público de acueducto en la zona urbana del
			municipio de El Contadero, instituciones públicas, establecimientos
			comerciales y usuarios industriales de pequeña escala.
		</p>

		<h3>Calidad del agua</h3>
		<p>
			Se garantiza agua apta para el consumo humano mediante captación autorizada,
			tratamiento físico y químico, filtración, desinfección, almacenamiento y
			distribución segura.
		</p>

		<h3>Horarios y recomendaciones</h3>
		<p>
			El servicio se presta 24 horas al día. Facturación y recaudo:
			lunes a viernes de 8:00 am a 12:00 m y de 2:00 pm a 6:00 pm.
		</p>
	</section>
@endsection
