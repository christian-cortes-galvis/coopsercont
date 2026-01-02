@extends('layouts.app')
@section('title', 'Resultados de búsqueda')
@section('content')
	<div class="container">
		<h2 class="fw-bold mb-3">
			Resultados de búsqueda
		</h2>
		@if ($q)
			<p class="text-muted">
				Resultados para: <strong>{{ $q }}</strong>
			</p>
		@endif
		@forelse($resultados as $item)
			<div class="mb-3">
				<h6 class="fw-bold mb-1">
					<a href="{{ $item->url }}">
						{{ $item->titulo }}
					</a>
				</h6>
				<small class="text-muted">
					{{ ucfirst($item->tipo) }}
				</small>
				<p class="mb-0">
					{{ Str::limit($item->contenido, 180) }}
				</p>
			</div>
		@empty
			<div class="alert alert-info">
				No se encontraron resultados.
			</div>
		@endforelse
	</div>
@endsection
