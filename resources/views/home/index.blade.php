@extends('layouts.app')
@section('title', 'Inicio')
@section('meta_description', 'COOPSERCONT presta los servicios públicos de acueducto, alcantarillado y aseo en el
    municipio de El Contadero.')
@section('content')
    <div class="container">

        {{-- HERO --}}
        <section class="home-hero text-center mb-5">
            <h1 class="fw-bold text-primary">COOPSERCONT</h1>
            <h4 class="mt-2">
                Comprometidos con el bienestar y el servicio del Contadero
            </h4>
            <p class="text-muted mt-3">
                Administración Pública Cooperativa del Contadero - Transparencia y servicio
                para la comunidad
            </p>
        </section>

        {{-- SERVICIOS --}}
        <section class="mb-5">
            <div class="row g-4 text-center">
                <div class="col-md-4">
                    <a href="{{ url('/servicios/acueducto') }}" class="card h-100 text-decoration-none">
                        <div class="card-body">
                            <h5>Acueducto</h5>
                            <p class="text-muted">Suministro permanente de agua potable</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="{{ url('/servicios/alcantarillado') }}" class="card h-100 text-decoration-none">
                        <div class="card-body">
                            <h5>Alcantarillado</h5>
                            <p class="text-muted">Manejo de aguas residuales</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="{{ url('/servicios/aseo') }}" class="card h-100 text-decoration-none">
                        <div class="card-body">
                            <h5>Aseo</h5>
                            <p class="text-muted">Recolección de residuos sólidos</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        {{-- NOTICIAS --}}
        <section class="mb-5">
            <h4 class="fw-bold mb-3">Noticias institucionales</h4>

            <div class="row g-4">
                @forelse($noticias as $noticia)
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h6 class="fw-bold">
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
        <section class="mb-5">
            <h4 class="fw-bold mb-3">Avisos importantes</h4>

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
        <section class="mb-5">
            <div class="row g-4 text-center">

                <div class="col-md-4">
                    <a href="{{ url('/transparencia') }}" class="card h-100 text-decoration-none">
                        <div class="card-body">
                            <h5>Transparencia</h5>
                            <p class="text-muted">Información institucional y normativa</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="{{ url('/tarifas') }}" class="card h-100 text-decoration-none">
                        <div class="card-body">
                            <h5>Tarifas</h5>
                            <p class="text-muted">Tarifas oficiales vigentes</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="{{ url('/reporte') }}" class="card h-100 text-decoration-none">
                        <div class="card-body">
                            <h5>Reporte de novedades</h5>
                            <p class="text-muted">Reporte fallas de los servicios</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </div>
@endsection
