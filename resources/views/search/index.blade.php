@extends('layouts.app')

@section('title', 'Resultados de búsqueda')

@section('content')
	<div class="container">

		<h2 class="fw-bold mb-2">
			Resultados de búsqueda
		</h2>

		@if ($q)
			<p class="text-muted mb-4">
				Se encontraron <strong>{{ $resultados->count() }}</strong>
				resultado(s) para:
				<strong>"{{ $q }}"</strong>
			</p>
		@endif

		@forelse($resultados as $item)
			<div class="mb-4 pb-3 border-bottom">

				{{-- TÍTULO --}}
				<h6 class="fw-bold mb-1">
					<a href="{{ $item->url }}">
						{!! highlight($item->titulo, $q) !!}
					</a>
				</h6>

				{{-- BADGE DE TIPO --}}
				<span class="badge bg-secondary mb-2">
					{{ ucfirst($item->tipo) }}
				</span>

				{{-- CONTENIDO --}}
				<p class="mb-0 text-muted">
					{!! search_snippet($item->contenido, $q) !!}
				</p>

			</div>
		@empty
			<div class="alert alert-info">
				No se encontraron resultados para la búsqueda realizada.
			</div>
		@endforelse

	</div>
@endsection
