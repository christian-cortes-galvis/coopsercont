@extends('layouts.app')
@section('title', 'Transparencia')
@section('meta_description', 'Información sobre transparencia y acceso a la información pública de COOPSERCONT en El Contadero.')
@section('content')
	<div class="container seccion-detalle">
		<h2 class="fw-bold mb-3 text-center text-azul">
			TRANSPARENCIA Y ACCESO A LA INFORMACIÓN
		</h2>
		<p class="text-center text-muted mb-4">
			En cumplimiento de los principios de transparencia, acceso a la información
			pública y rendición de cuentas.
		</p>
		<div class="row g-4">
			<div class="col-md-6">
				<div class="card h-100">
					<div class="card-body">
						<h5>Instrumentos de gestión</h5>
						<p>
							Información relacionada con la gestión documental y el acceso
							a la información pública.
						</p>
						<a href="{{ url('/transparencia/instrumentos') }}" class="btn btn-sm btn-outline-primary">
							Ver información
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card h-100">
					<div class="card-body">
						<h5>Trámites y servicios</h5>
						<p>
							Relación de trámites y servicios ofrecidos a la ciudadanía.
						</p>
						<a href="{{ url('/transparencia/tramites') }}" class="btn btn-sm btn-outline-primary">
							Ver trámites
						</a>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="card h-100">
					<div class="card-body">
						<h5>Contratación</h5>
						<p>
							Información contractual, planes y ejecución de contratos.
						</p>
						<a href="{{ url('/transparencia/contratacion/plan-anual') }}"
							class="btn btn-sm btn-outline-primary">
							Ver contratación
						</a>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="card h-100">
					<div class="card-body">
						<h5>Presupuesto</h5>
						<p>
							Estados financieros y ejecución presupuestal.
						</p>
						<a href="{{ url('/transparencia/presupuesto') }}" class="btn btn-sm btn-outline-primary">
							Ver presupuesto
						</a>
					</div>
				</div>
			</div>

			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<h5>Normatividad</h5>
						<p>
							Marco normativo aplicable a los servicios públicos domiciliarios.
						</p>
						<a href="{{ url('/transparencia/normatividad') }}" class="btn btn-sm btn-outline-primary">
							Ver normatividad
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
