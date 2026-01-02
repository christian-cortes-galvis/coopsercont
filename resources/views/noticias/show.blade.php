@extends('layouts.app')

@section('title', $news->titulo)

@section('content')
<div class="container">

    <article class="mb-5">

        <h2 class="fw-bold mb-2">
            {{ $news->titulo }}
        </h2>

        <p class="text-muted">
            Publicado el {{ $news->fecha_publicacion->format('d/m/Y') }}
        </p>

        @if($news->imagen)
            <img src="{{ asset('storage/'.$news->imagen) }}"
                 class="img-fluid my-3"
                 alt="{{ $news->titulo }}">
        @endif

        <div class="mt-4">
            {!! $news->contenido !!}
        </div>

    </article>

    <a href="{{ route('noticias.index') }}"
       class="btn btn-outline-primary">
        Volver a noticias
    </a>

</div>
@endsection
