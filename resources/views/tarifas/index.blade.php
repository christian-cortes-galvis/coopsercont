@extends('layouts.app')
@section('title', 'Tarifas Oficiales')
@section('meta_description', 'Consulta las tarifas oficiales de los servicios de acueducto, alcantarillado y aseo en El Contadero.')
@section('content')
	<div class="container seccion-detalle mt-4">
		<h2 class="fw-bold mb-3 text-center text-azul">
			TARIFAS DE SERVICIOS PÚBLICOS
		</h2>
		<p class="text-center text-muted mb-4">
			Periodo: Noviembre 2025 · Valores oficiales
		</p>
		@foreach ($tarifas as $servicio => $items)
			{{-- TÍTULO DE SERVICIO --}}
			<div class="tarifa-servicio">
				{{ strtoupper($servicio) }}
			</div>

			@foreach ($items as $tarifa)
				{{-- SUBTÍTULO USO / ESTRATO --}}
				<div class="tarifa-subtitulo">
					Uso: {{ $tarifa->uso }}
					@if ($tarifa->estrato)
						· Estrato {{ $tarifa->estrato }}
					@endif
				</div>

				<div class="table-responsive">
					<table class="table table-bordered table-sm tarifa-table">
						<thead>
							<tr>
								<th>Componente</th>
								<th>Cargo Fijo</th>
								<th>Consumo</th>
								<th>Vertimiento</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($tarifa->detalles as $detalle)
								<tr>
									<td class="text-start fw-semibold">
										{{ $detalle->componente }}
									</td>
									<td class="text-end">
										${{ number_format($detalle->cargo_fijo, 2, ',', '.') }}
									</td>
									<td class="text-end">
										${{ number_format($detalle->consumo, 2, ',', '.') }}
									</td>
									<td class="text-end">
										${{ number_format($detalle->vertimiento, 2, ',', '.') }}
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			@endforeach
		@endforeach

		<div class="mt-4 text-center">
			<a href="{{ asset('docs/tarifas-coopsercont.pdf') }}" target="_blank" class="btn btn-outline-primary">
				Ver documento oficial en PDF
			</a>
		</div>
	</div>
@endsection
