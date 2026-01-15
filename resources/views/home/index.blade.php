@extends('layouts.app')
@section('title', 'Inicio')
@section('meta_description',
	'COOPSERCONT presta los servicios públicos de acueducto, alcantarillado y aseo en el municipio de El Contadero.')
@section('content')
	<div class="container">
		<section>
			<div id="owlCarouselHome" class='owl-carousel owl-theme'>
				<div class="item">
					<div class="banner-item">
						<img src="{{ asset('assets/banner/1.jpeg') }}" class="img-fluid" alt="">
						<div class="banner-caption">
							<h2 class="text-amarillo">Alcantarillado seguro</h2>
							<p class="text-light">Soluciones que garantizan sistemas de alcantarillado eficientes y sostenibles</p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="banner-item">
						<img src="{{ asset('assets/banner/2.jpeg') }}" class="img-fluid" alt="">
						<div class="banner-caption">
							<h2 class="text-amarillo">Servicios de acueducto garantizados</h2>
							<p class="text-light">Ingeniería que protege el recurso más valioso y genera ahorros sostenibles.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		{{-- HERO --}}
		<section class="home-hero text-center">
			<h1 class="fw-bold text-azul">COOPSERCONT</h1>
			<h4 class="mt-2 text-amarillo">
				Comprometidos con el bienestar y el servicio del Contadero
			</h4>
			<p class="text-muted">
				Administración Pública Cooperativa del Contadero - Transparencia y servicio para la comunidad
			</p>
		</section>
		{{-- SERVICIOS --}}
		<section class="my-2">
			<div class="row g-4 text-center">
				<div class="col-md-4">
					<a class="card card-icon-text border-start border-4 border-primary" href="{{ url('/servicios/acueducto') }}" >
						<div class="card-body">
							<div class="icon-wrapper">
								<i class="fas fa-water text-azul"></i>
							</div>
							<div class="text-wrapper">
								<strong class="text-azul"> Acueducto</strong>
								<p class="text-muted">Suministro permanente de agua potable</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="{{ url('/servicios/alcantarillado') }}" class="card card-icon-text border-start border-4 border-primary text-decoration-none">
						<div class="card-body">
							<div class="icon-wrapper">
								<i class="fas fa-toilet text-amarillo"></i>
							</div>
							<div class="text-wrapper">
								<strong class="text-azul"> Alcantarillado</strong>
								<p class="text-muted">Manejo de aguas residuales</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="{{ url('/servicios/aseo') }}" class="card card-icon-text border-start border-4 border-primary text-decoration-none">
						<div class="card-body">
							<div class="icon-wrapper">
								<i class="fas fa-recycle text-verde"></i>
							</div>
							<div class="text-wrapper">
								<strong class="text-azul"> Aseo</strong>
								<p class="text-muted">Recolección de residuos sólidos</p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</section>
		{{-- NOTICIAS --}}
		<section class="my-2">
			<h4 class="fw-bold mb-3">NOTICIAS INSTITUCIONALES</h4>
			<div class="row g-4">
				@forelse($noticias as $noticia)
					<div class="col-md-4">
						<div class="card h-100">
							<div class="card-body">
								<h6 class="fw-bold text-azul">
									{{ $noticia->titulo }}
								</h6>
								<small class="text-muted">
									{{ $noticia->fecha_publicacion->format('d/m/Y') }}
								</small>
								<p class="mt-2">
									{{ $noticia->resumen ?? \Illuminate\Support\Str::limit(strip_tags($noticia->contenido), 120) }}
								</p>
								<a href="{{ route('noticias.show', $noticia) }}" class="btn btn-sm btn-outline-primary">
									Leer más
								</a>
							</div>
						</div>
					</div>
				@empty
					<div class="col-12">
						<div class="alert alert-info">
							No hay noticias publicadas actualmente.
						</div>
					</div>
				@endforelse
			</div>
			<div class="mt-3">
				<a href="{{ route('noticias.index') }}" class="btn btn-outline-primary btn-sm">
					Ver todas las noticias
				</a>
			</div>
		</section>
		{{-- AVISOS --}}
		<section class="my-2">
			<h4 class="fw-bold mb-3">AVISOS IMPORTANTES</h4>
			@forelse($avisos as $aviso)
				<div class="alert alert-info">
					<strong>{{ $aviso->titulo }}</strong><br>
					{{ $aviso->descripcion }}
				</div>
			@empty
				<div class="alert alert-secondary">
					No hay avisos activos.
				</div>
			@endforelse
			<a href="{{ url('/avisos') }}" class="btn btn-outline-primary btn-sm">
				Ver todos los avisos
			</a>
		</section>
		{{-- TRANSPARENCIA / TARIFAS / REPORTE --}}
		<section class="my-2">
			<div class="row g-4 text-center">
				<div class="col-md-4">
					<a href="{{ url('/transparencia') }}" class="card card-icon-text border-start border-4 border-primary text-decoration-none">
						<div class="card-body">
							<div class="icon-wrapper">
								<i class="fas fa-eye text-azul"></i>
							</div>
							<div class="text-wrapper">
								<strong class="text-azul"> Transparencia</strong>
								<p class="text-muted">Información institucional y normativa</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="{{ url('/tarifas') }}" class="card card-icon-text border-start border-4 border-primary text-decoration-none">
						<div class="card-body">
							<div class="icon-wrapper">
								<i class="fas fa-file-invoice-dollar text-azul"></i>
							</div>
							<div class="text-wrapper">
								<strong class="text-azul"> Tarifas</strong>
								<p class="text-muted">Tarifas oficiales vigentes</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="{{ url('/reporte') }}" class="card card-icon-text border-start border-4 border-primary text-decoration-none">
						<div class="card-body">
							<div class="icon-wrapper">
								<i class="fas fa-file-contract text-azul"></i>
							</div>
							<div class="text-wrapper">
								<strong class="text-azul"> Reporte de novedades</strong>
								<p class="text-muted">Reporte fallas de los servicios</p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</section>
	</div>
@endsection
@push('scripts')
	<script type="text/javascript">
		$(document).ready(function() {
			$('#owlCarouselHome').owlCarousel({
				loop              : true,
				margin            : 10,
				dots              : true,
				navText           : [ '<i class="fas fa-chevron-circle-left"></i>', '<i class="fas fa-chevron-circle-right"></i>' ],
				nav               : true,
				items             : 1,
				autoplay          : true,
				autoplayTimeout   : 5000,
				autoplayHoverPause: true,
				smartSpeed        : 800
			});
		});
	</script>
@endpush
