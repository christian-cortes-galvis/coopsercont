@extends('layouts.app')
@section('title', 'Formulario de Reporte')
@section('meta_description', 'Formulario para reportar novedades en los servicios públicos de COOPSERCONT en El
	Contadero.')
@section('content')
	<div class="container">
		<h2 class="mb-4">Formulario de Reporte</h2>

		<form method="POST" action="/reporte" enctype="multipart/form-data">
			@csrf

			<div class="row g-3">
				<div class="col-md-6">
					<input class="form-control" name="nombre" placeholder="Nombre completo" required>
				</div>
				<div class="col-md-6">
					<input class="form-control" name="documento" placeholder="Documento" required>
				</div>

				<div class="col-md-6">
					<input class="form-control" name="direccion" placeholder="Dirección" required>
				</div>
				<div class="col-md-6">
					<input class="form-control" name="telefono" placeholder="Teléfono" required>
				</div>

				<div class="col-md-6">
					<input type="email" class="form-control" name="email" placeholder="Email">
				</div>

				<div class="col-md-6">
					<select class="form-select" name="tipo_incidencia" required>
						<option value="">Tipo de incidencia</option>
						<option>Acueducto</option>
						<option>Alcantarillado</option>
						<option>Aseo</option>
					</select>
				</div>

				<div class="col-12">
					<textarea class="form-control" name="descripcion" rows="4" placeholder="Descripción" required></textarea>
				</div>

				<div class="col-12">
					<input type="file" class="form-control" name="foto">
				</div>

				<div class="col-12 text-end">
					<button class="btn btn-primary">Enviar reporte</button>
				</div>
			</div>
		</form>
	</div>
@endsection
