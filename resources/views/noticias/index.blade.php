@extends('layouts.app')
@section('title', 'Noticias')
@section('meta_description', 'Consulta las noticias institucionales y comunicados oficiales de COOPSERCONT en El Contadero.')
@section('content')
    <div class="container">
        <h2 class="fw-bold text-center mb-3">
            NOTICIAS INSTITUCIONALES
        </h2>
        <p class="text-center text-muted mb-5">
            Información y comunicados oficiales de COOPSERCONT
        </p>
        @forelse($noticias as $noticia)
            <div class="card mb-4">
                <div class="card-body">

                    <h5 class="fw-bold">
                        {{ $noticia->titulo }}
                    </h5>

                    <small class="text-muted">
                        {{ $noticia->fecha_publicacion->format('d/m/Y') }}
                    </small>

                    <p class="mt-2">
                        {{ $noticia->resumen ?? Str::limit(strip_tags($noticia->contenido), 200) }}
                    </p>

                    <a href="{{ route('noticias.show', $noticia) }}" class="btn btn-sm btn-outline-primary">
                        Leer más
                    </a>

                </div>
            </div>
        @empty
            <div class="alert alert-info text-center">
                No hay noticias publicadas actualmente.
            </div>
        @endforelse

    </div>
@endsection
