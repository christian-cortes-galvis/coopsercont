@extends('layouts.app')

@section('title','Inicio')

@section('content')
<div class="container">

    {{-- HERO INSTITUCIONAL --}}
    <section class="text-center mb-5">
        <h1 class="fw-bold text-primary">
            COOPSERCONT
        </h1>
        <h4 class="mt-2">
            Comprometidos con el bienestar y el servicio del Contadero
        </h4>
        <p class="text-muted mt-3">
            Administración Pública Cooperativa del Contadero – Transparencia y
            servicio para la comunidad
        </p>
    </section>

    {{-- ACCESOS RÁPIDOS --}}
    <section class="mb-5">
        <div class="row g-4 text-center">

            <div class="col-md-4">
                <a href="{{ url('/servicios/acueducto') }}" class="card h-100 text-decoration-none">
                    <div class="card-body">
                        <h5 class="fw-bold">Acueducto</h5>
                        <p class="text-muted">
                            Suministro permanente de agua potable.
                        </p>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="{{ url('/servicios/alcantarillado') }}" class="card h-100 text-decoration-none">
                    <div class="card-body">
                        <h5 class="fw-bold">Alcantarillado</h5>
                        <p class="text-muted">
                            Manejo y disposición de aguas residuales.
                        </p>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="{{ url('/servicios/aseo') }}" class="card h-100 text-decoration-none">
                    <div class="card-body">
                        <h5 class="fw-bold">Aseo</h5>
                        <p class="text-muted">
                            Recolección y manejo de residuos sólidos.
                        </p>
                    </div>
                </a>
            </div>

        </div>
    </section>

    {{-- AVISOS DESTACADOS --}}
    <section class="mb-5">
        <h4 class="fw-bold mb-3">Avisos importantes</h4>

        <div class="alert alert-info">
            Consulte los horarios de recolección de residuos y participe en
            las campañas de ahorro de agua y cuidado del medio ambiente.
        </div>

        <a href="{{ url('/avisos') }}" class="btn btn-outline-primary btn-sm">
            Ver todos los avisos
        </a>
    </section>

    {{-- TRANSPARENCIA Y TARIFAS --}}
    <section class="mb-5">
        <div class="row g-4">

            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="fw-bold">Transparencia</h5>
                        <p class="text-muted">
                            Acceda a la información institucional, contractual,
                            presupuestal y normativa.
                        </p>
                        <a href="{{ url('/transparencia') }}" class="btn btn-sm btn-outline-primary">
                            Ir a Transparencia
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="fw-bold">Tarifas</h5>
                        <p class="text-muted">
                            Consulte las tarifas oficiales de los servicios públicos.
                        </p>
                        <a href="{{ url('/tarifas') }}" class="btn btn-sm btn-outline-primary">
                            Ver Tarifas
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ATENCIÓN AL CIUDADANO --}}
    <section class="mb-5 text-center">
        <h4 class="fw-bold mb-3">Atención al ciudadano</h4>
        <p class="text-muted">
            Para peticiones, quejas, reclamos, sugerencias o reportes de novedades,
            utilice nuestros canales oficiales.
        </p>

        <a href="{{ url('/reporte') }}" class="btn btn-primary">
            Realizar un reporte
        </a>
    </section>

</div>
@endsection
