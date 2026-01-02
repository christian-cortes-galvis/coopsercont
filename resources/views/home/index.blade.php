@extends('layouts.app')

@section('title','Inicio')

@section('content')
<div class="container">

	<div class="text-center mb-5">
		<h1 class="fw-bold text-primary">
			COOPSERCONT
		</h1>
		<p class="lead">
			Comprometidos con el bienestar y el servicio del Contadero
		</p>
	</div>

	<div class="row g-4">
		<div class="col-md-4">
			<div class="card h-100 text-center">
				<div class="card-body">
					<h5>Acueducto</h5>
					<p>Agua potable segura para la comunidad.</p>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card h-100 text-center">
				<div class="card-body">
					<h5>Alcantarillado</h5>
					<p>Manejo responsable de aguas residuales.</p>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card h-100 text-center">
				<div class="card-body">
					<h5>Aseo</h5>
					<p>Municipio limpio y saludable.</p>
				</div>
			</div>
		</div>
	</div>

</div>
@endsection
