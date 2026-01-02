@extends('layouts.app')

@section('title','Avisos y Campañas Informativas')
@section('meta_description','Avisos y campañas informativas de COOPSERCONT dirigidas a la comunidad.')

@section('content')
<div class="container avisos-page">

	{{-- TÍTULO --}}
	<h2 class="fw-bold text-center mb-1">
		AVISOS Y CAMPAÑAS INFORMATIVAS
	</h2>

	<p class="text-center text-muted mb-5">
		Información oficial dirigida a la comunidad
	</p>

	{{-- ================= AVISOS ================= --}}
	<section class="mb-5">

		<div class="bloque-titulo">
			AVISOS
		</div>

		@forelse($avisos['aviso'] ?? collect() as $aviso)
			<div class="aviso-item-texto">
				<h6 class="fw-bold mb-1">
					{{ $aviso->titulo }}
				</h6>
				<p class="mb-0">
					{{ $aviso->descripcion }}
				</p>
			</div>
		@empty
			<div class="alert alert-info">
				No hay avisos activos actualmente.
			</div>
		@endforelse

	</section>

	{{-- ================= CAMPAÑAS ================= --}}
	<section class="mb-5">
		<div class="bloque-titulo">
			CAMPAÑAS
		</div>
		<div class="row g-4">
			@forelse($avisos['campaña'] ?? collect() as $campaña)
				<div class="col-md-6 col-lg-4">
					<div class="campania-card">
						@if($campaña->imagen)
							<img src="{{ asset($campaña->imagen) }}" class="img-fluid campania-img" alt="{{ $campaña->titulo }}">
						@endif
						<div class="campania-body">
							<h6 class="fw-bold mb-1">{{ $campaña->titulo }}</h6>
							<p class="mb-0">{{ $campaña->descripcion }}</p>
						</div>

					</div>
				</div>
			@empty
				<div class="alert alert-info">
					No hay campañas publicadas actualmente.
				</div>
			@endforelse
		</div>
	</section>

</div>
@endsection
