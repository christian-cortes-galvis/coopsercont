@extends('layouts.app')

@section('title', 'Formulario de Reporte')
@section('meta_description', 'Formulario para reportar novedades en los servicios públicos de COOPSERCONT en El
	Contadero.')

@section('content')
	<div class="container seccion-detalle">
		<h2 class="fw-bold mb-3 text-center text-azul">Formulario de Reporte <i class="fas fa-file-alt"></i></h2>

		{{-- Mensaje general --}}
		@if ($errors->any())
			<div class="alert alert-danger">
				<strong>Corrige los errores indicados.</strong>
			</div>
		@endif

		<form method="POST" action="{{ route('crearReporte') }}" enctype="multipart/form-data" novalidate>
			@csrf

			<div class="row g-3">
				{{-- Nombre --}}
				<div class="col-md-6">
					<label class="form-label fw-bold text-azul">Nombre Completo <i class="fas fa-user-tie"></i></label>
					<input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror"
						value="{{ old('nombre') }}" required maxlength="100">
					@error('nombre')
						<div class="invalid-feedback">{{ $message }}</div>
					@enderror
				</div>

				{{-- Documento --}}
				<div class="col-md-6">
					<label class="form-label fw-bold text-azul">Documento  <i class="fas fa-id-card"></i></label>
					<input type="text" name="documento" class="form-control @error('documento') is-invalid @enderror"
						value="{{ old('documento') }}" required maxlength="30">
					@error('documento')
						<div class="invalid-feedback">{{ $message }}</div>
					@enderror
				</div>

				{{-- Dirección --}}
				<div class="col-md-6">
					<label class="form-label fw-bold text-azul">Dirección <i class="fas fa-map-marker-alt"></i></label>
					<input type="text" name="direccion" class="form-control @error('direccion') is-invalid @enderror"
						value="{{ old('direccion') }}" required maxlength="150">
					@error('direccion')
						<div class="invalid-feedback">{{ $message }}</div>
					@enderror
				</div>

				{{-- Teléfono --}}
				<div class="col-md-6">
					<label class="form-label fw-bold text-azul">Teléfono <i class="fas fa-phone"></i></label>
					<input type="tel" name="telefono" class="form-control @error('telefono') is-invalid @enderror"
						value="{{ old('telefono') }}" required pattern="[0-9]{7,10}">
					@error('telefono')
						<div class="invalid-feedback">{{ $message }}</div>
					@enderror
				</div>

				{{-- Email --}}
				<div class="col-md-6">
					<label class="form-label fw-bold text-azul">Correo electrónico <i class="fas fa-envelope"></i></label>
					<input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
						value="{{ old('email') }}" required>
					@error('email')
						<div class="invalid-feedback">{{ $message }}</div>
					@enderror
				</div>

				{{-- Tipo --}}
				<div class="col-md-6">
					<label class="form-label fw-bold text-azul">Tipo de incidencia <i class="fas fa-exclamation-triangle"></i></label>
					<select name="tipo_incidencia" class="form-select @error('tipo_incidencia') is-invalid @enderror"
						required>
						<option value="">Seleccione…</option>
						<option value="Acueducto" {{ old('tipo_incidencia') == 'Acueducto' ? 'selected' : '' }}>Acueducto
						</option>
						<option value="Alcantarillado" {{ old('tipo_incidencia') == 'Alcantarillado' ? 'selected' : '' }}>
							Alcantarillado</option>
						<option value="Aseo" {{ old('tipo_incidencia') == 'Aseo' ? 'selected' : '' }}>Aseo</option>
					</select>

					@error('tipo_incidencia')
						<div class="invalid-feedback">{{ $message }}</div>
					@enderror
				</div>

				{{-- Descripción --}}
				<div class="col-12">
					<label class="form-label fw-bold text-azul">Descripción  <i class="fas fa-align-left"></i></label>
					<textarea name="descripcion" rows="4" class="form-control @error('descripcion') is-invalid @enderror" required>{{ old('descripcion') }}</textarea>

					@error('descripcion')
						<div class="invalid-feedback">{{ $message }}</div>
					@enderror
				</div>

				{{-- Foto --}}
				<div class="col-12">
					<label class="form-label fw-bold text-azul">Foto (Opcional) <i class="fas fa-camera"></i></label>
					<input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror"
						accept="image/jpeg,image/png,image/webp">
					@error('foto')
						<div class="invalid-feedback">{{ $message }}</div>
					@enderror
				</div>

				{{-- Botón --}}
				<div class="col-12 text-end">
					<button class="btn btn-azul px-4">
						<i class="fas fa-save"></i> Enviar Reporte
					</button>
				</div>
			</div>
		</form>
	</div>
@endsection
